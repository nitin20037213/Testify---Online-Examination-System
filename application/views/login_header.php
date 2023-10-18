<html lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F80BKMVX6V"></script>

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());



    gtag('config', 'G-F80BKMVX6V');
    </script>



    <title> <?php echo $title;?></title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">

    <meta name="description" content="">

    <meta name="author" content="">





    <link rel="icon" href="<?php echo base_url();?>images/favicon.ico" type="shortcut icon" sizes="32x32">



    <!-- Custom fonts for this template-->

    <link href="<?php echo base_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- custom css -->

    <link href="<?php echo base_url('css/style.css?q='.time());?>" rel="stylesheet">



    <!-- Custom styles for this template-->

    <link href="<?php echo base_url();?>css/sb-admin-2.min.css" rel="stylesheet">







    <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    p,
    div,
    span,
    ul,
    li,
    a {

        direction: ltr;

    }

    .btn-default {



        border: 1px solid #c8c4c4;



    }

    form {

        width: 100%;

    }



    .sidebar {

        width: 16rem !important;

    }

    @media only screen and (max-width: 900px) {



        .sidebar {

            display: none;

        }

        .sidebar .sidebar-brand .sidebar-brand-text {

            display: block;

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
    var base_url = "<?php echo base_url();?>";
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
    $(document).ready(function() {

        $("#sidebarToggleTop").click(function() {

            $("ul").toggle();

        });

    });
    </script>




    <!-- password show -->

    <script>
    function password_show_hide() {
        var x = document.getElementById("show_password");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }

    function password_show_hide1() {
        var x = document.getElementById("show_password1");
        var show_eye = document.getElementById("show_eye1");
        var hide_eye = document.getElementById("hide_eye1");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
    </script>








</head>


<style>
.video {
    height: 100%;
    margin: 0px;
    object-fit: cover;
    padding: 0px;
    position: absolute;
    width: 100%;
}

video {
    object-fit: contain;
    overflow-clip-margin: content-box;
    overflow: visible;
}

.overlay {
    height: 100%;
    opacity: 1;
    position: fixed;
    top: 0px;
    transition: opacity 0.3s linear 0s;
    width: 100%;
}

.overlayFixedBackground {
    background-attachment: fixed;
    background-position-y: 0%;
    background-repeat: no-repeat;
    background-size: cover;
}

.overlayGradient {
    background-image: radial-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%), radial-gradient(rgba(0, 0, 0, 0) 33%, rgba(0, 0, 0, 0.3) 166%);
}
</style>










<body id="bg-gradient-primary">

    <video class="video" autoplay loop muted
        src="https://prod-streaming-video-msn-com.akamaized.net/3f6ca508-598d-4cbd-a3e2-43deea7bc377/b60c553e-9f3f-4164-8850-700a9a73a899.mp4"></video>


    <span data-mscc-ic="false" id="backgroundImageOverlay"
        class="overlayGradient overlay overlayFixedBackground "></span>
    <nav class="navbar navbar-expand-sm navbar-dark justify-content-center d-block card-header py-3"
        style="background-color: white;">

        <div class="container-fluid">

            <?php

if ($logged_in=$this->session->userdata('logged_in')) {

  echo "<button id='sidebarToggleTop'  class='navbar-toggler collapsed' type='button' data-toggle='collapse' data-target='#main_nav'  aria-expanded='true' aria-label='Toggle navigation'>

      <span class='navbar-toggler-icon'></span>

  </button>";

} else {

  echo "<button  class='navbar-toggler collapsed' type='button' data-toggle='collapse' data-target='#main_nav'  aria-expanded='true' aria-label='Toggle navigation'>

      <span class='navbar-toggler-icon'></span>

  </button>";

}

?>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Kavoon&display=swap" rel="stylesheet">
            <a href="<?php echo base_url();?>"
                style="text-decoration: none !important; font-family: 'Kavoon', cursive;letter-spacing:2px; color:#4E73DF;">
                <h2 class=" justify-content-center">Testify</h2>
            </a>




            <?php 

$logged_in=$this->session->userdata('logged_in');

  // check sg invitation

  $uid=$logged_in['uid'];

  $query=$this->db->query("select * from appointment_request 

  join savsoft_users on savsoft_users.uid=appointment_request.request_by 

   where appointment_request.to_id='$uid' and appointment_request.appointment_status='Pending' ");

  $invitations=$query->result_array();

  

  $query=$this->db->query("select * from savsoft_notification 

    where (savsoft_notification.uid='$uid' OR savsoft_notification.uid='0') AND (savsoft_notification.viewed='0')  ");

  $notifications=$query->result_array();

  

  ?>







        </div>

    </nav>


    <?php 

      if($this->session->userdata('logged_in')){

        if(($this->uri->segment(1).'/'.$this->uri->segment(2))!='quiz/attempt'){

        $logged_in=$this->session->userdata('logged_in');

        $hquery=$this->db->query(" select * from savsoftquiz_setting where setting_name='App_Name' || setting_name='App_title' order by setting_id asc "); 

        $hres=$hquery->result_Array();

  ?>

    <!-- Page Wrapper -->



    <div id="wrapper">

        <!-- Sidebar -->

        <ul class="navbar-nav bg-light sidebar sidebar-light accordion" id="accordionSidebar">

            <div class="sticky-top">


                <center><span style="color:#ffffff;"><?php echo $hres[1]['setting_value'];?> </span></center>

                <!-- Divider -->

                <hr class="sidebar-divider my-0 ">

                <?php 

if(in_array('All',explode(',',$logged_in['setting']))){

?>

                <!-- Nav Item - Dashboard -->

                <li class="nav-item active">

                    <a class="nav-link" href="<?php echo site_url('dashboard');?>">

                        <i class="fas fa-fw fa-tachometer-alt"></i>

                        <span><?php echo $this->lang->line('dashboard');?></span></a>

                </li>

                <?php } ?>

                <!-- Divider -->

                <hr class="sidebar-divider">



                <!-- Heading  

      <div class="sidebar-heading">

        Interface

      </div>

-->





                <?php 

  if(in_array('List_all',explode(',',$logged_in['users']))){

    ?>

                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item">

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">

                        <i class="fas fa-fw fa-users"></i>

                        <span><?php echo $this->lang->line('users');?></span>

                    </a>



                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

                        <div class="bg-white py-2 collapse-inner rounded">

                            <?php 

if(in_array('Add',explode(',',$logged_in['users']))){

?>

                            <a class="collapse-item"
                                href="<?php echo site_url('user/new_user');?>"><?php echo $this->lang->line('add_new');?></a>

                            <?php } ?>

                            <?php 

if(in_array('List',explode(',',$logged_in['users'])) || in_array('List_all',explode(',',$logged_in['users']))){

?>

                            <a class="collapse-item"
                                href="<?php echo site_url('user');?>"><?php echo $this->lang->line('users');?>
                                <?php echo $this->lang->line('list');?></a>

                            <?php } ?>

                            <?php 

if(in_array('List_all',explode(',',$logged_in['appointment']))){ ?>

                            <a class="collapse-item"
                                href="<?php echo site_url('appointment/myappointment/');?>"><?php echo $this->lang->line('myappointment');?></a>

                            <?php } ?>

                        </div>

                    </div>

                </li>

                <?php 

        }

?>





                <?php 

if(in_array('List',explode(',',$logged_in['questions'])) || in_array('List_all',explode(',',$logged_in['questions']))){

?>



                <!-- Nav Item -  Collapse Menu -->



                <li class="nav-item">

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">

                        <i class="fas fa-fw fa-university"></i>

                        <span><?php echo $this->lang->line('qbank');?></span>

                    </a>

                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">

                        <div class="bg-white py-2 collapse-inner rounded">

                            <?php 

if(in_array('Add',explode(',',$logged_in['questions']))){

?>

                            <a class="collapse-item"
                                href="<?php echo site_url('qbank/pre_new_question');?>"><?php echo $this->lang->line('add_new');?></a>

                            <?php 

}



if(in_array('List',explode(',',$logged_in['questions'])) || in_array('List_all',explode(',',$logged_in['questions']))){

?>

                            <a class="collapse-item"
                                href="<?php echo site_url('qbank');?>"><?php echo $this->lang->line('question');?>
                                <?php echo $this->lang->line('list');?></a>

                            <?php 

}

?>

                        </div>

                    </div>

                </li>



                <?php } ?>










                <?php 



if(in_array('List',explode(',',$logged_in['quiz'])) || in_array('List_all',explode(',',$logged_in['quiz']))){

?>

                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item">

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQuiz"
                        aria-expanded="true" aria-controls="collapseQuiz">

                        <i class="fas fa-fw fa-chalkboard-teacher"></i>

                        <span><?php echo $this->lang->line('quiz');?> </span>

                    </a>

                    <div id="collapseQuiz" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">

                        <div class="bg-white py-2 collapse-inner rounded">

                            <?php  

 if(in_array('Add',explode(',',$logged_in['quiz']))){

 ?>

                            <a class="collapse-item"
                                href="<?php echo site_url('quiz/add_new');?>"><?php echo $this->lang->line('add_new');?></a>

                            <?php

    }

if(in_array('List',explode(',',$logged_in['quiz'])) || in_array('List_all',explode(',',$logged_in['quiz']))){

?>

                            <a class="collapse-item"
                                href="<?php echo site_url('quiz');?>"><?php echo $this->lang->line('quiz');?>
                                <?php echo $this->lang->line('list');?></a>

                            <?php 

}

?>



                        </div>

                    </div>

                </li>

                <?php 

}

?>

                <?php 

if(in_array('List',explode(',',$logged_in['results'])) || in_array('List_all',explode(',',$logged_in['results']))){

?>

                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item">

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseResult"
                        aria-expanded="true" aria-controls="collapseResult">

                        <i class="fas fa-fw fa-folder"></i>

                        <span><?php echo $this->lang->line('result');?></a></span>

                    </a>

                    <div id="collapseResult" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">

                        <div class="bg-white py-2 collapse-inner rounded">



                            <a class="collapse-item"
                                href="<?php echo site_url('result');?>"><?php echo $this->lang->line('result');?>
                                <?php echo $this->lang->line('list');?></a>



                        </div>

                    </div>

                </li>

                <?php 

}

?>



                <?php 

$acp=explode(',',$logged_in['study_material']);

if(in_array('List',$acp)){

?>



                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item">

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStudy"
                        aria-expanded="true" aria-controls="collapseStudy">

                        <i class="fas fa-fw fa-book"></i>

                        <span><?php echo $this->lang->line('study_material');?></span>

                    </a>

                    <div id="collapseStudy" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">

                        <div class="bg-white py-2 collapse-inner rounded">



                            <a class="collapse-item"
                                href="<?php echo site_url('study_material');?>"><?php echo $this->lang->line('study_material');?></a>

                        </div>

                    </div>

                </li>


                <?php 

}

?>



                <?php 

if(in_array('All',explode(',',$logged_in['setting']))){

?>

                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item">

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
                        aria-expanded="true" aria-controls="collapseSetting">

                        <i class="fas fa-fw fa-cog"></i>

                        <span><?php echo $this->lang->line('setting');?></span>

                    </a>

                    <div id="collapseSetting" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">

                        <div class="bg-white py-2 collapse-inner rounded">



                            <a class="collapse-item"
                                href="<?php echo site_url('setting');?>"><?php echo $this->lang->line('setting');?></a>

                            <a class="collapse-item"
                                href="<?php echo site_url('notification');?>"><?php echo $this->lang->line('notification');?></a>

                            <a class="collapse-item"
                                href="<?php echo site_url('user/group_list');?>"><?php echo $this->lang->line('group_list');?></a>

                            <a class="collapse-item"
                                href="<?php echo site_url('qbank/category_list');?>"><?php echo $this->lang->line('category_list');?></a>

                            <a class="collapse-item"
                                href="<?php echo site_url('qbank/level_list');?>"><?php echo $this->lang->line('level_list');?></a>

                            <a class="collapse-item"
                                href="<?php echo site_url('account');?>"><?php echo $this->lang->line('account_type');?></a></a>

                            <a class="collapse-item"
                                href="<?php echo site_url('user/custom_fields');?>"><?php echo $this->lang->line('custom_forms');?></a>

                            <a class="collapse-item"
                                href="<?php echo site_url('payment_gateway');?>"><?php echo $this->lang->line('payment_history');?></a>

                            <a class="collapse-item"
                                href="<?php echo site_url('payment_gateway');?>"><?php echo $this->lang->line('advertisment');?></a>

                        </div>

                    </div>

                </li>

                <?php 

}

?>

                <?php 

 if(!in_array('List_all',explode(',',$logged_in['quiz']))){

?>

                <li class="nav-item">

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
                        aria-expanded="true" aria-controls="collapseSetting">

                        <i class="fas fa-fw fa-cog"></i>

                        <span><?php echo $this->lang->line('setting');?></span>

                    </a>

                    <div id="collapseSetting" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">






                        <a type="button" class="btn btn-danger fw-bold"
                            href="<?php echo site_url('user/switch_group');?>"><?php echo $this->lang->line('change_group');?></a>



                    </div>

                </li>
                <?php 

}

?>



                <?php 

if(in_array('All',explode(',',$logged_in['setting']))){

?>

                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item">

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSupport"
                        aria-expanded="true" aria-controls="collapseStudy">

                        <i class="fas fa-fw fa-question-circle"></i>

                        <span>Support</span>

                    </a>

                    <div id="collapseSupport" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">

                        <div class="bg-white py-2 collapse-inner rounded">



                            <a class="collapse-item" href="<?php echo base_url();?>support.php">Support</a>

                        </div>

                    </div>

                </li>



                <?php 

}

?>

                <?php 

if(in_array('All',explode(',',$logged_in['setting']))){

?>



                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item">

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLanding"
                        aria-expanded="true" aria-controls="collapseStudy">

                        <i class="fas fa-fw fa-puzzle-piece"></i>

                        <span>Landing Page</span>

                    </a>

                    <div id="collapseLanding" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">

                        <div class="bg-white py-2 collapse-inner rounded">



                            <a class="collapse-item" href="<?php echo site_url('payment_gateway');?>">Menu</a>



                            <a class="collapse-item" href="<?php echo site_url('payment_gateway');?>">Pages/Post</a>

                            <a class="collapse-item" href="<?php echo site_url('payment_gateway');?>">Slider</a>

                            <a class="collapse-item" href="<?php echo site_url('payment_gateway');?>">Design</a>

                        </div>

                    </div>

                </li>





                <?php 

}

?>



        </ul>



        </nav>

        <!-- End of Topbar -->





        <!-- Begin Page Content -->

        <div class="container-fluid">
            <div class="container">
                <div class="center">
                    <hr>
                </div>
            </div>




            <!-- Main Content -->

            <div id="content">




                <center><?php 

  if($this->uri->segment(3) != 'ph'){

if($this->uri->segment(2) != 'attempt' && $this->uri->segment(1) != 'install'){

  $this->db->where("add_status","Active");

  $this->db->where("position","Top");

  $query=$this->db->get('savsoft_add');

  if($query->num_rows()==1){

  $ad=$query->row_array();

  if($ad['advertisement_code'] != ""){

  echo $ad['advertisement_code'];

  }else if($ad['banner']!=''){ ?><a href="<?php echo $ad['banner_link'];?>" target="new_add"><img
                            src="<?php echo base_url('upload/'.$ad['banner']);?>" class="img-responsive"></a> <?php    

  

  }

  }

  

} 

  

?></center>



                <?php 
 
  }
  ?>



                <?php 
      } 
    }
?>
                <div class="container">

                    <style>
                    .footer-container {
                        display: block;
                    }
                    </style>