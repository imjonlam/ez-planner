-- create cars table
CREATE TABLE IF NOT EXISTS cars (
    car_id INT AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    type VARCHAR(25) NOT NULL,
    capacity INT NOT NULL,
    allowance INT NOT NULL,
    price INT NOT NULL,
    transmission VARCHAR(25) NOT NULL,
    img VARCHAR(255) NOT NULL
);

-- insert cars into table
INSERT INTO cars (make, model, year, type, capacity, price, transmission, allowance, img)
VALUES
('TOYOTA','CAMRY',2005,'Sedan',4,32,'Automatic',3000,'../../data/cars/2005_toyota_camry.jpg'),
('NISSAN','ALMERA',2001,'Sedan',4,47,'Automatic',3000,'../../data/cars/2001_nissan_almera.jpg'),
('HONDA','PILOT',2011,'Suv',4,17,'Automatic',3000,'../../data/cars/2011_honda_pilot.jpg'),
('LAND ROVER','DEFENDER',2011,'Suv',6,44,'Automatic',1000,'../../data/cars/2011_land_rover_defender.jpg'),
('MERCEDES-BENZ','B250',2013,'Sedan',4,44,'Automatic',1500,'../../data/cars/2011_mercedes_benz_b250.jpg'),
('SATURN','SKY',2008,'Sedan',4,32,'Automatic',3500,'../../data/cars/2008_saturn_sky.jpg'),
('ACURA','TL',2014,'Sedan',4,32,'Automatic',3000,'../../data/cars/2014_acura_tl.jpg'),
('NISSAN','LEAF',2011,'Sedan',4,13,'Automatic',3500,'../../data/cars/2011_nissan_leaf.jpg'),
('CHEVROLET','CORVETTE',2006,'Coupe',2,60,'Manual',1000,'../../data/cars/2006_z06.jpg'),
('MERCEDES-BENZ','ML350',2009,'Sedan',4,44,'Automatic',1500,'../../data/cars/2009_mercedes_benz_ml350.jpg'),
('HUMMER','H2',2008,'Sedan',6,66,'Automatic',2000,'../../data/cars/2008_hummer_h2.jpg');

-- select all car records
SELECT make, model, year, type, capacity, allowance, price, transmission, img FROM cars; 