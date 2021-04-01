@extends('layouts.master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">

                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{route('register')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>I have no account</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 " data-aos="zoom-out" data-aos-delay="200">
                    <h1 data-aos="fade-up marg-20">Login</h2>
                        <form action="{{route('login.store')}}" method="post">
                            @csrf

                            @error('message')
                              <span class="error">{{$errors->first()}}</span>
                            @endif

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


                            <div class="form-group marg-10">
                                <button class="btn btn-success" type="submit">Login</button>
                            </div>


                        </form>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

@stop
