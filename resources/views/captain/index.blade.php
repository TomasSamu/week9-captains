
@extends('common.layout')
@section('content')
    

<h1>The captain roster</h1>

<ul>
    @foreach ($captains as $captain)
        <li>{{$captain->name}}</li>
    @endforeach
</ul>

@endsection
