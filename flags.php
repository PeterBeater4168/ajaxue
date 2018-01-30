<?php
/**
 * Created by IntelliJ IDEA.
 * User: hofma
 * Date: 23.01.2018
 * Time: 08:40
 */



namespace hofma\ajaxue;
require_once __DIR__.'/vendor/autoload.php';

header('Content-Type: application/json');

use \HTL3R\Flags\Flags as FlagTypes;
use \HTL3R\Flags\Interfaces as Interfaces;

$flag[] = new FlagTypes\RectangleFlag("Coole Menschen Land", 300, 50, 20, "#53f442");
$flag[] = new FlagTypes\RectangleFlag("blöde Menschen Land", 300, 50, 20, "#f4c842");
$flag[] = new FlagTypes\RectangleFlag("normale Menschen Land", 300, 50, 20, "#4162f4");


function toJson($flag) : String
{
    $returnValue="";
    $returnValue=$returnValue."{";
    $returnValue=$returnValue.'"name":"'.$flag->getName().'",';
    $returnValue=$returnValue.'"price":"'.$flag->getPrice().'",';
    $returnValue=$returnValue.'"width":"'.$flag->getWidth().'",';
    $returnValue=$returnValue.'"height":"'.$flag->getHeight().'",';
    $returnValue=$returnValue.'"color":"'.$flag->getColor().'"';
    $returnValue=$returnValue."}";

    return $returnValue;
}


echo json_encode(toJson($flag[0]));

/*foreach ($flag as $singleFlag){
    /* @var $flag interfaces\FlagInterface*/
    /*echo $singleFlag."<br/>".$singleFlag->calculateArea()."<br/>"."<br/>";
}
*/