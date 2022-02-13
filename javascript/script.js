let swichMode = document.getElementById("switchMode");

swichMode.onclick = function(){
	let theme = document.getElementById("theme");

	if (theme.getAttribute("href") == "/css/light.css"){
		theme.href = "/css/dark.css";
	}else{
		theme.href = "/css/light.css";
	}
}