@extends('admin/base.base')

@section('admin/content')

<section class="pt-5">
    <div class="container">
        <h1 class="text-4xl font-bold lg:mx-12">Add New Grade</h1>
        <div class="w-full">
            <form action="{{ route('addgrade.submit') }}" class="mt-8" method="POST">
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-10">
                    <div class="w-full px-4 mb-4">
                        <label for="grade_name" class="font-bold text-md">Grade Name</label>
                        <input type="text" name="grade_name" class="w-full 
                        bg-slate-200 text-secondary p-3 rounded-md 
                        focus:outline-none focus:ring-black focus:ring-1 focus:border-black">
                    </div>
                    <div class="w-full px-4 mt-8">
                        <button class="bg-cyan-300 hover:bg-cyan-500 w-full rounded-lg p-2" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection