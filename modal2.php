<style>
.modal-backdrop {
    z-index: 0 !important;
}
</style>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Health Beauty Official</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <div class="thumbnail">
      
        <img src="image/paket_diabetes.png" alt="Nature" style="width:100%">
        <div class="caption">
          <button class='btn btn-primary' onclick="redirectAll('diabetes.php')">Lihat</button>
        </div>
      
    </div>

    <div class="thumbnail">
      
        <img src="image/paket_masker.png" alt="Nature" style="width:100%">
        <div class="caption">
        <button class='btn btn-primary' onclick="redirectAll('spirulina1.php')">Lihat</button>
        </div>
     
    </div>

    <div class="thumbnail">
      
        <img src="image/paket_mataminus.png" alt="Nature" style="width:100%">
        <div class="caption">
        <button class='btn btn-primary' onclick="redirectAll('mata.php')">Lihat</button>
        </div>
    
    </div>
    
    <div class="thumbnail">
     
        <img src="image/paket_peninggi.png" alt="Nature" style="width:100%">
        <div class="caption">
        <button class='btn btn-primary' onclick="redirectAll('peninggi1.php')">Lihat</button>
        </div>
    
    </div>

    <div class="thumbnail">
    
        <img src="image/paket_vitaline.png" alt="Nature" style="width:100%">
        <div class="caption">
        <button class='btn btn-primary' onclick="redirectAll('vitaline.php')">Lihat</button>
        </div>
    
    </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<script>

function redirectAll(data)
{
  window.location=data;
}
</script>