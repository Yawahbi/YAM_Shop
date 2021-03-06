<?php
	ob_start();
	session_start();
	$pageTitle="My account";
	include 'init.php';

	?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       My Account
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("templates/sidebar_account.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <?php
                   
                if (isset($_GET['edit_account'])){
                    include("edit_account.php");
                }
                elseif (isset($_GET['change_pass'])){
                    include("change_pass.php");
                }
                elseif (isset($_GET['delete_account'])){
                    include("delete_account.php");
                }
                 
                   ?>
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("templates/footer.php");
    ob_end_flush();
    ?>
    
