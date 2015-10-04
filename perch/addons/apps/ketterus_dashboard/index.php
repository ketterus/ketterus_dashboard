<?php
    # include the API
    include('../../../core/inc/api.php');
    
    $API  = new PerchAPI(1.0, 'ketterus_dashboard');
    $Lang = $API->get('Lang');

    # include your class files
    include('KetterusDashboard_Members.class.php');
    include('KetterusDashboard_Member.class.php');

    # Set the page title
    $Perch->page_title = $Lang->get('Members');

    # Do anything you want to do before output is started
    include('modes/members.list.pre.php');
    
    
    # Top layout
    include(PERCH_CORE . '/inc/top.php');

    
    # Display your page
    include('modes/members.list.post.php');
    
    
    # Bottom layout
    include(PERCH_CORE . '/inc/btm.php');
