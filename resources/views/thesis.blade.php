@extends('layout.app')

@section('content')
<x:notify::notify />
<!-- Main content header -->
<div
class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row"
>
<h1 class="text-2xl font-semibold whitespace-nowrap">Student Thesis Registration</h1>

</div>

<!-- Start Content -->
<form action="{{ route('thesis-new') }}" method="post" class="mt-8">
    @csrf

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="student_id" class="block text-gray-700 font-bold mb-2">Student ID</label>
            <input type="text" name="student_id" id="student_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('student_id') border-red-500 @enderror" 
                value="{{ old('student_id') }}">
            @error('student_id')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
            <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" 
                value="{{ old('email') }}">
            @error('email')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="firstName" class="block text-gray-700 font-bold mb-2">First Name</label>
            <input type="text" name="firstName" id="firstName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('firstName') border-red-500 @enderror" 
                value="{{ old('firstName') }}">
            @error('firstName')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="lastName" class="block text-gray-700 font-bold mb-2">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('lastName') border-red-500 @enderror" 
                value="{{ old('lastName') }}">
            @error('lastName')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="school" class="block text-gray-700 font-bold mb-2">School</label>
            <input type="text" name="school" id="school" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('school') border-red-500 @enderror" 
                value="{{ old('school') }}">
            @error('school')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="department" class="block text-gray-700 font-bold mb-2">Department</label>
            <input type="text" name="department" id="department" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('department') border-red-500 @enderror" 
                value="{{ old('department') }}">
            @error('department')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="program" class="block text-gray-700 font-bold mb-2">Program</label>
            <input type="text" name="program" id="program" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('program') border-red-500 @enderror" 
                value="{{ old('program') }}">
            @error('program')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="thesisTitle" class="block text-gray-700 font-bold mb-2">Thesis Title</label>
            <input type="text" name="thesisTitle" id="thesisTitle" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('thesisTitle') border-red-500 @enderror" 
                value="{{ old('thesisTitle') }}">
            @error('thesisTitle')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="keywords" class="block text-gray-700 font-bold mb-2">Thesis Keywords(separate by comma)</label>
            <input type="text" name="keywords" id="keywords" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('keywords') border-red-500 @enderror" 
                value="{{ old('keywords') }}">
            @error('keywords')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="researchArea" class="block text-gray-700 font-bold mb-2">Thesis Research Area</label>
            <input type="text" name="researchArea" id="researchArea" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('researchArea') border-red-500 @enderror" 
                value="{{ old('researchArea') }}">
            @error('researchArea')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <button type="submit" class="bg-red-700 hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">
        Submit
    </button>
</form>

@endsection