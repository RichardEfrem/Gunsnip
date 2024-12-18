@extends('admin/base.base')

@section('admin/content')

<section class="pt-5">
    <div class="container">
        @if ($gunpla)
        <h1 class="text-4xl font-bold lg:mx-12">Edit Gunpla</h1>
        <div class="w-full">
            <form action="{{ route('editproduct.submit', $gunpla->id) }}" class="mt-8" method="POST">
                @csrf
                @method('PUT')
                <div class="w-full lg:w-2/3 lg:mx-10">
                    <div class="w-full px-4 mb-4">
                        <label for="name" class="font-bold text-md">Name</label>
                        <input type="text" name="name" value="{{ $gunpla->name }}" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="description" class="font-bold text-md">Description</label>
                        <input type="text" name="description" value="{{ $gunpla->description }}" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="price" class="font-bold text-md">Price</label>
                        <input type="number" name="price" value="{{ $gunpla->price }}" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="release_date" class="font-bold text-md">Release Date</label>
                        <input type="date" name="release_date" value="{{ $gunpla->release_date }}" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="totalStock" class="font-bold text-md">Total Stock</label>
                        <input type="number" name="totalStock" value="{{ $gunpla->totalStock }}" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="series_id" class="font-bold text-md">Series</label>
                        <select id="series_id" name="series_id" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                        @foreach ($series as $serie)
                            <option value="{{ $serie->id }}" {{ $gunpla->series_id == $serie->id ? 'selected' : '' }}>{{ $serie->name }}</option>
                        @endforeach
                        </select>
                    </div><div class="w-full px-4 mb-4">
                        <label for="grade_id" class="font-bold text-md">Grade</label>
                        <select id="grade_id" name="grade_id" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}" {{ $gunpla->grade_id == $grade->id ? 'selected' : '' }}>{{ $grade->grade_name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="w-full px-4 mt-8">
                        <button class="bg-cyan-300 hover:bg-cyan-500 w-full rounded-lg p-2" type="submit">Update</button>
                    </div>
                    
                </div>
            </form>
        </div>
        @else
        <h1 class="text-4xl font-bold lg:mx-12">Add New Gunpla</h1>
        <div class="w-full">
            <form action="{{ route('addproduct.submit') }}" class="mt-8" method="POST">
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-10">
                    <div class="w-full px-4 mb-4">
                        <label for="name" class="font-bold text-md">Name</label>
                        <input type="text" name="name" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="description" class="font-bold text-md">Description</label>
                        <input type="text" name="description"  class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="price" class="font-bold text-md">Price</label>
                        <input type="number" name="price" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="release_date" class="font-bold text-md">Release Date</label>
                        <input type="date" name="release_date" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="totalStock" class="font-bold text-md">Total Stock</label>
                        <input type="number" name="totalStock" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="series_id" class="font-bold text-md">Series</label>
                        <select id="series_id" name="series_id" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                        @foreach ($series as $serie)
                            <option value="{{ $serie->id }}">{{ $serie->name }}</option>
                        @endforeach
                        </select>
                    </div><div class="w-full px-4 mb-4">
                        <label for="grade_id" class="font-bold text-md">Grade</label>
                        <select id="grade_id" name="grade_id" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->grade_name }}</option>
                        @endforeach
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