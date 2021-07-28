@component('mail::message')
# Hello Motongen Admin,

You have a new Find an Installer message about Motongen Academy with the below details:

@component('mail::table')
| Title         |   Body        | 
| ------------- |:-------------:| 
| Firstname     |{{$firstname}} | 
| Lastname      |{{$lastname}}  |
| Phone Number  |{{$phone}}     |
| Email address |{{$email}}     |
| State         |{{$state}}     |
| City          |{{$city}}      |
| Car Brand     |{{$brand}}     |
| Car Model     |{{$model}}     |
| VIN Number    |{{$vin}}       |
| Year          |{{$year}}      |
| Part          |{{$part}}      |
| Kits          |{{$kits }}     |
| Notes         |{{$notes}}     |
@endcomponent

Thanks you,<br>
{{ config('app.name') }}
@endcomponent

