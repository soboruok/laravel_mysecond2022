@extends('layout')

@section('content')
<section class="mainAbout my-5">
    <div class="container">
        <div class="showcase-form">
            <h2>Edit Page</h2>
            <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
                {{-- stops cross-site scripting attacks --}}
                @csrf
                {{-- 수정하겠다는 의미인 PUT request를 보낸다. --}}
                @method('PUT')
                <div class="form-control">
                    Title:<input type="text" name="title" value="{{$listing->title}}" />
                    @error('title') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Tags (Comma Separated):<input type="text" name="tags" value="{{$listing->tags}}" />
                    @error('tags') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Company:<input type="text" name="company" value="{{$listing->company}}" />
                    @error('company') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Location:<input type="text" name="location" value="{{$listing->location}}" />
                    @error('location') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Email:<input type="email" name="email" value="{{$listing->email}}" />
                    @error('email') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Website:<input type="text" name="website" value="{{$listing->website}}" />
                    @error('website') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Logo:<input type="file" name="logo" />
                    <img src="{{$listing->logo ? asset('storage/'.$listing->logo) : Null }}" alt="" /> 
                    @error('logo') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Description:<textarea cols="50" rows="10" name="description">{{$listing->description}}</textarea>
                    @error('description') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="mainFeedback">
                    <a href="/" class="btn btn-light"> Back </a>
                    <input type="submit" value="Update" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</section>
@endsection