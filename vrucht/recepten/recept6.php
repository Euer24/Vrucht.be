<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/flexbox.css">
<style>


body {
    background-image: linear-gradient(rgb(240, 128, 128), rgb(60, 179, 113));
}

    .recept-container {
            width: 100%;
            max-width: 500px; 
            margin: 0 auto; 
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
  
        .recept-container img {
            width: 100%;
            height: auto; 
        }

        p {
            text-align: left;
            margin-left: 170px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #666;
        }

        .colum {
            border: 1px solid #000;
            padding: 10px;
        }

        .button {
            margin-top: 120px;
            margin-left: 250px;
            background-color:teal;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 6px;
        }

        .button:hover {
            background-color:  #006666;;
         
        }
    </style>

</head>
<body>
<?php include '../namen.php'; ?>

<a href="../recept.php" class="button">Ga Terug</a>

    <div class="recept-container">
        <img src="../img/img6.jpg">

        <div class="colum">

        <h1>ingrediënten</h1>
        
       <h2> <?php echo "$recept6"; ?></h2>
        
        <p>Handje diepvries mango</p>
        <p>Handje diepvries framboos</p>
        <p>Handje diepvries bramen</p>
        <p>200ml haverdrank </p>
        </div>
    </div>




</body>


</html>