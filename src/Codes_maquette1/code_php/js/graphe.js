

function grapheDroit() {
	var graphe = document.getElementById("graph");
	while (graphe.firstChild) {
		graphe.removeChild(graphe.firstChild);
	}
	new_graphe = document.createElement("img");
	new_graphe.setAttribute("src", "../images/methode_rec_droit2.png")
	graphe.appendChild(new_graphe);
}

function grapheGauche() {
	var graphe = document.getElementById("graph");
	while (graphe.firstChild) {
		graphe.removeChild(graphe.firstChild);
	}
	new_graphe = document.createElement("img");
	new_graphe.setAttribute("src", "../images/methode_rec_gauche.png")
	graphe.appendChild(new_graphe);
}

function grapheMedians() {
	var graphe = document.getElementById("graph");
	while (graphe.firstChild) {
		graphe.removeChild(graphe.firstChild);
	}
	new_graphe = document.createElement("img");
	new_graphe.setAttribute("src", "../images/methode_rec_medians2.png")
	graphe.appendChild(new_graphe);
}

function grapheTrapeze() {
	var graphe = document.getElementById("graph");
	while (graphe.firstChild) {
		graphe.removeChild(graphe.firstChild);
	}
	new_graphe = document.createElement("img");
	new_graphe.setAttribute("src", "../images/methode_trapeze2.png")
	graphe.appendChild(new_graphe);
}

function grapheSimpson() {
	var graphe = document.getElementById("graph");
	while (graphe.firstChild) {
		graphe.removeChild(graphe.firstChild);
	}
	new_graphe = document.createElement("img");
	new_graphe.setAttribute("src", "../images/methode_simpson2.png")
	graphe.appendChild(new_graphe);
}
