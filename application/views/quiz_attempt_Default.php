<!-- Template javascript -->
<script src="<?php echo base_url('js/basic.js?q='.time());?>"></script>
<style>
td {
    font-size: 14px;
    padding: 4px;
}

.row {
    margin: 0px;
}
</style>


<script>
var Timer;
var TotalSeconds;


function CreateTimer(TimerID, Time) {
    Timer = document.getElementById(TimerID);
    TotalSeconds = Time;

    UpdateTimer()
    window.setTimeout("Tick()", 1000);
}

function Tick() {
    if (TotalSeconds <= 0) {
        alert("Time's up!")
        return;
    }

    TotalSeconds -= 1;
    UpdateTimer()
    window.setTimeout("Tick()", 1000);
}

function UpdateTimer() {
    var Seconds = TotalSeconds;

    var Days = Math.floor(Seconds / 86400);
    Seconds -= Days * 86400;

    var Hours = Math.floor(Seconds / 3600);
    Seconds -= Hours * (3600);

    var Minutes = Math.floor(Seconds / 60);
    Seconds -= Minutes * (60);


    var TimeStr = ((Days > 0) ? Days + " days " : "") + LeadingZero(Hours) + ":" + LeadingZero(Minutes) + ":" +
        LeadingZero(Seconds)


    Timer.innerHTML = TimeStr;
}


function LeadingZero(Time) {

    return (Time < 10) ? "0" + Time : +Time;

}

//var myCountdown1 = new Countdown({time:<?php echo $seconds;?>, rangeHi:"hour", rangeLo:"second"});
setTimeout(submitform, '<?php echo $seconds * 1000;?>');

function submitform() {
    alert('Time Over');
    window.location = "<?php echo site_url('quiz/submit_quiz/');?>";
}
</script>



<div class=" ">



    <div class="exam-header" id="view-fullscreen" style="background:#4E73DF;padding:4px;color:#ffffff;">
        <div class="save_answer_signal" id="save_answer_signal2"></div>
        <div class="save_answer_signal" id="save_answer_signal1"></div>

        <div class="exam-title" style="float:right;width:auto; margin-right:10px;">

            <h4>Time left: <span id='timer'>
                    <script type="text/javascript">
                    window.onload = CreateTimer("timer", <?php echo $seconds;?>);
                    </script>
                </span></h4>
        </div>
        <div class="exam-title" style="float:left;width:auto ">
            <h3>Exam Name : <?php echo $title;?></h3>
        </div>
        <div style="clear:both;"></div>
    </div>

    <div style="clear:both;"></div>





    <div class="row" style="margin-top:0px; height:auto; ">
        <div class="col-md-10">
            <!-- Category button -->

            <div class="row" style="margin:2px;">
                <?php 
$categories=explode(',',$quiz['categories']);
$category_range=explode(',',$quiz['category_range']);
 
function getfirstqn($cat_keys='0',$category_range){
	if($cat_keys==0){
		return 0;
	}else{
		$r=0;
		for($g=0; $g < $cat_keys; $g++){
		$r+=$category_range[$g];	
		}
		return $r;
	}
	
	
}


if(count($categories) > 1 ){
	$jct=0;
	foreach($categories as $cat_key => $category){
?>
                <ul class="nav nav-tabs">
                    <li class="active" style="background:#dddddd;margin-right:5px;"><a
                            href="javascript:switch_category('cat_<?php echo $cat_key;?>');"><?php echo $category;?></a>
                    </li>

                    <input type="hidden" id="cat_<?php echo $cat_key;?>"
                        value="<?php echo getfirstqn($cat_key,$category_range);?>">
                    <?php 
}
}
?>
            </div>
            <br>

            <form method="post" action="<?php echo site_url('quiz/submit_quiz/'.$quiz['rid']);?>" id="quiz_form">
                <input type="hidden" name="rid" value="<?php echo $quiz['rid'];?>">
                <input type="hidden" name="noq" value="<?php echo $quiz['noq'];?>">
                <input type="hidden" name="individual_time" id="individual_time"
                    value="<?php echo $quiz['individual_time'];?>">

                <?php 
