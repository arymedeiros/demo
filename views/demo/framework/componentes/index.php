<style>
.panel-sample {
	margin-top:10px;
}

.sample-left {
	padding: 10px;
	float:left;
	width: 20%;	
}
.sample-right{
	float:left;
	width: 78%;
	overflow: auto;
}

.sample-options {
	position: absolute;
	width: 18%;
}

.breadcrumb {
	margin: 15px;
}

</style>

<ol class="breadcrumb">
  <li><a href="/demo/framework"><i class="fa fa-home"></i>Home</a></li>
  <li class="active">Projetos</li>
</ol>

<div style="width:100%">
    <div class="sample-left">
    	<div id="options" class="sample-options"></div>
    </div>
    <div class="sample-right">
    
        <div id="ftDate" class="panel panel-default panel-sample">
            <div class="panel-body">
            	<div class="pane-heading">
        	    	<h1>ftDate()</h1>
        		</div>
        		<div class="panel-body">
            		<p>Trata a edição de campos data no formato DD/MM/AAAA</p>
        			<div style="width:20%">
        				<input type="text" id="ft-date" class="form-control col-sm-2">
            		<script>
            			$("#ft-date").ftDate();
            		</script>
            		</div>
            	</div>
            	<div class="panel-footer">
           			<pre>
&lt;input type="text" id="date"&gt;
&lt;script&gt;
	$("#date").ftDate();
&lt;/script&gt;    				
            		</pre>
        		</div>
        	</div>
        </div>
        
        <div id="ftNumber" class="panel panel-default panel-sample">
            <div class="panel-body">
            	<div class="pane-heading">
        	    	<h1>ftNumber()</h1>
        		</div>
        		<div class="panel-body">
            		<p>Trata a edição de campos numéricos.</p>
            		<p>Parâmetros opcionais:
            		<ul>
            			<li>data-dec: define o número de casas decimais - default 2</li>
            		</ul>
        			<div style="width:20%">
        				<input type="text" id="ft-number" class="form-control col-sm-2" data-dec="4">
            		<script>
            			$("#ft-number").ftNumber();
            		</script>
            		</div>
            	</div>
            	<div class="panel-footer">
           			<pre>
&lt;input type="text" id="number" data-dec="4"&gt;
&lt;script&gt;
	$("#number").ftNumber();
&lt;/script&gt;    				
            		</pre>
        		</div>
        	</div>
        </div>
        
        <div id="ftMoney" class="panel panel-default panel-sample">
            <div class="panel-body">
            	<div class="pane-heading">
        	    	<h1>ftMoney()</h1>
        		</div>
        		<div class="panel-body">
            		<p>Trata a edição de campos numéricos expressos em R$</p>
            		<p>Parâmetros opcionais:
            		<ul>
            			<li>data-dec: define o número de casas decimais - default 2</li>
            		</ul>
        			<div style="width:20%">
        				<input type="text" id="ft-money" class="form-control col-sm-2" data-dec="2">
            		<script>
            			$("#ft-money").ftMoney();
            		</script>
            		</div>
            	</div>
            	<div class="panel-footer">
           			<pre>
&lt;input type="text" id="money" data-dec="2"&gt;
&lt;script&gt;
	$("#money").ftMoney();
&lt;/script&gt;    				
            		</pre>
        		</div>
        	</div>
        </div>

        <div id="ftCEP" class="panel panel-default panel-sample">
            <div class="panel-body">
            	<div class="pane-heading">
        	    	<h1>ftCEP()</h1>
        		</div>
        		<div class="panel-body">
            		<p>Trata a edição de campos do tipo CEP</p>
            		<p>Parâmetros opcionais:
            		<ul>
            			<li>data-endereco: id do input que receberá o endereço</li>
            			<li>data-bairro: id do input que receberá o bairro</li>
            			<li>data-cidade: id do input que receberá a cidade</li>
            			<li>data-estado: id do input que receberá o estado</li>
            			<li>data-error: id do element que receberá a mensagem de erro</li>
            		</ul>
            		<div class="row">
            			<div class="col-sm-2">
            				<label for="ft-cep">CEP:</label>
            				<input type="text" id="ft-cep" class="form-control col-sm-2" data-endereco="cep-endereco" data-bairro="cep-bairro" data-cidade="cep-cidade" data-estado="cep-estado" data-error= "cep-error">
                			<script>
                				$("#ft-cep").ftCEP();
                				$("#ft-cep").change(function(){
                    				$("cep-error").html("");
                    			});
                			</script>
                		</div>
                		<div class="col-sm-10">
                			<div id="cep-error" style="position:relative;top:45px; color: red"></div>
                		</div>
            		</div>
            		<div class="row">
            			<div class="col-sm-6"><label for="cep-endereco">Endereço:</label><input id="cep-endereco" class="form-control" type="text"></div>
            			<div class="col-sm-2"><label for="cep-bairro">Bairro:</label><input id="cep-bairro" class="form-control" type="text"></div>
            			<div class="col-sm-2"><label for="cep-cidade">Cidade:</label><input id="cep-cidade" class="form-control" type="text"></div>
            			<div class="col-sm-2"><label for="cep-estado">Estado:</label><input id="cep-estado" class="form-control" type="text"></div>
            		</div>
            	</div>
            	<div class="panel-footer">
           			<pre>
