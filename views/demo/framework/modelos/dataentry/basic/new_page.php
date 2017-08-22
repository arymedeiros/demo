<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="bar-actions">
  <?= $breadcrumb ?>
	<div  class="content-actions">
    <a href="<?= $href ?>"><button class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Voltar</button></a>
  </div>
</div>
<div class="ft-panel-body">
	<h1>addPageAction()</h1>
	<p>Esta ação foi executada em uma nova página e recebeu como parâmetro o id: <?= $id ?></p>
</div>