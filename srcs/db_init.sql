CREATE DATABASE server_db;
CREATE USER 'ubolt'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON server_db.* TO 'ubolt'@'localhost';
FLUSH PRIVILEGES;
