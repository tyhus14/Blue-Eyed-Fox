<!DOCTYPE html>
<html>
    <head>
        <title>Blue Eyed Fox</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset("/css/app.css") }}">
    </head>
    <body>
      <header class="header">
        <div class="container">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Blue Eyed Fox</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-item" href="#">Work</a></li>
                    <li><a class="nav-item" href="#">About</a></li>
                    <li><a class="nav-item" href="#">Contact</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
      </header>



      <div class="carousel">
        <div class="carousel-item carousel-item-1">
            <div class="container">
                <div class="carousel-body">
                    <h1>This is sample text.</h1>
                </div>
            </div>
        </div>
        <div class="carousel-item"></div>
        <div class="carousel-item"></div>
      </div>

      <div class="featured">
            <div class="container">
                <div class="featured-item col-xs-12 col-sm-6 col-lg-4">
                    <div class="featured-body">
                        <i class="featured-icon"></i>
                        <h3 class="featured-title">Web Design/Development</h3>
                        <p class="featured-info">Making pixel perfect layouts in a way that connects the users eye in an eye catching, organized and flowing way is what we do.</p>
                    </div>
                </div>
                <div class="featured-item col-xs-12 col-sm-6 col-lg-4">
                    <div class="featured-body">
                        <i class="featured-icon"></i>
                        <h3 class="featured-title">UI/UX Design</h3>
                        <p class="featured-info">Making pixel perfect layouts in a way that connects the users eye in an eye catching, organized and flowing way is what we do.</p>
                    </div>
                </div>
                <div class="featured-item col-xs-12 col-sm-6 col-lg-4">
                    <div class="featured-body">
                        <i class="featured-icon"></i>
                        <h3 class="featured-title">Responsiveness</h3>
                        <p class="featured-info">Making pixel perfect layouts in a way that connects the users eye in an eye catching, organized and flowing way is what we do.</p>
                    </div>
                </div>
            </div>
      </div>

      <div class="about">
        <div class="container">
            <div class="col-md-8">
               <h3>This is the long title that goes across this section</h3>
               <h4>This is the second titl thing here</h4>
               <div class="col-md-6">Column 1</div>
               <div class="col-md-6">Column 2</div>
            </div>
            <div class="col-md-4">4 column</div>
        </div>
      </div>

      <div class="contact">
        <div class="container">
            <div class="contact-body">
                <div class="col-xs-12 col-md-6">
                    <div class="featured-item">
                        <div class="featured-body">
                            <i class="featured-icon featured-icon--dark"></i>
                            <h3 class="featured-title">Web Design/Development</h3>
                            <p class="featured-info">Making pixel perfect layouts in a way that connects the users eye in an eye catching, organized and flowing way is what we do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">Column 2</div>
            </div>
        </div>
      </div>

        
        <footer>
            <script src="{{ asset("/js/modernizr-custom.js") }}"></script>
            <script src="{{ asset("/js/all.js") }}"></script>
        </footer>
    </body>
</html>
