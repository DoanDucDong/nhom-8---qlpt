@extends('layouts.master')
@section('content')
<div class="container" style="padding-left: 0px;padding-right: 0px;">
	<div class="gap"></div>
	<div class="row">
 	<h2 class="title-comm"><span class="title-holder">ĐĂNG NHẬP CHỦ TRỌ</span></h2>
		<div class="line-container">
			<div class="line-title"></div>
		</div>
	</div>
 	<div class="login-page">
  <div class="form">
    <form class="form-horizontal" method="POST" action="{{ route('user.login') }}" >
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
      	<input type="text"  name="txtuser" placeholder="name"/>
      	<input type="password" name="txtpass" placeholder="password"/>
      	<button type="submit">Login</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
  </div>
</div>
	</div>

</div>
@endsection