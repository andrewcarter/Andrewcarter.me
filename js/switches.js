function switchto(elem)
{
	if(collapsed == false && section == elem)
	{
		collapsed = true;
		section = "";
		hideall();	
	}
	else
	{
		hideall();
		document.getElementById(elem).style.display = 'inline';
		if (elem == 'about')
		{
			triangle_margin = '10px 54px 0 0';
		}
		else if (elem == 'CV')
		{
			triangle_margin = '10px 170px 0 0';
		}
		else
		{
			triangle_margin = '10px 54px 0 0';
		}
		document.getElementById('triangle').style.display = 'inline';
		document.getElementById('triangle').style.margin = triangle_margin;
		//document.getElementById('footer').style.display = 'inline';
		
		section = elem;
		collapsed = false;
	}
}

function hideall()
{
		document.getElementById('about').style.display = 'none';
		document.getElementById('CV').style.display = 'none';
		document.getElementById('triangle').style.display = 'none';
		document.getElementById('footer').style.display = 'none';

}
