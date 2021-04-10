<!DOCTYPE html>
    <head>
        <title>Simulasi</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">Anugerah Pratama Lazuardi</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
					<li class="nav-item"><a href="{{ url('/mkt') }}" class="nav-link">Marketing</a></li>
					<li class="nav-item"><a href="{{ url('/prt')}}" class="nav-link">Properti</a></li>
					<li class="nav-item"><a href="{{ url('/ktk')}}" class="nav-link">Pemesanan</a></li>
				</ul>
			</div>
		</div>
	</nav>
<style>th, td {text-align:right;}</style>
<a name="top"></a>
<div class="container">
<div class="row">
	<div class="col-md-3">
	<div class="well">
		<h1> Hitung Kredit</h1>
		  
		  <label for="pv">Harga: </label><br>
		  <input type="text" id="pv" class="text-right"><br><br>
		  <label for="dp">Uang Muka: </label><br>
		  <input type="text" id="dp" class="text-right"><br><br> 
		  <label for="bunga">Bunga </label><br> 
		  <input type="text" id="bunga" class="text-right">%<br><br>
		  <button id="hitung"> Hitung</button>		
	  
	</div>	  
	</div>
	<div class="col-md-9">
		<h3>cicilan per bulan : </h3>
		<table class="table">
		  <thead>
		  <tr><th>DP</th><th>KPR</th><th>Bunga</th><th>5 th</th><th>10 th</th><th>15 th</th><th>20 th</th><th>25 th</th></tr>
		  </thead>
		  <tbody>
		  <tr><td id="dpr"><td id="kpr"></td><td id="rate"></td><td id="anu5"></td><td id="anu10"></td><td id="anu15"></td><td id="anu20"></td><td id="anu25"></td></tr>
		  </tbody>
		</table>		
		
		<a name="d5th"></a>
		<div>
		  <a href="#top">Back to Top</a> |
		  <a href="#d5th">Detail 5 th</a> |
		  <a href="#d10th">Detail 10 th</a> |
		  <a href="#d15th">Detail 15 th</a> |
		  <a href="#d20th">Detail 20 th</a> |
		  <a href="#d25th">Detail 25 th</a>
		</div>
		<h3>Detail 5 th: </h3>
		<table class="table">
		  <thead>
		  <tr><th>No</th><th>Bunga</th><th>Pokok</th><th>Angsuran</th><th>Sisa</th></tr>
		  </thead>
		  <tbody id="list5">
	
		  </tbody>
		</table>	
		
		<a name="d10th"></a>		  
		<div>
		  <a href="#top">Back to Top</a> |
		  <a href="#d5th">Detail 5 th</a> |
		  <a href="#d10th">Detail 10 th</a> |
		  <a href="#d15th">Detail 15 th</a> |
		  <a href="#d20th">Detail 20 th</a> |
		  <a href="#d25th">Detail 25 th</a>
		</div>		
		<h3>Detail 10 th: </h3>
		<table class="table">
		  <thead>
		  <tr><th>No</th><th>Bunga</th><th>Pokok</th><th>Angsuran</th><th>Sisa</th></tr>
		  </thead>
		  <tbody id="list10">
	
		  </tbody>
		</table>		
		
		<a name="d15th"></a>
		<div>
		  <a href="#top">Back to Top</a> |
		  <a href="#d5th">Detail 5 th</a> |
		  <a href="#d10th">Detail 10 th</a> |
		  <a href="#d15th">Detail 15 th</a> |
		  <a href="#d20th">Detail 20 th</a> |
		  <a href="#d25th">Detail 25 th</a>
		</div>
		<h3>Detail 15 th: </h3>
		<table class="table">
		  <thead>
		  <tr><th>No</th><th>Bunga</th><th>Pokok</th><th>Angsuran</th><th>Sisa</th></tr>
		  </thead>
		  <tbody id="list15">
	
		  </tbody>
		</table>

        <a name="d20th"></a>
		<div>
		  <a href="#top">Back to Top</a> |
		  <a href="#d5th">Detail 5 th</a> |
		  <a href="#d10th">Detail 10 th</a> |
		  <a href="#d15th">Detail 15 th</a> |
		  <a href="#d20th">Detail 20 th</a> |
		  <a href="#d25th">Detail 25 th</a>
		</div>
		<h3>Detail 20 th: </h3>
		<table class="table">
		  <thead>
		  <tr><th>No</th><th>Bunga</th><th>Pokok</th><th>Angsuran</th><th>Sisa</th></tr>
		  </thead>
		  <tbody id="list20">
	
		  </tbody>
		</table>

        <a name="d25th"></a>
		<div>
		  <a href="#top">Back to Top</a> |
		  <a href="#d5th">Detail 5 th</a> |
		  <a href="#d10th">Detail 10 th</a> |
		  <a href="#d15th">Detail 15 th</a> |
		  <a href="#d20th">Detail 20 th</a> |
		  <a href="#d25th">Detail 25 th</a>
		</div>
		<h3>Detail 25 th: </h3>
		<table class="table">
		  <thead>
		  <tr><th>No</th><th>Bunga</th><th>Pokok</th><th>Angsuran</th><th>Sisa</th></tr>
		  </thead>
		  <tbody id="list25">
	
		  </tbody>
		</table>
		
	</div>
