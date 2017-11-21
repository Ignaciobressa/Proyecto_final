<<<<<<< HEAD
-- AGREGAR REGISTRO DE USUARIO
insert into Users (name,lastName, phone, password, email, admin, prom)values ('Facundo', 'Sautú', 2944824075, 'admin', 'facundo.sautu@gmail.com', 1, 0);
=======
-- AGREGAR REGISTRO DE USUARIO 
insert into Users (name,lastName, phone, password, email, admin, prom)values ('Facundo', 'Sautú', 2944824075, 'admin', 'facundo.sautu@gmail.com', 1, 0); 
>>>>>>> a0322e6ed78231710776962a79f2a7e27ece8338

-- BORRAR USUARIO


-- MODIFICACION DE USUARIO
Update Users Set prom = 0 where id =5;

-- LOGIN DE USUARIO
select password, email from Users where email="relezcano369@gmail.com" and password="saravan";

-- Alterar tabla
alter table Users add column (prom boolean);

<<<<<<< HEAD
delete from Users where id=4;

-- Consulta general

select id from tabAct where Col = Val;

select * from 
=======
delete from Users where id=4; 

-- Consulta general

select id from tabAct where Col = Val; 

>>>>>>> a0322e6ed78231710776962a79f2a7e27ece8338
