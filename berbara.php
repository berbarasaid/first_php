
<?php
$mail=$_POST['mail'];
$pas=$_POST['pass'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p{
      background-color: rgba(48, 189, 140, 0.344);
      padding: 30px;
      border-radius: 10px;
      color: green;
    }
    button{
        background-color: rgb(35, 35, 235);
        width: 150px;
        height: 40px;
        border-radius: 6px;
        color: #fff;
        border: none;
    }
    body{
        display: flex;
       
        justify-content: center;
        justify-items: center;
    }
    div{
        padding: 30px;
        box-shadow: 10px 10px 25px rgb(149, 149, 149);
    }
</style>
<body>
<div>
    <p>welcome, admin (admin)</p>
    <button id="log"> log out</button>
    <button id="product">products</button>
    <button id="creat"> creat account</button>
</div>
</body>
<script>
    var log = document.getElementById("log"); 
    var product = document.getElementById("product"); 
    var creat = document.getElementById("creat"); 
    log.addEventListener("click", function(e){
        window.location.href="bb.html"
    })
    creat.addEventListener("click", function(e){
        window.location.href="creat.php"
    })
    product.addEventListener("click", function(e){
       let mail = "<?php echo $mail; ?>";
        window.location.href=`product.php?mail=${mail}`;
    })


</script>
</html>