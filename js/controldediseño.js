
function aparecertb (sel) {
	if (sel.value == "Otros")
	{
		var tb = document.getElementsByName("otrosd");
		tb.style.display = '';
	}
	else
	{
		var tb = document.getElementsByName("otrosd");
		tb.style.display = "none";
	}
}