<?php
    include_once '../Controller/UserController.php';


   
       $error = "";
   
       // create adherent
       $user = null;
   
       // create an instance of the controller
       $userC = new UserContoller();
      

	$userC->supprimerUtilisateur($_GET["id"]);
	header('Location:listeutlisateur.php');
?>