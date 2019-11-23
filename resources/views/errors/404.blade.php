@extends('errors::minimal')

<link href="{{ asset('css/newerror.css') }}" rel="stylesheet">
<script src="{{ asset('js/error.js') }}"></script>

<div class="container">
	<div class="row">
		<div class="col-md-11 offset-md-1" >
		<div style="height: auto !important;">
			<br>
			<h4>Error!</h4>
			<hr>
			<div class="error-page">
				<h1>404</h1>
				<p>{{ $exception->getMessage() }}</p>
			</div>
		</div>
	</div>
