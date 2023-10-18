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













</head>













<body id="bg-gradient-primary">



    <nav class="navbar navbar-expand-sm navbar-dark justify-content-center d-block card-header py-3"
        style="background-color: #fff;">

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


            <div class="collapse navbar-collapse justify-content-center" id="main_nav">

                <ul class="navbar-nav">



                    <!-- <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url();?>"><h5 class="text-white justify-content-center">Home</h5></a> </li>

    <li class="nav-item active"> <a class="nav-link" href="#"><h5 class="text-white justify-content-center">Why Testlab</h5></a> </li>

    <li class="nav-item active"> <a class="nav-link" href="#"><h5 class="text-white justify-content-center">About us</h5></a> </li>

    <li class="nav-item active"> <a class="nav-link" href="#"><h5 class="text-white justify-content-center">Contact us</h5></a> </li> -->


                    <!-- Nav Item - Alerts -->
                    <li class='nav-item dropdown'>



                        <!-- Nav Item - Messages -->

                    <li class='nav-item dropdown no-arrow mx-1'>



                        <!-- Dropdown - Messages -->

                        <div class='dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in '
                            aria-labelledby='messagesDropdown'>













                        </div>

                    </li>









                </ul>

                <!-- <div class="nav-item">

      <button type="button" class="btn btn-outline-light fw-bold">

          Login

        </button>

       

      </div> -->



            </div>

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

            <?php



if ($logged_in=$this->session->userdata('logged_in')) {

  echo  "



    

                         <div class='nav-item dropdown'>



       

                        <!-- Dropdown - User Information -->

                            <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in bg-gray'

                                aria-labelledby='userDropdown'>

                                <a class='dropdown-item' href=''>

                                <i class='fa fa-user fa-sm fa-fw mr-2 text-gray-400'></i> Profile

                                </a>

                                <a class='dropdown-item'  href=/testify/notification/>

                                   

                                <i class='fa fa-bell fa-sm fa-fw mr-2 text-gray-400'></i>Notifications

                                </a>

                                <a class='dropdown-item' href='/testify/appointment/myappointment/'>

                           
                                <i class='     fa fa-calendar
                                fa-sm fa-fw mr-2 text-gray-400'></i>Appointments

                                </a>

                                <div class='dropdown-divider bg-primary '></div>

                                <a class='dropdown-item ' href='/testify/user/logout'  >

                                    <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>

                                    Logout

                                </a>

                           

</div>



  <a 

          class='btn btn-dark btn-circle' href='#' id='alertsDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'

          style='    margin-top: -12px;'>" ;echo substr(strip_tags($logged_in['full_name']),0,1); 

} else {

  echo "<a class='mr-2 d-none d-lg-inline text-white font-weight-bold' href='' >Log in</a><a href=''

          class='btn btn-light btn-circle'

          ><i class='fa fa-user'></i>";

}

?>

            </a></a>







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


                <!-- pofile for users -->


                <?php 

 if(!in_array('List_all',explode(',',$logged_in['quiz']))){ ?>

                <li class="nav-item active">

                    <a class="nav-link" href="<?php echo site_url('user2/view_user/'.$logged_in['quiz']);?>">

                    <i class='fa fa-user fa-sm fa-fw mr-2 text-black'></i> 

                        <span>Profile</span></a>

                </li>
                <?php } ?>

                <!-- Divider -->

                <hr class="sidebar-divider">



                <!-- Heading  

      <div class="sidebar-heading">

        Interface

      </div>

