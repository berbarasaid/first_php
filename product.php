<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="js/css/bootstrap.css">
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }

    form {
        width: 800px;
        margin-top: 50px;

    }

    .x {
        height: 70px;
    }

    form {
        padding: 30px;
        box-shadow: 10px 10px 25px rgb(149, 149, 149);
    }
    #product{
        display: flex;y
      
    }
    #mm{
        margin: 10px;
        width: 300px;
        height: 200px;
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
    <div class="x"></div>
    <form class="row g-3" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">product name</label>
            <input type="text" class="form-control" id="inputEmail4" name="product">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">discription</label>
            <input type="password" class="form-control" id="inputPassword4" name="descrip">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">product images</label>
            <input type="file" class="form-control" id="inputAddress" name="images[]" multiple>
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
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
    <hr>
    <div id="product">
        <?php 
         $email = $_GET['mail'];
if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_FILES['images']) ){
    $count=count($_FILES['images']['name']);
    $namee=$_POST['product'];
    $descrip=$_POST['descrip'];
  for($i= 0;$i<$count;$i++){
    $name=$_FILES['images']['name'][$i];
    $tmp=$_FILES['images']['tmp_name'][$i];
    move_uploaded_file($tmp, "uploded/$name");
                echo "
            <div class='col-md-4 mb-3' id ='mm'>
                <div class='card'>
                    <img src='uploded/$name' class='card-img-top' alt='...' style='height: 250px; object-fit: cover;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$namee</h5>
                        <p class='card-text'> $descrip</p>
                        <p class='card-text'>added by : $email</p>
                    </div>
                </div>
            </div>
            ";

  
  }
}
?>
    </div>
</body>
<script src="js/bootstrap.js"></script>

</html>
