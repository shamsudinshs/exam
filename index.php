<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
session_start();
include_once 'includes/dbconfig.php';
include_once 'includes/exam.data.php';

/****** DO NOT EDIT ABOVE THIS LINE ******/

$database = new Config();
$db = $database->getConnection();


$listpackage = new Data($db);
$stmt = $listpackage->listPackageAsal();
$num = $stmt->rowCount();


$profile = new Data($db);
$profile->userid = $userid; 
$profile->userProfile();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MPM | Achieve-A</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
    <!-- FooTable -->
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
	
<style>
.three-inline-buttons .button {
    margin-left: 15px;
    margin-right: 15px;
}

.three-inline-buttons {
     display: table;
     margin: 0 auto;
	 margin-top: 10px;
}

 .bottom-align-text {
    position: absolute;
    bottom: 0;
    right: 0;
  }
</style>
</head>
<body id="page-top" class="landing-page">
<?php include('nav.php');?>

<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
        <li data-target="#inSlider" data-slide-to="2"></li>
        <li data-target="#inSlider" data-slide-to="3"></li>
        <li data-target="#inSlider" data-slide-to="4"></li>
        <li data-target="#inSlider" data-slide-to="5"></li>
		</ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption text-info bottom-align-text">
                    <h1>Achieve-A menyediakan <br/>Kertas Soalan
                        mengikut format peperiksaan STPM yang sebenar dan
                        berasaskan kepada silibus STPM yang terkini.<br/>
                        </h1>
                    <p>Achieve-A dapat membantu calon untuk bersedia dengan Peperiksaan STPM.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">BACA LAGI</a>
                        <a class="caption-link" href="#" role="button">Format Kertas Soalan</a>
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
          <!--          <img src="img/landing/laptop.png" alt="laptop"/>-->
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption wow zoomIn text-warning">
                    <h1>Membekalkan soalan<br/> dengan berbagai tahap kualiti soalan.</h1>
                    <p>Membantu calon untuk membuat latihan dalam menghadapi Peperiksaan STPM.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">BACA LAGI</a>
                        <a class="caption-link" href="#" role="button">Kualiti Soalan</a>
                    </p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Berasaskan Aplikasi Atas Talian<br/>
                        yang boleh dicapai oleh calon dengan mudah,<br/>
                        dan pada bila-bila masa.<br/>
                        </h1>
                    <p>Teknologi aplikasi mudah-alih yang terkini.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">BACA LAGI</a>
                        <a class="caption-link" href="#" role="button">Aplikasi Atas Talian</a>
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
          <!--          <img src="img/landing/laptop.png" alt="laptop"/>-->
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back three"></div>

        </div>
		<div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>Hanya berharga RM 10.00 <br/> untuk 3 Set Kertas Soalan.<br>
					Setiap Set Kertas Soalan mengandungi 15 soalan.</h1>
                    <p>Pada harga yang amat berpatutan.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">BACA LAGI</a>
                        <a class="caption-link" href="#" role="button">Harga Set Kertas Soalan</a>
                    </p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back four"></div>
        </div>
		
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Mudah untuk dilanggan<br/>
                        Langganan dan bayaran boleh dibuat secara atas talian,<br/>
                        dengan kemudahan Online Payment Gateway.<br/>
                        </h1>
                    <p>Mudah untuk calon membuat langganan</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">BACA LAGI</a>
                        <a class="caption-link" href="#" role="button">Langganan dan Bayaran</a>
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
          <!--          <img src="img/landing/laptop.png" alt="laptop"/>-->
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back five"></div>

        </div>
		
        <div class="item">
            <div class="container">
                <div class="carousel-caption wow zoomIn">
                    <h1>Soalan dan Jawapan <br/> yang tiada keraguan.</h1>
                    <p>Soalan dan jawapan yang diperagui sahih</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">BACA LAGI</a>
                        <a class="caption-link" href="#" role="button">Jawapan Soalan Diperakui</a>
                    </p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back six"></div>
        </div>
		
		
		</div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section id="package" class="container services">

  <div class="row">

		<div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Set Kertas Soalan Contoh<br/> </h1>
			 <h1><a class="navy-link" href="pages/exam.php?code=3001" role="button">Kertas Soalan Contoh</a></h1>
            <p>Sila cuba untuk merasai pengalaman menjawab secara atas talian. </p>
        </div>
    </div>
      <div class="row">
	        <div class="wrapper wrapper-content animated fadeInRight">
				<?php
					if($num>0){
									$i = 0;
									
									while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){$i++;
									extract($row);
									$pid = $row['id']; 
									$package_code = $row['code']; 
									$qty_paper = $row['qty_paper']; 
									$desc = substr($row['description'],0,45);
									$package_status = $row['status']; 
					if ($package_status == "Ready") {				
									
				?>
								<div class="col-lg-4">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
										  <div class="row">
										  <div class="col-lg-6 col-xs-6">
                                             <?php echo "PAKEJ ".$code;?></div>
										  <div class="col-lg-6 col-xs-6 text-right">RM 10.00</div>
										  </div>
                                        </div>
                                        <div class="panel-body">
                                            <p>
											<?php
							$listpapers = new Data($db);
							$listpapers->pid = $pid;
							$stmt2 = $listpapers->listPapers();
							$num2 = $stmt2->rowCount();
							
							if ($num2 == 3 ){
								
								

							echo "<ul class='pricing-plan list-unstyled '  >";
							for ($x = 1; $x <= 2; $x++){
								$paper_code = 0;
							$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
							extract($row2);
							$paper_code = $row2['code'];
							$paper_name = $row2['name'];
							echo "<li> <a href=''> KERTAS " .$paper_code. 
									 					
							"</a></li>";
							}
							echo "</ul>";
							
							}
					?>
											
											</p>
                                        
                                        <div class="row"><div class="col-lg-12 text-center">
                                            <a class="btn btn-primary btn-xs link" href="pages/signup.php?package=<?php echo $package_code;?>">Langgan  <i class="fa fa-sign-in"></i></a>
											 
											
											</div>
                                        </div>
										</div>
                                    </div>
                                </div>
									<?php } }}?>
			</div>
	</div>
								


