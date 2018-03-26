<?php
// Array with names
$a[] = "CS: GO";
$a[] = "Fortnite";
$a[] = "DOTA 2";
$a[] = "Dishonored 2";
$a[] = "Dragonball Z";
$a[] = "Minecraft";
$a[] = "Borderlands";
$a[] = "Borderlands 2";
$a[] = "Borderlands: The Pre-sequel";
$a[] = "Portal";
$a[] = "Portal 2";
$a[] = "Super Mario Bros";
$a[] = "DayZ";
$a[] = "COD: WWII";
$a[] = "Arma 3";
$a[] = "Call of Duty: World at War";
$a[] = "Call of Duty: Black Ops";
$a[] = "World of Warcraft";
$a[] = "Hearthstone";
$a[] = "Heroes of The Storm";
$a[] = "Skyrim";
$a[] = "Fallout 4";
$a[] = "Garry's mod";
$a[] = "GTA V";
$a[] = "Star Citizen";
$a[] = "PlayersUnknown Battlegrounds";
$a[] = "PUBG";
$a[] = "Rust";
$a[] = "Thief";
$a[] = "Roblox";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name; // maak een nieuwe lege string
            } else {
                $hint .= "<br> $name";// voeg resultaten toe aan de string concatenat PHP is met een .
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
