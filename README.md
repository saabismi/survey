# Survey aka. Kyselysofta
A *very insecure* and simple web app for creating simple surveys. (I wrote this program as my first bigger coding project and it's very primitive.) This Readme file was mostly written in 2020 January, but has been updated a little.

Currently the program is only in Finnish but there will be English releases ~in the near future~ probably never.

~You need to have WinRAR to unpack the archive and then you should put the directory into your web server directory.~ Your web server has to be running PHP and MySQL. The successfully tested PHP version is 7.4.4. phpMyAdmin is recommended.

Clone the repo to your PHP server's files, for example XAMPP's htdocs folder, then the next step is to create the file data/conn_db.php.

Insert the following code in the previously created file:
```
<?php

$dbServername = "yourserver";
$dbUsername = "yourusername";
$dbPassword = "yourpassword";
$dbName = "kyselysofta";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
```

You need to replace "yourxxx" with your database server name/address, username and password. "kyselysofta" is the name of the database you will soon be creating, so do not change that value.

After that, go into data/generate_db.sql and copy everything in the document using Ctrl+A. Then go to phpMyAdmin (or your desired MySQL interface and paste everything you just copied there and press "Go".

## Add a question onto the page:

between #bodystart and #bodyend:

write question(id); with id being the kys_id in the kysymys-table. You do not need to add the answer choices on the page manually, they will be automatically fetched from the database.

## And to get a heading:

otsikko("title", "paragraph");

where title is the heading text and paragraph is an additional text with a smaller font

*PLEASE NOTE: this readme is heavily in a work-in-progress state and the program itself isn't even near a production ready state. This github page will (hopefully) be heavily improved in the future.*

This line is only a test! Jees jees! 

asd awd !! :D

