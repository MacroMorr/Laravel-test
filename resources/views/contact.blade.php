@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Страница контактов</h2>


    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-check-label" for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-check-label" for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-check-label" for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>

    </form>
</div>

    @endsection
