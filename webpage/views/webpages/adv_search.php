<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../../js/adv_search.js"></script>
  <script type="text/javascript">
      $(document).on("ready",function(){
        $(".table-counter").on("click", function(event){
          event.preventDefault();
        console.log("clicked");
        $.ajax({
            url: '/php/total_row.php',
            type: 'GET',
            dataType: 'text',
            success: function(data){
              console.log(data);
              alert("Total Number Tuples: " + data);
            },
            error: function(request,error){
              console.log(error);
            },
            complete: function(){
              console.log("done!");
            }
        });
      });
      });
      
    </script>
</head>
<body>

<div class = "container-fluid">
    <div class="row">
  
      <nav class="navbar navbar-light bg-faded">
        <img class="logo" src="../../photos/unnamed.png">
        <a class="navbar-brand" href="http://192.168.99.100/">ЯR</a>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item active">
             <a class="nav-link" href="http://192.168.99.100/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link table-counter" href=""><span>Total Tuples</span></a>
          </li>

        </ul>
      </nav>
    </div>
    
    <div class="row bg-img-pro">
      <div class="bg-gradient-pro">

      </div>
    </div>


		<form class="adv_form">
      <h2 style="text-align:center; color:white; margin-bottom: 20px">Advanced Search</h2>
		  <input class="keyword_search" type="text" placeholder="Keyword Search">

      <div class="row drop_row">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle btn-cuisine" type="button" data-toggle="dropdown">Cuisine
          <span class="caret"></span></button>
          <ul class="dropdown-menu dd-cuisine">
          
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle btn-venue-type" type="button" data-toggle="dropdown">Venue Type
          <span class="caret"></span></button>
          <ul class="dropdown-menu dd-venue-type">
          
          </ul>
        </div>

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle btn-price" type="button" data-toggle="dropdown">Price
          <span class="caret"></span></button>
          <ul class="dropdown-menu dd-price">
            <li><a class="dropdown-item" href="#">$</a></li>
            <li><a class="dropdown-item" href="#">$$</a></li>
            <li><a class="dropdown-item" href="#">$$$</a></li>
            <li><a class="dropdown-item" href="#">$$$$</a></li>
            <li><a class="dropdown-item" href="#">$$$$$</a></li>
          </ul>
        </div>

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle btn-rating" type="button" data-toggle="dropdown">Average Rating
          <span class="caret"></span></button>
          <ul class="dropdown-menu dd-rating">
            <li><a class="dropdown-item" href="#">1</a></li>
            <li><a class="dropdown-item" href="#">2</a></li>
            <li><a class="dropdown-item" href="#">3</a></li>
            <li><a class="dropdown-item" href="#">4</a></li>
            <li><a class="dropdown-item" href="#">5</a></li>
          </ul>
        </div>

      </div>
      <div class="row">
          <input class="city_search" type="text" placeholder="City">
          <input class="state_search" type="text" placeholder="State">
          <input class="zip_search" type="text" placeholder="Zip Code">
      </div>

  		<!-- <div class="checkbox">
      	<label>
        		<input type="checkbox"> Open Now 
      	</label>
   		</div> -->
      <div class="row alone_drop">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle btn-order-by" type="button" data-toggle="dropdown">Order By
          <span class="caret"></span></button>
          <ul class="dropdown-menu dd-order-by">
            <li><a class="dropdown-item" href="#">Average Rating</a></li>
            <li><a class="dropdown-item" href="#">Price</a></li>
          </ul>
        </div>
      </div>


   		<button type="submit" class="btn btn-default">Submit</button>

 		</form>

 		<div class="adv-info">
		</div>	
  </div>
			  					
</div>

</body>
</html>