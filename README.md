phundament 3.0-dev
==================
**alpha**


Requirements
------------
 *  PHP 5.3
 *  Yii 1.1.8


Get it!
-------
If you haven't done so already, get a fresh copy of Phundament 3:

### git clone
```
git clone --recursive https://github.com/schmunk42/phundament.git phundament
```

#### alternative: github download
https://github.com/downloads/schmunk42/phundament/3.0b-dev.zip


### Yii Framework
For running Phunament 3 you need to setup an standard Yii 
Web-Application skeleton.
As Yii is currently not bundled with Phundament 3 you have to use an 
exisiting Yii Framework installation to perform this task.

You may download a copy of Yii here: http://www.yiiframework.com/download/ or 
via git clone https://github.com/yiiext/yii.git /path/to/yii


Database Setup 
--------------
Create database and update credentials in **config/main.php** > components > db

```
edit phundament/protected/config/main.php
```


Setup Script
------------

```
./phundament/protected/setup-p3.sh "/path/to/yiic/command"
```

We'll use the existing yiic command to create the webapp skeleton.
**Note: This installation is therefore used by your Phundament 3 app.**

### Webapp Setup
#### Setup Script (recommended)
Anwser 'y' for yes when asked by running the setup script.
**Note: Do not overwrite existing files! Skip with 'Enter'.**


### Database Schema Setup
#### Setup Script (recommended)
Anwser 'y' for yes when asked by running the setup script.

##### Alternative: web-based installation
Go to http://localhost/phundament/index.php?r=p3admin
Click on 'Manage' in the list of found modules to setup the database schemas.
The following modules need a database schema: rights, user, p3widgets, p3media.
Click on 'migrate up 1 step' to create the database tables.


### Folder Permissions Setup
#### Setup Script (recommended)
Anwser 'y' for yes when asked by running the setup script.


### Open your app
http://localhost/phundament/index.php


Troubleshooting
---------------
Installation Guide is for Linux, OS X, UNIX.

Q: Alternative yiic command?
A: php5 -f ../yii-1.1.7.r3135/framework/yiic.php webapp .

Q: Parse error: syntax error, unexpected T_STRING, expecting T_OLD_FUNCTION ...?
A: adjust PHP path in yiic



Development Discussion
----------------------
http://www.yiiframework.com/forum/index.php?/topic/17591-planning-yii-cms-a-different-approach/




Best regards,
schmunk 

-- schmunk@usrbin.de - phundament.com
