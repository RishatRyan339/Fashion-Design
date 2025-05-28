<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  
</head>




<body class="bg-white text-dark">

 <!--head 1-->


<header class="brand-header">
  <div class="brand-section">
  
    <button class="hamburger" id="hamburger-toggle">&#9776;</button>
    
    <a href="#"> ThreadRevolution</a>
    <a href="#">UrbanCouture </a>
    <a href="#">Plush Peach</a>
    <a href="#">Denim</a>
    <a href="#">MetroAesthetic</a>
  </div>
  <div class="user-section">

 <form class="form-inline">
   
        <input class="form-control mr-sm-2" id="search-class" type="search" placeholder="Search...." aria-label="Search">
          <button type="submit"id="button-css"><i class="fas fa-search"id="magnify"></i></button>

        
  </form>

       <a href="#" class="text-dark icons-nav"><img src="pic/heart.png" alt="Profile" class="icon-img"id="icon-img2"></a>
     <a href="#" class="text-dark icons-nav"><img src="pic/placeholder.png" alt="Profile" class="icon-img"id="icon-img2"></a>



       <a href="#" class="text-dark icons-nav"><img src="pic/shopping-bag.png" alt="Profile" class="icon-img"id="icon-img2"></a>
        <a href="#" class="text-dark icons-nav"></a>
<div class="dropdown" style="position: relative; ">
<img src="pic/user.png" alt="Profile" class="icon-img"id="icon-img2"id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">  
    </i>

  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 120px;">
    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a></li>
  </ul>
