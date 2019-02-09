
CREATE DATABASE geekbrains 

CREATE TABLE gallery (
	id int (15) NOT NULL AUTO_INCREMENT,
	name varchar (250) NULL DEFAULT'',
	track varchar (250) NULL DEFAULT'',
	gallery varchar (250) NULL DEFAULT'',
	PRIMARY KEY (`id`)
);

INSERT INTO gallery (name, track, gallery) VALUES ('foto_1', './img/flex1.png', 'Первая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_2', './img/flex2.png', 'Первая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_3', './img/flex3.png', 'Первая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_4', './img/flex4.png', 'Первая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_5', './img/flex5.png', 'Первая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_6', './img/flex6.png', 'Первая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_7', './img/flex7.png', 'Первая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_8', './img/flex8.png', 'Первая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_9', './img/flex9.png', 'Первая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_1', './img/spb_gallery/spb1.jpg', 'Вторая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_2', './img/spb_gallery/spb2.jpg', 'Вторая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_3', './img/spb_gallery/spb3.jpg', 'Вторая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_4', './img/spb_gallery/spb4.jpg', 'Вторая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_5', './img/spb_gallery/spb5.jpg', 'Вторая галерея');
INSERT INTO gallery (name, track, gallery) VALUES ('foto_6', './img/spb_gallery/spb6.jpg', 'Вторая галерея');


SELECT * FROM gallery WHERE id >0

SHOW TABLES;

