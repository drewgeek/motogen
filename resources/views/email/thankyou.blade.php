@component('mail::message')
# Hello {{$firstname}},

Thank you for contacting Motongen. This is to acknowledge receipt of your message.

We will respond as soon as possible. However, you can call or chat us on +234 (0)817 093 9116 if it is urgent.

Kind regards,<br>
{{ config('app.name') }}
@endcomponent