</section>

<section id="features" class="container services">
    <div class="row">
        <div class="col-sm-3">
            <h2>Format Kertas Soalan Sebenar</h2>
            <p>Set Kertas Soalan dicipta mengikut format Peperiksaan STPM yang sebenar dan berasaskan kepada silibus yang terini.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Kualiti Soalan Bermutu Tinggi</h2>
                  <p>Membekalkan soalan dengan berbagai tahap kualiti soalan. Membantu calon untuk membuat latihan dalam menghadapi Peperiksaan STPM.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Aplikasi Atas Talian</h2>
            <p>Berasaskan Aplikasi Atas Talian yang boleh dicapai oleh calon dengan mudah, dan pada bila-bila masa. Teknologi aplikasi mudah-alih yang terkini.</p>
					<p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Langganan dan Bayaran Secara Online</h2>
            <p>Langganan dan bayaran boleh dibuat secara atas talian dengan mudah.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
    </div>
</section>

<section  class="container features">

    <div class="row">
        <div class="col-lg-6 text-center">
            <div class="navy-line"></div>
            <h1>Melebihi 100++ Set<br/> <span class="navy"> Kertas Soalan</span> </h1>
            <p>Calon boleh mengambil peperiksaan percubaan pada bila-bila masa secara atas talian. </p>
        </div>
		<div class="col-lg-6 text-center">
            <div class="navy-line"></div>
            <h1>Set Kertas Soalan Contoh<br/> </h1>
			 <h1><a class="navy-link" href="pages/exam.php?code=3001" role="button">Kertas Soalan Contoh</a></h1>
            <p>Sila cuba untuk merasai pengalaman menjawab secara atas talian. </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center wow fadeInLeft">
            <div>
                <i class="fa fa-mobile features-icon"></i>
                <h2>Format Kertas Soalan Sebenar</h2>
                <p>Set Kertas Soalan dicipta mengikut format Peperiksaan STPM yang sebenar dan berasaskan kepada silibus yang terini.</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-bar-chart features-icon"></i>
                <h2>Kualiti Soalan Bermutu Tinggi</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            </div>
        </div>
        <div class="col-md-6 text-center  wow zoomIn">
            <img src="img/landing/perspective.png" alt="dashboard" class="img-responsive">
        </div>
        <div class="col-md-3 text-center wow fadeInRight">
            <div>
                <i class="fa fa-envelope features-icon"></i>
                <h2>Aplikasi Atas Talian</h2>
                <p>Berasaskan Aplikasi Atas Talian yang boleh dicapai oleh calon dengan mudah, dan pada bila-bila masa. Teknologi aplikasi mudah-alih yang terkini.</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-google features-icon"></i>
                <h2>Langganan dan Bayaran Secara Online</h2>
                <p>Langganan dan bayaran boleh dibuat secara atas talian dengan mudah.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Pengalaman Menduduki Peperiksaan Sebenar STPM</h1>
            <p>Calon boleh mengalami suasana dan cabaran sebenar menduduki Peperiksaan STPM.</p>
        </div>
    </div>
    <div class="row features-block">
        <div class="col-lg-6 features-text wow fadeInLeft">
            <small>Kualiti Soalan</small>
            <h2>Pengubal Soalan Sebenar </h2>
            <p>Achieve-A membekalkan kualiti soalan dan jawapan daripada Pengubal Soalan sebenar dengan Soalan yang bermutu dan jawapan yang tiada keraguan.</p>
            <a href="#" class="btn btn-primary">Baca lagi</a>
        </div>
        <div class="col-lg-6 text-right wow fadeInRight">
            <img src="img/landing/dashboard.png" alt="dashboard" class="img-responsive pull-right">
        </div>
    </div>
