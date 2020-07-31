 <!-- Register Start-->
 <div class="login-form-area mg-t-30 mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <form action="<?php echo base_url('pengguna/add'); ?>" method="post" id="adminpro-register-form" class="adminpro-form">
                    <div class="col-lg-6">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                               <!--     <div class="logo">
                                        <a href="<?php echo base_url(); ?>horizontal/#"><img src="<?php echo base_url(); ?>horizontal/img/logo/logo.png" alt="" />
                                        </a>
                                    </div>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-title">
                                        <center><h1>Registration Form</h1></center>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                       <p>Full Name</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="text" name="nama" />
                                        <i class="fa fa-user login-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Username</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="text" name="username" />
                                        <i class="fa fa-user login-user"></i>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Password</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="password" name="password" />
                                        <i class="fa fa-lock login-user"></i>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Level</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                    <select  type="text" class="form-control" name="level" >
                                <option>SuperAdmin</option>
                                <option>Admin</option>
                            </select>
                                    </div>
                                </div>
                            </div>
                           
                            
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">
                                        <button type="submit" class="login-button login-button-lg">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <!-- Register End-->