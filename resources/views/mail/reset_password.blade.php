<p>Hormatly {{$admin->name}}</p>

<p>
	<a href="{{route('admin.reset.password.ShowFrom',['token'=>$admin->reset_password_token])}}">Kodumy Tazele</a>
</p>