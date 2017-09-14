<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="kollektion.php">Kollektion</a></li>
                    <li><a href="Shop.php">Shop</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                    <li><a href="Management.php">Forhandlere</a></li>
                </ul>
            </nav>
            <h3>Kontakt os</h3>
            Har du spørgsmål eller andet, kan du kontakte Izabel Camille på telefon 4826 1650 alle hverdage ml. 09.00 - 15.00 eller e-mail info@izabelcamille.dk <br>
            <br>
			Izabel Camille ApS<br>
			Slotsgade 65 B1<br>
			3400 Hillerød<br>
			Telf: 4826 1650<br>
       
         
     <br> 
<p>Du kan også benytte nedenstående formular til at kontakte os.Vi forsøger at vende tilbage til dig hurtigst muligt.<br></p>

    <div class="kontakt">
    </div>
<br>
<form action="action_page.php">
  Fornavn:<br>
  <input type="text" name="FORNAVN" value="">
 <br><br>
  Efternavn:<br>
  <input type="text" name="EFTERNAVN" value="">
  <br><br>
  Mail:<br>
  <input type="text" name="Mail" value="">
  <br><br>
</form> 
<form action="demo_form.asp" id="usrform"> 
</form>
<br>
<textarea rows="10" cols="50" name="comment" form="usrform">
Skriv din kommentar...</textarea>
      <br><br> 
     <input type="submit">
          <br><br> 
<div class="bredkasse">
    
<div class="cv"><br>
<br> <br> 

 
   <div id="content_area">
                <?php echo $content; ?> 
        <div class="bredkasse">
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
