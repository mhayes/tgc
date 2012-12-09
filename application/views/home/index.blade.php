@layout('layouts.main')

@section('content')

	<div class="row">
		<div class="twelve columns">
			<h2>The Golf Counter</h2>
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="eight columns">
			<h3>Links</h3>
			<!-- Grid Example -->
			<div class="row">
				<div class="twelve columns">
					<h4>Foundation Templates</h4>
					<div class="panel">
						<ul class="disc">
							<li>{{ HTML::link('banded', 	'Banded') }}</li>
							<li>{{ HTML::link('banner', 	'Banner') }}</li>
							<li>{{ HTML::link('blog', 		'Blog') }}</li>
							<li>{{ HTML::link('contact', 	'Contact') }}</li>
							<li>{{ HTML::link('feed', 		'Feed') }}</li>
							<li>{{ HTML::link('grid', 		'Grid') }}</li>
							<li>{{ HTML::link('marketing','Marketing') }}</li>							
							<li>{{ HTML::link('orbit', 		'Orbit') }}</li>
							<li>{{ HTML::link('realty', 	'Realty') }}</li>
							<li>{{ HTML::link('sidebar', 	'Sidebar') }}</li>
							<li>{{ HTML::link('soboxy', 	'So-Boxy') }}</li>
						</ul>
					</div>
					<h4>Play Pages</h4>
					<div class="panel">
					<ul class="disc">
						<li>{{ HTML::link('play', 'Play') }}</li>
						<li>{{ HTML::link('play-foundation', 'Play - Foundation') }}</li>
						<li>{{ HTML::link('play-sass', 'Play - Sass') }}</li>
						<li>{{ HTML::link('play-compass', 'Play - Compass') }}</li>
						<li>{{ HTML::link('play-angular', 'Play - Angular') }}</li>
						<li>{{ HTML::link('play-angular2', 'Play - Angular 2') }}</li>
						<li>{{ HTML::link('play-sql', 'Play - SQL') }}</li>
					</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="four columns">
			<h4>Sidebar</h4>
			<p>We're stoked you want to try Foundation! To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
		</div>
	</div>
    
@endsection