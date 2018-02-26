@extends('layouts.master')
@section('content')

                <section class="section-wrap-mp">
                  <div class="container relative">
                <div class="entry-item">
                    <div class="entry blockquote mt-0">             
                      <blockquote class="blockquote-style-1 text-LEFT mb-0">
                       <!--  <i class="fa fa-quote-RIGHT"></i> -->
                        
              
              <B>KAHMIPRENEUR adalah sebuah konsep, gagasan, dan ide untuk menjawab berbagai 
              isu yang berkembang di Indonesia terkait dengan KAHMI, diantaranya:<B>
              <ul class="bullets">

              <li>Kritik terhadap KAHMI yang lebih banyak berpolitik, sehingga gagasan KAHMI 
                  Entrepreneur adalah gerakan merubah mindset dari pencari lapangan kerja 
                  menjadi pencipta lapangan kerja;</li>
              <li>KAHMI Entrepreneur adalah jawaban atas tuntutan publik dalam melahirkan 
                  wirausaha baru agar Indonesia memiliki wirausaha lebih banyak lagi seperti yang 
                  disyaratkan untuk menjadi negara maju. Maka negara tersebut harus memiliki 
                  entrepreneur minimal 2% dari total populasi penduduknya.</li>
              <li>Program ini adalah upaya untuk merubah mindset alumni HMI dari political oriented 
                  menjadi entrepreneur oriented;</li>
              <li>Konsep ini sangat tepat untuk menjawab tingginya bonus demografi (angkatan 
                  kerja produktif) Indonesia 2020.</li>
              </ul>
                        
                        <!-- <i class="fa fa-quote-left"></i> -->
                      </blockquote>
                    </div>
                  </div>
                  </div>
          </section>

    <section class="section-wrap bg-light from-blog" id="blog">
      <div class="container"> 
        <div class="row heading">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center bottom-line">ENTREPRENEUR NEWS</h2>
            <p class="subheading text-center">Our Latest News</p>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div id="owl-blog" class="owl-carousel owl-theme">
              <div class="blog-col">
                <div class="entry-img">
                  <a href="about">
                    <img src="img/blog_1.jpg" alt="">
                  </a>
                </div>
                <div class="entry-box">
                  <div class="entry-title">
                    <h4><a href="about">Entrepreneurship di Zaman Rasulullah Shallallahu ‘Alaihi Wa Sallam</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">Iqbal Buchori</a></li>
                    <li>
                      <a href="#">July 10, 2015</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>
                    Pernah Rasulullah Shallallahu ‘Alaihi Wa Sallam  ditanya oleh para Sahabat, “Pekerjaan apakah yang paling baik ya
                    Rasulullah?” Rasulullah menjawab, “Seseorang yang bekerja dengan tangannya sendiri dan jual
                    beli yang bersih.” (HR. Al-Baihaqi) Kesuksesan Nabi Muhammad Saw telah banyak dibahas para ahli sejarah, baik sejarawan Islam.
                    Maupun sejarawan Barat. Salah satu sisi kesuksesan Nabi Muhammad adalah kiprahnya sebagai
                    seorang pedagang (wirausahawan)..</p>
                    <a href="{{ url('isiberita') }}" class="read-more">Selengkapnya</a>
                     <i class="icon arrow_right"></i>
                  </div>
                </div>
              </div> <!-- end post -->

              <div class="blog-col">
                <div class="entry-img">
                  <a href="about">
                    <img src="img/blog_2.jpg" alt="">
                  </a>
                </div>
                <div class="entry-box">
                  <div class="entry-title">
                    <h4><a href="about">Enterpreneurship di Indonesia</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">Iqbal Buchori</a></li>
                    <li>
                      <a href="#">Februari 11, 2018</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>Di Indonesia sendiri, secara historis sudah
                    dikenal sejak diperkenalkan oleh Richard
                    Castillon pada tahun 1755. Namun di Indonesia,
                    istilah entrepreneurship baru dikenal
                    pada akhir abad ke 20. Di abad ke 19 dan 20,
                    wirausahawan didefinisikan sebagai seseorang
                    yang mengorganisasikan dan mengatur
                    perusahaan untuk meningkatkan pertambahan
                    nilai personal. Di abad ke 19 dan 20 ini, seorang wirausaha
                    juga dapat dipandang sebagai orang yang
                    memperbaharui atau melakukan revolusi terhadap
                    pola-pola produksi dengan..  </p>
                    <a href="{{ url('isiberita') }}" class="read-more">Selengkapnya</a>
                     <i class="icon arrow_right"></i>
                  </div>
                </div>
              </div> <!-- end post -->

              <div class="blog-col">
                <div class="entry-img">
                  <a href="about">
                    <img src="img/blog_3.jpg" alt="">
                  </a>
                </div>
                <div class="entry-box">
                  <div class="entry-title">
                    <h4><a href="#">All Process Food Lab Studio</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">John Marshal</a></li>
                    <li>
                      <a href="#">July 10, 2015</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>Terisnpirasi oleh mata kuliah Management Of Change yang ia dapat ketika ia mengenyam pendidikan S1, Diajeng Lestari bertekad untuk menjadi agen perubahan. Setelah memutuskan untuk berhenti bekerja sebagai Marketing Researcher di sebuah perusahaan, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion..</p>
                     <i class="icon arrow_right"></i>
                  </div>
                </div>
              </div> <!-- end post -->

            </div>
            <div class="customNavigation mt-40 text-center">
              <a class="prev"><i class="icon arrow_left"></i></a>
              <a class="next"><i class="icon arrow_right"></i></a>
            </div>

          </div> <!-- end row -->
        </div>
      </div>
    </section> <!-- end from blog -->
@endsection
