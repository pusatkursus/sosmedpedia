<!DOCTYPE html>
<html>
 <head>
  <title>Sosmed Pedia</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.chained.js"></script>
 </head>
 <body>
  <div class="container">
  	<div class="content-wrapper">
<div class="content-heading">
<div>
<small>Pesanan Layanan Sosmed</small>
</div>


</div>
<div class="row">

<div class="col-xl-12">

<div class="row">
<div class="col-md-6">

<form method="post" action="order.php" data-parsley-validate="" novalidate="">

<div class="card card-default">
<div class="card-header">
<!-- <div class="card-title">Pesanan Tunggal</div> -->
</div>
<div class="card-body">
<div class="form-group">
<input class="form-control" id="token" type="hidden" value="4149184065f5737981620a" required="required">
<label class="col-form-label">Kategori *</label>
<div class="multi-select-full">

<select class="form-control" name="cat" id="cat" required="required">
<option>--Pilih Kategori--</option>
<?php 
	$url = "https://sosmedpedia.com/getservice";
	$json = file_get_contents($url);
	$obj = json_decode($json, TRUE);
	foreach($obj as$v) 
	{
		
		echo "<option value='".$v['id']."'>".$v['category']."</option>";
	}
?>
</select>

</div>
</div>
<input class="form-control token" type="hidden" value="7079134325f57379816266" required="required">
<div class="form-group">
 <label class="col-form-label">Layanan *</label>
<div class="multi-select-full">

<select class="form-control" name="hasilnya" id="hasilnya" required="required">
<option>--Pilih Layanan--</option>
<?php 
	$url = "https://sosmedpedia.com/getservice";
	$json = file_get_contents($url);
	$obj = json_decode($json, TRUE);
	foreach($obj as$v) 
	{
	
		echo "<option value='".$v['id']."' data-chained='".$v['id']."'>".$v['name']."</option>";
	}
?>
</select>

</div>
</div>
<div class="information">
<div class="row" style="margin-top: 0px;">
<div class="col-sm-6">
<div class="form-group">
<label fclass="col-form-label">Minimum</label>
<div class="input-group">
<input class="form-control mana" type="text">
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label fclass="col-form-label">Maximum</label>
<div class="input-group">
<input class="form-control maxa" type="text">
</div>
</div>
</div>
</div>
<div class="form-group">
<label for="col-form-label">Keterangan &amp; Deskripsi</label>
<input style="display:none" class="form-control" id="hrg" onkeyup="if (!window.__cfRLUnblockHandlers) return false; kalkulatorTambah(this.value,getElementById('quantity').value);" required="required">
<textarea style="min-height:52px;height: 80px" id="des" class="form-control keta" readonly="true"></textarea>
</div>
<div class="form-group">
<label for="col-form-label">Data *</label>
<input class="form-control btw" name="link" required="required">
</div>
<div class="row" style="margin-top: 0px;">
<div class="col-sm-6">
<div class="form-group">
<label fclass="col-form-label">Jumlah *</label>
<div class="input-group">
<input class="form-control apa" id="quantity" name="quantity" type="text" onkeyup="if (!window.__cfRLUnblockHandlers) return false; kalkulatorTambah(getElementById('hrg').value,this.value);">
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label fclass="col-form-label">Total Harga</label>
<div class="input-group">

<input class="form-control result" id="result" type="text" disabled="" readonly="">
</div>
</div>
</div>
</div>
</div>
<div class="required">* Wajib diisi</div>
</div>
<div class="card-footer">
<div class="clearfix">
<div class="float-left">
<div class="checkbox c-checkbox">
<label>
<input type="checkbox" name="agreements" required="" data-parsley-error-message="Silahkan centang apabila anda sudah membaca peraturan sebelum order" data-parsley-multiple="agreements">
<span class="fa fa-check"></span>Saya sudah membaca &amp; Setuju dengan <b>peraturan sebelum order</b> </label>
</div>
</div>
<div class="float-right">
<button id="submit" class="btn btn-primary" type="submit"><em class="fa fa-send-o"></em> Pesan</button>
</div>
</div>
</div>
</div>

</form>

</div>
<aside class="col-md-6">

<div class="card" role="tabpanel">

<ul class="nav nav-tabs nav-fill" role="tablist">
<li class="nav-item" role="presentation">
<a class="nav-link active" href="#home" aria-controls="home" role="tab" data-toggle="tab">
<em class="fa fa-info-circle"></em> Informasi &amp; Peraturan</a>
</li>
<li class="nav-item" role="presentation">
<a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
<em class="fa fa-youtube-play"></em> Video Bantuan</a>
</li>
</ul>

<div class="tab-content p-0">
<div class="tab-pane active" id="home" role="tabpanel">

<div class="col-xl-12">
<div class="card card-default">
<div class="card-body">
<p><b>Cara Memesan :</b></p>
<ol>
<li>
Pilih kategori dan layanan yang anda butuhkan
</li>
<li>
Akan muncul harga,minimal order,maksimal order dan keterangan layanan
</li>
<li>
Masukan data dengan format yang benar (contoh : sosmedpediacom)
</li>
<li>
Masukan jumlah pembelian yang anda inginkan
</li>
<li>
Akan muncul total harga untuk pembelian anda
</li>
<li>
Lalu pesan!
</li>
</ol>
<small><b>* Mohon cek keterangan layanan yang kamu pilih, ada contoh input data. Harus sesuai</b></small>
<br><br>
<p><b>Peraturan Sebelum Melakukan Pembelian</b></p>
<ol>
<li>
Pastikan link / username yang anda input sudah benar! (tidak private, tidak salah input, atau semacamnya)
</li>
<li>
Pastikan format data pembelian yang anda masukan sudah benar! (mintalah bantuan ke admin untuk mengecek format data pembelian)
</li>
<li>
Dilarang memasukan data yang sama apabila pembelian sebelumnya belum selesai! (termasuk melakukan pembelian di tempat lain)
</li>
<li>
Apabila saat pengecekan akun diprivate / link tidak diketahui,maka order akan kami anggap completed!
</li>
<li>
Tidak ada jaminan speed akan sesuai dengan keterangan layanan (Itu hanya estimasi dari kami, bisa berubah sewaktu waktu)
</li>
<li>
Keluhan pembelian dapat disampaikan kepada admin <b>APABILA</b> pembelian sudah melewati 1x24 jam!
</li>
<li>
Dilarang meminta pembatalan! Pembatalan hanya dapat diputuskan oleh Admin!
</li>
</ol>
 <small><b>*Tidak ada pengembalian saldo apabila anda melanggar peraturan di atas!</b></small>

</div></div></div>


</div>
<div class="tab-pane" id="profile" role="tabpanel">

<div class="col-xl-12">
<div class="card card-default">
<div class="card-body">
<p><b>Coming Soon</b></p>


</div>
</div>
</div>
</div>
</div>
</div>

</aside>
</div>


</div>



</div>
</div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
	$("#series").remoteChained({
	    parents : "#mark",
	    url : "/api/series"
	});
	$("#hasilnya").chained("#cat");
});
</script>