
function aparecertb () {
	if (document.getElementsByName("etnia").value == "Otros")
	{
		document.getElementsByName("otrosd").style.display = "";
	}
	else
	{
		document.getElementsByName("otrosd").style.display = "none";
	}
}