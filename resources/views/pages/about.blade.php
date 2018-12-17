@extends('layouts.my-template')
@section('title','Mark Jason Landicho')
@section('content')


 @include('partials.breadcrumbs')
<div class="container about-wrapper">
	<div class="row">
		<div class="col col-md-6">
			<h1>About Me</h1>
			<p>Hi! I am Mark Jason Landicho a Web Developer/Web Designer and a Graphic Designer. My pre-professional experience is having previously work for Windoway Trading Inc. as a web developer/web designer. 

				I graduated from Pamantasan ng Lungsod ng Pasig last April 5, 2017 with degree of Bachelor of Science in Information Technology. 

				I love designing and creating something creative designs. I have lot of stuff to do like designing logos, banners, tarpaulines, tshirt printing and website designing. 

			Im always open to exciting job opportunities, with my CV available on request.</p>
			<a class="btn btn-primary" href="{{ route('downloadcv') }}">Download CV</a>
		</div>
		<div class="col col-md-6">
			<img class="img-fluid" src="img/mjl_pic.jpg">
		</div>
	</div>
</div>

<!-- skills -->
<div class="container">
	<div class="row">
		<div class="col col-md-6">
			<h3><strong>TECKNICAL SKILLS</strong></h3>
			<div class="skillsprogressbar">
				<div class="progress massive-progress ">
					<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
						HTML / CSS <span>90%</span>
					</div>
				</div>
				<div class="progress massive-progress ">
					<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
						PHP / JS / JQUERY <span>75% </span>
					</div>
				</div>
				<div class="progress massive-progress ">
					<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
						PHOTOSHOP <span>90%</span>
					</div>
				</div>
				<div class="progress massive-progress ">
					<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
						GRAPHIC DESIGN <span>75% </span>
					</div>
				</div>
			</div>
		</div>
		<div class="col col-md-6">
			<div class="personalskills">
				<h3> <strong>PERSONAL SKILLS</strong></h3>
				<span><p>Leadership and ability to motivate.</p></span>
				<span><p>Ability to work independently or work as part a team.</p></span>
				<span><p>Experience designing and programming web pages.</p></span>
				<span><p>Positive Attitude and Self-Confidence.</p></span>
				<span><p>Ability to accept and learn from criticism.</p></span>
			</div>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>

@endsection