<?php
class Route
{
    public static $ValidRoutes = [];
    public static function set($Route, $Function) {
        self::$ValidRoutes[] = $Route;
        if($_GET['url'] == $Route) {
            $Function->__invoke();
        }
    }
}