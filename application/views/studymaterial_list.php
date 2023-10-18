 <div class="container" style="background:#fff!important;">
     <?php 
 $logged_in=$this->session->userdata('logged_in');
		
		?>
     <div class="card shadow p-4">

         <h3 class="page_heading"><?php echo $title;?></h3>
         <div class="row">

             <div class="col-lg-8  pr-4">
                 <form method="post" action="<?php echo site_url('study_material/index/');?>">
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
                 <?php $acp=explode(',',$logged_in['quiz']);
                     	if(in_array('List_all',$acp)){	?>
                 <div class="add_button"><a href="<?php echo site_url('study_material/add_new');?>"
                         class="btn btn-success btn-square mr-2"><?php echo $this->lang->line('add_new');?> <i
                             class="fas fa-plus"></i></a></div>
                 <?php }?>
             </div>

         </div><!-- /.row -->


         <div class="row">

             <div class="col-md-12">
                 <br>
                 <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		       $acp=explode(',',$logged_in['study_material']);
			if(in_array('Add',$acp)){
			 
		?>


                 <?php 
 }
 ?>
                 <table class="table table-bordered">
                     <tr>

                         <th><?php echo $this->lang->line('title');?></th>

                         <th><?php echo $this->lang->line('category_name');?></th>
                         <?php //if($logged_in['su']=='1'){ ?>
                         <th><?php echo $this->lang->line('action');?> </th>
                         <?php // } ?>

                     </tr>
                     <?php 
if(count($result)==0){
	?>
                     <tr>
                         <td colspan="6"><?php echo $this->lang->line('no_record_found');?></td>
                     </tr>


                     <?php
}
foreach($result as $key => $val){
?>
                     <tr>

                         <td><?php echo $val['title'];?></td>

                         <td><?php echo $val['category_name'];?></td>

                         <td>
                             <?php 
$acp=explode(',',$logged_in['study_material']);
if(in_array('Edit',$acp)){
?>
                             <a
                                 href="<?php echo site_url('study_material/edit_studymaterial/'.$val['stid']);?>"><?php echo $this->lang->line('edit');?></a>
                             <?php } ?>
                             <?php 
$acp=explode(',',$logged_in['study_material']);
if(in_array('View',$acp)){
?>

                             <a
                                 href="<?php echo site_url('study_material/view_studymaterial/'.$val['stid']);?>"><?php echo $this->lang->line('view');?></a>
                             <?php } ?>
                             <?php 
$acp=explode(',',$logged_in['study_material']);
if(in_array('Remove',$acp)){
?>

                             <a
                                 href="<?php echo site_url('study_material/remove_studymaterial/'.$val['stid']);?>"><?php echo $this->lang->line('remove');?></a>
                             <?php } ?>
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

     <a href="<?php echo site_url('study_material/index/'.$back);?>" class="btn btn-primary"><i class="fa fa-arrow-left"
             aria-hidden="true"></i> <?php echo $this->lang->line('back');?></a>
     &nbsp;&nbsp;
     <?php
 $next=$limit+($this->config->item('number_of_rows'));  ?>

     <a href="<?php echo site_url('study_material/index/'.$next);?>"
         class="btn btn-primary"><?php echo $this->lang->line('next');?> <i class="fa fa-arrow-right"
             aria-hidden="true"></i></a>





 </div>