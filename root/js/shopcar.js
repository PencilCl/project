function adda(e)
{
	console.log(e.value);
	var txt = parseInt(document.getElementById('addGoods').value);
	var current = e.value;
	var res = '';
	if(current == '-')
	{
		if(txt > 1)
		{
			res = txt - 1;
		}else
		{
			res = txt;
		}
	}
	else if(current == '+')
	{
		res = txt + 1;
	}
	document.getElementById('addGoods').value = res;	
}
