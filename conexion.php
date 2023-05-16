<?php   

try {
    $conexion= new PDO ("informix:host=host.docker.internal; service=9088;database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix","in4mix");
    echo "conexion exitosa";
} catch (PDOException $e){
    echo $e->getMessage ();
}
echo "<br>";
echo "Mensaje despues de la conexion";