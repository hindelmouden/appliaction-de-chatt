<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
              <head>
              <meta charset="utf-8" />
              <title>Delete messages</title>
              <link rel="stylesheet" type="text/css" href="style.css">
              </head>
              <body>
			  <div class="wrapper">
                       <section class="form login">
              <form method="POST" action="supprimer_messages.php?action=6"><center>
              
              <h3>This action will delete all messages you have sent</h3>
              <br><input type="radio" name="delete" value="oui"/>Delete messages
              <br><div class="field button"><a href="login.php"><h1>Back<h1></a></div>
              <div class="field button"><input type="submit" value="Delete !" /></div>
              </center></form>
              </body>
              </html>
			  
			  
			  
			  <?php 
			   include_once "php/config.php";
			  session_start();
			  
			 if(isset($_GET['action']) && $_GET['action'] == 6) {


             $id = $_SESSION['unique_id'];

           //$sql = " DELETE FROM messages WHERE outgoing_msg_id='$id'";
           $sql = " DELETE FROM messages WHERE incoming_msg_id ='$id' || outgoing_msg_id='$id'";
            mysqli_query ($conn,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($conn));
			
          echo 'Your messages have been successfully deleted. <br /><a href="login.php"><h1>Back<h1></a>';

}
          
          
		  
		  ?>