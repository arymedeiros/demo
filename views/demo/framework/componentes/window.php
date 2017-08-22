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

<div style="width:600px">
    <div id="ftDate" class="panel panel-default panel-sample">
        <div class="panel-body">
        	<div class="pane-heading">
    	    	<h1>ftCloseWindow()</h1>
    		</div>
    		<div class="panel-body">
        		<p>Fecha a janela corrente</p>
    			<button id="ft-close" class="btn btn-default"><i class="fa fa-times "></i> Fechar Janela</button> 
            	<div style="clear: both;margin-bottom: 10px"></div>
            	<div class="panel-footer">
           			<pre>
&lt;button id="close" class="btn btn-default"&gt;&lt;i class="fa fa-times "&gt;&lt;/i&gt; Fechar Janela&lt;/button&gt;
&lt;script&gt;
	$("#close").ftCloseWindow();
&lt;/script&gt;    				
            		</pre>
        		</div>
        	</div>
        </div>
	</div>
</div>        
<script>
$(document).ready(function(){
	$("#ft-close").ftCloseWindow();
});
</script>
