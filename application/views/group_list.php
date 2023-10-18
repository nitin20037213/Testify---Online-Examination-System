 <div class="container" style="background:#fff!important;">


     <h3 class="page_heading"><?php echo $title;?></h3>


     <div class="row">

         <div class="col-md-8 pr-4">
             <br>
             <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>
         </div>
         <div class="col-lg-4 pl-4">
             <div class="add_button"> <a href="<?php echo site_url('user/add_new_group');?>" class="btn btn-success">Add
                     New<i class="fas fa-plus"></i></a></div>
         </div>

         <br><br><br>
         <div class="row">
             <table class="table table-bordered">
                 <tr>
                     <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('group_name');?></th>
                     <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('price'); ?></th>
                     <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('valid_for_days');?>
                     </th>
                     <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('action');?> </th>
                 </tr>
                 <?php 
if(count($group_list)==0){
	?>
                 <tr>
                     <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
                 </tr>


                 <?php
}

foreach($group_list as $key => $val){
?>
                 <tr>
                     <td class='clickable-row' data-href="<?php echo site_url('user/edit_group/'.$val['gid']);?>"
                         class="text-center"> <?php echo $val['group_name'];?></td>

                     <td class='clickable-row' data-href="<?php echo site_url('user/edit_group/'.$val['gid']);?>"
                         class="text-center">
                         <?php echo $this->config->item('base_currency_prefix');?> <?php echo $val['price'];?>
                         <?php echo $this->config->item('base_currency_sufix');?> </td>

                     <td class='clickable-row' data-href="<?php echo site_url('user/edit_group/'.$val['gid']);?>"
                         class="text-center"><?php echo $val['valid_for_days'];?></td>

                     <td>
                         <a href="<?php echo site_url('user/pre_remove_group/'.$val['gid']);?>"
                             class="btn btn-danger btn-square">
                             Delete <i class="fas fa-trash-alt"></i>
                         </a>


                     </td>
                 </tr>

                 <?php 
}
?>

             </table>


         </div>

     </div>

 </div>