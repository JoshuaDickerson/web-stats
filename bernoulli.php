<?php

class BernoulliTrial{
	// Bernoulli trials
	//	 	*success or failure
	// 		*probability must be the same on all trials
	//		*trials must be independant 

	function __construct($cols, $rows){

	}

}



class BinomialModel{
	$numTrials = 0;
	$probOfSucc = 0;
	$trial = "trial object";


	function __construct($numTrials, $probOfSucc){
		$this->trial = new BernoulliTrial;

	}

	public function get_nCk($numTrials, $numSuccess){
		$nCk = factorial($numTrials) / (factorial($numSuccess) * factorial($numTrials-$numSuccess)); 
		return $nCk;
	}

}

class GeometricModel{
	$p = 0;
	$q = 0;
	$x = 0;

	// how long will it take to acheive first success in Bernouli Trials
	function __construct($p, $x){
		//$ p = probability of success 
		//$ x = number of trials
		$this->p = $p; 
		$this->q = (1-$p);
		$this->x = $x;
	}

	public function get_expected(){
		return (1/$this->p);
	}

	public function get_stdDev(){
		return sqrt($this->q/pow($this->p,2))
	}
}


class PoissonModel{


}



?>