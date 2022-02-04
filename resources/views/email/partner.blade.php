@component('mail::message')
# Hello Motongen Admin,

You have a new Partner Request  message with the below details:

@component('mail::table')
| Title         |   Body        | 
| ------------- |:-------------:| 
| Name          |{{$name}}      | 
| Phone Number  |{{$phone}}     |
| Email address |{{$email}}     |
| State         |{{$state}}     |
| City          |{{$city}}      |
| Workshop      |{{$workshop}}  |
| Address       |{{$address}}   |
| Notes         |{{$notes}}     |
@endcomponent

Thanks you,<br>
{{ config('app.name') }}
@endcomponent
