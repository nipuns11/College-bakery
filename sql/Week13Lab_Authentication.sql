use wp_eatery;

CREATE TABLE authorized_users(
	id INT NOT NULL AUTO_INCREMENT,
	firstName VARCHAR(50),
	lastName VARCHAR(50),
	username VARCHAR(50) NOT NULL UNIQUE,
	phash VARCHAR(255) NOT NULL,
	primary key(id)
);

CREATE TABLE menu_items(
	id INT NOT NULL AUTO_INCREMENT,
	itemName VARCHAR(50) NOT NULL,
	itemDescription VARCHAR(255) NOT NULL,
	itemPrice DECIMAL(4,2) NOT NULL,
	primary key(id)
);

INSERT INTO authorized_users (firstName, lastName, username, phash) VALUES ('default', 'account', 'admin', '$2y$10$Ygsfv6q.N5FKoR248Fw1SeHpPxi1JcGbaiACxn71PU17YiPoQfWK6')