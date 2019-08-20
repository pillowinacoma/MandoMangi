SELECT 'CREATE DATABASE mandomangi'
WHERE NOT EXISTS (SELECT FROM pg_database WHERE datname = 'mandomangi')\gexec
\connect mandomangi;
CREATE TABLE IF NOT EXISTS resteaurant (
	id SERIAL PRIMARY KEY,
	Title VARCHAR NOT NULL,
	Content VARCHAR,
	Region VARCHAR,
	Categorie VARCHAR,
	Adresse VARCHAR,
	Phone VARCHAR,
	Website VARCHAR
);
\COPY resteaurant(Title,Content,Region,Categorie,Adresse,Phone,Website) FROM '/home/sbaai/Bureau/GitProject/MandoMangi/Guide/Database/MandoData.csv' DELIMITERS ';' CSV HEADER;
DROP TABLE IF EXISTS plat;
CREATE TABLE IF NOT EXISTS plat (
	id SERIAL ,
	Title VARCHAR NOT NULL PRIMARY KEY,
	Content VARCHAR
);
DROP TABLE IF EXISTS platInResto;
CREATE TABLE platInResto(
      platId INT NOT NULL,
      restoId INT NOT NULL,
      prix DECIMAL ,
      FOREIGN KEY (platId) REFERENCES plat(id),
      FOREIGN KEY (restoId) REFERENCES resteaurant(id),
      PRIMARY KEY (platId,restoId)
);
