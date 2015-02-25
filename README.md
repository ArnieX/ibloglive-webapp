# ibloglive-webapp
<b>Lightweight LIVE Blogging</b> application <b>client</b> and <b>server</b>. Good for text and image live coverage of events, keynotes etc. it was developed for live coverage of Apple's events and keynotes. Solution was already tested under heavy load of more than 20000 concurrent viewers.

Application is fully customisable, client side may be changed with basic knowledge of CSS and HTML. It is designed in a way that client design is very lightweight and is designed to be loaded inside IFRAME on your target site ie. your blog, magazine etc.

It is also suitable to be used as personal blogging solution as you can see on one of the links below.

Until today this application is used by:<br>
http://www.appliste.cz [Apple news online magazine - Czech Republic, used for LIVE streams from Apple's events]<br>
http://www.jablickar.cz [Apple news online magazine - Czech Republic, used for LIVE streams from Apple's events]<br>
http://blog.geeksoul.cz [My personal blog - Czech Republic]

### Prerequisities

        - PHP at least 5 processes better to have 10 or more, depends on how many concurrent viewers you expect
        - MySQL Database

Application is able to run on many hosting providers. But for better performace it is recommended to have own server either dedicated or VPS, or run it on some cloud based servers like Amazon or alike. All depends on how many concurrent viewers you expect. With every 5 PHP processes you might expect handling around 10000 concurrent viewers.

### How to install
1, Copy <b>admin</b> and <b>client</b> folders to your server.<br>
2, Create database on your server named ibloglive (or name it as you like to)<br>
3, Create tables in your database <b>admins</b>, <b>settings</b>, <b>stream</b>, database model is in file databasemodel.md<br>
4, Change table name in client <b>[client/ibloglive.html]</b> and admin <b>[admin/index.html]</b><br>
5, Change database login details in <b>dbconnect.php</b> in both admin and client folders<br>
6, Insert line into <b>admins</b> table username and password <b>[password as sha1 hash]</b><br>
7, In your browser now open <b>admin/index.html</b> and login<br>
8, In your browser now open <b>client/ibloglive.html</b><br>
9, Write message in admin and you should see it shortly in client<br>

### What I expect from contributors
This application was barely perfect, but it always made a good way throught extreme load during Apple's events. Our top load was above 20000 concurent clients and that is quite good as such. But still as I said this application is barely perfect, it lacks many functionality which can go in it.
 
    Some things that may be good to have
    1, Possibility to change messages [it is only possible to remove and rewrite them]
    2, Improve speed, improve way of getting incremental updates from server, used way is probably not the most efficient one
    3, Improve overall speed, means that for sure PHP scripts can be much more efficient, or maybe it is better to use SQLite instead of MySQL, I don't know I have no experiences with different DB systems
    4, Improve admin to give more options better and more efficient, faster editing tools with maybe live preview etc.
    5, In administration add possibility to start and manage all running streams on the fly and make it more user friendly to start and stop streams. This will also help for making application a lot more maintenance-free.

### Feedback
Please give any feedback how did you use this application, how did you like it and so on. I'm aware that such solution is welcomed as many servers like to do live streams but many good solutions are very expensive.

Twitter: @ArnieXs<br>
E-mail: arniex@gmail.com