</section>

<!--
<section id="team" class="gray-section team">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Team Achieve-A</h1>
                <p>Kumpulan Pengubal Soalan utama yang terlibat dalam pembinaan Set Kertas Soalan Achieve-A</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 wow fadeInLeft">
                <div class="team-member">
                    <img src="img/landing/avatar7.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4>Puan <span class="navy">Roslina Ismail</span> </h4>
                    <p>Pengubal Soalan berpengalaman untuk Mata Pelajaran Pengajian Am Kertas 1. </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                    <img src="img/landing/avatar1.jpg" class="img-responsive img-circle" alt="">
                    <h4>Dr.<span class="navy">Othman Zakaria</span> </h4>
                    <p>Ketua Pengubal Soalan dan bertanggungjawab memastikan setiap soalan dan Set Kertas Soalan memenuhi silibus terkini STPM.
					</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInRight">
                <div class="team-member">
                    <img src="img/landing/avatar2.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4>Encik <span class="navy">Yusoff Kadir</span> </h4>
                    <p>Ketua editor di dalam pembinaan dan pengurusan Kertas Soalan.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p>Lebih dari 10 pegawai yang terlibat di dalam pembinaan dan pengurusan Laman Web Achieve-A</p>
            </div>
        </div>
    </div>
</section>
-->

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Slip Keputusan Peperiksaan</h1>
                <p>Slip keputusan peperiksaan akan dikeluarkan sebaik sahaja calon tamat menduduki setiap Peperiksaan</p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-3 features-text wow fadeInLeft">
                <small>Slip Keputusan</small>
                <h2>Huraian kepada Jawapan Betul </h2>
                <p>Slip keputusan peperiksaan menyediakan huraian kepada jawapan betul sebagai keterangan terperinci kepada jawapan yang betul.</p>
                <a href="#" class="btn btn-primary">Baca lagi</a>
            </div>
            <div class="col-lg-6 text-right m-t-n-lg wow zoomIn">
                <img src="img/landing/iphone.jpg" class="img-responsive" alt="dashboard">
            </div>
            <div class="col-lg-3 features-text text-right wow fadeInRight">
                <small>Slip Jawapan Calon</small>
                <h2>Jawapan Pilihan dan Jawapan Betul </h2>
                <p>Slip Keputusan Peperiksaan juga membekalkan jawapan betul bersama jawapan pilihan calon untuk setiap soalan sebagai rujukan kepada calon.</p>
                <a href="#" class="btn btn-primary">Baca lagi</a>
            </div>
        </div>
    </div>

</section>

<section class="timeline gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Workflow Achieve-A</h1>
                <p>Workflow yang sangat ringkas disediakan bagi memudahkan calon membuat langganan dan menduduki peperiksaan. </p>
            </div>
        </div>
        <div class="row features-block">

            <div class="col-lg-12">
                <div id="vertical-timeline" class="vertical-container light-timeline center-orientation">
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-briefcase"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Pilih Pakej</h2>
                            <p>Calon membuat pilihan pakej. Terdapat 3 jenis pakej disediakan, iaitu Standard, Combo dan Premium.
							Setiap pakej mengandungi 2 Set Kertas Soalan.
                            </p>
							<span class="vertical-date"> Langkah 1 <br/> <small></small> </span>
                            <a href="#" class="btn btn-xs btn-primary"> Maklumat Lanjut</a>
                            
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-file-text"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Membuat Langganan</h2>
                            <p>Bayaran langganan boleh dibuat secara online menggunakan Payment Gateway.Setiap langganan akan dibekalkan dengan Kod Langganan </p>
                            <a href="#" class="btn btn-xs btn-primary"> More info</a>
                            <span class="vertical-date"> Langkah 2 <br/> <small></small> </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Menduduki Peperiksaaan</h2>
                            <p>Dengan memasukkan Kod Langganan, calon boleh menduduki Peperiksaan mengikut pakej yang dipilih.</p>
                            <a href="#" class="btn btn-xs btn-primary"> Maklumat lanjut</a>
                            <span class="vertical-date"> Langkah 3 <br/> <small></small> </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>


