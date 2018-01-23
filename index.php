<?php
/**
 * Created by IntelliJ IDEA.
 * User: hofma
 * Date: 23.01.2018
 * Time: 08:40
 */

namespace hofma\ajaxue;
require_once __DIR__.'/vendor/autoload.php';

use \HTL3R\Flags\Flags as FlagTypes;
use \HTL3R\Flags\Interfaces as Interfaces;

$flag[] = new FlagTypes\RectangleFlag("Coole Menschen Land", 300, 50, 20, "#53f442");
$flag[] = new FlagTypes\RectangleFlag("blöde Menschen Land", 300, 50, 20, "#f4c842");
$flag[] = new FlagTypes\RectangleFlag("normale Menschen Land", 300, 50, 20, "#4162f4");


foreach ($flag as $singleFlag){
    /* @var $flag interfaces\FlagInterface*/
    echo $singleFlag."<br/>".$singleFlag->calculateArea()."<br/>"."<br/>";
}