<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- header -->
    <title>@yield('title') | {{ config('app.name', 'Wetaase | Pollicy') }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="{{ asset('css/main.css')}}" rel="stylesheet">

    <!-- recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    @if(Request::path() === 'immigration-data')
      <!-- only include relevant assets -->
      <!-- js -->
      <script type="text/javascript" src="{{ asset('js/raphael.js')}}"></script>
      <script type="text/javascript" src="{{ asset('js/signals.js')}}"></script>
      <script type="text/javascript" src="{{ asset('js/hasher.js')}}"></script>
      <script type="text/javascript" src="{{ asset('js/modernizr.geoloc.js')}}"></script>
      <script type="text/javascript" src="{{ asset('jquery-ui-1.8.16.custom/js/jquery-1.6.2.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('jquery-ui-1.8.16.custom/js/jquery-ui-1.8.16.custom.min.js')}}"></script>

      <!-- styles -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/univers-else-font/stylesheet.css')}}" />
      <link type="text/css" href="{{ asset('jquery-ui-1.8.16.custom/css/ui-darkness/jquery-ui-1.8.16.custom.css')}}" rel="stylesheet" />
    @endif

  </head>
  <body>
    <!-- begin container -->
    <div class="container-fluid" data-spy="scroll" data-target=".navbar" data-offset="10">
      <!-- begin navigation -->
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-fixed-top" id="navBar">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand navbar-left" href="/"><img src="{{ asset('images/wetaase-logo.png')}}" class='img-responsive'/></a>
              </div>
              @if (Request::path() !== 'immigration-data')
              <form class="navbar-form navbar-right">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="search this website...">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                  </div>
                </div>
              </form>
              @endif
              <ul class="nav navbar-nav navbar-right" id="navLinks">
                <li class="active"><a href="/" data-toggle="tooltip" data-placement="left" title="home">home</a></li>
                @if (Request::path()  !== 'immigration-data')
                <li><a href="#wetaase" data-toggle="tooltip" data-placement="left" title="wetaase">wetaase</a></li>
                <li><a href="#advisory" data-toggle="tooltip" data-placement="left" title="advisory">advisory</a></li>
                <li><a href="#resources" data-toggle="tooltip" data-placement="left" title="resources">resources</a></li>
                <!-- <li><a href="#stories" data-toggle="tooltip" data-placement="left" title="stories" >stories</a></li> -->
                <li><a href="/immigration-data" data-toggle="tooltip" data-placement="left" title="immigration map">immigration map</a></li>
                <li><a href="#contact" data-toggle="tooltip" data-placement="left" title="contact">contact</a></li>
                @endif
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- end navigation -->

      @yield('content')
      @if (Request::path() !== 'immigration-data')
      <!-- begin footer -->
      <div class="row site-footer" id="footer">
        <div class="col-md-6">
          <h5>&copy <?php echo Date('Y') ?> <a href="http://www.wetaase.pollicy.org">Wetaase</a> | <a href="http://www.pollicy.org">Pollicy</a> Uganda Limited</h5>
        </div>
        <div class="col-md-6">
          <h5 class="text-right">social media icons with links</h5>
        </div>
      </div>
      <!-- end footer -->
      @endif
    </div>
    <!-- end container -->

    <!-- javascript -->
    <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
  </body>
</html>
