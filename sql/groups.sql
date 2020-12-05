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

-- insert user into a group
INSERT INTO group_members (group_name, user)
VALUES ('some_group', 'some_user');

-- insert flight into a group
INSERT INTO group_flights (group_name, flight)
VALUES ('some_group', 'some_user');

-- delete flight from group
DELETE FROM group_flights 
WHERE group_name = 'some_group_name';

-- insert car into a group
INSERT INTO group_cars (group_name, car)
VALUES ('some_group', 'some_user');

-- delete car from group
DELETE FROM group_cars 
WHERE group_name = 'some_group_name';

-- insert bnb into a group
INSERT INTO group_bnbs (group_name, bnb)
VALUES ('some_group', 'some_user');

-- delete bnb from group
DELETE FROM group_bnbs 
WHERE group_name = 'some_group_name';

-- select all group records
SELECT group_name, description FROM groups;

-- select all members of a particular group
SELECT g.group_name, g.description, GROUP_CONCAT(m.user) as "members"
FROM groups g, group_members m
WHERE g.group_name = m.group_name
AND g.group_name = 'some_group_name';