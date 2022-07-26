<html>  
    <head>
        <title>İletişim Formu</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

<div class="row" id="contatti">
<div class="container mt-5" >

    <div class="row" style="height:550px;">
      <div class="col-md-6 maps" >
        <iframe src="https://www.google.com/maps/d/embed?mid=1qtUNYXpgw6fC_92wGk4TAuwh9MPNNYY&ehbc=2E312F" width="640" height="480"></iframe>
      </div>
      <div class="col-md-6">
        <h2 class="text-uppercase mt-3 font-weight-bold text-white">CONTATTACI</h2>
        <form class="well span8" method="post" action="iletisim-post.php"></form>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Adınız Soyadınız</label>
                <input class="span3" name="adi_soyadi" type="text" required>
              </div>
            </div>    
            <div class="col-lg-6">
              <div class="form-group">
                <label>E-posta</label>
                <input class="span3" name="email" type="email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Telefon</label>
                <input class="span3" name="telefon" type="text" required>
              </div>
              <div class="elem-group inlined">
                <label for="checkin-date">Tarih Seçin</label>
                <input type="date" id="checkin-date" name="checkin" required>
                <input type="time" id="checkin-time" name="checkin" required>
              </div-->
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Metin Ekle" rows="3" required></textarea>
              </div>
            </div> 
            <form action='iletisim-post.php' method='post'>
            <input name="insert", value='Insert' type='submit'/></p>
            </form>
            </div>
            </div>
            <div class="col-12">
            </div>
          </div>
        </form>
        <div class="text-white">
        <h2 class="text-uppercase mt-4 font-weight-bold">dove siamo</h2>

        <i class="fas fa-phone mt-3"></i> <a href="tel:+">NK MAN +90 543 720 9515</a><br>
        <i class="fas fa-phone mt-3"></i> <a href="tel:+">NK GİRL +90 543 901 9515</a><br>
        <i class="fa fa-envelope mt-3"></i> <a href="">info@test.it</a><br>
        <!--i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
        <i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
        <div class="my-4">
        <a href=""><i class="fab fa-instagram fa-3x pr-4"></i></a>
        <a href=""><i class="fab fa-instagram fa-3x"></i></a-->
        </div>
        </div>
      </div>

    </div>
</div>
</div>

<!--div class="row text-center bg-success text-white" id="author">
  <div class="col-12 mt-4 h3 ">
  <a href="#">by P. Fattoruso</a>
</div>
<div class="col-12 my-2">
<a href="https://www.linkedin.com/in/paolofattoruso/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
</div-->
</div>

    </body>
</html>

