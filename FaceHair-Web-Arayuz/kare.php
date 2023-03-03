<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaceHair</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script defer>
        $( document ).ready(function() {
            document.querySelector('[alt="www.000webhost.com"]').parentElement.parentElement.remove()
        });
    </script>
</head>
<body onload="bodyLoad()">
    <a class="logo" href="index.php">
        <img src="logo.png" alt="logo">
    </a>
    <div class="kutu">
        <h1>Yüz Şekliniz: Kare</h1>
        <img src=<?php echo "'".$_SESSION['resimuzanti']."'";?>" alt="">

        <h2>Kare Yüz Şekli İçin Öneriler</h2>
        <p>Çene kemiklerinin ön planda olduğu kare yüz tipine sahip kişiler, doğru saç modelini kullanarak harika görüntüler elde edebilir. Kare yüz tipine göre saç modelleri arasında, dalgalı ya da düz olması fark etmeksizin uzun saçlar yer alıyor. Saçlarınızı omuz hizasında ya da omuzlardan aşağıda konumlandırırsanız yüzünüzü daha ince gösterme konusunda başarılı sonuçlar elde edebilirsiniz. Angelina Jolie, bu yüz tipi için harika bir örnek. Köşeli çene ve geniş alınla öne çıkan bu yüz tipinde kullanılacak uzun saçlar, dikkati yüzden alıp aşağılara çekeceği için oldukça kullanışlı.</p>

        <h2>Örnek Saç Modelleriniz</h2>
        <div class="kutu2">
            <?php 
                if ($_SESSION['birlestirilmis1'] != "Hata" and 
                    $_SESSION['birlestirilmis2'] != "Hata" and
                    $_SESSION['birlestirilmis2'] != "Hata"){
                    echo '<img src="'.$_SESSION['birlestirilmis1'].'" alt="">';
                    echo '<img src="'.$_SESSION['birlestirilmis2'].'" alt="">';
                    echo '<img src="'.$_SESSION['birlestirilmis3'].'" alt="">';
                } else {
                    echo "<p>Resimdeki yüz algılanamadığı için öneri sunulamıyor.</p>";
                }
            ?>   
        </div>
    </div>
    
</body>
</html>