<?php /* Smarty version 3.1.27, created on 2015-11-23 12:40:23
         compiled from "C:\xampp\htdocs\progweb2\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:45625653336704c566_05110846%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93bbcfd605f62d54e13d1b9f262448c742ff71c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progweb2\\templates\\footer.tpl',
      1 => 1448213751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45625653336704c566_05110846',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56533367054268_77661978',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56533367054268_77661978')) {
function content_56533367054268_77661978 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '45625653336704c566_05110846';
?>

</div> <!-- /CONTENEDOR WEB AJAX -->

<!-- CONTACTO -->
    <section id="contact">
        <div class="container contact">
            
            <div class="text-center">
                <h1 class="section-heading contact">Te ha servido lo publicado&#63;<br/>Tienes Preguntas&#63;</h1>
                <hr class="primary"> <!-- separador -->
            </div>
          
            <form id="consulta" action="index.php?action=envia_mail">
                
              <textarea class="form-control vertical" id="mensaje" name="mensaje" placeholder="Deja tu consulta" rows="6" required></textarea>
              
              <br/>
              
              <label for="nombremail" class="sr-only">Nombre</label>
              <input type="text" id="nombremail" name="nombremail" class="form-control mail-input col-lg-offset-3 col-lg-6" placeholder="Nombre" required>
              </input>
              
              <br/>
          
              <label for="mailfrom" class="sr-only"></label>
              <input type="email" id="mailfrom" name="mailfrom" class="form-control mail-input col-lg-offset-3 col-lg-6" placeholder="Email" required>
              </input>
              
              <br/>
              
              <button id="submitmail" class="btn btn-lg btn-primary col-lg-offset-4 col-lg-4 margin-bottom" type="submit">Enviar</button>
              <div id="loading" class="col-lg-offset-4 col-lg-4 text-center"></div>  
          </form>

            

          <div class="col-lg-4 col-lg-offset-2 text-center">
              <i class="fa fa-facebook-official fa-5x wow bounceIn" data-wow-delay=".5s" ></i>
              <p><a href="http://www.facebook.com/maxi.guilhem">facebook</a></p>
          </div>
          <div class="col-lg-4 text-center">
              <i class="fa fa-envelope-o fa-5x wow bounceIn" data-wow-delay=".8s"></i>
              <p><a href="mailto:maximiliano.guilhem@gmail.com">e-mail</a></p>
          </div>
            
        </div>
    </section>

    <!-- jQuery  -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <!-- SE CARGA ANTES QUE EL JS DE BOOTSTRAP!!!-->
    
    <!-- Bootstrap JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
    <!-- JavaScript -->
    <?php echo '<script'; ?>
 src="js/jquery.easing.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.fittext.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/wow.min.js"><?php echo '</script'; ?>
>
    
    <!-- INICIO EFECTOS JAVASCRIPT -->
    <?php echo '<script'; ?>
 src="js/creative.js"><?php echo '</script'; ?>
>
    
    <!-- SISTEMA REST -->
    <?php echo '<script'; ?>
 src="js/rest.js"><?php echo '</script'; ?>
>

    <!-- MODEL VER NOTICIAS-->
    <?php echo '<script'; ?>
 src="js/model.js"><?php echo '</script'; ?>
>

    <!-- MAIL JS LISTENER-->
    <?php echo '<script'; ?>
 src="js/mail.js"><?php echo '</script'; ?>
>



</body>

</html><?php }
}
?>