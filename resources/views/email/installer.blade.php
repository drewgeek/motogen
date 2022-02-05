@component('mail::message')
# Hello Motongen Admin,

You have a new Find an Installer message with the below details:

@component('mail::table')
| Title         |   Body        | 
| ------------- |:-------------:| 
| Name          |{{$name}} | 
| Phone Number  |{{$phone}}     |
| Email address |{{$email}}     |
| State         |{{$state}}     |
| City          |{{$city}}      |
| Car Brand     |{{$brand}}     |
| Car Model     |{{$model}}     |
| Year          |{{$year}}      |
| Part          |{{$part}}      |
| Kits          |{{$kits }}     |
| Notes         |{{$notes}}     |
@endcomponent

Thanks you,<br>
{{ config('app.name') }}
@endcomponent

