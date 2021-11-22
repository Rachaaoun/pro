<?php

include 'headerback.php';

include '../Controller/UserController.php';
$userC = new UserContoller();
	$liste=$userC->afficherUtilisateurTrier(); 

?>


<main class="main--container">
<section class="main--content">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Modals Triggering</h3>
                    </div>

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-cells-middle">
                                <thead class="text-dark">
                                  
                                    <tr>
                                    <th scope="col">Numero</th>
                    <th scope="col" >Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
				foreach($liste as $user){
          ?>
                                    <tr>
                                                      <td><?php echo $user['id']; ?></td>
                    <td class="tm-product-name"><?php echo $user['email']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    
                   
                    
                    <td>
					<form method="POST" action="modifierutilisateur.php?id=<?php echo $user['id']; ?>">
						<input type="submit" name="Modifier" value="Modifier" class="btn btn-primary btn-block text-uppercase sm-1">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
					</form>
				     </td>

                <td>
			
			
                    
                    </td>
				<td>
				<a href="supprimerutilisateur.php?id=<?php echo $user['id']; ?>"  class="tm-product-delete-link" >
				<i class="far fa-trash-alt tm-product-delete-icon"></i>
			</a>
			
                    
          </td>
                    <?php if ($user['role'] == 'USER') {?>
                    <td>
                                  
                      <a href="admin.php?id=<?php echo $user['id']; ?>"   >
                      SET as ADMIN
                    </a>
                    
                    
                    </td>
                    <?php } ?>
                                    </tr>
                                    <?php
				}
			?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
      </div>