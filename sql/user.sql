-- create users table
CREATE TABLE IF NOT EXISTS users (
    email VARCHAR(50) PRIMARY KEY,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    password VARCHAR(50) NOT NULL,
    address VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    province VARCHAR(30) NOT NULL,
    postal_code VARCHAR(10) NOT NULL,
    country VARCHAR(20) NOT NULL
);

-- insert a user into table
INSERT INTO users (email, first_name, last_name, password, address, city, province, postal_code, country)
VALUES ('email', 'first_name', 'last_name', 'password', 'address', 'city', 'province', 'postal_code', 'country');

-- select user by email
SELECT email, password FROM users
WHERE email = "some_email";