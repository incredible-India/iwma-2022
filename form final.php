
<?php 

    $success="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $message_body='';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value) {
        $message_body.="$key: $value\n";
      } 

      $to='16ucc003@lnmiit.ac.in';
      $subject='contact form';
	  $headers = "MIME-Version: 1.0" . "\r\n";
	  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: 16ucc003@lnmiit.ac.in' . "\r\n";
	  $headers .= 'Cc: 16ucs200@lnmiit.ac.in' . "\r\n";
      if(mail($to, $subject,$message_body,$headers))
      {
        print_r("Sent");
        print_r($message_body);
      }
      else
        print_r("not sent");
    }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>IWMA- Contact US</title>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="animate.css">
</head>
<body>
      


<div >
		<div class="row"> 
	 	<span id="work_together">CONTACT US</span>

	 	 <div class="c1a container animated fadeInLeft delay-1s" style="padding-top: 20px;">
              <form name="contactform" method="post" action="<?=  $_SERVER['PHP_SELF']; ?>">
              	<div class="container">
              		<div class="form-group col-md-12 col-sm-12 col-lg-6 form_contact_us">
                  		<input type="text" class="form-control form-csa" aria-describedby="emailHelp" placeholder="Full Name *" name='Full_Name' style="background: #fff !important;">
                	</div>
                <div class="form-group col-md-12 col-sm-12 col-lg-6 form_contact_us">
                  <input type="email" class="form-control form-csa" aria-describedby="emailHelp" placeholder="Email *" name='Email' style="background: #fff !important;">
                </div>
                <div class="form-group col-md-12 col-sm-12 col-lg-4 form_contact_us"> 
                  <input type="text" class="form-control form-csa" aria-describedby="emailHelp" name='Organisation' placeholder="Organisation *" style="background: #fff !important;">
                </div>
                <div class="form-group col-md-12 col-sm-12 col-lg-4 form_contact_us "> 
                    
                  <input type="text" class="form-control form-csa" aria-describedby="emailHelp" placeholder="Role(Student/Researcher/Faculty)" name='Role' style="background: #fff !important;">
                </div>
                <div class="form-group col-md-12 col-sm-12 col-lg-4 form_contact_us">
                	<input type="text" class="form-control form-csa" aria-describedby="emailHelp" placeholder="Phone Number" name='Phone_No' style="background: #fff !important;">
                </div>
                <div class="container form-group" style="padding-top:180px;">
                  <textarea class="form-control" placeholder="Query *"  name='Query' style="background: #fff !important;"></textarea>
                </div>
                <!-- <button type="button" class="btn btn-csa Submit" > -->
                <div><button name="submit" type = "submit" id="contact-submit" class = "btn btn-csa Submit">submit </button>
            	</div>
            </div>
            <div style="color: white;"><?= $success; ?></div>
              </form>
          </div>
       	</div> 
</div>
 
      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script type="text/javascript">

      $("#ChangeToggle").click(function()
{
      $("#navbar-hamburger").toggle();
      $("#navbar-close").toggle();
});
    </script>
    <script type="text/javascript">
      $(".dropdown-menu li a").click(function(){

  $(this).parents(".btn-group").find('.selection').text($(this).text());
  $(this).parents(".btn-group").find('.selection').val($(this).text());

});
    </script>
</body>
</html>
