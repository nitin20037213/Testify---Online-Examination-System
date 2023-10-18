 <div class="container" style="background:#fff!important;">


     <h3 class="page_heading"><?php echo $title;?></h3>



     <div class="col-md-8 shadow py-4 mb-4">
         <form method="post" action="<?php echo site_url('user/update_user/'.$uid);?>">

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
                             <?php echo $this->lang->line('group_name');?>: <?php echo $result['group_name'];?>
                             (<?php echo $this->lang->line('price_');?>: <?php echo $result['price'];?>)
                         </div>
                         <div class="form-group">
                             <label for="inputEmail"
                                 class="sr-only"><?php echo $this->lang->line('email_address');?></label>
                             <input type="email" id="inputEmail" name="email" value="<?php echo $result['email'];?>"
                                 class="form-control" placeholder="<?php echo $this->lang->line('email_address');?>">
                         </div>

                         <div class="form-group">
                             <label for="inputEmail"
                                 class="sr-only"><?php echo $this->lang->line('full_name');?></label>
                             <input type="text" name="full_name" class="form-control"
                                 value="<?php echo $result['full_name'];?>"
                                 placeholder="<?php echo $this->lang->line('full_name');?>" required>
                         </div>
                         <div class="form-group">
                             <label for="inputEmail"
                                 class="sr-only"><?php echo $this->lang->line('father_name');?></label>
                             <input type="text" name="father_name" class="form-control"
                                 value="<?php echo $result['father_name'];?>"
                                 placeholder="<?php echo $this->lang->line('father_name');?>">
                         </div>

                         <div class="form-group">
                             <label for="inputEmail" class="sr-only"><?php echo $this->lang->line('district');?></label>
                             <input type="text" name="district" class="form-control"
                                 value="<?php echo $result['district'];?>"
                                 placeholder="<?php echo $this->lang->line('district');?>" required>
                         </div>
                         <div class="form-group">
                             <label for="inputEmail" class="sr-only"><?php echo $this->lang->line('district');?></label>
                             <input type="text" name="village_city" class="form-control"
                                 value="<?php echo $result['village_city'];?>"
                                 placeholder="<?php echo $this->lang->line('village_city');?>" required>
                         </div>


                         <div class="form-group">
                             <label for="inputPassword"
                                 class="sr-only"><?php echo $this->lang->line('change_password');?></label>
                             <input type="password" id="inputPassword" name="password" value="" class="form-control"
                                 placeholder="<?php echo $this->lang->line('change_password');?>">
                         </div>


                         <div class="form-group">
                             <label for="inputEmail"
                                 class="sr-only"><?php echo $this->lang->line('contact_no');?></label>
                             <input type="text" name="contact_no" class="form-control"
                                 value="<?php echo $result['contact_no'];?>"
                                 placeholder="<?php echo $this->lang->line('contact_no');?>" autofocus>
                         </div>




                         <div class="form-group">
                             <label><?php echo $this->lang->line('select_group');?></label>
                             <select class="form-control" name="gid" onChange="getexpiry();" id="gid">
                                 <?php 
					foreach($group_list as $key => $val){
						?>

                                 <option value="<?php echo $val['gid'];?>"
                                     <?php if($result['gid']==$val['gid']){ echo 'selected';}?>>
                                     <?php echo $val['group_name'];?> (<?php echo $this->lang->line('price_');?>:
                                     <?php echo $val['price'];?>)</option>
                                 <?php 
					}
					?>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="inputEmail"><?php echo $this->lang->line('subscription_expired');?></label>
                             <input type="text" name="subscription_expired" id="subscription_expired"
                                 class="form-control"
                                 value="<?php if($result['subscription_expired']!='0'){ echo date('Y-m-d',$result['subscription_expired']); }else{ echo '0';} ?>"
                                 placeholder="<?php echo $this->lang->line('subscription_expired');?>" value=""
                                 autofocus>
                         </div>


                         <div class="form-group">
                             <label><?php echo $this->lang->line('account_type');?></label>
                             <select class="form-control" name="su">
                                 <?php 
						foreach($account_type as $ak =>$val){
						?>
                                 <option value="<?php echo $val['account_id'];?>"
                                     <?php if($result['su']==$val['account_id']){ echo 'selected';}?>>
                                     <?php echo $val['account_name'];?></option>
                                 <?php 
						}
						?>

                             </select>
                         </div>

                         <div class="form-group">
                             <label><?php echo $this->lang->line('account_status');?></label>
                             <select class="form-control" name="user_status">
                                 <option value="Active" <?php if($result['user_status']=='Active'){ echo 'selected';}?>>
                                     <?php echo $this->lang->line('active');?></option>
                                 <option value="Inactive"
                                     <?php if($result['user_status']=='Inactive'){ echo 'selected';}?>>
                                     <?php echo $this->lang->line('inactive');?></option>
                             </select>
                         </div>
                         <?php 
	foreach($custom_form as $fk => $fval){
 
	?>
                         <div class="form-group">
                             <label for="inputEmail"><?php echo $fval['field_title']; ?></label>
                             <input type="<?php echo $fval['field_type']; ?>"
                                 name="custom[<?php echo $fval['field_id']; ?>]" class="form-control"
                                 value="<?php echo $custom_form_user[$fval['field_id']]; ?>"
                                 <?php echo $fval['field_validate']; ?>>
                         </div>

                         <?php
	}
	?>

                         <button class="btn btn-primary"
                             type="submit"><?php echo $this->lang->line('submit');?></button>

                     </div>
                 </div>




             </div>
         </form>
     </div>



     <div class="col-md-8">
         <div class="row shadow">
             <div class="card mb-3">

                 <div class="card-header py-2 text-center"><?php echo $this->lang->line('payment_history');?>
                 </div>
                 <div class="card-body">

                     <table class="table table-bordered">
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
                     </table>

                 </div>
             </div>

         </div>
     </div>
 </div>








 </div>