@extends('layouts.master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">

                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{route('login')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>I just want to Login</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 " data-aos="zoom-out" data-aos-delay="200">
                    <h1 data-aos="fade-up">Register</h2>
                        <form action="{{route('register.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                @error('name')
                                 <span class="error"> {{ $message }}</span>
                                @enderror
                                <label for="name">Your name*</label>
                                <input value="{{old('name')}}"  name="name"  type="text" class="form-control" id="name">
                            </div>

                            <div class="form-group">
                                @error('lname')
                                    <span class="error"> {{ $message }}</span>
                                @enderror
                                <label for="lname">Your last name*</label>
                                <input type="text" class="form-control" id="lname" value="{{old('lname')}}"  name="lname">
                            </div>

                            <div class="form-group">
                                @error('email')
                                    <span class="error"> {{ $message }}</span>
                                @enderror
                                <label for="email">Your email*</label>
                                <input type="text" class="form-control" id="email" value="{{old('email')}}"  name="email">
                            </div>

                            <div class="form-group">
                                @error('password')
                                    <span class="error"> {{ $message }}</span>
                                @enderror
                                <label for="name">Password*</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="form-group">
                                @error('password.confirmed')
                                    <span class="error"> {{ $message }}</span>
                                @enderror
                                <label for="name">Repeat Password*</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            </div>

                            <div class="form-group marg-10">
                                <button class="btn btn-success" type="submit">Register</button>
                            </div>


                        </form>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

@stop
