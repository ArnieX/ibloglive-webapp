# ibloglive-webapp
<b>Lightweight LIVE Blogging</b> application <b>client</b> and <b>server</b>. Good for text and image live coverage of events, keynotes etc. it was developed for live coverage of Apple's events and keynotes. Solution was already tested under heavy load of more than 20000 concurrent viewers.

It is also suitable to be used as personal blogging solution as you can see on one of the links below.

    Until today this application is used by:
    http://www.appliste.cz [Apple news online magazine - Czech Republic, used for LIVE streams from Apple's events]
    http://www.jablickar.cz [Apple news online magazine - Czech Republic, used for LIVE streams from Apple's events]
    http://blog.geeksoul.cz [My personal blog - Czech Republic]

### How to install
    1, Copy <b>admin</b> and <b>client</b> folders to your server.
    2, Create database on your server named ibloglive (or name it as you like to)
    3, Create tables in your database <b>admins</b>, <b>settings</b>, <b>stream</b>, database model is in file databasemodel.md
    4, Change table name in client <b>[client/ibloglive.html]</b> and admin <b>[admin/index.html]</b>
    5, Change database login details in <b>dbconnect.php</b> in both admin and client folders
    6, Insert line into <b>admins</b> table username and password <b>[password as sha1 hash]</b>
    7, In your browser now open <b>admin/index.html</b> and login
    8, In your browser now open <b>client/ibloglive.html</b>
    9, Write message in admin and you should see it shortly in client

### What I expect from contributors
  This system was barely perfect, but it always made a good way throught extreme load during Apple's events. Our top load was above 20000 concurent clients and that is quite good as such. But still as I said this system was barely perfect, it lacks many functionality which can go in there.
 
    Some things that may be good to have
    1, Possibility to change messages [it is only possible to remove and rewrite them]
    2, Improve speed, improve way of getting incremental updates from server, used way is probably not efficient enough.
    3, Improve overall speed, means that for sure PHP scripts can be much more efficient, or maybe it is better to use SQLite instead of MySQL, I don't know I have no experiences with different DB systems
    3, Improve admin to give more options better and more efficient, faster editing tools with maybe live preview.
    4, In administration add possibility to start and manage all running streams on the fly and make it more user friendly to start and stop streams. This will also help for making system a lot more maintenance-free.

### Feedback
Please give any feedback how did you use this application, how did you like it and so on. I'm aware that such solution is welcomed as many servers like to do live streams but many good solutions are very expensive.

Twitter: @ArnieXs<br>
E-mail: arniex@gmail.com
