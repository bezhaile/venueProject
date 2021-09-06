@extends('layouts.app')

@section('content')
        <div class="flex-center full-height">

            <div id="app" class="">
                <div class="content">
                    <div class="title m-b-md">

                        The Venue Project
                    </div>

                </div>
            </div>

        </div>
        <div class="container-fluid flex-center venue-dispaly">
            <h1>Venue Display here</h1>
        </div>
        <div class="container-fluid flex-center fotter">
            <h1>Footer here</h1>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
@endsection
