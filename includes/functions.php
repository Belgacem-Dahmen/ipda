

  <?php
            //récuperation des utilisateurs de la BDD
            
            function getUsers(){
            //Connexion
            $servername = "localhost";
            $username = "admin";
            $password = "admin";
            $dbname="ipda";
            
            try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              echo "Connected successfully";
            } catch(PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
            }

            //preparation requete
            $requete="SELECT * FROM users";
            //execution requete
            $resultat=$conn->query($requete);
            //resultat de la requete
            $users =$resultat->fetchAll();  

            return $users;
          }
        ?>  
