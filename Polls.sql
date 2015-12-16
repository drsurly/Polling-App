DROP SCHEMA IF EXISTS Polls;
CREATE SCHEMA Polls;

USE Polls;

CREATE TABLE Polls(
	poll_id		INTEGER NOT NULL,
	poll_question	VARCHAR(200),
	PRIMARY KEY(poll_id)

);

CREATE TABLE PollOptions(
	poll_id		INTEGER NOT NULL,
	poll_option VARCHAR(50),
	vote_count	INTEGER
);
