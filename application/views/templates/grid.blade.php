@layout('layouts.main')

@section('content')

  
  <!-- Header and Nav -->

  <nav class="top-bar">
    <ul>
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="#">
            Top Bar Title
          </a>
        </h1>
      </li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>

    <section>
      <!-- Left Nav Section -->
      <ul class="left">
        <li class="divider"></li>
        <li class="has-dropdown">
          <a class="active" href="#">Main Item 1</a>
          <ul class="dropdown">
            <li><label>Section Name</label></li>
            <li><a href="#" class="">Dropdown Level 1</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><label>Section Name</label></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><a href="#">See all &rarr;</a></li>
          </ul>
        </li>
        <li class="divider"></li>
        <li><a href="#">Main Item 2</a></li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Main Item 3</a>
          <ul class="dropdown">
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><a href="#">See all &rarr;</a></li>
          </ul>
        </li>
        <li class="divider"></li>
      </ul>

      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Main Item 4</a>
          <ul class="dropdown">
            <li><label>Section Name</label></li>
            <li class="has-dropdown">
              <a href="#" class="">Has Dropdown, Level 1</a>
              <ul class="dropdown">
                <li><a href="#">Dropdown Options</a></li>
                <li><a href="#">Dropdown Options</a></li>
                <li class="has-dropdown">
                  <a href="#">Has Dropdown, Level 2</a>
                  <ul class="dropdown test">
                    <li><a href="#">Subdropdown Option</a></li>
                    <li><a href="#">Subdropdown Option</a></li>
                    <li><a href="#">Subdropdown Option</a></li>
                  </ul>
                </li>
                <li><a href="#">Subdropdown Option</a></li>
                <li><a href="#">Subdropdown Option</a></li>
                <li><a href="#">Subdropdown Option</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><label>Section Name</label></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><a href="#">See all &rarr;</a></li>
          </ul>
        </li>
        <li class="divider"></li>
        <li><a href="#">Main Item 5</a></li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Main Item 6</a>
          <ul class="dropdown">
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><a href="#">See all &rarr;</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </nav>


  <!-- End Header and Nav -->

  <!-- Main Grid Section -->

  <div class="row">

    <div class="three columns">
      <div class="panel">
        <h5>Panel Title</h5>
        <p>This is a three columns grid panel with an arbitrary height.</p>
      </div>
    </div>
    <div class="six columns">
      <div class="panel">
        <h5>Panel Title</h5>
        <p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
      </div>
    </div>
    <div class="three columns">
      <div class="panel">
        <h5>Panel Title</h5>
        <p>This is a three columns grid panel with an arbitrary height.</p>
      </div>
    </div>

  </div>



  <div class="row">

    <div class="six columns">
      <div class="panel">
        <h5>Panel Title</h5>
        <p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
      </div>
    </div>
    <div class="two columns">
      <div class="panel">
        <p>
          <img src="http://placehold.it/200x200" />
        </p>
      </div>
    </div>
    <div class="four columns">
      <div class="panel">
        <h5>Panel Title</h5>
        <p>This is a four columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami.</p>
      </div>
    </div>

  </div>


  <div class="row">

    <div class="four columns">
      <div class="panel">
        <p>
          <img src="http://placehold.it/400x300" />
        </p>
      </div>
    </div>
    <div class="four columns">
      <div class="panel">
        <p>
          <img src="http://placehold.it/400x300" />
        </p>
      </div>
    </div>
    <div class="four columns">
      <div class="panel">
        <p>
          <img src="http://placehold.it/400x300" />
        </p>
      </div>
    </div>

  </div>


  <div class="row">

    <div class="six columns">
      <div class="panel">
        <h5>Panel Title</h5>
        <p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
      </div>
    </div>
    <div class="three columns">
      <div class="panel">
        <h5>Panel Title</h5>
        <p>This is a three columns grid panel with an arbitrary height.</p>
      </div>
    </div>
    <div class="three columns">
      <div class="panel">
        <h5>Panel Title</h5>
        <p>This is a three columns grid panel with an arbitrary height.</p>
      </div>
    </div>

  </div>

  <!-- End Grid Section -->



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
            <li><a href="#">Section 1</a></li>
            <li><a href="#">Section 2</a></li>
            <li><a href="#">Section 3</a></li>
            <li><a href="#">Section 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


@endsection