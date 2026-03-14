<x-mail::message>
# Новая заявка на консультацию

На сайте была оставлена новая заявка. Вот детали:

- **Имя:** {{ $consultation->name }}
- **Email:** {{ $consultation->email }}
- **Телефон:** {{ $consultation->phone }}
- **Компания:** {{ $consultation->company_name ?? 'Не указана' }}
- **Услуга:** {{ $consultation->service }}
- **Дата/Время:** {{ $consultation->preferred_date ? $consultation->preferred_date->format('d.m.Y') : '' }} {{ $consultation->preferred_time ?? '' }}

**Описание задачи:**

<x-mail::panel>
{{ $consultation->description ?? 'Без описания' }}
</x-mail::panel>

Вы можете связаться с клиентом для подтверждения деталей.

Спасибо,<br>
{{ config('app.name') }}
</x-mail::message>
