@component('mail::message')
# Congrats {{ $user->name }},

<h2>Registration Successful</h2>

<section>
    <article>
      <p>
        You have been registered as a new personnel with the Password: <b>{{ $password }}</b> Click on the link below to Login
      </p>
  </article>
</section>


@component('mail::button', ['url' =>  config('app.url') ])
Login
@endcomponent

Thanks,<br>
Administrator, <br>
{{ config('app.name') }}
@endcomponent
