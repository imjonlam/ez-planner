-- create bnbs table
CREATE TABLE IF NOT EXISTS bnbs (
    location VARCHAR(100) PRIMARY KEY,
    address VARCHAR(100) NOT NULL,
    city VARCHAR(30) NOT NULL,
    province VARCHAR(100) NOT NULL,
    postal_code VARCHAR(10) NOT NULL,
    country VARCHAR(20) NOT NULL,
    contact VARCHAR(20) NOT NULL,
    price INT NOT NULL,
    rating INT NOT NULL,
    img VARCHAR(255) NOT NULL   
);

-- insert bnbs into table
INSERT INTO bnbs (location, address, city, province, postal_code, country, contact, price, rating, img)
VALUES 
('Intercontinental Toronto Centre','225 Front Street West','Toronto','ON','M5V 2X3','Canada','+1 416 597 1400',134,4,'../../data/bnb/intercontinental_toronto_center.jpg'),
('Town Inn Suites Toronto','620 Church Street','Toronto','ON','M4Y 2G2','Canada','+1 416 964 3311',80,3,'../../data/bnb/town_inn_suites.jpg'),
('Strathcona Hotel Toronto','60 York Street','Toronto','ON','M5J 1S8','Canada','+1 416 363 3321',126,5,'../../data/bnb/strathcona_hotel_toronto.jpg'),
('Le St-Martin Hotel Particulier Montreal','980 Boul. De Maisonneuve West','Montreal','QC','H3A 1N4','Canada','+1 514 843 3000',161,4,'../../data/bnb/le_st_martin.jpg'),
('Hotel Bonaventure Montreal','900 de La Gauchetiere W.','Montreal','QC','H5A 1E4','Canada','+1 514 878 2332',169,3,'../../data/bnb/hotel_bonaventure_montreal.jpg'),
('Shangri-La Hotel Toronto','188 University Avenue','Toronto','ON','M5H 0A3','Canada','+1 647 788 8888',472,4,'../../data/bnb/shangri_la.jpg'),
('Wyndham Garden Calgary Airport','11 Freeport Cres Northeast','Calgary','AB','T3J 0T4','Canada','+1 403 516 2266',91,5,'../../data/bnb/wyndham_garden.jpg'),
('Hotel Arts','119 12th Avenue Sw','Calgary','AB','M6J 1J4','Canada','+1 403 266 4611',165,3,'../../data/bnb/hotel_arts.jpg'),
('Hotel Le Germain Montreal','2050 Rue Mansfield','Montreal','QC','H3A 1Y9','Canada','+1 514 849 2050',262,3,'../../data/bnb/hotel_le_germain.jpg');

-- select all bnb records
SELECT location, address, city, province, postal_code, country, price, rating, img FROM bnbs;

-- select bnb from group
SELECT location, address, city, province, postal_code, country, price, rating, img
FROM bnbs, group_bnbs
WHERE group_name = 'some_group'
AND location = bnb;