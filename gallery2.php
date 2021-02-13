<html>

<style>
@import url('https://fonts.googleapis.com/css?family=Raleway');

body{
  background: #5c746a;
  background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAU0lEQVQoU2P8eUjvPwMDA8MLw10gCidgJFrhw88vwCYig5DbS8HcNarRcGFGihRicyhj8ObTYKv7HGTxe4ZohdjcuEUsC2y6z6tp+D1DtEJsjgUAy/UzWeLdm1gAAAAASUVORK5CYII=) repeat;
  color: #001a23;
  font-family: 'Raleway', sans-serif;
  font-size: 5vw;
}
ul {
  display: grid;
  grid-template-columns: repeat(1,1fr);
  transform-origin: top left;
  transform: skewY(4.398705355deg);
  margin: 20vw 25% 0 2%;
}
li{
  transform-origin: top left;
  transform: skewY(-4.398705355deg) rotatez(-14.03624deg);
  padding-top: 150%;
  z-index: 1;
  transition-property: z-index;
  transition-duration: .3s;
}
.details{
  position: absolute;
  z-index: 2;
  width: 98%;
  height: 95%;
  top: 0;
  background-color: #53b3cb;
  border-radius: 2vw;
  -webkit-filter: drop-shadow(2px 6px 3px rgba(0, 0, 0, 0.4));
  filter: drop-shadow(2px 6px 3px rgba(0, 0, 0, 0.4));
  transform: rotate(0deg) translate(0, 0);
  transition-property: transform;
  transition-duration: .3s;
}



li:nth-child(3n+1) .details{
  background-color: #f9c22e;
}
li:nth-child(3n+2) .details{
  background-color: #35ce8d;
}
.product{
  position: absolute;
  z-index: 3;
  width: 88%;
  height: 91%;
  top: 0;
  transform: translateX(6.5%) translateY(5%);
  border-radius: 1.2vw;
  background:#001a23;
  overflow: hidden;
}
h2, p, img {
  position: absolute;
  z-index: 4;
}
h2, p {
  background-color: #53b3cb;
  padding: 0.4em;
}
li:nth-child(3n+1) h2,li:nth-child(3n+1) p{
  background-color: #f9c22e;
}
li:nth-child(3n+2) h2,li:nth-child(3n+2) p{
  background-color: #35ce8d;
}

h2{
  top: 3.5%;
  left: 4%;
}
p {
  bottom: 3.5%;
  right: 5%;
  font-size: 1.2em;
}
img{
  height: 110%;
  left: 50%;
  transform: translateX(-50%) translateY(-2%);
  transition-property: height,transform;
  transition-duration: .3s;
}

li:hover{ 
  z-index: 4;
}
li:hover .details{ 
  transform: rotate(14.03624deg) translate(0%, 10%) scale(1.3);
}
li:hover img{ 
  height: 210%;
  transform: translateX(-50%) translateY(-14%);
}

@media (min-width:300px) { 
  body{
    font-size: 2.75vw;
  }
  ul {
    grid-template-columns: repeat(2,1fr);
    grid-column-gap: 3vw;
    margin: 10vw 14vw 0 2vw;
  }
}

@media (min-width:600px) { 
  body{
    font-size: 1.95vw;
  }
  ul {
    grid-template-columns: repeat(3,1fr);
    grid-column-gap: 2vw;
    margin: 8vw 10vw 0 1vw;
  }
}

@media (min-width:900px) { 
  body{
    font-size: 1.5vw;
  }
  ul {
    grid-template-columns: repeat(4,1fr);
    grid-column-gap: 1.5vw;
    margin: 6vw 7.5vw 0 0.5vw;
  }
}

@media (min-width:1200px) { 
  body{
    font-size: 1.25vw;
  }
  ul {
    grid-template-columns: repeat(5,1fr);
    grid-column-gap: 1vw;
    margin: 4.5vw 6vw 0 0.5vw;
  }
}

@media (min-width:1500px) { 
  body{
    font-size: 1vw;
  }
  ul {
    grid-template-columns: repeat(6,1fr);
    grid-column-gap: 1vw;
    margin: 4vw 6vw 0 0.5vw;
  }
}
</style>
	

<body>
<ul>
  <li>
    <div class="details">
      <h2>1/4 kg All Type Vegetables</h2>
      <p>$800</p>
      <div class="product">
        <img src="p20.jpeg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>1/4 kg All Type Fruits</h2>
      <p>$800</p>
      <div class="product">
        <img src="p21.jpeg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>5g All Type Flour</h2>
      <p>$800</p>
      <div class="product">
        <img src="p22.jpeg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>3g All Type Dal</h2>
      <p>$500</p>
      <div class="product">
        <img src="p23.jpeg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>2lit All Type Cooking Oil</h2>
      <p>$550</p>
      <div class="product">
        <img src="p24.jpeg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>3g All Type of Seeds</h2>
      <p>$350</p>
      <div class="product">
        <img src="p26.jpeg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>3g Nuts</h2>
      <p>$300</p>
      <div class="product">
        <img src="p25.jpeg">
      </div>
    </div>
  </li>
  
</ul>
<p>GET 80% OF DISCOUNT ENJOY YOUR SHOPPING!!!!!</p>

<img src="p29.webp" width="900" height="600">

</body>
</html>