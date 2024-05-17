@extends('website.auth.master')
@section('content')
    <form method="POST" action="{{ route('register') }}" style="background-color:white">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-2">
            <input type="email" id="form2Example1" class="form-control custom-input" placeholder="Enter Your Email"
                name="email" :value="old('email')" required autofocus autocomplete="username" />
        </div>
        <!-- Password input -->
        <div class="form-outline mb-4 ms-auto">
            <input type="password" id="form2Example2" class="form-control custom-input" placeholder="Password"
                name="password" required autocomplete="current-password" />
        </div>
        <div class="form-outline mb-4 ms-auto">
            <input type="password" id="form2Example2" class="form-control custom-input" placeholder="Password"
                name="password" required autocomplete="current-password" />
        </div>
        <button type="submit" class="btn-block mx-auto d-block mb-4 login-btn">
            {{ t('register') }}
        </button>
        <button type="button" class="btn btn-block mx-auto d-block mb-4 Sign-btn">
            {{ t('login') }} ?
        </button>
    </form>
@endsection
