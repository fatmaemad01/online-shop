@extends('layouts.layout')
@section('content')

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />
<!-- Section -->

<section class="vh-lg-100 d-flex align-items-center">
    <div class="container main">
        <div class="row d-flex justify-content-center form-bg-image" data-background="{{asset('/assets/images/order2.jpg')}}">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-6 signin-inner my-3 my-lg-0 bg-white shadow-soft  border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <div class="row-12">
                            <div class="col-12">
                                <h1 class="mb-0 h3">
                                     Login
                                </h1>
                                <br />
                            </div>
                        </div>

                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="">
                            <div class="row-12">
                                <div class="col-12 "> <x-input-label for="email" :value="__('Email')" /></div>
                                <div class="col-12"> <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> </div>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="mt-4">
                            <div class="row-12">
                                <div class="col-12"><x-input-label for="password" :value="__('Password')" /></div>

                                <div class="col-12 "> <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" /> </div>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4 row-12">
                            <div class="col-12">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-4">

                            <div class="d-flex justify-content-center align-items-center mb-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="defaultCheck5">
                                        Don't have an account ? </label>
                                    <a href="{{route('register')}}" class=" text-right">Register</a>
                                </div>
                            </div>
                            <x-primary-button class=" ml-3" style="background-color: #3a8bcd; width:94%">
                                {{ __('Login') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endSection