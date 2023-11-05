
-- DROP TABLE IF EXISTS
DROP TABLE IF EXISTS agents;

-- CREATE the table, name has to be unique
CREATE TABLE agents(
	name VARCHAR(50) PRIMARY KEY,
	city VARCHAR(20) NOT NULL, 
	tel NUMERIC(10) NOT NULL, 
	email VARCHAR(30) NOT NULL,
	discount VARCHAR(5) NOT NULL,
	website VARCHAR(120) 
);

INSERT INTO agents(name, city, tel, email, discount, website) VALUES(
	'Clara Patel',
	'Mississauga',
	9052970001,
	'clara.p@immiservice.ca',
	'15%',
	'http://localhost/agent_info1.php');
	
INSERT INTO agents(name, city, tel, email, discount, website) VALUES(
	'Canada Dream International',
	'North York',
	4163334455,
	'service@canadadream.ca',
	'25%',
	'');

INSERT INTO agents(name, city, tel, email, discount, website) VALUES(
	'Jimmy Ferguson',
	'Oakville',
	9059990099,
	'jimmy.f@hotmail.com',
	'15%',
	'');

INSERT INTO agents(name, city, tel, email, discount, website) VALUES(
	'Triple A Immigration Services',
	'Toronto',
	4164960088,
	'info@aaaservice.ca',
	'20%',
	'');

SELECT name, city, tel, email, discount, website
	FROM agents;

