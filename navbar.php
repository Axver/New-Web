 <!--        rose navbar with search form -->



 <nav class="navbar navbar-expand-lg bg-rose">
            <div class="container">
              <div class="navbar-translate">
               
               <h4>Menu</h4>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link" onclick='spirulina()'>Spirulina</a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link" onclick='peninggi()'>Peninggi</a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link" onclick='pelangsing()'>Pelangsing</a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link" onclick='testimoni()'>Testimoni</a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link" onclick='galeri()'>Galeri</a>
                  </li>
                </ul>
                <form class="form-inline ml-auto">
                  <!-- <div class="form-group has-white">
                    <input type="text" class="form-control" placeholder="Search">
                  </div> -->
                  <!-- <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                    <i class="material-icons">search</i>
                  </button> -->
                </form>
              </div>
            </div>
          </nav>
          <div class='panel panel-info'>
          <div class='panel-body'>
          <div class='row'>
          <div class='col-sm-12'>
          <button class="btn btn-info dropdown nav-item" style='height:50px;'>
                      <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true">Menu</a>
                      <div class="dropdown-menu">
                        <h6 class="dropdown-header">List Menu</h6>
                        <a href="#pablo" class="dropdown-item" onclick='spirulina()'>Spirulina</a>
                        <a href="#pablo" class="dropdown-item" onclick='peninggi()'>Peninggi</a>
                        <a href="#pablo" class="dropdown-item" onclick='pelangsing()'>Pelangsing</a>
                        <div class="dropdown-divider"></div>
                        <a href="#pablo" class="dropdown-item" onclick='testimoni()'>Testimoni</a>
                        <div class="dropdown-divider"></div>
                        <a href="#pablo" class="dropdown-item" onclick='galeri()'>Galeri</a>
                      </div>
            </button>
          </div>
          
        
          </div>
          </div></div>
          <!--        end rose navbar -->
      
          <script>
              
        function load()
        {
            document.getElementById("spirulina").style.display = "none";
            document.getElementById("peninggi").style.display = "none";
              document.getElementById("pelangsing").style.display = "none";
              document.getElementById("testimoni").style.display = "none";
        }
          function peninggi()
          {
            document.getElementById("peninggi").style.display = "block";
            // Hilangkan yg lain
              document.getElementById("spirulina").style.display = "none";
              document.getElementById("pelangsing").style.display = "none";
              document.getElementById("testimoni").style.display = "none";

          }

          function spirulina()
          {
            document.getElementById("spirulina").style.display = "block";
            // Hilangkan yg lain
              document.getElementById("peninggi").style.display = "none";
              document.getElementById("pelangsing").style.display = "none";
              document.getElementById("testimoni").style.display = "none";

          }
          function pelangsing()
          {
            document.getElementById("pelangsing").style.display = "block";
            // Hilangkan yg lain
              document.getElementById("peninggi").style.display = "none";
              document.getElementById("spirulina").style.display = "none";
              document.getElementById("testimoni").style.display = "none";

          }

          function testimoni()
          {
            document.getElementById("testimoni").style.display = "block";
            // Hilangkan yg lain
              document.getElementById("peninggi").style.display = "none";
              document.getElementById("spirulina").style.display = "none";
              document.getElementById("pelangsing").style.display = "none";

          }

          function galeri()
          {
              window.location='demo'
          }

          function showAll()
          {
            document.getElementById("testimoni").style.display = "block";
              document.getElementById("peninggi").style.display = "block";
              document.getElementById("spirulina").style.display = "block";
              document.getElementById("pelangsing").style.display = "block";
          }
          </script>