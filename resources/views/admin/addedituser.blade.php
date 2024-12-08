@extends('admin/base.base')

@section('admin/content')

<section class="pt-5">
    <div class="container">
        @if ($user)
        <h1 class="text-4xl font-bold lg:mx-12">Edit User</h1>
        <div class="w-full">
            <form action="{{ route('adminuser.update', $user->id) }}" class="mt-8" method="POST">
                @csrf
                @method('PUT')
                <div class="w-full lg:w-2/3 lg:mx-10">
                    <div class="w-full px-4 mb-4">
                        <label for="name" class="font-bold text-md">Nama</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="email" class="font-bold text-md">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="address" class="font-bold text-md">Address</label>
                        <input type="address" name="address" value="{{ $user->address }}" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="usertype" class="font-bold text-md">User Type</label>
                        <select id="usertype" name="usertype" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                            <option value="Admin" {{ $user->usertype == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Customer" {{ $user->usertype == 'Customer' ? 'selected' : '' }}>Customer</option>
                        </select>
                    </div>
                    <div class="w-full px-4 mt-8">
                        <button class="bg-cyan-300 hover:bg-cyan-500 w-full rounded-lg p-2" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
        @else
        <h1 class="text-4xl font-bold lg:mx-12">Add New User</h1>
        <div class="w-full">
            <form action="{{ route('admin.user.store') }}" class="mt-8" method="POST">
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-10">
                    <div class="w-full px-4 mb-4">
                        <label for="name" class="font-bold text-md">Nama</label>
                        <input type="text" name="name" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="email" class="font-bold text-md">Email</label>
                        <input type="email" name="email" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="address" class="font-bold text-md">Address</label>
                        <input type="address" name="address" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="password" class="font-bold text-md">Password</label>
                        <input type="password" name="password" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="password_confirmation" class="font-bold text-md">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="usertype" class="font-bold text-md">User Type</label>
                        <select id="usertype" name="usertype" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                            <option value="Admin">Admin</option>
                            <option value="Customer">Customer</option>
                        </select>
                    </div>
                    <div class="w-full px-4 mt-8">
                        <button class="bg-cyan-300 hover:bg-cyan-500 w-full rounded-lg p-2" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        @endif
    </div>
</section>

@endsection