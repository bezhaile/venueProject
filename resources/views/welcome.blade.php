@extends('layouts.app')

@section('content')
        {{-- landing page --}}
        <div class="flex-center full-height">
            <div id="app" class="">
                <div class="content">
                    <div class="title m-b-md">
                        The Venue Project
                    </div>
                </div>
            </div>
        </div>
        {{-- Vebues page --}}
        <div class="container-fluid venue-dispaly">
            <div class="card-group">
                @foreach ($posts as $post)
                    <div class="card col-md-3" style="width: 18rem; margin:10px">
                            @foreach ($post->images as $img)
                                <img class="card-img-top" src="{{ asset('storage/images/'.$img->image) }}" width="286px" height="180px" alt="">
                            @endforeach
                                <div class="card-body">
                                    <h5 class="card-title">Name: {{ $post->Name_of_Venue }}</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"> Location: {{ $post->location }}</li>
                                            <li class="list-group-item">Number of Sits: {{ $post->Number_of_sits }}</li>
                                        </ul>
                                    <a href="#" class="btn btn-secondary">Vist</a>
                                </div>

                    </div>
                @endforeach
            </div>
        </div>
        <div class="container-fluid flex-center fotter">
            <h1>Footer here</h1>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
@endsection
