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
		if (elem == 'publications')
		{
			triangle_margin = '10px 75px 0 0';
		}
		else if (elem == 'github')
		{
			triangle_margin = '10px 220px 0 0';
		}
		else if (elem == 'CV')
		{
			triangle_margin = '10px 330px 0 0';
		}
		else if (elem == 'about')
		{
			triangle_margin = '10px 440px 0 0';
		}
		else
		{
			triangle_margin = '10px 54px 0 0';
		}
		document.getElementById('triangle').style.display = 'inline';
		document.getElementById('triangle').style.margin = triangle_margin;
		
		section = elem;
		collapsed = false;
	}
}

function hideall()
{
		document.getElementById('about').style.display = 'none';
		document.getElementById('CV').style.display = 'none';
		document.getElementById('github').style.display = 'none';
		document.getElementById('publications').style.display = 'none';
		document.getElementById('triangle').style.display = 'none';

}
