<?php
$us_state_abbrs = [
  'Alabama'=>'AL','Alaska'=>'AK', 'Arizona'=>'AZ', 'Arizona'=>'AZ', 'Arkansas'=>'AR',
  'California'=>'CA','Colorado'=>'CO', 'Connecticut'=>'CT', 'Delaware'=>'DE',
  'Florida'=>'FL', 'Georgia'=>'GA', 'Hawaii'=>'HI',
  'Idaho'=>'ID', 'Illinois'=>'IL', 'Indiana'=>'IN', 'Iowa'=>'IA', 'Kansas'=>'KS', 'Kentucky'=>'KY',
  'Louisiana'=>'LA', 'Maine'=>'ME', 'Maryland'=>'MD', 'Massachusetts'=>'MA', 'Michigan'=>'MI', 'Minnesota'=>'MN', 'Mississippi'=>'MS', 'Missouri'=>'MO', 'Montana'=>'MT',
  'Nebraska'=>'NE', 'Nevada'=>'NV', 'New Hampshire'=>'NH', 'New Jersey'=>'NJ', 'New Mexico'=>'NM', 'New York'=>'NY', 'North Carolina'=>'NC', 'North Dakota'=>'ND'
    ];

?>

<!-- ACCORDION -->

<!DOCTYPE html>
<html>
<head>
  <title>AGMD US Doctor List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">	
    
<div id="accordion" >
      <!--Begin State -->
      <?php 
        foreach($us_state_abbrs as $stateName=>$stateAbbr){
               $_state_name=str_replace(' ', '_', $stateName);
      ?>  
      <div class="card" id="<?php echo '#state_top_' . strtolower($stateAbbr) . '_top';  ?>">
        <div class="card-header" role="tab" id="<?php echo 'heading_' . strtolower($stateAbbr);?>">
          <h1 class="mb-0">
               <a  href="<?php echo '#' .  strtolower($_state_name); ?>"  
               class="collapsed card-link agmd-btn-primary btn-block 
               stated nav-link " 
                 state_abbr="<?php echo $stateAbbr?>" 
                 data-toggle="collapse" 
                 > 
            <h1 class="col text-center"><?php echo $stateName; ?></h1>
          </a></h1>
        </div>

        <div id="<?php echo strtolower($_state_name);?>" 
             class="collapse" 
             data-parent="#accordion" 
        >
             <div id="<?php echo strtolower($_state_name) . '_data';?>" class="card-body " onmousedown='return false;' onselectstart='return false;'>

</div>

        </div>

      </div>
      <hr>
         <?php } ?>

      <!--End State -->
</div>  <!-- accordion -->


       


    </div> <!--container-->
      

  <div style="margin-top:500px;"></div>