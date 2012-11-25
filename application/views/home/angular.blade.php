@layout('layouts.main')

@section('content')

	<div class="row">
		<div class="twelve columns">
			<h2>Welcome to TGC Angular Play Page</h2>
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="twelve columns">

	      <label>Name:</label>
	      <input type="text" ng-model="yourName" placeholder="Enter a name here">
	      <hr>
	      <h1>Hello {{yourName}}!</h1>

		</div>
	</div>
    
@endsection