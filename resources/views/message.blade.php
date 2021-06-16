@extends('layouts.app')
@section('title-block')Все сообщения@endsection
@section('content')
    <div class="container mt-5">
        <h2 class="text-center my-4">Полученные сообщения</h2>
    </div>

    @foreach($data as $el)
        <div class="alert alert-success container" role="alert">
            <div style="margin-left: 20px;">
            <h3>{{ $el->name }}</h3>
            <p>{{ $el->Email }}</p>
            <p>{{ $el->subject }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $el->id) }}">
                <button class="btn btn-warning">Детальнее</button></a>
            </div>
        </div>
    @endforeach
@endsection
