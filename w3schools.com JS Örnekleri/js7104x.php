<?php
$name = (isset($_POST['isim'])) ? $_POST['isim'] : 'no name';
$computedString = "Hi, " . $name . "!";
array = ['isim' => $name, 'computedString' => $computedString];
echo json_encode($array);
?>