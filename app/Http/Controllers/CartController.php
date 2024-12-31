<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Gunpla;
use App\Models\CartItem;
use App\Models\OrderHistory;
use Illuminate\Http\Request;
use App\Models\OrderHistoryItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // Get the currently logged-in user's ID

        // Fetch the cart for the user along with cart items and gunpla data
        $cart = Cart::with(['CartItem.gunpla.GunplaImage'])
            ->where('user_id', $userId)
            ->first();


        // Check if the cart exists
        if (!$cart) {
            return view('User/cart', ['cart' => null, 'cartItems' => []]);
        }

        // Return the cart and its items to the view
        return view('User/cart', [
            'cart' => $cart,
            'cartItems' => $cart->CartItem
        ]);
    }


    public function addToCart(Request $request)
    {
        $request->validate([
            'gunpla_id' => 'required|exists:gunpla,id', // Validate gunpla_id
            'quantity' => 'required|integer|min:1'      // Validate quantity
        ]);

        $userId = Auth::id(); // Get the currently logged-in user's ID

        // Fetch the cart for the user or create one if it doesn't exist
        $cart = Cart::firstOrCreate(
            ['user_id' => $userId],
            ['total_price' => 0] // Initialize total_price if creating a new cart
        );

        // Fetch the gunpla price
        $gunpla = Gunpla::findOrFail($request->gunpla_id);
        $gunplaPrice = $gunpla->price;

        // Calculate the subtotal for the requested quantity
        $subtotal = $gunplaPrice * $request->quantity;

        // Check if the item already exists in the cart
        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('gunpla_id', $request->gunpla_id)
            ->first();

        if ($cartItem) {
            // If the item exists, update the quantity and subtotal
            $cartItem->quantity += $request->quantity;
            $cartItem->subtotal += $subtotal;
            $cartItem->save();
        } else {
            // If the item doesn't exist, create a new cart item entry
            CartItem::create([
                'cart_id' => $cart->id,
                'gunpla_id' => $request->gunpla_id,
                'amount' => $request->quantity,
                'sub_total' => $subtotal
            ]);
        }

        // Update the cart's total price
        $cart->total_price += $subtotal;
        $cart->save();

        return redirect()->back()->with('success', 'Item added to cart successfully!');
    }

    public function removeItem($id)
    {
        // Find the cart item by its ID
        $cartItem = CartItem::findOrFail($id);

        $cartId = $cartItem->cart_id;

        // Get the associated cart
        $cart = Cart::findOrFail($cartId);

        // Subtract the item's subtotal from the cart total price
        $cart->total_price -= $cartItem->sub_total;

        // Ensure the total price does not go below zero (in case of calculation errors)
        $cart->total_price = max(0, $cart->total_price);

        // Save the updated cart total price
        $cart->save();

        // Delete the cart item from the database
        $cartItem->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Item removed from cart successfully!');
    }

    public function confirmOrder()
    {
        $userId = Auth::id(); // Get the currently logged-in user's ID

        // Fetch the user's cart along with cart items
        $cart = Cart::with('cartitem')->where('user_id', $userId)->first();

        if (!$cart || $cart->cartitem->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty. Please add items to proceed.');
        }

        // Fetch the user's shipping address
        $shippingAddress = Address::where('user_id', Auth::id())->first(); // Assuming the User model has a `shipping_address` field

        if (!$shippingAddress) {
            return redirect()->back()->with('error', 'Shipping address is missing in your profile. Please update it.');
        }

        // Create an entry in the orderhistory table
        $orderHistory = OrderHistory::create([
            'user_id' => $userId,
            'order_date' => now(),
            'delivery_date' => null, // Or set a default estimated delivery date
            'shipping_address' => $shippingAddress->address, // Use the shipping address from user data
            'status' => 'Pending', // Default status
            'total_price' => $cart->total_price,
        ]);

        // Loop through cart items and add them to the orderhistoryitem table
        foreach ($cart->CartItem as $cartItem) {
            OrderHistoryItem::create([
                'orderhistory_id' => $orderHistory->id,
                'gunpla_id' => $cartItem->gunpla_id,
                'total_items' => $cartItem->amount,
                'sub_total' => $cartItem->sub_total,
            ]);
        }

        // Clear the cart after order confirmation
        $cart->CartItem()->delete(); // Remove cart items
        $cart->update(['total_price' => 0]); // Reset cart total price

        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
}
