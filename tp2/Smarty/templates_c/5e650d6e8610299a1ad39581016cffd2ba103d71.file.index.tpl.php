<?php /* Smarty version Smarty-3.1.19, created on 2014-10-08 22:36:11
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2027854359ecb3a30b1-43333204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e650d6e8610299a1ad39581016cffd2ba103d71' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1412800569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2027854359ecb3a30b1-43333204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54359ecb5649c7_36250307',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54359ecb5649c7_36250307')) {function content_54359ecb5649c7_36250307($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<div class="container">
		<div class="row fondonegro ">
			<div class="col-lg-12">
				<ul class="list-inline top">
					<li><a href="#"><img src="imagenes/twiter.png" class="img-rounded"/></a></li>
					<li><a href="https://www.facebook.com/NasaTactics"><img src="imagenes/facebook.png" class="img-rounded"/></a></li>
					<li><a href="#"><img src="imagenes/youtube.png" class="img-rounded"/></a></li>
					<li><a href="#"><img src="imagenes/twitch.png" class="img-rounded"/></a></li>
				</ul>
			</div>
		</div>
		<div class="row intro">
			<div class="col-lg-12">
				<img src="imagenes/Portada_main2.png" class="img-responsive img-rounded imagenteam"/>
			</div>
		</div>
		<div class="row"> <!--CUERPO CON INFO-->
			<div class="col-lg-12 menu-principal fondonegro">
				<div class="col-lg-9 columna-izquierda"> <!--COLUMNA IZQUIERDA-->
					<!--CAROUSEL-->
					<div class="row" id="carousel">
						<div class="col-lg-12">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  </ol>

							   <!-- Wrapper for slides -->
								<!--USAR JS O VER LINKS PARA AFUERA-->
							  <div class="carousel-inner">
								<!--POSIBLE USO DE PHP PARA CARGAR LAS IMAGENES-->
								<div class="item active"> <!--IMAGENES IGUALES PARA MOSTRAR Y NO SE MODIFIQUE EL TAMAÑO-->
								  <a href="http://las.leagueoflegends.com/es/"><img src="imagenes/leagueoflegend.jpg" alt="imagen1"></a>
								  <div class="carousel-caption">
									El pu**
								  </div>
								</div>
								<div class="item">
								  <img src="imagenes/Portada_jack.PNG" alt="imagen2">
								  <div class="carousel-caption">
									EL g**
								  </div>
								</div>
								<div class="item">
								  <img src="imagenes/Portada_akitane.PNG" alt="imagen3">
								  <div class="carousel-caption">
									El tra*****
								  </div>
								</div>
							  </div>

							  <!-- Controls se pueden sacar y que ande solo como muestreo, tienen indicadores para elegir-->
							  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							  </a>
							</div>
						</div>
					</div>
				</div>
					<div class='col-lg-3 columna-derecha'>
						<div class='col-lg-12 rotacion'>
							<div class='header'>
								<p>Rotacion Semanal</p>
								<ul class="list-inline lista-rotacion">
									<li><img src="imagenes/ahrirotacion.png" class='img-resposive img-rotacion'/></li>
									<li><img src="imagenes/ahrirotacion.png" class='img-resposive img-rotacion'/></li>
									<li><img src="imagenes/ahrirotacion.png" class='img-resposive img-rotacion'/></li>
									<li><img src="imagenes/ahrirotacion.png" class='img-resposive img-rotacion'/></li>
								</ul>
							</div>
						</div>
					</div>
			</div>
		</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
