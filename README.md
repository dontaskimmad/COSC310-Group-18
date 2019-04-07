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

INDIVIDUAL:
I’ve added more topics and responses for the bot. Furthermore I also increased the “I don’t understand” response so that the bot becomes less repetitive if he does not understand what the user wants. Next I also implemented a spelling check, which simply browses an external dictionary and checks whether each word in the user response is in that dictionary. This simpler method is chosen over Porter Stemming since the result of using Porter Stemming is lackluster at best. The GUI is unchanged from the previous version as it already fits the requirements, and thus does not require editing.

Dictionary is taken from:
https://github.com/dwyl/english-words

New Features:
-Added more keywords and responses (age, family/siblings, hobbies, etc) This is done to flesh out the bot's identity with more personal information about itself.
This also allows the bot to respond to more topics which will streamline the chatting experience.
 
-Added a spell check algorithm. This is done so that bot can process user input and respond appropriately if that input had any spelling errors. This allows the bot to communicate and understand the user better.
 

-Added more responses for when the bot doesn’t understand what the user is talking about. This lessens the repetition in conversation in situation where the user asks topics that are beyond the bot’s understanding.  

(Images are located in the Canvas PDF submission)



Wiliam Setiawan
33357161
