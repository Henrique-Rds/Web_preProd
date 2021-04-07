<?php

  //détection de langue courante de la page
  $currentlang = get_bloginfo('language');

  if(strpos($currentlang,'fr')!==false){
    include('codes snippet/lang-fr.php');
  }elseif(strpos($currentlang,'en')!==false){
    include('codes snippet/lang-en.php');
  }else{
    echo("échec de reconnaissance de la langue");
  }

	//Si l'utilisateur est connecte
	if (is_user_logged_in()) {
		//Affichage d'un bouton "Télécharger au format Excel" pour la liste des thèses/doctorants
		echo "<form action='https://ica.preprod.lamp.cnrs.fr/gestion-theses/en-cours/excel/' method='POST'>
					<button type='submit' class='spanExcel'><i class='fa fa-table'></i>&nbsp;&nbsp;&nbsp;".TXT_TELECHARGER_EXCEL."</button>
			  </form>";
	}
?>