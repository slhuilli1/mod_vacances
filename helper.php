<?php
	class modVacances{
		public static function getCalendrier($params){
			$T= array();
			$Z = $params->get('anneescolaire', ''); 
			$url =  "https://data.education.gouv.fr/api/records/1.0/search/?dataset=fr-en-calendrier-scolaire&q=&sort=end_date&facet=description&facet=population&facet=start_date&facet=end_date&facet=location&facet=zones&facet=annee_scolaire&refine.annee_scolaire=".$Z;
			$c = file_get_contents($url);
			$T = json_decode($c,false);
			
			return($T);
			
			
		}
	}
?>