$abc=array(
'0'=>'A',
'1'=>'B',
'2'=>'C',
'3'=>'D',
'4'=>'E',
'6'=>'F',
'7'=>'G',
'8'=>'H',
'9'=>'I',
'10'=>'J',
'11'=>'K'
);
foreach($questions as $qk => $question){
?>

                <div id="q<?php echo $qk;?>" class="question_div">

                    <div class="question_container">

                        <h3 class="note note-light" <?php 
		if(strip_tags($question['paragraph'])!=""){
		echo $this->lang->line('paragraph')."<br>";
		echo $question['paragraph']."<hr>";
		}   
		?>>
                            <!-- <?php echo $this->lang->line('question');?>  -->
                            <div class="qno" style="font-weight:bold;"><?php echo $qk+1;?>.
                                <?php 
		 echo str_replace('../../../',base_url(),str_replace('../../../../',base_url(),$question['question']));?>

                            </div> <?php
        //  if unclosed HTML tags disturbing layout , use following code 		 
// $qu=str_replace('&#34;','',$question['question']);
// $somevar = new DOMDocument();
// $somevar->loadHTML((mb_convert_encoding($qu, 'HTML-ENTITIES', 'UTF-8')) );
// echo $somevar->saveHTML(); 
	 
		 ?>
                        </h3>
                    </div>
                    <div class="op">

                        <?php 
		 // multiple single choice
		 if($question['question_type']==$this->lang->line('multiple_choice_single_answer')){
			 
			 			 			 $save_ans=array();
			 foreach($saved_answers as $svk => $saved_answer){
				 if($question['qid']==$saved_answer['qid']){
					$save_ans[]=$saved_answer['q_option'];
				 }
			 }
			 
			 
			 ?>
                        <input type="hidden" name="question_type[]" id="q_type<?php echo $qk;?>" value="1">
                        <?php
			$i=0;
			foreach($options as $ok => $option){
				if($option['qid']==$question['qid']){
			?>

                        <div class="op">
                            <table>
                                <tr>
                                    <td style="font-weight:bold;font-size:25px">
                                        <?php 
		 echo $abc[$i].')';
		?>



                                        <input class="btn-check" autocomplete="off" type="radio"
                                            style="visibility:hidden; margin-right:5px"
                                            name="answer[<?php echo $qk;?>][]" id="answer_value<?php echo $qk.'-'.$i;?>"
                                            value="<?php echo $option['oid'];?>"
                                            <?php if(in_array($option['oid'],$save_ans)){ echo 'checked'; } ?>>


                                        <label class="options btn btn-outline-success"
                                            for="answer_value<?php echo $qk.'-'.$i;?>"><?php echo $option['q_option'];?></label>


                                    </td>

                                </tr>
                            </table>

                        </div>



                        <?php 
			 $i+=1;
				}else{
				$i=0;	
					
				}
			}
		 }
			
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
                        <?php
			$i=0;
			foreach($options as $ok => $option){
				if($option['qid']==$question['qid']){
			?>

                        <div class="op">
                            <table>
                                <tr>
                                    <td>
                                        <?php echo $abc[$i];?>) <input type="checkbox"
                                            name="answer[<?php echo $qk;?>][]" id="answer_value<?php echo $qk.'-'.$i;?>"
                                            value="<?php echo $option['oid'];?>"
                                            <?php if(in_array($option['oid'],$save_ans)){ echo 'checked'; } ?>>
                                    </td>
                                    <td>
                                        <?php echo $option['q_option'];?>
                                    </td>
                                </tr>
                            </table>
                        </div>


                        <?php 
			 $i+=1;
				}else{
				$i=0;	
					
				}
			}
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
                            <?php echo $this->lang->line('answer');?>
                            <input type="text" name="answer[<?php echo $qk;?>][]" value="<?php echo $save_ans;?>"
                                id="answer_value<?php echo $qk;?>">
                        </div>


                        <?php 
			 
			 
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
                            <?php echo $this->lang->line('word_counts');?> <span
                                id="char_count<?php echo $qk;?>">0</span>
                            <textarea name="answer[<?php echo $qk;?>][]" id="answer_value<?php echo $qk;?>"
                                style="width:100%;height:100%;"
                                onKeyup="count_char(this.value,'char_count<?php echo $qk;?>');"><?php echo $save_ans;?></textarea>
                        </div>


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

                                <?php 
			shuffle($match_1);
			shuffle($match_2);
			foreach($match_1 as $mk1 =>$mval){
						?>
                                <tr>
                                    <td>
                                        <?php echo $abc[$mk1];?>) <?php echo $mval;?>
                                    </td>
                                    <td>

                                        <select name="answer[<?php echo $qk;?>][]"
                                            id="answer_value<?php echo $qk.'-'.$mk1;?>">
                                            <option value="0"><?php echo $this->lang->line('select');?></option>
                                            <?php 
							foreach($match_2 as $mk2 =>$mval2){
								?>
                                            <option value="<?php echo $mval.'___'.$mval2;?>"
                                                <?php $m1=$mval.'___'.$mval2; if(in_array($m1,$save_ans)){ echo 'selected'; } ?>>
                                                <?php echo $mval2;?></option>
                                            <?php 
							}
							?>
                                        </select>

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

                    </div>
                </div>



                <?php
}
?>
            </form>

        </div>

        <div class="side-section col-md-2" style=" width: 300px ;padding:20px 0 0 15px;color:#212121;background:#CEDDF0;overflow-y:hidden;position: absolute;
    height: -webkit-fill-available;right: 0px;">





            <h4><b class="m-3"><?php echo $this->lang->line('questions');?></b></h4><br>
            <div class="upper-panel" style="max-height:35%;overflow-y:auto;">
                <?php 
		for($j=0; $j < $quiz['noq']; $j++ ){
			?>

                <div class="qbtn" onClick="javascript:show_question('<?php echo $j;?>');" id="qbtn<?php echo $j;?>">
                    <?php echo ($j+1);?></div>

                <?php 
		}
		?>
                <div style="clear:both;"></div>

            </div>


            <br>
            <hr>

            <br>
            <div class="lower-panel">



                <table class="table table-default">
                    <tr style="font-size:12px;display:flex;flex-direction: column;color:black; font-weight: 500;">
                        <td>
                            <div class="qbtn" style="background:#449d44;">&nbsp;</div>
                            <div class="lbl"><?php echo $this->lang->line('Answered');?></div>
                        </td>

                        <td>
                            <div class="qbtn" style="background:#c9302c;">&nbsp;</div>
                            <div class="lbl"> <?php echo $this->lang->line('UnAnswered');?></div>
                        </td>

                        <td>
                            <div class="qbtn" style="background:#ec971f;">&nbsp;</div>
                            <div class="lbl"> <?php echo $this->lang->line('Review-Later');?></div>
                        </td>

                        <td>
                            <div class="qbtn" style="background:#212121;">&nbsp;</div>
                            <div class="lbl"> <?php echo $this->lang->line('Not-visited');?></div>
                        </td>
                    </tr>
                </table>





            </div>

        </div>


    </div>





