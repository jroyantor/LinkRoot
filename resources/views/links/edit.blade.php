@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Edit Link</h2>
                    <form action="{{url('/dashboard/links/').'/'.$link->id}}" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="name">Link Name</label>
                                <input type="text" name="name" value="{{ $link->name }}" 
                                placeholder="Your Twitter Username"
                                class="form-control {{ $errors->first('name') ? ' is-invalid' : '' }}">
                                @error('name')
                                    <span class="text-danger">{{$errors->first('name')}}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="link">Link URL</label>
                                <input type="text" name="link" value="{{ $link->link }}" placeholder="https://twitter.com/your_user_name"
                                class="form-control {{ $errors->first('link') ? ' is-invalid' : '' }}">
                                @error('link')
                                <span class="text-danger">{{$errors->first('link')}}
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">Update Link</button>
                                <button type="button" onclick="return confirmDelete();" class="btn btn-danger">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </form>

                    <form id="delete-form" action="{{url('/dashboard/links/').'/'.$link->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                 </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(){
            if(confirm("Are you sure to delete this?")){
                event.preventDefault();
                document.getElementById('delete-form').submit();
            }
        }
    </script>
@endsection