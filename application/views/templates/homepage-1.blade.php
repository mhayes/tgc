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


  <!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->

  <div class="row">
    <div class="twelve columns">
      <div id="slider">
        <img src="http://placehold.it/1000x400&text=[img 1]" />
        <img src="http://placehold.it/1000x400&text=[img 2]" />
        <img src="http://placehold.it/1000x400&text=[img 3]" />
        <img src="http://placehold.it/1000x400&text=[img 4]" />
      </div>

      <hr />
    </div>
  </div>


  <!-- Three-up Content Blocks -->

  <div class="row">

    <div class="four columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="four columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>

    <div class="four columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
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
          </ul>
        </div>
      </div>
    </div>
  </footer>

@endsection