 <div class="container" style="background:#fff!important;">

     <div class="card shadow p-4">
         <h3 class="page_heading"><?php echo $title;?></h3>
         <div class="row">

             <div class="col-lg-8 pr-4">

                 <form method="post" action="<?php echo site_url('user/index/');?>">
                     <div class="input-group">
                         <input type="text" class="form-control" name="search"
                             placeholder="<?php echo $this->lang->line('search');?>...">
                         <span class="input-group-btn">
                             <button class="btn btn-danger" type="submit"> <i class="fa fa-search"
                                     aria-hidden="true"></i>
                                 <?php echo $this->lang->line('search');?></button>
                         </span>


                     </div><!-- /input-group -->

                 </form>
             </div><!-- /.col-lg-6 -->


             <div class="col-lg-4 pl-4">
                 <div class="add_button"><a href="<?php echo site_url('user/new_user');?>"
                         class="btn btn-success btn-square mr-2">Add User <i class="fas fa-plus"></i></a></div>
             </div>

         </div><!-- /.row -->



         <div class="row">

             <div class="col-md-18 py-2">
                 <br>
                 <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>

                 <table class="table table-bordered">
                     <tr>
                         <th class="text-xs-right text-dark text-center">Roll No.</th>
                         <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('full_name');?>
                         </th>
                         <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('email');?></th>
                         <!-- <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('father_name');?> </th> -->
                         <!-- <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('village_city');?> </th> -->
                         <!-- <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('send_notification');?> </th> -->
                         <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('action');?> </th>
                         <th class="text-xs-right text-dark text-center">Notify All  <a href="<?php echo site_url('notification/add_new/'.$val['uid']);?>"
                                    class="btn btn-info btn-square mr-2"><i class="fa fa-paper-plane"></i></a></th>
                     </tr>
                     <?php 
if(count($result)==0){
	?>
                     <tr>
                         <td colspan="4"><?php echo $this->lang->line('no_record_found');?></td>
                     </tr>


                     <?php
}
foreach($result as $key => $val){
?>
                     <tr>
                         <td class='clickable-row' data-href="<?php echo site_url('user2/view_user/'.$val['uid']);?>"
                             class="text-center"><?php echo $val['uid'];?></td>
                         <td class='clickable-row' data-href="<?php echo site_url('user2/view_user/'.$val['uid']);?>"
                             class="text-center"><?php echo $val['full_name'];?> </td>
                         <td class='clickable-row' data-href="<?php echo site_url('user2/view_user/'.$val['uid']);?>"
                             class="text-center"><?php echo $val['email'].' '.$val['wp_user'];?></td>
                         <!-- <td class="text-center"><?php echo $val['father_name'];?></td> -->
                         <!-- <td class="text-center"><?php echo $val['village_city'];?></td> -->
                         <td class="text-center">

                             <a href="<?php echo site_url('user/edit_user/'.$val['uid']);?>"
                                 class="btn btn-warning btn-square mr-2">
                                 Edit <i class="fas fa-user-edit"></i> </a>

                             <a href="javascript:remove_entry('user/remove_user/<?php echo $val['uid'];?>');"
                                 class="btn btn-danger btn-square">
                                 Delete <i class="fas fa-trash-alt"></i>
                             </a>

                         </td>
                         <td class="text-center">
                         <a href="<?php echo site_url('notification/add_new/'.$val['uid']);?>"
                                    class="btn btn-info btn-square mr-2"><i class="fa fa-paper-plane"></i></a>
                         </td>
                     </tr>

                     <?php 
}
?>
                 </table>
             </div>
         </div>
     </div>
     <br>

     <?php
if(($limit-($this->config->item('number_of_rows')))>=0){ $back=$limit-($this->config->item('number_of_rows')); }else{ $back='0'; } ?>

     <a href="<?php echo site_url('user/index/'.$back);?>" class="btn btn-primary"><i class="fa fa-arrow-left"
             aria-hidden="true"></i> <?php echo $this->lang->line('back');?></a>
     &nbsp;&nbsp;
     <?php
 $next=$limit+($this->config->item('number_of_rows'));  ?>

     <a href="<?php echo site_url('user/index/'.$next);?>"
         class="btn btn-primary"><?php echo $this->lang->line('next');?> <i class="fa fa-arrow-right"
             aria-hidden="true"></i></a>

 </div>
 </div>

 </div>