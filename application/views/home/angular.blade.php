@layout('layouts.angular')

@section('content')

	<div class="row">
		<div class="twelve columns">
			<h2>Welcome to TGC Angular Play Page</h2>
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="twelve columns">

	      <div ng-view></div>

		</div>
	</div>
    
@endsection