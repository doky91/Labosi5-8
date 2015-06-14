<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link href="http://jqmdesigner.appspot.com/gk/lib/jquery.mobile/1.4.5/flatui/jquery.mobile.flatui.css" rel="stylesheet" type="text/css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <!-- Uncomment the following to include cordova in your android project -->
  <!--<script src="http://jqmdesigner.appspot.com/platforms/android/cordova.js"></script>-->
  <title>Pretraživanje s mobitela</title>



 <script type="text/javascript">
            $(document).ready(function(){
                 
                 function search(){
 
                      var title=$("#search").val();
 
                      if(title!=""){
                       $("#result").html("<img alt='ajax search' src='ajax-loader.gif'/>");
                         $.ajax({
                            type:"post",
                            url:"ajaxtrazenjemob.php",
                            data:"title="+title,
                            success:function(resultati){
                              $('#result').html(resultati);
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


</head>

<body>
  <!-- Page: home  -->
  <div id="home" data-role="page">
    <div role="main" class="ui-content">
      <div class="ui-field-contain">
        <label for="gk-613Pth7">Traži proizvode:</label>
        <input type="search" name="search" id="search">
           
      </div>

      <a class="ui-btn" id="next">Sljedeći</a>
      <ul id="result"></ul>
      <a class="ui-btn" id="prev">Prethodni</a>
    </div>
  </div>
</body>

</html>
