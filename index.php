<?php
ini_set("display_errors", 1);
error_reporting(-1);

use Ivanov\Square;
use Ivanov\MyLog;
use Ivanov\IvanovException;

require_once 'core/LogInterface.php';
require_once 'core/LogAbstract.php';
require_once 'core/EquationInterface.php';
require_once 'Ivanov/Line.php';
require_once 'Ivanov/MyLog.php';
require_once 'Ivanov/Square.php';
require_once 'Ivanov/IvanovException.php';

try {
	MyLog::log("Версия программы : ".trim(file_get_contents('version')));
    echo "Enter 3 numbers\n\r";

    $a = (int)readline();
    $b = (int)readline();
    $c = (int)readline();

    MyLog::log("The equation is introduced:" . " $a*x^2 + $b*x + $c = 0");
    $test = new Square();
    $r = $test->solve($a, $b, $c);
    MyLog::log("Roots: " . implode(", ", $r));

} catch (IvanovException $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();

