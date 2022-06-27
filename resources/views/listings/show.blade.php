@extends('layout')

@section('content')
    <section class="mainAbout my-1">
        <div class="container">
            <div class="showcase-form">
                <div class="mainFeedback">
                    <h2>View Page</h2>
                    <div class="flex">
                        <form method="POST" action="/listings/{{$listing->id}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-dark" />
                        </form>
                        <span class="px-1"><a href="/" class="btn btn-light"> Back </a></span>
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

            <div class="text-center">
                
                <span>
                    <a href="/listings/{{$listing->id}}/edit" class="btn btn-primary"> 
                        Edit
                    </a>
                </span>
            </div>
            

        </div>
    </section>
@endsection