@extends('layout')
@section('title')
Inspire. Be inspired.
@stop
@section('header_title')
{{ Inspiring::quote() }}
@stop
@section('header_subtitle')
You are logged in.
@stop
@section('calltoaction')
<a href="#" id="download-button" onclick="$('.active').toggleClass('hide')" class="btn-large waves-effect waves-light orange">Get Started</a>
@stop
@section('body')

    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="medium material-icons">movie</i></h2>
          </div>
          <div class="card">
			  <video class="responsive-video" src="http://pinduin.com/img/waddlehelp.mp4" poster="images/peggy_penguin_2.png" type="video/mp4" controls>
				Your browser does not support the <code>video</code> element.
			  </video>
            <div class="card-content">
              <p class="light">Welcome to the Pinduin stream!</p>
              <p class="light">Watch a short video to learn how to waddle around Pinduin.</p>
            </div>
          </div>
        </div>
		
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="medium material-icons">thumb_up</i></h2>
          </div>
          <div class="card-panel white darken-2">
            <h5 class="light center">To LuvIt or Not...</h5>
            <p class="light" style="font-style:italic"><strong>Swipe up, down, left, and right on Peggy to see her waddle.</strong></p>
            <p class="light">The "LuvIt" button is the same as swiping up or clicking on Peggy.<br>The "Not" button is the same as swiping down.</p>
            <p class="light">Do you LuvIt?  <a href="#toluvitornot">Learn more</a> below.</p>
            <div class="card-action center swipevis">
              <a class="btn-floating waves-effect waves-light blue-grey darken-2" onclick="rotatedown()" title="Not..." ><i class="material-icons">not_interested</i></a>
              <img class="info-panels" onclick="rotateup()" src="swipeggy">
            </div>
          </div>
        </div>

      </div>

    </div>

    <div id="toluvitornot" class="section">
      <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="icon-block">
            <h2 class="center red-text text-darken-2"><i class="medium material-icons">favorite</i></h2>
          </div>
			  <div class="card red darken-2">
				<div class="card-content white-text">
				  <span class="card-title">{{$pinduinscount}} Pinduins LuvIt </span>
				  <p>Discover some of the stuff our members love doing.  If a member is doing stuff you like or support then "LuvIt". For every "LuvIt", we send reminders of encouragement and motivation to help our members get more of "It" done.</p>
				  <p>You can find more inspiration and meet interesting people to do stuff with now by making a personal profile and adding your own interests.</p>
				</div>
				<div class="card-action">
				  <a href="#">Sign up</a>
				  <a href="#stream-visitor" onclick="$('.active').toggleClass('hide')">What's in the Stream? </a>
				</div>
			  </div>
        </div>
      </div>
      <div id="#stream-visitor" class="row">
	<div class="col s12 m6 offset-m3 hide active">
          <div class="card">
		  <?php if (true): // have a check for if there is a video if not then show google was a guy OR Nothing ?>
			<div class="video-container no-controls">
			  <iframe src="//www.youtube.com/embed/YuOBzWF0Aws?rel=0;autohide=1" frameborder="0" allowfullscreen></iframe>
			</div>
		  <?php else: ?>
			<div class="video-container no-controls">
			  <iframe src="//www.youtube.com/embed/<?php echo 'the string from the parsed video'; ?>?rel=0;autohide=1" frameborder="0" allowfullscreen></iframe>
			</div>
		  <?php endif; ?>
            <div class="card-content ">
              <h5 class="light">Get better at soccer</h5>
              <p class="light">Our Guests LuvIt! Stuff people visiting Pinduin are doing. Join us.</p>
            </div>
            <div class="card-action center swipevis">
              <a class="btn-floating waves-effect waves-light blue-grey darken-2"><i class="material-icons">not_interested</i></a>
              <img class="info-panels" src="swipeggy">
            </div>
          </div>
        </div>

      </div>
    </div>

@stop

<?php 
		$UserInfo = Auth::user();
		$userstatus = ($UserInfo['attributes']['status'] == 'Y') ? true : false;
?>
@if ($userstatus)
@section('body2')

<div class="row">
	<div class="col s4 card small">
	  <div class="card-image">
		<img src="/images/sample-1.jpg">
		<span class="card-title">I am a Storyteller.</span>
	  </div>
	  <div class="card-content">
		<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
	  </div>
	  <div class="card-action">
		<a href="#">voicebitz.com</a>
		<a href="#">blog</a>
	  </div>
	</div>
	<div class="col s4 card small">
	  <div class="card-image">
		<img src="/images/sample-1.jpg">
		<span class="card-title">Match.  Meet.  Do.</span>
	  </div>
	  <div class="card-content">
		<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
	  </div>
	  <div class="card-action">
		<a href="#">Pinduin.com</a>
		<a href="#">Blog</a>
	  </div>
	</div>
	<div class="col s4 card small">
	  <div class="card-image">
		<img src="/images/sample-1.jpg">
		<span class="card-title">Card Title</span>
	  </div>
	  <div class="card-content">
		<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
	  </div>
	  <div class="card-action">
		<a href="#">This is a link</a>
		<a href="#">This is a link</a>
	  </div>
	</div>
</div>
<div class="row">
	<div class="col s4 card small">
	  <div class="card-image">
		<img src="/images/sample-1.jpg">
		<span class="card-title">Card Title</span>
	  </div>
	  <div class="card-content">
		<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
	  </div>
	  <div class="card-action">
		<a href="#">This is a link</a>
		<a href="#">This is a link</a>
	  </div>
	</div>
	<div class="col s4 card small">
	  <div class="card-image">
		<img src="/images/sample-1.jpg">
		<span class="card-title">Card Title</span>
	  </div>
	  <div class="card-content">
		<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
	  </div>
	  <div class="card-action">
		<a href="#">This is a link</a>
		<a href="#">This is a link</a>
	  </div>
	</div>
	<div class="col s4 card small">
	  <div class="card-image">
		<img src="/images/sample-1.jpg">
		<span class="card-title">Card Title</span>
	  </div>
	  <div class="card-content">
		<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
	  </div>
	  <div class="card-action">
		<a href="#">This is a link</a>
		<a href="#">This is a link</a>
	  </div>
	</div>
</div>
@stop
@endif
<?php 
//	endif;
?>
<?php 
//	if (isset($somevariable)) :
//	echo "Hello there";
//	endif;
?>