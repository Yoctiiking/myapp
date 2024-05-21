@extends('layout')

@section('content')
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user['Firstname'] }} {{ $user['Lastname'] }} - {{ $user['Email'] }}
            </li>
        @endforeach
    </ul>
@endsection
@section('title')
    {{ $title }}
@endsection
