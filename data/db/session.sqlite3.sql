PRAGMA foreign_keys = OFF;
BEGIN TRANSACTION;
DROP TABLE sessions;
CREATE TABLE sessions (id varchar(32) primary key, name varchar(32), data text, modified integer, lifetime integer);
DROP TABLE users;
CREATE TABLE users (id integer primary key, name varchar(32), pass varchar(32));
INSERT INTO "users" VALUES(1,'luigi','ccebba93f54d6bf2b17f8350e7c12ec4');
COMMIT;
PRAGMA foreign_keys = ON;
