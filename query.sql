CREATE DATABASE e_commerce_website;

CREATE TABLE customer(Cid varchar(5) PRIMARY KEY, Name varchar(20) NOT NULL, Email varchar(40) NOT NULL, Phone numeric(10) NOT NULL, Pass varchar(16) NOT NULL);

CREATE TABLE product(Pid varchar(5) PRIMARY KEY, Name varchar(40) NOT NULL, Price numeric(10) NOT NULL, Stock varchar(1) NOT NULL);

CREATE TABLE orders(Oid varchar(5) PRIMARY KEY, Cid varchar(5) NOT NULL, Pid varchar(5) NOT NULL, Quantity numeric(2) NOT NULL);

INSERT INTO customer VALUES(1,'Abhay Jha','abhay.jha243@gmail.com',8987494152,'12345');

INSERT INTO product VALUES(1,'Ariel Matic',893,'Y');
INSERT INTO product VALUES(2,'Gillette Mach 3',928,'Y');
INSERT INTO product VALUES(3,'Dabur Chyawanprash',309,'Y');
INSERT INTO product VALUES(4,'Double Bedsheet',729,'Y');
INSERT INTO product VALUES(5,'L Shape Sofa',35399,'Y');
INSERT INTO product VALUES(6,'Baby Pants',569,'Y');
INSERT INTO product VALUES(7,'Mens Slim Fit Shirt',429,'Y');
INSERT INTO product VALUES(8,'Redmi Note 10S',14999,'Y');
INSERT INTO product VALUES(9,'Mi 80 cm Smart TV',14999,'Y');
INSERT INTO product VALUES(10,'Philips Beard Trimmer',1699,'Y');
INSERT INTO product VALUES(11,'Apple MacBook Air',111990,'Y');
INSERT INTO product VALUES(12,'Artificial Plant',399,'Y');
INSERT INTO product VALUES(13,'JBL Flip 5',8499,'Y');
INSERT INTO product VALUES(14,'HP Laserjet Pro',16999,'Y');
INSERT INTO product VALUES(15,'Samsung Galaxy Watch',18939,'Y');
INSERT INTO product VALUES(16,'Running Shoes',521,'Y');