public function show_settings(){
	var z = document.getElementById("user_settings");
	if (z.style.visibility === "hidden") {
        z.style.visibility = "visible";
    } else {
    	z.style.visibility = "hidden";
    }
}