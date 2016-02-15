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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
                    <h1>Websites</h1>
                    <span>Interactive website design</span>
                </div>
            </div>
        </div>
        <div class="carousel-item carousel-item-2">
            <div class="container">
                <div class="carousel-body">
                    <h1>Web Applications</h1>
                    <span>Single page apps development</span>
                </div>
            </div>
        </div>
        <div class="carousel-item carousel-item-3">
            <div class="container">
                <div class="carousel-body">
                    <h1>WordPress</h1>
                    <span>Content management system</span>
                </div>
            </div>
        </div>
      </div>

      <div class="featured">
            <div class="container">
                <div class="featured-item col-xs-12 col-sm-6 col-lg-4">
                    <div class="featured-body">
                        <div class="featured-icon"><i class="fa fa-laptop fa-lg"></i></div>
                        <h3 class="featured-title">Web Design/Development</h3>
                        <p class="featured-info">Through this discovery process we will design and conceptulaize a visually exciting and content driven website that conveys your message, while building your business.</p>
                    </div>
                </div>
                <div class="featured-item col-xs-12 col-sm-6 col-lg-4">
                    <div class="featured-body">
                        <div class="featured-icon"><i class="fa fa-desktop fa-lg"></i></div>
                        <h3 class="featured-title">UI/UX Design</h3>
                        <p class="featured-info">Making pixel perfect layouts in a way that connects the users eye in an eye catching, organized and flowing way is what we do.</p>
                    </div>
                </div>
                <div class="featured-item col-xs-12 col-sm-6 col-lg-4">
                    <div class="featured-body">
                        <div class="featured-icon"><i class="fa fa-paint-brush fa-lg"></i></div>
                        <h3 class="featured-title">Graphic Design</h3>
                        <p class="featured-info">Your identity needs to translate to all devices, screens and media. We offer creative solutions in web design, marketing materials, logos, presentation materials and brochures in an unique way.</p>
                    </div>
                </div>
            </div>
      </div>

      <div class="about">
        <div class="container">
            <div class="col-md-8">
               <h3 class="about-title">Blue Eyed Fox is is a small creative web design and development consulting firm.</h3>
               <h4 class="about-secondary-title">Digital marketing and web application/website development</h4>
               <div class="col-md-6 about-body">
                    <span>What We Do</span>
                    <p>A group of very talented professionals collaborate with you to custom design a web application/website with your specific needs in mind. We understand the perfect balance between technical fluency and artistic creativity.</p>

                    <p>Your website can be built and optimized for multi platforms with SEO (search engine optimization) on desktop and mobile devices. We can include informational, e-commerce, social media, blogs and various marketing campaigns which translate into sales for you.</p>
                    <a href="#" class="btn-primary">More</a>
                </div>
               <div class="col-md-6 about-body">
                    <span>Vision</span>
                    <p>We are excellent problem solvers and are committed to careful attention to our clients. We will make the process easy for you by offering creative solutions while maintaining budgets and adhering to deadlines. Whether you are building a website from scratch or revamping a current website, we bring innovation and functionality in everything we do.</p>
                    <a href="#" class="btn-primary">More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-logo-container">
                    <img class="about-logo" src="images/logo.png" alt="Logo">
                </div>
            </div>
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

        
        <footer class="footer">
            <div class="container">
                This is text
            </div>
        </footer>

        <script src="{{ asset("/js/modernizr-custom.js") }}"></script>
        <script src="{{ asset("/js/all.js") }}"></script>
    </body>
</html>
