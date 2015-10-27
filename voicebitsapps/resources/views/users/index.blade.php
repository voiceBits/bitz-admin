@extends('common.layout')
@section('title')
Inspire. Be inspired.
@stop
@section('body')
<div class="row">
    <a href="{{ action('UsersController@create') }}" class="waves-effect waves-light btn">Add New User</a>
</div> 
@stop
@section('body2')
<div class="row">
    <ul class="collection">
@foreach ($users as $user)
        <li class="collection-item dismissable">
            <div>{{ $user->username }}<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div>
        </li>
@endforeach 
    </ul>
</div>
@stop