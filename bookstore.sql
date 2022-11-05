CREATE DATABASE `bookstore` /*!40100 DEFAULT CHARACTER SET utf8 */;
CREATE TABLE `users` (
  `uid` int(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `postcode` int(5) NOT NULL,
  `city` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `state` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `country` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `mobile` int(13) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

CREATE TABLE `books` (
  `bid` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `genre` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `quantity` int(6) NOT NULL DEFAULT 0,
  `createtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

CREATE TABLE `purchase` (
  `uid` int(6) NOT NULL,
  `bid` int(9) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Postscript','Cecelia Ahern','Fiction','19.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781538746608_1_1d68e0d0-d064-4abf-a5ff-952790884c0c_1500x.jpg?v=1665641516','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('The Ministry Of Utmost Happiness','Arundhati Roy','Fiction','24.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781524733155_1_1500x.jpg?v=1665382578','15');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Death On The Nile: A Hercule Poirot Mystery','Agatha Christie','Fiction','19.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9780062857569_1_1500x.jpg?v=1665641535','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Eleanor & Park: Exclusive Special Edition','Rainbow Rowell ','Fiction','19.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781250127082_1_1500x.jpg?v=1665641529','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('The Return','Nicholas Sparks','Fiction','24.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781538728574_1_7aac51e4-c2c9-45c5-9ed8-3c0a48f722ab_1500x.jpg?v=1665382657','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Havenfall','Sara Holland','Fiction','17.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781526614889_1_1500x.jpg?v=1665382540','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Carve The Mark','Veronica Roth','Fiction','19.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9780062348630_1_f53f1af6-3edb-4fc2-a5b4-74da1d199df9_1500x.jpg?v=1665382609','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Star Wars: Rise Of Skywalker (Expanded Edition)','Rae Carson','Fiction','17.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781529124576_1_1500x.jpg?v=1665641282','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('The Long Song: Shortlisted For The Man Booker Prize 2010: Now A Major Bbc Drama','Andrea Levy','Fiction','17.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9780755359424_1_1100x.jpg?v=1665382721','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Saint X','Alexis Schaitkin','Fiction','19.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781250219596_1_1500x.jpg?v=1665641574','20');



INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('The Art Of Thinking Clearly: Better Thinking, Better Decisions','Rolf Dobelli','Non-Fiction','19.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781444759563_1_288x.jpg?v=1666085863','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Steve Jobs: A Biographic Portrait','Kevin Lynch','Non-Fiction','24.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781781317228_1_1500x.jpg?v=1666085600','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Barking Up The Wrong Tree: The Surprising Science Behind Why Everything You Know About Success Is (Mostly) Wrong','Eric Barker','Non-Fiction','24.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9780062416056_1_1500x.jpg?v=1666085420','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Kochland: The Secret History Of Koch Industries And Corporate Power In America','Christopher Leonard','Non-Fiction','24.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781476775388_1_7d2dd348-4246-4fc4-a221-c7cfd65c4d50_1500x.jpg?v=1666085819','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('When To Rob A Bank','Steven D Levitt','Non-Fiction','24.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9780062392725_1_750x.jpg?v=1666085887','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Kleptopia: How Dirty Money Is Conquering The World','Tom Burgis','Non-Fiction','24.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9780062883650_1_1500x.jpg?v=1666085551','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('The Science Of Fate: The New Science Of Who We Are - And How To Shape Our Best Future','Hannah Critchlow','Non-Fiction','19.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781473659315_1500x.jpg?v=1666085528','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('How Death Becomes Life: Notes From A Transplant Surgeon','Joshua Mezrich','Non-Fiction','19.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781786498892_1500x.jpg?v=1666085494','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Snakes In Suits, Revised Edition: Understanding And Surviving The Psychopaths In Your Office','Paul Babiak, Ph.D.','Non-Fiction','24.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9780062697547_1_5b7a5bb6-fad5-445a-810b-fc03cdd79e90_1500x.jpg?v=1666085731','20');

INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Inclusify: The Power Of Uniqueness And Belonging To Build Innovative Teams','Stefanie K. Johnson','Non-Fiction','24.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9780062947277_1_1500x.jpg?v=1666085481','20');





INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('My First Picture Puzzle Book','Lisa Regan','Childrens Books','7.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781789503173_1_1500x.jpg?v=1665729320','20');



INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Discovery Pack: Space','Cath Senker','Childrens Books','24.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781788887243_1_28cc6daa-78c3-4002-94fe-681947ed2c77_1500x.jpg?v=1665729214','20');



INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Disney Princess: CinderellaS Castle: Build Your Own Fairy Tale Castle!','Walt Disney Company Ltd.','Childrens Books','44.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781787415669_1_1500x.jpg?v=1665729212','20');



INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Dangerous Mazes','Leo Trinidad','Childrens Books','17.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781784289867_1_1500x.jpg?v=1665729209','20');



INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('My First Origami Book','Belinda Webster','Childrens Books','12.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781789503210_1_1500x.jpg?v=1665729099','20');



INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Disney Frozen 2: Touch And Feel Forest','Editors Of Studio Fun International','Childrens Books','14.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9780794444440_1_750x.jpg?v=1665729021','20');



INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Amazing Pen & Paper Games: Packed With Pen-And-Paper Puzzles','Gareth Moore','Childrens Books','19.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781780556062_1_1500x.jpg?v=1665728954','20');



INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('CharlotteS Web','E.B. White','Childrens Books','14.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9780241554142_1_1100x.jpg?v=1665729040','20');



INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('Star In Your Own Story: Firefighter','Danielle Mclean','Childrens Books','14.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781788814898_1_1500x.jpg?v=1665728854','20');



INSERT INTO `books`(`title`, `author`, `genre`, `price`, `image`, `quantity`) VALUES ('A Wishing-Chair Adventure: Home For Half-Term','Enid Blyton','Childrens Books','14.90','https://cdn.shopify.com/s/files/1/0601/0883/2974/products/9781405296007_1_1500x.jpg?v=1665728845','20');
