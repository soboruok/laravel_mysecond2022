@extends('layout')

@section('content')
<section class="mainAbout my-5">
    <div class="container">
        <div class="showcase-form">
            <h2>Write List</h2>
            <form method="POST" action="/listings" enctype="multipart/form-data">
                {{-- stops cross-site scripting attacks --}}
                @csrf
                <div class="form-control">
                    Title:<input type="text" name="title" value="{{old('title')}}" />
                    @error('title') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Tags (Comma Separated):<input type="text" name="tags" value="{{old('tags')}}" />
                    @error('tags') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Company:<input type="text" name="company" value="{{old('company')}}" />
                    @error('company') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Location:<input type="text" name="location" value="{{old('location')}}" />
                    @error('location') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Email:<input type="email" name="email" value="{{old('email')}}" />
                    @error('email') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Website:<input type="text" name="website" value="{{old('website')}}" />
                    @error('website') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Logo:<input type="file" name="logo" value="{{old('logo')}}" />
                    @error('logo') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Description:<textarea cols="50" rows="10" name="description">{{old('location')}}</textarea>
                    @error('description') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="mainFeedback">
                    <a href="/" class="btn btn-light"> Back </a>
                    <input type="submit" value="Send" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</section>
@endsection