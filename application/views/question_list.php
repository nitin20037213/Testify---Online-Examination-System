 <div class="container" style="background:#fff!important;">

     <div class="card shadow p-4">
         <h3 class="page_heading"><?php echo $title;?></h3>
         <div class="row">



             <div class="row">

                 <div class="col-lg-8 pr-4">
                     <form method="post" action="<?php echo site_url('qbank/index/');?>">
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
                     <div class="add_button"><a href="<?php echo site_url('qbank/pre_new_question');?>"
                             class="btn btn-success btn-square mr-2">Add
                             Question <i class="fas fa-plus"></i></a></div>
                 </div>


             </div><!-- /.row -->


             <div class="row">

                 <div class="col-md-12">
                     <br>
                     <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>
                     <div class="form-group">
                         <form method="post"
                             action="<?php echo site_url('qbank/pre_question_list/'.$limit.'/'.$cid.'/'.$lid);?>">
                             <select name="cid" style="    height: 42px;">
                                 <option value="0"><?php echo $this->lang->line('all_category');?></option>
                                 <?php 
					foreach($category_list as $key => $val){
						?>

                                 <option value="<?php echo $val['cid'];?>"
                                     <?php if($val['cid']==$cid){ echo 'selected';} ?>>
                                     <?php echo $val['category_name'];?></option>
                                 <?php 
					}
					?>
                             </select>
                             <select name="lid" style="    height: 42px;">
                                 <option value="0"><?php echo $this->lang->line('all_level');?></option>
                                 <?php 
					foreach($level_list as $key => $val){
						?>

                                 <option value="<?php echo $val['lid'];?>"
                                     <?php if($val['lid']==$lid){ echo 'selected';} ?>>
                                     <?php echo $val['level_name'];?> </option>
                                 <?php 
					}
					?>
                             </select>
                             <button class="btn btn-primary"
                                 type="submit"><?php echo $this->lang->line('filter');?></button>
                         </form>
                     </div>



                     <br>
                     <table class="table table-bordered">
                         <tr>
                             <th class="text-xs-right text-dark text-center">Id</th>
                             <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('question');?>
                             </th>
                             <th class="text-xs-right text-dark text-center">
                                 <?php echo $this->lang->line('question_type');?>
                             </th>
                             <th class="text-xs-right text-dark text-center">
                                 <?php echo $this->lang->line('category_name');?> /
                                 <?php echo $this->lang->line('level_name');?></th>

                             <th class="text-xs-right text-dark text-center">
                                 <?php echo $this->lang->line('percent_corrected');?></th>
                             <th class="text-xs-right text-dark text-center"><?php echo $this->lang->line('action');?>
                             </th>
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
                             <td class='clickable-row'
                                 data-href="javascript:show_question_stat('<?php echo $val['qid'];?>');">
                                 <?php echo $val['qid'];?></td>
                             <td class='clickable-row'
                                 data-href="javascript:show_question_stat('<?php echo $val['qid'];?>');">
                                 <?php echo substr(strip_tags($val['question']),0,40);?>


                                 <span style="display:none;" id="stat-<?php echo $val['qid'];?>">


                                     <table class="table table-bordered inner-table">
                                         <tr>
                                             <td><?php echo $this->lang->line('no_times_corrected');?></td>
                                             <td><?php echo $val['no_time_corrected'];?></td>
                                         </tr>
                                         <tr>
                                             <td><?php echo $this->lang->line('no_times_incorrected');?></td>
                                             <td><?php echo $val['no_time_incorrected'];?></td>
                                         </tr>
                                         <tr>
                                             <td><?php echo $this->lang->line('no_times_unattempted');?></td>
                                             <td><?php echo $val['no_time_unattempted'];?></td>
                                         </tr>
                                     </table>




                                 </span>



                             </td>
                             <td class='clickable-row'
                                 data-href="javascript:show_question_stat('<?php echo $val['qid'];?>');">
                                 <?php echo $val['question_type'];?></td>
                             <td class='clickable-row'
                                 data-href="javascript:show_question_stat('<?php echo $val['qid'];?>');">
                                 <?php echo $val['category_name'];?> / <span
                                     style="font-size:12px;"><?php echo $val['level_name'];?></span></td>

                             <td class='clickable-row'
                                 data-href="javascript:show_question_stat('<?php echo $val['qid'];?>');"><?php if($val['no_time_served']!='0'){ $perc=($val['no_time_corrected']/$val['no_time_served'])*100; 
?>

                                 <div style="background:#eeeeee;width:100%;height:15px; border:.5px solid black">
                                     <div style="background:#449d44;width:<?php echo intval($perc);?>%;height:14px;">
                                     </div>
                                     <span style="font-size:15px;"><?php echo intval($perc);?>%</span>

                                     <?php
}else{ echo $this->lang->line('not_used');} ?>
                             </td>

                             <td>
                                 <?php 
