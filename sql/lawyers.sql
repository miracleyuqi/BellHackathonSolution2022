
-- DROP TABLE IF EXISTS
DROP TABLE IF EXISTS lawyers;

-- CREATE the table, name has to be unique
CREATE TABLE lawyers(
	firm VARCHAR(50) PRIMARY KEY,
	city VARCHAR(20) NOT NULL, 
	tel NUMERIC(10) NOT NULL, 
	email VARCHAR(30) NOT NULL,
	discount VARCHAR(5) NOT NULL,
	website VARCHAR(120) 
);

INSERT INTO lawyers(firm, city, tel, email, discount, website) VALUES(
	'Law Diamond',
	'Toronto',
	4163677777,
	'enquiry@lawdiamond.ca',
	'10%',
	'');
	
INSERT INTO lawyers(firm, city, tel, email, discount, website) VALUES(
	'Smith & Associates',
	'North York',
	4169088998,
	'service@smithlawfirm.ca',
	'5%',
	'');

INSERT INTO lawyers(firm, city, tel, email, discount, website) VALUES(
	'RMM Law',
	'Oshawa',
	9051002000,
	'service@rmm.ca',
	'10%',
	'');

INSERT INTO lawyers(firm, city, tel, email, discount, website) VALUES(
	'Top Gun Law Services',
	'Ajax',
	2899880002,
	'info@topgunlaw.ca',
	'15%',
	'');

SELECT firm, city, tel, email, discount, website
	FROM lawyers;

