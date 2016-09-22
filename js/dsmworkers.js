function menuPressed() {
	var menuButton = document.getElementById("menu-button");
	var menu = document.querySelector("#menu ul");

	menuButton.addEventListener("click", function(e) {
		e.preventDefault();
		var menuDisplay = getComputedStyle(menu)["display"];

		if (menuDisplay === "none") {
			menu.style.display = "block";
			menuButton.style.backgroundColor = "grey";
		} else {
			menu.style.display = "none";
			menuButton.style.backgroundColor = "";
		}
	});
}

menuPressed();
