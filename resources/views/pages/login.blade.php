@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">
<body class="">
<form class="form-login">
    <h1 class="h1 mb-3 font-weight-normal">Log In</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="" type="submit">Log in</button>

</form>
</body>
    </div>
@endsection
