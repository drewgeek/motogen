@component('mail::message')
# Hello Motongen Admin,

You have a new enquiry message about Motongen Academy with the below details:

@component('mail::table')
| Title         |   Body        | 
| ------------- |:-------------:| 
| Firstname     |{{$firstname}} | 
| Lastname      |{{$lastname}}  |
| Phone Number  |{{$phone}}     |
| Email address |{{$email}}     |
| Address       |{{$address}}   |
| Start Date    |{{$startDate}} |
| Duration      |{{$duration}}  |
| Notes         |{{$notes}}     |
@endcomponent


Thanks you,<br>
{{ config('app.name') }}
@endcomponent
