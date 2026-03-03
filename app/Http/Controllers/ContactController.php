<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Импортируем модель

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Валидация данных (хорошая практика, добавим позже, если нужно)
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        // Создание новой записи в базе данных
        Contact::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ]);

        // Возвращаем пользователя назад с сообщением об успехе
        return back()->with('success', 'Заявка принята! Мы свяжемся с вами в ближайшее время.');
    }
}
