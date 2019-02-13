
CREATE TABLE reviewes (
	id int (15) NOT NULL AUTO_INCREMENT,
	name varchar (250) NULL DEFAULT'',
	review TEXT NULL,
	PRIMARY KEY (`id`)
);

INSERT INTO reviewes (name, review) VALUES ('Ольга', 'Отзыв');

SELECT * FROM reviewes WHERE id >0

SHOW TABLES;