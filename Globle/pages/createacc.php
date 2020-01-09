<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
  <meta charset="UTF-8">
  <meta name="description " content="Best coaching classes">
  <meta name="keywords" content="coaching , bhopal ,globle , 10th,11th,12th,commerce,suraj sahu">
  <meta name="author" content="suraj sahu">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Globle | Admin login</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat&display=swap" rel="stylesheet">
    <style>
  body{
  font-family: 'montserrat', sans-serif;
  background-color: #f3f3f3 !important;
  

 }
  
  h1,h2,h3,h4,h5{
  font-family: 'merriweather',serif;
  
 }
    </style>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        
        <div class="container w3-padding-large">
                <h2>Create Admin account</h2>
<form action="action.php" method="POST">
  <div class="form-group">
    <label for="Phone">Phone:</label>
    <input type="text" class="form-control" name="Phone" id="Phone">
  </div>
  <div class="form-group">
      <label for="uName">UserName:</label>
      <input type="text" class="form-control" name="uName" id="uName" required="required">
  </div>
  
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password" required="required" >
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" required="required"> All info checked
    </label>
  </div>
  <input type="hidden" value="general" name="type">
  <button type="submit" class="btn btn-primary" name="cret_ac">Submit</button>
</form>
</div>
</div>
</body>
</html>
