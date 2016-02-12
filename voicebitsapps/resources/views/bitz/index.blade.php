@extends('common.layout')
@section('title')
Inspire. Be inspired.
@stop
@section('body')
<div class="row">
{!! $records->render() !!}
</div>
<div class="row">
    <ul class="collection">
@foreach ($records as $record)
        <li class="collection-item dismissable">
            <div>{{ $record->action.''.$record->body }}
                <a href="{{ action('ZvoizbitzController@edit', [$record->id]) }}" class="secondary-content"><i class="material-icons">send</i></a>
                <a href="{{ action('ZvoizbitzController@show', [$record->id]) }}" class="secondary-content"><i class="material-icons">remove_red_eye</i></a>
            </div>
        </li>
@endforeach 
    </ul>
</div>
@stop