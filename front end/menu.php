<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
   hr{
    border: 2px solid black;
    margin-bottom: 10px;

   }
   .container {
          
          float: center;
          padding: 50px;
          background-color: white;
          height: 500px;
          width: 35%;
          margin-top: 100px;
          margin-left: 460px;
          
        }
  
    body {
          font-family: Arial, Helvetica, sans-serif;
          background-image: url("gambar1.jpg");
          background-size: cover;
         ;
        }
        .menu{
          border: 5px solid black;
          padding-top: 15px;
          
        }
    
  .button-22 {
  align-items: center;
  appearance: button;
  background-color: #0276FF;
  border-radius: 8px;
  border-style: outset;
  box-shadow: rgba(255, 255, 255, 0.26) 0 1px 2px inset;
  box-sizing: border-box;
  font-style: normal;
  cursor: pointer;
  display: flex;
  flex-direction: row;
  flex-shrink: 0;
  font-family: "RM Neue",sans-serif;
  font-size: 12px;
  padding: 12px 210px;
  text-align: center;
  text-transform: none;
  transition: color .13s ease-in-out,background .13s ease-in-out,opacity .13s ease-in-out,box-shadow .13s ease-in-out;
  
  touch-action: manipulation;
}

.button-22:active {
  background-color: #006AE8;
}

.button-22:hover {
  background-color: #1C84FF;
}
footer{
  margin-top: -70px;
}

  

    </style>
    
<div class="container">
  <hr class="hr1">
  <br><br><br><br>
  <div class="menu">
  <center><h1>Menu</h1></center>
  </div>
  <br>
  
<button class="button-22" role="button"><a href="tambah.php" ><b>Tambah Barang</b></a></button>
<br>
<button class="button-22" role="button"><a href="kurang.php" ><b>Kurang Barang</b></a></button>
<br>
<br><br><br><br>

<footer>
  <hr>
  <a href="login.php"><h3>Log Out</h3></a>
</footer>

</div>


    
  </form>
  
</body>
</html>