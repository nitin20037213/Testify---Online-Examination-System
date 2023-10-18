 <div class="container" style="background:#fff!important;">
     <?php 
$logged_in=$this->session->userdata('logged_in');
		$uid=$logged_in['uid'];	 
			
			?>
     <div class="card shadow p-4">
         <h3 class="page_heading"><?php echo $title;?></h3>
         <?php 
	$list_view="table";
	     $acp=explode(',',$logged_in['quiz']);
			if(in_array('List_all',$acp)){
		?>
         <div class="row">

             <div class="col-lg-8 pr-4">
                 <form method="post" action="<?php echo site_url('quiz/index/0/'.$list_view);?>">
                     <div class="input-group">
                         <input type="text" class="form-control" name="search"
                             placeholder="<?php echo $this->lang->line('search');?>...">
                         <span class="input-group-btn">
                             <button class="btn btn-danger"
                                 type="submit"><?php echo $this->lang->line('search');?></button>
                         </span>


                     </div><!-- /input-group -->
                 </form>
             </div><!-- /.col-lg-6 -->


             <div class="col-lg-4 pl-4">
                 <?php $acp=explode(',',$logged_in['quiz']);
                     	if(in_array('List_all',$acp)){	?>
                 <div class="add_button"><a href="<?php echo site_url('quiz/add_new');?>"
                         class="btn btn-success btn-square mr-2"><?php echo $this->lang->line('add_new');?> <i
                             class="fas fa-plus"></i></a></div>
                 <?php }?>
             </div>

         </div><!-- /.row -->

         <?php 
	}
?><br><br>
         <div class="row">

             <div class="col-md-3">
                 <ul class="price">
                     <a style="text-decoration: none;" href="<?php echo site_url('quiz/index/'.$limit.'/table/all');?>">
                         <li class="header" style="background:#00c283; ">
                             Total Quiz <i class="fa fa-question" aria-hidden="true"></i>
                         </li>

                         <b>
                             <li class="header" style="background-color:#00c283">
                                 <h1><?php echo $active+$archived+$upcoming;?>
                         </b>
                         </h1>
                         </li>

                     </a>

                 </ul>
             </div>



             <div class="col-md-3">
                 <ul class="price">
                     <a style="text-decoration: none;"
                         href="<?php echo site_url('quiz/index/'.$limit.'/table/active');?>">
                         <li class="header bg-info" style="<?php if($stat=='active'){ echo 'background:#ffc300;';}?> ">
                             <?php echo $this->lang->line('active');?>
                             <?php echo $this->lang->line('quiz');?> <i class="fa fa-clock" aria-hidden="true"></i>
                         </li>

                         <b>
                             <li class="header bg-info" style="background-color:#FFC300">
                                 <h1><?php echo $active;?>
                         </b>
                         </h1>
                         </li>

                     </a>

                 </ul>
             </div>

             <div class="col-md-3">
                 <ul class="price">
                     <a style="text-decoration: none;"
                         href="<?php echo site_url('quiz/index/'.$limit.'/table/upcoming');?>">
                         <li class="header bg-warning"
                             style="<?php if($stat=='upcoming'){ echo 'background:#FFC300;';}?> ">
                             <?php echo $this->lang->line('upcoming');?>
                             <?php echo $this->lang->line('quiz');?> <i class="fa fa-calendar" aria-hidden="true"></i>
                         </li>
                         <b>
                             <li class="header bg-warning" style="background-color:#FFC300">
                                 <h1><?php echo $upcoming;?>
                         </b>
                         </h1>

                         </li>

                     </a>
                 </ul>
             </div>

             <div class="col-md-3">
                 <ul class="price">
                     <a style="text-decoration: none;"
                         href="<?php echo site_url('quiz/index/'.$limit.'/table/archived');?>">
                         <li class="header bg-danger"
                             style="<?php if($stat=='archived'){ echo 'background:#FFC300;';}?> ">
                             <?php echo $this->lang->line('archived');?>
                             <?php echo $this->lang->line('quiz');?> <i class="fa fa-ban" aria-hidden="true"></i>
                         </li>
                         <b>
                             <li class="header bg-danger" style="background-color:#FFC300">
                                 <h1><?php echo $archived;?>
                         </b>
                         </h1>

                         </li>

                     </a>
                 </ul>
             </div>
         </div>
         <br><br>
         <div class="row">

             <div class="col-md-12">
                 <br>
                 <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>

                 <table class="table table-bordered">
                     <tr>
                         <th>#</th>
                         <th><?php echo $this->lang->line('quiz_name');?></th>
                         <th><?php echo $this->lang->line('noq');?></th>
                         <th><?php echo $this->lang->line('action');?> </th>
                         <th> Attempt </th>
                     </tr>
                     <?php 
