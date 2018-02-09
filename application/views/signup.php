	<!--//header-->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids">
				<div class="book-grids">
					<div class="col-md-6 book-left">
						<div class="book-left-info">
							<h3>Create Your Govihar Account</h3>
						</div>
						<div class="book-left-form">
							<?php echo $this->session->flashdata('messages'); ?>
							<form id="myform" role="form" method="post" action="<?php echo base_url();?>admin_con/addUser" enctype="multipart/form-data">
								<p>Username</p>
								<input type="text" name="username" id="username">
								<p>Password</p>
								<input type="password" name="password" id="password">
								<p>ID Card</p>
								<input type="text" name="idcard" id="idcard">
								<p>Nama Panjang</p>
								<input type="text" name="namapanjang" id="namapanjang">
								<p>Jenis Kelamin</p>
								<select name="jenkel" id="jenkel" class="form-control" id="sel1">
    								<option>--Pilih Jenis Kelamin--</option>
    								<option value="Laki-Laki">Laki-Laki</option>
    								<option value="Perempuan">Perempuan</option>
  								</select>
  								<p>Email Address</p>
								<input type="text" name="email" id="email">
								<p>Alamat</p>
								<input type="text" name="alamat" id="alamat">
								<p>No Telepon</p>
								<input type="text" name="notelp" id="notelp" placeholder="+628xxxxxxxx">
								<input type="hidden" id="level" name="level" value="user">
								<button type="submit" class="btn btn-default">Register</button>
							</form>
						</div>
					</div>
					<div class="col-md-6 book-left book-right">
						<div class="book-left-info">
							<h3>Recommended</h3>
						</div>
						<div class="book-left-bottom">
							<div class="book-left-facebook">
								<a href="www.facebook.com">Connect with Facebook</a>
							</div>
							<div class="book-left-chrome">
								<a href="#">Connect with Google</a>
							</div>
						</div>
						<ul>
							<li>Access booking history with upcoming trips</li>
							<li>Print tickets and invoices</li>
							<li>Make checkouts simpler</li>
							<li>Enter your contact details only once</li>
							<li>Get alerts for low fares</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //container -->
	</div>