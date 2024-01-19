
<!doctype html>
<html>
    <head>
        <title>Table-Tennis-Tournament</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Script -->
			<script src='jquery-3.1.1.min.js' type='text/javascript'></script>
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
       
		
		<link rel="stylesheet" href="./style.css">
	
    </head>
    <body >
	

<div class="container">
    <!-- code here -->
    <div class="card">
      <div class="card-image">
        <h2 class="card-heading">
          <span style="font-size: 2.1rem; color:#fff;">Register</span>
          <small style="color: #f7f7f1;padding: 16px 10px;box-shadow: rgb(62 29 22) 0px 7px 29px 0px;backdrop-filter: blur( 27px );-webkit-backdrop-filter: blur( 20px );/* border-radius: 10px; *//* border: 1px solid rgba( 255, 255, 255, 0.18 ); *//* border-radius: 10px; */box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;/* padding: 0.75rem; *//* float: right; */">Table Tennis Tournament</small>
		  
        </h2>
      </div>
      <form class="card-form" action="#" method="post" id="tennis_tournament">
        <div class="input">
          <input type="text" class="input-field" name="eid" id="eid" required />
          <label class="input-label">Employee ID</label>
        </div>
        <div class="input">
          <input type="text" class="input-field" name="ename" id="ename" required />
          <label class="input-label">Employee Name</label>
        </div>
        <div class="input">
          <input type="text" class="input-field" name="edept" id="edept" required />
          <label class="input-label">Department</label>
        </div>
		 <div class="input">
          <input type="text" class="input-field" name="Reporting_Leader" id="Reporting_Leader" required />
          <label class="input-label">Reporting Leader</label>
        </div>
        <div class="action">
         <center> <button class="action-button" id="submit" value="Submit" style="text-transform:uppercase">Register</button></center>
		  
		   
		   
        </div>
      </form>
    </div>
  </div>
  
	 
	
		
		</div>
         





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="linksFunctions.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
</html>