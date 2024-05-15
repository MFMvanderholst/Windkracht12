@component('mail::message')

# Payment Confirmation

You have made a reservation  {{ config('app.name') }}. Please click the link below to pay the reservation.

@component('mail::button', ['url' => url('/verify-invite/' . $invite->code)])
    Accept Invitation
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent