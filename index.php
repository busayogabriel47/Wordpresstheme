
<?php get_header(); ?>
<section class="container banner">

<div class="banner_1">
            <h3>Affordable Professional Websites</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <br>ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>

        </div>
   </section>

 <section class="container banner">
    <section class="container" id="form">
        <div class="row">
            <div class="col-6" id="para_1">
                <p id="newSletter">Subscribe To Our Newsletter</p>
            </div>
            <div class="col-6" id="form_1">
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                     <label for="inputEmail2" class="sr-only">Enter email</label>
                     <input type="email" class="form-control" id="inputEmail2" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-danger mb-2">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    <section class="container" id="three_column">
        <div class="row">
            <div class="col-12 col-md-4 animated bounce infinite delay-2s" id="icons">
                    <i class="fa fa-html5" aria-hidden="true"></i>
                    <h6>HTML5 Markup</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing <br>elit, sed do eiusmod tempor incididunt </p>
             </div>

            <div class="col-12 col-md-4  animated bounce infinite delay-2s" id="icons_2">
                    <i class="fa fa-css3" aria-hidden="true"></i>
                    <h6>CSS3 Styling</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing <br>elit, sed do eiusmod tempor incididunt </p>
            </div>

            <div class="col-12 col-md-4  animated bounce infinite delay-2s" id="icons_3">
                    <i class="fa fa-television " aria-hidden="true"></i>
                    <h6>Graphic Design</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing <br>elit, sed do eiusmod tempor incididunt </p>
            </div>
    
        </div>
    </section>

<?php get_template_part ('content', get_post_format()); ?>
    

<?php get_footer(); ?>