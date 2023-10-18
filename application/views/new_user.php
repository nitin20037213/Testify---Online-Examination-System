 <div class="container" style="background:#fff!important;">


     <h3 class="page_heading"><?php echo $title;?></h3>



     <div class="col-md-6 shadow py-4">
         <form method="post" action="<?php echo site_url('user/insert_user/');?>">

             <div class="row py-4">
                 <br>
                 <div class="login-panel panel panel-default">
                     <div class="panel-body">



                         <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>


                         <div class="form-group">
                             <label for="inputEmail"
                                 class="sr-only"><?php echo $this->lang->line('email_address');?></label>
                             <input type="email" id="inputEmail" name="email" class="form-control"
                                 placeholder="<?php echo $this->lang->line('email_address');?>" required autofocus>
                         </div>
                         <div class="form-group">
                             <label for="inputPassword"
                                 class="sr-only"><?php echo $this->lang->line('password');?></label>
                             <input type="password" id="inputPassword" name="password" class="form-control"
                                 placeholder="<?php echo $this->lang->line('password');?>" required>
                         </div>
                         <div class="form-group">
                             <label for="inputEmail"
                                 class="sr-only"><?php echo $this->lang->line('full_name');?></label>
                             <input type="text" name="full_name" class="form-control"
                                 placeholder="<?php echo $this->lang->line('full_name');?>" autofocus>
                         </div>
                         <div class="form-group">
                             <label for="inputEmail"
                                 class="sr-only"><?php echo $this->lang->line('father_name');?></label>
                             <input type="text" name="father_name" class="form-control"
                                 placeholder="<?php echo $this->lang->line('father_name');?>" autofocus>
                         </div>
                         <div class="form-group">
                             <label for="inputEmail"
                                 class="sr-only"><?php echo $this->lang->line('contact_no');?></label>
                             <input type="text" name="contact_no" class="form-control"
                                 placeholder="<?php echo $this->lang->line('contact_no');?>" autofocus>
                         </div>
                         <div class="form-group">
                             <label><?php echo $this->lang->line('select_group');?></label>
                             <select class="form-control" name="gid" id="gid" onChange="getexpiry();">
                                 <?php 
					foreach($group_list as $key => $val){
						?>

                                 <option value="<?php echo $val['gid'];?>"><?php echo $val['group_name'];?>
                                     (<?php echo $this->lang->line('price_');?>: <?php echo $val['price'];?>)</option>
                                 <?php 
					}
					?>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="inputEmail"><?php echo $this->lang->line('subscription_expired');?></label>
                             <input type="text" name="subscription_expired" id="subscription_expired"
                                 class="form-control"
                                 placeholder="<?php echo $this->lang->line('subscription_expired');?>" autofocus>
                         </div>

                         <div class="form-group">
                             <label><?php echo $this->lang->line('account_type');?></label>
                             <select class="form-control" name="su">
                                 <?php 
						foreach($account_type as $ak =>$val){
						?>
                                 <option value="<?php echo $val['account_id'];?>"><?php echo $val['account_name'];?>
                                 </option>
                                 <?php 
						}
						?>

                             </select>
                         </div>


                         <button class="btn btn-primary"
                             type="submit"><?php echo $this->lang->line('submit');?></button>

                     </div>
                 </div>




             </div>
         </form>
     </div>





 </div>
 <script>
getexpiry();
 </script>