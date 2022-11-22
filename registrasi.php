<style>
  h2 {
    color:white;	
  }

  label {
  display: block;
  color: #7d7d7d;
   }

.floatBlock {
  margin: 0 1.81em 0 0;
  }

.labelish {
  color:#7d7d7d;
  margin: 0;
}

.paymentOptions {
  border: none;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  break-before: always;
  margin: 0 0 2em 0;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration | Bintang Timur FC Surabaya</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image" href="img/btsLogoNobg.png">
<link rel="stylesheet" href="gaya.css">
</head>

<body>
  <div class="login-page">
    <h2><center>Registration Form </center></h2>
    <div class="form">
        <!-- ganti nama file -->
      <form action="aksi_registrasi.php" name="form" onsubmit="return validasiForm()" method="post">	
        <input type="email" name="email" placeholder="Email"/>
        <input type="text" name="username" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/>

        <button>daftar</button>
        <p class="message">Already registered? <a href="login.php">Sign In</a></p>
      </form>
    </div>
  </div>
</body>
</html>

<script type="text/javascript">
  function validasiForm(){
    var email=document.forms['form']['email'].value;
    var username=document.forms['form']['username'].value;
    var password=document.forms['form']['password'].value;

    if (email.length == 0) {
      alert('email wajib diisi');
      return false;
    }

    if (username.length == 0) {
      alert('username wajib diisi');
      return false;
    }

     if (password.length == 0) {
      alert('password wajib diisi');
      return false;
    }
    
  }  
</script>