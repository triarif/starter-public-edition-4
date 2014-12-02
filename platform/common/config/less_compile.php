<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2013
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

/**
 * How to recompile these LESS-sources:
 *
 * Make sure the destination folders and files are writable.
 * Open a terminal at the folder platform/www/ and write the following command:
 *
 * php cli.php less compile
 *
 * If you want to compile only chosen sources, then write a command like this:
 *
 * php cli.php less compile bootstrap-3 bootstrap-3-min
 */

$config['less_compile'] = array(

    array(
        'name' => 'bootstrap-3',
        'source' => DEFAULTFCPATH.'assets/less/lib/bootstrap-3/bootstrap.less',
        'destination' => DEFAULTFCPATH.'assets/css/lib/bootstrap-3/bootstrap.css',
        'compress' => false
    ),
    array(
        'name' => 'bootstrap-3-min',
        'source' => DEFAULTFCPATH.'assets/less/lib/bootstrap-3/bootstrap.less',
        'destination' => DEFAULTFCPATH.'assets/css/lib/bootstrap-3/bootstrap.min.css',
        'compress' => true
    ),

    array(
        'name' => 'bootstrap-3-theme',
        'source' => DEFAULTFCPATH.'assets/less/lib/bootstrap-3/theme.less',
        'destination' => DEFAULTFCPATH.'assets/css/lib/bootstrap-3/bootstrap-theme.css',
        'compress' => false
    ),
    array(
        'name' => 'bootstrap-3-theme-min',
        'source' => DEFAULTFCPATH.'assets/less/lib/bootstrap-3/theme.less',
        'destination' => DEFAULTFCPATH.'assets/css/lib/bootstrap-3/bootstrap-theme.min.css',
        'compress' => true
    ),

    array(
        'name' => 'font-awesome-4',
        'source' => DEFAULTFCPATH.'assets/less/lib/font-awesome-4/font-awesome.less',
        'destination' => DEFAULTFCPATH.'assets/css/lib/font-awesome-4/font-awesome.css',
        'compress' => false
    ),
    array(
        'name' => 'font-awesome-4-min',
        'source' => DEFAULTFCPATH.'assets/less/lib/font-awesome-4/font-awesome.less',
        'destination' => DEFAULTFCPATH.'assets/css/lib/font-awesome-4/font-awesome.min.css',
        'compress' => true
    ),

    array(
        'name' => 'bootstrap-chosen',
        'source' => DEFAULTFCPATH.'assets/less/lib/bootstrap-chosen/bootstrap-chosen.less',
        'destination' => DEFAULTFCPATH.'assets/css/lib/bootstrap-chosen/bootstrap-chosen.css',
        'compress' => false
    ),
    array(
        'name' => 'bootstrap-chosen-min',
        'source' => DEFAULTFCPATH.'assets/less/lib/bootstrap-chosen/bootstrap-chosen.less',
        'destination' => DEFAULTFCPATH.'assets/css/lib/bootstrap-chosen/bootstrap-chosen.min.css',
        'compress' => true
    ),

);