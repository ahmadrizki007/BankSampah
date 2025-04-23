@extends('templates.auth_layout')

@section('title')

    <title>Forgot Password</title>

@endsection

@section('main')

    @error('error')
        @include('errors/red', ['message' => $message])
    @enderror



@endsection