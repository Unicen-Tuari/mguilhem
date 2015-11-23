<?php /* Smarty version 3.1.27, created on 2015-11-23 12:51:25
         compiled from "C:\xampp\htdocs\progweb2\templates\ejercicios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14752565335fd6c4261_80153456%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcb1742dc3d06f565f53c55e30231c48655f7f59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progweb2\\templates\\ejercicios.tpl',
      1 => 1443637870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14752565335fd6c4261_80153456',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565335fd702a71_82269357',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565335fd702a71_82269357')) {
function content_565335fd702a71_82269357 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14752565335fd6c4261_80153456';
?>
<!DOCTYPE html>    

<!-- JS Carrousel de Ejercicios -->
<?php echo '<script'; ?>
 src="js/carousel.js"><?php echo '</script'; ?>
>

<!-- Carousel -->
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <li class="item active">
        <img id="ejerc1" class="img-responsive" src="img/ejercicios/c1.jpg"/>
    </li>
    <li class="item">
        <img id="ejerc2" class="img-responsive" src="img/ejercicios/c2.jpg"/>  
    </li>
    <li class="item">
        <img id="ejerc3" class="img-responsive" src="img/ejercicios/c3.jpg"/>
    </li>
    <li class="item">
        <img id="ejerc4" class="img-responsive" src="img/ejercicios/c4.jpg"/>
    </li>
  </div>
</div>       
<!-- /carousel -->

    
    <!-- LINK IMAGENES -->
    <section class="no-padding" id="slide">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <li class="slide-box">
                        <img class="img-responsive" src="img/ejercicios/abdomen.jpg"/>
                        <div id="abdomen" class="slide-box-caption">
                            <div class="slide-box-caption-content">
                                <div class="project-name">
                                    ABDOMEN
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <li class="slide-box">
                        <img class="img-responsive" src="img/ejercicios/antebrazo.jpg"/>
                        <div id="antebrazos" class="slide-box-caption">
                            <div class="slide-box-caption-content">
                                <div class="project-name">
                                    ANTEBRAZOS
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <li class="slide-box">
                        <img class="img-responsive" src="img/ejercicios/bicep.jpg" />
                        <div id="biceps" class="slide-box-caption">
                            <div class="slide-box-caption-content">
                                <div class="project-name">
                                    BICEPS
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <li class="slide-box">
                        <img class="img-responsive" src="img/ejercicios/espalda.jpg"/>
                        <div id="espalda" class="slide-box-caption">
                            <div class="slide-box-caption-content">
                                <div class="project-name">
                                    ESPALDA
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <li class="slide-box">
                        <img class="img-responsive" src="img/ejercicios/gluteos.jpg"/>
                        <div id="gluteos" class="slide-box-caption">
                            <div class="slide-box-caption-content">
                                <div class="project-name">
                                    GLUTEOS
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <li class="slide-box">
                        <img class="img-responsive" src="img/ejercicios/hombros.jpg"/>
                        <div id="hombros" class="slide-box-caption">
                            <div  class="slide-box-caption-content">
                                <div class="project-name">
                                    HOMBROS
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <li class="slide-box">
                        <img class="img-responsive" src="img/ejercicios/pecho.jpg" />
                        <div id="pecho" class="slide-box-caption">
                            <div class="slide-box-caption-content">
                                <div class="project-name">
                                    PECTORALES
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <li class="slide-box">
                        <img class="img-responsive" src="img/ejercicios/pierna.jpg"/>
                        <div id="pierna" class="slide-box-caption">
                            <div class="slide-box-caption-content">
                                <div class="project-name">
                                    PIERNAS
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <li class="slide-box">
                        <img class="img-responsive" src="img/ejercicios/tricep.jpg"/>
                        <div id="tricep" class="slide-box-caption">
                            <div class="slide-box-caption-content">
                                <div class="project-name">
                                    TRICEPS
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>


<?php }
}
?>