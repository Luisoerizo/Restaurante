use restaurante;


SELECT nombreRestaurante, nombreCliente, personas, fecha, correo FROM reservaciones INNER JOIN restaurantes WHERE restaurantes.idRestaurante = reservaciones.idRestaurante

