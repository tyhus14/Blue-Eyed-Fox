@extends ("layouts.master")

@section("content")



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

      <div id="about" class="about">
        <div class="container">
            <div class="col-md-8">
               <h3 class="about-title">Blue Eyed Fox is is a small creative web design and development consulting firm.</h3>
               <h4 class="about-secondary-title">Digital marketing and web application/website development</h4>
               <div class="col-md-6 about-body">
                    <span>What We Do</span>
                    <p>A group of very talented professionals collaborate with you to custom design a web application/website with your specific needs in mind. We understand the perfect balance between technical fluency and artistic creativity.</p>
                    <a href="#" class="btn-primary">More</a>
                </div>
               <div class="col-md-6 about-body">
                    <span>Vision</span>
                    <p>We are excellent problem solvers and are committed to careful attention to our clients.</p>
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

      <div class="note">
        <div class="container">
            <div class="note-body">
                <div class="col-xs-12 ">
                    <div class="featured-item">
                        <div class="featured-body">
                            <div class="featured-icon featured-icon--dark"><i class="fa fa-lightbulb-o fa-lg"></i></div>
                            <h3 class="featured-title">Why the arctic fox?</h3>
                            <p class="featured-info">The Celtic legends believed that the fox were guides and honored for their keen vision and wisdom. The blue eyed arctic fox were noted for their cleverness and cunning ability for quick thinking and adaptability. <br> <br> Responsive and swift... creative problem solvers, the fox are determined and powerfully focused to always hit their target. We believe the blue eyed fox embodies the spirit of our oragnization's approach and philosophy.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xs-12 col-md-6">Column 2</div> -->
            </div>
        </div>
      </div>

      <div id="contact" class="contact">
        <div class="container">
            <div class="col-xs-12 col-md-4 contact-col">
                <h1>Features</h1>
                <div class="contact-block contact-block-1">
                    <div class="contact-block-body">
                        <h4>Responsive</h4>
                        <p>Works on all devices.</p>
                        <a href="/features">more <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="contact-block contact-block-2">
                    <div class="contact-block-body">
                        <h4>SEO</h4>
                        <p>Increase views.</p>
                        <a href="/features">more <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="contact-block contact-block-3">
                    <div class="contact-block-body">
                        <h4>Analytics</h4>
                        <p>Visits to page.</p>
                        <a href="/features">more <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 contact-col">
                <h1>Work with Us</h1>
                <form class="js-contact-form contact-form" action="http://formspree.io/tyler@blueeyedfox.com">
                    <div class="form-content-main">
                        <span>Feel free to contact us if you would like to work with us or if you would like learn more about what we do.</span>
                        <input type="text" placeholder="name...">
                        <input type="email" placeholder="email...">
                        <textarea placeholder="message..."></textarea>
                        <input class="btn-primary btn-submit" type="submit" value="submit">
                    </div>
                    <span class="form-submit">Thank you for contacting Blue Eyed Fox. We will contact you shortly.</span>
                </form>
            </div>
            <div class="col-xs-12 col-md-4 contact-col contact-col-three">
                <h1>Contact</h1>
                <div class="contact-block contact-block-icon">
                    <i class="fa fa-home"></i>
                    <div class="contact-block-body">
                        <h4>Location</h4>
                        <p>Greenville, SC</p>
                    </div>
                </div>
                <div class="contact-block contact-block-icon">
                    <i class="fa fa-phone"></i>
                    <div class="contact-block-body">
                        <h4>Phone</h4>
                        <p>864-723-6389</p>
                    </div>
                </div>
                <div class="contact-block contact-block-icon">
                    <i class="fa fa-envelope"></i>
                    <div class="contact-block-body">
                        <h4>Email</h4>
                        <p>tyler@blueeyedfox.com</p>
                    </div>
                </div>
            </div>
        </div>
      </div>

        
@endsection
