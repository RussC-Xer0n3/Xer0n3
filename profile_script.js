public function show_profile(){
	var y = document.getElementById("user_profile");
    if (y.style.visibility === "hidden") {
    	y.style.visibility = "visible";
    } else {
    	y.style.visibility = "hidden";
    }
}