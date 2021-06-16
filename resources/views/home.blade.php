@extends('layouts.app')<!-- Наследование от общего шаблона HTML -->

@section('title-block')Главная страница@endsection

@section('content') <!-- В какую секцию основного шаблона HTML встраивается данный код -->
    <div class="container mt-5">
    <h2 class="text-center my-4">Добро пожаловать на сайт</h2>
    <p>Для того, чтобы добавить информацию в базу данных, откройте раздел "Контакты" и заполните форму!</p>
    </div>
@endsection
