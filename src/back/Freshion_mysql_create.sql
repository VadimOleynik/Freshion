CREATE TABLE `Product` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`price` INT NOT NULL,
	`description` varchar(750) NOT NULL,
	`id_type` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Type` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Color` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(25) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Size` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(5) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ProductHelp` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id_color_image` INT NOT NULL,
	`id_size` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Image` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`img` blob NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ColorImage` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id_img` INT NOT NULL,
	`id_product` INT NOT NULL,
	`id_color` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Order` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`time` DATETIME NOT NULL,
	`total_price` INT NOT NULL,
	`id_client` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Client` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	`surname` varchar(40) NOT NULL,
	`fathername` varchar(30),
	`phone` varchar(14) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `OrdersDetail` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id_order` INT NOT NULL,
	`id_product_help` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Administrator` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`surname` varchar(25) NOT NULL,
	`name` varchar(15) NOT NULL,
	`login` varchar(20) NOT NULL,
	`password` varchar(30) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Product` ADD CONSTRAINT `Product_fk0` FOREIGN KEY (`id_type`) REFERENCES `Type`(`id`);

ALTER TABLE `ProductHelp` ADD CONSTRAINT `ProductHelp_fk0` FOREIGN KEY (`id_color_image`) REFERENCES `ColorImage`(`id`);

ALTER TABLE `ProductHelp` ADD CONSTRAINT `ProductHelp_fk1` FOREIGN KEY (`id_size`) REFERENCES `Size`(`id`);

ALTER TABLE `ColorImage` ADD CONSTRAINT `ColorImage_fk0` FOREIGN KEY (`id_img`) REFERENCES `Image`(`id`);

ALTER TABLE `ColorImage` ADD CONSTRAINT `ColorImage_fk1` FOREIGN KEY (`id_product`) REFERENCES `Product`(`id`);

ALTER TABLE `ColorImage` ADD CONSTRAINT `ColorImage_fk2` FOREIGN KEY (`id_color`) REFERENCES `Color`(`id`);

ALTER TABLE `Order` ADD CONSTRAINT `Order_fk0` FOREIGN KEY (`id_client`) REFERENCES `Client`(`id`);

ALTER TABLE `OrdersDetail` ADD CONSTRAINT `OrdersDetail_fk0` FOREIGN KEY (`id_order`) REFERENCES `Order`(`id`);

ALTER TABLE `OrdersDetail` ADD CONSTRAINT `OrdersDetail_fk1` FOREIGN KEY (`id_product_help`) REFERENCES `ProductHelp`(`id`);

