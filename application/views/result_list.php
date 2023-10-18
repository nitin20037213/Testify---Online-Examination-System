 <div class="container" style="background:#fff!important;">
     <?php 
$logged_in=$this->session->userdata('logged_in');
?>



     <?php 
if($logged_in['su']=='1'){
	?>
     <div class="row">

         <div class="col-lg-12">
             <div class="card shadow p-4">
                 <div class="row"><br></div>
                 <div class="card-heading">
                     <h1><?php echo $this->lang->line('generate_report');?> </h1>
                 </div>
                 <div class="row"><br></div>
                 <div class="card-body">
                     <form method="post" action="<?php echo site_url('result/generate_report/');?>">
                         <div class=" ">
                             <div>

                             </div>
                             <select name="quid">
                                 <option value="0"><?php echo $this->lang->line('select_quiz');?></option>
                                 <?php 
foreach($quiz_list as $qk => $quiz){
	?>
                                 <option value="<?php echo $quiz['quid'];?>"><?php echo $quiz['quiz_name'];?></option>
                                 <?php 
}
?>
                             </select>

                             <select name="gid">
                                 <option value="0"><?php echo $this->lang->line('select_group');?></option>
                                 <?php 
foreach($group_list as $gk => $group){
	?>
                                 <option value="<?php echo $group['gid'];?>"><?php echo $group['group_name'];?></option>
                                 <?php 
}
?>
                             </select>
                             <input type="text" name="date1" value=""
                                 placeholder="<?php echo $this->lang->line('date_from');?>">

                             <input type="text" name="date2" value=""
                                 placeholder="<?php echo $this->lang->line('date_to');?>">
                             <br><br>
                             <button class="btn btn-primary"
                                 type="submit"><?php echo $this->lang->line('generate_report');?></button>
                         </div><!-- /input-group -->
                     </form>
                 </div><!-- /.col-lg-6 -->
             </div><!-- /.row -->
         </div>
     </div>
     <?php 
}
?>

     <br><br><br>
     <div class="card shadow p-4">
         <h3 class="page_heading"><?php echo $title;?></h3>

         <div class="row">

             <div class="col-lg-8">
                 <form method="post" action="<?php echo site_url('result/index/');?>">
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
         </div><!-- /.row -->



         <div class="row">

             <div class="col-md-12">
                 <br>
                 <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>
                 <?php 
		if($logged_in['su']=='1'){
			?>
                 <div class='alert alert-danger'><?php echo $this->lang->line('pending_message_admin');?></div>
                 <?php 
		}
		?><br><br>
                 <table class="table table-bordered">
                     <tr>
                         <th><?php echo $this->lang->line('result_id');?></th>
                         <th><?php echo $this->lang->line('full_name');?> <?php echo $this->lang->line('_name');?></th>
                         <th><?php echo $this->lang->line('quiz_name');?></th>
                         <th><?php echo $this->lang->line('status');?>
                             <select onChange="sort_result('<?php echo $limit;?>',this.value);">
                                 <option value="0"><?php echo $this->lang->line('all');?></option>
                                 <option value="<?php echo $this->lang->line('pass');?>"
                                     <?php if($status==$this->lang->line('pass')){ echo 'selected'; } ?>>
                                     <?php echo $this->lang->line('pass');?></option>
                                 <option value="<?php echo $this->lang->line('fail');?>"
                                     <?php if($status==$this->lang->line('fail')){ echo 'selected'; } ?>>
                                     <?php echo $this->lang->line('fail');?></option>
                                 <option value="<?php echo $this->lang->line('pending');?>"
                                     <?php if($status==$this->lang->line('pending')){ echo 'selected'; } ?>>
                                     <?php echo $this->lang->line('pending');?></option>
                             </select>
                         </th>
                         <th><?php echo $this->lang->line('percentage_obtained');?></th>

                         <?php if($logged_in['su']=='1'){	?>

                         <th><?php echo $this->lang->line('action');?> </th>

                         <?php }?>

                     </tr>

                     <?php if(count($result)==0){	?>

                     <tr>
                         <td colspan="6"><?php echo $this->lang->line('no_record_found');?></td>
                     </tr>


                     <?php }

foreach($result as $key => $val){
?>
                     <tr>
                         <td class='clickable-row'
                             data-href="<?php echo site_url('result/view_result/'.$val['rid']);?>">
                             <?php echo $val['rid'];?></td>
                         <td class='clickable-row'
                             data-href="<?php echo site_url('result/view_result/'.$val['rid']);?>">
                             <?php echo $val['full_name'];?></td>
                         <td class='clickable-row'
                             data-href="<?php echo site_url('result/view_result/'.$val['rid']);?>">
                             <?php echo $val['quiz_name'];?></td>
                         <td class='clickable-row'
                             data-href="<?php echo site_url('result/view_result/'.$val['rid']);?>">
                             <?php echo $val['result_status'];?></td>
                         <td class='clickable-row'
                             data-href="<?php echo site_url('result/view_result/'.$val['rid']);?>">

                             <?php $percen = $val['percentage_obtained'];?>
                             <div style="background:#eeeeee;width:100%;height:15px; border:.5px solid black">
                                 <div style="background:#449d44;width:<?php echo intval($percen);?>%;height:14px;">
                                 </div>
                                 <span style="font-size:15px;">

                                     <?php echo intval($percen);?>%
                         </td>
                         </span>


                         <td>

                             <?php if($logged_in['su']=='1'){	?>

                             <a href="javascript:remove_entry('result/remove_result/<?php echo $val['rid'];?>');"
                                 class="btn btn-danger btn-square">
                                 Delete <i class="fas fa-trash-alt"></i>
                             </a>
                             <?php }?>

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

     <a href="<?php echo site_url('result/index/'.$back.'/'.$status);?>" class="btn btn-primary"><i
             class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo $this->lang->line('back');?></a>
     &nbsp;&nbsp;
     <?php
 $next=$limit+($this->config->item('number_of_rows'));  ?>

     <a href="<?php echo site_url('result/index/'.$next.'/'.$status);?>"
         class="btn btn-primary"><?php echo $this->lang->line('next');?> <i class="fa fa-arrow-right"
             aria-hidden="true"></i></a>


     <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
if($logged_in['su']=='1'){
	?>
<a href="<?php echo site_url('result/remove_result/0/1');?>"  class="btn btn-primary"><?php echo $this->lang->line('cancel');?> <?php echo $this->lang->line('open');?></a>
<?php 
}
?> -->

 </div>