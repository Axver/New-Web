<div class='spirulina' id='spirulina'>

<div class='row'>
          <div class='col-sm-3'>
            <div class='panel panel-info'>
              <div class='panel-head'><b>Rp.100.000</b></div>
              <div class='panel-body'>
                Produk 1
                <div>
                <img src="image/gb1.jpeg" class="img-thumbnail" alt="">
                </div>
              </div>
              <div class='panel-footer'>
                  <button class='btn btn-primary' onclick='beli("Produk1")'>Beli</button>
              </div>
            </div>
          </div>
          <div class='col-sm-3'>
            <div class='panel panel-info'>
              <div class='panel-head'><b>Rp.100.000</b></div>
              <div class='panel-body'>
                Produk 2
              </div>
              <div>
                <img src="image/gb1.jpeg" class="img-thumbnail" alt="">
                </div>
              <div class='panel-footer'>
              <button class='btn btn-primary' onclick='beli("Produk2")'>Beli</button>
              </div>
            </div>
          </div>
          <div class='col-sm-3'>
            <div class='panel panel-info'>
              <div class='panel-head'><b>Rp.100.000</b></div>
              <div class='panel-body'>
                Produk 3
              </div>
              <div>
                <img src="image/gb1.jpeg" class="img-thumbnail" alt="">
                </div>
              <div class='panel-footer'>
              <button class='btn btn-primary' onclick='beli("Produk3")'>Beli</button>
              </div>
            </div>
          </div>
          <div class='col-sm-3'>
            <div class='panel panel-info'>
              <div class='panel-head'><b>Rp.100.000</b></div>
              <div class='panel-body'>
                Produk 4
              </div>
              <div>
                <img src="image/gb1.jpeg" class="img-thumbnail" alt="">
                </div>
              <div class='panel-footer'>
              <button class='btn btn-primary' onclick='beli("Produk4")'>Beli</button>
              </div>
            </div>
          </div>
        </div>

        <div class='row'>
          <div class='col-sm-3'>
            <div class='panel panel-info'>
              <div class='panel-head'><b>Rp.100.000</b></div>
              <div class='panel-body'>
                Produk 5
              </div>
              <div>
                <img src="image/gb1.jpeg" class="img-thumbnail" alt="">
                </div>
              <div class='panel-footer'>
              <button class='btn btn-primary' onclick='beli("Produk5")'>Beli</button>
              </div>
            </div>
          </div>
          <div class='col-sm-3'>
            <div class='panel panel-info'>
              <div class='panel-head'><b>Rp.100.000</b></div>
              <div class='panel-body'>
                Produk 6
              </div>
              <div>
                <img src="image/gb1.jpeg" class="img-thumbnail" alt="">
                </div>
              <div class='panel-footer'>
              <button class='btn btn-primary' onclick='beli("Produk6")'>Beli</button>
              </div>
            </div>
          </div>
          <div class='col-sm-3'>
            <div class='panel panel-info'>
              <div class='panel-head'><b>Rp.100.000</b></div>
              <div class='panel-body'>
                Produk 7
              </div>
              <div>
                <img src="image/gb1.jpeg" class="img-thumbnail" alt="">
                </div>
              <div class='panel-footer'>
              <button class='btn btn-primary' onclick='beli("Produk7")'>Beli</button>
              </div>
            </div>
          </div>
          <div class='col-sm-3'>
            <div class='panel panel-info'>
              <div class='panel-head'><b>Rp.100.000</b></div>
              <div class='panel-body'>
                Produk 8
              </div>
              <div>
                <img src="image/gb1.jpeg" class="img-thumbnail" alt="">
                </div>
              <div class='panel-footer'>
              <button class='btn btn-primary' onclick='beli("Produk8")'>Beli</button>
              </div>
            </div>
          </div>
        </div>

</div>

<script>

function beli(data)
{
  window.location.href="https://api.whatsapp.com/send?phone=085264496374&text=Hai, Saya Ingin Membeli "+data;
}
</script>