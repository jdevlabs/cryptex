mysql -u root -p

create database cryptex;
CREATE USER 'cryptex_user'@'localhost' IDENTIFIED BY 'cryptex_pass';
GRANT ALL PRIVILEGES ON cryptex . * TO 'cryptex_user'@'localhost';
