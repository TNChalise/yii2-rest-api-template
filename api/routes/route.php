<?php
/**
 * Created by PhpStorm.
 * User: tnchalise
 * Date: 11/4/16
 * Time: 2:45 PM
 */


/**
 * Return combination of route rules, separates ugly addition of rules in main.php
 */
return [
    require(__DIR__ . '/country/country.php'),
    require(__DIR__ . '/user/user.php')
];