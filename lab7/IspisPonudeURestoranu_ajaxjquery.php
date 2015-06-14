<html>
<head> <title> Ponuda slastica</title> 
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"  type="text/css"/>
<link rel="stylesheet" href="mojcss.css"  type="text/css"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                 
                 function search(){
 
                      var title=$("#search").val();
 
                      if(title!=""){
                       $("#result").html("<img alt='ajax search' src='ajax-loader.gif'/>");
                         $.ajax({
                            type:"post",
                            url:"ajaxtrazenje.php",
                            data:"title="+title,
                            success:function(data){
                                $("#result").html(data);
                                $("#search").val("");
                             }
                          });
                      }
                      
 
                     
                 }
 
                  $("#button").click(function(){
                  	 search();
                  });
 
                  $('#search').keyup(function(e) {
                     if(e.keyCode == 13) {
                        search();
                      }
                  });
            });
        </script>

<body>

<div class="row">
  <h1>Zlatina kuća delicija </h1>
  </div>
<div class="row">
<div class="span4"> 
<ul class="nav nav-pills nav-stacked">
   <li><a href="FormaUnos.php"> Unos novog proizvoda</a><li>
  <li><a href="IspisPonudeUrestoranu.php"> Naši proizvodi</a><li>
  <li><a href="Unos alergena i tipa.php"> Unos alergena i tipa</a><li>
      <li><a href="OsobniPodaci.php"> Osobni podaci</a><li>
  <li><a href="TraženjePDF.html"> Traženje za PDF</a><li>

</ul>
</div></div>



        <div id="container">
             <input type="text" id="search" placeholder="Traži hranu"/>
             <input type="button" id="button" value="Search" />
             <ul id="result"></ul>
        </div>
  </body>

</html>