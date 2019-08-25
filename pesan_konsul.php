<button class='btn btn-success' onclick='textPesan()'>Pesan Via Whatsapp</button>
<button class='btn btn-success' onclick="textKonsultasi()">Konsultasi</button>
<div class='panel panel-info'>
<div class='panel-head'><h3><b>Cek Resi Anda</b></h3></div>

<div id="cekresicom_id"></div>
			<script type="text/javascript" src="https://cekresi.com/widget/widgetcekresicom_v1.js"></script>
			<script type="text/javascript">
			init_widget_cekresicom('w1',380,110)
			</script>

</div>




<script>
function textPesan()
{
 window.location="pesan.php";
}

function textKonsultasi()
{
	window.location="konsultasi.php";
}
</script>