</div>
</div>
</header>
<header class="collapse d-md-block" id="fullNavbar">
  <div class="d-flex justify-content-between align-items-center p-4 border-bottom">
    <h1 class="h4 fw-light fst-italic" id="font-gap">SnowBee</h1>

    <button class="btn btn-sm btn-outline-primary d-none d-md-block">
      <a href="login.php" class="text-decoration-none text-primary">Login or Sign In</a>
    </button>
  </div>

 
  <div class="secondary-nav bg-white border-bottom">
    <div class="container">
    <ul class="nav justify-content-center py-2 position-relative">
      <li class="nav-item">
        <a class="nav-link active" href="#">New Arrivals</a>
      </li>

      
      <li class="nav-item dropdown-parent">
        <a class="nav-link" href="women-section.php">Woman</a>
        <div class="dropdown-menu-custom">
          <div class="row">
            <div class="col-md-3"><h6>Dresses</h6><ul><li><a href="#">Casual</a></li><li><a href="#">Evening</a></li></ul></div>
            <div class="col-md-3"><h6>Tops</h6><ul><li><a href="#">Blouses</a></li><li><a href="#">T-Shirts</a></li></ul></div>
            <div class="col-md-3"><h6>Bottoms</h6><ul><li><a href="#">Skirts</a></li><li><a href="#">Jeans</a></li></ul></div>
            <div class="col-md-3"><h6>Accessories</h6><ul><li><a href="#">Bags</a></li><li><a href="#">Jewelry</a></li></ul></div>
          </div>
        </div>
      </li>

     
      <li class="nav-item dropdown-parent">
        <a class="nav-link" href="men-collection.php">Man</a>
        <div class="dropdown-menu-custom">
          <div class="row">
            <div class="col-md-3"><h6>Topwear</h6><ul><li><a href="#">Shirts</a></li><li><a href="#">T-Shirts</a></li></ul></div>
            <div class="col-md-3"><h6>Bottomwear</h6><ul><li><a href="#">Pants</a></li><li><a href="#">Jeans</a></li></ul></div>
            <div class="col-md-3"><h6>Accessories</h6><ul><li><a href="#">Watches</a></li><li><a href="#">Wallets</a></li></ul></div>
            <div class="col-md-3"><h6>Footwear</h6><ul><li><a href="#">Shoes</a></li><li><a href="#">Sandals</a></li></ul></div>
          </div>
        </div>
      </li>

   
      <li class="nav-item dropdown-parent">
        <a class="nav-link" href="teen-section.php">Teen</a>
        <div class="dropdown-menu-custom">
          <div class="row">
            <div class="col-md-3"><h6>Topwear</h6><ul><li><a href="#">Graphic Tees</a></li><li><a href="#">Shirts</a></li></ul></div>
            <div class="col-md-3"><h6>Bottomwear</h6><ul><li><a href="#">Joggers</a></li><li><a href="#">Shorts</a></li></ul></div>
            <div class="col-md-3"><h6>Footwear</h6><ul><li><a href="#">Sneakers</a></li><li><a href="#">Flip-Flops</a></li></ul></div>
            <div class="col-md-3"><h6>Accessories</h6><ul><li><a href="#">Caps</a></li><li><a href="#">Backpacks</a></li></ul></div>
          </div>
        </div>
      </li>

    
      <li class="nav-item dropdown-parent">
        <a class="nav-link" href="child-section.php">Child</a>
        <div class="dropdown-menu-custom">
          <div class="row">
            <div class="col-md-3"><h6>Girls</h6><ul><li><a href="#">Dresses</a></li><li><a href="#">Tops</a></li></ul></div>
            <div class="col-md-3"><h6>Boys</h6><ul><li><a href="#">Shirts</a></li><li><a href="#">Pants</a></li></ul></div>
            <div class="col-md-3"><h6>Footwear</h6><ul><li><a href="#">Shoes</a></li><li><a href="#">Sandals</a></li></ul></div>
            <div class="col-md-3"><h6>Accessories</h6><ul><li><a href="#">Caps</a></li><li><a href="#">Bags</a></li></ul></div>
          </div>
        </div>
      </li>

   
      <li class="nav-item dropdown-parent">
        <a class="nav-link" href="babies-section.php">Baby</a>
        <div class="dropdown-menu-custom">
          <div class="row">
            <div class="col-md-3"><h6>Clothing</h6><ul><li><a href="#">Rompers</a></li><li><a href="#">Sets</a></li></ul></div>
            <div class="col-md-3"><h6>Winter Wear</h6><ul><li><a href="#">Sweaters</a></li><li><a href="#">Hoodies</a></li></ul></div>
            <div class="col-md-3"><h6>Footwear</h6><ul><li><a href="#">Booties</a></li><li><a href="#">Socks</a></li></ul></div>
            <div class="col-md-3"><h6>Accessories</h6><ul><li><a href="#">Blankets</a></li><li><a href="#">Caps</a></li></ul></div>
          </div>
        </div>
      </li>

      
      <li class="nav-item dropdown-parent">
        <a class="nav-link" href="../index.php">Home</a>
        <div class="dropdown-menu-custom">
          <div class="row">
            <div class="col-md-3"><h6>Decor</h6><ul><li><a href="#">Vases</a></li><li><a href="#">Lights</a></li></ul></div>
            <div class="col-md-3"><h6>Furnishings</h6><ul><li><a href="#">Cushions</a></li><li><a href="#">Curtains</a></li></ul></div>
            <div class="col-md-3"><h6>Dining</h6><ul><li><a href="#">Plates</a></li><li><a href="#">Glassware</a></li></ul></div>
            <div class="col-md-3"><h6>Kitchen</h6><ul><li><a href="#">Storage</a></li><li><a href="#">Tools</a></li></ul></div>
          </div>
        </div>
      </li>

     
      <li class="nav-item dropdown-parent">
        <a class="nav-link" href="#">Gifts</a>
        <div class="dropdown-menu-custom">
          <div class="row">
            <div class="col-md-3"><h6>For Him</h6><ul><li><a href="#">Watches</a></li><li><a href="#">Wallets</a></li></ul></div>
            <div class="col-md-3"><h6>For Her</h6><ul><li><a href="#">Perfumes</a></li><li><a href="#">Bags</a></li></ul></div>
            <div class="col-md-3"><h6>Occasions</h6><ul><li><a href="#">Birthday</a></li><li><a href="#">Anniversary</a></li></ul></div>
            <div class="col-md-3"><h6>Cards</h6><ul><li><a href="#">Greeting Cards</a></li><li><a href="#">Handmade</a></li></ul></div>
          </div>
        </div>
      </li>

     
      <li class="nav-item dropdown-parent">
        <a class="nav-link text-danger" href="#">Sale</a>
        <div class="dropdown-menu-custom">
          <div class="row">
            <div class="col-md-3"><h6>Men</h6><ul><li><a href="#">Shirts</a></li><li><a href="#">Pants</a></li></ul></div>
            <div class="col-md-3"><h6>Women</h6><ul><li><a href="#">Dresses</a></li><li><a href="#">Tops</a></li></ul></div>
            <div class="col-md-3"><h6>Kids</h6><ul><li><a href="#">Baby Wear</a></li><li><a href="#">Footwear</a></li></ul></div>
            <div class="col-md-3"><h6>Home</h6><ul><li><a href="#">Decor</a></li><li><a href="#">Dining</a></li></ul></div>
          </div>
        </div>
      </li>

    </ul>
  </div>
  </div>
</header>
  
  
  <nav class="navbar bg-dark py-2">
  <div class="container justify-content-center">
    <span class="navbar-text text-white fw-bold fs-5">
      40% OFF ON NEW ARRIVALS &amp; KIDS COLLECTION
    </span>
  </div>
</nav>


