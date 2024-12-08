@extends('admin/base.base')

@section('admin/content')

<section class="pt-5">
    <div class="container">
        @if ($series)
        <h1 class="text-4xl font-bold lg:mx-12">Edit Series</h1>
        <div class="w-full">
            <form action="{{ route('series.edit', $series->id) }}" class="mt-8" method="POST">
                @csrf
                @method('PUT')
                <div class="w-full lg:w-2/3 lg:mx-10">
                    <div class="w-full px-4 mb-4">
                        <label for="name" class="font-bold text-md">Name</label>
                        <input type="text" name="name" value="{{ $series->name }}" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="description" class="font-bold text-md">Description</label>
                        <textarea type="text" name="description" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">{{ $series->series_description }}</textarea>
                    </div>
                    <div class="w-full px-4 mt-8">
                        <button class="bg-cyan-300 hover:bg-cyan-500 w-full rounded-lg p-2" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
        @else
        <h1 class="text-4xl font-bold lg:mx-12">Add New Series</h1>
        <div class="w-full">
            <form action="{{ route('series.add') }}" class="mt-8" method="POST">
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-10">
                    <div class="w-full px-4 mb-4">
                        <label for="name" class="font-bold text-md">Nama</label>
                        <input type="text" name="name" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mb-4">
                        <label for="description" class="font-bold text-md">Description</label>
                        <textarea type="text" name="description" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black"></textarea>
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