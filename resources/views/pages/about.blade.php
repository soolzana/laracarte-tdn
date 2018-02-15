@extends('layouts.default', ['title' => 'About'])


@section('content')
  <div class="container">
  	<h2>what is {{ config('app.name') }} ?</h2>
  	<p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>


   <div class="row">
   	 <div class="col-md-6">
   	 	<p class="alert alert-warning">
   	 		<strong><i class="fa fa-exclamation-triangle"></i>This app has been built by @etsmo for learning purposes.</strong>
   	 	</p>
   	 </div>
   </div>
   
   <p>Feel free to help to improve the <a href="#">source code</a></p>


  <hr>

  <h2>what is Laramap ?</h2>
  <P>laramap is the website by whitch {{ config('app.name') }} was inspired :).</P>

  <p>More info here.</p>

  </div>
@stop