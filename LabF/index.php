<?php

/*
 * Author: Corey Anderson and Ian Hays 
 * Date: April 1, 2018
 * Name: index.php
 * Description: The homepage
 */

//load application settings
require_once ("application/config.php");

//load autoloader
require_once ("vendor/autoload.php");

//load the dispatcher 
new Dispatcher();

