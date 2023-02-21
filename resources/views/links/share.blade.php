@extends('layouts.links')

@section('content')
<div class="container py-5">
    <h2 class="text text-center p-3" style="color: {{ $user-> text_color}};">{{$user->name}} 's Links</h2>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="link">
                @foreach($user->links as $link)
                <a
                href="{{ $link->link}}"
                data-link-id = "{{ $link->id }}"
                class = "d-block p-4 mb-4 rounded h3 text-center link-target"
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