<section id="testimonials" class="testimonials" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Testimoni</h1>
                <p>Calon-calon yang berpuashati dengan melanggani Achieve-A</p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-4">
                <div class="bubble">
                    "Pilihan terbaik dan amat sesuai untuk persediaan peperiksaan sebenar STPM."
                </div>
                <div class="comments-avatar">
                    <a href="#" class="pull-left">
                        
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Chee Lin 
                        </div>
                        <small class="text-muted">Kedah</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                    "Sangat mudah dan senang digunakan. Set Kertas Soalan yang lengkap dengan kualiti soalan yang bermutu tinggi."
                </div>
                <div class="comments-avatar">
                    <a href="#" class="pull-left">
                                            </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Muthu A/L Manikam
                        </div>
                        <small class="text-muted">Negeri Sembilan</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                    "Harga yang tidak membebankan dan tempoh langganan yang agak lama."
                </div>
                <div class="comments-avatar">
                    <a href="#" class="pull-left">
                       
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Musa Ismail
                        </div>
                        <small class="text-muted">Selangor</small>
                    </div>
                </div>
            </div>



        </div>
    </div>

</section>


<section id="pricing" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Langganan</h1>
                <p>Langganan boleh dibuat dengan memilih Pakej Set Kertas Soalan yang tertera di bawah.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Standard
                    </li>
                    <li class="pricing-desc">
                        Setiap satu pakej mengandungi 3 Set Kertas Soalan, dan setiap Set Kertas Soalan mengandungi 15 Soalan.
                    </li>
                    <li class="pricing-price">
                        <span>RM 10</span> 
                    </li>
                    <li>
                        900 - Pengajian Am
                    </li>
                    <li>
                        Kertas 1
                    </li>
                    <li>
                        Soalan Objektif
                    </li>
                    <li>
                        1 Pakej @ 3 Set Kertas Soalan
                    </li>
                    <li class="pricing-price" >
                        45 Jumlah Soalan
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="signup.php">Signup</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled selected">
                    <li class="pricing-title">
                        Combo
                    </li>
                    <li class="pricing-desc">
                        Langganan 2 pakej dengan setiap pakej mengandungi 3 Set Kertas Soalan, dan setiap Set Kertas Soalan mengandungi 15 Soalan.
                    </li>
                    <li class="pricing-price">
                        <span>RM 25</span> 
                    </li>
                    <li>
                        900 - Pengajian Am
                    </li>
                    <li>
                        Kertas 1
                    </li>
                    <li>
                        Soalan Objektif
                    </li>
                    <li>
                        2 Pakej @ 6 Set Kertas Soalan
                    </li>
                    <li class="pricing-price" >
                        90 Jumlah Soalan
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="signup.php">Signup</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Premium
                    </li>
                    <li class="pricing-desc">
                        Langganan 3 pakej dengan setiap pakej mengandungi 3 Set Kertas Soalan, dan setiap Set Kertas Soalan mengandungi 15 Soalan.
                    </li>
                    <li class="pricing-price">
                        <span>RM 40</span> 
                    </li>
                    <li>
                        900 - Pengajian Am
                    </li>
                    <li>
                        Kertas 1
                    </li>
                    <li>
                        Soalan Objektif
                    </li>
                    <li>
                        3 Pakej @ 9 Set Kertas Soalan
                    </li>
                    <li class="pricing-price" >
                        105 Jumlah Soalan
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="signup.php">Signup</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row m-t-lg">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg">
                <p>*Setiap soalan di dalam Set Kertas Soalan adalah unik dan tidak bertindih. 
				
				 <span class="navy">Setiap soalan dan Kertas Soalan adalah unik</span>  Tiada soalan yang sama di dalam Set Kertas Soalan yang berbeza.</p>
            </div>
        </div>
    </div>

</section>





