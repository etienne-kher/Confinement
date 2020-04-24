<?php 

class profile
{

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "rush";


   
        
    public function modif_profil($login, $email, $prenom, $nom, $password)
    {
        $connexion = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        
        if(isset($_POST['modifier_profil'])) 
        {
            if($_POST['login'] != $login)
            {
                $nouveau_login = "SELECT id FROM utilisateurs WHERE login='".$_POST['login']."'";
                $resultat = mysqli_query ($connexion, $nouveau_login);
                $nombrelogin = mysqli_num_rows($resultat);

                if($nombrelogin < 1)
                {
                    $sql = "UPDATE utilisateurs SET login = '".$_POST['login']."' WHERE id = '".$_SESSION['id']."'";
                    mysqli_query($connexion, $sql);
                    $_SESSION['login'] = $_POST['login'];
                  
                }
                else
                {
                    echo "Le pseudo ".$_POST['login']." n'est pas disponible";
                }
            }
            
            if($_POST['passe'] != $password)
            {
                $passe = password_hash($_POST['passe'], PASSWORD_DEFAULT);
                $sql = "UPDATE utilisateurs SET password = '$passe' WHERE id = '".$_SESSION['id']."'";
                mysqli_query($connexion, $sql);
                

            }

            if($_POST['prenom'] != $prenom)
            {
                $sql = "UPDATE utilisateurs SET prenom ='".$_POST['prenom']."' WHERE id = '".$_SESSION['id']."'";
                mysqli_query($connexion, $sql);
                
            }

            if($_POST['nom'] != $nom)
            {
                $sql = "UPDATE utilisateurs SET nom = '".$_POST['nom']."' WHERE id = '".$_SESSION['id']."'";
                mysqli_query($connexion, $sql);
                
            }
            
            if($_POST['email'] != $email)
            {
                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['email']))
                {
                    $nouveau_mail = "SELECT id FROM utilisateurs WHERE email='".$_POST['email']."'";
                    $resultat = mysqli_query ($connexion, $nouveau_mail);
                    $nombre_mail = mysqli_num_rows($resultat);

                    if($nombre_mail < 1)
                    {
                        $sql = "UPDATE utilisateurs SET email = '".$_POST['email']."' WHERE id = '".$_SESSION['id']."'";
                        mysqli_query($connexion	, $sql);
                        
                    }
                    else
                    {
                        echo "Le mail ".$_POST['email']." existe déja";
                    }
                }
                else
                {
                    echo "Veuillez remplir correctement votre email";
                }
            }
            header('location: profil.php'); 
        }
    }


}




?>