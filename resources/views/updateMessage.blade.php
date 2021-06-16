@extends('layouts.app')
@section('title-block')Редактирование данных@endsection
@section('content')
<section class="container update-message mt-5">
    <h1>Редактирование данных</h1>

    <form action="{{ route('contact-form', $data->id) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $data->Email }}" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение">{{ $data->message }}</textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Обновить</button>
        </div>

    </form>
</section>
@endsection
