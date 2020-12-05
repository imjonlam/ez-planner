-- create groups table
CREATE TABLE IF NOT EXISTS groups (
    group_name VARCHAR(255) PRIMARY KEY,
    description VARCHAR(255)
);

-- create group members table
CREATE TABLE IF NOT EXISTS members (
    group INT,
    user INT,

    PRIMARY KEY (group, user),
    FOREIGN KEY (group) REFERENCES groups (group_name) 
        ON UPDATE CASCADE 
        ON DELETE CASCADE,
    FOREIGN KEY (user) REFERENCES users (email)
        ON UPDATE CASCADE 
        ON DELETE CASCADE
);

-- insert groups into table
INSERT INTO groups (group_name, description)
VALUES ('group_name', 'description');

-- insert user into members
INSERT INTO members (group, user)
SELECT 'some_group', u.user 
FROM users u
WHERE u.user = 'some_user';

-- select all group records
SELECT group_name, description
FROM groups;

-- select all members of a particular group
SELECT g.group_name, g.description, GROUP_CONCAT(m.user) as "members"
FROM groups g, members m
WHERE g.group_name = m.group
AND g.group_name = 'some_group_name';