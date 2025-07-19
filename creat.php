<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="js/css/bootstrap.css">
</head>
<style>
    body{
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
    }
    form {
        width: 800px;
        margin-top: 50px;

    }
     form {
        padding: 30px;
        box-shadow: 10px 10px 25px rgba(149, 149, 149, 1);
    }
    .card{
        margin: 30px;
        padding: 30px;
       
    }
   image{
    padding: 0;
   }
   .account{
    display: flex;
   justify-content: center;
      text-align: center;
      justify-items: center;
      align-items: center;
      flex-direction: column;
     
   }
   .form{
     display: flex;
   justify-content: center;
      text-align: center;
      justify-items: center;
      align-items: center;
   }
    .mesage{
      margin: 40px;
      padding: 20px;
      color: green;
      background-color: rgb(126, 213, 126);
      border-radius: 10px;

    }
    .invalled{
          width: 100%;
           height: 100%;; 
           color: red;
           background-color: rgb(242, 125, 125);
           padding: 15px;
           border-radius: 10px;
        }
</style>
<body>
   
   
  
   <div class="form">
    <form class="row g-3" method="post" enctype="multipart/form-data">
        <div class="col-12">
        <label for="inputAddress" class="form-label">name</label>
        <input type="text" class="form-control" id="inputAddress" name="name">
      </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="mail">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  
  <div class="col-12">
    <label for="inputAddress2" class="form-label">image</label>
    <input type="file" class="form-control" id="inputAddress2" name="images[]"multipart >
  </div>
 
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" id ="sign">Sign in</button>
  </div>
</form></div>
 <div class="account">
   <?php 
      
if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_FILES['images']) ){
    $count=count($_FILES['images']['name']);
    $namee=$_POST['name'];
    $descrip=$_POST['mail'];
  for($i= 0;$i<$count;$i++){
    $name=$_FILES['images']['name'][$i];
    $tmp=$_FILES['images']['tmp_name'][$i];
    move_uploaded_file($tmp, "uploded/$name");
    if ( isset($_FILES['images'])) {
     
    
                echo " <div class='mesage'> account created succesfuly</div>
            <div class='col-md-4 mb-3' id ='mm'>
                <div class='card'>
                    <img src='uploded/$name' class='card-img-top' alt='...' style='height: 250px; object-fit: cover;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$namee</h5>
                        <p class='card-text'> $descrip</p>
                        <button id='go' class='btn btn-primary'>go to product</button>
                    </div>
                </div>
            </div>
            ";
} else {
  echo "<p class='invalled'>plaese upload photo</p>";
  }}
  
}
?>
</div>
</body>
<script>
  var go = document.getElementById("go"); 
  go.addEventListener("click", function(e){
       let mail = "<?php echo $descrip; ?>";
        window.location.href=`product.php?mail=${mail}`;
    })
  
</script>


</html>