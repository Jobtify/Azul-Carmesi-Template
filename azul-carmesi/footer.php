<!-- Footer -->
  <footer class="footer p-0  ">
    <div class=" containerFooter ">
        <div class="footerIzquierda">
          <div class="footerLogo">
            <img src="https://cdn.jobtify.com.mx/jobtifynew.png" class="d-fluid " alt="" >
          </div>
          <div class="listaAccesos  ">
            <ul class="navbar-nav ml-auto footerAtajo">
            <?php 
              self::printHTML($this->menu, "li");
            ?>
          </ul> 
          </div>
     
      </div>
      <div class="footerCentro">
            
        <div class="footRedes">
          <h2>Nuestras Redes</h2>  
        </div>
            

        <div class="redesLogo">
          <ul class="list-inline mb-0 footerIconos">
            <li class="list-inline-item mr-3">
              <a class="enlaceIcono" href="https://www.facebook.com/jobtifyMX/" target="_black">
                <i class="fab fa-facebook fa-2x fa-fw icon"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a class="enlaceIcono" href="https://twitter.com/JobtifyMX" target="_black" >
                <i class="fab fa-twitter-square fa-2x fa-fw icon"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a class="enlaceIcono" href="https://www.instagram.com/jobtifyMX/" target="_black">
                <i class="fab fa-instagram fa-2x fa-fw icon"></i>
              </a>
            </li>
          </ul>
          
          <div class="derechosFoot">
            <p class="text-muted small mb-2 mb-lg-0 derechos">&copy; Your Website 2019. All Rights Reserved.</p>
          </div>
            
        </div>
    </div>

      <div class="footerDerecha">
          <div class="footTitulo">
            <h1>About Us</h1>
            <hr class="Line">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ipsam repellendus aspernatur adipisci doloribus, corporis omnis vitae ullam, ratione rem accusantium inventore quidem, molestias qui, minima quasi provident excepturi totam.
            </p>
          </div>
      </div>
    </div>
  </footer>
