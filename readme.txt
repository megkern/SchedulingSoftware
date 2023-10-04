
install git
https://github.com/git-for-windows/git/releases/download/v2.42.0.windows.2/Git-2.42.0.2-64-bit.exe
objects.githubusercontent.com

install vscode
https://code.visualstudio.com/

then git clone this repo onto your computer using github desktop

open git bash window

$ cd C/Users/megan/Desktop/GitOut

$ ls

$ code SchedulingSoftware (it should open the repo in vscode)

## when you only use HTML and Javascript
--------------------------------------------------------------
open index.html in your web browser by double clicking it

update the words in the index.html and

git add *
git commit -m "changing words"
git push

## When you use HTML, Javascript, AND PHP
-------------------------------------------------------------
-Install xampp and setup phpMyAdmin
-cd C:/xampp/htdocs
-git clone <this repo>
-start xampp control panel apache and mysql
-view in browser at: http://localhost/SchedulingSoftware
-view mysql in browser at http://localhost/phpmyadmin/
-------------------------------------------------------------
# Install XAMPP
-------------------------------------------------------------
Install Apache Friends: 
https://www.apachefriends.org/download.html

( I downloaded xampp-windows-x64-8.2.4-0-vs16-installer.exe 
  from https://xampp.informer.com/download/#downloading )
-------------------------------------------------------------
# Setup PhpMyAdmin
-------------------------------------------------------------
-Go to http://localhost/phpmyadmin/
-Create a new database called "SchedulingSoftware"
-Create a new user called "master_software_scheduler" password "pepperoncini100!"
-Copy text from SchedulingSoftware/setup_queries/phpMyAdminQuery.sql
and paste into phpmyAdmin "SchedulingSoftware" database query window


