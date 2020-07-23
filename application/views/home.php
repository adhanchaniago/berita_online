<?php 
 //   if($this->session->userdata('username') != NULL){
?>
<!doctype html>
<html class="no-js" lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BERITA ONLINE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>horizontal/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="<?php echo base_url(); ?>horizontal/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/animate.css">
    <!-- data-table CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/normalize.css">
    <!-- charts C3 CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/c3.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/form/all-type-forms.css">
    <!-- switcher CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/switcher/color-switcher.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/style.css">
    <!-- buttons CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/buttons.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Color Css Files
        ============================================ -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-one.css" title="color-one" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-two.css" title="color-two" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-three.css" title="color-three" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-four.css" title="color-four" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-five.css" title="color-five" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-six.css" title="color-six" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-seven.css" title="color-seven" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-eight.css" title="color-eight" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-nine.css" title="color-nine" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-ten.css" title="color-ten" media="screen" />

    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/summernote.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/data-table/bootstrap-editable.css">

    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/dropzone.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/c3.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- form CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/form.css">
    
    
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url(); ?>horizontal/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <!--       <div class="admin-logo">
                        <a href="<?php echo base_url(); ?>horizontal/#"><img src="<?php echo base_url(); ?>horizontal/img/logo/log.png" alt="" />
                        </a>
                    </div>-->
                </div>
                <div class="col-lg-5 col-md-5 col-sm-0 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav mai-top-nav">
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                        <li>
                        <a  href="<?php echo base_url(); ?>login/logout"><button type='button' class='btn btn-custon-four btn-danger' class="admin-name" >SIGN</button></a> </li>
                    
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top area end-->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>BERITA ONLINE</h2>
                    <ul class="nav nav-tabs custom-menu-wrap">
                        <li  ><a  href="<?php echo base_url(); ?>home" >Home</a></li>
                   
                   
                        
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
<!-- Breadcome start-->
<div class="breadcome-area mg-t-40 mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="breadcome-heading">
                            <p><strong>Filter:</strong>
                            <button type="button" class="btn btn-custon-four btn-danger" onclick="location.href='<?php echo base_url();?>welcome/desc'">JUMLAH BACA</button>/*jumlah pembaca terbanyak-terkecil*/</p>


                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <div class="user-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="user-profile-wrap shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                   <tbody>
                                    <div class="col-lg-9">
                                        <div class="user-profile-content">
                                            <p ></p>
                                            <tbody>
                                                <?php     
                                                $query=$this->m_berita->tampil_login();                   
                                                foreach($query->result() as $row){
                                                $artikel=$row->isi_berita;
                                                $cut=substr($artikel,0,200); //kode untuk membatasi karakter saya batasi 200 karakter
                                                $s="......";
                                                $t=" (DIBACA ";
                                                $u=" )";
                                                $v=" KALI";
                                                $w="====================================================";
                                                echo "<tr> 
                                                <td><b>====================================================</br><center>admin : ".$row->nama."</center></b><b><h2><strong></br>".$row->judul_berita."</strong></h2>".$t."".$row->jml_baca."".$v."".$u."</br></b>
                                                <br>".$cut."
                                                ".$s."</br>
                                                <a  href='".base_url('welcome/selanjutnya?id='.$row->id)."'><button type='button' class='btn btn-custon-four btn-danger' >LANJUT BACA</button></a> 
                                                </td>  
                                                <strong>".$w."</strong>
                                                </tr>";  

                                            } 
                                            ?>  
                                            </tbody>   
                                         
                                           
                                            <p></p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <p></p>
    </div>
    