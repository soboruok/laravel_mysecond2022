@extends('layout')

@section('content')
    <section class="mainAbout my-5">
        <div class="container">
            <div class="showcase-form card">
                <h2>Register Member</h2>
                <form method="POST" action="/users">
                    @csrf
                    <div class="form-control">
                        <input type="text" name="name" placeholder="Name" value="{{old('name')}}" />
                        @error('name') <p class="red">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" placeholder="Email" value="{{old('email')}}" />
                        @error('email') <p class="red">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-control">
                        <input type="password" name="password" placeholder="password" value="{{old('password')}}" />
                        @error('password') <p class="red">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-control">
                        <input type="password" name="password_confirmation" placeholder="password Confirmation" value="{{old('password_confirmation')}}" />
                        @error('password_confirmation') <p class="red">{{ $message }}</p> @enderror
                    </div>
                   
                    <div class="form-control">
                        <input type="submit" value="Sign Up" class="btn btn-primary" />
                    </div>
                    <p>
                        Already have an account?
                        <a href="/login" class="btn btn-light">Login</a>
                    </p>
                </form>
            </div>

        </div>
    </section>
@endsection