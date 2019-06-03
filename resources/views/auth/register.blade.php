@extends('layouts.master')

@section('title', 'Register')

@section('content')
    <div>
        <h1>Register</h1>
    </div>

    <form method="POST" action="/register">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input 
            type="text" 
            class="form-control" 
            id="name" 
            name="name" />
            @include('partials.error', ['fieldTitle' => 'name'])
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input 
            type="text" 
            class="form-control" 
            id="email" 
            name="email" />
            @include('partials.error', ['fieldTitle' => 'email'])
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input 
            type="password" 
            class="form-control" 
            id="password" 
            name="password" />
            @include('partials.error', ['fieldTitle' => 'password'])
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm your password</label>
            <input 
            class="form-control"
            type="password"
            id="password_confirmation"
            name="password_confirmation"/>
            @include('partials.error',['fieldTitle' => 'password_confirmation'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection