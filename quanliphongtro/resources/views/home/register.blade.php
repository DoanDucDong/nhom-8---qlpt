@extends('layouts.master')
@section('content')
<div class="container" style="padding-left: 0px;padding-right: 0px;">
	<div class="gap"></div>
	<div class="row">
 	<h2 class="title-comm"><span class="title-holder">ĐĂNG KÝ CHỦ TRỌ</span></h2>
		<div class="line-container">
			<div class="line-title"></div>
		</div>
	</div>
 	<div class="login-page">
  <div class="form">
    <form class="">
      <input type="text" placeholder="Tên chủ trọ"/>
      <input type="text" placeholder="Tài khoản"/>
      <input type="text" placeholder="Mật khẩu"/>
      <input type="text" placeholder="Nhập lại mật khẩu"/>
      <input type="text" placeholder="Địa chỉ"/>
      <input type="text" placeholder="Số điện thoại"/>
      <button>Đăng ký</button>
      <p class="message">Already registered? <a href="/user/login">Sign In</a></p>
    </form>
   
  </div>
</div>
	</div>
	
	</div>
	</div>

</div>
@endsection