
function aparecertb (sel) {
	if (sel.value == "Otros")
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