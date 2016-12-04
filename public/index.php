<!DOCTYPE html>
<html>
<head>
	<title>PHP WEATHER SCRAPER</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" type="text/css" href="style.css">

    <!-- Optional theme -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container">

<div class="row">
<div class="col-md-6 col-md-offset-3">

<h1 class="text-center">Weather Predictor</h1>
<p class="text-center">Enter your city below to get a forcast for a weather.</p>
  
 <form>
        <div class="form-group">
          <input type="text" id="textInput" class="form-control" placeholder="Eg. Pristina, Vienna, London, NewYork...">
        </div>
        <button type="submit" id="findMyWeather" class="btn btn-success center-block">Find My Weather</button>
        <div id="succes">
           <span class='cityError'></span>
        </div>
        <div id="fail" class="btn btn-danger center-block">Could not find the data for that city please try agian.</div>
        
  </form>
<div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/js.js"></script>

</body>
</html>