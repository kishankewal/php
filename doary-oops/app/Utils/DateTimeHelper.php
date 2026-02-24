<?php
namespace App\Utils;

trait DateTimeHelper {
    public static function getCurrentTimeStamp() {
        echo "\n";
        echo sprintf("Class %s", __CLASS__);
        echo "\n";
        echo sprintf("Trait %s", __TRAIT__);
        echo "\n";
        echo sprintf("Directory %s", __DIR__);
        echo "\n";
        echo sprintf("File %s", __FILE__);
        echo "\n";
        echo sprintf("LINE %s", __LINE__);
        echo "\n";
        echo sprintf("Namespace %s", __NAMESPACE__);
        echo "\n";
        echo sprintf("Method %s", __METHOD__);
        echo "\n";
        return time();
    }
}