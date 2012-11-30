@layout('layouts.angular2')

@section('content')

	<div class="row">
		<div class="twelve columns">
		  <h1>AngularJS Contact Manager</h1>
		  [<a href="#/">index</a>]
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="twelve columns">

	      <div ng-view></div>

		</div>
	</div>
    
@endsection