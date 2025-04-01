@extends('layout.default')

@section('content')
<div class="columns">
    <div class="column-main">
        <div class="login-container">
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
                    <form method="POST" action="{{ route('form.submit') }}" class="form form-login"
                        action="{{ url('login') }}"
                        method="post"
                        id="customer-login-form"
                        novalidate>
                        @csrf
                        <fieldset class="fieldset login">
                            <legend class="mb-3">
                                <h2 class="text-xl font-medium title-font text-primary">
                                    Login
                                </h2>
                            </legend>
                            <div class="text-secondary-darker mb-8 w-81">
                                If you have an account, sign in with your email address.
                            </div>
                            <div class="field">
                                <label class="label" for="email">
                                    <span>Email</span>
                                </label>
                                <div class="control">
                                    <input data-test="login-email" name="email" class="form-input" required value="{{ old('email') }}" autocomplete="email" id="email" type="email" title="Email">
                                    @if ($errors->has('email'))
                                    <p class="text-red-500 text-sm mt-1">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label for="pass" class="label">
                                    <span>Password</span>
                                </label>
                                <div class="control flex items-center">
                                    <input data-test="login-password" name="password" class="form-input" required=""
                                        autocomplete="off" id="pass" title="Password" type="password">
                                    <div class="cursor-pointer px-4" aria-label="Show Password">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" class="w-5 h-5" width="24" height="24">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
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
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="card w-full md:w-1/2 my-8 md:my-0">
                <div>
                    <form method="POST" action="{{ route('form.submit') }}" class="form form-login"
                        action="{{ url('login') }}"
                        method="post"
                        id="customer-login-form"
                        novalidate>
                        @csrf
                        <fieldset class="fieldset login">
                            <legend class="mb-3">
                                <h2 class="text-xl font-medium title-font text-primary">
                                    Personal Information
                                </h2>
                            </legend>
                            <div class="field">
                                <label class="label" for="name">
                                    <span>First Name</span>
                                </label>
                                <div class="control">
                                    <input data-test="register-firstName" name="first_name" class="form-input" required value="{{ old('first_name') }}" autocomplete="given-name" id="first_name" type="text" title="First Name">
                                    @if ($errors->has('email'))
                                    <p class="text-red-500 text-sm mt-1">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label for="last_name" class="label">
                                    <span>Last Name</span>
                                </label>
                                <div class="control">
                                    <input data-test="register-lastName" name="last_name" class="form-input" required=""
                                        autocomplete="off" id="last_name" title="Last Name" type="text">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset login">
                            <legend class="mb-3">
                                <h2 class="text-xl font-medium title-font text-primary">
                                    Sign-in Information
                                </h2>
                            </legend>
                            <div class="field">
                                <label class="label" for="email">
                                    <span>Email</span>
                                </label>
                                <div class="control">
                                    <input data-test="register-email" name="email" class="form-input" required value="{{ old('email') }}" autocomplete="email" id="email" type="email" title="Email">
                                    @if ($errors->has('email'))
                                    <p class="text-red-500 text-sm mt-1">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label for="pass" class="label">
                                    <span>Password</span>
                                </label>
                                <div class="control flex items-center">
                                    <input data-test="register-password" name="password" class="form-input" required=""
                                        autocomplete="off" id="pass" title="Password" type="password">
                                    <div class="cursor-pointer px-4" aria-label="Show Password">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" class="w-5 h-5" width="24" height="24">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label for="pass" class="label">
                                    <span>Confirm Password</span>
                                </label>
                                <div class="control flex items-center">
                                    <input data-test="register-passwordConfirm" name="password" class="form-input" required=""
                                        autocomplete="off" id="pass" title="Password" type="password">
                                    <div class="cursor-pointer px-4" aria-label="Show Password">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" class="w-5 h-5" width="24" height="24">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="checkbox">
                                    <input
                                        type="checkbox"
                                        name="newsletter"
                                        id="newsletter"
                                        value="1"
                                        data-test="register-newsletter"
                                        {{ old('newsletter') ? 'checked' : '' }}>
                                    <span>Sign Up for Newsletter</span>
                                </label>
                            </div>

                            <div class="actions-toolbar flex justify-between pt-6 pb-2 items-center">
                                <button data-test="register-submit" type="submit" class="btn btn-primary disabled:opacity-75" name="send">
                                    <span>Create an Account</span>
                                </button>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop