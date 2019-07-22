# create database for bitrix
CREATE DATABASE IF NOT EXISTS `absolut_dev_db`;
CREATE USER 'absolut_dev_user'@'%' IDENTIFIED BY '7HzMHb4mnrvnp6Ws';
GRANT ALL PRIVILEGES ON absolut_dev_db.* TO 'absolut_dev_user'@'%';
USE absolut_dev_db;
