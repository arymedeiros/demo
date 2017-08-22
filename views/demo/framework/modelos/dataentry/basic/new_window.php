<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="ft-content-window">
	<h1>addWindowAction()</h1>
	<p>Esta ação foi executada em uma janela e recebeu como parâmetro o id: <?= $id ?></p>
	<p><button class="btn btn-primary" role="button">Fechar</button></p>
</div>

<script>
$(document).ready(function(){
	$(".btn").ftCloseWindow();
});
</script>