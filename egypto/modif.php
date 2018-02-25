<?php
    try{
        $db = new PDO('mysql:host=127.0.0.1:3306;dbname=egyptomaniadb','cedric','cedric');
    }catch(PDOException $err) {
        print "Erreur :" . $err->getMessage() . "<br>";
        die("Erreur de connexion");
    }
    
    

    if (isset($_GET["name"]) && trim($_GET["name"]) != '') {
        
        $sql = 'SELECT * FROM lieu WHERE NomLieu = "'.$_Get["name"].'"';
        $request = $db->query($sql);
        $result = $request->fetchAll(PDO::FETCH_BOTH);
        
        if(count($result) > 0) {
            
            print_r($result);
        }
        else {
            echo "Pas de correspondant";
        }
        
    }
    else {
        echo "Pas de valeur";
    }


?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf8">
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="nom">
			<input type="text" value="<?php echo $row["NomLieu"]; ?>" name="namr">
		</div>
		<div>
		</div>
	</form>
</body>

</html>



















