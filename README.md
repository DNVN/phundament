phundament 3.0-dev
==================
**alpha**


Requirements
------------
 *  PHP 5.3
 *  Yii 1.1.8

### Tested Systems
 *  Mac OS X 10.6.8
 *  Debian 5.0

### Supported Databases
 *  MySQL 5
 *  SQLite 3

### License
 *  BSD


Get it!
-------
If you haven't done so already, get a fresh copy of Phundament 3:

### git clone
```
git clone --recursive git://github.com/schmunk42/phundament.git phundament
```

#### alternative: github download
https://github.com/downloads/schmunk42/phundament/3.0b-dev.zip


### Yii Framework
As Yii is currently not bundled with Phundament 3 you have to use an 
exisiting Yii Framework installation to perform this task.

You may download a copy of Yii here: http://www.yiiframework.com/download/ or 
via 
```
git clone https://github.com/yiiext/yii.git /path/to/yii
```

Database Setup 
--------------
Create database and update credentials in **config/main.php** > components > db

```
edit phundament/protected/config/main.php
```


Setup Script
------------

```
./phundament/protected/setup-p3.sh "/absolute/path/to/yiic/command"
```

We have to use an existing yiic command to create the webapp skeleton. 
This command will create *index.php* and *yiic.php* files which include your existing Yii framework code.

**Note: This installation is therefore used by your Phundament 3 app.**


### Webapp Setup
#### Setup Script (recommended)
**Note: Anwser only the first question 'Create a Web application' with 'y' for yes. 
Do not overwrite existing files! Skip '...overwrite?' with 'Enter'.**

##### Manual installation
```
/path/to/yiic webapp phundament
./phundament/protected/setup-p3.sh 
```

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

*Q: I have problems running yiic, is there an alternative?*  
A: You can run yiic also directly via PHP ```php5 -f /path/to/yii/framework/yiic.php webapp .```


*Q: I get this error ```Parse error: syntax error, unexpected T_STRING, expecting T_OLD_FUNCTION ...```?*  
A: Look like you're using a PHP 4 installation on the shell, you may adjust your PHP path in *yiic*



Additional Ressources
---------------------
 *  [Wiki Pages](https://github.com/schmunk42/phundament/wiki/_pages)
 *  [Development Discussion](http://www.yiiframework.com/forum/index.php?/topic/17591-planning-yii-cms-a-different-approach/)
 *  [Phundament Website](http://phundament.com)
 *  [Company Website](http://herzogkommunikation.de)


Contact
-------
phundament@usrbin.de

