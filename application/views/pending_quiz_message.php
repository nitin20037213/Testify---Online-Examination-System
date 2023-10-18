 <div class="container" style="background:#fff!important;">
     <style>
     span#remainingTime {
         display: contents;
         margin: auto;
     }

     .row a {
         display: contents;

     }
     </style>
     <div class="card shadow p-4">
         <h3 class="page_heading"><?php echo $title;?></h3>



         <div class="row">


             <br>


             <div class="alert alert-danger"><?php echo $this->lang->line('pending_quiz_message');?></div>
             <div class="row"><br><br></div>


             <div class="row">

                 <?php echo str_replace('[link]',site_url($openquizurl),$this->lang->line('manual_redirect'))?><span
                     max="10" id="remainingTime">10</span> seconds


             </div>








         </div>

     </div>
     <script>
     let remainingTimeElement = document.querySelector("#remainingTime"),
         secondsLeft = 9

     const downloadTimer = setInterval(
         () => {
             if (secondsLeft <= 0) clearInterval(downloadTimer)
             remainingTimeElement.value = secondsLeft
             remainingTimeElement.textContent = secondsLeft
             secondsLeft -= 1
         },
         1000)
     </script>


     <script>
     setTimeout(function() {
         window.location = "<?php echo site_url($openquizurl);?>";
     }, 10000);
     </script>