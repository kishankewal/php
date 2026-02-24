<?php
namespace App\Utils;

trait Mascilinous {
    public static function getIpAddress() : string {
        try {
            if (!empty($_SERVER['HTTP_CLIENT_IP']) && validate_ip($_SERVER['HTTP_CLIENT_IP'])) {
                return $_SERVER['HTTP_CLIENT_IP'];
            }
            if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
                    $iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
                    foreach ($iplist as $ip) {
                        if (validate_ip($ip))
                            return $ip;
                    }
                } else {
                    if (validate_ip($_SERVER['HTTP_X_FORWARDED_FOR']))
                        return $_SERVER['HTTP_X_FORWARDED_FOR'];
                }
            }
            if (!empty($_SERVER['HTTP_X_FORWARDED']) && validate_ip($_SERVER['HTTP_X_FORWARDED']))
                return $_SERVER['HTTP_X_FORWARDED'];
            if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && validate_ip($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
                return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
            if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && validate_ip($_SERVER['HTTP_FORWARDED_FOR']))
                return $_SERVER['HTTP_FORWARDED_FOR'];
            if (!empty($_SERVER['HTTP_FORWARDED']) && validate_ip($_SERVER['HTTP_FORWARDED']))
                return $_SERVER['HTTP_FORWARDED'];
            return isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '127.0.0.1';
        } catch (Exception $ex){
            throw $ex;
        }
    }
}