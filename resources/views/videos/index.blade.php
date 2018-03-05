@extends('layouts.master-two')   
@section('content')

    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>GALERI</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li class="active">
                GALERI
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->
  

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

               <div class="item">
                <a href="#">
                  <img src="img/project_4.jpg" alt="">
                </a>
              </div>

              <div class="item">
                <a href="#">
                  <img src="img/project_5.jpg" alt="">
                </a>
              </div>

              <div class="item">
                <a href="#">
                  <img src="img/project_6.jpg" alt="">
                </a>
              </div> 

              <div class="item">
                <a href="#">
                  <img src="img/project_7.jpg" alt="">
                </a>
              </div>

               <div class="item">
                <a href="#">
                  <img src="img/project_8.jpg" alt="">
                </a>
              </div>

              <div class="item">
                <a href="#">
                  <img src="img/project_9.jpg" alt="">
                </a>
              </div>

              <div class="item">
                <a href="#">
                  <img src="img/project_10.jpg" alt="">
                </a>
              </div> 

              <div class="item">
                <a href="#">
                  <img src="img/project_11.jpg" alt="">
                </a>
              </div>

               <div class="item">
                <a href="#">
                  <img src="img/project_12.jpg" alt="">
                </a>
              </div>
            </div> <!-- end owl carousel -->
          </div> <!-- end slider -->

          <div class="col-md-4">
            <div class="portfolio-description">
              <h2>FOTO: Ketika Founder KAHMIPRENEUR Sambangi Pasar Jatinegara </h2>
               Founder KAHMIPRENEUR, Kamrussamad, mengunjungi Pasar Jatinegara untuk melihat situasi terkini keadaan para pedagang di daerah yang terletak di Jakarta Timur. 
               <br>
               <br>
              <ul>
                <li><span>Date:</span> 18 Februari 2018</li>
                <li><span>Category:</span><a href="#"> Photo</a></li>
              </ul>
            <div class="entry-share clearfix">
                <h6>Share:</h6>
                <div class="socials">
                  <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                  <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                </div>
                </div>
            </div>    
          </div> <!-- end description -->
          
        </div>
      </div>
    </section> <!-- end portfolio single -->

  <section class="section-wrap-mp portfolio-single">
      <div class="container">
        <div class="row">

          <div class="col-md-8">
            <div id="owl-slider-two-img" class="owl-carousel owl-theme oh">

              <div id="item">
                <a href="#">
                  <img src="img/ks_pp1.jpg" alt="">
                </a>
              </div>

              <div id="item">
                <a href="#">
                  <img src="img/ks_pp2.jpg" alt="">
                </a>
              </div> 

              <div id="item">
                <a href="#">
                  <img src="img/ks_pp3.jpg" alt="">
                </a>
              </div>

              <div id="item">
                <a href="#">
                  <img src="img/ks_pp4.jpg" alt="">
                </a>
              </div>

              <div id="item">
                <a href="#">
                  <img src="img/ks_pp5.jpg" alt="">
                </a>
              </div>

              <div id="item">
                <a href="#">
                  <img src="img/ks_pp6.jpg" alt="">
                </a>
              </div>

              <div class="item">
                <a href="#">
                  <img src="img/ks_pp7.jpg" alt="">
                </a>
              </div>

              <div class="item">
                <a href="#">
                  <img src="img/ks_pp8.jpg" alt="">
                </a>
              </div>
        </div> <!-- end owl carousel -->
          </div> <!-- end slider -->


          <div class="col-md-4">
            <div class="portfolio-description">
              <h2>FOTO: Ketika Founder KAHMIPRENEUR Sambangi Pulau Pramuka </h2>
               Founder KAHMIPRENEUR, Kamrussamad, mengunjungi Pulau Pramuka untuk melihat situasi terkini keadaan para pedagang di daerah yang terletak di Kepulauan Seribu. 
               <br>
               <br>
              <ul>
                <li><span>Date:</span> 18 Februari 2018</li>
                <li><span>Category:</span><a href="#"> Photo</a></li>
              </ul>
            <div class="entry-share clearfix">
                <h6>Share:</h6>
                <div class="socials">
                  <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                  <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                </div>
                </div>
            </div>    
          </div>
        </section>

    <!-- Related Projects -->
    <section class="related-projects pb-90">
      <div class="container">
        <h4 class="heading-inline">LAINNYA</h4>
        <div class="customNavigation right">
          <a class="btn prev"><i class="fa fa-angle-left"></i></a>
          <a class="btn next"><i class="fa fa-angle-right"></i></a>
        </div>

        <div class="row mt-20">         
          <div id="owl-related-works" class="owl-carousel owl-theme">
           <div class="work-item mockups branding">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/IrWahid_MajelisWilayahJawatengah.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="img/IrWahid_MajelisWilayahJawatengah.jpg" class="lightbox-gallery" title="Ir. Wahid"><i class="fa fa-search"></i></a>
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3 style="color: #FFA500;">Ir.H.Wahid Dasuki</a></h3>
                  <span><a href="#">Ketua Majelis Wilayah KAHMI Jawa Tengah</a></span>
                </div>
              </div> 
            </div> <!-- end work-item -->

            <div class="work-item branding print">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/MTaufiq.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="img/MTaufiq.jpg" class="lightbox-gallery" title="M. Taufiq"><i class="fa fa-search"></i></a>
                      
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3 style="color: #FFA500;">Muhammad Taufik</h3>                 
                  <span><a href="#">Ketua Majelis Wilayah KAHMI DKI Jakarta</a></span>
                </div>
              </div> 
            </div>
            
            <div class="work-item branding print">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/drAhmadHusainiSpogMajelis_WilayahBangkaBelitung1.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="img/drAhmadHusainiSpogMajelis_WilayahBangkaBelitung1.jpg" class="lightbox-gallery" title="dr. Ahmad Husaini"><i class="fa fa-search"></i></a>
                      
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3 style="color: #FFA500;">dr. Achmad Husaini</a></h3>
                  <span><a href="#">Ketua Majelis KAHMI Wilayah Bangka Belitung</a></span>
                </div>
              </div> 
            </div> <!-- end work-item -->

            <div class="work-item branding print">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/MuhamadYusus_MajelisWilayahKalimantanBarat.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="img/MuhamadYusus_MajelisWilayahKalimantanBarat.jpg" class="lightbox-gallery" title="Muhammad Yusuf"><i class="fa fa-search"></i></a>
                      
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3 style="color: #FFA500;">Muhammad Yusuf</a> </h3>
                  <span><a href="#"> Ketua Majelis Wilayah KAHMI Kalimantan Barat</a></span>
                </div>
              </div> 
            </div> <!-- end work-item -->

            
            <div class="work-item branding print">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/IrMurlanTamba.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="img/IrMurlanTamba.jpg" class="lightbox-gallery" title="Ir. Murlan Tamba"><i class="fa fa-search"></i></a>
                      
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3 style="color: #FFA500;">Ir.H.Murlan Tamba</h3>                 
                  <span><a href="#">Ketua Majelis Wilayah KAHMI Sumatera Utara</a></span>
                </div>
              </div> 
            </div>
         
        <div class="work-item branding print">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/AnwarEsva_KahmiDKI.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="img/AnwarEsva_KahmiDKI.jpg" class="lightbox-gallery" title="Anwar Esva"><i class="fa fa-search"></i></a>
                      
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3 style="color: #FFA500;">Anwar Esva</h3>                 
                  <span><a href="#">Pengurus KAHMI DKI Jakarta</a></span>
                </div>
              </div> 
            </div> <!-- end work-item -->
          

          <div class="work-item branding print">
              <div class="work-container">
                <div class="work-img">
                  <img src="img/Komarudin.jpg" alt="">
                  <div class="portfolio-overlay">
                    <div class="project-icons">
                      <a href="img/Komarudin.jpg" class="lightbox-gallery" title="Komarudin"><i class="fa fa-search"></i></a>
                      
                    </div>
                  </div>
                </div>
                <div class="work-description">
                  <h3 style="color: #FFA500;">Komarudin</h3>                 
                  <span><a href="#">Pengurus KAHMI Jawa Timur/Alumni ITS</a></span>
                </div>
              </div> 
            </div>
          

        </div>
      </div>
    </section> <!-- end related projects-->
@endsection