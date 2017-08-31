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


  </head>
  <body>
    <!-- begin container -->
    <div class="container-fluid" data-spy="scroll" data-target=".navbar" data-offset="10">
      <!-- begin navigation -->
      <div class="row">
          <nav class="navbar navbar-fixed-top" id="navBar" role="navigation">
            <div class="container">
               <div class="navbar-header">
                <a class="navbar-brand navbar-left" href="/"><img src="{{ asset('images/wetaase-logo.png')}}" class='img-responsive'/></a>
              </div>
              @if (Request::path() !== 'immigration-data')
              <!-- <form class="navbar-form navbar-right">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="search this website...">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                  </div>
                </div>
              </form> -->
              @endif
              <ul class="nav navbar-nav navbar-right topnav" id="navLinks">
                <li class="active"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="home" id="1">home</a></li>
                @if (Request::path()  !== 'immigration-data')
                <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="wetaase" id="2">wetaase</a></li>
                <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="advisory"  id="3">advisory</a></li>
                <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="resources"  id="4">resources</a></li>
                <!-- <li><a href="#stories" data-toggle="tooltip" data-placement="left" title="stories" >stories</a></li> -->
                <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="immigration map" id="5">immigration map</a></li>
                <li><a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="contact" id="6">contact</a></li>
                @endif
                <li><a href="javascript:void(0);" class="icon" onclick="hamburgerMenuHandler();">&#9776;</a></li>
              </ul>
            </div>
          </nav>
      </div>
      <!-- end navigation -->

      @yield('content')
      @if (Request::path() !== 'immigration-data')
      <!-- begin footer -->
      <div class="row site-footer" id="footer">
        <div class="col-md-6">
          <h5>&copy copyright <?php echo Date('Y') ?> <a href="http://www.wetaase.pollicy.org">Wetaase</a> | <a href="http://www.pollicy.org">Pollicy</a> Uganda Limited</h5>
        </div>
        <div class="col-md-6">
          <div class="text-right">
            <a class="btn social-link" href="https://www.facebook.com/wetaase.pollicy/"><img src="{{asset('images/facebook-icon.svg')}}"/></a>
            <a class="btn social-link" href="https://medium.com/pollicy"><img src="{{asset('images/medium-icon.svg')}}"/></a>
          </div>
        </div>
      </div>
      <!-- end footer -->
      @endif
    </div>
    <!-- end container -->

    <!-- javascript -->
    <script type="text/javascript">
      var allMenuItems =
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
      });
      $("#navBar").removeClass('topnav');
      $("#navBar").addClass('responsive');
    </script>

    <script type="text/javascript">
      var pathname = window.location.pathname; //get pathname - original endpoint
      /** now some jQuery help **/
      $('li a').click(function(){
        switch (this.id) {
          case '1':
            window.location = pathname + '#home';
            break;
            case '2':
              window.location = pathname + '#map';
              break;
              case '3':
                window.location = pathname + '#advisory';
                break;
                case '4':
                  window.location = pathname + '#resources';
                  break;
                  case '5':
                    window.location = pathname + '#wetaase';
                    break;
                    case '6':
                      window.location = pathname + '#contact';
                      break;
          default:
            window.location = pathname + '#home';
        }
      });
    </script>

    <!-- begin map js -->
    <script type="text/javascript">
        var ten_colors = ["#084081" , "#0868ac","#2b8cbe", "#4eb3d3", "#7bccc4","#a8ddb5","#ccebc5", "#e0f3db", "#f7fcf0","#FFFFFF"];
        var svg_borders;
        var current_arrows=[];
        var current_countries=[];
        var currentCircles=[];
        var currentCountry = "UGA";
        var previousCountry = "UGA";
        var direction = "out";
        var unselected_color = "#ccc";
        var selected_color = "#ec6440";
        var border_color = "#999";
        var arrow_color = "#009CFF";
        var code_to_name ;
        var name_to_code;
        var code_to_coordinates;
        var userLatitude;
        var userLongitude;
        var GDP ={};
        var POP = {};
        var the_regexp = /^([^\/\?]+)\/?(\w*)$/i;

        function parseHash(hash, redrawing){
            res = the_regexp.exec(hash);
            if (res)
            {
                currentCountry = res[1];
                if (res[2]=='arrivals')
                    direction = 'out';
                else
                    direction = 'in';
            }
            if (redrawing)
            redraw();
        }

        function setHashSilently(hash){
            hasher.changed.active = false; //disable changed signal
            hasher.setHash(hash); //set hash without dispatching changed signal
            hasher.changed.active = true; //re-enable signal
        }
        function lolatoxy(point){
            var lo = point.longitude;
            var la = point.latitude;
            //lo = -122.18994140625; // SF
            //la = 37.33522435930639;
            //lo = 23.5546875; //south of south-africa
            //la = -37.33522435930639;
            var x = (lo+180) * (1200 / 360.0);
            var y = (180 - (la+90)) *  (700.0 / 180.0);
            return {"x":Math.floor(x),
                    "y":Math.floor(y)
            };
        }
        function flashCircles()
        {
            var c = paper.circle(userLongitude,userLatitude , 1);
            c.attr({"stroke":"white"});
            c.animate({r: 30,stroke:"#ec6440"}, 333, function(){
                var d = paper.circle(userLongitude,userLatitude , 1);
                c.animate({r: 60,stroke:"white"}, 333);
                d.attr({"stroke":"white"});
                d.animate({r: 30,stroke:"#ec6440"},333, function(){
                    var e = paper.circle(userLongitude,userLatitude , 1);
                    e.attr({"stroke":"white"});
                    e.animate({r: 30,stroke:"#ec6440"}, 333);
                    c.animate({r: 90,stroke:"#ec6440"}, 333);
                    d.animate({r: 60,stroke:"white"},333, function(){
                        c.remove();
                        d.remove();
                        e.remove();
                    });
                });

            });
        }
        function redraw()
        {
            var other_direction = "in";
            var hash_direction = "arrivals"
            if (direction =="in")
            {
                other_direction = "out";
                hash_direction = "departures";
            }

            setHashSilently(currentCountry+"/"+hash_direction);
            removeCurrentDrawings();
            $("#country_select").val(currentCountry);
            draw_arrows_and_paint_countries();

            $("#"+direction).removeClass("on");
            $("#"+other_direction).addClass("on")
        }




        function color_country(country,color,strokeColor)
        {
            var i;
            var l;
            if (svg_borders.hasOwnProperty(country))
                for (i=0, l= svg_borders[country].length; i<l; i++)
                {
                    if (strokeColor)
                        svg_borders[country][i].animate({"fill":color,"stroke":strokeColor,"stroke-width":2},333);
                    else
                        svg_borders[country][i].animate({"fill":color,"stroke":border_color,"stroke-width":1},333);
                }
        }

        function removeCurrentDrawings()
        {
            color_country(previousCountry,unselected_color);
            var i;
            var l;
            for (i=0,l=current_arrows.length;i<l;i++)
                current_arrows[i].remove();
            for (i=0,l=currentCircles.length;i<l;i++)
                currentCircles[i].remove();

            current_arrows=[];
            for(i=0,l=current_countries.length;i<l;i++)
                color_country(current_countries[i],unselected_color);
            current_countries=[]
        }

        function get_click_handler(country){
            return function(){
                previousCountry = currentCountry;
                currentCountry = country;
                redraw();
            }
        }

        function get_over_handler(country){
            return function(event){
                color_country(country,selected_color);
                var country_name =  $("#country_name_popup");

                country_name.empty();
                country_name.append("<span id='popup_country_name'> "+code_to_name[country] + "</span><table width='100%'>");
                var pop = insertDecimalPoints(parseFloat(POP[country]).toFixed(0));
                console.log(pop);
                if (!pop || pop=="NaN")
                    pop = "no data";

                country_name.append("<tr><th>Population</th><td style='text-align:right;'>" + pop+'</td></tr>');
                var gdp = insertDecimalPoints(parseFloat(GDP[country]).toFixed(0)) ;
                if (gdp && !isNaN(gdp))
                    gdp = '$ '+gdp;
                else
                    gdp ="no data";
                country_name.append("<tr><th>GDP per capita</th><td style='text-align:right;'>" + gdp+'</td></tr>');

                country_name.css("display","block");
                var canvasContainer = $("#canvas_container");
                var canvasTop = canvasContainer.offset().top;
                var canvasLeft = canvasContainer.offset().left;
                if (event.pageY<canvasTop+500)
                    country_name.css("top",event.pageY);
                else
                    country_name.css("top",event.pageY-170);
                country_name.css("left",Math.min(event.pageX,canvasLeft+1200-290));
            }
        }
        function insertDecimalPoints(s)
        {
            var l = s.length;
            var res = ""+s[0];
            for (var i=1;i<l-1;i++)
            {
                if ((l-i)%3==0)
                    res+= ".";
                res+=s[i];
            }
            res+=s[l-1];
            return res;
        }
        function get_out_handler(country){
            return function(event){
                var found=false;
                var i;
                var l;
                var country_name = $("#country_name_popup");
                country_name.css("display","none");
                for (i=0,l=current_countries.length;i<l;i++)
                {
                    if (country === current_countries[i])
                    {
                        found=true;
                        break;
                    }
                }
                if (country==currentCountry)
                    color_country(country,selected_color,'#ec6440');
                else if (found)
                  color_country(country,ten_colors[i])
                else
                    color_country(country,unselected_color);
            }
        }

        function draw_arrows_and_paint_countries()
        {

            $.getJSON("{{asset('map-data/immigration')}}" + "/" + direction+currentCountry+".json", function(data) {
                var countries_div = $("#countries");
                var country_name_div = $("#country_name");
                countries_div.empty();
                country_name_div.empty()
                country_name_div.append(code_to_name[currentCountry]);
                $("#popsize").empty();
                var popsize = insertDecimalPoints(parseFloat(POP[currentCountry]).toFixed(0));
                if (popsize!="NaN")
                    popsize = "Pop: "+popsize;
                if (popsize )
                    $("#popsize").append(popsize);
                var counter =0;
                $.each(data, function(country, val) {
                    var line;
                    var i;
                    var l;
                    var path;
                    line = paper.path(val[0]);
                    countries_div.append("<tr><td><div class=color_span style='height:1em;width:1em;background-color:"+ten_colors[counter] +" '>&nbsp;&nbsp;&nbsp;</div></td><td class='country_name' value='"+name_to_code[val[1]] +"'>"+val[1]+'</td><td style="text-align: right;">'+insertDecimalPoints(val[2])+"</td></tr>")
                    line.attr({stroke:arrow_color,'stroke-width':2,'opacity':0});
                    line.animate({stroke:arrow_color,'stroke-width':2,'opacity':1},333);
                    current_arrows.push(line);
                    color_country(country,ten_colors[counter]);
                    current_countries.push(country);

                    var coo = code_to_coordinates[country];
                    var circle = paper.circle(coo[0], coo[1], 2);
                    circle.attr("stroke", arrow_color);
                    circle.attr("fill", arrow_color);
                    currentCircles.push(circle);
                    coo = code_to_coordinates[currentCountry];
                    circle = paper.circle(coo[0], coo[1], 2);
                    circle.attr("stroke", "#ec6440");
                    circle.attr("fill", "#ec6440");
                    currentCircles.push(circle);
                    counter++;
                });

                color_country(currentCountry,selected_color,'#ec6440');
            });
        }

        var paper = new Raphael(document.getElementById('canvas_container'), 1200, 600);

        $.getJSON("{{asset('map-data/country-specific/world_svg_paths_by_code.json')}}", function(data) {
            svg_borders = {};
            $.each(data, function(country, val) {
                svg_borders[country]=[]
                var line;
                var i;
                var path;
                for (var i=0, l=val.length;i<l;i++)
                {
                    line = paper.path(val[i]);
                    line.attr({stroke:border_color,'stroke-width':1,'fill':unselected_color});
                    line.country=country;
                    $(line.node).click( get_click_handler(country));
                    $(line.node).mousemove( get_over_handler(country));
                    $(line.node).mouseout( get_out_handler(country));

                    svg_borders[country].push(line);
                }
            });
             $.getJSON("{{asset('map-data/country-specific/name_to_code.json')}}", function(data) {
                 name_to_code = data;
             });
             $.getJSON("{{asset('map-data/country-specific/GDP.json')}}", function(data) {
                 GDP = data;
             });
            $.getJSON("{{asset('map-data/country-specific/POP.json')}}", function(data) {
                 POP = data;
             });

             $.getJSON("{{asset('map-data/country-specific/code_to_name.json')}}", function(data) {
                 code_to_name = data;
                 var country_select = $("#country_select");
                 $.each(data, function(code, name) {
                     var selected='';
                     if (code=="BEL")
                        selected='selected="selected"';
                     country_select.append("<option value='"+code+"'" +selected+">"+name+'</option>');
                 });
                 country_select.change(function(e){
                    previousCountry = currentCountry;
                    currentCountry = $(this).val();
                    redraw();
                 });
                 //draw_arrows_and_paint_countries();
             });
            $.getJSON("{{asset('map-data/country-specific/code_to_coordinates.json')}}", function(data) {
                code_to_coordinates = data;
                redraw();
            });


        });
        $(function(){
            if (!Modernizr.geolocation)
                $("#geoloc_me").hide();
            container = $("#container");
            $("#in").click(function(e){
               e.preventDefault();
               direction='out';
               redraw();
            });
            $("#out").click(function(e){
               e.preventDefault();

               direction='in';
               redraw();
            });
            $("#geoloc_me").click(function(e){
                navigator.geolocation.getCurrentPosition(function(data){
                    var userCoordinates = lolatoxy(data.coords);
                    userLatitude = userCoordinates.y;
                    userLongitude = userCoordinates.x;
                    flashCircles();
                });
            });
            $('#geoloc_me').hover(
                function() { $(this).addClass('ui-state-hover'); },
                function() { $(this).removeClass('ui-state-hover'); }
            );
            $('#legend').draggable();
            $("#legend").delegate(".country_name","click",function(e){
                previousCountry = currentCountry;
                currentCountry = $(this).attr("value");
                redraw();
            });
            $("#legend").delegate(".country_name","mouseenter",function(e){
                $(this).css("text-decoration","underline");
            });
            $("#legend").delegate(".country_name","mouseleave",function(e){
                $(this).css("text-decoration","none");
            });
            var progressBar = $("#progressbar");

            if (window.applicationCache){
                var fileCounter=0;

                window.applicationCache.onprogress = function(event){
                    fileCounter++;
                    progressBar.progressbar({
                            value: fileCounter/4.84
                    });
                    $("#progressbarMessage").html((fileCounter/4.84).toFixed(0) + " % downloaded");
                }
                window.applicationCache.oncached = function(event){
                    $("#progressbarMessage").html("Offline cache ready. You can now access the site without internet connection.")
                };
                window.applicationCache.onnoupdate = function(event){
                    progressBar.progressbar({
                                value: 100
                        });
                    $("#progressbarMessage").html("Cache up-to-date. You can access the site without internet connection.")

                }
                window.applicationCache.onupdateready = function(event){
                    progressBar.progressbar({
                                value: 100
                        });
                    window.applicationCache.swapCache();
                    //$("#progressbarMessage").html("Cache up-to-date. A new version of the site is now available offline.")
                }
                window.applicationCache.onerror = function(event){
                    progressBar.progressbar({
                                value: 100
                        });
                    $("#social").hide();
                    $("#progressbarMessage").html("You're currently using the site offline.")
                }
            }

        });

        hasher.initialized.add(parseHash);
        hasher.changed.add(parseHash, true);
        hasher.init(); //start listening for history change
    </script>
    <!-- end map js -->
  </body>
</html>
