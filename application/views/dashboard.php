  <div class="container" style="background:#fff!important;">



      <div id="update_notice"></div>


      <h3 class="page_heading"><?php echo $title;?></h3>
      <div class="row">

          <div class="col-md-4">
              <a href="<?php echo site_url('user');?>" style="color: #9294a2;text-decoration: none !important;"
                  onmouseover="this.style.color='#0e52c1'" onmouseout="this.style.color='#9294a2'">
                  <div class="card border-left-primary shadow  py-2">
                      <div class="card-body shadow ">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold  text-uppercase mb-1 ">
                                      <?php echo $this->lang->line('no_registered_user');?>
                                  </div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_users;?></div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-users fa-2x "></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </a>
          </div>


          <div class="col-md-4">
              <a href="<?php echo site_url('qbank');?>" style="color: #9294a2;text-decoration: none !important;"
                  onmouseover="this.style.color='#00c283'" onmouseout="this.style.color='#9294a2'">
                  <div class="card border-left-success shadow  py-2">
                      <div class="card-body shadow ">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-uppercase mb-1">
                                      <?php echo $this->lang->line('no_questions_qbank');?>
                                  </div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_qbank;?></div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-question fa-2x "></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </a>
          </div>

          <div class="col-md-4">
              <a href="<?php echo site_url('quiz');?>" style="color: #9294a2;text-decoration: none !important;"
                  onmouseover="this.style.color='#efbe26'" onmouseout="this.style.color='#9294a2'">
                  <div class="card border-left-warning shadow  py-2">
                      <div class="card-body shadow ">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold  text-uppercase mb-1">

                                      <?php echo $this->lang->line('no_registered_quiz');?>

                                  </div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_quiz;?></div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-chalkboard-teacher fa-2x "></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </a>
          </div>

          <div class="row"><br><br></div>

          <div class="col-md-4">
              <a href="<?php echo site_url('user');?>" style="color: #9294a2;text-decoration: none !important;"
                  onmouseover="this.style.color='#00b5c8'" onmouseout="this.style.color='#9294a2'">
                  <div class="card border-left-info shadow  py-2">
                      <div class="card-body shadow ">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold  text-uppercase mb-1">

                                      <?php echo $this->lang->line('active');?>
                                      <?php echo $this->lang->line('users');?>

                                  </div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $active_users;?>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-user fa-2x text-red-100"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </a>
          </div>




          <div class="col-md-4">
              <a href="<?php echo site_url('user');?>" style="color: #9294a2;text-decoration: none !important;"
                  onmouseover="this.style.color='#e23e25'" onmouseout="this.style.color='#9294a2'">
                  <div class="card border-left-danger shadow  py-2">
                      <div class="card-body shadow ">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-uppercase mb-1">

                                      <?php echo $this->lang->line('inactive');?>
                                      <?php echo $this->lang->line('users');?>

                                  </div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $inactive_users;?>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-ban fa-2x text-blue-900"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </a>
          </div>




          <div class="col-md-4">
              <a href="<?php echo site_url('appointment/myappointment/');?>"
                  style="color: #9294a2;text-decoration: none !important;" onmouseover="this.style.color='#6f42c1'"
                  onmouseout="this.style.color='#9294a2'">
                  <div class="card shadow  py-2" style="border-left:4px solid #6f42c1;">
                      <div class="card-body shadow ">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-uppercase mb-1">
                                      Appointments

                                  </div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $appoint_users=5;?>
                                  </div>
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-calendar-check fa-2x text-blue-900"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </a>
          </div>






      </div>

      <div class="row"><br><br><br><br></div>





      <!-- recent users -->

      <div class="row">
          <div class="col-lg-7">




              <div class="card  shadow  py-2">
                  <div class="card-heading py-2 text-center">
                      <h6 class="m-0 font-weight-bold text-primary">
                          <?php echo $this->lang->line('recently_registered');?>
                      </h6>
                  </div>
                  <div class="card-body table-responsive">
                      <table class="table table-bordered valign-middle">
                          <thead>
                              <tr>
                                  <th class="text-xs-right text-dark"><?php echo $this->lang->line('full_name');?></th>
                                  <th class="text-xs-right text-dark"><?php echo $this->lang->line('roll_no');?></th>
                                  <th class="text-xs-right text-dark"><?php echo $this->lang->line('group_name');?></th>
                                  <th class="text-xs-right text-dark"><?php echo $this->lang->line('contact_no');?></th>

                              </tr>
                          </thead>
                          <tbody>
                              <?php 
