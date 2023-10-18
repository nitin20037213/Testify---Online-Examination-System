 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
  
 <form method="post" onsubmit="location.href='<?php echo site_url('login/verify/');?>' + document.getElementById('myInput').value; return false;" class="form-signin" >
  	<?php 
		if($this->session->flashdata('message')){
			?>   
			 <div class="d-grid mb-2">
                <button class="btn  btn-danger text-uppercase fw-bold" type="submit">
                  <i class="fas fa-exclamation-triangle"></i>  <?php echo $this->session->flashdata('message');?>
                </button>
              </div>
             
			
                                  
			
	  	<?php	
		}
		?>	
              <hr class="my-4">
                 <div class="form-floating mb-3 needs-validation novalidate">
<input type="number" id="myInput"  class="form-control"  placeholder="OTP" required>
               
                <label >Enter OTP</label>
              </div>
             
              <div class="d-grid mb-2">
                <button class="btn btn-success text-uppercase fw-bold" type="submit">
                  Verify OTP  <i class="fa fa-check-circle"></i></button>
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
