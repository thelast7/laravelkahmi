@extends('layouts.master-login')
@section('content')
   <!-- page title -->
    <section class="page-title style-2">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
            <h1>log in</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">home</a>
              </li>
              <li>
                <a href="#">register</a>
              </li>
              <li class="active">
                Log In
              </li>
            </ol>
          </div>
        </div>
      </div>
  </section>

<section>
	
@if(session('message'))
	<div class="alert alert-success" id="add-new-alert"> <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
        <i class="fa fa-info-circle"></i> {{ session('message') }}
    </div>
@endif 
 	<div class="container">
		<hr>
		
	<form role="form" method="POST" action="{{ url('login') }}">
   		{{ csrf_field() }}

   		<div class="container-login">
		<label><b>user name</b></label>
		<br>
		<input type="text" placeholder="Masukan user name" name="username" required>
		@if ($errors->has('username'))
			<span class="help-block">
				<strong>{{ $errors->first('username') }}</strong>
			</span>
		@endif   

		<br>
		<label><b>password</b></label>
		<br>
		<input type="password" placeholder="masukan password" name="password" required>
		@if ($errors->has('password'))
			<span class="help-block">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
		@endif   
		<br>

		<!-- <div class="clearfix"> -->
		<button type="submit" class="signupbtn">login</button>

		<br>
		<br>
		<a href="#" style="color:dodgerblue">lupa password?</a></label>
		<br>
		belum memiliki akun? <a href="{{ route('register') }}" style="color:dodgerblue">daftar sekarang!</a></label><p>
		</div>
    </form> 

    </div>
    </section> <!-- end page title -->
@endsection
