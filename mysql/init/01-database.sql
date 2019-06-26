# create default laravel
CREATE DATABASE IF NOT EXISTS `homestead`;
CREATE USER 'homestead'@'%' IDENTIFIED BY 'homestead';
GRANT ALL PRIVILEGES ON homestead.* TO 'homestead'@'%';

# create default laravel
CREATE DATABASE IF NOT EXISTS `homestead_1`;
CREATE USER 'homestead_1'@'%' IDENTIFIED BY 'homestead_1';
GRANT ALL PRIVILEGES ON homestead_1.* TO 'homestead_1'@'%';