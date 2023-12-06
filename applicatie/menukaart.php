<?php

$menu = [
  "Eten" => [
    "Shoarma" => 6.51,
    "Appels" => 10.95,
    "Terbouleh" => 8.95,
  ],
  "Drinken" => [
    "Cola" => 2.00,
    "Argran" => 2.30,
    "Fernandes" => 2.60,
    "Bier" => 5.50,
  ]
  ];

foreach($menu as $menu_item => $row)
{
echo $menu_item . "<br>";
foreach($row as $naam => $prijs)
{
    echo $naam . " " . $prijs . "<br>";
}
};

?>

