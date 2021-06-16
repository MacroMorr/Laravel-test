<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function (){
    return view('home');
})->name('home');// страница home

Route::get('/about', function (){
   return view('about');
})->name('about'); // Страница о Нас

Route::get('/contact', function(){
   return view('contact');
})->name('contact'); // Страница контактов

Route::get('/message', function(){
    return view('message');
})->name('message'); // Страница сообщения

// Получение данных из формы в базу данных
Route::post('/contact/submit',
    'ContactController@submit')
    ->name('contact-form');

// Отслеживание перехода пользователя на страницу
Route::get('/contact/all',
    'ContactController@allData')
    ->name('contact-data');

// Страница сообщений
Route::get(
    '/contact/all/{id}',
    'ContactController@showOneMessage')
    ->name('contact-data-one');


// Страница редактирования данных пользователя
Route::get('/contact/all/{id}/update',
    'ContactController@updateMessage')
    ->name('contact-update');

// Страница отредактированных данных
Route::post(
    '/contact/all/{id}/update',
    'ContactController@updateMessageSubmit')
    ->name('contact-update-submit');

// Удаление записи с базы данных
Route::get('contact/all/{id}/delete',
    'ContactController@deleteMessage')
    ->name('contact-delete');
