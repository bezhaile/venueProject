@extends('layouts.app')

@section('content')
        {{-- landing page --}}
        <div class="flex-center full-height">
            <div id="app" class="">
                <div class="content">
                    <div class="title m-b-md">
                        The Space Addis Project
                    </div>
                </div>
            </div>
        </div>
        {{-- Vebues page --}}
        <div class="container-fluid venue-dispaly" id="2">
            <div class="card-group">
                @foreach ($posts as $post)
                    <div class="card col-md-3" style="min-width: 20rem; margin:2px">
                            @foreach ($post->images as $img)
                                <img class="card-img-top" src="{{ asset('storage/images/'.$img->image) }}" width="286px" height="180px" alt="">
                            @endforeach
                                <div class="card-body">
                                    <h5 class="card-title">Name: {{ $post->Name_of_Venue }}</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"> Location: {{ $post->location }}</li>
                                            <li class="list-group-item">Number of Sits: {{ $post->Number_of_sits }}</li>
                                        </ul>
                                    <a href="tel:{{ $post->Name_of_Venue }}" class="btn btn-secondary">Call</a>
                                </div>

                    </div>
                @endforeach
            </div>
            <div class="flex-center">{{ $posts->onEachSide(5)->links() }} </div>
        </div>
        <div id="3" class="container fotter">
            <p>Addis ababa is a huge city with many venue options for people’s event needs. But finding a venue that is suitable for one’s needs among the thousands of venues in
                the city can be overwhelming and time consuming. This is where Space Addis comes
                in handy. Space Addis is an online venue booking system where people who want to
                organize events are presented with a wide variety of venue options from the comfort
                of their home. Users can pick a venue that caters to their venue needs with a filtering
                system that makes their experience customized and easy.</p>
        </div>
@endsection
