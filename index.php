<!DOCTYPE html>
<html lang="en"> <!--set the language-->
<!--tag .class tag-->

<head> <!--"head" tag-->
  <title>Make-A-Meeting</title> <!--This is the title of the tab-->
  <meta charset="utf-8">
  <!--An extra setting section (meta) describing the character set, utf-8 means unicode characters with 8 bits-->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!---->
  <!--Watch out! You can't comment in a "style" tag in this traditional way, you need to do this instead...-->
  <style>
    /*"style" tag, this is where each tag, class, and ID get their styles defined*/
    html {
      height: 100%;
    }

    body {
      /*style for the "body" tag*/
      display: flex;
      height: 100%;
      background-color: black;
      color: white;
    }

    .meetingBox {
      /*".meetingBox" is a class that defines the style anytime anything uses the meetingBox class*/
      flex: 1;
      height: 100%;
      width: 100%;
      /*border: 5px solid red;*/
    }

    .meetingTitle {
      /*".meetingTitle h1" applies these styles to everything inside of the "meetingTitle" class that is a "h1" tag*/
      color: purple;
    }

    .slotBox {
      /*"body.slotBox" is a class*/
      height: 100px;
      width: 100px;
      border: 5px solid green;
      display: inline-block;
    }
  </style> <!--end of the "style" tag-->

  <script> /*"script" is a tag holding a fucntion called "clickAlert". It's located here because functions need to be defined before the body*/
    function clickAlert(clickbox_el) {
      // alert("Hello"); /*"alert" is a javascript function that pops up a window with text in it*/
      //var el = document.getElementById("specialID"); // declare a variable called el, "getElementById" is a function that selects the element within the webpage (document) that has the special id
      //el.style.backgroundColor = "red"; //change the style, specifically the background color, of our variable called el to red.

      //var clickbox_el = document.getElementById("specialID"); //What's the element that was clicked?
      var backColor = clickbox_el.style.backgroundColor; //What's the background color of that element?
      var defaultColor = "black";

      if (backColor != "red") {
        defaultColor = "red";
      }

      clickbox_el.style.backgroundColor = defaultColor; //Change it!
    }
  </script>

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