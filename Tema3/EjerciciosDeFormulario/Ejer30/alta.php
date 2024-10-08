<?php
if (isset($_GET['Enviar'])) {
    if (isset($_GET['Nombre']) && !empty($_GET['Nombre'])) {
        $nombre = $_GET['Nombre'] ?? '';
    } else {
        $errNombre;
    }
    if (isset($_GET['Correo_Electronico']) && !empty($_GET['Correo_Electronico'])) {
        $correoElectronico = $_GET['Correo_Electronico'] ?? '';
    } else {
        $errCorreoElectronico;
    }
    if (isset($_GET['Pagina_Web']) && !empty($_GET['Pagina_Web'])) {
        $paginaWeb = $_GET['Pagina_Web'] ?? '';
    } else {
        $errPagina_Web;
    }
    if (isset($_GET['Sugerencia']) && !empty($_GET['Sugerencia'])) {
        $sugerencia = $_GET['Sugerencia'] ?? '';
    } else {
        $errSugerencia;
    }

    if (
        !isset($errNombre) ||
        !isset($errCorreoElectronico) ||
        !isset($errPagina_Web) ||
        !isset($errSugerencia)
    ) {

            // Validación simple
            $errores = [];
            if (empty($nombre)) {
                $errores['Nombre'] = 'El nombre es obligatorio.';
            }
            if (empty($correoElectronico)) {
                $errores['Correo_Electronico'] = 'El correo electrónico es obligatorio.';
            }
            if (empty($paginaWeb)) {
                $errores['Pagina_Web'] = 'La página web es obligatoria.';
            }       
            if (empty($sugerencia)) {
                $errores['Sugerencia'] = 'La sugerencia es obligatoria.';
            }

            // Si hay errores, muestra los errores
            if (!empty($errores)) {
                foreach ($errores as $error) {
                    echo "<p style='color: red;'>$error</p>";
                }
                include('./Formulario.html');
            } else {
                // Si no hay errores, muestra los datos en una tabla
                echo "<table border='1'>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Página Web</th>
                            <th>Sugerencia</th>
                        </tr>
                        <tr>
                            <td>" . htmlspecialchars($nombre) . "</td>
                            <td>" . htmlspecialchars($correoElectronico) . "</td>
                            <td>" . htmlspecialchars($paginaWeb) . "</td>
                            <td>" . htmlspecialchars($sugerencia) . "</td>
                        </tr>
                      </table>";

                // Redirigir a otra página si es necesario
                // header('Location: ./Formulario.html'); // Descomenta si deseas redirigir
            }
        
    } else {
        header('Location: ./Formulario.html');
    }
}
