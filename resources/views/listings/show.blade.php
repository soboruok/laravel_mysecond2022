@extends('layout')

@section('content')
    <section class="mainAbout my-1">
        <div class="container">
            <div class="showcase-form">
                <div class="mainFeedback">
                    <h2>View Page</h2>
                    <div class="flex">
                        <span>
                            <a href="/listings/{{$listing->id}}/edit" class="btn btn-dark"> Edit </a>
                        </span>
                        <span class="px-2"><a href="/listings" class="btn btn-light"> Back </a></span>
                    </div>
                </div>
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
            

        </div>
    </section>
@endsection