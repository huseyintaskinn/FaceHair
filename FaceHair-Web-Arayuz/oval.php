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
        <h1>Yüz Şekliniz: Oval</h1>
        <img src=<?php echo "'".$_SESSION['resimuzanti']."'";?>" alt="">

        <h2>Oval Yüz Şekli İçin Öneriler</h2>
        <p>Yanlardan basık oval yüz tipinde olanlar, saç modeli çeşitliliği konusunda son derece şanslı. Kısa, uzun, spor, klasik, dalgalı, düz, açık ya da toplu... Oval yüz tipine göre saç modelleri bu anlamda oldukça fazla seçeneğe sahip. Tüm bu modeller arasında en çok dikkat çekeni ise yumuşak dalgalarla hareketlenen omuz hizasındaki saçlar olacaktır. Saçınızı ortadan ayırıp geniş dalgalar verdiğinizde oval yüzünüze harika bir romantiklik katmayı başarabilirsiniz. Ayrıca eğer saçlarınız küt kesimse uçlara uygulanan içe ve dışa şekillendirmeler ile tarzınıza dinamizm katmayı deneyin. Muhteşem görüneceksiniz! Son olarak iddialı görünmeyi sevenlerdenseniz saçlarınızı kısacık kestirmek de size yakışacaktır. Çoğunlukla sadece oval yüze sahip kişilere yakışan erkek kesim saç modellerinde farklı renkler de deneyerek özgünlüğün tadını çıkarabilirsiniz.</p>

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