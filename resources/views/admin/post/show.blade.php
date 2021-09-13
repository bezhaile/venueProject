@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ $post->Name_of_Venue }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/post') }}" title="Back"><button class="btn btn-secondary btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> </button></a>
                        <a href="{{ url('/admin/post/' . $post->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>

                        <form method="POST" action="{{ url('admin/post' . '/' . $post->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="far fa-trash-alt"></i></button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th> Name Of Venue </th><td> {{ $post->Name_of_Venue }} </td></tr>
                                    <tr><th> Location </th><td> {{ $post->location }} </td></tr>
                                    <tr><th> Number Of Sits </th><td> {{ $post->Number_of_sits }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