<section id="features" class="container services">
    <div class="row">
	        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h2>Pajek Soalan untuk Subjek 900 - Pengajian Am Kertas 1</h2>
                            <div class="ibox-tools">
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#package_modal">
										    <i class="fa fa-plus fa-sm"></i> Senarai Pakej  </button>
									 <?php
										if ($_SESSION['roleid_session'] == 100){ ?>
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#package_modal">
										    <i class="fa fa-plus fa-sm"></i> Pakej Langganan  </button>
									 <?php } 
										if ($_SESSION['roleid_session'] == 200){  ?>
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#package_modal">
										    <i class="fa fa-plus fa-sm"></i> Tambah Pakej  </button>
									<?php }		
										if ($_SESSION['roleid_session'] == 300){ ?>
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#package_modal">
										    <i class="fa fa-plus fa-sm"></i> Semak Pakej  </button>
									<?php }	?>						
	 							  
                            </div>
                                
                        </div>
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="8">
                                <thead>
                                <tr>

                                    <th data-toggle="true">Pakej ID</th>
									<th data-toggle="true">Kod</th>
                                    <th>Nama</th>
                                    <th>Keterangan </th>
									<th>Status</th>
									<th>Tindakan</th>
                                    <th data-hide="all">Set Soalan</th>
                                </tr>
                                </thead>
                                <tbody>
							<?php
							if($num>0){
							$i = 0;
							while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){$i++;
							extract($row);
							$pid = $row['id']; 
							$code = $row['code']; 
							$qty_paper = $row['qty_paper']; 
							$desc = substr($row['description'],0,45);
								echo "<tr>";
								echo "<td> {$id}</td>" ;
								echo "<td> {$code}</td>" ;
								echo "<td> {$name}</td>" ;
								echo "<td> {$desc}</td>";
								echo "<td> {$status}</td>";	
								?>
								<td>
									<a href="package_view.php?id=<?php echo ${id};?>" class="btn btn-white btn-sm"><i class="fa fa-pencil fa-lg"></i>  </a>
									<a href="package_delete.php?id=<?php echo ${id};?>" class="btn btn-white btn-sm"><i class="fa fa-trash fa-lg"></i>  </a>
									<?php if ($qty_paper < 3 ) { ?>
										<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#paper_modal" data-pid="<?php echo $pid?>" data-code="<?php echo $code?>" >
										<i class="fa fa-plus"></i>Tambah Kertas  </button>

									<?php } ?>
									
								</td>
							  
								<?php
								
								echo "<td>"; ?>	
								
								
                                                   
							<table class="table">
                            <thead>
							
                            <tr>
                                <th>#</th>
                                <th>Kod</th>
								<th>Nama</th>
                                <th>Keterangan</th>
                                <th>Bilangan Soalan</th>
                                <th>Tempoh Masa</th>
								<th>Status</th>
								<th>Tindakan
								
								
								
								</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php
							$listpapers = new Data($db);
							$listpapers->pid = $pid;
							$stmt2 = $listpapers->listPapers();
							$num2 = $stmt2->rowCount();

							if ( $num2 > 0 ){
							$j = 0;
							while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){$j++;
							extract($row2);
							$paper_id = $row2['id'];
							$paper_code = $row2['code'];
							$paper_name = $row2['name'];
							$paper_description = $row2['description'];
							$paper_question_qty = $row2['question_qty'];
							$paper_status = $row2['status'];
								echo "<tr>";
								echo "<td> {$paper_id}</td>" ;
								echo "<td> {$paper_code}</a> </td>" ;
								echo "<td> {$paper_name}</td>" ;
								echo "<td> {$paper_description}</td>" ;
								echo "<td> {$paper_question_qty}</td>" ;
								echo "<td> 60 Minit.</td>" ;
								echo "<td> {$paper_status}</td>" ;
								?>
								<td>
									<a href="paper_view.php?pid=<?php echo ${pid};?>&&id=<?php echo ${id};?>" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Maklumat Kertas"><i class="fa fa-pencil fa-lg"></i>  </a>
									<a href="paper_delete.php?id=<?php echo ${id};?>" class="btn btn-white btn-sm " data-toggle="tooltip" data-placement="top" title="Hapus Kertas"><i class="fa fa-trash fa-lg"></i> </a>
									<a href="question.php?package_id=<?php echo $pid;?>&&paper_id=<?php echo ${paper_id};?>" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Senarai Soalan"><i class="fa fa-folder-open fa-lg"></i> </a>
							    </td>
								
								<?php
								echo "</tr>";
                            }} ?>
							
                            </tbody>
                        </table>
						</td>

							
							
							


							 <?php }} ?></tr>
							</tbody>
                                <tfoot>
                                <tr>

                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
			
			

        </div>
	</div>
    <div class="row">
        <div class="col-sm-3">
            <h2>Format Kertas Soalan Sebenar</h2>
            <p>Set Kertas Soalan dicipta mengikut format Peperiksaan STPM yang sebenar dan berasaskan kepada silibus yang terini.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Kualiti Soalan Bermutu Tinggi</h2>
                  <p>Membekalkan soalan dengan berbagai tahap kualiti soalan. Membantu calon untuk membuat latihan dalam menghadapi Peperiksaan STPM.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Aplikasi Atas Talian</h2>
            <p>Berasaskan Aplikasi Atas Talian yang boleh dicapai oleh calon dengan mudah, dan pada bila-bila masa. Teknologi aplikasi mudah-alih yang terkini.</p>
					<p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Langganan dan Bayaran Secara Online</h2>
            <p>Langganan dan bayaran boleh dibuat secara atas talian dengan mudah.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
    </div>
