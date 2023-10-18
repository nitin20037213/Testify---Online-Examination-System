<div class="container" style="background:#fff!important;">
    <h3 class="page_heading"><?php echo $title;?></h3>
    <div class="main-body">



        <!-- Breadcrumb -->


        <!-- /Breadcrumb -->



        <div class="row gutters-sm">

            <div class="col-md-6 mb-3 mr-5">

                <div class="card">

                    <div class="card-body">

                        <div class="d-flex flex-column align-items-center text-center">

                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                class="rounded-circle" width="150">

                            <div class="mt-3">



                                <span class="badge badge-primary"> <?php echo $result['user_status'];?></span>

                                <h4><?php echo $result['full_name'];?></h4>

                                <p class="text-secondary mb-1"><?php echo ($result['village_city'])?>
                                    <b>(<?php echo ($result['district'])?>)</b>
                                </p>

                                <p class="text-muted font-size-sm">+91 <?php echo $result['contact_no'];?></p>




                                <a href="<?php echo site_url('user/edit_user/'.$result['uid']);?>"
                                    class="btn btn-warning btn-square mr-2">
                                    Edit <i class="fas fa-user-edit"></i> </a>

                                

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card mt-3 mb-3">
                    <div class="card-header py-2 text-center">User Information</div>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">

                            <h6 class="font-weight-bold">Total Exams given</h6>

                            <span class="text-secondary"> <?php echo $attempted;?></span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">

                            <h6 class="font-weight-bold">Passed</h6>

                            <span class="text-secondary"> <?php echo $pass;?></span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">

                            <h6 class="font-weight-bold">Failed</h6>

                            <span class="text-secondary"> <?php echo $fail;?></span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap ">

                            <h6 class="font-weight-bold">Last Attempt</h6>

                            <span class="text-secondary"> <?php echo $lastattempt;?></span>

                        </li>

                    </ul>



                </div>


                <div class="card mb-3">

                    <div class="card-header py-2 text-center">About</div>
                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm-3">

                                <h6 class="mb-0">Reg. No.</h6>

                            </div>

                            <div class="col-sm-9 text-secondary">

                                <?php echo $result['uid'];?>

                            </div>

                        </div>

                        <hr>

                        <div class="row">

                            <div class="col-sm-3">

                                <h6 class="mb-0">Father Name</h6>

                            </div>

                            <div class="col-sm-9 text-secondary">

                                <?php echo $result['father_name'];?>

                            </div>

                        </div>

                        <hr>

                        <div class="row">

                            <div class="col-sm-3">

                                <h6 class="mb-0">Group Joined</h6>

                            </div>

                            <div class="col-sm-9 text-secondary">

                                <?php echo $result['group_name'];?>

                            </div>

                        </div>

                        <hr>

                        <div class="row">

                            <div class="col-sm-3">

                                <h6 class="mb-0">Email</h6>

                            </div>

                            <div class="col-sm-9 text-secondary">

                                <?php echo $result['email'];?>

                            </div>

                        </div>

                        <hr>





                        <div class="row">

                            <div class="col-sm-3">

                                <h6 class="mb-0">Account Type</h6>

                            </div>

                            <div class="col-sm-9 text-secondary">

                                <?php   if($result['su']==1){ echo $this->lang->line('administrator');}else{ echo $this->lang->line('user'); }?>

                            </div>

                        </div>

                        <hr>

                        <div class="row">

                            <div class="col-sm-3">

                                <h6 class="mb-0">Registration Date</h6>

                            </div>

                            <div class="col-sm-9 text-secondary">

                                <?php echo $result['registered_date'];?>

                            </div>

                        </div>




                    </div>
                </div>

            </div>


            <div class="col-sm-5">
                <div class="card mb-3">

                    <div class="card-header py-2 text-center"><?php echo $this->lang->line('category_prof');?>
                    </div>
                    <div class="card-body">




                        <div class="table-responsive">

                            <table class="table table-bordered">



                                <tbody>





                                    <tr>

                                        <th>

                                            <?php echo $this->lang->line('category');?>

                                        </th>

                                        <th>

                                            <?php echo $this->lang->line('overall_percentage');?>

                                        </th>

                                        <th>

                                            <?php echo $this->lang->line('percentage_last_quiz');?>

                                        </th>

                                    </tr>



                                    <?php 

          arsort($categories);

          foreach($categories as $k => $val){

          ?>

                                    <tr <?php if(intval($val) <= 50){ ?>style="background-color:#f2dede;"
                                        <?php }else{ ?>style="background-color:#dff0d8;" <?php } ?>>

                                        <td>

                                            <?php echo $k;?>

                                        </td>

                                        <td>

                                            <?php if($val >= 100){ echo '100';}else{ echo intval($val);}?>% </td>



                                        <td>



                                            <?php if(intval($category_recent[$k]) >= intval($val)){

  ?>

                                            <i class="fa fa-arrow-up" style="color:green;"
                                                title="<?php echo $this->lang->line('improving');?>"></i>

                                            <?php 

  }else{

  ?>

                                            <i class="fa fa-arrow-down" style="color:red;"
                                                title="<?php echo $this->lang->line('improving2');?>"></i>

                                            <?php 

  }

  ?>

                                            <?php if($category_recent[$k] >= 100){ echo '100';}else{ echo intval($category_recent[$k]);}  ?>%





                                        </td>

                                    </tr>

                                    <?php 

          }

          ?>

                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>





                <div class="card mb-3">


                    <div class="card-header py-2 text-center"><?php echo $this->lang->line('questions_incorect');?>
                    </div>
                    <div class="card-body">




                        <div class="table-responsive">

                            <table class="table table-bordered">



                                <tbody>





                                    <tr>

                                        <th>#</th>

                                        <th>

                                            <?php echo $this->lang->line('question');?>

                                        </th>

                                        <th>

                                            <?php echo $this->lang->line('action');?>

                                        </th>

                                    </tr>

                                    <?php 

