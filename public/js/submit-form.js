function showNotification(message, isSuccess = true) {
    let notification = document.getElementById("notification");
    notification.textContent = message;
    notification.classList.remove("hidden", "bg-green-500", "bg-red-500");
    notification.classList.add(isSuccess ? "bg-green-500" : "bg-red-500");

    setTimeout(() => {
        notification.classList.add("hidden");
    }, 3000); // Ocultar después de 3 segundos
}

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
        showNotification("Por favor, completa todos los campos obligatorios.", false);
        return;
    }

    // Enviar datos
    fetch("send_mail.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            showNotification(data, data.includes("Correo enviado correctamente"));
            if (data.includes("Correo enviado correctamente")) {
                form.reset();
            }
        })
        .catch(error => showNotification("Error al enviar el formulario.", false));
});