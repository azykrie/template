@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-900">
        <div class="w-full max-w-md p-6 bg-gray-800 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-white mb-6">Register</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Name --}}
                <div class="mb-4">
                    <label for="name"
                        class="block text-sm font-medium {{ $errors->has('name') ? 'text-red-400' : 'text-white' }}">
                        Name
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                        class="appearance-none w-full px-4 py-2 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('name') ? 'ring-red-500 border-red-500' : 'focus:ring-blue-500 focus:border-blue-500' }}"
                        placeholder="Your name" />
                    @error('name')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label for="email"
                        class="block text-sm font-medium {{ $errors->has('email') ? 'text-red-400' : 'text-white' }}">
                        Email
                    </label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        class="appearance-none w-full px-4 py-2 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('email') ? 'ring-red-500 border-red-500' : 'focus:ring-blue-500 focus:border-blue-500' }}"
                        placeholder="you@example.com" />
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
                    <input type="password" name="password" id="password" required
                        class="appearance-none w-full px-4 py-2 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('password') ? 'ring-red-500 border-red-500' : 'focus:ring-blue-500 focus:border-blue-500' }}"
                        placeholder="••••••••" />
                    @error('password')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-white">
                        Confirm Password
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="appearance-none w-full px-4 py-2 phrounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="••••••••" />
                </div>

                <button type="submit"
                    class="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Register
                </button>
            </form>

            <p class="mt-4 text-center text-sm text-gray-400">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-blue-400 hover:underline">Login</a>
            </p>
        </div>
    </div>
@endsection
