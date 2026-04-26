<?php
session_start();
$bookId = $_GET['id'] ?? null; //if id exist use it else use null 
include "db/database.php";

// $book_id = $_GET['id'] ?? null;
// echo $book_id;

if ($bookId) {
    $query = "SELECT * FROM books WHERE book_id = $bookId";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $book = mysqli_fetch_assoc($result);
        // echo "gqgwdxqgdxk";
    } else {
        echo "Book not found!";
        exit;
    }

} else {
    echo "No book selected!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book1</title>
    <style>
        body{
            background-color: rgb(252, 248, 223);
            overflow:hidden;
        }
        .all{
            margin-top:-60px;
            
        }
        h1{
            font-size:50px;
            text-align:center;
            margin-top:100px;
             color:rgb(240, 73, 73);
        }
        h4{
            color:rgb(240, 73, 73);
            font-size:30px;
             text-align:center;
             margin-top:10px;
        }
        .one{
            height:125px;
            width:70%;
            background-color: rgb(230, 114, 0) ;
            margin-left:30%;
            margin-top:-400px;
            border-radius:30px;
            
        }
        .img{
          
              background-size: cover;
  background-position:center ;
  background-repeat: no-repeat;
  height:400px;
  width:400px;
      box-shadow:
    -10px 0px 20px rgba(0, 0, 0, 0.3), 
     10px 0px 20px rgba(0, 0, 0, 0.3);
}
  

        
        .one p{
            color:white;
          
            font-size:20px;
            position: absolute;
            margin-top:50px;
              margin-left:20%;
              font-family:cursive;
        }
        .pack{
            background-image:url("./images/package.png");
            background-size: cover;
  background-position:center ;
  background-repeat: no-repeat;
  height:50px;
  width:50px;
  margin-left:660px;
  position:absolute;
    margin-top:50px;
   
}
.bullets{
    margin-left:500px;
    margin-top:50px;
    font-size:20px;
}
    .button1{
      
        background-color:rgb(240, 73, 73);
      
        
    }  
    .button2{
         
        background-color: rgb(230, 114, 0) ;
      
          margin-top:20px;
          
    }  
    .button1:hover,.button2:hover{
        background-color: rgba(0, 0, 0, 0.3);
    }
    a{
       
  text-decoration: none;
  display: block; 
  text-align: center;
  color: white;
  border-radius: 30px;
  height: 50px;
  line-height: 50px; /* vertically centers text */
  width: 60%;
  margin: 20px auto; /* centers horizontally */
  font-size: 20px;
  margin-left:500px;
    }
        </style>
        <body>
            <div class="all">
               <!-- <div>  <a href="./mainProject.php">back</a></div> -->
     <h1> <?php echo $book['Title']; ?></h1>
     <h4> <?php echo $book['Price']; ?></h4>
     <!-- <div class="img"></div> -->
      <div class="img" style="background-image: url('./images/<?php echo $book['image']; ?>');"></div>

     <div class="one">
        <p>Estimated delivery : 2-4 working days</p><div class="pack"></div>
     </div>
     <div class="bullets">
        <ul>
  <li>Authentic content from renowned authors</li>
  <li>Best quality printing and binding</li>
  <li>Fast delivery across Pakistan</li>
  <li>Easy return and exchange policy</li>
  <li>Competitive pricing with discounts</li>
</ul>
     </div>
   
     <div class="button-container">
  <a href="./db/add_to_cart.php?id=<?php echo $bookId; ?>" class="button1">Add to Cart</a>
  <a href="./db/placeorder.php?id=<?php echo $bookId; ?>" class="button2">Place Order</a>
</div>

</div>

</body>
</html>