</section>

<!-- MODAL PACKAGE & PAPER -->

							
                            <div class="modal inmodal" id="login_modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
								<form class="m-t" role="form" method="post" id="login-form">
                                <div class="modal-content animated bounceInLeft">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Login</h4>
                                            <small class="font-bold">Login into System</small>
                                        </div>
                                        <div class="modal-body">
                                            <div id="error">
											<!-- error will be shown here ! -->
											</div>
											<div id="success">
											<!-- error will be shown here ! -->
											</div>
												<div class="form-group"><label>ID Pengguna</label> <input type="text" placeholder="" class="form-control" required name="user_id"></div>
												<div class="form-group"><label>Kata Laluan</label> <input type="text" placeholder="" class="form-control" required name="user_password"></div>

										</div>
                                        <div class="modal-footer">
										<div class="row">
										
										  <div class="col-lg-6 col-xs-6 text-left">
										  	<a class="btn btn-warning" data-toggle="modal" onclick="closeLogin();" data-target="#register_modal"> Daftar <i class="fa fa-sign-in"></i></a>
										  </div>
										  <div class="col-lg-6 col-xs-6">
                                            <button type="button" class="btn btn-white" data-dismiss="modal" onclick="reload()" >Tutup</button>
                                            <button type="submit" class="btn btn-primary" name="btn-login" id="btn-login">Login</button>
										  </div>
										  
                                        </div>
										
                                            
											
                                        </div>
                                    </div>
								</form>
                                </div>
                            </div>
							
							
                            <div class="modal inmodal" id="register_modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
								<form class="m-t" role="form" method="post" id="register-form">
                                <div class="modal-content animated bounceInLeft">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Daftar Pengguna</h4>
                                            <small class="font-bold">Borang Daftar Pengguna Baru</small>
                                        </div>
                                        <div class="modal-body">
                                            <div id="error">
											<!-- error will be shown here ! -->
											</div>
											<div id="success">
											<!-- error will be shown here ! -->
											</div>
												<div class="form-group"><label>No. Kad Pengenalan / Passport</label> <input type="text" placeholder="" class="form-control" required name="userid"></div>
												<div class="form-group"><label>Nama</label> <input type="text" placeholder="" class="form-control" required name="name"></div>
												<div class="form-group"><label>Emel</label> <input type="text" placeholder="" class="form-control" required name="email"></div>
												<div class="form-group"><label>No. Telefon</label> <input type="text" placeholder="" class="form-control" required name="phone"></div>
												<div class="form-group"><label>Kata Laluan</label> <input type="text" placeholder="" class="form-control" required name="pwd1"></div>
												<div class="form-group"><label>Pengesahan Kata Laluan</label> <input type="text" placeholder="" class="form-control" required name="pwd2"></div>
										</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal" onclick="reload()" >Tutup</button>
											 <button type="submit" class="btn btn-primary" name="btn-register" id="btn-register">Daftar</button>
                                        </div>
                                    </div>
								</form>
                                </div>
                            </div>
							


                            <div class="modal inmodal" id="package_modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
								<form class="m-t" role="form" method="post" id="package-form">
                                <div class="modal-content animated bounceInLeft">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Tambah Pakej Baru</h4>
                                            <small class="font-bold">Borang Tambah Pakej Baru</small>
                                        </div>
                                        <div class="modal-body">
                                            <div id="error">
											<!-- error will be shown here ! -->
											</div>
											<div id="success">
											<!-- error will be shown here ! -->
											</div>
												<div class="form-group"><label>Kod Pakej</label> <input type="text" placeholder="" class="form-control" required name="code"></div>
												<div class="form-group"><label>Nama Pakej</label> <input type="text" placeholder="" class="form-control" required name="name"></div>
												<div class="form-group"><label>Keterangan Pakej</label> <input type="text" placeholder="" class="form-control" required name="description"></div>
												<div class="form-group">    <div class="i-checks"><label> <input type="radio" value="Ready" name="status"  >Ready and Publish</label></div>
														<div class="i-checks"><label> <input type="radio" value="NotReady" name="status" > Not Ready </label></div>
												</div>
										</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal" onclick="reload()" >Tutup</button>
                                            <button type="submit" class="btn btn-primary" name="btn-package" id="btn-package">Simpan</button>
                                        </div>
                                    </div>
								</form>
                                </div>
                            </div>
							
							

                            <div class="modal inmodal" id="paper_modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
								<form class="m-t" role="form" method="post" id="paper-form">
									<input type="hidden" name="package_id" id="package_id" value ="">
                                <div class="modal-content animated bounceInLeft">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Tambah Paper Baru</h4>
                                            <small class="font-bold">Borang Tambah Paper Baru</small>
                                        </div>
                                        <div class="modal-body">
                                            <div id="error">
											<!-- error will be shown here ! -->
											</div>
											<div id="success">
											<!-- error will be shown here ! -->
											</div>
												<div class="form-group"><label>Kod Pakej</label> <input type="text" placeholder="" class="form-control" required name="package_code"></div>
												<div class="form-group"><label>Kod Paper</label> <input type="text" class="form-control" required name="code"></div>
												<div class="form-group"><label>Nama Paper</label> <input type="text" placeholder="" class="form-control" required name="name"></div>
												<div class="form-group"><label>Keterangan Paper</label> <input type="text" placeholder="" class="form-control" required name="description"></div>
												<div class="form-group">    <div class="i-checks"><label> <input type="radio" value="Ready" name="status"  >Ready and Publish</label></div>
														<div class="i-checks"><label> <input type="radio" value="NotReady" name="status" > Not Ready </label></div>
												</div>
										</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal" onclick="reload()" >Tutup</button>
                                            <button type="submit" class="btn btn-primary" name="btn-paper" id="btn-paper">Simpan</button>
                                        </div>
                                    </div>
								</form>
                                </div>
                            </div>


