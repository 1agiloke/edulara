

<h1>You're logged in as user</h1>
<form action="{{ route('logout') }}" method="post">
	{{csrf_field()}}
	<input type="submit" name="" value="Logout">
</form>