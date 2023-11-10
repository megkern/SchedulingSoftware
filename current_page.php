<?php
$current_page = "landing_page";

if (isset($_GET['current_page'])) {
    $current_page = $_GET['current_page'];
}

switch ($current_page) {
    case 'dashboard_page':
        include 'dashboard.php';
        break;
    case 'create_meeting_page':
        include 'create_meeting.php';
        break;
    case 'my_meeting_page';
        include 'my_meeting.php';
        break;
    case 'landing_page';
    default:
        include 'landing.php';
}

?>