@layout('layouts.main')

@section('content')

  
  <!-- Nav and Banner -->

  <div class="row">
    <div class="twelve columns">
      <ul class="nav-bar">
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>
        <li><a href="#">Link 6</a></li>
        <li><a href="#">Link 7</a></li>
      </ul>

      <!-- Main Banner Image - place in a paragraph to enforce the modular scale spacing -->
      <p><img src="http://placehold.it/1000x400&text=[banner img]" /></p>
    </div>
  </div>

  <!-- End Nav and Banner -->


  <!-- Main Content Section -->

  <div class="row">

    <div class="eight columns">
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
      <p><a href="#" class="secondary small button">Next Page &rarr;</a></p>
    </div>

    <div class="four columns">

      <!-- Gallery sidebar with a block grid. Note: block grid items should be the same size for optimal results -->

      <ul class="block-grid three-up">
        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
        <li><a href="#"><img src="http://placehold.it/120x120" /></a></li>
      </ul>
    </div>

  </div>


  <!-- Call to Action Panel -->
  <div class="row">
    <div class="twelve columns">

      <div class="panel">
        <h4>Get in touch!</h4>

        <div class="row">
          <div class="nine columns">
            <p>We'd love to hear from you, you attractive person you.</p>
          </div>
          <div class="three columns">
            <a href="#" class="radius button right">Contact Us</a>
          </div>
        </div>
      </div>

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
            <li><a href="#">Link 5</a></li>
            <li><a href="#">Link 6</a></li>
            <li><a href="#">Link 7</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


@endsection