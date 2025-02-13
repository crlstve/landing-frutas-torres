document.getElementById("contact-form").addEventListener("submit", function (e) {
    e.preventDefault();

    let form = this;
    let valid = true;
    let formData = new FormData(form);

    // Validar campos vacíos
    form.querySelectorAll("input, textarea").forEach(input => {
        if (input.hasAttribute("required") && !input.value.trim()) {
            input.style.borderColor = "red";
            valid = false;
        } else {
            input.style.borderColor = "";
        }
    });

    if (!valid) {
        alert("Por favor, completa todos los campos obligatorios.");
        return;
    }

    // Enviar datos
    fetch("send_mail.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.text())
        .then(data => alert(data))
        .catch(error => alert("Error al enviar el formulario."));
});