document.getElementById("contact-form").addEventListener("submit", function (e) {
    e.preventDefault();

    let form = this;
    let submitButton = form.querySelector('button[type="submit"]');
    let valid = true;
    let formData = new FormData(form);

    // Deshabilitar el botón de envío mientras se procesa
    submitButton.disabled = true;

    // Validar campos vacíos
    form.querySelectorAll("input[required], textarea[required]").forEach(input => {
        if (!input.value.trim()) {
            input.style.borderColor = "red";
            valid = false;
        } else {
            input.style.borderColor = "";
        }
    });

    // Si hay campos vacíos, mostramos un mensaje y detenemos el envío
    if (!valid) {
        showNotification("Por favor, completa todos los campos obligatorios.", false);
        submitButton.disabled = false; // Habilitar el botón de nuevo
        return;
    }

    // Enviar datos
    fetch("../send_mail.php", { // Asegúrate de que la ruta es correcta
        method: "POST",
        body: formData
    })
        .then(response => response.json()) // Convertimos la respuesta a JSON
        .then(data => {
            showNotification(data.message, data.status === "success");

            if (data.status === "success") {
                form.reset(); // Limpiamos el formulario si el envío es exitoso
            }
        })
        .catch(() => showNotification("Error al enviar el formulario.", false)) // Si hay error, mostramos un mensaje de error
        .finally(() => {
            // Volver a habilitar el botón al finalizar el proceso
            submitButton.disabled = false;
        });
});

// Función para mostrar el mensaje de notificación
function showNotification(message, success = true) {
    const notification = document.createElement('div');
    notification.classList.add('notification', success ? 'bg-green' : 'bg-orange', 'text-white', 'p-6', 'rounded-lg', 'shadow-lg', 'w-10/12', 'lg:w-3/12', 'text-center');
    notification.innerText = message;

    // Crear un contenedor para la notificación y agregarla al body
    const container = document.createElement('div');
    container.classList.add('absolute', 'w-screen', 'h-screen', 'top-0', 'left-0', 'flex', 'flex-col', 'items-center', 'justify-center', 'bg-opacity-50');
    container.style.zIndex = '100';
    container.style.backgroundColor = 'rgba(0,0,0,0.5)';
    container.appendChild(notification);
    document.body.appendChild(container);

    // Agregar un evento para cerrar la notificación cuando se haga clic
    notification.addEventListener('click', () => {
        container.remove();
    });

    // Ocultar la notificación después de 5 segundos
    setTimeout(() => container.remove(), 5000);
}