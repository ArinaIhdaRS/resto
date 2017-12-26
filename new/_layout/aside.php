<?php
session_start();
 ?>
<!-- Menu Aside -->
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

		<!-- Login Logout -->
		<?php if (isset($_SESSION['username']))
		{
			echo '<h1 id="fh5co-logo">
				<a href="http://localhost/new/resto/new/login/">
					'.$_SESSION["username"].'
				</a>
			</h1>';
		}
	else
	{
		header("location:http://localhost/new/resto/new/login/");
	}
	?>
		<!-- Login Logout -->

			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="http://localhost/new/resto/new">HOME</a></li>
					<li><a href="http://localhost/new/resto/new/order">ORDER NOW</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2017 Kelompok7</span></small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-envelope"></i></a></li>
					<!--<li><a href="#"><i class="icon-linkedin"></i></a></li>-->
				</ul>
			</div>
		</aside>
		<!-- Menu Aside -->
