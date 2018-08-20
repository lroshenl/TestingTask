<?php
class user
{
  public $pic;
  public $page;
  /*function create(){//creating new user in xml file
    $pass=md5($this->password.$salt);
    $xml = new domDocument('1.0','utf-8');
    $xml->load('test1.xml');
    $root = $xml->documentElement;
    $user = $xml->createElement("info");
      $login = $xml->createElement("login", $this->login);
      $password = $xml->createElement("password", $pass);
      $email = $xml->createElement("email", $this->email);
      $name = $xml->createElement("name", $this->name);
      $salt= $xml->createElement("salt", $salt);
      $user->appendChild($login);
      $user->appendChild($password);
      $user->appendChild($email);
      $user->appendChild($name);
      $user->appendChild($salt);
    $root->appendChild($user);
    $xml->formatOutput = true;
    $test1 = $xml->saveXML();
    $xml->save('test1.xml');
  }
  function set_all(){
    $this->login=$_POST["login"];
    $this->password=$_POST["password"];
    $this->confirm_password=$_POST["confirm_password"];
    $this->email=$_POST["email"];
    $this->name=$_POST["name"];
  }//setting all fields
  function get_all(){
    return "$this->login"."$this->password"."$this->confirm_password"."$this->email"."$this->name";
  }
  function check_password(){//checking password and confirm_password
    if($this->password==$this->confirm_password){return true;}
    else {return false;}
  }
  function check_login(){//checking login
    $flag=true;
    $xml=simplexml_load_file("test1.xml") or die("Error: Cannot create object");
    foreach($xml->children() as $books) {
      $login1 = $books->login;
      if($this->login==$login1){$flag=false;}
    }
    if($flag){return true;}
    else {return false;}
  }*/
  function show()
  {
    if($this->pic == 3)
    {
      $rr = array('a' => "<div class="col-sm-4">
        <div class="product">
          <div class="product-img">
            <a><img src="imgA/im1.jpg" alt=""></a>
          </div>
          <p class="product-title">
            <a>Fat ASS</a>
          </p>
          <p class="product-desc">HE IS WRITER</p>
          <p class="product-price">SUCK MY BALLS</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="product">
          <div class="product-img">
            <a><img src="imgA/im3.jpg" alt=""></a>
          </div>
          <p class="product-title">
            <a>Fat ASS</a>
          </p>
          <p class="product-desc">HE IS WRITER</p>
          <p class="product-price">SUCK MY BALLS</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="product">
          <div class="product-img">
            <a><img src="imgA/im2.jpeg" alt=""></a>
          </div>
          <p class="product-title">
            <a>Fat ASS</a>
          </p>
          <p class="product-desc">HE IS WRITER</p>
          <p class="product-price">SUCK MY BALLS</p>
        </div>
      </div>");
      echo json_encode($rr)
    }
  }
  function set_all()
  {
    if(isset($_POST['pic']))
      $this->pic = $_POST['pic'];
    if(isset($_POST['page']))
      $this->page = $_POST['page'];

  }
  /*function check_email(){//checking email
    $flag=true;
    $xml=simplexml_load_file("test1.xml") or die("Error: Cannot create object");
    foreach($xml->children() as $books) {
      $email1 = $books->email;
      if($this->email==$email1){$flag=false;}
    }
    if($flag){return true;}
    else {return false;}
  }
  function create_new_user(){//checking all fields and creating new user
    if($this->not_empty()){
      if($this->check_password()){
        if($this->check_login()){
          if($this->check_email()){
            $this->create();
            $a = array('a' => "success");
            echo json_encode($a);
          }
          else{
            $rr = array('a' => "such email is already taken");
            echo json_encode($rr);
          }
        }
        else {
          $ar = array('a' => "such login is already taken");
          echo json_encode($ar);
        }
      }
      else{
        $ar = array('a' => "password and confirm_password are not equal");
        echo json_encode($ar);
      }
    }
    else{
      $ar = array('a' => "there are empty fields");
      echo json_encode($ar);
    }
  }*/
}

$a = new register();
$a->set_all();
$b=$a->show();

?>
