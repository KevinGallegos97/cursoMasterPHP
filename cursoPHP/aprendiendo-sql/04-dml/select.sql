#MOSTRAR TODOS REGISTROS/FILAS DE UNA TABLA#
SELECT email, nombre, apellidos FROM usuarios;

#MOSTRAR TODOS LOS CAMPOS#
SELECT * FROM usuarios;

#OPERADORES ARITMETICOS#
SELECT email, (7+7) AS 'OPERACION' FROM usuarios;

#FUNCIONES MATEMATICAS#
SELECT ABS(7.88) AS 'OPERACION' FORM usuarios;
SELECT CEIL(7.88) AS 'OPERACION' FORM usuarios;
SELECT FLOOR(7.88) AS 'OPERACION' FORM usuarios;