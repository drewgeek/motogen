@component('mail::message')
# Hello Motongen Admin,

You have a new enquiry message with the below details:

@component('mail::table')
| Title         |   Body        | 
| ------------- |:-------------:| 
| Firstname     |{{$firstname}} | 
| Lastname      |{{$lastname}}  |
| Phone Number  |{{$phone}}     |
| Email address |{{$email}}     |
| Car Brand     |{{$brand}}     |
| Car Model     |{{$model}}     |
| VIN Number    |{{$vin}}       |
| Year          |{{$year}}      |
| Part          |{{$part}}      |
| Notes         |{{$notes}}     |
@endcomponent


Thanks you,<br>
{{ config('app.name') }}
@endcomponent
