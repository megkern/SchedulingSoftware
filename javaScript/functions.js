function addUser(){
  var el = document.getElementById('user_input');
  alert(el.value);
}








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