if(count($result)==0){
	?>
                              <tr>
                                  <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
                              </tr>


                              <?php
}
$val=20;
foreach($result as $key => $val){
?><tr class='clickable-row' data-href="<?php echo site_url('user2/view_user/'.$val['uid']);?>">


                                  <td class="text-xs-right"><?php echo $val['full_name'];?></td>
                                  <td class="text-xs-right text-center "><?php echo $val['uid'];?>
                                      <?php echo $val['wp_user'];?></td>
                                  <td class="text-xs-right"><?php echo $val['group_name'];?></td>
                                  <td class="text-xs-right"><?php echo $val['contact_no'];?></td>


                              </tr>

                              <?php 
             }
             ?>

                          </tbody>
                      </table>
                  </div>
              </div>



          </div>

          <!-- recent users -->







          <!-- Revenue nan%  from last month -->

          <div class="col-lg-5">

              <?php 
              $revenue_months2=array();
                foreach($revenue_months as $fk => $fv){
                   $revenue_months2[]=floatval($fv);
                    }
                                  ?>

              <?php 
 
                                  $months=array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
                                  ?>


              <div class="card shadow mb-4 shadow  py-2">
                  <!-- Card Header - Dropdown -->
                  <div class="card-heading py-2 text-center ">
                      <h6 class="m-0 font-weight-bold text-primary"><?php echo $this->lang->line('revenue');?>

                          <?php 
                                  $todaymonth=date('M',time());
                                  if(date('m',time()) != 1){
                                  $mm=date('m',time())-1;

                                  }else{

                                  $mm=date('m',time());

                                  }
                                  $pastmonth=$months[$mm-1];
                                  $cal=number_format(((($revenue_months[$todaymonth]-$revenue_months[$pastmonth])/$revenue_months[$pastmonth])*100),'2','.','');
                                   if($cal < 0){
                                  ?>
                          <small class="font-weight-light text-muted" style="font-size:16px;color:#ff0000;"
                              title="<?php echo $this->lang->line('growth_lath_month');?>">
                              <?php echo $cal;?>% <i class="fa fa-arrow-down"></i>
                          </small>
                          <?php 
                                  }else{
                                  ?>
                          <small class="font-weight-light text-muted" style="font-size:16px;color:#72B159;"
                              title="<?php echo $this->lang->line('growth_lath_month');?>">
                              <?php echo $cal;?>% <i class="fa fa-arrow-up"></i>
                          </small>
                          <?php
                 }
                                  ?>
                          <?php echo $this->lang->line('past_days');?>

                      </h6>

                  </div>
                  <!-- Card Body -->
                  <div class="card-body">


                      <div class="font-size-34 text-center"><small
                              class="font-weight-light text-muted"><?php echo $this->config->item('base_currency_prefix');?></small>
                          <strong><?php echo  number_format(array_sum($revenue_months2), 2, '.', ''); ?></strong>
                          <small class="font-weight-light text-muted"><?php echo $this->lang->line('this_year');?>
                          </small>
                      </div>
                      <canvas id="myChart" width="340" height="340"></canvas>
                  </div>
                  <script>
                  var ctx = document.getElementById("myChart");
                  var myChart = new Chart(ctx, {
                      type: 'line',
                      data: {
                          labels: <?php echo json_encode($months);?>,
                          datasets: [{
                              label: '<?php echo $this->lang->line('rev_paid_quiz');?>',
                              data: <?php echo json_encode($revenue_months2);?>,
                              backgroundColor: 'rgba(255, 188, 188, 0.2)',
                              borderColor: 'rgba(153, 0, 0, 1)',
                              borderWidth: 1
                          }]
                      },
                      options: {
                          scales: {
                              yAxes: [{
                                  ticks: {
                                      beginAtZero: true
                                  }
                              }]
                          }
                      }
                  });
                  </script>



              </div>











              <!-- References -->

              <div class="panel">
                  <div class="panel-heading">
                      <div class="panel-title"><?php echo $this->lang->line('recent_sub');?></div>
                  </div>


                  <?php 
               if(count($payments)==0){
            	    ?>

                  <div class="box m-y-2">
                      <div class="box-cell valign-middle text-xs-center" style="width: 60px">
                          <i class="ion-social-twitter font-size-28 line-height-1 text-info"></i>
                      </div>
                      <div class="box-cell p-r-3">
                          <?php echo $this->lang->line('no_record_found');?>
                          <div class="progress m-b-0" style="height: 5px; margin-top: 5px;">
                              <div class="progress-bar progress-bar-info" style="width: 40%"></div>
                          </div>
                      </div>
                  </div>

                  <?php
                }
                $i=0;
               $colorcode=array(
               'success',
               'warning',
                'info',
               'danger'
               );
               foreach($payments as $key => $val){
               ?>
                  <div class="alert alert-<?php echo $colorcode[$i];?>" style="margin:5px;">

                      <a href="<?php echo site_url('user/edit_user/'.$val['uid']);?>">
                          <?php echo $val['first_name'].' '.$val['last_name'];?></a>
                      <?php echo $this->lang->line('subscribed');?>
                      <?php echo $val['group_name'];?>
                      <button class="btn btn-<?php echo $colorcode[$i];?>">
                          <?php echo $this->config->item(strtolower($val['payment_gateway']).'_currency_prefix');?>
                          <?php echo $val['amount'];?>
                          <?php echo $this->config->item(strtolower($val['payment_gateway']).'_currency_sufix');?>
                      </button>
                  </div>



                  <?php 
               if($i >= 4){
	             $i=0;
	              }else{
	             $i+=1;
	              }
              }
                ?>


              </div>
          </div>

      </div>

  </div>



  </div>

  <script>
update_check('5');
  </script>