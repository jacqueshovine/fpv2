@extends('layout')

@section('title')
  {{ $user->name . '\'s profile' }}
@endsection

@section('content')
    <div class="container  py-16">
        <p>Welcome, {{ $user->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
@endsection
