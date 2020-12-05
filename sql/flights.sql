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
    stops VARCHAR(50) NOT NULL,
    duration VARCHAR(50) NOT NULL,
    img VARCHAR(255) NOT NULL
);

-- insert flights into table
INSERT INTO flights (airline, origin, destination, origin_code, destination_code, stops, duration, class, price, img)
VALUES 
('Air Canada','Toronto','Montreal','YYZ','YUL','Direct','1h 16m','Standard',202,'../../data/flights/air_canada.jpg'),
('WestJet','Toronto','Montreal','YYZ','YUL','Direct','1h 32m','Basic',206,'../../data/flights/west_jet.jpg'),
('Air Transat','Toronto','Montreal','YYZ','YUL','Direct','1h 16m','Standard',211,'../../data/flights/air_transat.jpg'),
('Air Canada','Toronto','Ottawa','YYZ','YOW','Direct','1h 01m','Standard',223,'../../data/flights/air_canada.jpg'),
('WestJet','Toronto','Ottawa','YYZ','YOW','Direct','1h 19m','Standard',188,'../../data/flights/west_jet.jpg'),
('Porter Airlines','Toronto','Thunder Bay','YYZ','YQT','Direct','2h 00m','Standard',315,'../../data/flights/porter_airlines.jpg'),
('Air Canada','Toronto','Thunder Bay','YYZ','YQT','Direct','1h 48m','Standard',323,'../../data/flights/air_canada.jpg'),
('WestJet','Toronto','Thunder Bay','YYZ','YQT','Direct','2h 15m','Standard',315,'../../data/flights/west_jet.jpg'),
('WestJet','Toronto','Calgary','YYZ','YYC','Direct','4h 09m','Standard',374,'../../data/flights/west_jet.jpg'),
('Air Canada','Toronto','Calgary','YYZ','YYC','Direct','3h 56m','Standard',374,'../../data/flights/air_canada.jpg'),
('Air Canada','Toronto','Victoria','YYZ','YYJ','Direct','4h 30m','Standard',649,'../../data/flights/air_canada.jpg');

-- select all flight records
SELECT airline, class, origin, origin_code, destination, destination_code, price, stops, duration, img FROM flights; 