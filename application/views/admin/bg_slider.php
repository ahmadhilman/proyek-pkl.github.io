<?php 
echo " <!DOCTYPE HTML>
  <html>
    <head>
 <title>
 hilman.com slider
 </title>
      <!--import google icon font-->
      <link href='http://fonts.googleapis.com/icon?family=material+icons' rel='stysheet'>
      <!--import materialize.css-->
      <link type='text/css' rel='stylsheet' href='css/materialize.min.css'  media='screen,projection'/>
      <!--let browser know website is optimized for mobile-->
      <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
    </head>
    <body>
 <div class='container'>
  <div class='slider'>
    <ul class='slides'>";

{
     echo " <li>
        <img src='".$data->gambar."'> <!-- random image -->
        <div class='caption center-align'>
          <h3>keterangan</h3>
          <h5 class='light grey-text text-lighten-3'>".$data->keterangan."</h5>
        </div>
      </li>";
}
    echo "</ul>
  </div>
  </div> 
      <!--IMPORT JQUERY BEFORE MATERIALIZE.JS-->
      <SCRIPT TYPE='TEXT/JAVASCRIPT' SRC='HTTPS://CODE.JQUERY.COM/JQUERY-2.1.1.MIN.JS'></SCRIPT>
      <SCRIPT TYPE='TEXT/JAVASCRIPT' SRC='JS/MATERIALIZE.MIN.JS'></SCRIPT>
   <!-- CREATE BY ARIFWEB.COM -->
   <SCRIPT TYPE='TEXT/JAVASCRIPT' >  
   $(DOCUMENT).READY(FUNCTION(){
    $('.SLIDER').SLIDER({FULL_WIDTH: TRUE});
 });
 </SCRIPT>
<A HREF='ARIFWEB.COM' > ©2016 </A>
    </body>
  </html>
 ";

?>