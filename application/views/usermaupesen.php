  <!--//header-->
  <!-- banner -->
  <div class="banner">
    <!-- container -->
    <div class="container">
      <div class="col-md-12">
      </div>
      <div class="clearfix"> </div>
    </div>
    <!-- //container -->
  </div>
  <!-- //banner -->
  <div class="move-text">
    <div class="marquee">Register your hotel with us free of cost.<a href="signup.html">Here</a></div>
    <script type="text/javascript" src="<?php echo URL_ASSETS;?>frontend/js/jquery.marquee.min.js"></script>
    <script>
      $('.marquee').marquee({ pauseOnHover: true });
      //@ sourceURL=pen.js
    </script>
  </div>

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
                <p>Pilih Tempat Duduk</p>
                <?php foreach($isi as $row) {?>
                <?php for ($i=1; $i<=$row['jml'] ; $i++) { ?>
                <div class="col-md-2">
                  <input type="checkbox" name="posisi" id="posisi">
                  A-<?php echo $i; ?>
                </div>
                <?php } ?>
                <?php } ?>
                <input type="hidden" id="level" name="level" value="user">
                <div class="col-md-12">
                  <p><button type="submit" class="btn btn-default">Register</button></p>
                </div>
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
              <?php foreach($isi as $row) {?>
              <li>Berangkat Dari : <?php echo $row['kota_awal']; ?> (<?php echo $row['bandara_awal']; ?>)</li>
              <li>Tujuan : <?php echo $row['kota_akhir']; ?> (<?php echo $row['bandara_akhir']; ?>)</li>
              <li>Waktu Keberangkatan : <?php echo $row['tanggalbrngkt']; ?> <?php echo $row['jam_brngkt']; ?></li>
              <li>Waktu Sampai : <?php echo $row['tanggalsampai']; ?> <?php echo $row['jam_sampai']; ?></li>
              <li>Bandara Transit : <?php echo $row['bandara_transit']; ?></li>
              <?php } ?>
            </ul>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
    <!-- //container -->
  </div>

<!-- popular-grids -->
<div class="popular-grids">
  <!-- container -->
  <div class="container">
    <div class="popular-info">
      <h3>Popular Places</h3>
    </div>
    <!-- slider -->
    <div class="slider">
      <div class="arrival-grids">      
        <ul id="flexiselDemo1">
          <li>
            <a href="products.html"><img src="<?php echo URL_ASSETS;?>frontend/images/a3.jpg" alt=""/>
            </a>
          </li>
          <li>
            <a href="products.html"><img src="<?php echo URL_ASSETS;?>frontend/images/a2.jpg" alt=""/>
            </a>
          </li>
          <li>
            <a href="products.html"><img src="<?php echo URL_ASSETS;?>frontend/images/a4.jpg" alt=""/>
            </a>
          </li>
          <li>
            <a href="products.html"><img src="<?php echo URL_ASSETS;?>frontend/images/a1.jpg" alt=""/>
            </a>
          </li>
        </ul>
        <script type="text/javascript">
          $(window).load(function() {     
          $("#flexiselDemo1").flexisel({
          visibleItems: 4,
          animationSpeed: 1000,
          autoPlay: true,
          autoPlaySpeed: 3000,        
          pauseOnHover:true,
          enableResponsiveBreakpoints: true,
          responsiveBreakpoints: { 
          portrait: { 
          changePoint:480,
          visibleItems: 1
        }, 
        landscape: { 
        changePoint:640,
        visibleItems: 2
      },
      tablet: { 
      changePoint:768,
      visibleItems: 3
    }
  }
});
});
</script>
<script type="text/javascript" src="<?php echo URL_ASSETS;?>frontend/js/jquery.flexisel.js"></script>      
</div>
</div>
<!-- //slider -->
</div>
<!-- //container -->
</div>