// JavaScript Document

function getWindowOrPageWidth()
{
	var scnWid;
	if (self.innerWidth) // all except Explorer
	{
		scnWid = self.innerWidth;
		//scnHei = self.innerHeight;
	}
	else if (document.documentElement && document.documentElement.clientHeight)
		// Explorer 6 Strict Mode
	{
		scnWid = document.documentElement.clientWidth;
		//scnHei = document.documentElement.clientHeight;
	}
	else if (document.body) // other Explorers
	{
		scnWid = document.body.clientWidth;
		//scnHei = document.body.clientHeight;
	}
	return scnWid;	//scnHei;
}

function setElementWidth(var id)
{
  var elementStyle = document.getElementById(id).style;
  if (getWindowOrPageWidth() > 1000)
  {
    elementStyle.width = 1000px;
    elementStyle.marginRight = 1000px;
  }
  else
  {
    elementStyle.width = 900px;
    elementStyle.marginRight = 450px;
  }
}