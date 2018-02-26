
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
              <h3>PEMBAYARAN</h3>
            </div>
            <form id="myform" role="form" method="post" action="<?php echo base_url();?>admin_con/maumilihdudukan" enctype="multipart/form-data">
            <div class="book-left-form">
                <div class="col-md-12">
                <p></p>
                </div>
                <div class="col-md-12">
                <p>ID Card</p>
                <input type="text" name="idcard[]" >
                </div>
                <div class="col-md-12">
                <p>Nama Panjang</p>
                <input type="text" name="namapanjang[]" >
                </div>
                <div class="col-md-12">
                <p>Jenis Kelamin</p>
                <select name="jenkel[]" class="form-control" id="sel1">
                    <option>--Pilih Jenis Kelamin--</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
                <div class="col-md-12">
                <p>Email Address</p>
                <input class="form-control" type="email" name="email[]" >
                </div>
                <div class="col-md-12">
                <p>Alamat</p>
                <input type="text" name="alamat[]" >
                </div>
                <div class="col-md-12">
                <p>No Telepon</p>
                <input type="text" name="notelp[]" placeholder="+628xxxxxxxx">
                </div>
                <input type="hidden" name="id_rute" value="<?php foreach($isi as $row) {?><?php echo $row['id_rute']; ?><?php } ?>" />
                <input type="hidden" name="ppl" value="<?php echo $ppl['jumlah_kursi'];?>" />
                <div class="col-md-12">
                <p>Kode Reservasi</p>
                <input type="text" readonly="true" name="reservation_code" value="<?php 
                        Function getRandomCode(){
                        $an = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        $su = strlen($an) - 1;
                        return substr($an, rand(0, $su), 1);
                          }
                        for ($i = 0; $i < 7; $i++)
                        echo getRandomCode();
                         ?>" required="true">
                </div>
                <div class="col-md-12">
                  <p>Pilih Tempat Duduk</p>
                </div>
                <?php foreach($isi as $row) {?>
                <?php 
                  for ($i=1; $i <=$row['jml']; $i++) { ?>
                  <div class="col-md-3">
                    <input type="checkbox" name="posisi[]" value="A<?php echo $i; ?>">A<?php echo $i; ?>
                  </div>
                <?php } ?>
                <?php } ?>
                <div class="col-md-12">
                  <p><button type="button" class="btn btn-default">Register</button></p>
                </div>
            </div>
            </form>
          </div>
          <script type="text/javascript">
            $(document).ready(function () {
            $("input[name='posisi[]']").change(function () {
            var maxAllowed = <?php echo $ppl['jumlah_kursi'];?>;
            var cnt = $("input[name='posisi[]']:checked").length;
            if (cnt > maxAllowed) 
            {
              $(this).prop("checked", "");
              alert('Anda hanya dapat memilih ' + maxAllowed + ' Kursi');
            }
            });
            });

          </script>
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
              <?php foreach($tkursi as $riw) {?>
              <li>Berangkat Dari : <?php echo $row['kota_awal']; ?> (<?php echo $row['bandara_awal']; ?>)</li>
              <li>Tujuan : <?php echo $row['kota_akhir']; ?> (<?php echo $row['bandara_akhir']; ?>)</li>
              <li>Waktu Keberangkatan : <?php echo $row['tanggalbrngkt']; ?> <?php echo $row['jam_brngkt']; ?></li>
              <li>Waktu Sampai : <?php echo $row['tanggalsampai']; ?> <?php echo $row['jam_sampai']; ?></li>
              <li>Bandara Transit : <?php echo $row['bandara_transit']; ?></li>
              <li>Sisa Kursi : <?php echo $row['jml']-$riw['tot_kursi']; ?></li>
              <li><?php echo $row['deskripsi']; ?></li>
              <?php } ?>
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