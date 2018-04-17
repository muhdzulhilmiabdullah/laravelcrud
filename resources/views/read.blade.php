@include('inc.header')
	<div class="container"> 
	<div class="row">
		<legend>Read </legend>
		<p class="lead">{{ $articles->title}}</p>
		
		<p class="lead">{{ $articles->description}}</p>
		</div>
		</div>
@include('inc.footer')