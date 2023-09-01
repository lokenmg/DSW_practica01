CREATE USER myuser;
CREATE DATABASE mydb;
GRANT ALL PRIVILEGES ON DATABASE mydb TO myuser;
ALTER DATABASE mydb OWNER TO myuser;

\connect mydb
create table empleado
(
    clave integer NOT NULL,
    nombre character varying,
    direccion character varying,
    telefeno character varying
);
ALTER TABLE empleado OWNER TO myuser;
