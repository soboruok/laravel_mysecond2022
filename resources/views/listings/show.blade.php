@extends('layout')

@section('content')
    <section class="mainAbout my-1">
        <div class="container">
            <div class="showcase-form">
                <h2>List</h2>
               
                <table class="text-center">
                    <tr>
                        <th>Title</th>
                        <td>{{$listing->title}}</td>
                    </tr>
                    <tr>
                        <th>Logo</th>
                        <td>
                            <img src="{{$listing->logo ? asset('storage/'.$listing->logo) : Null }}" alt="" />
                        </td>
                    </tr>
                    <tr>
                        <th>company</th>
                        <td>{{$listing->company}}</td>
                    </tr>
                    <tr>
                        <th>location</th>
                        <td>{{$listing->location}}</td>
                    </tr>
                    <tr>
                        <th>website</th>
                        <td>{{$listing->website}}</td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td>{{$listing->email}}</td>
                    </tr>
                    <tr>
                        <th>tags</th>
                        <td>{{$listing->tags}}</td>
                    </tr>
                    <tr>
                        <th>description</th>
                        <td>{{$listing->description}}</td>
                    </tr>
                </table>
            </div>
            <div class="mainSearch">
                <a href="/listings" class="btn btn-dark"> Back </a>
            </div>

        </div>
    </section>
@endsection