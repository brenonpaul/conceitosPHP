<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="ok">
</form>

<?php 
// vai percorrer a variavel get, já que como eu não defini o action, carrega na mesma página, o key vai ser o 'name', o value vai vai ser aquilo que o usuário digitar

if (isset($_GET)) {

	foreach ($_GET as $key => $value) {

		echo "nome do campo: ". $key . "<br>";
		echo "valor do campo: ". $value;
		echo "<hr>";

	}

}


?>