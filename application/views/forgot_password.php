<!-- <div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">

                    <center><strong>
                            <h1>Forgot Password </h1>
                        </strong></center>
                    <hr>
                    <p class="mb-4" style="text-align:center;">We get it, stuff happens. Just enter your email address
                        below
                        and we'll send you a link to reset your password!</p>

                    <form method="post" novalidate class="user needs-validation"
                        action="<?php echo site_url('login/forgot');?>">
                        <?php 
		if($this->session->flashdata('message')){
			?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('message');?>
                        </div>
                        <?php	
		}
		?>
                        <div class="form-floating mb-3">
                            <span class="icon"><i class="fa fa-envelope"></i></span><input name="email" type="email"
                                class="form-control " id="exampleInputEmail" required>
                            <label>Email Address</label>
                        </div><br>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-login text-uppercase fw-bold">
                                Reset Password
                            </button>
                        </div>
                    </form>
                    <hr>

                    <div class="text-center">
                        Already have an account? <a class="medium  fw-bold"
                            href="<?php echo site_url('login');?> ">Login
                            here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script> -->