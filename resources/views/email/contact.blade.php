@component('mail::message')
# Hello Motongen Admin,

You have a new enquiry message with the below details:

@component('mail::table')
| Title         |   Body        | 
| ------------- |:-------------:| 
| Firstname     |{{$name}}      | 
| Phone Number  |{{$phone}}     |
| Email address |{{$email}}     |
| Car Brand     |{{$brand}}     |
| Car Model     |{{$model}}     |
| Year          |{{$year}}      |
| Part          |{{$part}}      |
| Notes         |{{$notes}}     |
@endcomponent


Thanks you,<br>
{{ config('app.name') }}
@endcomponent
