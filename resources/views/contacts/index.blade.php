@extends('layouts.master-two')   
@section('content')

    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>Contact</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              <li>
                <a href="{{ url('about') }}">Tentang Kami</a>
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
            Mon-Fri: 8:00 – 20:00

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Pointer"></i>
              </div>
              <h6>Address</h6>
              Mayapada Tower 1 Lt.20-01B<br>
              Jl. Jend.Sudirman Kav.28, Setiabudi Jakarta Selatan, 12920
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

          @if(Session::has('status'))
            <div class="alert alert-success">{{ Session::get('status') }}</div>
          @endif


          <div class="col-md-8">
            <form action="" method="post">

                    {{ csrf_field() }}

                    <label for="name">Name</label>
                    <input class="form-control" id="name" type="text" name="name" placeholder="Masukan Nama" />

                    <label for="email">Email</label>
                    <input class="form-control" id="email" type="text" name="email" placeholder="Masukan Alamat e-mail" />
                    
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="Masukan Pesan" cols="30" rows="10"></textarea>

                    <br><br>

                    <button class="btn btn-success btn-block">Send</button>
                <form>
          </div> <!-- end col -->

        </div>
      </div>
    </section> <!-- end contact -->
@endsection
