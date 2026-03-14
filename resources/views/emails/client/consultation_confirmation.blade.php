<x-mail::message>
# Ваша заявка принята!

Здравствуйте, {{ $consultation->name }}!

Мы получили вашу заявку на консультацию и скоро свяжемся с вами для подтверждения даты и времени встречи.

### Детали вашей заявки:
- **Услуга:** {{ $consultation->service }}
- **Предпочтительная дата:** {{ $consultation->preferred_date ? $consultation->preferred_date->format('d.m.Y') : 'Не указана' }}
- **Предпочтительное время:** {{ $consultation->preferred_time ?? 'Не указано' }}

Если у вас есть срочные вопросы, вы всегда можете связаться с нами по почте fortinform@gmail.com.

С уважением,<br>
Команда {{ config('app.name') }}
</x-mail::message>
