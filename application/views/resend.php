 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
  
               <center>Enter your Registered Email Address to get OTP </center>
                  <br>
			<form class="form-signin needs-validation" novalidate method="post" action="<?php echo site_url('login/resend');?>">

           	<?php 
		if($this->session->flashdata('message')){
			?>   
			 <div class="d-grid mb-2">
                <button class="btn  btn-info text-uppercase fw-bold" type="submit">
                  <i class="fas fa-info-circle"></i>  <?php echo $this->session->flashdata('message');?>
                </button>
              </div>
             
			
                                  
			
	  	<?php	
		}
		?>	
                                     
      
		
			
		
                     
              <div class="form-floating mb-3">

                <input name="email" type="email" class="form-control"  placeholder="name@example.com" required>
                <label >Email address</label>
              </div>
             

            
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit"> <i class="fa fa-paper-plane"></i>       Send OTP</button>
              </div>  <hr>  <div class="text-center">
                 Didn't Receive a otp ?   <a class="small" href="http://localhost/t40/login/forgot">Resend OTP </a>
								 
	
			 
						
                  </div>
 </form>
 <form onsubmit="location.href='https://target40.cf/index.php/login/verify/' + document.getElementById('myInput').value; return false;" class="form-signin needs-validation" novalidate action="<?php echo site_url('login/forgot');?>">

              <hr class="my-4">
                 <div class="form-floating mb-3">

                <input  type="email" class="form-control"  placeholder="name@example.com" required>
                <label >Enter OTP</label>
              </div>
             
              <div class="d-grid mb-2">
                <button class="btn btn-success text-uppercase fw-bold" type="submit">
                  <i class="fa fa-check-circle"></i> Verify OTP</button>
              </div>
             </form>
          
          </div>
        </div>
      </div>
    </div>
  </div>


 
 
<script>
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>


