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

<div class="container">	
    

      <!--Begin State -->
      <?php 
   foreach($us_state_abbrs as $stateName=>$stateAbbr){
     $_state_name=str_replace(' ', '_', $stateName);
?>      
<div id="accordion"  role="tablist">
      <div class="card" id="<?php echo '#state_top_' . strtolower($stateAbbr) . '_top';  ?>">
        <div class="card-header" role="tab" id="<?php echo 'heading_' . strtolower($stateAbbr);?>">
          <h2 class="mb-0">
               <a  href="<?php echo '#' .  strtolower($_state_name); ?>"  
               class="collapsed card-link btn agmd-btn-primary btn-block stated " 
                 state_abbr="<?php echo $stateAbbr?>" data-toggle="collapse" data-parent="#accordion"
                 aria-expanded="false" 
                 aria-controls="<?php echo '#' .  strtolower($_state_name); ?>"
                 > 
            <h4 ><?php echo $stateName; ?></h4>
          </a></h2>
        </div>

        <div id="<?php echo strtolower($_state_name);?>" 
             class="panel-collapse collapse <?php  echo 'panel_' . strtolower($stateAbbr);?>" 
             data-parent="#accordion" 
             role="tabpanel"
             aria-labeledby="<?php echo 'heading_' . strtolower($stateAbbr); ?>" >
          <div id="<?php echo strtolower($_state_name) . '_data';?>" class="card-body table-response" onmousedown='return false;' onselectstart='return false;'>

          </div>

        </div>

      </div>
</div>  <!-- accordion -->
      <hr>
         <?php } ?>

      <!--End State -->

       


    </div> <!--container-->
      
  </div> <!--role-->
  <div style="margin-top:500px;"></div>