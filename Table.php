<?php

class Table{
	public $column = array();
	public $row = array();

	function __construct($cols, $rows){
		$this->column = $cols;
		$this->row = $rows;
	}

	

	public function get_mean($array){
		$mean = array_sum($array)/count($array);
		return $mean;
	}

	public function get_median($array){
		$numDp = count($array);
		if (($numDp % 2)==0){ //if the number of DPs is equal, the median is half plus one
			$median = ($numDp/2)+1;
		}

		else{
			$median = ceil($numDp/2);
		}

		return $median;
	}

	public function get_stdDev($array){
		$counter = 0;
		$mean = $this->get_mean($array);
		foreach ($array as $value){
			$sumDev[$counter] = pow(($value - $mean) , 2); 
			// for each DP, get the difference between it and the mean, and square thqt value
			//echo $sumDev[$counter]."<br />";
			$counter = $counter+1;
		}
		
		$variance  = (array_sum($sumDev))/(count($array)-1); // sum the deviations and then divide bu the number of DPs-1
		$standDev = sqrt($variance); // root the variance to get the SD 
		return $standDev;
	}

	public function get_r_number($cols1, $cols2){
		$meanCol1 = $this->get_mean($cols1);
		$stdDevCol1 = $this->get_stdDev($cols1);
		$meanCol2 = $this->get_mean($cols2);
		$stdDevCol2 = $this->get_stdDev($cols2);
		
		for($ii=1;$ii<=count($cols1);$ii++){
			$col1Devs[$ii] = ($cols1[$ii] - $meanCol1);
			$col2Devs[$ii] = ($cols2[$ii] - $meanCol2);
			$productDev[$ii] = $col1Devs[$ii]*$col2Devs[$ii];
		}

		$equationTop = array_sum($productDev);
		$equationBottom = (count($cols1)-1)*$stdDevCol1*$stdDevCol2;


		// return pow(($equationTop/$equationBottom), 2);
		return ($equationTop/$equationBottom);
	}

	public function get_best_fit($xx, $yy){
		$b1 = ($this->get_r_number($xx, $yy))*($this->get_stdDev($yy)/$this->get_stdDev($xx));
		$b0 = ($this->get_mean($yy)) - ($b1*($this->get_mean($xx)));
		return "Y =".$b0."+".$b1."(X)";
	}

}