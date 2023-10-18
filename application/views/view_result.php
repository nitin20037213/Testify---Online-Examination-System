<script src="<?php echo base_url('js/TweenMax.minjs');?>"></script>
<style>
@media print {

    .navbar {
        display: none;
    }

    #footer {
        display: none;
    }

    .printbtn {
        display: none;
    }

    #social_share {
        display: none;
    }

    #page_break2 {

        page-break-after: always;
    }

    .noprint {

        display: none;
    }
}

@media screen {
    .onlyprint {
        display: none;

    }
}

td {
    color: #212121;
    font-size: 14px;
    padding: 4px;
    font-weight: 400;
}





.circle_result {

    width: 40px;
    height: 40px;
    border-radius: 20px;
    background: #0b8d6f;
    color: #ffffff;
    padding: 5px;
    font-size: 16px;
    text-align: center;
    margin-right: 20px;
    float: left;
}


.circle_ur {

    width: 40px;
    height: 40px;
    border-radius: 20px;
    background: #ffcc66;
    color: #ffffff;
    padding: 5px;
    font-size: 16px;
    text-align: center;
    margin-right: 20px;
    float: left;
}


.circle_l {

    width: 40px;
    height: 40px;
    border-radius: 20px;
    background: #ff3300;
    color: #ffffff;
    padding: 5px;
    font-size: 16px;
    text-align: center;
    margin-right: 20px;
    float: right;
}

.td_line {
    background: url('<?php echo base_url('images/rankbar.png');?>');
    background-repeat: repeat-x;
}
</style>
<div class="container" style="background:#fff!important;">
    <?php 
$logged_in=$this->session->userdata('logged_in');
?>



    <?php 

function ordinal($number) {
    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
    if ((($number % 100) >= 11) && (($number%100) <= 13))
        return $number. 'th';
    else
        return $number. $ends[$number % 10];
}

function questioninwhichcategory($key,$c_range){
	foreach($c_range as $k => $cv){
		
		if($key >= $cv[0] && $key <= $cv[1]){
			return $k;
		}
	}
	
}




function cia_cat($narray,$c_range){
	$unattempted=array();
	$correct=array();
	$incorrect=array();
	foreach($narray as $k => $val){
		
	if($val==0){
		if(isset($unattempted[questioninwhichcategory($k,$c_range)])){
		$unattempted[questioninwhichcategory($k,$c_range)]+=1;
		}else{
		$unattempted[questioninwhichcategory($k,$c_range)]=1;	
		}
	}else if($val==1){
// $correct+=1;
		if(isset($correct[questioninwhichcategory($k,$c_range)])){
		$correct[questioninwhichcategory($k,$c_range)]+=1;
		}else{
		$correct[questioninwhichcategory($k,$c_range)]=1;	
		}
	}else if($val==2){
// $incorrect+=1;
		if(isset($incorrect[questioninwhichcategory($k,$c_range)])){
		$incorrect[questioninwhichcategory($k,$c_range)]+=1;
		}else{
		$incorrect[questioninwhichcategory($k,$c_range)]=1;	
		}
	}	
	 
		 
	 
	}
	
	return array($correct,$incorrect,$unattempted);
}





function cia_tim_cate($narray,$tim,$c_range){
	$unattempted=array();
	$correct=array();
	$incorrect=array();
	foreach($narray as $k => $val){
	
	if($val==0){
		if(isset($unattempted[questioninwhichcategory($k,$c_range)])){
		$unattempted[questioninwhichcategory($k,$c_range)]+=$tim[$k];
		}else{
		$unattempted[questioninwhichcategory($k,$c_range)]=$tim[$k];	
		}
	}else if($val==1){
// $correct+=1;
		if(isset($correct[questioninwhichcategory($k,$c_range)])){
		$correct[questioninwhichcategory($k,$c_range)]+=$tim[$k];
		}else{
		$correct[questioninwhichcategory($k,$c_range)]=$tim[$k];	
		}
	}else if($val==2){
// $incorrect+=1;
		if(isset($incorrect[questioninwhichcategory($k,$c_range)])){
		$incorrect[questioninwhichcategory($k,$c_range)]+=$tim[$k];
		}else{
		$incorrect[questioninwhichcategory($k,$c_range)]=$tim[$k];	
		}
	}	
	
	}
		
	return array($correct,$incorrect,$unattempted);
}

function prezero($val){
	if($val <= 9){
	return '0'.$val;	
	}else{
		return $val;
	}
}
function secintomin($sec){
	if($sec >= 60){
	$splitin=explode('.',($sec/60));
	if(isset($splitin[1])){
		$secs=substr(intval((substr($splitin[1],0,2)*60)/100),0,2);
	}else{
		$secs=0;
	}
	return $splitin[0].':'.prezero($secs);
	}else{
	return '0:'.prezero($sec);	
	}
}


function per_nonzero($arr){
	
$totallen=count($arr);
$filt=array_filter($arr);
$per=(count($filt)/$totallen)*100;
return intval($per);	
}

$c_range=array();
$j=0;
$i=0;
foreach(explode(",",$result['category_range']) as $ck => $cv){
	$c_range[]=array($i,($i+($cv-1)));
	$i+=$cv;
}
$correct_incorrect_unattempted=explode(",",$result['score_individual']);
 
