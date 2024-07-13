@extends('layout.app')

@section('content')
<x:notify::notify />
<!-- Main content header -->
<div
class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row"
>
<h1 class="text-2xl font-semibold whitespace-nowrap">Examiner Registration</h1>

</div>

<!-- Start Content -->
<form action="{{ route('examiner-new') }}" method="post" class="mt-8">
    @csrf

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
            <input type="text" name="title" id="student_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror" 
                value="{{ old('title') }}">
            @error('title')
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
            <label for="middleName" class="block text-gray-700 font-bold mb-2">Middle Name</label>
            <input type="text" name="middleName" id="middleName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('middleName') border-red-500 @enderror" 
                value="{{ old('middleName') }}">
            @error('middleName')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="lastName" class="block text-gray-700 font-bold mb-2">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('lastName') border-red-500 @enderror" 
                value="{{ old('lastName') }}">
            @error('lastName')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="school" class="block text-gray-700 font-bold mb-2">School</label>
            <input type="text" name="school" id="school" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('school') border-red-500 @enderror" 
                value="{{ old('school') }}">
            @error('school')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="department" class="block text-gray-700 font-bold mb-2">Department</label>
            <input type="text" name="department" id="department" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('department') border-red-500 @enderror" 
                value="{{ old('department') }}">
            @error('department')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="gender" class="block text-gray-700 font-bold mb-2">Gender</label>
            <input type="text" name="gender" id="gender" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('gender') border-red-500 @enderror" 
                value="{{ old('gender') }}">
            @error('gender')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
            <input type="text" name="status" id="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('status') border-red-500 @enderror" 
                value="{{ old('status') }}">
            @error('status')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="researchArea" class="block text-gray-700 font-bold mb-2">Research Area</label>
            <input type="text" name="researchArea" id="researchArea" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('researchArea') border-red-500 @enderror" 
                value="{{ old('researchArea') }}">
            @error('researchArea')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="areaExpertise" class="block text-gray-700 font-bold mb-2">Area of Expertise</label>
            <input type="text" name="areaExpertise" id="areaExpertise" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('areaExpertise') border-red-500 @enderror" 
                value="{{ old('areaExpertise') }}">
            @error('areaExpertise')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="keywords" class="block text-gray-700 font-bold mb-2">Keywords(separate by comma)</label>
            <input type="text" name="keywords" id="keywords" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('keywords') border-red-500 @enderror" 
                value="{{ old('keywords') }}">
            @error('keywords')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="MajResearchArea" class="block text-gray-700 font-bold mb-2">Major Research Area</label>
            <input type="text" name="MajResearchArea" id="MajResearchArea" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('MajResearchArea') border-red-500 @enderror" 
                value="{{ old('MajResearchArea') }}">
            @error('MajResearchArea')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="MinResearchArea" class="block text-gray-700 font-bold mb-2">Minor Research Area</label>
            <input type="text" name="MinResearchArea" id="MinResearchArea" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('MinResearchArea') border-red-500 @enderror" 
                value="{{ old('MinResearchArea') }}">
            @error('MinResearchArea')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <button type="submit" class="bg-red-700 hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">
        Submit
    </button>
</form>

@endsection