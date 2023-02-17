@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Add a new Link</h2>
                    <form action="{{url('dashboard/links/new')}}" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="name">Link Name</label>
                                <input type="text" name="name" placeholder="My Github Account" class="form-control {{ $errors->first('name') ? ' is-invalid' : '' }}">
                                @error('name')
                                    <span class="text-danger">{{$errors->first('name')}}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="link">Link URL</label>
                                <input type="text" name="link" placeholder="https://github.com/my-github-link" class="form-control {{ $errors->first('link') ? ' is-invalid' : '' }}">
                                @error('link')
                                <span class="text-danger">{{$errors->first('link')}}
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Add New Link</button>
                            </div>
                        </div>
                    </form> 
                    
                 </div>
            </div>
        </div>
    </div>
@endsection