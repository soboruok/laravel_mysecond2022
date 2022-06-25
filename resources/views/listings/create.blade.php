@extends('layout')

@section('content')
<section class="mainAbout my-5">
    <div class="container">
        <div class="showcase-form">
            <h2>Write List</h2>
            <form method="POST" action="/listings">
                {{-- stops cross-site scripting attacks --}}
                @csrf
                <div class="form-control">
                    Title:<input type="text" name="title">
                    @error('title') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Tags (Comma Separated):<input type="text" name="tags">
                    @error('tags') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Company:<input type="text" name="company">
                    @error('company') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Location:<input type="text" name="location">
                    @error('location') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Email:<input type="email" name="email">
                    @error('email') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Website:<input type="text" name="website">
                    @error('website') <p class="red">{{ $message }}</p> @enderror
                </div>
                <div class="form-control">
                    Description:<textarea cols="50" rows="10" name="description"></textarea>
                    @error('description') <p class="red">{{ $message }}</p> @enderror
                </div>
                <input type="submit" value="Send" class="btn btn-primary" />
            </form>
        </div>
    </div>
</section>
@endsection