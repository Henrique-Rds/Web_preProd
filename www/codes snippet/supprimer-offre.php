<?php
    /**
    * Améliorations à apporter :
    * Changer la liaison BDD en utilisant la classe Gestion BDD (prendre exemple sur les autres codes)
	*/
	
	//LIAISON A LA BDD
	$serveur="localhost";
	$utilisateur="lab0611sql3";
	$password="1pm6STt9TE0n"
	$db="lab0611sql3db";
	
	try{
		$bdd = new PDO('mysql:host='.$serveur.';dbname='.$db, $utilisateur, $password);
	} catch(PDOException $e) {
		print "Erreur : ".$e->getMessage();
		die();
	}

	//SUPPRESSION D'UNE OFFRE
	if (isset($_POST["id_offre"])) {
		$id = $_POST["id_offre"];
		if (!empty($id)) {
			// si l'id d'une offre est defini, on la supprime
			$requete="DELETE FROM `wp_pods_offre_emploi` WHERE `id` = :id LIMIT 1";
			$req = $bdd->prepare($requete);
			$req->execute(array('id'=>$id));

			//si un fichier existe, on le supprime
			if (isset($_POST["urlfic"])) {
				$fichier = $_POST["urlfic"];
				if  (!empty($fichier)) {
						//SUPPRESSION DU FICHIER ASSOCIE
						$fichier = explode('/wp-content', $fichier);
						$fichier = str_replace('/', DIRECTORY_SEPARATOR, "/wp-content".$fichier[1]);
						if (file_exists(getcwd().$fichier))
							unlink(getcwd().$fichier);
				}
			}
		}
	}
?>