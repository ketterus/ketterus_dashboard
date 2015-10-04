<?php
	if ($CurrentUser->logged_in() && $CurrentUser->has_priv('perch_members')) {
   		$this->register_app('ketterus_dashboard', 'Dashboard', 1, 'Dashboard', '1', true);
    	$this->require_version('ketterus_dashboard', '2.0.8');
	}
?>