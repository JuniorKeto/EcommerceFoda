CREATE DATABASE IF NOT EXISTS EcommerceFoda;

USE EcommerceFoda;

CREATE TABLE IF NOT EXISTS users(
    id int PRIMARY KEY auto_increment,
    fisrt_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100)

);

