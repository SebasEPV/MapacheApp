document
  .getElementById("contact-form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Evita que el formulario se envíe de manera tradicional

    // Crear un objeto FormData a partir del formulario
    const formData = new FormData(this);

    // Convertir los datos del formulario a un objeto
    const data = {};
    formData.forEach((value, key) => {
      // Verificar si la clave ya existe
      if (data[key]) {
        // Si ya existe y es una cadena, convertirlo en un array
        if (typeof data[key] === "string") {
          data[key] = [data[key]];
        }
        // Agregar el nuevo valor al array
        data[key].push(value);
      } else {
        // Si no existe, agregar el valor directamente
        data[key] = value;
      }
    });

    // Manda el correo
    emailjs.sendForm("service_rb16v3q", "template_28a5i4a", this).then(
      function (response) {
        alert("Correo enviado con éxito!");

        document.getElementById("from_name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("message").value = "";
        document.querySelectorAll('.checkbox').forEach(checkbox => checkbox.checked = false);
      },
      function (error) {
        alert("Falló el envío del correo, intentelo de nuevo porfavor.");
      }
    );
  });
