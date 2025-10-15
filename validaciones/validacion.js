function validar(campo) {
    const valor = campo.value.trim();
    const error = document.getElementById("error-" + campo.name);
    error.textContent = "";

    if (valor === "") {
        error.textContent = "Este campo es obligatorio.";
    } else if (isNaN(valor) || valor <= 0) {
        error.textContent = "Introduce un numero mayor que cero.";
    }
}
