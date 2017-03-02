<!DOCTYPE html>
<html>
	<head>
  		<title>
        	Convalida Registrazione
        </title>
        <?php
        	function ControlloPassword()
            	{
                	if ($_POST['password'] == $_POST['ripetiPassword'])
                    	return true;
                    else
                    	return false;
                }
                
            function ControlloPresenzaAccount()
            	{
                	$account = fopen("Utenti/".$_POST['id'], "r");
                    if ($account == null)
                    	return true;
                    else 
                        return false;
               	}
                
            function CreaAccount()
            	{
                	$account = fopen("Utenti/".$_POST['id'], "w");
                    fwrite($account, $_POST['password']);
                    fclose($account);
                    echo "<h1> Account Registrato con Successo! </h1>";
                }
        ?>
	</head>

	<body>
    	<?php
			if (!ControlloPassword())
            	echo "<h1> Le due Password non Corrispondono </h1>";
            else
      	            if (ControlloPresenzaAccount())
                       	CreaAccount();
                    else
  	                 	echo "<h1> Il nome utente e' gia' utilizzato </h1>";
        ?>
	</body>
</html>