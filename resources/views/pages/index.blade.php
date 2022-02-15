@extends('layouts.main-layout')
@section('content')

    @auth
        {{-- create new postcard --}}
        <div class="create my-5">
            <button class="btn btn-primary"><a href="{{route('create')}}">Create Postcard</a></button>
        </div>

        <postcard-component></postcard-component>
    @endauth
@endsection
