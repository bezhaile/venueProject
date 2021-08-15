@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">imagesOfVenue {{ $imagesofvenue->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/images-of-venue') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/images-of-venue/' . $imagesofvenue->id . '/edit') }}" title="Edit imagesOfVenue"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/imagesofvenue' . '/' . $imagesofvenue->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete imagesOfVenue" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $imagesofvenue->id }}</td>
                                    </tr>
                                    <tr><th> Name Of Venue </th><td> {{ $imagesofvenue->Name_of_Venue }} </td></tr><tr><th> Location </th><td> {{ $imagesofvenue->location }} </td></tr><tr><th> Number Of Sits </th><td> {{ $imagesofvenue->Number_of_sits }} </td> <tr> </tr><th> Uploade Images </th><td> {{ $imagesofvenue->Uploade_Images }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
