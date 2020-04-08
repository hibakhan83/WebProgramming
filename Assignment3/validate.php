<html>
<head>
  <h1>Assignment 3</h1>
  <hr>
  <br>
  <br>
<link rel="stylesheet" type="text/css" href="hw3style.css">
</head> 

<body>
  <div class="container">
<h2 style="text-align: center;">Form Validation</h2>
<form method="get" action="validateConfirm.php">  
    <div class="col-25">
      Email: 
    </div>
    <div class="col-75">
        <input type="text" name="email" placeholder="Email">
      </div>
  <br>
  <br>

    <div class="col-25">
      First Name: 
    </div>
    <div class="col-75">
      <input type="text" name="fname" placeholder="First Name">
    </div>
  <br>
  <br>

  <div class="col-25">
      Birthday: 
  </div>
  <div class="col-75">
      <input type="text" name="bday" placeholder="mm/dd/yyyy">
  </div>
  <span class="error">
    
  </span>
  <br>
  <br>

  <div class="col-25">
      Age: 
  </div>
  <div class="col-75">
      <input type="text" name="age" placeholder="Age">
  </div>
  <br>
  <br>

  <div class="col-25">
      State: 
  </div>
  <div class="col-75">
      <input type="text" name="state" placeholder="ST">
  </div>
  <br>
  <br>

  <div class="col-25">
      Zip: 
  </div>
  <div class="col-75">
      <input type="text" name="zip" placeholder="Zip">
  </div>
  <br>
  <br>

  <input type="submit" name="submit" value="Submit Form">  
  <br>
  <br>

  <input type="submit" name="validate" value="Submit without HTML5 validation">

  <br><br>
  <a href="http://codd.cs.gsu.edu/~hkhan14/Assignments/3/hw3.php">Reload Page</a>
</form>
</div>

</body>
</html>