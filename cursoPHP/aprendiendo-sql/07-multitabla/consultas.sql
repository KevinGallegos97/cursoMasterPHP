/* 
 CONSULTA MULTITABLA:
Son consultas que sirven para consultar varias tablas en una sola sentencia.
 */

#Mostrar las entradas con el nombre del autor y el nombre de la categoria#
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

#INNER JOIN#
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

#Mostrar el nombre de las categorias y al lada cuantas entradas tiene#
SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e 
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

#LEFT JOIN#
SELECT c.nombre, COUNT(e.id) FROM categorias c 
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY c.id;

SELECT c.nombre, COUNT(e.id) FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id
GROUP BY c.id;
 
#Mostrar el email de los usuarios y al lado cuantas entradas tiene#
SELECT u.email, COUNT(e.id) AS 'Entradas' FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;

