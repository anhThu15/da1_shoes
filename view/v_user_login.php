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
					<div class="login_box_img">
						<img class="img-fluid" src="template/karma-master/img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="?mod=user&act=signin">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="?mod=user&act=login" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control"  name="user" id="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="Password" class="form-control" name="pass" id="pass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
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
								<button type="submitt" value="submitt" name="submit" class="primary-btn" onclick="checkNull()" >Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
	<script>
		function checkNull(){
    var user = document.getElementById("name");
    var pass = document.getElementById("pass");
    if(user.value != "" && pass.value != ""){

    }else{
        alert("cannot be left blank");
		user.focus();
    }
    // if(pass.value != ""){

    // }else{
    //     alert("cannot be left blank pass");
	// 	pass.focus();
    // }
}
	</script>