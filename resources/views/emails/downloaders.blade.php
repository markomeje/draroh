@component('mail::message', ['email' => $email])
	<h2>Dear {{ $email }} </h2> 
	<p>Thank you for downloading my free book.</p>
@endcomponent