foreach($questions as $k => $qv){

?>

                                    <tr>

                                        <td>

                                            <?php echo $qv['qid'];?>

                                        </td>

                                        <td>

                                            <?php echo substr(strip_tags($qv['question']),0,100);?>

                                        </td>

                                        <td>

                                            <a href="#" data-toggle="modal"
                                                data-target="#myModal<?php echo $qv['qid'];?>"><i class="fa fa-eye"
                                                    title="View Question"></i></a>

                                        </td>



                                    </tr>

                                    <?php 

}

?>

                                </tbody>

                            </table>

                        </div>


                    </div>
                </div>

                <div class="card mb-3">


                    <div class="card-header py-2 text-center"><?php echo $this->lang->line('payment_history');?>
                    </div>
                    <div class="card-body">




                        <div class="table-responsive">

                            <table class="table table-bordered">



                                <tbody>





                                    <tr>

                                        <th><?php echo $this->lang->line('payment_gateway');?></th>

                                        <th><?php echo $this->lang->line('paid_date');?> </th>

                                        <th><?php echo $this->lang->line('amount');?></th>

                                        <th><?php echo $this->lang->line('transaction_id');?> </th>

                                        <th><?php echo $this->lang->line('status');?> </th>

                                    </tr>

                                    <?php 

if(count($payment_history)==0){

  ?>

                                    <tr>

                                        <td colspan="5"><?php echo $this->lang->line('no_record_found');?></td>

                                    </tr>





                                    <?php

}

foreach($payment_history as $key => $val){

?>

                                    <tr>

                                        <td><?php echo $val['payment_gateway'];?></td>

                                        <td><?php echo date('Y-m-d H:i:s',$val['paid_date']);?></td>

                                        <td><?php echo $val['amount'];?></td>

                                        <td><?php echo $val['transaction_id'];?></td>

                                        <td><?php echo $val['payment_status'];?></td>



                                    </tr>



                                    <?php 

}

?>





                                </tbody>

                            </table>

                        </div>



                    </div>

                </div>



            </div>

        </div>