@extends('ccmashup.layout')
@section('title')
Inspire. Be inspired.
@stop

@section('body')
<div class="row">
<div class="col s12 card">
    <div class="card-image swipescrub">
        <video id="video" controls="true" autoplay="1" muted preload="metadata"/>
          <source src="http://stm.dam.digizuite.dk/dmm3bwsv3/372_10032_10001_1_2_0_6e5d6f10-e316-43e4-8fef-e33d36336140.mp4?635885556265320000" type="video/mp4">          
          <track label="English" kind="subtitles" srclang="en" src="/ccmashup/subtitles/textVTT.vtt" default>
        </video>
    </div>
 </div>
</div>
<div class="row">
  @foreach ($genres as $genre)
  <div class="col s12 card">
    <div id="{{ $genre }}" class="card-content">
      @foreach ($text[$genre] as $track)
      <li>
      <span class="duration" >{{ $track['duration'] }}</span>   
      <span class="start" >{{ $track['start'] }}</span>   
      <span class="end" >{{ $track['end'] }}</span>   
      <span class="text" >This is a new {{ $genre }} text: {{ $track['text'] }}</span>   
      </li>
      @endforeach

    </div>
  </div>
  @endforeach
</div>
{{-- 
<div class="row">
 <div class="col s12 m6 offset-m3 card">
    <div class="card-image">
  <figure id="videoContainer3" data-fullscreen="false">
    <video id="video3" controls preload="metadata">
      <source src="http://stm.dam.digizuite.dk/dmm3bwsv3/372_10032_10001_1_2_0_6e5d6f10-e316-43e4-8fef-e33d36336140.mp4?635885556265320000" type="video/mp4">
      <track label="English" kind="subtitles" srclang="en" src="/ccmashup/subtitles/textVTT.vtt" default>
      <track label="Deutsch" kind="subtitles" srclang="de" src="/ccmashup/subtitles/textVTT.vtt">
      <track label="Español" kind="subtitles" srclang="es" src="/ccmashup/subtitles/textVTT.vtt">
    </video>
  </figure>
    </div>
    <div class="card-content">content</div>
    <div class="card-action">action</div>

 </div>
</div>

<div class="row">
 <div class="col s12 card">
  <figure id="videoContainer" data-fullscreen="false">
    <video id="video" controls preload="metadata" autoplay="1" muted >
      <source src="http://stm.dam.digizuite.dk/dmm3bwsv3/372_10032_10001_1_2_0_6e5d6f10-e316-43e4-8fef-e33d36336140.mp4?635885556265320000" type="video/mp4">
      <track label="English" kind="subtitles" srclang="en" src="/ccmashup/subtitles/textVTT.vtt" default>
      <track label="Deutsch" kind="subtitles" srclang="de" src="/ccmashup/subtitles/textVTT.vtt">
      <track label="Español" kind="subtitles" srclang="es" src="/ccmashup/subtitles/textVTT.vtt">
    </video>

  </figure>
    <div class="card-content">    
      <div id="video-controls" class="controls" data-state="hidden">
        <a id="playpause" data-state="play"><i class="material-icons">play_circle_outline</i></a>
        <a id="stop" data-state="stop"><i class="material-icons">stop</i></a>
      </div>
    </div>
    <div class="card-action">
      <div class="progress">
        <progress id="progress" value="0" min="0">
          <span id="progress-bar"></span>
        </progress>
      </div>
      <button id="mute" type="button" data-state="mute">Mute/Unmute</button>
      <button id="volinc" type="button" data-state="volup">Vol+</button>
      <button id="voldec" type="button" data-state="voldown">Vol-</button>
      <button id="fs" type="button" data-state="go-fullscreen">Fullscreen</button>
      <button id="subtitles" type="button" data-state="subtitles">CC</button>
    </div>  
 </div>
</div>
--}}
@stop