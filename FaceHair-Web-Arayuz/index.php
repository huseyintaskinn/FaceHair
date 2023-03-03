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
        
        function showDiv() {
           document.getElementById('loader').style.display = "block";
        }
    </script>
    <style>
        .loader {
          display: none;
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid black;
          width: 120px;
          height: 120px;
          -webkit-animation: spin 2s linear infinite; /* Safari */
          animation: spin 2s linear infinite;
          margin-top: 60px;
        }
        
        /* Safari */
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }
        
        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body onload="bodyLoad()">
    <a class="logo" href="index.php">
        <img src="logo.png" alt="logo">
    </a>
    <form enctype="multipart/form-data" action="sonuc.php" method="POST">
        <label>Yüzünüzün önden çekilmiş bir fotoğrafını yükleyiniz.</label>
        <input class="file" type="file" name="gorsel" accept="image/jpeg">
        <input class="button" type="submit" onclick="showDiv()" value="Bana Uygun Saç Modelini Bul">
    </form>
    <div id='loader' class="loader"></div>
</body>
</html>