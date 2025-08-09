<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-3">
            <input type="email" name="email" placeholder="Enter your email address"
                   value="{{ old('email') }}"
                   class="w-full border border-red-400 px-4 py-2 rounded placeholder:text-red-400"
                   required autofocus autocomplete="username">
            @error('email')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <input type="password" name="password" placeholder="Password"
                   class="w-full border border-gray-300 px-4 py-2 rounded"
                   required autocomplete="current-password">
            @error('password')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="mb-3 flex items-center">
            <input id="remember_me" type="checkbox" name="remember" class="mr-2">
            <label for="remember_me" class="text-sm text-gray-600">Remember me</label>
        </div>

        <!-- Trouble Link -->
        <div class="mb-3 text-right text-sm">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-gray-700 underline">Trouble logging in?</a>
            @endif
        </div>

        <!-- Submit -->
        <button type="submit"
                class="w-full py-3 bg-black text-white rounded text-sm font-semibold">
            Sign In
        </button>
    </form>
</x-guest-layout>