-->



                <!-- Nav Item - Pages Collapse Menu -->

                <?php  if(in_array('List_all',explode(',',$logged_in['users']))){ ?>

                <li class="nav-item">

                    <?php if(in_array('List',explode(',',$logged_in['users'])) || in_array('List_all',explode(',',$logged_in['users']))){ ?>

                    <a class="nav-link" href="<?php echo site_url('user');?>">
                        <i class="fas fa-fw fa-users"></i>
                        <span><?php echo $this->lang->line('users');?>
                            <?php echo $this->lang->line('list');?>
                        </span>
                    </a>

                    <?php } ?>

                </li>

                <?php }?>







                <?php  if(in_array('List_all',explode(',',$logged_in['appointment']))){ ?>

                <li class="nav-item">

                    <?php if(in_array('List',explode(',',$logged_in['users'])) || in_array('List_all',explode(',',$logged_in['users']))){ ?>

                    <a class="nav-link" href="<?php echo site_url('appointment/myappointment/');?>">
                        <i class="fas fa-calendar-check"></i>
                        <span><?php echo $this->lang->line('myappointment');?>
                        </span>
                    </a>

                    <?php } ?>

                </li>

                <?php }?>













                <?php  if(in_array('List',explode(',',$logged_in['questions'])) || in_array('List_all',explode(',',$logged_in['questions']))){ ?>

                <li class="nav-item">

                    <?php if(in_array('List',explode(',',$logged_in['questions'])) || in_array('List_all',explode(',',$logged_in['questions']))){ ?>

                    <a class="nav-link" href="<?php echo site_url('qbank');?>">
                        <i class="fas fa-fw fa-university"></i>
                        <span><?php echo $this->lang->line('question');?>
                            <?php echo $this->lang->line('list');?>
                        </span>
                    </a>

                    <?php }?>

                </li>

                <?php } ?>









                <?php if(in_array('List',explode(',',$logged_in['quiz'])) || in_array('List_all',explode(',',$logged_in['quiz']))){ ?>

                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item">

                    <a class="nav-link collapsed" href="<?php echo site_url('quiz');?>">

                        <i class="fas fa-fw fa-chalkboard-teacher"></i>

                        <span><?php echo $this->lang->line('quiz');?>
                            <?php echo $this->lang->line('list');?></span>

                    </a>
                </li>

                <?php } ?>





                <?php if(in_array('List',explode(',',$logged_in['results'])) || in_array('List_all',explode(',',$logged_in['results']))){ ?>


                <li class="nav-item">

                    <a class="nav-link" href="<?php echo site_url('result');?>">

                        <i class="fas fa-fw fa-folder"></i>

                        <span><?php echo $this->lang->line('result');?></a></span>

                    </a>

                </li>

                <?php } ?>






                <?php $acp=explode(',',$logged_in['study_material']);  if(in_array('List',$acp)){?>

                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item">

                    <a class="nav-link" href="<?php echo site_url('study_material');?>">

                        <i class="fas fa-fw fa-book"></i>

                        <span><?php echo $this->lang->line('study_material');?></span>

                    </a>
                </li>


                <?php } ?>










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







        </ul>



        </nav>

        <!-- End of Topbar -->





        <!-- Begin Page Content -->

        <div class="container-fluid">
            <div class="container col-md-12">
                <div class="center">
                    <br>

                    <div class="container">
                        <nav aria-label="breadcrumb" class="main-breadcrumb">

                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><?= breadcrumbs() ?></li>
                            </ol>

                        </nav>
                    </div>
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



                <?php

// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
function breadcrumbs($separator = ' → ', $home = 'Home') {
// This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

// This will build our "base URL" ... Also accounts for HTTPS :)
$base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

// Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
// $breadcrumbs = Array("<a href=\"$base\">$home</a>");
$last = end(array_keys($path));

// Find out the index for the last value in our path array
$last = end(array_keys($path));
$upToNowCrumbs = array();
// Build the rest of the breadcrumbs
foreach ($path as $x => $crumb) {
    $upToNowCrumbs[] = $crumb;
    // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
    $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

    // If we are not on the last index, then display an <a> tag
    if ($x != $last)
        $breadcrumbs[] = "<a href=\"$base".implode('/', $upToNowCrumbs)."\">$title</a>";
    // Otherwise, just display the title (minus)
    else
        $breadcrumbs[] = $title;
}

// Build our temporary array (pieces of bread) into one big string :)
return implode($separator, $breadcrumbs);
}

?>



                <!-- table clickable js -->
                <script>
                jQuery(document).ready(function($) {
                    $(".clickable-row").click(function() {
                        window.location = $(this).data("href");
                    });
                });
                </script>