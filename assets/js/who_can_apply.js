const instructions = document.getElementsByClassName("instructions");
const domain = "../";

instructions[0].addEventListener("click", () => {
	// Cambia esta URL por la del PDF que quieres abrir
	const pdfUrl = domain + "assets/pdf/Instruction_1.pdf";
	window.open(pdfUrl, "_blank"); // Abre el PDF en una nueva pestaña del navegador
});
instructions[1].addEventListener("click", () => {
	// Cambia esta URL por la del PDF que quieres abrir
	const pdfUrl = domain + "assets/pdf/Instruction_2.pdf";
	window.open(pdfUrl, "_blank"); // Abre el PDF en una nueva pestaña del navegador
});
