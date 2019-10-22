<?php
if (isset($_GET ["fname"]) && isset ($_GET ["lname"])) {
    $fname = htmlspecialchars ($_GET ["fname"]);
    $lname = htmlspecialchars ($_GET ["lname"]);
    $fullname = $fname . " " . $lname;
    echo "Selam, $fullname! Sitemize hoþgeldiniz.";
}else {echo "Ordakilere merhaba! Sitemize hoþgeldiniz.";}
?>