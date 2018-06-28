<!DOCTYPE html>
<html>
<head>
  <style>
	.container {
    position: relative;
}
.center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 18px;
}

img { 
    width: 20%;
    height: 20%;
}
</style>
  <title>Form Data Customer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script language="Javascript">
  function hitungtotal(){

    var jenis = (document.fform.ijenis.value);
    var jumlahpaket = (document.fform.ijumlah.value);
    
    var ht = 0.0;
    var sub = 0.0;
    var diskon = 0.0;
    var total = 0.0;

    if(jenis=="VIP STANDING"){
      ht = 3700000;
    }
    else if(jenis=="VIP SEATED"){
      ht = 3650000;
    }
    else if(jenis=="UPPER BOX"){
      ht = 2500000;
    }else if (jenis == "GEN AD") {
      ht = 1800000
    }

    sub = jumlahpaket*ht;

    document.fform.osub.value=eval(sub);
    document.fform.otiket.value=eval(ht);
    document.fform.ototal.value=eval(total);
    document.fform.otiket.value=eval(ht);
  
  }
</script>
<body>
  <style type="text/css">
  body {
    background-color:  #f5f5f0;
}
</style>
	<form method="post" action="simpandata.php" name="fform">
	<div class="container">
  <form action="action_page.php">
    <center><marquee><h1>SILAHKAN PILIH SEAT PLAN ANDA</center></h1></marquee></center>
    <br>
   <center><img src="css/elyxion.jpg" style="width:30%"></center>
    <div class="row">
      <div class="col-25">
        <label for="lname">Nama Lengkap</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="txtnama" placeholder="Nama Lengkap">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Jenis Kelamin</label>
      </div>
    <div class="control">
  	<label class="radio">
    <input type="radio" name="txtpilih" value="L">Laki-Laki
  </label>
  <label class="radio">
   <input type="radio" name="txtpilih" value="P">Perempuan
  </label>
</div>
</div>
    <div class="row">
      <div class="col-25">
        <label for="country">Jenis Tiket</label>
      </div>
      <div class="col-75">
        <select id="country" name="ijenis">
          <option value="VIP STANDING">VIP STANDING</option>
          <option value="VIP SEATED">VIP SEATED</option>
          <option value="UPPER BOX">UPPER BOX</option>
          <option value="GEN AD">GEN AD</option>
        </select>
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="fname">Jumlah Tiket</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="ijumlah" placeholder="Jumlah Pesan Tiket">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <input type="button" name="hitung" value="hitung" onclick="hitungtotal()">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Harga Tiket</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="otiket">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Total Harga</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="osub">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <!--<label for="fname">Total Harga</label>-->
      </div>
      <div class="col-75">
       <!-- <input type="text" id="fname" name="ototal">-->
          <label for="fname">*silahkan lakukan pembayaran ke ATM BRI<br>(A/N : Tiket Konser 0174-01-048219-50-7)</label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">NIK </label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="txtnik" placeholder="Masukkan NIK">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">No. Hp</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="txthp" placeholder="masukan No Hp">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Alamat Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="txtemail" placeholder="Alamat Email anda">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Alamat Lengkap</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="txtalamat" style="height:200px"></textarea>
      </div>
    </div>
		<input type="submit" value="simpan">
		<!--<a href="datapemesan.php"-->
   <!-- <button class="button">Lihat Data </button></a> -->
			</div>
		</form>
	  </form>
</body>
</html>