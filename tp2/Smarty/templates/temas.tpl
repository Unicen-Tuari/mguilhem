{include file="headerforo.tpl" title=foo}

<div class="row menumensajes">
	<div class="col-lg-12 seccion">
		<div class="row cabezera">
			<p>$temasup_id</p>
		</div>
		{foreach key=pid item=temas from=$temas}
			<div class="row tema">
				<div class="col-lg-2">
					<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
				</div>
				<div class="col-lg-8 textomenu">
					<a href="index.php?action=$tema_id"><p>$tema_id</p></a>
				</div>
			</div>
		{/foreach}
	</div>
</div>
  

{include file="footer.tpl"}
