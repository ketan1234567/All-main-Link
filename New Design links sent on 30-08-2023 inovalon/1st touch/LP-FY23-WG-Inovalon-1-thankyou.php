<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigating a Greater Patient Financial Role with Patient Statements</title>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>


   <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&amp;family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
        

  <style>
  

    body {
	  font-family: 'Source Sans Pro', sans-serif;
  background-image: url("LP-FY23-WG-Inovalon-1-thankyou_bg.png");
  background-color: #cccccc;
  background-repeat: no-repeat, repeat;
  background-size: cover; /* Resize the background image to cover the entire container */
  }


.header{
	   display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
	padding:2%;
}

 .pub_logo{
    width:80px;
  }
  .sp_logo{
    width:15%;
  }

  .holder{
    display: flex;
  }

  .left{
    flex-basis: 30%;
    padding: 1%;
  }

  .right{
    flex-basis: 70%;
    padding: 1%;
  }


  .card{

    width:100%;
    background-color: #cfcfcf;
    border:1px solid  #a5a5a5;
    margin-bottom: 1%;
  }

  .card .title{
   padding: 3px;

  }

  .card .content{
   padding: 3px;
   background-color: #fff;

  }


  .card .content video{
  min-width:460px;
  }
  
  
  .footer{
	  color:#fff;
  }
  .footer a{
	  color:#fff;
	  text-decoration:underline;
  }
  
  @media only screen and (max-width: 600px) {
  .holder{
    display: block;
  }
  
    .card .content video{
  min-width:100%;
  }
}
  
  </style>

</head>
<body>
  
<div>

  <div class="header">
  
  <img  src="Final-CMO-CIO-Logos_CMO-Logo.png"  class="pub_logo"/>
  <img  src="Inovalon_logo_white.png"  class="sp_logo"/>
  
  </div>

  <div class="holder">
    <div class="left">
      

      <div class="card">
        <div class="title">
        Resources
        </div>
        <div class="content">
          <a href="https://resource.cmofirst.com/whitepaper/LP-FY23-WG-Inovalon-1.mp4" download>Download this webinar</a>
          </div>
      </div>



	<br>

      <div class="card">
        <div class="title">
        Q&A
        </div>
        <div class="content" >
			<div style="border:1px solid gray;background-color:#ededed;min-height:120px;">
			
			</div>
			<br>
          <div style="display:flex;">
		  <div style="flex-basis:90%;"><input type="text" name="" id="q_a_input" style="width:100%" /></div>
		  <div style="flex-basis:10%;"><button id="q_a_submit">Submit</button></div>
		  <div style="color:green;" id="resp"></div>
		  </div>
          </div>
      </div>

    </div>
    <div class="right">
      <div class="card">
        <div class="title"> Webinar </div>
        <div class="content">
          <video  
width="100%"
  id="podcast" controls autoplay playsinline autoplay muted loop>
 <source src="https://resource.wegomedia.com/whitepaper/LP-FY23-WG-Inovalon-1.mp4" type="video/mp4">

  Your browser does not support the video tag.
</video>




<script>





  var total_time=0;

  const params = new Proxy(new URLSearchParams(window.location.search), {
  get: (searchParams, prop) => searchParams.get(prop),
  });
  // Get the value of "some_key" in eg "https://example.com/?some_key=some_value"
  
 let email = `<?php echo base64_decode($_GET['e']); ?>`;
  //let email = atob(params.e);
 


  var podcast = document.getElementById("podcast");

  podcast.addEventListener("play", function() {
  var time = podcast.currentTime;
  total_time=time
  });

  podcast.addEventListener("timeupdate", function() {
  var time = podcast.currentTime;
  total_time=time
  console.log("Current time: " + total_time);
  });

  podcast.addEventListener("ended", function() {
  var time = podcast.currentTime;
  total_time=time
  pass_data_to_server("VIDEO_COMPLETED");
  });



  addEventListener('beforeunload',(event) =>{
      pass_data_to_server("BEFORE_UNLOAD_page_exit");
  });



  function pass_data_to_server(event="UNKNOWN"){
      let formData = new FormData();
	  
	  total_time = Math.round(total_time);
	  
      formData.append('camp_id',"WegoMedia_LP-FY23-WG-Inovalon-1");
      formData.append('firstname', 'LP-FY23-WG-Inovalon-1_VIDEO_STATS');
      formData.append('data[0]', "Email:-"+email);
      formData.append('data[1]', "Total Time:-"+total_time);
      formData.append('data[2]', "Event:-"+event);
      fetch("https://resource.cmofirst.com/whitepaper/LP-FY23-WG-Inovalon-1-video_stats.php", {
          keepalive: true, // navigator.sendBeacon replacement  = keepalive: true
          method: 'post',
          headers: {
          //'content-type': 'application/json',
          // any header you can pass here
          },
          body: formData,
      });
  }



  function submit_qa(question=""){
    
	  
	  var myKeyVals = { 'camp_id' : 'WegoMedia_LP-FY23-WG-Inovalon-1', 'firstname' : 'LP-FY23-WG-Inovalon-1_QA', 'data[0]' : "Email:-"+email ,'data[1]' : "Question:-"+question}
	  $.ajax({
      type: 'POST',
      url: "https://resource.cmofirst.com/whitepaper/LP-FY23-WG-Inovalon-1-submit_QA.php",
      data: myKeyVals,
      dataType: "text",
      success: function(resultData) { $("#resp").html("Submitted"); }
		});
  }
  
  
  
  $(document).ready(function(){


$("#q_a_submit").on("click",function(){
const question=$("#q_a_input").val();
if(question.length>0){
submit_qa(question)
}

});


});

</script>


          </div>
      </div>

    </div>
  </div>

</div>


<div class="col py-5 pt-4 footer" style="text-align:center;">
                     
                        <div class="mktoText text mt-4 ps-1" id="footer-text"><p><br>© 2023 CMOFirst - a brand owned and operated by Wego Media LLC.  All rights reserved.<br></p>
<p>
<a href="https://cmofirst.com/unsubscribe" target="_blank">Unsubscribe</a>  <br>
<a href="https://cmofirst.com/privacy-policy/" target="_blank">CMOFirst Privacy Policy</a> | 
<a href="https://www.inovalon.com/privacy-policy/" target="_blank">Inovalon Privacy Policy</a>
</p></div>
                    </div>

</body>
</html>