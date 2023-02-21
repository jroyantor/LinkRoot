@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="link">
                @foreach($user->links as $link)
                <a
                href="{{ $link->link}}"
                class = "d-block p-4 mb-4 rounded h3 text-center"
                target="_blank"
                style="border: 2px solid {{ $user->text_color }}; color: {{ $user->text_color}};"
                >
                {{$link->name}}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection