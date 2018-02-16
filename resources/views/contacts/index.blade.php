@extends('layouts.master')
@section('content')
    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>Contact</h1>
            <ol class="breadcrumb">
              <li>
                <a href="welcome">Home</a>
              </li>
              <li>
                <a href="about">Tentang Kami</a>
              </li>
              <li class="active">
                Contact Us
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->


    <!-- Contact -->
    <section class="section-wrap-mp contact" id="contact">
      <div class="container">

        <div class="row">

          <div class="col-md-4">
            <h5>Get in Touch</h5>
            <p>Mon-Fri: 8:00 – 20:00</p>

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Pointer"></i>
              </div>
              <h6>Address</h6>
              <p>Mayapada Tower 1 Lt.20-01B<br>
              Jl. Jend.Sudirman Kav.28, Setiabudi Jakarta Selatan, 12920</p>
            </div> <!-- end address -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Phone"></i>
              </div>
              <h6>Call Us</h6>
              <span>021 526 0727</span>
            </div> <!-- end phone number -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Mail"></i>
              </div>
              <h6>E-mail</h6>
              <a href="mailto:kahmipreneur@gmail.com">kahmipreneur@gmail.com</a>
            </div> <!-- end email -->

          </div>

          <div class="col-md-8">
            <form id="contact-form" action="#">

              <div class="row contact-row">
                <div class="col-md-6 contact-name">
                  <input name="name" id="name" type="text" placeholder="Name*">
                </div>
                <div class="col-md-6 contact-email">
                  <input name="mail" id="mail" type="email" placeholder="E-mail*">
                </div>
              </div>

              <input name="subject" id="subject" type="text" placeholder="Subject"> 
              <textarea name="comment" id="comment" placeholder="Message"></textarea>
              <input type="submit" class="btn btn-lg btn-color btn-submit" value="Send Message" id="submit-message">
              <div id="msg" class="message"></div>
            </form>
          </div> <!-- end col -->

        </div>
      </div>
    </section> <!-- end contact -->


    <!-- Google Map -->
    <div id="google-map" class="gmap" data-address="Mayapada Tower 1, Jakarta, Indonesia"></div>
@endsection
