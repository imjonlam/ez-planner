-- create flights table
CREATE TABLE IF NOT EXISTS flights (
    flight_id INT AUTO_INCREMENT PRIMARY KEY,
    airline VARCHAR(25) NOT NULL,
    class VARCHAR(25) NOT NULL,
    origin VARCHAR(50) NOT NULL,
    origin_code VARCHAR(3) NOT NULL,
    destination VARCHAR(50) NOT NULL,
    destination_code VARCHAR(3) NOT NULL,
    price INT NOT NULL,
    stops INT NOT NULL,
    duration TIME NOT NULL,
    img VARCHAR(255) NOT NULL
);

-- insert flights into table
INSERT INTO flights (airline, class, origin, origin_code, destination, destination_code, price, stops, duration, img)
VALUES ('airline', 'class', 'origin', 'origin_code', 'destination', 'destination_code', 'price', 'stops', 'duration', 'img');

-- select all flight records
SELECT airline, class, origin, origin_code, destination, destination_code, price, stops, duration, img FROM flights; 