</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js'></script>

<script>
/*
	hitung anuitas sederhana by juni fajar
	buat tugas kul gundar
*/

function roundToTwo(num) {    
    return +(Math.round(num + "e+2")  + "e-2");
}

function formatNum(out) {    
     return Number(out.toFixed(2)).toLocaleString('id');
}

function hitungAnu(pv, dp, bunga, lama) {
    return (pv-dp) * ((((bunga/100)/12) * Math.pow((1 + ((bunga/100)/12)) , (lama*12))) / (Math.pow(1 + ((bunga/100)/12) , (lama*12)) - 1));
}

function cekParam(){
	var pv = $('#pv').val();
	var dp = $('#dp').val();
	var bunga = $('#bunga').val();
	if(pv=="" || dp=="" || bunga=="") 
		return false
	else
		return true
}

function list_detail(pv, dp, bunga, lama) {
	var bunga_bulan = (bunga/100)/12;
	var angsuran = roundToTwo(hitungAnu(pv, dp, bunga, lama));
	var sisa = pv - dp;
	var bunga_i;
	var pokok;
	var sd = lama * 12;
	var out = '';
	for(i=0; i < sd ; i++) {
	
		bunga_i = roundToTwo(bunga_bulan * (sisa));
		pokok = roundToTwo(angsuran - bunga_i);
		
		sisa = roundToTwo(sisa - pokok);
		out += '<tr><td align="right">' + (i+1) + '</td><td align="right">' + formatNum(bunga_i) + '</td><td align="right">' + formatNum(pokok) +'</td><td align="right">' + formatNum(angsuran) + '</td><td align="right">' + formatNum(sisa) + '</td></tr>';
 		
	}
	return out;
}

$(function() {
	$("#pv").maskMoney({thousands:'.', decimal:',', allowZero:false});
	$("#dp").maskMoney({thousands:'.', decimal:',', allowZero:false});
	$("#bunga").maskMoney({thousands:'.', decimal:',', allowZero:false});

});

$("#hitung").click(function(){
	
	var pvz = $("#pv").maskMoney('unmasked')[0];
	var dpz = $("#dp").maskMoney('unmasked')[0];
	dpz = dpz;
	var kpr = pvz - dpz;
	var bungaz = $("#bunga").maskMoney('unmasked')[0];
	
	console.log(bungaz);
	if(cekParam(pvz, dpz, bungaz)) {
		
		//kosongin template
		$("#kpr").empty(); $("#dpr").empty();
		$("#rate").empty(); $("#anu5").empty();
		$("#anu10").empty(); $("#anu15").empty();
		$("#list5").empty(); $("#list10").empty();	  
		$("#list15").empty();
			
		$("#kpr").append(formatNum(kpr));
		$("#rate").append(formatNum(bungaz) + '%'); 
		$("#dpr").append(formatNum(dpz)); 
		
		$("#anu5").append(formatNum(hitungAnu(pvz, dpz, bungaz, 5)));
		$("#list5").append(list_detail(pvz, dpz, bungaz, 5));
		
		$("#anu10").append(formatNum(hitungAnu(pvz, dpz, bungaz, 10)));
		$("#list10").append(list_detail(pvz, dpz, bungaz, 10));
		
		$("#anu15").append(formatNum(hitungAnu(pvz, dpz, bungaz, 15)));
		$("#list15").append(list_detail(pvz, dpz, bungaz, 15));

        $("#anu20").append(formatNum(hitungAnu(pvz, dpz, bungaz, 20)));
		$("#list20").append(list_detail(pvz, dpz, bungaz, 20));

        $("#anu25").append(formatNum(hitungAnu(pvz, dpz, bungaz, 25)));
		$("#list25").append(list_detail(pvz, dpz, bungaz, 25));
	
	} else {
		alert('harap masukkan input dengan benar')
	}
  
});
</script>
</body>
</html>
