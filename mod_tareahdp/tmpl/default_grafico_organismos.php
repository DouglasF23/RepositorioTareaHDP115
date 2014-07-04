
<?php


include_once("phplot.php");
$data=array(array("Inversiones",30,25,12,33));
$graph = new PHPlot();
$graph->SetDataValues($data);
$graph->SetDataType("text-data");
$graph->SetPlotType("pie");
$graph->SetTitle("Resultados de la inversion");
$graph->SetLegend(
		array("inversion A", "inversion B",
				" inversion C", " inversion D"));
echo $graph->DrawGraph();
?>


