<?php
$current_page = "dashboard_page";

if (isset($_GET['current_page'])) {
    $current_page = $_GET['current_page'];
}

switch ($current_page) {
    case 'create_meeting_page':
        include 'create_meeting.php';
        break;
    case 'dashboard_page':
    default:
        include 'dashboard.php';
}

?>



