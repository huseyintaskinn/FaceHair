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
        <h1>Yüz Şekliniz: Uzun</h1>
        <img src=<?php echo "'".$_SESSION['resimuzanti']."'";?>" alt="">

        <h2>Uzun Yüz Şekli İçin Öneriler</h2>
        <p>Uzunluğu, genişliğinden büyük olan yüz tipleri, bu sınıfta yer alıyor. Eğer siz de uzun yük şekline sahipseniz saçlarınızı hacimli ve dalgalı kullanarak yüzünüzü, olduğundan daha oval gösterebilirsiniz. Upuzun ya da kısacık düz saçlar, yüzünüzü daha da uzatacağı için pek size göre değil. Yüzünüzü yuvarlak göstermeye yardımcı olacak kaküller ya da yandan perçemler, uzun yüz şekline göre saç modellerinde denenebilecek ayrıntılardan. Ancak, burada dikkat etmeniz gereken bir konu var: Saçlarınızın ten renginizden koyu bir tonda olması gerektiği. Zira saç renginiz teninizden daha açık olursa yüzünüzü uzun gösterme çabanız boşa gidecektir. İlla saçlarınızı açık renkte kullanmak isterseniz tercihinizi, gölgeli ya da ombreli saçlardan yana kullanmayı deneyin!</p>

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