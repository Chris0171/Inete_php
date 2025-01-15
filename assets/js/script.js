let countryBtn = document.getElementsByClassName("countryBtn");
let europe = document.getElementById("europe");
let africa = document.getElementById("africa");
let america = document.getElementById("america");

for (let i = 0; i < countryBtn.length; i++) {
	countryBtn[i].addEventListener("click", () => {
		switch (i) {
			case 0:
				america.style.display = "none";
				africa.style.display = "none";
				europe.style.display = "block";
				break;
			case 1:
				europe.style.display = "none";
				africa.style.display = "none";
				america.style.display = "block";
				break;
			case 2:
				europe.style.display = "none";
				america.style.display = "none";
				africa.style.display = "block";
				break;
		}
	});
}
