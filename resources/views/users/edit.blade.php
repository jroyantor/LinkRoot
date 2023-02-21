@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card px-5 py-5">
            <h2 class="card-title">Edit Settings</h2>
                    <form action="{{url('/dashboard/settings/')}}" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="background_color">Background Color</label>
                                <input type="text" name="background_color" value="{{$user->background_color}}"
                                placeholder="Your Page's Background Color in hex e.g. #000000"
                                class="form-control {{ $errors->first('background_color') ? ' is-invalid' : '' }}">
                                @error('name')
                                    <span class="text-danger">{{$errors->first('background_color')}}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="text_color">Text Color</label>
                                <input type="text" name="text_color" value="{{$user->text_color}}" placeholder="Text Color in hex"
                                class="form-control {{ $errors->first('text_color') ? ' is-invalid' : '' }}">
                                @error('link')
                                <span class="text-danger">{{$errors->first('text_color')}}
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">Update Settings</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection