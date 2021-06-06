<?php 
function extract_num($descr){
$it = count($GLOBALS["tels"]);
preg_match_all("/0800[^a-zA-Z]*/",$descr, $fone800, PREG_OFFSET_CAPTURE);
	foreach ($fone800[0] as $key => $telget) {
		$it++;
		$telef = preg_replace("/[^0-9]/" , "", $telget[0]);
		if(strlen($telef)<12){
		$telef = substr($telef, 0, 4) . " ".substr($telef, 4, 11);
			$GLOBALS["tels"][$it] 	= $telef;
			$GLOBALS["tels_rep"][$telef] = $GLOBALS["tels_rep"][$telef] +1;
		}
	}
preg_match_all("/\d{4}+[^0-9]{0,3}\d{4}+[^0-9]/x",$descr, $fone4x4, PREG_OFFSET_CAPTURE);
	foreach ($fone4x4[0] as $key => $telget) {
		$it++;
		$telef = preg_replace("/[^0-9]/" , "", $telget[0]);
if((strlen($telef)==8) && (substr($telef, 0, 4)!='0800') && ($telef[0]!=0) && ($telef[0]!=9) && ($telef[0]!=1)){
		$telef = substr($telef, 0, 4) . " ".substr($telef, 4, 8);
				$GLOBALS["tels"][$it] 	= $telef;
				$GLOBALS["tels_rep"][$telef] = $GLOBALS["tels_rep"][$telef] +1;
		}
	}
}

function extract_ddd($descr){
	preg_match_all("/\(\d{2}\)/x",$descr, $regs2);
	foreach ($regs2[0] as $ddd) {
		$GLOBALS['ddd'][$ddd]++;
	}
}
?>