$cia_cat=cia_cat($correct_incorrect_unattempted,$c_range);
 
$cia_tim_cate=cia_tim_cate($correct_incorrect_unattempted,explode(",",$result['individual_time']),$c_range);



?>
    <div id="analysis">
        <div class="row noprint">
            <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>
            <div class="col-lg-12">

                <h3 class="page_heading" style="color:black">Your Performance report for " <span
                        style="color:#4e73df"><?php echo $result['quiz_name'];?></span> "</h3>

                <div class="col-lg-12">
                    <?php if($result['view_answer']=='1' || $logged_in['su']=='1'){?>

                    <div class="add_button text-right"><a href="#" onClick="showAnswer()"
                            class="btn btn-success btn-square mr-2"><i class="fas fa-file"></i>
                            <?php echo $this->lang->line('answer_sheet');?></a></div>

                    <?php }?>
                </div>
            </div>

            <div class="row"><br></div>

            <div class="col-lg-12" style="text-align:right;">
                <p>Attempted on <b
                        style="color:#e39500;font-size:14px;"><?php echo date('Y-m-d H:i:s',$result['start_time']);?></b>
                </p>


            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="card border-left-primary shadow  py-2">
                        <div class="card-body shadow ">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1 " style="color: #0e52c1;">
                                        <?php echo $this->lang->line('score_obtained');?>
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo $result['score_obtained'];?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard fa-2x "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card border-left-success shadow  py-2">
                        <div class="card-body shadow ">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #00c283;">
                                        <?php echo $this->lang->line('time_spent');?>
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo secintomin($result['total_time']);?> min</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clock  fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-left-warning shadow  py-2">
                        <div class="card-body shadow ">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color: #efbe26;">

                                        <?php echo $this->lang->line('percentage_obtained');?>
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo $result['percentage_obtained'];?>%</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-percent fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-3">
                    <div class="card border-left-info shadow  py-2">
                        <div class="card-body shadow ">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:#00b5c8;">

                                        <?php echo $this->lang->line('percentile_obtained');?>

                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo substr(((($percentile[1]+1)/$percentile[0])*100),0,5);?>%
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-red-100"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row"><br></div>



                <div class="col-md-3">
                    <div class="card border-left-danger shadow  py-2">
                        <div class="card-body shadow ">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#e23e25;">

                                        <?php echo $this->lang->line('status');?>

                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php echo $result['result_status'];?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-crown  fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-md-3">
                    <div class="card shadow  py-2" style="border-left:4px solid #6f42c1;">
                        <div class="card-body shadow ">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#6f42c1;">
                                        Total Attempts

                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo ordinal($attempt);?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-pen fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>

            <div class="row"><br><br><br><br></div>


            <div class="col-md-12">
                <div class="card  shadow mb-3">

                    <div class="card-header py-2 text-center">Basic Details
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><?php echo $this->lang->line('result_id');?> </th>
                                        <th scope="col">User ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col"><?php echo $this->lang->line('email');?></th>

                                    </tr>
                                </thead>
                                <div class="tbody">
                                    <tr>
                                        <td><?php echo $result['rid'];?></td>
                                        <td><?php echo $result['uid'];?></td>
                                        <td><?php echo $result['full_name'];?></td>
                                        <td><?php echo $result['email'];?></td>
                                    </tr>
                                </div>
                            </table>

                        </div>
                    </div>
                </div>

            </div>








            <?php 
 // print_r($result['incorrect_score']);
 $ind_score=explode(',',$result['score_individual']); 
 ?>
            <div class="col-md-12">
                <div class="card  shadow mb-3">

                    <div class="card-header py-2 text-center"><?php echo $this->lang->line('categorywise');?>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="background:#337ab7;color:#ffffff;">
                                            <?php echo $this->lang->line('category_name');?></th>
                                        <th style="background:#337ab7;color:#ffffff;">
                                            <?php echo $this->lang->line('score_obtained');?></th>
                                        <th style="background:#337ab7;color:#ffffff;">
                                            <?php echo $this->lang->line('time_spent');?></th>
                                        <th style="background:#337ab7;color:#ffffff;">
                                            <?php echo $this->lang->line('correct');?>
                                        </th>
                                        <th style="background:#337ab7;color:#ffffff;">
                                            <?php echo $this->lang->line('incorrect');?></th>
                                        <th style="background:#337ab7;color:#ffffff;">
                                            <?php echo $this->lang->line('notattempted');?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
					  $c=0;
					  $correct=0;
					 $incorrect=0;
					 $notattempted=0;
					  $rca=explode(',',$result['correct_score']);
					  $rica=explode(',',$result['incorrect_score']);
					  foreach(explode(',',$result['categories']) as $vk => $category){ 
					 $cate_sco=0;
					 if(isset($cia_cat[0][$vk])){ $no_C=$cia_cat[0][$vk]; $correct+=$cia_cat[0][$vk]; }else{ $no_C=0; } 
					  if(isset($cia_cat[1][$vk])){ $no_iC=$cia_cat[1][$vk]; $incorrect+=$cia_cat[1][$vk]; }else{ $no_iC=0;  }
					  for($qii=$category_ranges[$vk][0]; $qii <= $category_ranges[$vk][1]; $qii++){
					  
					  if($ind_score[$qii]==1){
					   $cate_sco+=$rca[$qii];
					  }else if($ind_score[$qii]==2){
					    $cate_sco+=$rica[$qii];
					  }
					   }  
					  
					  
					  
						?>
                                    <tr>
                                        <td>
                                            <?php echo $category; ?>
                                        </td>

                                        <td><?php     echo $cate_sco; ?></td>
                                        <td><?php echo secintomin($cia_tim_cate[0][$vk]+$cia_tim_cate[1][$vk]+$cia_tim_cate[2][$vk]);?>
                                            min</td>
                                        <td><?php echo $no_C;?></td>
                                        <td><?php echo $no_iC;  ?></td>
                                        <td><?php   if(isset($cia_cat[2][$vk])){ echo $cia_cat[2][$vk]; $notattempted+=$cia_cat[2][$vk]; }else{ echo '0';  } ?>
                                        </td>

                                    </tr>
                                    <?php 
					  }
					  ?>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th style="background:#337ab7;color:#ffffff;">
                                            <?php echo $this->lang->line('total');?>
                                        </th>
                                        <th style="background:#337ab7;color:#ffffff;">
                                            <?php echo $result['score_obtained'];?>
                                        </th>
                                        <th style="background:#337ab7;color:#ffffff;">
                                            <?php echo secintomin($result['total_time']);?> min
                                        </th>
                                        <th style="background:#337ab7;color:#ffffff;"><?php echo $correct;?></th>
                                        <th style="background:#337ab7;color:#ffffff;"><?php echo $incorrect;?></th>
                                        <th style="background:#337ab7;color:#ffffff;"><?php echo $notattempted;?></th>
                                    </tr>
                                </thead>

                            </table>


                        </div>





                    </div>
                </div>

            </div>
















            <!-- <?php 
