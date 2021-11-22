<?php

include '../config.php';
include '../Models/User.php';


class UserContoller{



    function ajouterUtilisateur($user){

        $sql="INSERT INTO user (username,email,password) VALUES (:username,:email,:password)";
        $db = config::getConnexion();

        try {

            $query = $db->prepare($sql);

            $query->execute([
                'username' =>$user->getUsername(),
                'email'=>$user->getEmail(),
                'password'=>$user->getPassword(),
            ]);
            $username=$user->getUsername();
            $email=$user->getEmail();
            $password=$user->getPassword();
           // header("location: welcome.php?username=$username,email=$email");


        }catch(Exception $e){
            echo 'Erreur : '.$e->getMessage();

        }





    }

    function modifierUtilisateur($user,$id){

		try {
			$db = config::getConnexion();
		

			$sql="UPDATE user  SET username= :username,email= :email,password= :password WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':username', $user->getUsername());
			$req->bindValue(':id', $id);
			$req->bindValue(':email', $user->getEmail());
			$req->bindValue(':password', $user->getPassword());
			
			$req->execute();
		//	echo $query->rowCount() . " records UPDATED successfully <br>";
      
		} catch (PDOException $e) {
			$e->getMessage();
		}

		
	}


    function supprimerUtilisateur($id){
        $sql="DELETE FROM user WHERE id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{

            $req->execute();
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }



    function afficherUtilisateur(){
        $sql='SELECT * FROM user ';
        $db=config::getConnexion();
        
        try{
            $list=$db->query($sql);
            return $list;

        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }

    function recupererUtilisateur($id){
        $sql='SELECT * FROM user WHERE id=:id';
        $db=config::getConnexion();
        try{
          

            $query=$db->prepare($sql);
            $query->bindValue(':id', $id);
                    $query->execute();

                    $user=$query->fetch();
                    return $user;
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }

    }

    function login($username,$password){
        $sql="SELECT * FROM user WHERE username = '$username' and password = '$password'";
        $db=config::getConnexion();
        try{
        
  
            $query=$db->prepare($sql);
            $query->execute();
            $user=$query->fetch();
           // var_dump($user['email']);
            $email=$user['email'];
            $password=$user['password'];
            $id=$user['id'];
            $count= $query->rowCount();
            if($count == 1) {
              
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                
                header("location:my-profile.php?username=$username&id=$id&email=$email&password=$password");
             }else {
                $error = "Your Login Name or Password is invalid";
             }
           
        }catch(Exception $e){
            echo 'Erreur'. $e->getMessage();
        }
    }


    function logout(){
     
   
     if(session_destroy()) {
      header("Location: login.php");
    }
    }







}











?>