@extends('layout')

@section('content')
@include('partials._search')
    <section class="mainAbout my-1">
        <div class="container">
            <div class="showcase-form">
                <h2>List</h2>
                <div class="text-right">
                    <button class="btn btn-primary"><a href="listings/create">Creat List</a></button>
                </div>
                <table class="text-center">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @unless (count($listings) == 0)
                        @foreach ($listings as $item)
                            {{-- x-theNameoftheComponent --}}
                            {{-- we will pass the variable which is $item --}}
                            {{-- props로 전달되는것에 : 붙힌다. --}}
                            <x-listingCard :listing="$item" />
                        @endforeach
                    @else 
                        @if(count($listings) == 0)
                            <p>No listings found</p>
                        @endif
                    @endunless
                    </tbody>
                </table>
                <div class="text-center">
                    {{ $listings->links() }}
                </div>

            </div>

        </div>
    </section>
@endsection