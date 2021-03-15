<?php
error_reporting(0);
    if(!empty($_GET['download'] == 'doc')){
        header("Content-Type: application/vnd.ms-word");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("content-disposition: attachment;filename=".date('d-m-Y')."_laporan_rekam_medis.doc");
    }
    if(!empty($_GET['download'] == 'xls')){
        header("Content-Type: application/force-download");
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: 0");
        header("content-disposition: attachment;filename=".date('d-m-Y')."_laporan_rekam_medis.xls");
    }
?>
<?php
        $tgla = $user->tgl_bergabung;
        $tglk = $user->tgl_lahir;
        $bulan = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        );
    
        $array1=explode("-",$tgla);
        $tahun=$array1[0];
        $bulan1=$array1[1];
        $hari=$array1[2];
        $bl1 = $bulan[$bulan1];
		$tgl1 = $hari.' '.$bl1.' '.$tahun;
		

        $array2=explode("-",$tglk);
        $tahun2=$array2[0];
        $bulan2=$array2[1];
        $hari2=$array2[2];
        $bl2 = $bulan[$bulan2];
        $tgl2 = $hari2.' '.$bl2.' '.$tahun2;
?>
    
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/bower_components/font-awesome/css/font-awesome.min.css">
		<title> <?= $title_web;?></title>
		<style>
			body {
				background-color: lightyellow;
			}
			img{
            border-width: 2px;
            border-style: solid;
            border-color: red;
        }
		</style>
	</head>
	<body>
        <br/>
        <center>
        <div class="container">
		<div class="card mb-3" style="max-width: 720px;">
				<div class="panel panel-default">
					<div class="panel-body bg-info">
						<h4 class="text-center"> <?= $title_web;?></h4>
						<br/>
						<div class="container">
	                    <div class="row">
	                    <div class="col-sm">
							<div class="col-sm-4">
								<table class="table table-stripped">
									<tr>
										<td>ID Anggota</td>
										<td>:</td>
										<td><?= $user->id_login;?></td>
									</tr>
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td><?= $user->nama;?></td>
									</tr>
									<tr>
										<td>Jenis Kelamin</td>
										<td>:</td>
										<td><?= $user->jenkel;?></td>
									</tr>
									<tr>
										<td>Jenis Pengguna</td>
										<td>:</td>
										<td><?= $user->level;?></td>
									</tr>
									<tr>
										<td>TTL</td>
										<td>:</td>
										<td><?= $user->tempat_lahir;?>, <?= $tgl2 ;?></td>
									</tr>
									<tr>
										<td>No Telp</td>
										<td>:</td>
										<td><?= $user->telepon;?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>:</td>
										<td><?= $user->email;?></td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>:</td>
										<td><?= $user->alamat;?></td>
									</tr>
									<tr>
										<td>Tgl Bergabung</td>
										<td>:</td>
										<td><?= $tgl1;?></td>
									</tr>
								</table>
							</div>
							<div class="col-sm-4 text-center">
								<center>
									<img src="<?php echo base_url();?>assets_style/image/<?php echo $user->foto;?>" style="width:5cm;height:5cm;" class="img-responsive">
								</center>
								<br></br>
								<br></br>
								<br></br>
								    <a href="<?= base_url('user');?>" class="btn btn-danger btn-md">Kembali</a>
							</div>
						</div>
					</div>
				</div>
           </center>
           
  </body>
  <script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
  </script>
    
</html>
