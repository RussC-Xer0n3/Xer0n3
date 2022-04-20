public function show_hide(){
	var x = document.getElementById("user_info");
	if (x.style.visibility === "hidden") {
        x.style.visibility = "visibile";
    } else {
    	x.style.visibility = "hidden";
    }
}