@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                        @if(Session::get('success'))
                        <h3 class="text text-success text-center">{{ Session::get('success') }}</h3>
                        @endif

                        @if(Session::get('alert'))
                        <h3 class="text text-warning text-center">{{ Session::get('alert') }}</h3>
                        @endif
                <div class="card-body">
                    <h2 class="card-title">Your Links</h2>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Visits</th>
                                <th>Last Visit</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($links as $link)
                            <tr>
                                <th>{{ $link->name }}</th>
                                <th><a href="{{$link->link}}" target="_blank">{{ $link->link }}</a></th>
                                <th>0</th>
                                <th>Today</th>
                                <th><a href="/dashboard/links/{{$link->id}}">Edit</a></th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{url('dashboard/links/new')}}" class="btn btn-primary">Add New</a>
                </div>
            </div>
        </div>
    </div>
@endsection