$qn=1;
if($val['question_type']==$this->lang->line('multiple_choice_single_answer')){
	$qn=1;
}
if($val['question_type']==$this->lang->line('multiple_choice_multiple_answer')){
	$qn=2;
}
if($val['question_type']==$this->lang->line('match_the_column')){
	$qn=3;
}
if($val['question_type']==$this->lang->line('short_answer')){
	$qn=4;
}
if($val['question_type']==$this->lang->line('long_answer')){
	$qn=5;
}


?>


                                 <a href="<?php echo site_url('qbank/edit_question_'.$qn.'/'.$val['qid']);?>"
                                     class="btn btn-warning btn-square mr-2">
                                     Edit <i class="fas fa-user-edit"></i> </a>

                                 <a href="javascript:remove_entry('qbank/remove_question/<?php echo $val['qid'];?>');"
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
         <br>
         <div class="col-lg-8 text-left">
             <?php
if(($limit-($this->config->item('number_of_rows')))>=0){ $back=$limit-($this->config->item('number_of_rows')); }else{ $back='0'; } ?>

             <a href="<?php echo site_url('qbank/index/'.$back.'/'.$cid.'/'.$lid);?>" class="btn btn-primary"><i
                     class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo $this->lang->line('back');?></a>
             &nbsp;&nbsp;
             <?php
 $next=$limit+($this->config->item('number_of_rows'));  ?>

             <a href="<?php echo site_url('qbank/index/'.$next.'/'.$cid.'/'.$lid);?>"
                 class="btn btn-primary"><?php echo $this->lang->line('next');?> <i class="fa fa-arrow-right"
                     aria-hidden="true"></i></a>

         </div>

     </div>


     <div class="row"><br>
         <br>
     </div>


     <div class="row">
         <div class="col-md-6">
             <div class="card shadow p-4">
                 <div class="row"><br></div>
                 <div class="card-heading ">
                     <h1><?php echo $this->lang->line('import_question');?></h1>
                 </div>
                 <div class="row"><br></div>
                 <div class="card-body">

                     <a href="<?php echo base_url();?>sample/sample.xls" style="text-decoration:none;"
                         target="new">*Click
                         here</a>
                     <?php echo $this->lang->line('upload_excel_info');?>
                     <div class="row"><br></div>

                     <?php echo form_open('qbank/import',array('enctype'=>'multipart/form-data')); ?>

                     <select name="cid" required>
                         <option value=""><?php echo $this->lang->line('select_category');?></option>
                         <?php 
					foreach($category_list as $key => $val){
						?>

                         <option value="<?php echo $val['cid'];?>" <?php if($val['cid']==$cid){ echo 'selected';} ?>>
                             <?php echo $val['category_name'];?></option>
                         <?php 
					}
					?>
                     </select>
                     <div class="row"><br></div>
                     <select name="did" required>
                         <option value=""><?php echo $this->lang->line('select_level');?></option>
                         <?php 
					foreach($level_list as $key => $val){
						?>

                         <option value="<?php echo $val['lid'];?>" <?php if($val['lid']==$lid){ echo 'selected';} ?>>
                             <?php echo $val['level_name'];?></option>
                         <?php 
					}
					?>
                     </select>
                     <div class="row"><br></div>
                     <?php echo $this->lang->line('upload_excel');?><div class="row"><br></div>
                     <input type="hidden" name="size" value="3500000">
                     <input type="file" name="xlsfile" style="width:100%;float:left;margin-left:10px;">
                     <div class="row"><br></div>

                     <input type="submit" value="Import" class="btn btn-primary">


                     </form>

                 </div>
             </div>
         </div>





         <div class="col-lg-6">

             <div class="card shadow">
                 <div class="row"><br></div>
                 <div class="card-heading p-4">
                     <h1><?php echo $this->lang->line('import_question2');?></h1>
                 </div>
                 <div class="row"><br></div>
                 <div class="card-body">


                     <a href="<?php echo base_url();?>sample/sample.docx" style="text-decoration:none;"
                         target="new">*Click
                         here</a>
                     <?php echo $this->lang->line('upload_doc_info');?>
                     <div class="row"><br></div>
                     <?php echo form_open('word_import',array('enctype'=>'multipart/form-data')); ?>

                     <div class="alert alert-warning"> <?php echo $this->lang->line('wordimportinfo');?></div>

                     <select name="cid" required>
                         <option value=""><?php echo $this->lang->line('select_category');?></option>
                         <?php 
					foreach($category_list as $key => $val){
						?>

                         <option value="<?php echo $val['cid'];?>" <?php if($val['cid']==$cid){ echo 'selected';} ?>>
                             <?php echo $val['category_name'];?></option>
                         <?php 
					}
					?>
                     </select>
                     <div class="row"><br></div>
                     <select name="lid" required>
                         <option value=""><?php echo $this->lang->line('select_level');?></option>
                         <?php 
					foreach($level_list as $key => $val){
						?>

                         <option value="<?php echo $val['lid'];?>" <?php if($val['lid']==$lid){ echo 'selected';} ?>>
                             <?php echo $val['level_name'];?></option>
                         <?php 
					}
					?>
                     </select>
                     <div class="row"><br></div>
                     <?php echo $this->lang->line('upload_doc');?><div class="row"><br></div>
                     <input type="hidden" name="size" value="3500000">
                     <input type="file" name="word_file" style="width:100%;float:left;margin-left:10px;">
                     <div class="row"><br><br></div>
                     <p style="padding:10px;"><a href="javascript:advanceconfig();"
                             style="text-decoration:none;"><?php echo $this->lang->line('advance_options');?></a>
                     </p>
                     <div id="advanceconfig" style="padding:10px;display:none">
                         <table>
                             <tr>
                                 <td>Question Splitter:</td>
                                 <td> <input type="text" name="question_split" value="/Q:[0-9]+\)/"></td>
                             </tr>
                             <tr>
                                 <td>Paragraph Splitter:</td>
                                 <td> <input type="text" name="paragraph_split" value="Paragraph:"></td>
                             </tr>
                             <tr>
                                 <td>Description Splitter: </td>
                                 <td><input type="text" name="description_split" value="/Sol:/"></td>
                             </tr>
                             <tr>
                                 <td>Options Splitter: </td>
                                 <td><input type="text" name="option_split" value="/[A-Z]:\)/"></td>
                             </tr>
                             <tr>
                                 <td>Correct Option Splitter: </td>
                                 <td><input type="text" name="correct_split" value="/Correct:/"></td>
                             </tr>
                         </table>
                     </div>

                     <input type="submit" value="Import" class="btn btn-primary">


                     </form>

                 </div>
             </div>
         </div>
     </div>


     <script>
     function advanceconfig() {

         $('#advanceconfig').toggle();

     }
     </script>

     <style>
     .table td,
     .table th {
         padding: 10px 0 10px 0;
         vertical-align: top;
         border-top: 1px solid #e3e6f0;
     }

     .inner-table:hover {
         font-weight: 200px
     }
     </style>
 </div>