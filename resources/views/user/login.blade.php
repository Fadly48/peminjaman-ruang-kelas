@extends('app')
@section('content')
<div class="p-8 bg-white rounded-lg shadow-md w-96 mx-auto mt-16">
    <h2 class="mb-6 text-2xl font-bold text-center">Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" required class="block w-full p-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="Email Anda">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" required class="block w-full p-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="Password Anda">
        </div>
        <button type="submit" class="w-full p-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">Login</button>
    </form>
    <div class="mt-4 text-center">
        <p class="text-sm text-gray-600">Belum punya akun?
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Daftar di sini</a>
        </p>
    </div>
</div>
@endsection
