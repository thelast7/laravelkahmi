@extends('layouts.master-two')   
@section('content')

  <div class="main-wrapper-mp oh">
    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>Forum</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>
              
              <li class="active">
                Forum
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->


    <!-- coming soon-->
    <section class="section-wrap page-404">
      <div class="container">

        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="mb-50">COMING SOON</h2>
            <class="mb-20">You can go back to <a href="{{ url('/') }}">Homepage</a> or use search>
            <form class="relative">
                <input type="search" placeholder="Search">
                <button type="submit" class="search-button"><i class="icon icon_search"></i></button>
              </form>
            </div>
        </div>

      </div>
    </section> <!-- end coming soon-->

@endsection