@extends('layout')

@section('content')
    <section class="mainAbout my-1">
        <div class="container">
            <div class="showcase-form">
                <h2>List</h2>
                <table class="text-center">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HeeYoung</td>
                            <td>{{$listing->title}}</td>
                            <td>5/5/2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <button class="btn btn-primary">Leave Feedback</button>
            </div>
        

        </div>
    </section>
@endsection