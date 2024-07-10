<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="?mod=page&act=home">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Registration to enter</h3>
						<form class="row login_form" action="" method="post" enctype="multipart/form-data" id="contactForm" novalidate="novalidate">
						    <div class="col-md-12 form-group">
								<input type="text" class="form-control" name="fullname" id="fullname" placeholder="FullName" onfocus="this.placeholder = ''" onblur="this.placeholder = 'FullName'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="user" id="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="address" id="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'">
							</div>
							<div class="col-md-12 form-group">
								<input type="mail" class="form-control" name="email" id="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
				<?php if(isset($_SESSION['thongbao'])): ?>
                       <div class="alert alert-danger" role="alert">
                       <?= $_SESSION['thongbao'] ?>
                       </div>
                       <?php endif; unset($_SESSION['thongbao']); ?>

                <?php if(isset($_SESSION['loi'])): ?>
                         <div class="alert alert-danger" role="alert">
                         <?= $_SESSION['loi'] ?>
                         </div>
                <?php endif; unset($_SESSION['loi']); ?>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="submit" class="primary-btn"  onclick="checkNullss()" >Sign In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="template/karma-master/img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="?mod=user&act=login">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
	<script>

function checkNullss(){
var fullname = document.getElementById("fullname");
var name = document.getElementById("name");
var address = document.getElementById("address");
var email = document.getElementById("email");
if(fullname.value != "" && name.value != "" && address.value != "" && email.value != ""){
	<button type="submit" value="submit" name="submit" class="primary-btn"  >Sign In</button>
}else{
	alert("cannot be left blank fullname");
	
}
}
	</script>