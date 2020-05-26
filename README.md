# Survey aka. Kyselysofta
A simple web-based program for creating simple surveys.

Currently the program is only in Finnish but there will be English releases in the near future.

You need to have WinRAR to unpack the archive and then you should put the directory into your web server directory. Your web server has to be running PHP and MySQL. The successfully tested PHP version is 7.4.4. phpMyAdmin is recommended.

The first thing you should do after unpacking the archive into the desired directory is to edit data/conn_db.php.

You need to replace "yourxxx" with your database server name/address, username and password. "kyselysofta" is the name of the databse you will soon be creating, so do not change that value.

After that, go into data/generate_db.sql and copy everything in the document using Ctrl+A. Then go to phpMyAdmin (or your desired MySQL interface and paste everything you just copied there and press "Go".

Add a question onto the page:

between #bodystart and #bodyend:

write question(id); with id being the kys_id in the kysymys-table.

And to get a heading:

otsikko("title", "paragraph");

where title is the heading text and paragraph is an additional text with a smaller font

PLEASE NOTE: this readme is heavily in a work-in-progress state and the program itself isn't even near a production ready state. This github page will (hopefully) be heavily improved in the future.
