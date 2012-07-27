<?php
//for an uploaded file
require_once "mathLib.php";

if (isset($_FILES['xlsFile'])){
	
	$target_path = "xls/";
	$fileName = basename($_FILES['xlsFile']['name']);
	$target_path = $target_path . basename( $_FILES['xlsFile']['name']); 

	if(move_uploaded_file($_FILES['xlsFile']['tmp_name'], $target_path)) {
	} 
	else{
		die('didnt work');
	}
	
	require_once 'phpExcelReader/Excel/reader.php';
	// ExcelFile($filename, $encoding);
	$data = new Spreadsheet_Excel_Reader();

	// Set output Encoding.
	$data->setOutputEncoding('CP1251');
	$data->read("xls/".$fileName);

	function countreal($arr){
		$arrsize = sizeof($arr);
		foreach($arr as $k => $v){
		if(empty($v)){$arrsize = $arrsize - 1;}
		}
		return $arrsize;
	}
		// sorts the data by rows into the $row[row][column] array
	for($ii=0; $ii<=countreal($data->sheets[0]['cells']); $ii++){
		for($zz=1; $zz<= count($data->sheets[0]['cells'][$ii]); $zz++){
			$row[$ii][$zz]=$data->sheets[0]['cells'][$ii][$zz];
		}
	}

	// sorts the data in columns $column[col][row]
	$numRows = count($row);
	 for ($ii=1; $ii<=$numRows; $ii++){
	 	for($zz=1; $zz<=$data->sheets[0]['numCols']; $zz++){
	 		$column[$zz][$ii] = $row[$ii][$zz];
		}
	}

	require_once "Table.php";
	$dataTable = new Table($column, $row);
	// echo($dataTable->factorial(5));
	 // echo "<br />nCk=".$dataTable->get_nCk(11, 7)."<br />";

}


// for manually entered data
if (isset($_POST['dp1'])){
	$median = get_median($_POST);
	$mean = get_mean($_POST);
}





?>

<style type="text/css">
	.points{
		display:none;
		list-style-type:none;
	}

	.inputChoice{
		cursor:pointer;
		color:red;
	}

	.inputChoice:hover{
		color:blue;
	}
</style>

<div class="inputChoice" id="clickForManual">
	[ Click here to input data manually ]
</div>
<div class="inputChoice" id="clickForAuto">
	[ Click here to upload an XLS file ]
</div>

<form action="stat1.php" method="post">
	<ul class="manual points" style="list-style-type:none">
		<li class="dp"><span class="removeDp" style="margin-right:20px; cursor:pointer;">[-]</span>Data Point:<input type="text" name="dp1"></li>
		<li class="dp"><span class="removeDp" style="margin-right:20px; cursor:pointer;">[-]</span>Data Point:<input type="text" name="dp2"></li>
		<li class="dp"><span class="removeDp" style="margin-right:20px; cursor:pointer;">[-]</span>Data Point:<input type="text" name="dp3"></li>
		<li class="dp"><span class="removeDp" style="margin-right:20px; cursor:pointer;">[-]</span>Data Point:<input type="text" name="dp4"></li>
		<li class="dp"><span class="removeDp" style="margin-right:20px; cursor:pointer;">[-]</span>Data Point:<input type="text" name="dp5"></li>
		<li class="dp"><span class="removeDp" style="margin-right:20px; cursor:pointer;">[-]</span>Data Point:<input type="text" name="dp6"></li>
		<li id="addDp" style="cursor:pointer">[+]</li>
		<li><input type="submit" value="submit"></li>
	</ul>
</form>

<form enctype="multipart/form-data" action="stat1.php" method="POST">
	<ul class="auto points">
		<li><input type="file" name="xlsFile"></li>
		<li><input type="submit" value="submit"></li>
	</ul>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#clickForManual').click(function(){
		$('.points').hide();
		$('.manual').show();
	});

	$('#clickForAuto').click(function(){
		$('.points').hide();
		$('.auto').show();
	});

	$('#addDp').click(function(){
		var counter = $('.dp').length;
		$('.dp').last().append("<li class='dp'><span class'removeDp' style='margin-right:20px; cursor:pointer;'>[-]</span>Data Point:<input type='text' name='dp"+(counter+1)+"'></li>");
	});

	$('.removeDp').click(function(){
	 	$(this).parent().remove();
	 	//document.write('elvis');
	 });

});
</script>