$this->db->where("add_status","Active");
$this->db->where("position","Center_Result");
$query=$this->db->get('savsoft_add');
if($query->num_rows()==1){
$ad=$query->row_array();
if($ad['advertisement_code'] != ""){
echo $ad['advertisement_code'];
}else if($ad['banner']!=''){ ?><a href="<?php echo $ad['banner_link'];?>" target="new_add"><img
						src="<?php echo base_url('upload/'.$ad['banner']);?>" class="img-responsive"></a> <?php    

}
}
?> -->





            <?php if($result['show_chart_rank']=="1"){ ?>


            <div class="row">
                <div class="col-md-6 shadow">

                    <?php if($this->config->item('google_chart') == true ){ ?>


                    <!-- google chart starts-->
                    <script type="text/javascript" src="https://www.google.com/jsapi"></script>


                    <script type="text/javascript">
                    google.load("visualization", "1", {
                        packages: ["corechart"]
                    });
                    google.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable(
                            <?php echo $value;?>);
                        var view = new google.visualization.DataView(data);
                        view.setColumns([0, 1]);
                        var options = {
                            title: '<?php echo $this->lang->line('top_10_result');?> <?php echo $result['quiz_name'];?>',
                            hAxis: {
                                title: 'Users -->',
                            },
                            vAxis: {
                                title: 'Marks -->'
                            }
                        };

                        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                        chart.draw(view, options);
                    }
                    </script>
                    <div id="chart_div" style="height: 500px;"></div>

                </div>





                <div class="col-md-6">
                    <div class="card p-4">
                        <div class="row"><br></div>
                        <div class="card-heading ">
                            <h1>Leaderboard</h1>
                        </div>
                        <div class="row"><br></div>
                        <div class="card-body">

                            <?php


$data = json_decode($value);

echo '<table class="table-bordered w-100 text-lg" style="padding: 10px">';

foreach ($data as $row) {
   
   
    foreach ($row as $cell) {
        
        echo '<td style="padding: 10px">' . $cell . '</td>';
          }
    echo '</tr>';
}
echo '</table>';?>

                        </div>
                    </div>
                </div>
            </div>


            <br><br>












            <!-- google chart starts -->

            <div class="col-md-6 shadow mt-4">
                <script type="text/javascript">
                google.load("visualization", "1", {
                    packages: ["corechart"]
                });
                google.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable(<?php echo $qtime;?>);

                    var options = {
                        title: '<?php echo $this->lang->line('time_spent_on_ind');?>'
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
                    chart.draw(data, options);
                }
                </script>
                <div id="chart_div2" style="height: 500px;"></div>
                <!-- google chart ends -->

                <?php }}?>
            </div>
        </div>

        <br><br>












        <!-- <?php
if($result['gen_certificate']=='1'){
	?>
					<a href="<?php echo site_url('result/generate_certificate/'.$result['rid']);?>"
						class="btn btn-warning printbtn"
						style="margin-top:10px;"><?php echo $this->lang->line('download_certificate');?></a>
	
					<?php
	}?> -->









        <div class="col-lg-12 text-center" style="margin-top:20px;">
            <?php     
 $logged_in=$this->session->userdata('logged_in');
	 		 $acp=explode(',',$logged_in['appointment']);
			if(in_array('List',$acp)){
?>

            <a href="<?php echo site_url('appointment/get_appointment/'.$result['inserted_by']);?>"
                class="btn btn-primary printbtn" style="margin-top:10px;"><i class="fas fa-phone fa-rotate-90"></i>
                <?php echo $this->lang->line('appointment_with_expert');?></a>

            <?php }?>

        </div>
    </div>
