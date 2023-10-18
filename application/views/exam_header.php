<html lang="en">

  <head>

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-F80BKMVX6V"></script>

<script>

  window.dataLayer = window.dataLayer || [];

    function gtag(){dataLayer.push(arguments);}

      gtag('js', new Date());



        gtag('config', 'G-F80BKMVX6V');

        </script>



  <title> <?php echo $title;?></title>

 <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">

  <meta name="description" content="">

  <meta name="author" content="">





  <link rel="icon" href="<?php echo base_url();?>images/favicon.ico" type="image/gif" sizes="32x32">



  <!-- Custom fonts for this template-->

  <link href="<?php echo base_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 <!-- custom css -->

	<link href="<?php echo base_url('css/style.css?q='.time());?>" rel="stylesheet">

	

	<!-- Custom styles for this template-->

  <link href="<?php echo base_url();?>css/sb-admin-2.min.css" rel="stylesheet">



	

	

  <style>

  html,body,h1,h2,h3,h4,p,div,span,ul,li,a{

    direction: ltr;

}

.btn-default{

	

	border:1px solid #c8c4c4;

	

}

form{

	width: 100%;

}



.sidebar {

    width: 16rem!important;

}

@media only screen and (max-width: 900px) {



.sidebar{

display:none;

}

.sidebar .sidebar-brand .sidebar-brand-text {

display:block;

}

}

  </style>	

	<script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <!-- Core plugin JavaScript-->

  <script src="<?php echo base_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for all pages-->

  <script src="<?php echo base_url();?>js/sb-admin-2.min.js"></script>



  <!-- Page level plugins -->

  <script src="<?php echo base_url();?>vendor/chart.js/Chart.min.js"></script>



   

	

	<script>

	

	var base_url="<?php echo base_url();?>";



	</script>

	

	 

	<?php

	if(($this->uri->segment(1).'/'.$this->uri->segment(2))!='quiz/attempt'){

	?>

	<!-- custom javascript -->

	  	<script src="<?php echo base_url('js/basic.js?q='.time());?>"></script>

	<?php

	}

	?>	

	<!-- firebase messaging menifest.json -->

	 <link rel="manifest" href="<?php echo base_url('js/manifest.json');?>">

	 

	  <script>



$(document).ready(function(){

  $("#sidebarToggleTop").click(function(){

    $("ul").toggle();

  });

});

</script>    



	 









 </head>

  

  

  

  

  

  

