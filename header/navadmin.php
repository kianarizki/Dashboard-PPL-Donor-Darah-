<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color:#960000;
}

.navbar a {
  float: right;
  font-size: 21px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-weight: bold;
}

.dropdown {
  float: right;
  overflow: hidden;
  font-size: 21px;
  font-weight: bold;
}

.dropdown .dropbtn {
  font-size: 21px;
  font-weight: bold;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: inherit;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">

  <div class="dropdown">
    <button class="dropbtn">More
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="donation.php">Proceed a Donation</a>
      <a href="donationlist.php">Donation List</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>
  <a href="about.php">About</a>
  <a href="home.php">Home</a>

</div>
<div class="image">
<img src="img/show.png" alt="" WIDTH=1263 HEIGHT=300/>
</div>
</body>
</html>
