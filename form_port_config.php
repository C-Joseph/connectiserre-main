<form action="port_config.php" method= "get" >
<?php
	echo '<div>';
	echo '<div id="form_heading"><p>Port</p><p>Mode</p><p>Sens</p><p>Frequence des
mesures</p></div>';
for($num=1;$num<17;$num++){
echo '<div id="form_elements"><label> '.$num.' </label>';
// echo '<div><label>Port '.$num.'</label>';
echo '<input type="checkbox" name="port'.$num.'" value="'.$num.'" />';
//echo '<label>Mode</label>';
echo '<select name="mode'.$num.'" >';
echo '<option value="A">Analogue</option>';
echo '<option value="D">Numerique</option>';
echo '</select>';
//echo '<label>Sens</label>';
echo '<select name="sens'.$num.'" >';
echo '<option value="I">Entree</option>';
echo '<option value="O">Sortie</option>';
echo '</select>';
echo '<select name="freq'.$num.'" >';
echo '<option value="10">10s</option>';
echo '<option value="20">30s</option>';
echo '<option value="30">30s</option>';
echo '<option value="60">1mn</option>';
echo '<option value="120">2mn</option>';
echo '<option value="300">5mn</option>';
echo '<option value="600">10mn</option>';
echo '<option value="1800">30mn</option>';
echo '<option value="3600">1h</option>';
echo '<option value="21600">6h</option>';
echo '<option value="86400">1j</option>';
echo '</select></div>';
}
echo '<br>';
echo '<input type="submit" value="Valider"/> ';
echo '<br>';
echo '</div>';
?>
</form>