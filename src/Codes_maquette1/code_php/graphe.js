

function grapheDroit() {
	var graphe = document.getElementById("graph");
	while (graphe.firstChild) {
		graphe.removeChild(graphe.firstChild);
	}
	new_graphe = document.createElement("img");
	new_graphe.setAttribute("src", "methode_rec_droit.png")
	graphe.appendChild(new_graphe);
}

function grapheGauche() {
	var graphe = document.getElementById("graph");
	while (graphe.firstChild) {
		graphe.removeChild(graphe.firstChild);
	}
	new_graphe = document.createElement("img");
	new_graphe.setAttribute("src", "methode_rec_gauche.png")
	graphe.appendChild(new_graphe);
}

function grapheMedians() {
	var graphe = document.getElementById("graph");
	while (graphe.firstChild) {
		graphe.removeChild(graphe.firstChild);
	}
	new_graphe = document.createElement("img");
	new_graphe.setAttribute("src", "methode_rec_medians.png")
	graphe.appendChild(new_graphe);
}

function grapheTrapeze() {
	var graphe = document.getElementById("graph");
	while (graphe.firstChild) {
		graphe.removeChild(graphe.firstChild);
	}
	new_graphe = document.createElement("img");
	new_graphe.setAttribute("src", "methode_trapeze.png")
	graphe.appendChild(new_graphe);
}

function grapheSimpson() {
	var graphe = document.getElementById("graph");
	while (graphe.firstChild) {
		graphe.removeChild(graphe.firstChild);
	}
	new_graphe = document.createElement("img");
	new_graphe.setAttribute("src", "methode_simpson.png")
	graphe.appendChild(new_graphe);
}
