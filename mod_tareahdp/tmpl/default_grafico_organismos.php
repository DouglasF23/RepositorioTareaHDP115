
<?php

include_once("phplot.php");
$data=array(array("Votación",30,25,12,33));
$graph = new PHPlot();
$graph->SetDataValues($data);
$graph->SetDataType("text-data");
$graph->SetPlotType("pie");
$graph->SetTitle("Resultados de la votación");
$graph->SetLegend(
		array("Partido A", "Partido B",
				" Partido C", " Partido D"));
echo $graph->DrawGraph();
?>


