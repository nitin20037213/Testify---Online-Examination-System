<!-- <div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">

                    <?php 
    if($this->session->flashdata('message')){
      ?>
                    <div class="d-grid mb-2">
                        <a class="btn  btn-danger text-white fw-bold">
                            <i class="fas fa-exclamation-triangle"></i>
                            <?php echo $this->session->flashdata('message'); ?>
                        </a>
                    </div>

                    <?php 
    }
    ?>

                    <center><strong>
                            <h1>Register</h1>
                        </strong></center>
                    <hr>

                    <form class="form-signin needs-validation" novalidate method="post"
                        action="<?php echo site_url('/login/insert_user');?>">


                        <div class="form-floating mb-3">

                            <span class="icon"><i class="fa fa-user"></i></span><input name="full_name" type="text"
                                class="form-control" required>
                            <label>Full Name</label>
                        </div>
                        <div class="form-floating mb-3">

                            <span class="icon"><i class="fa fa-envelope"></i></span><input name="email" type="email"
                                class="form-control" required>
                            <label>Email Address</label>
                        </div>
                        <div class="form-floating mb-3">

                            <span class="icon" style="rotate: 100deg; "><i class="fa fa-phone"></i></span><input
                                name="contact_no" type="text" class="form-control" required>
                            <label>Mobile Number</label>
                        </div>

                        <div class="form-floating mb-3">

                            <span class="icon"><i class="fa fa-lock"></i></span><input name="password" type="password"
                                class="form-control" id="show_password" required>
                            <label>Password</label>
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="password_show_hide();">
                                    <i class="fas fa-eye" id="show_eye"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                </span>
                            </div>
                        </div><br>

                        <?php 
            if($this->session->userdata('cart')){
            $d=$this->session->userdata('cart');
        foreach($d as $k => $v){
        ?>
                        <input type="hidden" name="gid[]" value="<?php echo $v[0];?>">
                        <?php
        }
            }else{
            ?>
                        <input type="hidden" name="gid[]" value="<?php echo $this->config->item('default_group');?>">
                        <?php   
                
            }
            
            ?>
                        <!--
                <div class="form-group">     
                    <label   ><?php echo $this->lang->line('select_group');?></label> 
                    <select class="form-control" name="gid" id="gid"  >
                    <?php 
                    foreach($group_list as $key => $val){
                        ?>
                        
<option value="<?php echo $val['gid'];?>" <?php if($val['gid']==$gid){ echo 'selected'; } ?> ><?php echo $val['group_name'];?> (<?php echo $this->lang->line('price_');?>: <?php echo $val['price'];?>)</option>
                        <?php 
                    }
                    ?>
                    </select>
            </div>
 -->


                        <?php 
    foreach($custom_form as $fk => $fval){
 
    ?>


                        <?php
    }
    ?>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Submit
                            </button>
                        </div>

                    </form>

                    <div class="text-center">Already a member?
                        <a href="<?php echo site_url('login');?>" class="medium fw-bold" type="submit">
                            Login here</a>
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