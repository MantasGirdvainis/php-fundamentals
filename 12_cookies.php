<?php

/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the 
  remote browser and thus tracking or identifying return users. 
  You can set specific data to be stored in the browser, 
  and then retrieve it when the user visits the site again.
*/

//cookies issaugomi pas vartotoja.

//setinam cookies. pirma pavadinimas, antra value, trecia kiek laiko norim, kad galiotu. time() yra dabartinis laikas ir pridedam sekundemis viena diena.
// cookies issisaugo vartotojo narsykleje. galim surasti per application -> cokies.
setcookie('name', 'Mantas', time() + 86400);



//tikrinam ar yra cookies ir jeigu yra isspausdinam:
if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

//unsetinam cookies.

// setcookie('name', '', time() - 86400);



?>