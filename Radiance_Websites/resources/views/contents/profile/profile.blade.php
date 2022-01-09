<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{$title}}</title>
</head>

<body>
	<p>username: {{$username}}</p>
	<p>name: {{$name}}</p>
	<p>email: {{$email}}</p>
	<p>school: {{$school}}</p>
	<p>city: {{$city}}</p>
	<p>birthyear: {{$birthyear}}</p>

	@if ($profileBorder != null)
	<img src="{{ asset($profileBorder) }}" alt="{{ $profileBorder }}" class="img-fluid logo-height">
	@else
	<img src="{{ asset('/storage/border_default.jpg') }}" alt="" class="img-fluid logo-height">
	@endif

    @if ($characterSkin != null)
	<img src="{{ $characterSkin }}" alt="{{ $characterSkin }}" class="img-fluid logo-height">
	{{-- @else
	<img src="{{ asset('/storage/border_default.jpg') }}" alt="" class="img-fluid logo-height"> --}}
	@endif

	@foreach ($profileBorders as $border)
	<img src="{{ asset($border->border) }}" alt="{{ $border->name }}" class="img-fluid logo-height">
	@endforeach

	<form action="{{ route('profiles.destroy', Auth::id()) }}" method="POST">
		<a class="btn btn-primary" href="{{ route('profiles.edit',  Auth::id()) }}">update</a>
		@csrf
		@method('DELETE')
		<button type="submit" class="btn btn-danger">Delete</button>
	</form>

	<div>
		<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
			{{ __('Logout') }}
		</a>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
			@csrf
		</form>
	</div>
</body>

</html>
