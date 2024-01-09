CREATE TABLE students (
                         id int(11) NOT NULL AUTO_INCREMENT,
                         name varchar(55) NOT NULL DEFAULT '',
                         PRIMARY KEY (id)
);

INSERT INTO students (id, name) VALUES
    (1,'Nguyen The Son');

CREATE TABLE lists
(
    studentid    int(11) NOT NULL AUTO_INCREMENT,
    id  int(11) NOT NULL DEFAULT '0',
    name varchar(30),
    email varchar(30),
    PRIMARY KEY (studentid)
);
INSERT INTO lists (studentid, id, name, email)
VALUES
    ('11',1,'Nguyen The Son','nguyentheson1703@gmail.com');