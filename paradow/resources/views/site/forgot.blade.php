<h1>Hello {{$user->name}}</h1>
<p> please click password reset button to reset your password
<a href="{{url('/paradow/reset_password/'.$user->email.'/'.$code)}}" > Reset password </a>
</p>