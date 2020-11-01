const formSteps = Array.from(document.querySelectorAll(".form-step"));
const nextButton = document.querySelectorAll(".form-step .next-button");
const prevButton = document.querySelectorAll(".form-step .previous-button");

nextButton.forEach(button => {
	button.addEventListener("click", (event) => {
		changeStep("next");
	})
});
prevButton.forEach(button => {
	button.addEventListener("click", (event) => {
		changeStep("prev");
	})
});

function changeStep(stateBtn) {
	const activeStep = document.querySelector(".global-form .active-step");
	let index = formSteps.indexOf(activeStep);
	formSteps[index].classList.remove("active-step");
	if (stateBtn == "next") {index++;}
	else if (stateBtn == "prev") {index--;}
	formSteps[index].classList.add("active-step");
}