<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

                <table class="table table-hover table-bordered" >
                    <tr style=" background-color:#00AAAD; color:#FFF; ">
                        <div class="modal-body">

                            <div id='order-id'></div>
                            <div id='prod-id'></div>
                            <div id='sell-id'></div>
                        </div>
                    </tr>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Hubungi Kami</h1>
                <p>Sila hubungi kami untuk khidmat nasihat atau membuat laporan masalah</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">MAJLIS PEPERIKSAAN MALAYSIA</span></strong><br/>
                    Bandar Baru Selayang<br/>
                    Selayang<br/>
                    <abbr title="Phone">Telefon:</abbr> (03) 6126-1694<br/>
					<abbr title="Email">Email:</abbr> mpmadmin@mpm.edu.my
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                 Kami bersedia untuk membantu calon dalam menerangkan tatacara pemilihan pakej atau kaedah langganan. Kami juga bersedia untuk membantu mengatasi sebarang masalah yang diajukan.                  </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="m-t-sm">
                    Ikuti Achieve-A di dalam media sosial.
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2019 Majlis Peperiksaan Malaysia</strong><br/> Kementerian Pendidikan Malaysia.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/theme.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/wow/wow.min.js"></script>

    <!-- FooTable -->
    <script src="js/plugins/footable/footable.all.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>

	<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

<!-- Page-Level Scripts -->
<script>
	$(document).ready(function() {

		$('.footable').footable();
		$('.footable2').footable();

	});

</script>

<script>
	 $(document).ready(function(){

		 $("#login-form").validate({
			 rules: {
				 user_id: {
					 required: true,
					 minlength: 3
				 },
				 user_password: {
					 required: true,
					 minlength: 3
				 }
			 },
   messages:
   {
		user_id: "Sila masukkan ID Pengguna",
		user_password: "Sila masukkan Kata Laluan",
   },
   submitHandler: submitForm	
   }); 
   
   
	   function submitForm()
   {		
		var data = $("#login-form").serialize();
			
		$.ajax({
			
		type : 'POST',
		url  : 'login/process_exam.php',
		data : data,
		beforeSend: function()
		{	
			$("#error").fadeOut();
			$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending ...');
		},
		success :  function(response)
		   {					
				if(response=="okay"){
								
					$("#success").fadeIn(1000, function(){		
					$("#success").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Selamat datang!!!!</div>');
					$("#btn-login").html('<span class="glyphicon glyphicon-random"></span> &nbsp; Signing ...');
						setTimeout(' window.location.href = "login/home.php"; ',600);
								});
				}
				else{
								
					$("#error").fadeIn(1000, function(){						
					$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !!!!</div>');
					$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login');
								});
				}
		  }
		  
		});
			return false;
	}
	
	});
</script>

