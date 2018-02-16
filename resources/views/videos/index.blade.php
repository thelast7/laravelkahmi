@extends('layouts.master')
@section('content')
    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>VIDEO</h1>
            <ol class="breadcrumb">
              <li>
                <a href="welcome">Home</a>
              </li>
              <li class="active">
                Video
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->
  <body/>

<section class="section-wrap-mp portfolio-single">
      <div class="container">
        <div class="row">

          <div class="col-md-8">
            <div id="owl-slider-one-img" class="owl-carousel owl-theme oh">

              <div class="item">
                <a href="#">
                  <img src="img/project_1.jpg" alt="">
                </a>
              </div>

              <div class="item">
                <a href="#">
                  <img src="img/project_2.jpg" alt="">
                </a>
              </div> 

              <div class="item">
                <a href="#">
                  <img src="img/project_3.jpg" alt="">
                </a>
              </div>

            </div> <!-- end owl carousel -->
          </div> <!-- end slider -->

          <div class="col-md-4">
            <div class="portfolio-description">
              <h2>title video</h2>
              <p>Lorem Ipsum.
                dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
              <ul>
                <li><span>Date:</span> 15 May, 2018</li>
                <li><span>Category:</span><a href="#"> Video</a></li>
                <li><span>Client:</span><a href="#"> Lorem Ipsum </a></li>
              </ul>
              <a href="#" class="btn btn-sm btn-dark">View Project</a>
                    <div class="entry-share clearfix">
                <h6>Share:</h6>
                <div class="socials">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p"></i></a>
                </div>
                    </div>
            </div>    
          </div> <!-- end description -->
          
        </div>
      </div>
    </section> <!-- end portfolio single -->


    <!-- Related Projects -->
    <section class="related-projects pb-90">
      <div class="container">
        <h4 class="heading-inline">Another Video</h4>
        <div class="customNavigation right">
          <a class="btn prev"><i class="fa fa-angle-left"></i></a>
          <a class="btn next"><i class="fa fa-angle-right"></i></a>
        </div>
        <div class="row mt-20">         

          <div id="owl-related-works" class="owl-carousel owl-theme">

            <div class="work-item mockups branding">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/project_5.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="img/project_5_big.jpg" class="lightbox-gallery" title="Cup Mockup"><i class="fa fa-search"></i></a>
                      <a href="portfolio-single.html" class="project-icon"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3><a href="#">Cup Mockup</a></h3>
                  <span><a href="#">Branding</a></span>
                </div>
              </div> 
            </div> <!-- end work-item -->

            <div class="work-item branding print">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/project_2.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="http://vimeo.com/19270640" class="lightbox-gallery mfp-iframe"><i class="fa fa-search"></i></a>
                      <a href="portfolio-single.html" class="project-icon"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3><a href="#">Vimeo Lightbox</a></h3>
                  <span><a href="#">Branding</a></span>
                </div>
              </div> 
            </div> <!-- end work-item -->

            <div class="work-item branding">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/project_3.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="https://www.youtube.com/watch?v=Scxs7L0vhZ4?autoplay=1" class="lightbox-gallery mfp-iframe"><i class="fa fa-search"></i></a>
                      <a href="portfolio-single.html" class="project-icon"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3><a href="#">Youtube Lightbox</a></h3>
                  <span><a href="#">Branding</a></span>
                </div>
              </div> 
            </div> <!-- end work-item -->

            <div class="work-item print mockups">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/project_4.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="img/project_4_big.jpg" class="lightbox-gallery" title="Brod Identity"><i class="fa fa-search"></i></a>
                      <a href="portfolio-single.html" class="project-icon"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3><a href="#">Brod Identity</a></h3>
                  <span><a href="#">Branding</a></span>
                </div>
              </div> 
            </div> <!-- end work-item -->

          </div> <!-- end owl carousel-->
        </div>
      </div>
    </section> <!-- end related projects-->
@endsection
