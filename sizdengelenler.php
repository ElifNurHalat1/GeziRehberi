<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/6cb163a0b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
<style>

#seyahaticerik{
    margin: 50px 100px 50px 100px;

}

img{
    height:50%;
    width:50%;
}
#seyahatbaslik{
    text-align:center;
    font-size:50px;
}
h4{
    font-size:23px;
    color:#041594;
}
</style>

    <title>Sizden Gelenler | Gezi Rehberi</title>
</head>
<body>
    <section id="menu">
         <div id="logo">Gezi Rehberi</div>
         <nav>
             <a href="index.php"><i class="fas fa-home ikon"></i>Anasayfa</a>
             <a href="sizdengelenler.php"><i class="far fa-image ikon"></i>Sizden Gelenler</a>
             <a href="#iletisim"><i class="far fa-envelope ikon"></i>İletişim</a>
            
         </nav>
    </section>
     


      <section id="seyahaticerik">
      
       <h3 id="seyahatbaslik">Sizden Gelenler</h3>
       <p>Sayfamızdaki İletişim kısmından bize mesaj ve fotoğraflarınızı gönderebilirsiniz. İsterseniz sorularınızı ve önerilerinizi de iletebilirsiniz. Biz de burada sizin fotoğraflarınızı ve mesajlarınızı paylaşıyoruz. Keyifli seyahatler :)</p>
      <br><br>
       
         <div>
         <img src="resim/sizdengelen1.jpg" >
         <br>
         <p>"Kampımızdan hepinize merhaba! Sizin sayfanızla şekillenen tatilimiz çok güzel geçti. Doğanın keyfi ancak bu şekilde çıkar bizce. Tavsiyeleriniz için teşekkür ederiz. Hep yolda kalmak dileğiyle!" diyorlar Sevda Hanım ve Mehmet Bey ve bu fotoğrafı sizlerle paylaşıyorlar.</p>
         </div>
        <br><br><br>
        <div>
        <img src="resim/sizdengelen2.jpg" >
        <br>
        <p>Meral, Sena ve Betül Hanım  kayak tatillerinden bu fotoğraflarını bizimle paylaşarak şu notu eklemişler: "Kız kıza tatilin en iyisi kayak tatili!"</p>
        </div>
        <br><br><br>
        
        <div>
        <img src="resim/sizdengelen3.jpg" >
        <br>
        <p>"Eşimle karavan tatiline çıkmaya korkarken ailecek karavan tatili yaptık sayenizde, hem çocukla yolculuk içeriğiniz için hem de karavanla seyahat içeriğiniz için teşekkür ederiz." diyor Serhat Bey.Fotoğraftaki herkese sağlıklı uzun ömürler diliyoruz. </p>
        </div>
        <br><br><br>
        
        <div>
        <img src="resim/sizdengelen4.jpg" >
        <br>
        <p>Mehtap ve Burak çifti bu fotoğrafı göndererek "Tren yolculuğu fikrini bize verdiğiniz için teşekkür ederiz. Herkese tavsiye ediyoruz. Çok dinlendiriciydi kesinlikle." demişler. </p>
        </div>
        
        
      </section>



<section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>
 
            <form action="index.php" method="post">

            <div id="iletisimopak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel"  placeholder="Telefon Numarası" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                        <input type="text" name="konu"  placeholder="Konu Başlığı" required class="form-control">
                    </div>
                    <textarea name="mesaj"  cols="30" rows="10" placeholder="Mesaj Giriniz" required class="form-control"></textarea>
                   <div>
                    <input type="file" name="resim" class="form-control">
                  <input type="submit" value="Gönder"></div>
                </div>

                <div id="adres">
                    <h4 id="adresbaslik">Adres: </h4>
                    <p class="adresp">Kimeski Mahallesi</p>
                    <p class="adresp">3016.Sokak No:35</p>
                    <p class="adresp">Kırıkkale/Merkez</p>
                    <p class="adresp">Tel: 05012077412</p>
                    <p class="adresp">Email: enhalat@hotmail.com</p>
                </div>
        
        
        </form>
            </div>

            <footer>
                <div id="copyright"> 2021 | Tüm Hakları Saklıdır</div>
            <a href="#menu"><i class="fas fa-chevron-up" id="up"></i></a>
            </footer>

        </div>
    </section>



    <script
     src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
     integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
     crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>



<?php

include("baglanti.php");

if(isset($_POST["isim"],$_POST["tel"],$_POST["mail"],$_POST["konu"],$_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    $dosya=$_POST["resim"];


    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj, dosya) VALUES ('$adsoyad ',' $telefon ',' $email ',' $konu ',' $mesaj ',' $dosya ') ";

     if($baglan->query($ekle)===TRUE)
     {
            echo "<script>alert('Mesajınız başarı ile gönderilmiştir.' )</script>";
     }
     else{
         echo "<script> alert('Mesajınız gönderilirken bir hata oluştu.')</script>";
     }

}

?>
