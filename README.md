# p-framework

## About pframework
> Note: It contains the core code of the pframework framework. Its built and tested on PHP version 7.3
###### Pframework is a high-level PHP Web framework that encourages rapid development and clean, pragmatic design.


## Basic features of pframework
- A very lightweight and fast, simple and the source is very easy to modify.
- Bootstrap framework is pre-included, you can start designing from beginning.


###### Routes setting file
-To add a route URL
-File : /routes.php
-Syntax: Route::get('PATH', 'ControllerName@functionName');

###### Database configuration file
-/config/conf.php
-You can also add additional configurations here

###### Controller directory
-File : /app/controllers/..
-In controllers directory you can create multiple controllers.
- You can pass data from controller to view by following way.
-return ["viewName", array()];

###### View directory
-/app/views/
-In views directory you can create a view file with .php extension.

##Thanks for checking it out.

>start with
```
git clone git@github.com:arbindtechguy/pframework.git
```
