<?php
/**
 * Created by PhpStorm.
 * User: Melih
 * Date: 3-4-2019
 * Time: 09:33
 */
if ($_POST['voornaam'] == "") {
    echo "Je nog een naam invullen! " ;
    echo "<a href=\"formulier.html\"> Terug naar het formulier  <br><a/>";

}if ($_POST['adres'] == "") {
    echo "Je nog een adres invullen!";
    echo "<a href=\"formulier.html\"> Terug naar het formulier  <br><a/>";

}if ($_POST['email'] == "") {
    echo "Je nog een email invullen!";
    echo "<a href=\"formulier.html\"> Terug naar het formulier  <br><a/>";

}if ($_POST['wachtwoord'] == "") {
    echo "Je nog een wachtwoord invullen!";
    echo "<a href=\"formulier.html\"> Terug naar het formulier <a/>";
}

