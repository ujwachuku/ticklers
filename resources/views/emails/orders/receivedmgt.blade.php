@component('mail::message')
# An order has been received

You can view details of this order by logging into the admin panel of the Ticklers web application.

@component('mail::button', ['url' => 'http://ticklersfood.com/admin', 'color' => 'green'])
Login
@endcomponent

Thanks,<br>
**{{ config('app.name') }}**

@endcomponent
