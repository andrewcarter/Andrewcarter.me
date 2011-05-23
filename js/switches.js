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
		if (elem == 'projects')
		{
			triangle_margin = '10px 55px 0 0';
		}
		else if (elem == 'skills')
		{
			triangle_margin = '10px 183px 0 0';
		}
		else if (elem == 'github')
		{
			triangle_margin = '10px 300px 0 0';
		}
		else if (elem == 'resume')
		{
			triangle_margin = '10px 424px 0 0';
		}
		else if (elem == 'about')
		{
			triangle_margin = '10px 550px 0 0';
		}
		else
		{
			triangle_margin = '10px 54px 0 0';
		}
		document.getElementById('triangle').style.display = 'inline';
		document.getElementById('triangle').style.margin = triangle_margin;
		document.getElementById('footer').style.display = 'inline';
		
		section = elem;
		collapsed = false;
	}
}

function hideall()
{
		document.getElementById('about').style.display = 'none';
		document.getElementById('resume').style.display = 'none';
		document.getElementById('github').style.display = 'none';
		document.getElementById('projects').style.display = 'none';
		document.getElementById('skills').style.display = 'none';
		document.getElementById('triangle').style.display = 'none';
		document.getElementById('footer').style.display = 'none';
}
