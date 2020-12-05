-- create cars table
CREATE TABLE IF NOT EXISTS cars (
    car_id INT AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    type VARCHAR(25) NOT NULL,
    passengers INT NOT NULL,
    allowance INT NOT NULL,
    price INT NOT NULL,
    transmission VARCHAR(25) NOT NULL,
    img VARCHAR(255) NOT NULL
)

-- insert cars into table
INSERT INTO cars (make, model, year, passengers, allowance, price, transmission, img)
VALUES ('make', 'model', 'year', 'passengers', 'allowance', 'price', 'transmission', 'img');

-- select all car records
SELECT make, model, year, type, passengers, allowance, price, transmission, img FROM cars; 