&lt;input type="text" id="cep" data-endereco="endereco" data-bairro="bairro" data-cidade="cidade" data-estado="estado"&gt;
&lt;input type="text" id="endereco" &gt;
&lt;input type="text" id="bairro" &gt;
&lt;input type="text" id="cidade" &gt;
&lt;input type="text" id="estado" &gt;
&lt;script&gt;
	$("#cep").ftCEP();
&lt;/script&gt;    				
            		</pre>
        		</div>
        	</div>
        </div>

        <div id="ftWindow" class="panel panel-default panel-sample">
            <div class="panel-body">
            	<div class="pane-heading">
        	    	<h1>ftOpenWindow()</h1>
        		</div>
        		<div class="panel-body">
            		<p>Executa chamada de um método de um controller exibindo o resultado da chamada em uma janela</p>
            		<p>Parâmetros opcionais:
            		<ul>
            			<li>data-title: Título da janela</li>
            			<li>data-content: url a ser executada</li>
            		</ul>
        			<div style="width:20%">
        				<button id="ft-window" class="btn btn-default" ><i class="fa fa-window-maximize"></i> Abrir Janela</button>
            			<script>
            				$("#ft-window").ftOpenWindow({ title : "Janela aberta pelo componente ftOpenWindow()", content: "/<?= $base_uri ?>/window"});
            			</script>
            		</div>
            	</div>
            	<div class="panel-footer">
           			<pre>
&lt;button id="janela" data-title='ftOpenWindow()' data-content="/<?= $base_uri ?>/window"&gt;&lt;i class="fa fa-window-maximize"&gt;&lt;/i&gt; Abrir Janela&lt;/button&gt;
&lt;script&gt;
	$("#janela").ftOpenWindow();
&lt;/script&gt;    				
            		</pre>
        		</div>
        	</div>
        </div>

        <div id="ftCloseWindow" class="panel panel-default panel-sample">
            <div class="panel-body">
            	<div class="pane-heading">
        	    	<h1>ftCloseWindow()</h1>
        		</div>
        		<div class="panel-body">
            		<p>Fecha a janela corrente</p>
            	</div>
            	<div class="panel-footer">
           			<pre>
<a href="#ftWindow"><button class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i> Veja em ftOpenWindow()</button></a>
            		</pre>
        		</div>
        	</div>
        </div>

        <div id="ftSelectbox" class="panel panel-default panel-sample">
            <div class="panel-body">
            	<div class="pane-heading">
        	    	<h1>ftSelectBox()</h1>
        		</div>
        		<div class="panel-body">
            		<p>Componente para seleção de registro de um Model</p>
            		<p>Parâmetros:
            		<ul>
            			<li>data-model: Nome do Model</li>
            			<li>data-text: Coluna que será apresentada</li>
            			<li>data-value: Coluna que retornará o valor selecionado</li>
            		</ul>
        			<div style="width:80%">
        				<label for="ft-selectbox">Colaborador:</label>
        				<!-- input type="text" id="ft-selectbox" class="form-control" data-model="demo\Colaboradores_model" data-text="nome" data-value="id" -->
        				<input type="text" id="ft-selectbox" class="form-control" data-model="erp\Clientes_model" data-text="SA1_Desc" data-value="SA1_ID" >
            			<script>
            				$("#ft-selectbox").ftSelectbox();
            				$("#ft-selectbox").change(function(){
                				messageBox("ID Selecionado: "+$(this).val());
                			});
            			</script>
            		</div>
            	</div>
            	<div class="panel-footer">
           			<pre>
&lt;input id="select" data-model="demo\Colaboradores_model" data-text="nome" data-value="id"&gt;
&lt;script&gt;
	$("#select").ftSelectbox();
&lt;/script&gt;    				
            		</pre>
        		</div>
        	</div>
        </div>


    </div>



</div>
<script>
$(document).ready(function(){
	var data = [
    	{
    		text : "Entrada de dados",
    		nodes : [
    		   { text: "ftDate()", href: "#ftDate", icon: "fa fa-chevron-right" },
    		   { text: "ftNumber()", href: "#ftNumber", icon: "fa fa-chevron-right" },
    		   { text: "ftMoney()", href: "#ftMoney", icon: "fa fa-chevron-right " },
    		   { text: "ftCEP()", href: "#ftCEP", icon: "fa fa-chevron-right " },
    		   { text: "ftOpenWindow()", href: "#ftWindow", icon: "fa fa-chevron-right " },
    		   { text: "ftCloseWindow()", href: "#ftCloseWindow", icon: "fa fa-chevron-right " },
    		   { text: "ftSelectbox()", href: "#ftSelectbox", icon: "fa fa-chevron-right " },
    		]
		}	        	
	];

	$(".sample-options").treeview({ data: data, enableLinks: true});

	$(".sample-right,.sample-left").height($(window).height()-120);
	
});
</script>