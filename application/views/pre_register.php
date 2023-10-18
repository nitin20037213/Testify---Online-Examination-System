
<div class="row"  style="border-bottom:1px solid #dddddd;">
<div class="container"  >
<div class="col-md-1">
</div>
<div class="col-md-10">
<a href="<?php echo base_url();?>"><img src="<?php echo base_url('images/logo.png');?>"></a>
<?php echo $this->lang->line('login_tagline');?>
</div>
<div class="col-md-1">
</div>

</div>

</div>

 <div class="container">
 
   <div style="margin-top:50px;margin-bottom:50px;">

 <h3><?php echo $title;?></h3>
   </div>
     
<?php 
		if($this->session->userdata('cart')){
			$d=$this->session->userdata('cart');
			?>
		<div class="card" style="margin-bottom:50px;">
			<div class="card-header">
			
			<h4>Cart</h4>
			
			</div>
		<div class="panel-body" >	
		<?php 
		$total=0;
		foreach($d as $k => $v){
		?>
		
			<p style="margin:10px; padding:10px; border-bottom:1px solid #dddddd;" class="hoverbg"><?php echo base64_decode($v[1]);?>: <?php echo $this->config->item('base_currency_prefix');?>  <?php echo base64_decode($v[2]);?> <?php echo $this->config->item('base_currency_sufix');?>  <a href="<?php echo site_url('login/clearcartval/'.$v[0]);?>"><i class="fa fa-trash" style="float:right;color:#666666;"></i></a></p>
			
			
		<?php 
		$total+=base64_decode($v[2]);
		}
		?>
		</div>
		<div class="card-footer">
		 <a href="<?php echo site_url('login/registration/');?>" class="btn btn-warning" >Checkout <?php echo $this->config->item('base_currency_prefix');?> <?php echo $total;?> <?php echo $this->config->item('base_currency_sufix');?></a>
		</div>
		</div>
		<?php
		
		}
		
		?>		

		
		
		
  <div class="row">
   <?php 
    $cc=0;
$colorcode=array(
'success',
'warning',
'info',
'danger'
);
    foreach($group_list as $k => $val){
    
   ?>
    
    <div class="col-lg">
    
     
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                      <ul class="price">
       <li class="black">   <?php echo $val['group_name'];?> </li></ul>
                                            <div class="text-white-200 small"><?php 
                          echo $val['description'];?>
                         
   <?php 
if($val['price']==0){
echo "Free ";
}else{
echo $this->config->item('base_currency_prefix').' '.$val['price'].' '.$this->config->item('base_currency_sufix')." "; 
}
?>

<a href="<?php echo site_url('login/addtocart/'.$val['gid'].'/'.base64_encode($val['group_name']).'/'.base64_encode($val['price']));?>" class="button" > 	 <?php echo $this->lang->line('continue');?> </a></a>
 
                          </div>
                                        </div>
                                    </div>
                                </div>
   
   <div class="columns">
 
</div>
   
   
	  
	  <?php 
	 
	  
    }
    ?>
  
</div>

   <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

<div style="margin-top:50px;">
<a href="<?php echo site_url('login');?>">Back</a>

</div>

</div>

<script>
 
</script>
