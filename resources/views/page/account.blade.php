@extends('layout.default')

@section('content')
<div class="columns">
    <div class="column-main">
        <div class="login-container desktop-header">
            <h1 class="page-title title-font flex">
                <div class="base w-full md:w-1/2 p-4 mr-4 pt-8 pb-0 pl-0" data-ui-id="page-title-wrapper">
                    Customer Login
                </div>
                <div class="base p-4 w-full md:w-1/2 my-8 md:my-0 pt-8 pb-0 pl-0" data-ui-id="page-title-wrapper">
                    Create New Customer Account
                </div>
            </h1>
        </div>
    </div>
</div>

<div class="columns">
    <div class="column main">
        <div id="customer-login-container" class="login-container">
            <div class="w-full md:w-1/2 card mr-4">
                <div aria-labelledby="block-customer-login-heading">
                    @if (session('success'))
                    <div class="alert alert-success text-green-500">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form id="login-form" method="POST" action="{{ route('login.post') }}" novalidate>
                        @csrf
                        <div class="field">
                            <label class="label" for="email">
                                <span>Email</span>
                            </label>
                            <div class="control">
                                <input data-test="login-email" name="email" class="form-input" required value="{{ old('email') }}" autocomplete="email" id="email" type="email" title="Email">
                                @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label for="pass" class="label">
                                <span>Password</span>
                            </label>
                            <div class="control">
                                <input data-test="login-password" name="password" class="form-input" required autocomplete="off" id="pass" title="Password" type="password">
                                @error('password')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="actions-toolbar flex justify-between pt-6 pb-2 items-center">
                            <button data-test="login-submit" type="submit" class="btn btn-primary disabled:opacity-75" name="send">
                                <span>Sign In</span>
                            </button>
                            <a class="underline underline-txt" href="#">
                                <span>Forgot Your Password?</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card w-full md:w-1/2 my-8 md:my-0">
                <div>
                    <form id="register-form" method="POST" action="{{ route('register.post') }}" novalidate>
                        @csrf
                        <div class="field">
                            <label class="label" for="first_name">
                                <span>First Name</span>
                            </label>
                            <div class="control">
                                <input data-test="register-firstName" name="first_name" class="form-input" required value="{{ old('first_name') }}" autocomplete="given-name" id="first_name" type="text" title="First Name">
                                @error('first_name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="last_name">
                                <span>Last Name</span>
                            </label>
                            <div class="control">
                                <input data-test="register-lastName" name="last_name" class="form-input" required value="{{ old('last_name') }}" autocomplete="family-name" id="last_name" type="text" title="Last Name">
                                @error('last_name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="register_email">
                                <span>Email</span>
                            </label>
                            <div class="control">
                                <input data-test="register-email" name="email" class="form-input" required value="{{ old('email') }}" autocomplete="email" id="email" type="email" title="Email">
                                @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="password">
                                <span>Password</span>
                            </label>
                            <div class="control">
                                <input data-test="register-password" name="password" class="form-input" required autocomplete="new-password" id="password" type="password" title="Password">
                                @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="password_confirmation">
                                <span>Confirm Password</span>
                            </label>
                            <div class="control">
                                <input data-test="register-passwordConfirm" name="password_confirmation" class="form-input" required autocomplete="new-password" id="password_confirmation" type="password" title="Confirm Password">
                                @error('password_confirmation')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label class="checkbox">
                                <input data-test="register-newsletter" type="checkbox" name="subscribed" id="newsletter" value="1" {{ old('subscribed') ? 'checked' : '' }}>
                                <span>Sign Up for Newsletter</span>
                            </label>
                        </div>
                        <div class="actions-toolbar flex justify-between pt-6 pb-2 items-center">
                            <button data-test="register-submit" type="submit" class="btn btn-primary disabled:opacity-75" name="send">
                                <span>Create an Account</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission
        const email = document.getElementById('login_email').value;
        const password = document.getElementById('pass').value;
        console.log('Login Form Data:', { email, password });
    });

    document.getElementById('register-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission
        const firstName = document.getElementById('first_name').value;
        const lastName = document.getElementById('last_name').value;
        const email = document.getElementById('register_email').value;
        const password = document.getElementById('password').value;
        const passwordConfirmation = document.getElementById('password_confirmation').value;
        const subscribed = document.getElementById('newsletter').checked;
        console.log('Register Form Data:', { firstName, lastName, email, password, passwordConfirmation, subscribed });
    });
</script> -->
@stop