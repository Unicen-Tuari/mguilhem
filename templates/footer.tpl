
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
    <script src="js/jquery.js"></script>
    <!-- SE CARGA ANTES QUE EL JS DE BOOTSTRAP!!!-->
    
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    
    <!-- INICIO EFECTOS JAVASCRIPT -->
    <script src="js/creative.js"></script>
    
    <!-- SISTEMA REST -->
    <script src="js/rest.js"></script>

    <!-- MODEL VER NOTICIAS-->
    <script src="js/model.js"></script>

    <!-- MAIL JS LISTENER-->
    <script src="js/mail.js"></script>



</body>

</html>