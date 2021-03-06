<?php
/*
  Template Name: agmdDoctorDetail
*/  
?>
<?php 
 
 $doctor_id =  $_GET['doctor_id']; 
       $doctor = new DoctorDB();
       $results = $doctor->get_wp_doctor_detail($doctor_id);

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	  <style>
     /*Add scrollbars to the card body  */
/*	
    .card-body{
        overflow-y:scroll;
        height:100px;
    }
    */  
  </style>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php global $agmd_doctor_accordion_page; ?>

    <h2 class="text-center text-info">Doctor Details</h2>

    <?php  echo $results;  ?>  
    <tr>

    <?php $page_link = get_page_link($agmd_doctor_accordion_page) ;  ?>
    
    <a href="<?php  echo $page_link; ?>"  class="btn agmd-btn-primary">Back</a> 
			  
			  
			  
	  

<?php wp_footer(); ?>
</body>
</html>