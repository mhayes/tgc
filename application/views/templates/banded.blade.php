@layout('layouts.main')

@section('content')
	
  <!-- Header and Nav -->

  <div class="row">
    <div class="three columns">
      <h1><img src="http://placehold.it/400x100&text=Logo" /></h1>
    </div>
    <div class="nine columns">
      <ul class="nav-bar right">
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
      </ul>
    </div>
  </div>

  <!-- End Header and Nav -->


  <!-- First Band (Image) -->

  <div class="row">
    <div class="twelve columns">
      <img src="http://placehold.it/1000x400&text=[img]" />

      <hr />
    </div>
  </div>


  <!-- Second Band (Image Left with Text) -->

  <div class="row">
    <div class="four columns">
      <img src="http://placehold.it/400x300&text=[img]" />
    </div>
    <div class="eight columns">
      <h4>This is a content section.</h4>
      <div class="row">
        <div class="six columns">
          <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
        </div>
        <div class="six columns">
          <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
        </div>
      </div>
    </div>
  </div>


  <!-- Third Band (Image Right with Text) -->

  <div class="row">
    <div class="eight columns">
      <h4>This is a content section.</h4>

      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

      <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

    </div>
    <div class="four columns">
      <img src="http://placehold.it/400x300&text=[img]" />
    </div>
  </div>


  <!-- Footer -->

  <footer class="row">
    <div class="twelve columns">
      <hr />
      <div class="row">
        <div class="six columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
        <div class="six columns">
          <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


@endsection