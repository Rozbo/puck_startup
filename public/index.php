<?php
/**
 * Created by rozbo
 * Date: 17/4/16
 * Time: 下午7:41
 */
$path=__DIR__."/..";
require "$path/vendor/autoload.php";
$app = new \puck\App($path);
$app->route->get("/","\\app\\controller\\Home@entry");
$app->configure("db");
$app->run();
