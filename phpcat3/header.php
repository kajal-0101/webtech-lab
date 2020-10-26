
<style>
  .main ul{
  float: right;
  list-style-type: none;
  margin-top: 25px;
}

.main ul li{
  display: inline-block;
}

.main ul li a{
  text-decoration: none;
  color: #fff;
  padding: 5px 20px;
  border: 1px solid transparent;
  transition: 0.6s ease;
}

.main ul li a:hover{
  background-color: #fff;
  color: #000;
}

.main ul li.active a{
  background-color: #fff;
  color: #000;
}

</style>

<div class="main" style="max-width: 1200px;
  margin: auto;">
      <div class="logo">
        <img src="pic/sports.jfif" style="float: left;
  width:150px;
  height: auto;
  border-radius: 10px;">
      </div>
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="#" target="_blank">Contact</a></li>
        <li><a href="registration.php">Membership</a></li>
        <li><?php
        if(!isset($_SESSION['name'])){
        ?>
          <a href="login.php">Log In</a></li>
          <?php
        }else{
          ?>
          <button style="background-color: transparent;border: none;color: white;cursor: pointer;" onclick="logout()">Logout</button>
          <?php
        }
        ?>
      </ul>
    </div>
