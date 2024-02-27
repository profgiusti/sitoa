<h1>
<?php


	

	//$giorni = [];
	//$giorni = array();

	$giorni = ['Lun','Mar','Mer','Gio','Ven','Sab','Dom'];

	$cliente = ['nome' => "Luca", 'cognome' => 'Giusti', 'indirizzo' => 'Via Garibaldi 1'];


	for($i=0;$i<7;$i++) echo($giorni[$i]."<br>");

	echo "Ciao, ".$cliente['nome']."!<br>";

	$nome = $cliente['nome'];

	echo "Ciao $nome come stai!<br>";

	foreach($cliente as $chiave => $campo)
	{
		echo "<p>$chiave: $campo</p>";
	}

?>
</h1>	


