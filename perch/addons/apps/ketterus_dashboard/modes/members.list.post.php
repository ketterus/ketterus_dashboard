<?php
    # Side panel
    echo $HTML->side_panel_start();

    //echo $HTML->para('');

    echo $HTML->side_panel_end();
    
    
    # Main panel
    echo $HTML->main_panel_start();
	
	include('_subnav.php');

	# Title panel
    echo $HTML->heading1('Listing Active Members');
    
?>

    <?php
    /* ----------------------------------------- SMART BAR ----------------------------------------- */
    /* ----------------------------------------- /SMART BAR ----------------------------------------- */
    ?>



<?php    
    if (PerchUtil::count($members)) {

        echo '<table class="d itemlist">';
            echo '<thead>';
                echo '<tr>';
                    echo '<th>'.$Lang->get('Member Name').'</th>';
                    echo '<th class="last">'.$Lang->get('Created').'</th>';
                echo '</tr>';
            echo '</thead>';
        
            echo '<tbody>';
				foreach($members as $Member) {
					if ($Member->memberStatus() == 'active') {
					    $memberProperties = PerchUtil::json_safe_decode($Member->memberProperties(), true);
      					echo '<tr>';
        					echo '<td class="primary">';
        						echo '<a href="'.PerchUtil::html(PERCH_LOGINPATH.'/addons/apps/perch_members/edit/?id='.$Member->id()).'">';
        						echo $memberProperties['first_name'].' '.$memberProperties['last_name'];
        						echo '</a>';
        					echo '</td>';
        					echo '<td>';
            					echo '<span class="note">'.PerchUtil::html(strftime('%d %b %Y', strtotime($Member->memberCreated()))).'</span>';
        					echo '</td>';
      					echo '</tr>';
					}
				}
            echo '</tbody>';
        
        
        echo '</table>';
        
    

  
        if ($Paging->enabled()) {
            echo $HTML->paging($Paging);
        }
    

    } // if members
    
    echo $HTML->main_panel_end();
