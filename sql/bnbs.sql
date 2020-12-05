-- create bnbs table
CREATE TABLE IF NOT EXISTS bnbs (
    location VARCHAR(100) PRIMARY KEY,
    address VARCHAR(100) NOT NULL,
    city VARCHAR(30) NOT NULL,
    province VARCHAR(100) NOT NULL,
    postal_code VARCHAR(10) NOT NULL,
    country VARCHAR(20) NOT NULL,
    price INT NOT NULL,
    rating INT NOT NULL,
    img VARCHAR(255) NOT NULL   
);

-- insert bnbs into table
INSERT INTO bnbs (location, address, city, province, postal_code, country, price, rating, img)
VALUES ('location', 'address', 'city', 'province', 'postal_code', 'country', 'price', 'rating', 'img');

-- select all bnb records
SELECT location, address, city, province, postal_code, country, price, rating, img FROM bnbs; 