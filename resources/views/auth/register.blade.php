@extends('auth.login')

@section('content')

<div class="signup">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="chk" aria-hidden="true">Sign up</label>

        <!-- Name -->
        <input for="name" :value="__('Name')" id="name" type="text" name="name" :value="old('name')" required autocomplete="name" placeholder="Username" />

        <!-- Email Address -->
        <input for="email" :value="__('Email')" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />

        <!-- Password -->
        <input for="password" :value="__('Password')" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password" />

        <!-- Confirm Password -->
        <input for="password_confirmation" :value="__('Confirm Password')" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />

        <button type="submit">{{ __('Register') }}</button>
    </form>
</div>

@endsection