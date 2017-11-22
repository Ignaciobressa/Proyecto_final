-- AGREGAR REGISTRO DE USUARIO 
INSERT INTO Users (name,lastName, phone, password, email, admin, prom) VALUES ('Facundo', 'Sautú', 2944824075, 'admin', 'facundo.sautu@gmail.com', 1, 0); 

-- BORRAR USUARIO


-- MODIFICACION DE USUARIO
Update Users Set prom = 0 where id =5;

-- LOGIN DE USUARIO
select password, email from Users where email="relezcano369@gmail.com" and password="saravan";

-- Alterar tabla
alter table Users add column (prom boolean);

delete from Users where id=4; 

-- Consulta general

select id from tabAct where Col = Val; 

select * from Users;


