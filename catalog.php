<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .bodyLi{
      list-style-type: none;
      float:left;
      margin: 30px;
  
    }
.header  {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #00FFFF;
}

.headerLi {
    float: left;
}

li a {
    display: block;
    color: #777;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #fff;
}

li a.active {
    color: white;
    background-color:blue;
}
p{
  display: inline-block;
  margin: 20px;
  padding-left: 40px;
}
  h1{
    text-align: center;
  }
</style>
</head>
<body>
  <h1>MLN</h1>
  <ul class="header">
   <li class="headerLi"><a class="active" href="#home">MLN</a></li>
  <li class="headerLi"><a href="catalog.php">Catalog</a></li>
  <li class="headerLi"><a href="register.php">Register</a></li>
  <li class="headerLi"><a href="login.php">Login</a></li>
  </ul>
  <h1>Catalog</h1>
  <div>
    <ul>
      <li class="bodyLi">Artist</li><li class="bodyLi">Track</li><li class="bodyLi">Genre</li><li class="bodyLi">Download</li><li class="bodyLi">Buy License</li>  
    
    </ul>
  </div>

</body>
</html>
