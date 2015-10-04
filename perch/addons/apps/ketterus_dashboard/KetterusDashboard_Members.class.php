<?php

class KetterusDashboard_Members extends PerchAPI_Factory
{
    protected $table     = 'members';
	protected $pk        = 'memberID';
	protected $singular_classname = 'KetterusDashboard_Member';
	
	protected $default_sort_column = 'memberCreated';
	protected $default_sort_direction = 'DESC';
	
	public $static_fields = array('memberID', 'memberAuthType', 'memberAuthID', 'memberEmail', 'memberPassword', 'memberStatus', 'memberCreated', 'memberExpires', 'memberProperties', );
    public $field_aliases = array(
			'email'   => 'memberEmail',
			'status'  => 'memberStatus',
			'expires' => 'memberExpires',
			'auth_id' => 'memberAuthID',
			'id'      => 'memberID',	
			'password'=> 'memberPassword',
    	);
    
    /**
     * methods below
     */
}
?>