</div>


























<?php 
$noq=count($result['r_qids']);
$category_range=explode(',',$result['category_range']);
$category_ranges=array();
$qi=0;
foreach($category_range as $qik => $qvv){
 $category_ranges_i=array($qi,($qi+($qvv-1)));
 $category_ranges[]=$category_ranges_i;
$qi+=$qvv;
}
 
?>

<div class="row">

    <div class="col-md-12">
        <br>
        <div class="login-panel panel panel-default onlyprint">
            <div class="panel-body">




                <table class="table table-bordered">
                    <?php 

if($result['camera_req']=='1'){
	?>
                    <tr>
                        <td colspan='2'> <?php if($result['photo']!=''){ ?> <img
                                src="<?php echo base_url('photo/'.$result['photo']);?>" id="photograph"><?php } ?>
                        </td>
                    </tr>

                    <?php 
}
?>
                    <tr>
                        <td><?php echo $this->lang->line('first_name');?></td>
                        <td><?php echo $result['first_name'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('last_name');?></td>
                        <td><?php echo $result['last_name'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('email');?></td>
                        <td><?php echo $result['email'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('quiz_name');?></td>
                        <td><?php echo $result['quiz_name'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('attempt_time');?></td>
                        <td><?php echo date('Y-m-d H:i:s',$result['start_time']);?></td>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('time_spent');?></td>
                        <td><?php echo secintomin($result['total_time']);?></td>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('percentage_obtained');?></td>
                        <td><?php echo $result['percentage_obtained'];?>%</td>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('percentile_obtained');?></td>
                        <td><?php echo substr(((($percentile[1]+1)/$percentile[0])*100),0,5);   ?>%</td>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('score_obtained');?></td>
                        <td><?php echo $result['score_obtained'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('status');?></td>
                        <td><?php echo $result['result_status'];?></td>
                    </tr>

                </table>


            </div>
        </div>
        <br>




























        <!-- Images-->

        <?php 
 if($result['quiz_template']=="Default_PROCTOR"){
$rid= $result['rid'];
$quid= $result['quid'];
 $files = glob('proctor/'.$quid.'-'.$rid.'-*.png');  
 
// Process through each file in the list
// and output its extension
 
if (count($files) > 0){
  $recorded_files=count($files);
 }else{
 $recorded_files=0;
 }
 
  $files2 = glob('screenshots/'.$quid.'-'.$rid.'-*.png');  
 
// Process through each file in the list
// and output its extension
 
if (count($files2) > 0){
  $recorded_files=count($files2);
 }else{
 $recorded_files=0;
 }
 
 


 // echo $recorded_files;
 ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <button data-toggle="collapse" data-target="#warning" class="btn btn-info">Warnings</button>
                <button data-toggle="collapse" data-target="#Captured" class="btn btn-info">Captured
                    Images</button>
                <button data-toggle="collapse" data-target="#Scaptured" class="btn btn-info">Screen
                    capturing</button>

            </div>
            <div id="warning" class="panel-body collapse">'
                <?php 
$wquery=$this->db->query(" select * from warning_message where rid='$rid' ");

?>
                <h3>Warnings (<?php echo $wquery->num_rows();?>)</h3>
                <?php 
if($wquery->num_rows()==0){

echo "<div class='alert alert-success'>No warning issued!</div>";

}else{
foreach($wquery->result_array() as $k => $v){

echo "<div class='alert alert-danger'>". $v['warning_message']." <span style='float:right;color:#666666; '>".date('Y-m-d H:i:s',$v['warning_time'])."</span></div>";

}

}

?>

            </div>
            <div id="Captured" class="panel-body collapse">
                <h3>Photos captured</h3>
                <?php 
	foreach($files as $j => $file){
	$fname=explode('-',$file);
	
	?>
                <div class="col-lg-3"><img src='<?php echo base_url($file);?>'>
                    <b><?php echo $fname[2].'-'.$fname[3].'-'.$fname[4].'-'.$fname[5].'-'.$fname[6].'-'.$fname[7];?></b>
                </div>
                <?php 
}
?>

            </div>

            <div id="Scaptured" class="panel-body collapse">
                <h3>Screen captured</h3>
                <style>
                /* styles needed by the plugin */
                .animatedimage {
                    position: relative;
                    display: inline-block;
                    line-height: 0;
                    overflow: hidden;
                }

                .animatedimage>* {
                    position: absolute;
                    display: inline-block;
                    visibility: hidden;
                    border: 0;
                }

                /* the image that will show while waiting for javascript to load, and what users without javascript will see - if you don't want to use a class you might use *:first-child to select this instead */
                .animatedimage>.poster {
                    position: static;
                    visibility: visible;
                }

                /* spritesheets will rely on left/top positioning */
                .animatedimage[data-spritesize]>* {
                    position: relative;
                }

                .box {
                    float: left;
                    width: 128px;
                    margin: 10px;
                    padding: 20px;
                    background: #FFF;
                    border-radius: 5px;
                    color: #111;
                    cursor: pointer;
                }

                .box p {
                    float: none;
                    margin: 20px 0 0 0;
                }

                .box:hover {
                    box-shadow: 0 0 0 1px #FFF;
                }

                .animatedimage {
                    pointer-events: none;
                    /* the image sequence has a little trouble with click events when rapidly changing the images */
                }
                </style>

                <script>
                // make sure all the images have loaded before starting any animation
                $(window).on('load', function() {

                    // just adding a little delay at the start to extend the 'loading' to see what is shown before the plugin is activated
                    TweenLite.delayedCall(2, function() {
                        // activate animation on the animatedimage elements
                        $('.animatedimage').animateimage(1, -1)
                            // setup a click on the box to toggle the animation pause
                            .parent().on('click', function() {
                                var image = $(this).children('.animatedimage');

                                // the plugin saves the animation in the 'animation' property of the DOM element e.g. image[0].animation
                                if (image.prop('animation').paused()) {
                                    image.prop('animation').resume();
                                } else {
                                    image.prop('animation').pause();
                                }
                            });
                    });
                });



                ;
                (function($) {
                    $.fn.animateimage = function(framerate, repeats) {
                        return this.each(function() {

                            var $this = $(this);

                            framerate = Math.abs(framerate || 10);
                            if (typeof repeats === 'undefined' || repeats < -1) repeats = -1;
                            var duration = 1 / framerate;
                            var spritesize = $this.data('spritesize');

                            // grab all children of the target element - these should just be the image/s to animate
                            var image = $this.children();


                            if (spritesize) { // sprite sheet
                                if (image.length ===
                                    1
                                ) { // image should be a single image containing the sprite sheet

                                    var horizontal = ($this.data('spritedirection') !==
                                        'vertical');
                                    var spritecount = (horizontal ? image.width() : image
                                        .height()) / spritesize;

                                    TweenLite.set(image, {
                                        visibility: 'visible'
                                    });

                                    // attach a reference to the animation on the element, so it can be easily grabbed outside of the plugin and paused, reversed etc
                                    this.animation = new TimelineMax({
                                        repeat: repeats
                                    });

                                    if (horizontal) {
                                        TweenLite.set(this, {
                                            width: spritesize
                                        });
                                        for (var i = 0; i < spritecount; i++) {
                                            this.animation.set(image, {
                                                left: "-" + (i * spritesize) + "px"
                                            }, i * duration);
                                        }
                                    } else {
                                        TweenLite.set(this, {
                                            height: spritesize
                                        });
                                        for (var i = 0; i < spritecount; i++) {
                                            this.animation.set(image, {
                                                top: "-" + (i * spritesize) + "px"
                                            }, i * duration);
                                        }
                                    }
                                    // add an 'empty' set after the last position change - this adds padding at the end of the timeline so the last frame is displayed for the correct duration before the repeat
                                    this.animation.set({}, {}, i * duration);
                                }

                            } else { // image sequence
                                if (image.length >
                                    1) { // image should only contain the images to be animated

                                    // styles for hidden and visible image in the sequcnce
                                    var hidden = {
                                        position: 'absolute',
                                        visibility: 'hidden'
                                    };
                                    var visible = {
                                        position: 'static',
                                        visibility: 'visible'
                                    };

                                    // in case the poster is not the first child, make sure its pre-animated state is disabled
                                    TweenLite.set(image.filter('.poster'), hidden);

                                    var lastimage = image.last();

                                    // attach a reference to the animation on the element, so it can be easily grabbed outside of the plugin and paused, reversed etc
                                    this.animation = new TimelineMax({
                                            repeat: repeats
                                        })
                                        // this first set is not strictly needed as lastimage is underneath all of the other images, but it certainly doesn't hurt
                                        .set(lastimage, hidden)
                                        // toggle images one by one between visible and hidden - at any one time, only one image will be visible, and its static positioning will set the size for the container
                                        .staggerTo(image, 0, visible, duration, 0)
                                        // hide all the elements except lastimage - it will be hidden on repeat if needed at the same time as first is shown
                                        .staggerTo(image.not(lastimage), 0, $.extend(hidden, {
                                            immediateRender: false
                                        }), duration, duration)
                                        // add an 'empty' set after lastimage is made visible - this adds padding at the end of the timeline so lastimage is displayed for the correct duration before the repeat
                                        .set({}, {}, "+=" + duration);
                                }

                            }
                        });
                    };
                }(jQuery));
                </script>
                <div class='box'>

                    <div class='animatedimage'>

                        <?php 
	foreach($files2 as $j => $file){
	$fname=explode('-',$file);
	
	?>
                        <img src='<?php echo base_url($file);?>' style="width:600px;height:300px;"
                            <?php if($j==0){  echo "class='poster'";} ?>>
                        <!-- <b><?php echo $fname[2].'-'.$fname[3].'-'.$fname[4].'-'.$fname[5].'-'.$fname[6].'-'.$fname[7];?></b> -->

                        <?php 
}
?>
                        <!-- With this preloader, the 'empty' frame is the last frame, so we set image 16 to be the poster. animation will always start from the first image, which works well in this case -->
                    </div>
                </div>

                <p>Click to pause/resume its animation</p>
                <!-- preloader from http://preloaders.net -->

            </div>
        </div>






        <?php  } if($this->config->item('sharethis')){ ?>
        <!-- <div class="col-md-12">
                <h3><?php echo $this->lang->line('share_on');?></h3>
                <script type="text/javascript"
                    src="//platform-api.sharethis.com/js/sharethis.js#property=<?php echo $this->config->item('sharethis_property');?>&product=inline-share-buttons">
                </script>
                <div class="sharethis-inline-share-buttons"></div>
            </div> -->
        <?php } ?>



























        <div id="answer-sheet">

            <?php
$ind_score=explode(',',$result['score_individual']); 
// view answer
if($result['view_answer']=='1' || $logged_in['su']=='1'){
	
?>
            <h3 class="page_heading"><?php echo $this->lang->line('answer_sheet');?></h3>

            <div class="col-lg-12 text-right" style="margin-top:20px;">

                <div class="add_button">
                    <a href="javascript:print();" class="btn btn-danger printbtn text-right m-1">Print
                        Report <i class="fa fa-print" aria-hidden="true"></i></a>

                    <a href="#" onClick="showAnswer1()" class="btn btn-success btn-square"><i class="fa fa-search"
                            aria-hidden="true"></i>
                        Analysis</a>
                </div>



            </div>


            <div class="row"><br><br></div>
            <div class="col-md-12 shadow py-4">

                <div class="login-panel panel panel-default noprint">
                    <h3 class="card-header py-2 text-center">Questions</h3>
                    <div class="text-right">
                        <a href="javascript:shoq('-1');" class="btn btn-info"
                            style="width: 100px;padding: 5px;margin: 4px"><?php echo $this->lang->line('view_all');?></a>
                    </div>
                    <div class="panel-body">
                        <br>
                        <?php foreach($questions as $qk => $question){ ?>

                        <a href="javascript:shoq('<?php echo $qk;?>');" class="btn btn-dark"
                            style="width: 50px;padding: 5px;margin: 4px"><?php echo $qk+1;?></a>
                        <?php } ?>

                        <hr>
                        <br>
                        <style>
                        .box {
                            height: 20px;
                            width: 20px;
                            border: 1px solid;
                            display: inline-block;
                            position: relative;
                            top: 5px;
                            margin-left: 10px;
                        }

                        .red {
                            background-color: #ff2624;
                        }

                        .green {
                            background-color: #00b74a;
                        }
                        </style>

                        <div class="col-md-12 text-right">
                            <div class='box green'></div> Correct
                            <div class='box red'></div> Incorrect

                        </div>
                        <br>
                        <?php 
$abc=array(
    '0'=>'A',
    '1'=>'B',
    '2'=>'C',
    '3'=>'D',
    '4'=>'E',
    '5'=>'F',
    '6'=>'G',
    '7'=>'H',
    '8'=>'I',
    '9'=>'J',
    '10'=>'K',
    '11'=>'L',
    '12'=>'M',
    '13'=>'N',
    '14'=>'O',
    // add more if necessary
);

$seg3=$this->uri->segment(4);
 
if($seg3==''){
$seg3=0;
}
foreach($questions as $qk => $question){
// remove below condition for all solution at one page

?>

                        <div class="rqn" id="qn<?php echo $qk;?>"
                            style=" <?php if($qk==0){ echo 'display:block;';}else{ echo 'display:none;';} ?>">


                            <div class="col-md-12 " id="q<?php echo $qk;?>" order
                                style="margin:10px;padding:10px;border:1px solid lightgrey;border-radius:5px;">


                                <div class="col-md-12 col-sm-2 mt-4">

                                    <div>
                                        <h3><b><?php echo $qk+1;?>.
                                                <?php echo str_replace('../../../',base_url(),str_replace('../../../../',base_url(),$question['question']));?></b>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <?php
		if(strip_tags($question['paragraph'])!=""){
		echo $this->lang->line('paragraph')."<br>";
		echo $question['paragraph']."<hr>";
		}
		 ?><br>

                                    <style>
                                    /* Style for options */
                                    .quiz-option {
                                        background-color: #fff;
                                        padding: 10px;
                                        margin: 5px;
                                        border-radius: 5px;
                                        border: 1px solid #ddd;
                                    }

                                    /* Style for correct option */
                                    .quiz-option.correct {
                                        background-color: #00b74a;
                                        color: #fff;
                                    }

                                    /* Style for incorrect option */
                                    .quiz-option.incorrect {
                                        background-color: #ff2624;
                                        color: #fff;
                                    }
                                    </style>

                                    <?php
// multiple single choice
if ($question['question_type'] == $this->lang->line('multiple_choice_single_answer')) {
    $save_ans = array();
    foreach ($saved_answers as $svk => $saved_answer) {
        if ($question['qid'] == $saved_answer['qid']) {
            $save_ans[] = $saved_answer['q_option'];
        }
    }

    $correct_options = array();
  
    foreach ($options as $option) {
        if ($option['qid'] == $question['qid']) {
            if ($option['score'] >= 0.1) {
                $correct_options[] = $option['q_option'];
            }
            
        }
    }

    $ok = 0; // Initialize the index to 0
    $hasAttempted = true; // Initialize hasAttempted to true

    // second part
    foreach ($options as $option) {
        if ($option['qid'] == $question['qid']) {
            $save_ans = array();
            foreach ($saved_answers as $svk => $saved_answer) {
                if ($question['qid'] == $saved_answer['qid']) {
                    $save_ans[] = $saved_answer['q_option'];
                }
            }

            $correct_options = array();
            

            foreach ($options as $opt) {
                if ($opt['qid'] == $question['qid']) {
                    if ($opt['score'] >= 0.1) {
                        $correct_options[] = $opt['q_option'];
                    }
                }
            }

         
            $is_correct = in_array($option['oid'], $save_ans);
            $class = '';

            
            if (in_array($option['q_option'], $correct_options)) {
                $class = 'correct';
            } elseif ($is_correct) {
                $class = 'incorrect';
            }
            elseif (empty($save_ans)) { // Check if the person has not attempted the question
                $notatmpt = 'not_attempted'; // Add a CSS class for not attempted option
                $hasAttempted = false; // Update hasAttempted to false if question is unattempted
            }
            ?>


                                    <div class="quiz-option <?php echo $class; ?>">
                                        <?php echo $abc[$ok] . ". " . $option['q_option']; ?>
                                    </div>
                                    <?php
            $mycorrectoptions = array_map('trim', $correct_options); // Update $mycorrectoptions inside the loop
            $ok = ($ok + 1) % 4; // Update index to repeat ABCD pattern
        }
    }


     // Display "Not Attempted" option if no option has been attempted
    if (!$hasAttempted) {
        ?>
                                    <div class="quiz-option1 not_attempted">
                                        <br>
                                        <b style="color:red;">Not Attempted</b>
                                        
                                    </div>
                                    <?php
    }
    echo "<br>";
}


// echo "<b>" . $this->lang->line('correct_options') . '</b> : ' . implode(', ', array_map('trim', $correct_options));

			







// multiple_choice_multiple_answer	

		 if($question['question_type']==$this->lang->line('multiple_choice_multiple_answer')){
			 			 $save_ans=array();
			 foreach($saved_answers as $svk => $saved_answer){
				 if($question['qid']==$saved_answer['qid']){
					$save_ans[]=$saved_answer['q_option'];
				 }
			 }
			 
			 ?>
                                    <input type="hidden" name="question_type[]" id="q_type<?php echo $qk;?>" value="2">
                                    <?php echo '<b>'.$this->lang->line('your_answer').'</b>:';
			$i=0;
			$correct_options=array();
			foreach($options as $ok => $option){
				if($option['qid']==$question['qid']){
						if($option['score'] >= 0.1){
						$correct_options[]=$option['q_option'];
					}
			?>

                                    <?php if(in_array($option['oid'],$save_ans)){   echo  trim($option['q_option']).', '; }?>




                                    <?php 
			 $i+=1;
				}else{
				$i=0;	
					
				}
			}echo "<br>";
			echo "<b>".$this->lang->line('correct_options').'</b>: '.implode(', ',$correct_options);
		 }
			 




	// short answer	

		 if($question['question_type']==$this->lang->line('short_answer')){
			 			 $save_ans="";
			 foreach($saved_answers as $svk => $saved_answer){
				 if($question['qid']==$saved_answer['qid']){
					$save_ans=$saved_answer['q_option'];
				 }
			 }
			 ?>
                                    <input type="hidden" name="question_type[]" id="q_type<?php echo $qk;?>" value="3">

                                    <?php

			 
			
			 ?>

                                    <div class="op">
                                        <?php echo '<b>'.$this->lang->line('your_answer').'</b>:';?>
                                        <?php echo $save_ans;?>
                                    </div>


                                    <?php 
			 			 foreach($options as $ok => $option){
				if($option['qid']==$question['qid']){
					 echo "<b>".$this->lang->line('correct_answer').'</b>: '.$option['q_option'];
			 }
			 }
			 
		 }
		 
		 
		 	// long answer	

		 if($question['question_type']==$this->lang->line('long_answer')){
			 $save_ans="";
			 foreach($saved_answers as $svk => $saved_answer){
				 if($question['qid']==$saved_answer['qid']){
					$save_ans=$saved_answer['q_option'];
				 }
			 }
			 ?>
                                    <input type="hidden" name="question_type[]" id="q_type<?php echo $qk;?>" value="4">
                                    <?php
			 ?>

                                    <div class="op">
                                        <?php echo $this->lang->line('answer');?> <br>
                                        <?php echo $this->lang->line('word_counts');?>
                                        <?php echo str_word_count($save_ans);?>
                                        <textarea name="answer[<?php echo $qk;?>][]" id="answer_value<?php echo $qk;?>"
                                            style="width:100%;height:100%;"
                                            onKeyup="count_char(this.value,'char_count<?php echo $qk;?>');"><?php echo $save_ans;?></textarea>
                                    </div>
                                    <?php 
		if($logged_in['su']=='1'){
			if($ind_score[$qk]=='3'){
			
		?>
                                    <div id="assign_score<?php echo $qk;?>">
                                        <?php echo $this->lang->line('evaluate');?>
                                        <a href="javascript:assign_score('<?php echo $result['rid'];?>','<?php echo $qk;?>','1');"
                                            class="btn btn-success"><?php echo $this->lang->line('correct');?></a>
                                        <a href="javascript:assign_score('<?php echo $result['rid'];?>','<?php echo $qk;?>','2');"
                                            class="btn btn-danger"><?php echo $this->lang->line('incorrect');?></a>
                                    </div>
                                    <?php 
			}
		}
		?>

                                    <?php 
			 
			 
		 }
			 
		
		
		
		
		
		
		// matching	

		 if($question['question_type']==$this->lang->line('match_the_column')){
			 			 			 $save_ans=array();
			 foreach($saved_answers as $svk => $saved_answer){
				 if($question['qid']==$saved_answer['qid']){
					// $exp_match=explode('__',$saved_answer['q_option_match']);
					$save_ans[]=$saved_answer['q_option'];
				 }
			 }
			 
			 
			 ?>
                                    <input type="hidden" name="question_type[]" id="q_type<?php echo $qk;?>" value="5">
                                    <?php
			$i=0;
			$match_1=array();
			$match_2=array();
			foreach($options as $ok => $option){
				if($option['qid']==$question['qid']){
					$match_1[]=$option['q_option'];
					$match_2[]=$option['q_option_match'];
			?>



                                    <?php 
			 $i+=1;
				}else{
				$i=0;	
					
				}
			}
			?>
                                    <div class="op">
                                        <table>
                                            <tr>
                                                <td></td>
                                                <td><?php echo "<b>".$this->lang->line('your_answer').'</b> ';?>
                                                </td>
                                                <td><?php echo "<b>".$this->lang->line('correct_answer').'</b> ';?>
                                                </td>
                                            </tr>
                                            <?php 
			 
			foreach($match_1 as $mk1 =>$mval){
						?>
                                            <tr>
                                                <td>
                                                    <?php echo $abc[$mk1];?>) <?php echo $mval;?>
                                                </td>
                                                <td>


                                                    <?php 
							foreach($match_2 as $mk2 =>$mval2){
								?>
                                                    <?php $m1=$mval.'___'.$mval2; if(in_array($m1,$save_ans)){ echo $mval2; } ?>
                                                    <?php 
							}
							?>


                                                </td>

                                                <td>
                                                    <?php 
							echo $match_2[$mk1];
							?>
                                                </td>

                                            </tr>


                                            <?php 
			}
			
			
			?>
                                        </table>
                                    </div>
                                    <?php
			
		 }
			
		 ?>
                                    <p><?php 
 if($question['description']!='') {
				echo '<b>'.$this->lang->line('description').'</b>:';
				echo $question['description'];
			 }
			
?></p>

                                    <?php 
if($this->config->item('q2a')){
$q2a_path=$this->config->item('q2a_path');
?>
                                    <div id="q2a<?php echo $qk;?>">
                                    </div>
                                    <script>
                                    $("#q2a<?php echo $qk;?>").html('loading...');
                                    var question = "<?php echo strip_tags($question['question']);?>";
                                    var formData = {
                                        question: question
                                    };
                                    $.ajax({
                                        type: "POST",
                                        data: formData,
                                        url: "<?php echo $q2a_path;?>SQapi.php?findq=1",
                                        success: function(data) {
                                            $("#q2a<?php echo $qk;?>").html(data);

                                        },
                                        error: function(xhr, status, strErr) {
                                            //alert(status);
                                        }
                                    });
                                    </script>
                                    <?php 
}
?>

                                </div>
                                <div class="col-md-2 col-sm-2" id="q<?php echo $qk;?>" style="font-size:30px;">

                                    <?php if($ind_score[$qk]=='1'){ ?><i class="glyphicon glyphicon-ok"></i>
                                    <?php }else if($ind_score[$qk]=='2'){ ?><i class="glyphicon glyphicon-remove"></i>
                                    <?php }  ?>


                                </div>
                            </div>



                        </div>
                        <?php } ?>


                    </div>
                </div>
                <?php }// view answer ends?>



            </div>

        </div>

    </div>





</div>

<input type="hidden" id="evaluate_warning" value="<?php echo $this->lang->line('evaluate_warning');?>">

<script>
$('.s_title').tooltip('show');
</script>
<script>
function shoq(id) {
    if (id == "-1") {
        var did = ".rqn";
        $(did).css('display', 'block');
    } else {
        var did = ".rqn";
        $(did).css('display', 'none');
        var didd = "#qn" + id;
        $(didd).css('display', 'block');
    }
}
</script>

<!-- disable copy, right click -->
<!-- <script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script> -->
<!-- disable copy, right click ends -->


<!-- to hide or show answer sheet and analysis -->

<script>
const divContainer = document.querySelector('#answer-sheet');
const divContainer1 = document.querySelector('#analysis');

// answer sheet show
let showAnswer = function() {
    divContainer.style.display = 'block';
    divContainer1.style.display = 'none';

}
// analysis show
let showAnswer1 = function() {
    divContainer.style.display = 'none';
    divContainer1.style.display = 'block';

}
</script>