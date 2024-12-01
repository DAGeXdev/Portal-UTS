// Obtener el modal
var modal = document.getElementById("loginModal");

// Obtener el botón que abre el modal
var btn = document.getElementById("loginBtn");

// Obtener el <span> que cierra el modal
var span = document.getElementsByClassName("close")[0];

// Cuando el usuario hace clic en el botón, se abre el modal
btn.onclick = function() {
    modal.style.display = "flex";
}




/* Cuando el usuario hace clic en <span> (x), cierra el modal
span.onclick = function() {
    modal.style.display = "none";
}

// Cuando el usuario hace clic fuera del modal, se cierra
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/


//MATRICULA
// Obtener elementos del DOM
const addButton = document.querySelector(".add-button");
const removeButton = document.querySelector(".remove-button");
const materiasList = document.getElementById("materias-list");
const horarioList = document.getElementById("horario-list");

// Mover materias seleccionadas al horario
addButton.addEventListener("click", () => {
    const selected = document.querySelector('input[name="materia"]:checked');
    if (selected) {
        const itemText = selected.value;

        // Crear un nuevo elemento en la columna derecha
        const listItem = document.createElement("li");
        listItem.innerHTML = itemText;

        // Añadir el nuevo elemento
        horarioList.appendChild(listItem);

        // Remover la materia seleccionada de la columna izquierda
        selected.closest("li").remove();
    } else {
        alert("Por favor, selecciona una materia.");
    }
});

// Mover materias de vuelta a la lista original
removeButton.addEventListener("click", () => {
    if (horarioList.children.length > 0) {
        const lastAdded = horarioList.lastElementChild;

        // Crear un nuevo elemento en la columna izquierda
        const listItem = document.createElement("li");
        listItem.innerHTML = `
            <input type="radio" name="materia" value="${lastAdded.innerText}">
            ${lastAdded.innerText}
        `;

        // Añadir el nuevo elemento
        materiasList.appendChild(listItem);

        // Remover la materia del horario
        lastAdded.remove();
    } else {
        alert("No hay materias en el horario para remover.");
    }
});
