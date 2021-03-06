<?php 
  session_start(); 

  if (!isset($_SESSION['id'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: adlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['id']);
  	header("location: adlogin.php");
  }
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
       <i> <link rel="icon" href="favicon.ico" type="image/icon"></i>
      <span class="logo_name">HIRING BOX</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">BRANCH</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">YEAR</span>
          </a>
        </li>
        
        
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Student list</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">admin name</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total offers</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Average ctc</div>
            <div class="number">Rs. 7.5LPA</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Highest ctc</div>
            <div class="number">Rs.29.5 LPA</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Not Placed Students</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Statistics</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
              <li><a href="#">02 Jan 2022</a></li>
            </ul>
            <ul class="details">
            <li class="topic">STUDENT NAME</li>
            <li><a href="#">Alex Doe</a></li>
            <li><a href="#">David Mart</a></li>
            <li><a href="#">Roe Parter</a></li>
            <li><a href="#">Diana Penty</a></li>
            <li><a href="#">Martin Paw</a></li>
            <li><a href="#">Doe Alex</a></li>
            <li><a href="#">Aiana Lexa</a></li>
            <li><a href="#">Rexel Mags</a></li>
             <li><a href="#">Tiana Loths</a></li>
          </ul>
          <ul class="details">
            <li class="topic">CTC</li>
            <li><a href="#">12LPA</a></li>
            <li><a href="#">10LPA</a></li>
            <li><a href="#">11LPA</a></li>
            <li><a href="#">11LPA</a></li>
            <li><a href="#">11LPA</a></li>
            <li><a href="#">11LPA</a></li>
            <li><a href="#">11LPA</a></li>
             <li><a href="#">11LPA</a></li>
            <li><a href="#">11LPA</a></li>
          </ul>
          <ul class="details">
            <li class="topic">COMPANY NAME</li>
            <li><a href="#">AMAXON</a></li>
            <li><a href="#">CISCO</a></li>
            <li><a href="#">TCS</a></li>
            <li><a href="#">INFOSYS</a></li>
            <li><a href="#">AMAZON</a></li>
            <li><a href="#">AMAZON</a></li>
            <li><a href="#">AMAZON</a></li>
             <li><a href="#">AMAZON</a></li>
             <li><a href="#">AMAZON</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top Recruiting companies</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <!--<img src="images/sunglasses.jpg" alt="">-->
              <span class="product">AMAZON</span>
            </a>
            <span class="price">29LPA</span>
          </li>
          <li>
            <a href="#">
               <!--<img src="images/jeans.jpg" alt="">-->
              <span class="product">CISCO </span>
            </a>
            <span class="price">33LPA</span>
          </li>
          <li>
            <a href="#">
             <!-- <img src="images/nike.jpg" alt="">-->
              <span class="product">TCS</span>
            </a>
            <span class="price">12LPA</span>
          </li>
          <li>
            <a href="#">
              <!--<img src="images/scarves.jpg" alt="">-->
              <span class="product">INFOSYS</span>
            </a>
            <span class="price">10LPA</span>
          </li>
          <li>
            <a href="#">
              <!--<img src="images/blueBag.jpg" alt="">-->
              <span class="product"> SHELL</span>
            </a>
            <span class="price">12LPA</span>
          </li>
          <li>
            <a href="#">
              <!--<img src="images/bag.jpg" alt="">-->
              <span class="product">BYJUS</span>
            </a>
            <span class="price">12LPA</span>
          <li>
            <a href="#">
              <!--<img src="images/addidas.jpg" alt="">-->
              <span class="product">WIPRO</span>
            </a>
            <span class="price">22LPA</span>
          </li>
<li>
            <a href="#">
             <!--<img src="images/shirt.jpg" alt="">-->
              <span class="product">APPLE</span>
            </a>
            <span class="price">20LPA</span>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
























































































	
        


    <?php endif ?>
   


</div>

</body>
</html>