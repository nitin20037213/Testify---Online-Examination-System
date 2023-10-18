 <div class="container" style="background:#fff!important;">
     <?php
$lang=$this->config->item('question_lang');
?>

     <h3 class="page_heading">Edit Question</h3>



     <div class="row">

         <form method="post" action="<?php echo site_url('qbank/edit_question_1/'.$question['qid']);?>">

             <div class="col-md-8 shadow py-4">
                 <br>

                 <div class="login-panel panel panel-default">
                     <div class="panel-body">



                         <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>



                         <div class="form-group">

                             <?php echo $this->lang->line('multiple_choice_single_answer');?>
                         </div>


                         <div class="form-group">
                             <label><?php echo $this->lang->line('select_category');?></label>
                             <select class="form-control" name="cid">
                                 <?php 
					foreach($category_list as $key => $val){
						?>

                                 <option value="<?php echo $val['cid'];?>"
                                     <?php if($question['cid']==$val['cid']){ echo 'selected'; } ?>>
                                     <?php echo $val['category_name'];?></option>
                                 <?php 
					}
					?>
                             </select>
                         </div>


                         <div class="form-group">
                             <label><?php echo $this->lang->line('select_level');?></label>
                             <select class="form-control" name="lid">
                                 <?php 
					foreach($level_list as $key => $val){
						?>

                                 <option value="<?php echo $val['lid'];?>"
                                     <?php if($question['lid']==$val['lid']){ echo 'selected'; } ?>>
                                     <?php echo $val['level_name'];?></option>
                                 <?php 
					}
					?>
                             </select>
                         </div>
                     </div>
                 </div>
             </div>
             <br> <br>

             <?php 
if(strip_tags($question['paragraph'])!=""){
foreach($lang as $lkey =>$val){	
$lno=$lkey;
if($lkey==0){
	$lno="";
}
?>
             <div class="col-lg-6 shadow py-4">
                 <div class="form-group">
                     <label for="inputEmail"><?php echo $this->lang->line('paragraph').' : '.$val;?></label>
                     <textarea name="paragraph<?php echo $lno;?>"
                         class="form-control"><?php echo $question['paragraph'.$lno];?></textarea>
                 </div>


             </div>

             <?php
}
} 
?>

             <?php 
 
foreach($lang as $lkey =>$val){	
$lno=$lkey;
if($lkey==0){
	$lno="";
}
?>

             <div class="row">
                 <br> <br>
             </div>
             <h3 class="page_heading">Question</h3>

             <div class="row shadow py-4">
                 <div class="col-lg-6">

                     <div class="form-group">
                         <label for="inputEmail"><?php echo $this->lang->line('question').' : '.$val;?></label>
                         <textarea name="question<?php echo $lno;?>"
                             class="form-control"><?php echo $question['question'.$lno];?></textarea>
                     </div>
                 </div>
                 <?php 
}
foreach($lang as $lkey =>$val){	
$lno=$lkey;
if($lkey==0){
	$lno="";
}
?> <div class="col-lg-6">


                     <div class="form-group">
                         <label for="inputEmail"><?php echo $this->lang->line('description').' : '.$val;?></label>
                         <textarea name="description<?php echo $lno;?>"
                             class="form-control"><?php echo $question['description'.$lno];?></textarea>
                     </div>
                 </div>
             </div>

     </div>
     <div class="row"><br><br></div>
     <?php 
}
?>
     <h3 class="page_heading">Options</h3>

     <div class="row shadow py-4">
         <div class="row">
             <?php 
		foreach($options as $key => $val){
		
			?>

             <?php 
 
foreach($lang as $lkey =>$la){	
$lno=$lkey;
if($lkey==0){
	$lno="";
}
?><br><br>
             <div class="col-lg-6">

                 <div class="form-group">
                     <label for="inputEmail"><?php echo $this->lang->line('options');?>
                         <?php echo ($key+1);?>) <?php echo ' : '.$la;?></label> <br>
                     <?php 
					if($lkey==0){ 
					?><input type="radio" name="score" value="<?php echo $key;?>" <?php if($val['score']==1){ echo 'checked'; } ?>>
                     Select Correct Option
                     <?php } ?><br>
                     <textarea name="option<?php echo $lno;?>[]"
                         class="form-control"><?php echo $val['q_option'.$lno];?></textarea>
                 </div>
                 <br>
             </div>
             <?php
}	
?>

             <?php 
		}
		?>

             <div class="col-md-6">
                 <button class="btn btn-primary" type="submit"><?php echo $this->lang->line('submit');?></button>
             </div>
             </form>

         </div>

         <div class="row"><br><br></div>






         <div class="row">
             <div class="card mb-3">

                 <div class="card-header py-2 text-center">Question History
                 </div>
                 <div class="card-body">

                     <div class="form-group">
                         <table class="table table-bordered">
                             <thead class="thead-dark">
                                 <tr>
                                     <th scope="col"><?php echo $this->lang->line('no_times_corrected');?></th>
                                     <th scope="col"><?php echo $this->lang->line('no_times_incorrected');?></th>
                                     <th scope="col"><?php echo $this->lang->line('no_times_unattempted');?></th>

                                 </tr>
                             </thead>
                             <div class="tbody">
                                 <tr>
                                     <td><?php echo $question['no_time_corrected'];?></td>

                                     <td><?php echo $question['no_time_incorrected'];?></td>

                                     <td><?php echo $question['no_time_unattempted'];?></td>
                                 </tr>
                             </div>
                         </table>

                     </div>
                 </div>
             </div>

         </div>