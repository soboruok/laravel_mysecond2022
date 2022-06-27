@extends('layout')

@section('content')
    <section class="mainAbout my-5">
        <div class="container">
            <div class="showcase-form card">
                <h2>login</h2>
                <form method="POST" action="/users/authenticate">
                    @csrf
                    
                    <div class="form-control">
                        <input type="email" name="email" placeholder="Email" value="{{old('email')}}" />
                        @error('email') <p class="red">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-control">
                        <input type="password" name="password" placeholder="password" value="{{old('password')}}" />
                        @error('password') <p class="red">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="form-control">
                        <input type="submit" value="Login" class="btn btn-primary" />
                    </div>
                    <p>
                        Don't have an account?
                        <a href="/register" class="btn btn-light">Register</a>
                    </p>
                </form>
            </div>

        </div>
    </section>
@endsection