@component('mail::message')

# Invite Confirmation

You have been invited to join the team at {{ config('app.name') }}. Please click the link below to accept the invitation.

@component('mail::button', ['url' => url('/verify-invite/' . $invite->code)])
    Accept Invitation
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent