@extends('layouts.master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">

                <div class="col-lg-12 " data-aos="zoom-out" data-aos-delay="200">
                    <h1 data-aos="fade-up">Contact form</h2>
                        <form action="{{route('contacts.store')}}" method="post">
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


                            <div class="form-group marg-10">
                                <button class="btn btn-success" type="submit">Send</button>
                            </div>


                        </form>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

@stop
