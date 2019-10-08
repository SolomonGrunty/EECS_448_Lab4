function validateForm()
{
	let c1 = document.getElementById("c1").checked;
	let c2 = document.getElementById("c2").checked;
	let c3 = document.getElementById("c3").checked;
	let c = c1 ||c2||c3;
	if (!c)
	{
		alert("Pick a shipping method.");
		return false;
	}
}
