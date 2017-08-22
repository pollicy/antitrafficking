<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- header -->
    <title>@yield('title') | {{ config('app.name', 'Pollicy') }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"/></script>

    <!-- some fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Saira+Semi+Condensed" rel="stylesheet">
  </head>
  <body>
    <!-- begin container -->
    <div class="container-fluid" data-spy="scroll" data-target=".navbar" data-offset="10">
      <!-- begin navigation -->
      <div class="row">
        <div class="col-sm-12">
          <nav class="navbar navbar-fixed-top" style="padding-bottom: 7px; background-color: #fafafa; border-bottom:1px solid grey">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="./logo.png" class="img-responsive"/>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home" data-toggle="tooltip" data-placement="left" title="home">home</a></li>
                <li><a href="#immigration" data-toggle="tooltip" data-placement="left" title="immigration map">immigration map</a></li>
                <li><a href="#advisory" data-toggle="tooltip" data-placement="left" title="advisory">advisory</a></li>
                <li><a href="#resources" data-toggle="tooltip" data-placement="left" title="resources">resources</a></li>
                <li><a href="#stories" data-toggle="tooltip" data-placement="left" title="stories">stories</a></li>
                <li><a href="#contact" data-toggle="tooltip" data-placement="left" title="contact">contact</a></li>
              </ul>
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
            </div>
          </nav>
        </div>
      </div>
      <!-- end navigation -->
      @yield('content')
      <!-- begin footer -->
      <div class="row" id="footer">
        <div class="col-sm-12" style="background-color:rgb(255,235,59); color:#000; text-align:center; height: 70px !important;">
          <h5 class="text-center">&copy <?php echo Date('Y') ?> Pollicy Uganda Limited</h5>
        </div>
      </div>
      <!-- end footer -->
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
