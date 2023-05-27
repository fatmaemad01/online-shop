@extends('layouts.layout')
@section('content')

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />
<!-- Section -->
<section class="vh-lg-90 d-flex align-items-center">
    <div class="container main">
        <div class="row justify-content-center form-bg-image" data-background="{{asset('/assets/images/order2.jpg')}}">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-6 signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <div class="row-12">
                            <div class="col-12">
                                <h1 class="mb-0 h3">
                                   Sign UP
                                </h1>
                                <br />
                            </div>
                        </div>

                    </div>
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <!-- Form -->
                        <div class="">
                            <div class="row-12">
                                <div class="col-12">
                                    <x-input-label for="name" :value="__('Name')" />
                                </div>
                                <div class="col-12">
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="mt-4 ">
                            <div class="row-12">
                                <div class="col-12 "> <x-input-label for="email" :value="__('Email')" /></div>
                                <div class="col-12"> <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> </div>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- End of Form -->

                        <div class="form-group">

                            <!-- Form -->
                            <div class="mt-4">
                                <div class="row-12">
                                    <div class="col-12"><x-input-label for="password" :value="__('Password')" /></div>

                                    <div class="col-12 "> <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" /> </div>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <!-- End of Form -->

                            <!-- Form -->
                            <div class="mt-4">
                                <div class="row-12">
                                    <div class="col-12"><x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                    </div>
                                    <div class="col-12">
                                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            </div>

                            <div class="d-flex justify-content-center align-items-center mb-4 mt-4">
                                <div class="form-check">

                                    <label class="form-check-label" for="defaultCheck5">
                                        Have an account ?
                                    </label>
                                    <a href="{{route('login')}}" class=" text-right">Login</a>
                                </div>
                            </div>

                        </div>
                        <x-primary-button class="ml-3" style="background-color: #3a8bcd; width:94%">
                            {{ __('Sign Up') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection