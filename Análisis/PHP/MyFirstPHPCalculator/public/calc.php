<?php

require '../src/class/MyFirstClass.php';

use MyFirstPHPCalculator\MyFirstClass;


try {
    $variable1 = (float) $_GET['variable1'];
$variable2 = (float) $_GET['variable2'];
$Operation = (integer) $_GET['Operation'];

$calc = new MyFirstClass();
$calc ->setVariable1($variable1);
$calc->setVariable2($variable2);
$message=null;
    if ($Operation === 1){
    $message = 'The sum between ' .$variable1.  ' and '  .$variable2 . ' is = ' .$calc->sum();
} else if ($Operation === 2){
     $message = ' The res between ' .$variable1.  ' and ' .$variable2 . ' is = ' .$calc->rest();
} else if ($Operation === 3){
     $message = ' The mul ti between ' .$variable1.  ' and ' .$variable2 . ' is = ' . $calc->mult();
} elseif ($Operation === 4) {
 $message = ' The div between ' . $variable1 . ' and ' .$variable2 . ' is = ' . $calc->div();
} elseif ($Operation === 5) {
    $message =' The log the arg ' .$variable1. ' and the base ' . $variable2. ' is = ' . $calc->log();
} elseif ($Operation ===6) {
    $message =' The number  ' .$variable1. '  squared is ' .$calc->squared();
} elseif ($Operation ===7) {
    $message  = ' The number ' .$variable1. ' elevated ' .$variable2. ' is = ' .$calc->pow();

} elseif ($Operation ===8) {
    $message  = ' The number ' .$variable1. ' its squared root is = ' .$calc->sqrt();
}elseif ($Operation ===9) {
    $message  = ' The number ' .$variable1. ' the root ' .$variable2.' is = ' .$calc->root();
}elseif ($Operation ===10) {
    $message  = ' The number ' .$variable1. ' the modul the div ' .$variable2.' is = ' .$calc->divm();
}
else {
    $message = 'Error:  the operation is  invalid';
}
} catch (Exception $exc) {
    if ($exc->getCode()===1){
        $message= $exc->getMessage();
 
    }else{
        echo 'Error';
        echo $exc->getMessage();
        echo '<br>';
        echo $exc->getTraceAsString();
        
    }
} finally {
    if ($message !==null){
        require 'index.php';
    }
    
}

