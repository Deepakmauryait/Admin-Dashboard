   

<style>
    .login-input .form-group .form-control {
    padding-left: 15px !important;
}
img.logo {
    margin-top: 5px;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-weight: 100 !important;
    color: #565050 !important;
}
h4, .h4 {
    font-size: 14px;
}
.card {
     
     border-radius: 0 !important; 
     
}
hr {
     margin-top:0 !important; 
}
.card-header::before {
    content: '';
    width: 0;
    height: 0;
    border-top: 12px solid #37a000;
    border-right: 12px solid transparent;
    position: absolute;
    left: 0px;
    top: 0px;
}
/*.login-input .form-group .form-control {
    background: none;
     border:none !important; 
    border-radius:none !important;
     border-bottom: none !important;
   padding-left: 0;
    color: none !important;
}*/

</style>

 <?php
                                        $this->load->helper('form');
                                        $error = $this->session->flashdata('error');
                                        if($error)
                                        {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $this->session->flashdata('error'); ?>                    
                                    </div>
                                    <?php } ?>
                                    <?php  
                                        $success = $this->session->flashdata('success');
                                        if($success)
                                        {
                                    ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                    <?php } ?>
                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                                        </div>
                                    </div>

   <div class="login-form-bg h-100" style="background-color: #f1f3f6; background-repeat: no-repeat; background-size: cover;">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-3">
                                        
                                        <img src="<?php echo base_url()?>assets/images/logo.png" class="logo" heigth="70px" width="70px">
                                    </div>
                                    <div class="col-md-9 pt-3">
                                         <h5>Megatask &nbsp;Technologies&nbsp; Pvt&nbsp; Ltd&nbsp;<br> Login</h5>
                                    </div>
                                </div>
                            </div>
                             <hr>
                            <div class="card-body pt-4">
                                
                                
                                
                                <form method="post" action="<?php echo base_url(); ?>login/login_validation" class=" mb-5 login-input">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                     
                                    </div>
                                   <button class="btn btn-primary submit w-100" type="submit" name="insert" value="Login">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>





