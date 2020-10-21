#CONSULTAS DE AGRUPAMIENTO#
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

#CONSULTAS DE AGRUPAMIENTO CON CONDICIONES#
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas
GROUP BY categoria_id HAVING COUNT(titulo) >= 3;

/*
AVG     Sacar la media
COUNT   Contar el numero de elementos
MAX     Valor maximo del grupo
MIN     Valor minimo del grupo
SUM     Sumar todo el contenido del grupo
*/

#AVG#
SELECT AVG(id) AS 'Media de entradas' FROM entradas;

#MAX#
SELECT MAX(id) AS 'Maximo ID', titulo FROM ENTRADAS;

#MIN#
SELECT MIN(id) AS 'Maximo ID', titulo FROM ENTRADAS

#SUM#
SELECT SUM(id) AS 'Suma de ID', titulo FROM ENTRADAS
