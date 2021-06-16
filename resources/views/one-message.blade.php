@extends('layouts.app')
@section('title-block'){{ $data->subject }}@endsection
@section('content')
    <div class="container">
    <h1 class="mt-5" style="text-align: center;">{{ $data->name }}</h1>
    <div class="alert alert-success container" role="alert">
        <p>{{ $data->subject }}</p>
        <p>{{ $data->message }}</p>
        <p>{{ $data->Email }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('contact-update', $data->id) }}">
            <button class="btn btn-warning">Редактировать</button>
        </a>
        <a href="{{ route('contact-delete', $data->id) }}">
            <button class="btn btn-danger">Удалить</button>
        </a>
    </div>
    </div>
    @endsection
