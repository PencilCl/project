function add(e){
	var txt = parseInt(document.getElementById('addGoods').value);
	var current = e.value;
	var res = '';
	if(current == '-'){
		if(txt > 1){
			res = txt - 1;
		}else{
			res = txt;
		}
	}else if(current == '+'){
		res = txt + 1;
	}
	document.getElementById('addGoods').value = res;
	var single = 268.00;
	var price1 = document.getElementById("price1");
	price1.innerHTML = "<em>"+ parseFloat(res*single) +"</em>";
	var express = parseInt(document.getElementById("express").innerHTML);
	var price2 = document.getElementById("price2");
	price2.innerHTML = "<em>"+ parseFloat(res*single+express) +"</em>";
	var price3 = document.getElementById("price3");
	price3.innerHTML = "<em>"+ parseFloat(res*single+express) +"</em>";
}