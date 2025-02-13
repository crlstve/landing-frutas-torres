document.getElementById("contact-form").addEventListener("submit", function (e) {
    e.preventDefault();

    let form = this;
    let valid = true;
    let formData = new FormData(form);

    // Validar campos vacíos
    form.querySelectorAll("input[required], textarea[required]").forEach(input => {
        if (!input.value.trim()) {
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
        .then(response => response.json()) // Convertimos a JSON
        .then(data => {
            showNotification(data.message, data.status === "success");
            if (data.status === "success") {
                form.reset();
            }
        })
        .catch(() => showNotification("Error al enviar el formulario.", false));
});

function showNotification(message, isSuccess) {
    let notification = document.getElementById("notification");
    notification.textContent = message;
    notification.classList.remove("hidden", "bg-green-500", "bg-red-500");
    notification.classList.add(isSuccess ? "bg-green-500" : "bg-red-500");

    setTimeout(() => {
        notification.classList.add("hidden");
    }, 3000);
}