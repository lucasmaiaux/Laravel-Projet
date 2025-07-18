@section('page_title')
    Miro Miro - Login
@endsection

@extends('layouts.default')

@section('content')
    <form action="/login" method="POST" class="login_form">
        @csrf

        <h2>Log In to Your Account</h2>

        <label for="email">Email:</label>
        <input 
            type="email" 
            name="email" 
            required
            value="{{ old('email') }}"
        >

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" class="btn mt-4 btn-primary">Log in</button>

        <!-- validation errors -->
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100 alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
@endsection