@component('mail::message')
# New user just registred!

You have new user on your site :)
{{$user->fullname}} | {{$user->email}}


@endcomponent
