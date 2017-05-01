<html>
<head><title>Stemming Tala</title>
<script>
	no = 1;
	function tambah(){
		urut=no+1;
		document.getElementById(urut).innerHTML="<p>("+urut+") Input Kata : <input type='text' name='kata[]'></p></div><div id='"+(urut+1)+"'>";	
		no++;
	}
	
	function hapus(){
	  if(no!=1){
		document.getElementById(no).innerHTML="";
		no--;
	  }
	}
	
</script>
</head>
<body>
<h1 align='center'>Stemming dengan Algoritma TALA</h1>
<h2 align='center'>Kelompok 3 STKI 2017</h2>
<p align='center'></p>

<form action="proses.php" method="POST">
<fieldset style="width:30%;margin:auto">
<center>
    
<input type="submit" value="STEMMING" />
</center>
 </fieldset>
</form>
	
</body>
</html>