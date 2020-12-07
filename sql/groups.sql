-- create groups table
CREATE TABLE IF NOT EXISTS groups (
    group_name VARCHAR(255) PRIMARY KEY,
    description VARCHAR(255)
);

-- create group members table
CREATE TABLE IF NOT EXISTS group_members (
    group_name VARCHAR(255),
    user VARCHAR(50),

    PRIMARY KEY (group_name, user),
    FOREIGN KEY (group_name) REFERENCES groups (group_name) 
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (user) REFERENCES users (email)
        ON UPDATE CASCADE ON DELETE CASCADE
);

-- create group flights table
CREATE TABLE IF NOT EXISTS group_flights (
    group_name VARCHAR(255),
    flight INT,

    PRIMARY KEY (group_name),
    FOREIGN KEY (group_name) REFERENCES groups (group_name) 
        ON UPDATE CASCADE 
        ON DELETE CASCADE,
    FOREIGN KEY (flight) REFERENCES flights (flight_id)
        ON UPDATE CASCADE 
        ON DELETE CASCADE
);

-- create group cars table
CREATE TABLE IF NOT EXISTS group_cars (
    group_name VARCHAR(255),
    car INT,

    PRIMARY KEY (group_name),
    FOREIGN KEY (group_name) REFERENCES groups (group_name) 
        ON UPDATE CASCADE 
        ON DELETE CASCADE,
    FOREIGN KEY (car) REFERENCES cars (car_id)
        ON UPDATE CASCADE 
        ON DELETE CASCADE
);

-- create group bnb table
CREATE TABLE IF NOT EXISTS group_bnbs (
    group_name VARCHAR(255),
    bnb VARCHAR(100),

    PRIMARY KEY (group_name),
    FOREIGN KEY (group_name) REFERENCES groups (group_name) 
        ON UPDATE CASCADE 
        ON DELETE CASCADE,
    FOREIGN KEY (bnb) REFERENCES bnbs (location)
        ON UPDATE CASCADE 
        ON DELETE CASCADE
);

-- insert groups into table
INSERT INTO groups (group_name, description)
VALUES 
('Ryerson Trip', 'Planning out graduation trip'),
('Calgary', 'Calgary itinerary'),
('Home Away from Home', 'Tired of stuck being at home? Plan a trip with us!'),
('COVID Hideaway', 'Let''s escape COVID');