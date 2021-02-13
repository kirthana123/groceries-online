<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
<script src="https://kit.fontawesome.com/fb2690bc82.js" crossorigin="anonymous"></script>

  <html>
  <style>
  
  nav, nav a{
	text-align: center;
	font-size: 1.03em;
	color: black;
	text-decoration: none;
	word-spacing: 50px;
	font-weight: bold;
}

a {text-decoration:none;}

nav a:hover{color:#779ECB;}
</style>
<style>


  
  
  * {
	margin:0;
	padding:0;
	box-sizing:border-box;
}

.background{
  background: url(https://cdn.pixabay.com/photo/2015/04/20/13/38/furniture-731449_960_720.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;  
  overflow:hidden;
  padding-bottom:400px;
}
.header h1{
font-size:100px;
padding-top: 130px;
}

.header h3{
 font-size:28px;
  padding-top:50px;
}


input{
  width: 20%;
  height: 50px;
  border: 2px, black;
  background-color: #cceeff;
  font-size: 20px;
  padding-left: 10px;
  color: black;
}


.header{
  position:relative;
	text-align:center;
	color:white; 
  font-family: 'Montserrat', sans-serif;
}

.grid {
	width:100%;
	display:flex;
	flex-wrap:wrap;
  list-style: none;
}
.destinations{
 	width:100%;
	display:flex;
	flex-wrap:wrap;
	justify-content:center; 
}

.destinations .grid li { 
	height:400px;
	padding:10px;
	background-clip:content-box;
	background-size:cover;  
  background-position: center;
}

.destinations .grid li.large {
	flex-basis:60%; 
  
}

.destinations .grid li.small {
	flex-basis:40%;
}
.grid{
  padding-bottom: 50px;
}

.mid{
  padding-top:30px;
}
.mid h3{
	font-size: 32px;
	margin-bottom:30px;
	text-align:center;
  font-family: 'Montserrat', sans-serif;
}
.mid p{
  text-align: justify;
  margin: 0 auto;
  max-width: 800px;
  padding-bottom:30px;
  line-height: 2;
  font-family: 'Montserrat', sans-serif;
}
.contact{
  background-color:#cceeff;
  padding-bottom: 30px;
  padding-top: 10px;
}
.contact-header{
  text-align: center;
  padding-top: 20px;
  font-family: 'Montserrat', sans-serif;
}

.contact-links{
  text-align: center;
  padding-top: 20px;
}

.link{
  padding: 20px;
  color: black;
}
.link:hover{
  color: grey;
}
  
@media screen and (max-width: 900px) {
  .header h1{
font-size:70px;
padding-top: 70px;
}
 .header h3{
   font-size: 20px;
   padding-top:30px;
  }
  .background{
  padding-bottom:100px;
}
  .mid p{
    padding-right:10px;
    padding-left:10px;
  }
 input{
  width: 60%;
  font-size: 15px;
  }
.destinations .grid li {
  margin-top: 0;
	height:200px;
	padding:2px;
}
  .grid{
    padding-bottom: 20px;
  }
  
  .contact-header{
  padding: 5px;
  font-size: 15px;
}
  .contact-links{
  padding: 0;
  font-size: 7px;
}
  .contact{
    padding-bottom:100px;
  }
}
</style>
<body>
<nav> 
		<a href="home2.php">Home</a>
		<a href="gallery2.php">Gallery</a>
		<a href="form2.php">Orders</a>
		
	</nav>
</body>	



<body>
  
    <section class="background">
    <div class="header">
      <h1><center>MegaStore</center></h1>
      <h3><i>Take a pleasent shopping!!!!</i></h3>
    </div>
    </section>
    
    <section class="description">
    <div class="mid">
      <h3>What we do!</h3> 
      <p>Buy Fruits,Vegetables and other Grocery items from the Online Grocery Expert. Shop Now from MegaStore. Choose from a wide range of options in every category exclusively handpicked for you. Wide Range of Products. Quality You Can Trust. Lowest Prices. Contact Less Delivery. </p>
 
 </div>
      </section>
 <section class="destinations">
  <ul class="grid">
    <li class="small" style="background-image:url('p1.jpeg');">
    <li class="large" style="background-image:url('p2.jpeg');">	
    </li>
    <li class="small" style="background-image:url('p3.jpeg');"></li>
		<li class="large" style="background-image:url('p4.jpeg'); "></li>
    <li class="large" style="background-image:url('p5.jpeg');"></li>
    <li class="small" style="background-image:url('p6.jpeg');">	
    </li>
    <li class="small" style="background-image:url('p7.jpeg');"></li>
		<li class="large" style="background-image:url('P30.jpeg'); "></li>
	 </ul>		
  </section>
  <section class="contact">
  <div class="contact-header">
    <h2 class="get-in-touch">Connect with us!</h2>
  </div>  
  <div class="contact-links">  
    <a href="blank" class="link"><i class="fab fa-facebook-square"></i> Facebook</a>
    <a href="blank" class="link"><i class="fab fa-twitter"></i> Twitter</a>
    <a href="blank@example.com" class="link"><i class="fas fa-at"></i> Send a mail</a>
   <a href="tel:123-456-7899" class="link"><i class="fas fa-mobile-alt"></i> Call us</a>
  </div>
  </section> 

</body>
</html>