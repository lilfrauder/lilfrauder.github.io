<?php
require_once("inster.class.php");
$_DATA = new Inster();
?>

<!DOCTYPE html>
<html lang="en" >

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Frãuder</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">
  <div class="header">
    <h2>Frãuder - Instagram Araçları</h2>
  </div>
  <div class="content" style="text-align:center;">
    <p>
      Tamamen ücretsiz ve şifresiz, Tüm Instagram kullanıcılarının profil fotoğraflarını tam boyutlu görüntüleyin!
    </p>
    <form method="GET" class="search">
      <div class="search__inputs">
        <input class="search__query" type="text" name="username" placeholder="Lütfen kullanıcı adı girin...">
        <input class="search__submit" type="submit" value="Kontrol Et">
      </div>
    </form>
<?php if(@$_GET['username']){ echo $_DATA->fotografBul($_GET['username']); } ?>
 
  <br><br>
  <footer>Coded by <a href="https://frauder.dev" target="_blank">Frãuder#2639</a></footer>
  </div>
</div>
  
  

</body>

</html>
