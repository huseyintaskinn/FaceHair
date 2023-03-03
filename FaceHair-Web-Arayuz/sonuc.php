<?php
    session_start();

	if ($_FILES["gorsel"]["error"] == UPLOAD_ERR_INI_SIZE) {
		exit;
	}

	if ($_FILES["gorsel"]["error"] == UPLOAD_ERR_NO_FILE) {

	}

	//Dosya yüklerken hata oluştu mu?
	if ($_FILES["gorsel"]["error"] != 0) {

	}

	// Yüklenen resim dosyası mı kontrol et!
	// Yüklenen dosyanın tipi ile izin verilen dosya tiplerini karşılaştır.
	if ($_FILES["gorsel"]["type"] == "image/jpeg" or $_FILES["gorsel"]["type"] == "image/png") {

    }
    else {
        exit;
	}

	// Dosyayı sunucuya yükleyelim
	$hedefKlasor = "yuklenenler/";
	$hedefKlasor .= time();
	$hedefKlasor = $hedefKlasor.basename($_FILES['gorsel']['name']);
	//basename ile sadece dosyanın ismi alınıyor.
	if (move_uploaded_file($_FILES["gorsel"]['tmp_name'], $hedefKlasor))
	{
		// devam eder
	} else {
        echo '<script>
                window.location.href = "http://facehair.online/";
              </script>';
		exit;
	}

	$arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );  

    $url = 'https://d28b-34-75-206-44.ngrok.io/sonuclar?url=http://facehair.online/'.$hedefKlasor;
    $json = file_get_contents($url, false, stream_context_create($arrContextOptions));
    $json_data = json_decode($json, true);
    
    $name1 = 'yuklenenler/'.time().'birlestirilmis1.jpg';
    $data = base64_decode($json_data["birlestirilmis1"]);
    file_put_contents($name1, $data);
    
    $name2 = 'yuklenenler/'.time().'birlestirilmis2.jpg';
    $data = base64_decode($json_data["birlestirilmis2"]);
    file_put_contents($name2, $data);
    
    $name3 = 'yuklenenler/'.time().'birlestirilmis3.jpg';
    $data = base64_decode($json_data["birlestirilmis3"]);
    file_put_contents($name3, $data);

    $_SESSION['resimuzanti'] = $hedefKlasor;
    $_SESSION['birlestirilmis1'] = $name1;
    $_SESSION['birlestirilmis2'] = $name2;
    $_SESSION['birlestirilmis3'] = $name3;

    if ($json_data["Yüz Şekli"] == "Oval Yüz Şekli"){
        echo '<script>
                window.location.href = "http://facehair.online/oval.php";
              </script>';
    }
    else if ($json_data["Yüz Şekli"] == "Kalp Yüz Şekli"){
        echo '<script>
                window.location.href = "http://facehair.online/kalp.php";
              </script>';
    }
    else if ($json_data["Yüz Şekli"] == "Uzun Yüz Şekli"){
        echo '<script>
                window.location.href = "http://facehair.online/uzun.php";
              </script>';
    }
    else if ($json_data["Yüz Şekli"] == "Kare Yüz Şekli"){
        echo '<script>
                window.location.href = "http://facehair.online/kare.php";
              </script>';
    }
    else if ($json_data["Yüz Şekli"] == "Yuvarlak Yüz Şekli"){
        echo '<script>
                window.location.href = "http://facehair.online/yuvarlak.php";
              </script>';
    }
?>