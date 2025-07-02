@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="w-full max-w-md bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white text-center">Login</h2>

        {{-- Menampilkan error umum jika ada --}}
        @if ($errors->any())
            <div class="mb-4 text-sm text-red-500 bg-red-100 dark:bg-red-900 dark:text-red-300 p-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Email --}}
            <div class="mb-4">
                <label for="email"
                    class="block text-sm font-medium {{ $errors->has('email') ? 'text-red-400' : 'text-white' }}">
                    Email
                </label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    class="appearance-none w-full px-4 py-2 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('email') ? 'ring-red-500 border-red-500' : 'focus:ring-blue-500 focus:border-blue-500' }}"
                    placeholder="you@example.com" required>
                @error('email')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label for="password"
                    class="block text-sm font-medium {{ $errors->has('password') ? 'text-red-400' : 'text-white' }}">
                    Password
                </label>
                <input type="password" name="password" id="password"
                    class="appearance-none w-full px-4 py-2 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('password') ? 'ring-red-500 border-red-500' : 'focus:ring-blue-500 focus:border-blue-500' }}"
                    placeholder="********" required>
                @error('password')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white rounded-md">
                Login
            </button>
        </form>

        <p class="mt-4 text-sm text-center text-gray-600 dark:text-gray-400">Belum punya akun?
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline dark:text-blue-400">Daftar</a>
        </p>
    </div>
</div>
@endsection
