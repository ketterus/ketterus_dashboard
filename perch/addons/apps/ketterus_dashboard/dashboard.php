<?php
	include('KetterusDashboard_Members.class.php');
	include('KetterusDashboard_Member.class.php');

    $API   = new PerchAPI(1.0, 'ketterus_dashboard');
    $Lang  = $API->get('Lang');

    $Paging = $API->get('Paging');
    $Paging->set_per_page(5);
    
    $Settings = $API->get('Settings');

    $Members = new KetterusDashboard_Members($API);
    
    $members = $Members->all($Paging);
    
?>
<div class="widget">
	<h2>
		<?php echo $Lang->get('Members (Active)'); ?>
	</h2>
	<div class="bd">
		<?php
			
			
			if (PerchUtil::count($members)) {
				echo '<ul>';
				echo '<li><strong>('.$Paging->per_page().') '.$Lang->get('Most Recent Members').'</strong><a class="action" href="'.PerchUtil::html(PERCH_LOGINPATH.'/addons/apps/ketterus_dashboard').'">'.$Lang->get('ALL').'</a></li>';
				foreach($members as $Member) {
					if ($Member->memberStatus() == 'active') {
					    $memberProperties = PerchUtil::json_safe_decode($Member->memberProperties(), true);
      					echo '<li>';
      						echo '<a href="'.PerchUtil::html(PERCH_LOGINPATH.'/addons/apps/perch_members/edit/?id='.$Member->id()).'">';
      						echo $memberProperties['first_name'].' '.$memberProperties['last_name'];
      						echo '</a>';
      						echo '<span class="note">'.PerchUtil::html(strftime('%d %b %Y', strtotime($Member->memberCreated()))).'</span>';
      					echo '</li>';
					}
				}
				echo '</ul>';
			}
		?>
	</div>
</div>