<nav id="side-nav" class="side-nav">
  <button id="close-btn">&times;</button>
  <ul>
    <li><a href="#">ThreadRevolution</a></li>
    <li><a href="#">UrbanCouture</a></li>
    <li><a href="#">Plush Peach</a></li>
    <li><a href="#">Denim</a></li>
    <li><a href="#">MetroAesthetic</a></li>
    <li><a href="#">New Arrivals</a></li>
    <li><a href="women-section.php">Woman</a></li>
    <li><a href="men-collection.php">Man</a></li>
    <li><a href="teen-section.php">Teen</a></li>
    <li><a href="child-section.php">Child</a></li>
    <li><a href="babies-section.php">Baby</a></li>
    <li><a href="../index.php">Home</a></li>
    <li><a href="#">Gifts</a></li>
  </ul>
</nav>

<style>

.hamburger {
  display: none;
  font-size: 26px;
  background: none;
  border: none;
  cursor: pointer;
}


.side-nav {
  height: 100%;
  width: 0;
  position: fixed;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.3s;
  padding-top: 60px;
  box-shadow: 2px 0 5px rgba(0,0,0,0.3);
  z-index: 9999;
}

.side-nav ul {
  list-style-type: none;
  padding-left: 20px;
}

.side-nav ul li {
  margin: 15px 0;
}

.side-nav ul li a {
  text-decoration: none;
  font-size: 18px;
  color: #333;
  display: block;
}


#close-btn {
  position: absolute;
  top: 15px;
  right: 25px;
  font-size: 36px;
  background: none;
  border: none;
  cursor: pointer;
}


@media screen and (max-width: 767px) {
  
  .hamburger {
    display: inline-block;
  }
 
  .brand-header .brand-section a:not(.hamburger) {
    display: none;
  }

  #fullNavbar {
    display: none !important;
  }
}
</style>

<script>

document.getElementById('hamburger-toggle').addEventListener('click', function() {
  document.getElementById('side-nav').style.width = '250px';
});
document.getElementById('close-btn').addEventListener('click', function() {
  document.getElementById('side-nav').style.width = '0';
});
</script>

      
  </header>
  <!-- Hero Section --><!-- Hero Section --><!-- Hero Section --><!-- Hero Section --><!-- Hero Section --><!-- Hero Section --><!-- Hero Section --><!-- Hero Section --><!-- Hero Section -->
 <section class="custom-container my-5"id="container-id">
  <h2 class="mb-4 text-center">Men's Collection</h2>
  <div class="row g-3">
    
    <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
          <img src="pic/men1.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>

    <!-- Repeat for other products -->
   <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
           <img src="pic/men2.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>


   <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
            <img src="pic/men3.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>



 <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
      <img src="pic/men4.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>

 
   <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
         <img src="pic/men5.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>




<div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
           <img src="pic/men6.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>




    <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
             <img src="pic/men7.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>





    <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
         <img src="pic/men8.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>





    <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
           <img src="pic/men9.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>





    <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
           <img src="pic/men3.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>




    <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
           <img src="pic/men1.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>




    <div class="col-6 col-md-4 col-lg-3">
      <div class="product-card">
        <div class="product-img">
           <img src="pic/men4.jpg" alt="Lofty Crew Neck Knit" class="img-fluid">
        </div>
        <div class="product-info text-center mt-3">
          <div class="product-title">Lofty Crew Neck Knit</div>
          <div class="product-subtext">In 3 Colours</div>
          <div class="product-price mt-2">$159.95</div>
        </div>
      </div>
    </div>








  </div>
</section>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Box Section -->
<div class="container-fluid">
 <h2 class="mb-4 text-center">Choose your style</h2>
<div class="row">
 
    <div class="col-md-6 shop-section position-relative p-0"id="index-banner-bg6">
      <div class="image-container">
        <div class="bg-image" style="background-image: url('pic/left.jpg');"></div>
             <!-- <div class="bg-image" style="background-image: url('view/pic/f1000.jpg');"></div> -->
      
      </div>
    </div>

    
    <div class="col-md-6 shop-section position-relative p-0"id="index-banner-bg6">
      <div class="image-container">
        <div class="bg-image" style="background-image: url('pic/right.jpg');"></div>
        
      </div>
    </div>
  </div>
</div>

<!-- <div class="container-fluid">
  <div class="row">
   
    <div class="col-md-6 shop-section" style="background-image: url('view/pic/a1.jpg');">
      <a href="#" class="overlay-button">Shop</a>
    </div>


    
    <div class="col-md-6 shop-section" style="background-image: url('view/pic/a2.jpg');">
      <a href="#" class="overlay-button">Shop</a>
    </div>
  </div>
</div> -->




<section class="fashion-banner">
  <div class="banner-image">
    <img src="pic/acc2.jpg" alt="Men's Watch">
  </div>
  <div class="banner-content">
    <h2>"A good suit and a classic watch never go out of style."</h2>
    <p>Discover our premium selection of cozy teddy coats, classic wool styles, and chic silhouettes — tailored to elevate your wardrobe this season.</p>
    <a href="#" class="shop-button">Check Now</a>
  </div>