if(count($result)==0){
	?>
                     <tr>
                         <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
                     </tr>


                     <?php
}
foreach($result as $key => $val){
?>
                     <tr>
                         <td><?php echo $val['quid'];?></td>
                         <td><?php echo substr(strip_tags($val['quiz_name']),0,50);?></td>
                         <td><?php echo $val['noq'];?></td>

                         <td>
                             <?php $acp=explode(',',$logged_in['quiz']);		
			                          if(in_array('List_all',$acp)){?>



                             <a href="<?php echo site_url('quiz/edit_quiz/'.$val['quid']);?>"
                                 class="btn btn-warning btn-square mr-2">
                                 Edit <i class="fas fa-user-edit"></i> </a>

                             <a href="javascript:remove_entry('quiz/remove_quiz/<?php echo $val['quid'];?>');"
                                 class="btn btn-danger btn-square">
                                 Delete <i class="fas fa-trash-alt"></i>
                             </a>
                             <?php }?>
                         </td>
                         <td>
                             <?php 
 if($val['quiz_price'] == 0 || in_array($val['quid'],$purchased_quiz)){
if($val['start_date'] > time()){	 ?>

                             <a class="btn btn-default"
                                 style="color:#FFC300;"><?php echo $this->lang->line('upcoming');?> </a>


                             <?php
}
else if($val['end_date'] < time()){	 ?>

                             <a class="btn btn-default"
                                 style="color:red;"><?php echo $this->lang->line('expired');?></a>

                             <?php
}
else if($val['end_date'] >= time()){	 ?>

                             <a href="<?php echo site_url('quiz/quiz_detail/'.$val['quid']);?>"
                                 class="btn btn-info"><?php echo $this->lang->line('attempt');?> </a>

                             <?php
}
 
 }else{
 ?>
                             <a href="<?php echo site_url('payment_gateway_2/subscribe/0/'.$uid.'/'.$val['quid']);?>"
                                 class="btn btn-primary"><?php echo $this->config->item('base_currency_prefix').' '.$val['quiz_price'].' '.$this->config->item('base_currency_sufix')." ".$this->lang->line('paynow');?>
                             </a>


                             <?php 
 }
 ?>

                         </td>
                     </tr>

                     <?php 
}
?>
                 </table>



             </div>
         </div>
     </div>
     <br><br>

     <?php
if(($limit-($this->config->item('number_of_rows')))>=0){ $back=$limit-($this->config->item('number_of_rows')); }else{ $back='0'; } ?>

     <a href="<?php echo site_url('quiz/index/'.$back.'/'.$list_view);?>" class="btn btn-primary"><i
             class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo $this->lang->line('back');?></a>
     &nbsp;&nbsp;
     <?php
 $next=$limit+($this->config->item('number_of_rows'));  ?>

     <a href="<?php echo site_url('quiz/index/'.$next.'/'.$list_view);?>"
         class="btn btn-primary"><?php echo $this->lang->line('next');?> <i class="fa fa-arrow-right"
             aria-hidden="true"></i></a>





 </div>