<script>
	 $(document).ready(function(){

		 $("#register-form").validate({
			 rules: {
				 userid: {
					 required: true,
					 minlength: 3
				 },
				 name: {
					 required: true,
					 minlength: 3
				 },
				 email: {
					 required: true,
					 email: true
					 
				 },
				 phone: {
					 required: true,
					 minlength: 5
				 },
				 pwd1: {
					 required: true,
					 minlength: 5
				 },
				 pwd2: {
					 required: true,
					 minlength: 5
				 }
				 
			 },
   messages:
   {
		userid: "Sila masukkan ID Pengguna",
		name: "Sila masukkan Nama Pengguna",
		email: "Sila masukkan Email Pengguna",
		pwd1: "Sila masukkan Kata Laluan",
		pwd2: "Sila masukkan Pengesahan Kata Laluan",
   },
   submitHandler: registerForm	
   }); 
   
   
	   function registerForm()
   {		
		var data = $("#register-form").serialize();
			
		$.ajax({
			
		type : 'POST',
		url  : 'login/process_exam.php',
		data : data,
		beforeSend: function()
		{	
			$("#error").fadeOut();
			$("#btn-register").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending ...');
		},
		success :  function(response)
		   {					
				if(response=="okay"){
								
					$("#success").fadeIn(1000, function(){						
					$("#success").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Pendaftaran Akaun Pengguna Berjaya  !!!!</div>');
					$("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit');
					//setTimeout(' window.location.href = "pages/package.php"; ',600);
					
					$('#register_modal').modal('hide');
					$('#login_modal').modal().show();
								});
				}
				else{
					alert(response);
					$("#error").fadeIn(1000, function(){						
					$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !!!!</div>');
					$("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit');
								});
				}
		  }
		  
		});
			return false;
	}
	
	});
</script>

<script>
	 $(document).ready(function(){

		 $("#package-form").validate({
			 rules: {
				 code: {
					 required: true,
					 minlength: 3
				 },
				 name: {
					 required: true,
					 minlength: 3
				 },
				 description: {
					 required: true,
					 minlength: 10
				 }
			 },
   messages:
   {
		code: "Sila masukkan Kod Pakej",
		name: "Sila masukkan Nama Pakej",
		description: "Sila masukkan Keterangan Pakej",
   },
   submitHandler: submitForm	
   }); 
   
   
	   function submitForm()
   {		
		var data = $("#package-form").serialize();
			
		$.ajax({
			
		type : 'POST',
		url  : '../login/process.php',
		data : data,
		beforeSend: function()
		{	
			$("#error").fadeOut();
			$("#btn-package").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending ...');
		},
		success :  function(response)
		   {					
				if(response=="okay"){
								
					$("#success").fadeIn(1000, function(){						
					$("#success").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; New record was added successfully !!!!</div>');
					$("#btn-package").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit');
					
								});
				}
				else{
								
					$("#error").fadeIn(1000, function(){						
					$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !!!!</div>');
					$("#btn-package").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit');
								});
				}
		  }
		  
		});
			return false;
	}
	
	});
</script>

<script>
	 $('#paper_modal').ready(function(){

		 $("#paper-form").validate({
			 rules: {
				 code: {
					 required: true,
					 minlength: 3
				 },
				 name: {
					 required: true,
					 minlength: 3
				 },
				 description: {
					 required: true,
					 minlength: 10
				 }
			 },
   messages:
   {
		code: "Sila masukkan Kod Paper",
		name: "Sila masukkan Nama Paper",
		description: "Sila masukkan Keterangan Paper",
   },
   submitHandler: submitForm	
   }); 
   
   
	   function submitForm()
   {		
		var data = $("#paper-form").serialize();
			
		$.ajax({
			
		type : 'POST',
		url  : '../login/process.php',
		data : data,
		beforeSend: function()
		{	
			$("#error").fadeOut();
			$("#btn-paper").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending paper...');
		},
		success :  function(response)
		   {					
				if(response=="okay"){
								
					$("#success").fadeIn(1000, function(){						
					$("#success").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; New record was added successfully !!!!</div>');
					$("#btn-paper").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit');
					
								});
				}
				else{
								
					$("#error").fadeIn(1000, function(){						
					$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !!!!</div>');
					$("#btn-paper").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit');
								});
				}
		  }
		  
		});
			return false;
	}
	
	});
</script>

<script>
$('#paper_modal').on('show.bs.modal', function(e) {
    var 
	package_id = $(e.relatedTarget).data('pid');alert(package_id);
	package_code = $(e.relatedTarget).data('code');alert(package_code);
    $(e.currentTarget).find('input[name="package_code"]').val(package_code);
    $(e.currentTarget).find('input[name="package_id"]').val(package_id);
});

</script>

<script>

var loggedin="<?php echo $_SESSION['userid_session']; ?>";


$('.link').click(function(e){

if(!loggedin){
e.preventDefault();
$('#login_modal').modal().show();
}

})
</script>
	
<script>
function reload() {
    location.reload();
}
</script>

<script>
function closeLogin(){
$('#login_modal').modal('hide');
}

</script>

<script>
function closeRegiter(){
$('#register_modal').modal('hide');
}

</script>

	</body>

</html>
