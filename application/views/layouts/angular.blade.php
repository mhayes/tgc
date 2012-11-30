<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  ng-app="phonecat"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!-- if you need normalize.css -->
        {{-- HTML::style('css/normalize.min.css') }}
        
        {{ HTML::style('css/app.css') }}
        {{ HTML::style('css/phones.css') }}
        
        {{ HTML::script('js/foundation/modernizr.foundation.js') }}
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        
        <!-- begin content -->
        <div class="wrapper">
            @if(Session::has('message'))
                <p style="color: green;">{= Session::get('message') =}</p>
            @endif            
            @yield('content')
        </div>
        <!-- end content -->
        
        <!-- begin javascript -->
        
        <!-- jQuery - CDN-->
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
        
        <!-- jQuery - Local-->
        {{ HTML::script('js/foundation/jquery.js') }}
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script> -->
        
        <!-- Foundation JS files -->
        {{ HTML::script('js/foundation/jquery.foundation.tabs.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.reveal.js') }}
        {{ HTML::script('js/foundation/jquery.event.swipe.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.joyride.js') }}
        {{ HTML::script('js/foundation/jquery.placeholder.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.tooltips.js') }}
        {{ HTML::script('js/foundation/jquery.cookie.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.clearing.js') }}
        {{ HTML::script('js/foundation/jquery.event.move.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.topbar.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.accordion.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.navigation.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.mediaQueryToggle.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.buttons.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.orbit.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.alerts.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.magellan.js') }}
        {{ HTML::script('js/foundation/jquery.foundation.forms.js') }}
        {{ HTML::script('js/foundation/app.js') }}

        <!-- Angular JS files -->
        {{ HTML::script('js/vendor/angular/angular.js') }}
        {{ HTML::script('js/vendor/angular/angular-resource.js') }}
        {{ HTML::script('js/angular/app.js') }}
        {{ HTML::script('js/angular/controllers.js') }}
        {{ HTML::script('js/angular/directives.js') }}
        {{ HTML::script('js/angular/filters.js') }} 
        {{ HTML::script('js/angular/services.js') }}                         

        <!-- Misc JS files -->
        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/main.js') }}

        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-36150400-1']);
          _gaq.push(['_trackPageview']);
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>        
        <!-- end javascript -->
    </body>
</html>