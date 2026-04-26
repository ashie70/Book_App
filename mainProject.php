<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
      <link rel="stylesheet" href="mainProject.css"> 
     
      <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
 
    <div id="menu">
      <div id="anchors">
       <div id="home-icon"></div><a href="#cover">Home</a>
       <a href="#featured1">Featured</a>
       <a href="#arrival">Arrivals</a>
       <a href="./db/view_cart.php" 
       style="background-color: rgb(240, 73, 73); color: white; padding: 10px 20px; 
              border-radius: 10px; text-decoration: none; ">
        🛒 View Cart
    </a>
      </div>
    </div>
   <div id="cover">
      <div id="color"></div> 
           <h1>Bookify</h1>
           <p id="swap">Online Book Selling Store</p>
   </div>
   <div id="boxes">
<div id="one">
  <div id="one-img"></div>
  <h3>Free shipping</h3>
  <p>Order Over 2000 Rs</p>
  
</div>
<div id="two">
<div id="two-img"></div>
<h3>Secure Payment</h3>
<p>100% secure</p>
</div>
<div id="three">
<div id="three-img"></div>
<h3>Easy Returns</h3>
<p>Return in 10 days</p>
</div>
<div id="four">
<div id="four-img"></div>
<h3>24/7 support</h3>
<p>Call Us Anytime</p>
</div>
</div>
<div id="featured1">
<div id="scroll-buttons">
<button id="scroll-left"><</button>
<button id="scroll-right">></button>
</div>
<div class="text1"><h2>FEATURED BOOKS</h2></div>
<div id="featured">
  <div id="f1"></div>
  <div id="f2"></div>
  <div id="f3"></div>
  <div id="f4"></div>
  <div id="f5"></div>
  <div id="f6"></div>
  <div id="f7"></div>
  <div id="f8"></div>

</div>
</div>


    <h1 id="arrival">ARRIVALS</h1>
    <div id="arrivalmain">
    <div class="sales1"><img src="./images/sales.png" alt=""></div>
    <div class="sales2">
      <!-- ? is query string it tells browser that parameters are coming  -->
    <div class="contain" id="contain1"><div><button class="btn1"><a href="./book1.php.?id=12" target="value" class="a1">Buy Now</a></button></div><div class="price">Price : 500 Rs/-</div></div>
    <div class="contain" id="contain2"><div><button class="btn2"><a href="./book1.php.?id=6" target="value" class="a1">Buy Now</a></button></div><div class="price">Price : 800 Rs/-</div></div>
    <div class="contain" id="contain3"><div><button class="btn3"><a href="./book1.php.?id=7" target="value" class="a1">Buy Now</a></button></div><div class="price">Price : 300 Rs/-</div></div>
    <div class="contain" id="contain4"><div><button class="btn4"><a href="./book1.php.?id=8" target="value" class="a1">Buy Now</a></button></div><div class="price">Price : 400 Rs/-</div></div>
    <div class="contain" id="contain5"><div><button class="btn5"><a href="./book1.php.?id=1" target="value" class="a1">Buy Now</a></button></div><div class="price">Price : 500 Rs/-</div></div>
    <div class="contain" id="contain6"><div><button class="btn6"><a href="./book1.php.?id=9" target="value" class="a1">Buy Now</a></button></div><div class="price">Price : 400 Rs/-</div></div>
    <div class="contain" id="contain7"><div><button class="btn7"><a href="./book1.php.?id=10" target="value" class="a1">Buy Now</a></button></div><div class="price">Price : 800 Rs/-</div></div>
    <div class="contain" id="contain8"><div><button class="btn8"><a href="./book1.php.?id=13" target="value" class="a1">Buy Now</a></button></div><div class="price">Price : 300 Rs/-</div></div>
    </div>
    </div>
    <div class="info"><h1 >INFORMATION</h1></div>















  <script>
const messages = [ "Online Book Selling Store",
                    "Buy Books With One Click"];
const box= document.getElementById("swap");
var i=0;
function updateText() 
{
box.textContent=messages[i];
i=i+1;
 if (i >= messages.length) {
            i = 0; 
        }
}
setInterval(updateText, 1000);
updateText();

//scroll
const featuredContainer = document.getElementById('featured');
const scrollLeftButton = document.getElementById('scroll-left');
const scrollRightButton = document.getElementById('scroll-right');
const scrollDistance = 220;

scrollRightButton.addEventListener('click', () => {
  featuredContainer.scrollBy({
    left: scrollDistance,
    behavior: 'smooth' 
  });
});

scrollLeftButton.addEventListener('click', () => {
  featuredContainer.scrollBy({
    left: -scrollDistance, 
    behavior: 'smooth'
  });
});
 </script>
    
   
   
    
   
   
</body>
</html>