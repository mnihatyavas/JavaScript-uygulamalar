<?php
header ("Content-Type: application/json; charset=ISO-8859-9");
$nesne = json_decode ($_GET ["x"], false); // veya $_POST
$baðlantý = new mysqli ("sunucum", "kullanýcým", "þifrem", "Northwind");
$ifade = $baðlantý->prepare ("SELECT isim FROM ? LIMIT ?");
$ifade->bind_param ("ss", $nesne->table, $nesne->limit);
$ifade->execute();
$sonuç = $ifade->get_result();
$çýktý = $sonuç->fetch_all (MYSQLI_ASSOC);
echo json_encode ($çýktý);
?>