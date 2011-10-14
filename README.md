Phundament 3-0.1-RC1
====================

**beta**

Phundament 3 is an application foundation built upon a set if independent Yii modules and extensions such as [user](http://www.yiiframework.com/extension/yii-user/), [rights](http://www.yiiframework.com/extension/rights/), [yiiext](http://code.google.com/p/yiiext/), [gtc](https://github.com/schmunk42/gii-template-collection), ckeditor, jquery-file-upload, p3widgets and p3media.

The combination of p3widgets and p3media provides basic content management system (CMS) features, like dynamic widget creation and file management.  
Combined in ckeditor, p3media acts as a ckfinder plugin which gives you the full power of HTML and media files for content creation via p3widgets.  

It comes with a very minimalistic setup which integrates perfectly into an Yii web application skeletion and installs with one single command.
[More features...](https://github.com/schmunk42/phundament/wiki/Features)


Try a demo
----------

[Demo Phundament 3-0.1-RC1](http://demo.phundament.com/3.0-dev)  
Login with editor / editor


What is Phundament 3?
---------------------

 1.  Not a CMS *for those developers who wouldn't read on otherwise ;)*
 2.  Yii Framework based set of modules
 3.  Solid web application foundation


Requirements
------------

 *  PHP 5.3
 *  [Yii Framework] (http://www.yiiframework.com/) 1.1.8
 *  ImageMagick or GDlib

### Tested Systems
 *  Mac OS X 10.6.8
 *  Debian 5,6

### Supported Databases
 *  MySQL 5
 *  SQLite 3

### License
 *  BSD


Usage
-----

### Download

#### Phundament 3
If you haven't done so already, a fresh copy is here  
**[Get Phundament 3](https://github.com/schmunk42/phundament/downloads)**
  
  * Application Skeleton [github](https://github.com/schmunk42/phundament)
  * Modules [gitmodules](https://github.com/schmunk42/phundament/blob/master/.gitmodules)

### Yii Framework
If you do not have an existing installation  
**[Get Yii Framework 1.1.8](http://yii.googlecode.com/files/yii-1.1.8.r3324.tar.gz)**


### Setup
```
phundament/protected/setup-p3.sh "path/to/yiic/command"
```  
*[Setup script source](https://github.com/schmunk42/phundament/blob/master/protected/setup-p3.sh)*


### Open
http://localhost/phundament


### First Steps
  * Login with admin/admin
  * Click on 'Upload'
  * Upload some images
  * Click on 'Widget Demo'
  * Hover container and click on '+'
  * Edit HTML, you can select from your uploaded images by clicking on 'Browse Server' in the image dialog.
  * Save widget


*Installation Guide is for Linux, OS X, UNIX.*

See also [p3widgets](http://www.yiiframework.com/extension/p3widgets/).

Coming soon: [Quick Start](https://github.com/schmunk42/phundament/wiki/Quick-Start)


Resources
---------

### Developer
 *  [Yii Forum](http://www.yiiframework.com/forum/index.php?/topic/24696-extension-phundament/)
 *  [git clone --recursive](https://github.com/schmunk42/phundament/wiki/Installation) with submodules
 *  [Source Code](https://github.com/schmunk42/phundament/)


### Help needed?
 *  [Report a bug](https://github.com/schmunk42/phundament/issues)
 *  [FAQ / Troubleshooting](https://github.com/schmunk42/phundament/wiki/FAQ)


### Additional Ressources
 *  [Yii Extension Page](http://www.yiiframework.com/extension/phundament/)
 *  [Downloads](https://github.com/schmunk42/phundament/downloads)
 *  [Quick Start Guide](https://github.com/schmunk42/phundament/wiki/Quick-Start)
 *  [Wiki](https://github.com/schmunk42/phundament/wiki/)
 *  [Development Discussion](http://www.yiiframework.com/forum/index.php?/topic/17591-planning-yii-cms-a-different-approach/)
 *  [Demo Website](http://demo.phundament.com/3.0-dev/)
 *  [Phundament Website](http://phundament.com)
 *  [Company Website](http://herzogkommunikation.de)


### Contact
 *  phundament@usrbin.de
 *  [Twitter](http://twitter.com/#!/phundament)
