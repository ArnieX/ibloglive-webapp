# ibloglive-webapp
Lightweight live blogging service client and server. Good for text and image live coverage of events, keynotes etc. it was developed for live coverage of Apple's events and keynotes. System was already tested under heavy load of more than 20000 concurrent viewers.

It is also suitable to be used as personal blogging solution as you can see on one of the links below.

    Until today this application is used by:
    http://www.appliste.cz [Apple news online magazine - Czech Republic, used for LIVE streams from Apple's events]
    http://www.jablickar.cz [Apple news online magazine - Czech Republic, used for LIVE streams from Apple's events]
    http://blog.geeksoul.cz [My personal blog - Czech Republic]

### How to install
    1, Copy admin and client folders to your server.
    2, Create database on your server named ibloglive (or name it as you like to)
    3, Create tables in your database admins, settings, stream, database model is in file databasemodel.md
    4, Change table name in client [client/ibloglive.html] and admin [admin/index.html]
    5, Change database login details in dbconnect.php in both admin and client folders
    6, Insert line into admins table username and password (in sha1)
    7, In your browser now open admin/index.html and login
    8, In your browser now open client/ibloglive.html
    9, Write message in admin adn you should see it shortly in client

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
