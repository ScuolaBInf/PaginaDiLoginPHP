<!DOCTYPE html>
<html>
	<head>
  		<title>
        	Convalida Registrazione
        </title>
        <?php
        	function ControlloPassword()
            	{
                	$account = fopen("Utenti/".$_POST['id'], "r");
                	if ($_POST['password'] == fgets($account))
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
        ?>
	</head>

	<body>
    	<?php
			if (ControlloPresenzaAccount())
            	echo "<h1> Account ".$_POST['id']." non presente </h1>";
            else
            	if (ControlloPassword())
                	echo "<h1> Benventuto nell'area Riservata </h1>";
                else
                	echo "<h1> Password Sbagliata </h1>";
        ?>
	</body>
</html>