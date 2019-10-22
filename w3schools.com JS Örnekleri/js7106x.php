<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars (trim($_POST ["isim"]));
    $comment = htmlspecialchars (trim($_POST ["yorum"]));
    if (!empty ($name) && !empty ($comment)) {
        echo "<p>Selam, <b>$name</b>. Yorumlarýnýzýn bize ulaþmasý baþarýlý.<p>";
        echo "<p>Gönderdiðiniz yorum: <b>$comment</b></p>";
    }else {echo "<p>Lütfen formdaki heriki veri giriþ alanýný da doldurunuz!</p>";}
}else {echo "<p>Bir hata oluþtu. Lütfen tekrar deneyin.</p>";}
?>