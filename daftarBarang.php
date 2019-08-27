<!-- Paket 1 -->
<div class='panel panel-info'>
<div class='panel-head'>
<b>Paket A 10 Capsule</b>
<strike style='color:red'><b>Rp 150.000</b></strike>
<h3><b>Rp 115.000</b></h3>
</div>

<div class='panel-body'>
<div class="thumbnail">
      
        <img src="image/paket_a.png" alt="Nature" style="width:100%">
      
</div>


<button class='btn btn-primary' onclick="beliPaket('Paket A')">Beli</button>
</div>
</div>


<!-- Paket 2 -->
<div class='panel panel-info'>
<div class='panel-head'>
<b>Paket B 25 Capsule</b>
<strike style='color:red'><b>Rp 200.000</b></strike>
<h3><b>Rp 175.000</b></h3>
</div>

<div class='panel-body'>
<div class='panel-body'>
<div class="thumbnail">
      
        <img src="image/paket_b.png" alt="Nature" style="width:100%">
      
</div>


<button class='btn btn-primary' onclick="beliPaket('Paket B')">Beli</button>
</div>
</div>

<!-- Paket 3 -->
<div class='panel panel-info'>
<div class='panel-head'>
<b>Paket C 50 Capsule</b>
<strike style='color:red'><b>Rp 388.000</b></strike>
<h3><b>Rp 255.000</b></h3>
</div>

<div class='panel-body'>
<div class='panel-body'>
<div class="thumbnail">
      
        <img src="image/paket_c.png" alt="Nature" style="width:100%">
      
</div>


<button class='btn btn-primary' onclick="beliPaket('Paket C')">Beli</button>
</div>
</div>

<!-- Paket 4 -->
<div class='panel panel-info'>
<div class='panel-head'>
<b>Paket A 100 Capsule</b>
<strike style='color:red'><b>Rp 499.000</b></strike>
<h3><b>Rp 415.000</b></h3>
</div>

<div class='panel-body'>
<div class='panel-body'>
<div class="thumbnail">
      
        <img src="image/paket_d.png" alt="Nature" style="width:100%">
      
</div>


<button class='btn btn-primary' onclick="beliPaket('Paket D')">Beli</button>
</div>
</div>


<script>

function beliPaket(data)
{
    window.location.href="https://api.whatsapp.com/send?phone=085264496374&text=Hai Saya Ingin Membeli "+data;
}

</script>