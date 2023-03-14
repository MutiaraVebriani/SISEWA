<!DOCTYPE html>
<html lang="en">
    <head>
    <title>SISEWA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('theme/user/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('theme/user/css/style.css');?>" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url('theme/user/js/simpleCart.min.js');?>"></script>
		<script src="<?php echo base_url('theme/user/js/jquery-2.1.4.min.js');?>"></script>
		<script src="<?php echo base_url('theme/user/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('theme/user/js/imagezoom.js');?>"></script>
    <script defer src="<?php echo base_url('theme/user/js/jquery.flexslider.js');?>"></script>
    <script defer src="<?php echo base_url('theme/user/js/parsley.min.js');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('theme/user/css/flexslider.css');?>" type="text/css" media="screen" />
<style type="text/css">
    body{
            background-color: white !important;
        }
    .actmember{
      padding: 15px 10px 0px 10px;
      height: 50px;

    }
    .collapse{
  
}
    .button {
    transition-duration: 0.4s;

    }
    .navbar{
         }
    .button:hover {
    background-color: darkblue;
    }
    .container-fluid{
      color: black !important;
      background-color: blue;
       position: fixed; /* Set the navbar to fixed position */
    top: 0; /* Position the navbar at the top of the page */
    width: 100%; /* Full width */

    }
    li{
      transition-duration: 0.4s;
          color: black !important;
    }
    li:hover {
    background-color: blue !important;
    color: black !important;
    }
    a{
      color: black !important;
    }
    a:hover {
    color: black !important;
    }
  </style>

    </head>
    <body>

      <div class="header">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
              <div class="navbar-header">

                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".upper-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  <div class="logo">
                      <ul class="nav navbar-nav">      
                     
                                  </div>
                </div>

                <div class="collapse navbar-collapse upper-navbar">
                  <ul class="nav navbar-nav ">
  <img
          img src="logo.png" style="height: 40px" align="Left">&nbsp;&nbsp;                  
                    <li><a href="<?php echo base_url();?>">Beranda</a></li>
                    <li><a href="<?php echo base_url('produk');?>">Sewa Aset</a></li>
                    <li><a href="<?php echo base_url('tentang');?>">Tentang</a></li>
                    <li><a href="<?php echo base_url('kontak');?>">Kontak</a></li>
                  </ul>
                  <ul id="menu-topmenu" class="nav navbar-nav navbar-right">
                    <?php if (empty($this->session->userdata('is_login'))){ ?>
                      <li><a href="<?php echo base_url('daftar')?>" role="button">Daftar</a></li>
                      <li><a href="<?php echo base_url('login')?>" role="button">Masuk</a></li>
                    <?php }else{ ?>
                      <li><a href="<?php echo base_url('akun')?>" role="button"><?php echo ucfirst($this->session->userdata('nama'));?></a></li>
                      <li><a href="<?php echo base_url('login/logout')?>" role="button">Logout</a></li>
                    <?php } ?>
                  </ul>
                </div>
          </div>
        </nav>
      </div>

