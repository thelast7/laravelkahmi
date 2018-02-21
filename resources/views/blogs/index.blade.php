@extends('layouts.master')
@section('content')
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
                    <h4><a href="about">Sandiaga Uno Ajak Mahasiswa Setelah Lulus Menjadi Wirausaha</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">Rian Ubay</a></li>
                    <li>
                      <a href="#">July 10, 2015</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>Wakil Gubernur DKI Jakarta Sandiaga Salahuddin Uno mengisi kuliah umum atau studium generale bertema "Being A Winning Young Entrepreneur" di Fakultas Agama Islam, Universitas Muhammadiyah Prof. Dr. Hamka (Uhamka), Jakarta Selata. Dalam kesempatan ini, Sandi menyampaikan mahasiswa pasca-lulus meraih gelar sarjana dapat membuka lapangan pekerjaan melalui wirausaha daripada mencari lapangan pekerjaan.</p>
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
                    <h4><a href="about">CEO HijUp : Follow your heart,<br> follow your dream.</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">Iqbal Buchori</a></li>
                    <li>
                      <a href="#">Februari 11, 2018</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>Terisnpirasi oleh mata kuliah Management Of Change yang ia dapat ketika ia mengenyam pendidikan S1, Diajeng Lestari bertekad untuk menjadi agen perubahan. Setelah memutuskan untuk berhenti bekerja sebagai Marketing Researcher di sebuah perusahaan, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion</p>
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
                    <h4><a href="blog-3.html">All Process Food Lab Studio</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">John Marshal</a></li>
                    <li>
                      <a href="#">July 10, 2015</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>Terisnpirasi oleh mata kuliah Management Of Change yang ia dapat ketika ia mengenyam pendidikan S1, Diajeng Lestari bertekad untuk menjadi agen perubahan. Setelah memutuskan untuk berhenti bekerja sebagai Marketing Researcher di sebuah perusahaan, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion, alumni FISIP UI ini meneguhkan niatnya tersebut khususnya di ranah Islamic Fashion</p>
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