</div>

<div class="row exam-navbar  navbar-expand-lg navbar-dark" style="background-color: #4E73DF; bottom:0px; opacity:1;">


    <div class="col-md-6">

        <button class="btn btn-warning mr-4"
            onClick="javascript:review_later();"><?php echo $this->lang->line('review_later');?></button>


        <button class="btn btn-info mr-4"
            onClick="javascript:clear_response();"><?php echo $this->lang->line('clear');?></button>

    </div>
    <div class="col-md-4  text-right">

        <button class="btn btn-success mr-4" id="backbtn" onClick="javascript:show_back_question();"><i
                class="fa fa-arrow-left" aria-hidden="true"></i> <?php echo $this->lang->line('back');?></button>

        <button class="btn btn-success mr-4" id="nextbtn" style="position:relative; margin-right:23px;"
            onClick="javascript:show_next_question();"><?php echo $this->lang->line('save_next');?> <i
                class="fa fa-arrow-right" aria-hidden="true"></i></button>
    </div>

    <div class="col-md-2 text-right">
        <!-- <button class="btn btn-danger"  onClick="javascript:cancelmove();" style="margin-top:2px;" ><?php echo $this->lang->line('submit_quiz');?></button> -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger mr-4" data-toggle="modal" data-target="#exampleModalCenter">
            Submit
        </button>


    </div>
</div>

</div>

<script>
var ctime = 0;
var ind_time = new Array();
<?php 
$ind_time=explode(',',$quiz['individual_time']);
for($ct=0; $ct < $quiz['noq']; $ct++){
	?>
ind_time[<?php echo $ct;?>] = <?php if(!isset($ind_time[$ct])){ echo 0;}else{ echo $ind_time[$ct]; }?>;
<?php 
}
?>
noq = "<?php echo $quiz['noq'];?>";
show_question('0');


function increasectime() {

    ctime += 1;

}
setInterval(increasectime, 1000);
setInterval(setIndividual_time, 30000);
</script>





<!-- <div  id="warning_div" style="padding:10px; position:fixed;z-index:100;display:none;width:100%;border-radius:5px;height:200px; border:1px solid #dddddd;left:4px;top:70px;background:#ffffff;">
<center><b> <?php echo $this->lang->line('really_Want_to_submit');?></b> <br><br>


<a href="javascript:cancelmove();"   class="btn btn-danger"  style="cursor:pointer;"><?php echo $this->lang->line('cancel');?></a> &nbsp; &nbsp; &nbsp; &nbsp;
<a href="javascript:submit_quiz();"   class="btn btn-info"  style="cursor:pointer;"><?php echo $this->lang->line('submit_quiz');?></a>
</center>
</div> -->









<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin:auto;" id="exampleModalCenterTitle">Do you really want to submit
                    this test ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="processing"></span>
            </div>
            <div class="modal-footer">

                <a href="javascript:submit_quiz();" type="button" class="btn btn-danger text-white" id="btnFetch">Submit
                    Test</a>
            </div>
        </div>
    </div>
</div>




<style>
.modal-footer {
    margin: auto;
}

.modal-body {
    margin: auto;
}
</style>

<script>
(function() {
    var viewFullScreen = document.getElementById("view-fullscreen");
    if (viewFullScreen) {
        viewFullScreen.addEventListener("click", function() {
            var docElm = document.documentElement;
            if (docElm.requestFullscreen) {
                docElm.requestFullscreen();
            } else if (docElm.mozRequestFullScreen) {
                docElm.mozRequestFullScreen();
            } else if (docElm.webkitRequestFullScreen) {
                docElm.webkitRequestFullScreen();
            }
        }, false);
    }
})();
</script>