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
        <h1>Yüz Şekliniz: Yuvarlak</h1>
        <img src=<?php echo "'".$_SESSION['resimuzanti']."'";?>" alt="">

        <h2>Yuvarlak Yüz Şekli İçin Öneriler</h2>
        <p>Yanakların ön plana çıktığı neredeyse dairesel formlu yüz tipleri, yuvarlak yüz sınıfına giriyor. Eğer sizin de yüzünüz bu şekildeyse yüzünüzün formuna uygun saç modellerine yönelerek en doğru kararı verebilirsiniz. Peki, yuvarlak yüz şekline göre saç modelleri hangileri? Saç modeline karar verirken favori modelinizden ziyade size en çok yakışacak olan modelde karar kılmalısınız. Yuvarlak yüzler için de bu model, genellikle başın üzerinde hacimlenen saç modelleri olarak öne çıkıyor. Zira bu modeller, yüzün yuvarlaklığını bir nebze alarak yüzü ovalleştiriyor. Yani aslında asimetrik saç modelleri, yuvarlak saçlılar için uygun. Ayrıca saçın uzunluğu da omuz hizasında olsa iyi olur. Ancak kısa saçlılar da üzülmesin. Onlar için de bir çözümümüz var. Katlı kesimler, kısa saçlara hacim vererek yüzü ovalleştirme konusunda son derece başarılı. Siz de küt saçlarınıza biraz kat attırarak uzun süre rahatlıkla kullanabilirsiniz. Son olarak eğer saçlarınız uzunsa kulak hizasında at kuyruğu yapmak da yuvarlak yüzlerde işe yarayacaktır. Saçınızı ortadan ikiye ayırın ve kulaklarla aynı hizaya gelecek şekilde toplayın. İşte bu kadar!</p>

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