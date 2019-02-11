# COSC310-Group-18
Group project for COSC 310, Group 18

You will need to download XAMPP to access the php and sql. Once you run XAMPP
enable apache and mysql. Clone the repository into your xampp/htdocs folder
and then you can run the webpage by going to:
http://localhost/COSC310-Group-18/src/website/php/homepage.php/

Database contains files regarding Dictionary Database
To download database copy and paste sql code into: 
localhost/phpmyadmin

There is a READ ME in database which explains how to change your php file upload
settings. This is dependent on your computer and is necessary to download the
database since it's such a large file

Website contains files regarding the display of the bot, as well as the bots code
CSS contains styling for the website

AccessDB.php lets you access the dictionary database from php,
homepage.php displays the the website,
submit.php returns the bots response to the users text

In scripts submit.js sends the users text to submit.php and turns the response 
from bot as well as the users message into HTML
