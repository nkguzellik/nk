<?php

    if(isset($_POST['Gönder'])) {
        $secret = "6LfLgjAhAAAAAL-ed2tYs2OrhwUz6asNRuK9Mvl5";
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $URL = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
        $data = file_get_contents($URL);
        $row = json_decode($data, true);

        if($row['success'] === TRUE){
            echo "<script>alert('Randevunuz Başarıyla Alınmıştır');</script>";
        } else {
            echo "<script>alert('Ben Robot Değilimi İşaretlemediniz');</script>";
        }
    }

?>



<!DOCTYPE html>
<html lang="tr">
    

<head>
    <title>NK GÜZELLİK MERKEZİ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <meta name="description" content="NK GÜZELLİK MERKEZİ Web Sitesi">
    <meta name="keywords" content="Lazer Epilasyon|Cilt Bakımı|Sir Ağda|Profesyonel Makyaj|İpek Kirpik|Kalıcı oje-kuru manikür">
    <meta name="author" content="NAZLICAN KAYMAK  | NECLA İREM DOKUZCU | TUĞÇE TOPUZ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="icon/nk.png" type="image/x-icon">
    <link " href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link " href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="main.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }
        
        p {
            font-size: 16px;
        }
        
        .margin {
            margin-bottom: 45px;
        }
        
        .bg-1 {
            background-color: #ffc0cb;
            /* Green */
            color: #333333;
            /* black */
        }
        
        .bg-2 {
            background-color: #474e5d;
            /* Dark Blue */
            color: #ffffff;
        }
        
        .bg-3 {
            background-color: #ffffff;
            /* White */
            color: #555555;
        }
        
        .bg-4 {
            background-color: #4C3173;
            /* Blue Diamond */
            color: #fff;
        }
        
        .bg-5 {
            background-color: #ecebe8;
            /* Gray */
            color: #333;
        }
        
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }
        
        .navbar-nav li a:hover {
            color: #4C3173 !important;
        }
        .containet{
        width: 100%;
        height: 100vh;
        background: #007fff;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        form{
        background: #ffc0cb ;
        display: flex;
        flex-direction: column;
        padding: 2vw 4vw;
        width: 90%;
        max-width: 1100px;
        border-radius: 10%;
        }
         form h3{
        color: #000000;
        font-weight: 800;
        margin-bottom: 20px;
        }
        form input, form textarea{
            border: 0;
            margin: 10px 0;
            padding: 20px;
            outline: none;
            background: #f5f5f5;
            font-size: 16px;
        }
        form button{
            padding: 15px;
            background: #DC143C;
            color: #fff;
            font-size: 18px;
            border: 0;
            outline: none;
            cursor: pointer;
            width: 150px;
            margin: 20px auto 0;
            border-radius: 30px;
        }

        input,
        select,
        textarea {
            padding: 1.4rem;
            background: white;
            border: 1px solid black;
        }
        td{
            width: 500px;
            height: 50px;
            border: 2px solid transparent;
            font-style: oblique;
        }

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#nk">NK GÜZELLİK MERKEZİ</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#randevu">Randevu Al</a></li>
                    <!--li><a href="#kimdir">Kurucuları</a></li-->
                    <li><a href="#hizmet">Hizmetlerimiz</a></li>
                    
                    <li><a href="#banka">Banka Hesap Numaralarımız</a></li>
                    <li><a href="#iletisim">İletişim</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- First Container -->
    <div id="kimdir" class="container-fluid bg-1 text-center">
        <!--h3 class="margin">NAZLICAN KAYMAK  | NECLA İREM DOKUZCU | TUĞÇE TOPUZ</h3>
        <img src="img/nazlı.png" class="img-responsive img-circle margin" style="display:inline" alt="nazlı" width="350" height="350">
        <img src="img/necla.png" class="img-responsive img-circle margin" style="display:inline" alt="necla" width="350" height="350">
        <img src="img/tugce.png" class="img-responsive img-circle margin" style="display:inline" alt="necla" width="350" height="350"-->
   <html>
  <body>
    <center><form id="my-form" action="#" method="POST" class="container">
        <h1 style="color: black;" >Randevu Alın</h1>
        &nbsp; <!--BOŞLUK BIRKIR-->
        <!--h3>Randevu Alın</h3-->
        <small style="color: black; "> Adın Soyadın </small>
        <input class="text" name="Adın Soyadın"  style="padding: 15px; border-radius: 30px;" align required>
        <small style="color: black;"> Email </small>
        <input class="email"  name="Email" style="padding: 15px; border-radius: 30px;" required>
        <small style="color: black;"> Telefon </small>
        <input class="tel"  name="Telefon" style="padding: 15px; border-radius: 30px;" required>
        <small style="color: black;"> Bir Hizmet Seçin </small>
        <select name="Bir Hizmet Seçin" style="padding: 15px; border-radius: 30px; color: black;" >
          <option>Bayanlar İçin Lazer Epilasyon</option>
          <option>Baylar İçin Lazer Epilasyon</option>
          <option>Bayanlar İçin Cilt Bakımı</option>
          <option>Baylar İçin Cilt Bakımı</option>
          <option>Sir Ağda</option>
          <option>Profesyonel Makyaj</option>
          <option>İpek Kirpik</option>
          <option>Kalıcı oje</option>
          <option>Kuru manikür</option>
        </select>
        <small style="color: black;"> Tarih ve Saat </small>
        <input class="datetime-local" id="tarihsaat" name="Tarih ve Saat" style="padding: 15px; border-radius: 30px;" required>
        <small style="color: black;"> Detaylı Açıklama Yapı<nav></nav> </small>
        <textarea id="message" rows="4" name="Detaylı Açıklama Yapın" style="padding: 15px; border-radius: 30px;"></textarea>
        <!--button type="submit" class="btn" style="padding: 15px; border-radius: 30px;">Gönder </button-->
        <br>
        <div class="row">
            <div class="g-recaptcha" data-sitekey="6LfLgjAhAAAAAILzlAb7tvA2RinR37lHrWXPIUTP"></div>
        </div>
        <button type="submit" class="btn wave-effect wave-light" style="padding: 15px; border-radius: 30px;">Gönder </button>
    </form>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script> 
        const form = document.querySelector('container');
        name = document.querySelector('container');
    
    </script>
        <p id="my-form-status"></p>    
      <!-- Place this script at the end of the body tag -->
      <!--script>
          var form = document.getElementById("my-form");
          
          async function handleSubmit(event) {
            event.preventDefault();
            var status = document.getElementById("my-form-status");
            var data = new FormData(event.target);
            fetch(event.target.action, {
              method: form.method,
              body: data,
              headers: {
                  'Accept': 'application/json'
              }
            }).then(response => {
              if (response.ok) {
                status.innerHTML = "Randevunuz Başarılı Bir Şekilde Alındı";
                form.reset()
              } else {
                response.json().then(data => {
                  if (Object.hasOwn(data, 'errors')) {
                    status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
                  } else {
                    status.innerHTML = "Randevunuz Başarılı Bir Şekilde Alınamadı"
                  }
                })
              }
            }).catch(error => {
              status.innerHTML = "Randevunuz Başarılı Bir Şekilde Alınamadı"
            });
          }
          form.addEventListener("submit", handleSubmit)
      </script--> 
  </body>
  </html>
  </center>       
    </div>

    <!-- econd Container -->
    <div id="hizmet" class="container-fluid bg-2 text-center">
        <h3 class="margin">Hizmetlerimiz</h3>
        <p>Bayanlar İçin Lazer Epilasyon | Baylar İçin Lazer Epilasyon | Bayanlar İçin Cilt Bakımı | Baylar İçin Cilt Bakımı | Sir Ağda| Profesyonel Makyaj| İpek Kirpik| Kalıcı oje | Kuru manikür </p>
        </a>
    </div>

    <!-- Third Container (Grid) -->
    <div id="banka" class="container-fluid bg-3 text-center">
        <h3 class="margin"><font color="black">Banka Hesap ve İBAN Numarası Bilgileri</font></h3>
        <br>
    <TABLE >
        <TR>
        
            <td ALIGN=LEFT BGCOLOR="#DC143C" ><font color="white"><b>Banka Adı</b></font></td>   
            <td ALIGN=LEFT BGCOLOR="#DC143C"><font color="white"><b>HESAP TÜRÜ</b></font></td>
            <td ALIGN=LEFT BGCOLOR="#DC143C"><font color="white"><b>Hesap Sahibi</b></font></td>
            <td ALIGN=LEFT BGCOLOR="#DC143C"><font color="white"><b>Şube Adı</b></font></td>
            <td ALIGN=LEFT BGCOLOR="#DC143C"><font color="white"><b>Şube Kodu</b></font></td>
            <td ALIGN=LEFT BGCOLOR="#DC143C"><font color="white"><b>IBAN</b></font></td>
        
        </TR>
    </TABLE>
    <table >
        <tr>
            <td ALIGN=LEFT><a href="https://acikdenizv2.denizbank.com/" target="_blank"><font color="black">DENİZBANK</font></a></td>
            <td ALIGN=LEFT><font color="black">₺</font></td>
            <td ALIGN=left><font color="black">NAZLICAN KAYMAK</font></td>
            <td ALIGN=left><font color="black">KOZAN</font></td>
            <td ALIGN=left><font color="black">1390</font></td>
            <td ALIGN=left><font color="black">TR660013400001530053100001</font></td>
        </tr>
    </table>
    </div>

    <!-- Contact -->
    <div id="iletisim" class="container-fluid bg-5 text-center">
        <!--h3 class="margin">İletişim</h3-->
        <br>
        <div class="row ">
            <div class="col-sm-5 text-left">
                <p><font color="black" , border: 2px solid transparent;>Bize Bu Bilgilerden Ulaşabilirsiniz</font></p>
                <p><span class="glyphicon glyphicon-map-marker"></span><font color="black" , border: 2px solid transparent;> Kozan/Adana, TR</font></p>
                <p><span class="glyphicon glyphicon-phone"></span><font color="black" , border: 2px solid transparent;>NK MAN +90 543 720 9515</font></p>
                <p><span class="glyphicon glyphicon-phone"></span> <font color="black" , border: 2px solid transparent;>NK GİRL +90 543 901 9515</font></p>
                <p><span class="glyphicon glyphicon-envelope"></span><font color="black" , border: 2px solid transparent;> nkguzellikmerkezii@gmail.com</font></p>
                <p><img src="img/insta.png" alt="r1" hspace="1" width="20" height="20 align="left" /> <font color="black" , border: 2px solid transparent;>nkguzellikmerkezi</font></p>             
                <p><img src="img/insta.png" alt="r1" hspace="1" width="20" height="20 align="left" /><font color="black" , border: 2px solid transparent;>nkmankozan</font></p>            
            </div>
            <center>
            <right><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1qtUNYXpgw6fC_92wGk4TAuwh9MPNNYY&ehbc=2E312F" width="640" height="480"></iframe></right>
            </center>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid bg-4 text-center">
        <p> Web Master: Furkan KILIÇLI - NK Güzellik Merkezi | Tüm Hakları Saklıdır © 2017 - 2022 </br><!--a href="https://nkkozan.github.io/nkguzellikmerkezi/">https://nkkozan.github.io/nkguzellikmerkezi/</a--></p>
        <p></p>
        <body id="backgroundBody">
            <div id="textBody">
                <div>
                    <a href="https://www.instagram.com/nkguzellikmerkezi/" class="fa fa-instagram" target="_blank" rel="noopener noreferrer"></a>
                    <a href="https://www.instagram.com/nkmankozan/" class="fa fa-instagram" target="_blank" rel="noopener noreferrer"></a>
                </div>
                
            </div>
        </body>
    </footer>

</body>

</html>