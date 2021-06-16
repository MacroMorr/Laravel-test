<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function submit(ContactRequest $req)
    {
        $contact = new Contact(); //Объект Contact на основе класса Contact
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        // Переадресация на главную страницу
        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    // Передача данных с таблицы
    public function allData() // Объект обращвется к функуии all
    {
        $contact = new Contact();
        return view('message',
            ['data'=>$contact->inRandomOrder()->take(3)->get()]);
    }

    // Демонстрация данных с базы данных (редактирование, удаление)
    public function showOneMessage($id){
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }

    // Редактирование данных пользователя
    public function updateMessage($id)
    {
        $contact = new Contact();
        return view('updateMessage',
            ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req)
    {

        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save(); //Объект $Contact обращается к функции save

        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');
    }

    // Удаление данных
    public function deleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')
            ->with('success', 'Сообщение было удалено');
    }

}


