CREATE TABLE product (
	id int (11) NOT NULL AUTO_INCREMENT,
	name varchar (255) NULL DEFAULT'',
	description text NULL,
	price decimal (10,2) DEFAULT 0,
	image varchar (255) NULL DEFAULT '',
	category varchar (255) NULL DEFAULT '',
	deleted_at datetime NULL,
	PRIMARY KEY (`id`)
);

