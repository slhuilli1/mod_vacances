<?php	
	defined('_JEXEC') or die;
	require_once dirname(__FILE__).'/helper.php';
	$hello = modVacances::getCalendrier($params);
	$doc = JFactory::getDocument();
	$doc->addStyleSheet('modules/mod_vacances/style.css');
		
		
			
	echo '<div class="bloc-vacances">';
	echo '<div class="anneescolaire">'.$Z.'</div>';
	foreach($hello as $uneLigne)
	{
		if(is_array($uneLigne)){
			
			foreach($uneLigne as $P)
			{
				if (isset($P->fields->zones))
				{
					echo '<div class="un-bloc-vacances">';
					echo "<div class=\"une-ligne\" id=\"annee-scolaire\"><span class=\"libelle\">Année scolaire</span><span class=\"contenu\">".$P->fields->annee_scolaire."</span></div>";
					echo "<div class=\"une-ligne\" id=\"debut\"><span class=\"libelle\">Date de début</span><span class=\"contenu\">".date("Y-m-d H:i:s", strtotime($P->fields->start_date))."</span></div>";
					echo "<div class=\"une-ligne\" id=\"fin\"><span class=\"libelle\">Date de fin</span><span class=\"contenu\">".date("Y-m-d H:i:s", strtotime($P->fields->end_date))."</span></div>";
					echo "<div class=\"une-ligne\" id=\"academie\"><span class=\"libelle\">Academie </span><span class=\"contenu\">".$P->fields->location."</span></div>";
					echo "<div class=\"une-ligne\" id=\"zone\"><span class=\"libelle\">Zone</span><span class=\"contenu\">".$P->fields->zones."</span></div>";
					Echo "</div>";}
			}
		}
	}
	echo "</div>";
	