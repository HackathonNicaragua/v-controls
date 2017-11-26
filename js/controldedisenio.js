
function aparecertb () {
	var et = document.getElementsById('etnia');
	if (et.value == "Otros")
	{
		var tb = document.getElementsById("otrosd");
		tb.style.display = " ";
	}
	else
	{
		var tb = document.getElementsById("otrosd");
		tb.style.display = "none";
	}
}