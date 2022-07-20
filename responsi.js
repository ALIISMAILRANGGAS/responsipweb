function hitungtotal(){
	var nama = (document.fform.inama.value);
	var tujuan = (document.fform.itujuan.value);
	var jumlahpaket = parseFloat(document.fform.ijumlah.value);
	var ht = 0.0;
	var sub = 0.0; 
	var total =0.0;
	if (tujuan=="Semen"){
		ht =10000;
	}
	else if (tujuan=="Pasir"){
		ht =5000;
	}
	else if (tujuan=="Besi Beton"){
		ht =5000;
	}
	else if (tujuan=="Kayu"){
		ht =5000;
	}
	else if (tujuan=="Genteng"){
		ht =5000;
	}
	else if (tujuan=="Paku"){
		ht =5000;
	}
	else if (tujuan=="Pipa"){
		ht =5000;
	}
	else{
		ht =20000;
	}
	sub = jumlahpaket*ht;
	

	document.fform.osub.value=eval(sub);

}