</section>

    <!--------------------------------------------  NEWS -------------------------------------------------- Letter ------->
  <section class="bg-light text-center py-5">
    <h4 class="mb-3">Join Our Style Circle</h4>
    <p class="mb-4">Get exclusive updates, early access & 10% off your first order</p>
    <form class="row justify-content-center g-2">
      <div class="col-md-4">
        <input type="email" class="form-control" id="e-mail-form" placeholder="Your email address">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-dark"id="sub-id">Subscribe</button>
      </div>
    </form>
  </section>
    <!--------------------------------------------  KIDS -------------------------------------------------- SECTION ------->

<section class="banner-bg d-flex align-items-center justify-content-center text-white"id="banner-bg-male">
    <div class="text-center  bg-opacity-50 p-5 rounded"id="hero-head2">
      <h2 class="display-4 mb-3" id="male-h2-s">Check out our sunglasses collection</h2>
     
      <a href="#" id="hero-btn-male"class="btn btn-light text-dark">Shop Now</a>
    </div>
  </section>
   <!--------------------------------------------  KIDS -------------------------------------------------- SECTION ------->
  <!--------------------------------------------  NEWS -------------------------------------------------- Letter ------->

  <!--------------------------------------------  NEWS -------------------------------------------------- SECTION ------->
 

  <!--------------------------------------------  NEWS -------------------------------------------------- SECTION ------->
    <!--------------------------------------------  NEWS -------------------------------------------------- SECTION ------->
  <!-- Footer -->
<footer class="bg-light text-secondary pt-5 pb-4 border-top">
  <div class="container-fluid px-5">
    <div class="row">

      <!-- About -->
      <div class="col-12 col-md-4 mb-4">
        <h5 class="text-dark text-uppercase mb-3">About Us</h5>
        <p style="line-height: 1.7;">
          Explore the essence of modern fashion. From essential basics to exclusive collections, our brand brings you style that evolves with you.
        </p>
        <a href="#" class="text-decoration-none text-secondary">Find a Store Near You <i class="fas fa-map-marker-alt ms-1"></i></a>
      </div>

      <!-- Quick Links -->
      <div class="col-6 col-md-2 mb-4">
        <h6 class="text-dark text-uppercase mb-3">Quick Links</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-secondary text-decoration-none">Home</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Shop</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">New Arrivals</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Sale</a></li>
           <li><a href="#" class="text-secondary text-decoration-none">Shirts</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Pants</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Watches</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Men's</a></li>
                    <li><a href="#" class="text-secondary text-decoration-none">Women's</a></li>
                              <li><a href="#" class="text-secondary text-decoration-none">Teen's</a></li>
                                                            <li><a href="#" class="text-secondary text-decoration-none">Kid</a></li>
                                                                                          <li><a href="#" class="text-secondary text-decoration-none">Babies</a></li>
        </ul>
      </div>

      <!-- Customer Care -->
      <div class="col-6 col-md-2 mb-4">
        <h6 class="text-dark text-uppercase mb-3">Customer Care</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-secondary text-decoration-none">Contact Us</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">FAQs</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Shipping Info</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Return Policy</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">Guidelines</a></li>
                          <li><a href="#" class="text-secondary text-decoration-none">Contact Us</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">FAQs</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Shipping Info</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Return Policy</a></li>
                <li><a href="#" class="text-secondary text-decoration-none">Guidelines</a></li>
        </ul>
      </div>

   
      <div class="col-12 col-md-4 mb-4">
        <h6 class="text-dark text-uppercase mb-3">Subscribe to Our Newsletter</h6>
        <form class="d-flex flex-column flex-sm-row mb-3">
          <input type="email" class="form-control me-sm-2 mb-2 mb-sm-0" id="newsletter-2"placeholder="Enter your email">
          <button class="btn btn-dark" type="submit">Subscribe</button>
        </form>

     
        <div class="mb-3">
          <span class="me-2">Follow us:</span>
          <a href="#" class="text-secondary me-2"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-secondary me-2"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-secondary me-2"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-secondary"><i class="fab fa-youtube"></i></a>
        </div>

       
        <div>
          <img src="https://img.icons8.com/color/48/000000/visa.png" alt="Visa" height="30">
          <img src="https://img.icons8.com/color/48/000000/mastercard.png" alt="Mastercard" height="30">
          <img src="https://img.icons8.com/color/48/000000/paypal.png" alt="PayPal" height="30">
          <img src="https://img.icons8.com/color/48/000000/amex.png" alt="Amex" height="30">
        </div>
      </div>

    </div>

    <hr class="border-dark">

    <div class="text-center text-secondary">
      <small>&copy; 2025 SnowBee || All rights reserved.</small>
    </div>
  </div>
</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>