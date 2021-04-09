<?php
class Inster { 

  private function instagramBaglan($_URL){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $_URL);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $_DATA = curl_exec($ch);
    curl_close($ch);
    return $_DATA;
  }

  private function idBul($username){
    $_DATA = $this->instagramBaglan("https://instagram.com/".$username."/?__a=1");
    $_JSON = json_decode($_DATA,TRUE);
    $_USER = $_JSON['graphql']['user']['id'];
    return $_USER;
  }

  public function fotografBul($username){
    $_USER = $this->idBul($username);  
    $_DATA = $this->instagramBaglan("https://i.instagram.com/api/v1/users/".$_USER."/info");
    $_JSON = json_decode($_DATA,TRUE);
    $_PICS = $_JSON['user']['hd_profile_pic_url_info']['url'];
    echo "<br>Fotoğrafa tıklayarak indirebilirsiniz.<br><a href='$_PICS?dl=1' download><img src='$_PICS' style='width:100%;height:auto;'></a>";
  }
}