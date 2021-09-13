@extends('layouts.app')

@section('content')
        @foreach ($posts as $post)
            <p>This is Id {{ $post->id }}</p>
            <p>This is Name {{ $post->Name_of_Venue }}</p>

            <p>This is Location {{ $post->location }}</p>

            <p>This is Sits {{ $post->Number_of_sits }}</p>

            @foreach ($post->images as $img)
                <img src="{{ asset('storage/images/'.$img->image) }}" width="120px" height="60px" alt="">
                
            @endforeach



        @endforeach


        <script src="{{ asset('js/app.js') }}"></script>
@endsection
