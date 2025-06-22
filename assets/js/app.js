const baseURL = window.location.origin;   
   
   $(document).ready(function () {
        $('#loginForm').on('submit', function (e) {
            e.preventDefault(); // evita el envío normal del formulario

            const usuario = $('#usuario').val();
            const clave = $('#clave').val();

            $.ajax({
                url: baseURL +'/crud2025/login',
                method: 'POST',
                data: { usuario: usuario, clave: clave },
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'ok') {
                        Swal.fire({
                            title: "Bienvenido",
                            icon: "success",
                            draggable: true
                          });
                        window.location.href = baseURL +'/crud2025/cargarvistainicio';
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Usuario o contraseña incorrectos'
                        });
                    }
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudo conectar con el servidor'
                    });
                }
            });
        });
    });


   
    function cargarUsuarios() {
      $.ajax({
        url: baseURL +'/crud2025/mostraruser',
        method: 'GET',
        dataType: 'json',
        success: function (usuarios) {
          const tbody = $('#tablaUsuarios tbody');
          tbody.empty();

          usuarios.forEach(usuario => {
            const fila = `
              <tr>
                <td>${usuario.id}</td>
                <td>${usuario.usuario}</td>
                <td>${usuario.clave}</td>
              </tr>`;
            tbody.append(fila);
          });
        }
      });
    }

    $(document).ready(function () {
      cargarUsuarios();

      $('#formAgregarUsuario').submit(function (e) {
        e.preventDefault();

        const usuario = $('#usuario').val();
        const clave = $('#clave').val();

        $.ajax({
          url: baseURL +'/crud2025/agregarusuario',
          method: 'POST',
          data: { usuario: usuario, clave: clave },
          dataType: 'json',
          success: function (response) {
            if (response.status === 'ok') {
              Swal.fire({
                icon: 'success',
                title: '¡Usuario agregado!',
                text: 'El usuario fue registrado correctamente.'
              });

              $('#formAgregarUsuario')[0].reset();
              cargarUsuarios();
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Error',
                text: response.message || 'No se pudo agregar el usuario.'
              });
            }
          },
          error: function () {
            Swal.fire({
              icon: 'error',
              title: 'Error de servidor',
              text: 'No se pudo conectar al backend.'
            });
          }
        });
      });
    });
 

 function cargarmotocicleta() {
  $.ajax({
    url: baseURL +'/crud2025/mostrarmotocicleta',
    method: 'GET',
    dataType: 'json',
    success: function (motocicleta) {
      const tbody = $('#tablamotocicleta tbody');
      tbody.empty();

      motocicleta.forEach(motocicleta => {
        const fila = `
          <tr>
            <td>${motocicleta.id}</td>
            <td>${motocicleta.marca}</td>
            <td>${motocicleta.modelo}</td>
            <td>${motocicleta.año}</td>
            <td>${motocicleta.precio}</td>

          </tr>`;
        tbody.append(fila);
      });
    }
  });
}

cargarmotocicleta();

function motocicleta() {
  const marca = $('#marca').val();
  const modelo = $('#modelo').val();
  const año = $('#año').val();
  const precio = $('#precio').val();


  $.ajax({
    url: 'http://localhost/crud2025/agregarmotocicleta',
    method: 'POST',
    data: { marca: marca, modelo: modelo, año: año,  precio: precio },
    dataType: 'json',
    success: function (response) {
      if (response.status === 'ok') {
        Swal.fire({
          icon: 'success',
          title: '¡Motocicleta agregado!',
          text: 'La Motocicleta fue registrado correctamente.'
        });

       
       cargarmotocicleta();
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: response.message || 'No se pudo agregar el usuario.'
        });
      }
    },
    error: function () {
      Swal.fire({
        icon: 'error',
        title: 'Error de servidor',
        text: 'No se pudo conectar al backend.'
      });
    }
  });
}

   cargaragregarimagen()
{
    return view('header')
        . view('agregarimagen') // todo en minúsculas
        . view('footer');
}
