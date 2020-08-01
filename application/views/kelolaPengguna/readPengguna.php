
<!--batas bagian posting berita-->





    <!-- Static Table Start -->
    <div class="data-table-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Data <span class="table-project-n">Berita</span> Tables</h1>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table"  data-show-columns="true"   data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                          
                                            <th >No</th>
                                            <th >Nama </th>
                                            <th >Username </th>
                                            <th >Password</th>
                                          
                                            <th >Level</th>
                                            <th >Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                     <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($query->result() as $row){
                                echo "<tr>
                                
                                <td>".$no."</td>
                                <td>".$row->nama."</td>
                                <td>".$row->username."</td>
                                
                                <td>".$row->password."</td>
                                <td>".$row->level."</td>
                                <td><a href ='#' class ='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput('".$row->idLogin."','".$row->nama."','".$row->username."','".$row->password."','".$row->level."')\"><i class ='fa fa-pencil'></i> Edit </a>
                                <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=\"SetInputs('".$row->idLogin."','".$row->nama."','".$row->username."','".$row->password."','".$row->level."')\"><i class ='fa fa-trash'></i> Hapus </a>
                             </td>
                               
                            
                                
                            </tr>";
                            $no++;
                                     
                            }  
                            ?> 
                                 </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                     <!-- end row -->

<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:60%;">
        <div class="modal-content">
            
        <form  method="post" action="<?php echo base_url(). 'pengguna/add'; ?>" name="frmBerita" enctype="multipart/form-data">  
        <input type="hidden" id="idLogin" name="idLogin">
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
                                        <input type="text" name="nama"  id="nama" />
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
                                        <input type="text" name="username" id="username"/>
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
                                        <input type="password" name="password" id="password"/>
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
                                <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
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





    <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <form action="<?php echo base_url(). 'pengguna/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="idLogin2" name="idLogin2">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-success waves-effect waves-light">Ya</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->            










                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->







    <script type="text/javascript">
    function SetInput(idLogin, nama, username, password, level){
        document.getElementById('idLogin').value = idLogin;
        document.getElementById('nama').value = nama;
        document.getElementById('username').value = username;
        document.getElementById('password').value = password;
        document.getElementById('level').value = level;
        
    }
    function SetInputs(idLogin, nama, username,  password, level){
        
        document.getElementById('idLogin2').value = idLogin;
        document.getElementById('nama2').value = nama;
        document.getElementById('username2').value = username;
        document.getElementById('password2').value = password;
        document.getElementById('level2').value = level;
    }

   
</script>