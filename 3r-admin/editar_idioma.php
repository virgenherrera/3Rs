<?php

$locacion = "Location: " . $_POST['pagina'] . "?idioma=" . $_POST['idioma'];
header($locacion);
?>