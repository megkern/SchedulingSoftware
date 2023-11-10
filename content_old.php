<?php 
include 'playDate/playFile.php';
?> 

</br></br></br></br>

<?php
  include 'connect/connect.php';

  // get some data from the database
  $database_result = $mysqli->query("SELECT display_name FROM user ORDER BY display_name DESC");
  while ($row = $database_result->fetch_row()) {
    $display_name = $row[0];
    echo "displayName: ".$display_name."</br>";
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