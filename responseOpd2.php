<?php
/**
 * Created by PhpStorm.
 * User: Melih
 * Date: 3-4-2019
 * Time: 09:57
 */


foreach ($_POST['apen'] as $aap){
    echo "<img src='img/".$aap.".jpg'>";
}