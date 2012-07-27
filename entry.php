<?php

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- these are all stylesheets -->
  <link rel="stylesheet/less" href="css/bootstrap.css" />
<!-- responsive -->
  <link rel="stylesheet/less" href="less/custom.less" />


<!-- These are all plugins and libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script><!-- jquery javascript library --> 
  <script type="text/javascript" src="js/less.js"></script> <!-- less css framework -->
  <script type="text/javascript" src="js/bootstrap-dropdown.js"></script> <!-- twitter bootstrap -->
  <script type="text/javascript" src="js/bootstrap-collapse.js"></script>
  <script type="text/javascript" src="js/galleria/galleria-1.2.7.min.js"></script><!-- photo gallery plugin -->
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script><!-- bounce plugin for jquery javascript library -->
<!-- heres our custom JS file  -->
  <script type="text/javascript" src="js/index.js"></script>
	<link rel="stylesheet" media="print" href="css/index.css" />
</head>

<body>
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">

				<ul class="nav">
  					<li class="dropdown">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					        File<b class="caret"></b>
					    </a>
					    <ul class="dropdown-menu">
					      <li>Upload data</li>
					      <li>Save to .xls</li>
					    </ul>
  					</li>
				</ul>
				<ul class="nav">
  					<li class="dropdown">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					        Analyze<b class="caret"></b>
					    </a>
					    <ul class="dropdown-menu">
					      <li>Fit X/Y</li>
					      <li>Histogram</li>
					      <li>Brunelli</li>
					    </ul>
  					</li>
				</ul>
				<ul class="nav">
  					<li class="dropdown">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					        Column<b class="caret"></b>
					    </a>
					    <ul class="dropdown-menu">
					      <li>Add Column</li>
					      <li>Delete Column</li>
					      <li>Docs</li>
					    </ul>
  					</li>
				</ul>
				<ul class="nav">
  					<li class="dropdown">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					        Row<b class="caret"></b>
					    </a>
					    <ul class="dropdown-menu">
					      <li class="addRow">Add Row</li>
					      <li>Delete Row</li>
					      <li>Docs</li>
					    </ul>
  					</li>
				</ul>
				<ul class="nav">
  					<li class="dropdown">
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					        Help<b class="caret"></b>
					    </a>
					    <ul class="dropdown-menu">
					      <li>Tutorial</li>
					      <li>Forum</li>
					      <li>Docs</li>
					    </ul>
  					</li>
				</ul>
			</div>
		</div>
	</div>

	<div id="mainContain">
	<div class="workspace">
		<ul class="table">
		    <li class="row header">
			    <div class="cell" style="border:solid 1px #fff;"></div>
			    <div class="columnHead cell cA">
			    	A
			    	<img class="columnPull" src="images/icon_dropdown.png">
			    </div>
			    <div class="columnHead cell cB">B
			    	<img class="columnPull" src="images/icon_dropdown.png">
			    </div>
			    <div class="columnHead cell">C</div>
			    <div class="columnHead cell">D</div>
			    <div class="columnHead cell">E</div>
			    <div class="columnHead cell">F</div>
			    <div class="columnHead cell">G</div>
			    <div class="columnHead cell">H</div>
			    <div class="columnHead cell">I</div>
			    <div class="columnHead cell">J</div>
			    <div class="columnHead cell">K</div>
			    <div class="columnHead cell">L</div>
			</li>
		    <li class="row">
		    	<div class="rowLabel cell">1</div>
			    <div class="cell r1 cA"><textarea></textarea></div>
			    <div class="cell r1 cB"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
		    </li>
		    <li class="row">
		    	<div class="rowLabel cell">2</div>
			    <div class="cell r2 cA"><textarea></textarea></div>
			    <div class="cell r2 cB"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
		    </li>
		    <li class="row">
		    	<div class="rowLabel cell">3</div>
			    <div class="cell r3 cA"><textarea></textarea></div>
			    <div class="cell r3 cB"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
		    </li>
		    <li class="row">
		    	<div class="rowLabel cell">4</div>
			    <div class="cell r4 cA"><textarea></textarea></div>
			    <div class="cell r4 cB"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
		    </li>
		    <li class="row">
		    	<div class="rowLabel cell">5</div>
			    <div class="cell r5 cA"><textarea></textarea></div>
			    <div class="cell r5 cB"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
			    <div class="cell"><textarea></textarea></div>
		    </li>
		</ul>
	</div>
	</div>

	<div class="popup">
		<div class="nest">
			How many rows would you like to add?
		</div>
	</div>

	<div class="columnPop">
		<ul>
			<li>add column left</li>
			<li>add column right</li>
			<li class="getMean">mean: <span></span></li>
			<li class="getSD">SD: <span></span></li> 
		</ul>
	</div>

</body>

<script type="text/javascript">
$(document).ready(function(){
	var tableWidth = $('.header .cell').size();
	//$('.r1').html(tableWidth);
	tableWidth = tableWidth*100;
	$('.table').css('width', tableWidth);

	$('.columnPull').click(function(e){
		var clientX = 5+e.clientX;
		var clientY = 5+e.clientY;
		$('.columnPop').css({'top':clientY,'left':clientX}).toggle(); 
		// get the column name to send to the math functions	
		var className = $(this).parent().attr('class');
		var split_str = className.split(' ');
		var columnClass = "."+split_str[2];
		var sumCol = 0;
		var counter = 0;
		var columnVals = new Array();

		$(columnClass).find('textarea').each(function(){
			if ($(this).val() == ""){
				value = 0;
			}
			else{
				value = parseFloat($(this).val());
				columnVals[counter] = value;
				counter = counter+1;
			}
			sumCol = sumCol+value;
		});
		var mean = sumCol/counter;
		$('.getMean span').text(mean);


		counter = 0;
		sumDev = 0;
		for(ii=0; ii<columnVals.length; ii++){
			if (columnVals[ii] == ""){
					value = 0;
			}
			else{
				value = columnVals[ii];
				var deviation = value-mean;
				var dev2 = Math.pow(deviation, 2);
				counter = counter+1;
			}
			sumDev = sumDev+dev2;
		}

		var variance = sumDev/counter;
		var SD = Math.sqrt(variance);
		
		$('.getSD span').text(deviation);
	});

	

	$('.addRow').click(function(){
		$('.popup').toggle();
	});



});




</script>
</html>