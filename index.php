<!DOCTYPE html>
<html lang="en"> <!--set the language-->
<!--tag .class tag-->

<head> <!--"head" like libraries and stuff tag-->
  <title>Make-A-Meeting</title> <!--This is the title of the tab-->
  <meta charset="utf-8">
  <!--An extra setting section (meta) describing the character set, utf-8 means unicode characters with 8 bits-->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!---->
  <!--Watch out! You can't comment in a "style" tag in this traditional way, you need to do this instead...-->

<link rel="stylesheet" href="CSS/style.css">

<script type="text/javascript" src="javaScript/functions.js"></script>

</head> <!--end of the "head" tag-->

<body> <!--"body" tag-->


<?php
  include 'connect/connect.php';

  // get some data from the database
  $database_result = $mysqli->query("SELECT display_name FROM user");
  while ($row = $database_result->fetch_row()) {
    $display_name = $row[0];
    echo $display_name;
  }
  $database_result->free_result();

  include 'connect/disconnect.php';
  ?>



  <div class="meetingBox"> <!--"div" tag with a class called "meetingBox"-->
    <div class="meetingTitle">
      <h1>I am really good at head, #1</h1> <!--"h1" tag-->
      <p>Make a Meeting Body Builder.</p> <!--"p" tag with no class-->
    </div>
    <div class="slotBox" onclick="clickAlert(this)">
      <!--"onclick" is an html field within the tag "div" that calls "clackAlert" which is javascript-->
      date: monday at 5
    </div>
    <div class="slotBox" onclick="clickAlert(this)">
      date: tuesday at 5
    </div>
    <div class="slotBox" onclick="clickAlert(this)">
      date: wednesday at 6
    </div>
  </div>

</body>



</html>