<?php

class KetterusDashboard_Member extends PerchAPI_Base
{
    protected $table  = 'members';
    protected $pk     = 'memberID';

    public $static_fields = array('memberID', 'memberAuthType', 'memberAuthID', 'memberEmail', 'memberPassword', 'memberStatus', 'memberCreated', 'memberExpires', 'memberProperties', );
    public $field_aliases = array(
			'email'   => 'memberEmail',
			'status'  => 'memberStatus',
			'expires' => 'memberExpires',
			'auth_id' => 'memberAuthID',
			'id'      => 'memberID',	
    	);

    /**
     * methods below
     */
}

?>