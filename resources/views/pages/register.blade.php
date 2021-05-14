<?php include_once('header.php');
	include_once('function/function.php');
?>
<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">Đăng ký</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="done">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					Your message has been sent. Thank you!
				</div>
			</div>
			<form id="contactform" method="post">
				<div class="form">
					Họ tên: <input class="register_input" type="text" name="name" maxlength="100" placeholder="Nhập họ tên">
					Số điện thoại: <input class="register_input" type="text" name="phone" maxlength="10" placeholder="Nhập số điện thoại">
					Tên tài khoản: <input class="register_input" type="text" name="username" maxlength="16" placeholder="Nhập tên tài khoản">
					Mật khẩu: <input class="register_input" id="password" type="password" maxlength="50" name="password" placeholder="Nhập mật khẩu">
					Xác nhận mật khẩu: <input class="register_input" id="re-password" maxlength="50" type="password" name="re-password" placeholder="Xác nhận mật khẩu">
					Địa chỉ email: <input class="register_input" type="email" name="email" maxlength="100" placeholder="Nhập địa chỉ email">
					<input type="submit" id="register" class="clearfix btn" value="Đăng ký">
				</div>
			</form>
			<?php
				if(!empty($_POST)){
					if (register($_POST))
						echo "Đăng ký thành công";
					else
						echo "Gặp lỗi trong quá trình đăng ký";
				}
			?>
		</div>
	</div>
</div>
</div>
</section>
<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
			<h1 class="callactiontitle"> Promote Items Area Give Discount to Buyers <span class="callactionbutton"><i class="fa fa-gift"></i> WOW24TH</span>
			</h1>
		</div>
	</div>
</div>
</div>
</section>
<!-- FOOTER =============================-->
<div class="footer text-center">
<div class="container">
	<div class="row">
		<p class="footernote">
			 Connect with Scorilo
		</p>
		<ul class="social-iconsfooter">
			<li><a href="#"><i class="fa fa-phone"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
		</ul>
		<p>
			 &copy; 2017 Your Website Name<br/>
			Scorilo - Free template by <a href="https://www.wowthemes.net/">WowThemesNet</a>
		</p>
	</div>
</div>
</div>
<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script src="js/validate.js"></script>
</body>
</html>