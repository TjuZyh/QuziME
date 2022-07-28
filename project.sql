/*
 Navicat MySQL Data Transfer

 Source Server         : zyhMySQL
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : project

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 24/07/2022 16:14:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categorys
-- ----------------------------
DROP TABLE IF EXISTS `categorys`;
CREATE TABLE `categorys`  (
  `cid` int NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorys
-- ----------------------------
INSERT INTO `categorys` VALUES (1, 'general');
INSERT INTO `categorys` VALUES (2, 'science');
INSERT INTO `categorys` VALUES (3, 'geography');
INSERT INTO `categorys` VALUES (4, 'sport');
INSERT INTO `categorys` VALUES (20, '123123');

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions`  (
  `qid` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `level` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `question` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `answer` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`qid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 235 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES (100, 'general', 'medium', 'Which Apollo 11 astronaut did not set foot on the moon?<ul><li>a) Neil A. Armstrong</li><li>b) Michael Collins</li><li>c) Edwin Aldrin</li></ul>(enter \'a\'  \'b\' or \'c\')', 'b');
INSERT INTO `questions` VALUES (101, 'general', 'hard', 'Mariposa  Motyl  Farfalla  Borboleta  Papillon and Sommerfuglare all European words for what?', 'Butterfly');
INSERT INTO `questions` VALUES (102, 'sport', 'hard', 'Which national team introduced \'Total Football\' at the 1974 FIFA World Cup in Germany?', 'Holland');
INSERT INTO `questions` VALUES (103, 'general', 'medium', 'What is the common name for Japanese horseradish?', 'Wasabi');
INSERT INTO `questions` VALUES (104, 'science', 'medium', 'What is the name of the network of computers from which the Internet has emerged?', 'Arpanet');
INSERT INTO `questions` VALUES (105, 'science', 'easy', 'In computing what is RAM short for?', 'Random Access Memory');
INSERT INTO `questions` VALUES (106, 'general', 'easy', 'In which Nintendo DS game do you have to raise a puppy as well as possible?', 'Nintendogs');
INSERT INTO `questions` VALUES (107, 'geography', 'hard', 'What is the capital of Turkey?', 'Ankara');
INSERT INTO `questions` VALUES (108, 'geography', 'easy', 'What is the national animal of China?', 'Panda');
INSERT INTO `questions` VALUES (109, 'geography', 'hard', 'What is the noisiest city in the world?', 'Hong Kong');
INSERT INTO `questions` VALUES (110, 'geography', 'hard', 'What is the name of the desert area in Mexico?', 'Sonora');
INSERT INTO `questions` VALUES (111, 'geography', 'medium', 'What is a very cold part of Russia?', 'Siberia');
INSERT INTO `questions` VALUES (112, 'geography', 'easy', 'How many continents are there?', '7 ');
INSERT INTO `questions` VALUES (113, 'geography', 'hard', 'On which Italian island is Palermo?', 'Sicily');
INSERT INTO `questions` VALUES (114, 'general', 'hard', 'How many time zones are there in the world??????', '24');
INSERT INTO `questions` VALUES (115, 'geography', 'medium', 'Which is the largest desert on earth?', 'Sahara');
INSERT INTO `questions` VALUES (116, 'geography', 'hard', 'Which river is flowing through Rome?', 'Tiber');
INSERT INTO `questions` VALUES (117, 'geography', 'hard', 'Which country did once have the name Rhodesia?', 'Zimbabwe');
INSERT INTO `questions` VALUES (118, 'geography', 'medium', 'What island  which belonged to Denmark  was independent in 1944?', 'Iceland');
INSERT INTO `questions` VALUES (119, 'geography', 'medium', 'What is the largest state of the United States?', 'Alaska');
INSERT INTO `questions` VALUES (120, 'geography', 'hard', 'On which continent can you visit Sierra Leone?', 'Africa');
INSERT INTO `questions` VALUES (121, 'geography', 'hard', 'What is the name of the European river which flows through six different countries?', 'Donau');
INSERT INTO `questions` VALUES (122, 'geography', 'hard', 'What is the name of the longest river in Europe?', 'Wolga');
INSERT INTO `questions` VALUES (123, 'geography', 'hard', 'Through which capital does the Liffey river flow?', 'Dublin');
INSERT INTO `questions` VALUES (124, 'geography', 'hard', 'What is the second largest country in Europe after Russia?', 'France');
INSERT INTO `questions` VALUES (125, 'geography', 'medium', 'What is the capital of the American state Hawaii?', 'Honolulu');
INSERT INTO `questions` VALUES (126, 'geography', 'easy', 'What do the Japanese people call their own country?', 'Nippon');
INSERT INTO `questions` VALUES (127, 'geography', 'hard', 'In which country is Krakow located?', 'Poland');
INSERT INTO `questions` VALUES (128, 'geography', 'medium', 'What is the largest city in Canada?', 'Toronto');
INSERT INTO `questions` VALUES (129, 'geography', 'medium', 'What is the capital city of Australia ?', 'Canberra');
INSERT INTO `questions` VALUES (130, 'geography', 'medium', 'As of 2017  which has the highest population:<ul><li>a) London</li><li>b) Hong Kong</li></ul>(enter \'a\' or \'b\')', 'a');
INSERT INTO `questions` VALUES (131, 'science', 'medium', 'What in computer language do the initials ISDN stand for?', 'Integrated Services Digital Network');
INSERT INTO `questions` VALUES (132, 'science', 'hard', 'What is the name of the medical apparatus was invented by a French doctor Rene Theophile Hyacinthe Leanne  in 1816?', 'stethoscope');
INSERT INTO `questions` VALUES (133, 'science', 'medium', 'In what type of engine is fuel ignited by compression?', 'diesel');
INSERT INTO `questions` VALUES (134, 'science', 'hard', 'What word means the bending of light when passing through a lens?', 'refraction');
INSERT INTO `questions` VALUES (135, 'science', 'easy', 'In which layer of the atmosphere does the ozone layer occur?', 'Stratosphere');
INSERT INTO `questions` VALUES (136, 'science', 'hard', 'Which of the following did Benjamin Hall invent in 1900:<ul><li>a) the tractor</li><li>b) the safety pin</li><li>c) the zipper</li></ul>(enter \'a\'  \'b\' or \'c\')', 'a');
INSERT INTO `questions` VALUES (137, 'science', 'easy', 'Which element has the symbol Au?', 'Gold');
INSERT INTO `questions` VALUES (138, 'science', 'easy', 'What is measured in Hertz?', 'Frequency');
INSERT INTO `questions` VALUES (139, 'science', 'hard', 'Which French educationalist perfected a system of reading for the blind?', 'Louis Braille');
INSERT INTO `questions` VALUES (140, 'science', 'easy', 'Which among these colours is not a color of the rainbow?<ul><li>a) red</li><li>b) orange</li><li>c) yellow</li><li>d) magenta</li><li>e) green</li></ul>(enter \'a\'  \'b\'  \'c\'  \'d\' or \'e\')', 'd');
INSERT INTO `questions` VALUES (141, 'science', 'easy', 'What is the chemical symbol for lead?', 'Pb');
INSERT INTO `questions` VALUES (142, 'science', 'hard', 'What is the name of the science that deals with drugs and their effects?', 'Pharmacology');
INSERT INTO `questions` VALUES (143, 'science', 'medium', 'What name is given to an instrument used to measure the pressure of fluids?', 'Manometer');
INSERT INTO `questions` VALUES (144, 'science', 'easy', 'Which metallic element has the chemical symbol W?', 'Tungsten');
INSERT INTO `questions` VALUES (145, 'science', 'medium', 'What name is given to a substance which accelerates a reaction without taking part in it?', 'Catalyst');
INSERT INTO `questions` VALUES (146, 'science', 'medium', 'What is the scientific name for the white of an egg?', 'Albumen');
INSERT INTO `questions` VALUES (147, 'sport', 'hard', 'Which was the first British football club to win the European Cup?', 'Celtic');
INSERT INTO `questions` VALUES (148, 'sport', 'medium', 'Which country won the 6th European Football Championship for Women?', 'Norway');
INSERT INTO `questions` VALUES (149, 'sport', 'hard', 'Name the German soccer star who led West Germany to victory over Holland in the World Cup  then managed the team that defeated Argentina in 1990', 'Beckenbauer');
INSERT INTO `questions` VALUES (151, 'geography', 'medium', 'Which from Bombay or Tokyo do have the higher population?<ul><li>a) Bombay</li><li>b) Tokyo</li></ul>(enter \'a\' or \'b\')', 'a');
INSERT INTO `questions` VALUES (152, 'geography', 'medium', 'What is the name of the Egyptian canal linking the Red Sea and the Mediterranean?', 'Suez');
INSERT INTO `questions` VALUES (153, 'geography', 'medium', 'Which ocean is the world\'s deepest?', 'Pacific');
INSERT INTO `questions` VALUES (154, 'geography', 'easy', 'Mount Kilimanjaro is the highest point of which continent?', 'Africa');
INSERT INTO `questions` VALUES (155, 'geography', 'easy', 'Eurostar trains run from London to which Belgian city?', 'Brussels');
INSERT INTO `questions` VALUES (156, 'geography', 'medium', 'In which country is Cologne?', 'Germany');
INSERT INTO `questions` VALUES (157, 'geography', 'hard', 'Which one of those two cities have the higher population?<ul><li>a) London</li><li>b) Rome</li></ul>(enter \'a\' or \'b\')', 'a');
INSERT INTO `questions` VALUES (158, 'geography', 'hard', 'In which city would you find the Parthenon?', 'Athens');
INSERT INTO `questions` VALUES (159, 'geography', 'hard', 'Sweden is a:<ul><li>a) kingdom</li><li>b) republic</li></ul>(enter \'a\' or \'b\')', 'a');
INSERT INTO `questions` VALUES (160, 'geography', 'medium', 'In which country is Calgary?', 'Canada');
INSERT INTO `questions` VALUES (161, 'general', 'easy', 'Which fictional city is the home of Batman?', 'Gotham');
INSERT INTO `questions` VALUES (162, 'science', 'easy', 'Spinach is high in which mineral?', 'Iron');
INSERT INTO `questions` VALUES (163, 'science', 'easy', 'What is a Geiger Counter used to detect?', 'Radiation');
INSERT INTO `questions` VALUES (164, 'general', 'easy', 'In the film Babe  what type of animal was Babe?', 'pig');
INSERT INTO `questions` VALUES (165, 'sport', 'medium', 'What was Mohammed Ali\'s birth name?', 'Cassius Clay');
INSERT INTO `questions` VALUES (166, 'science', 'hard', 'Which planet is the closest to Earth?', 'Venus');
INSERT INTO `questions` VALUES (167, 'science', 'easy', 'What is the name of the tallest mammal?', 'girafe');
INSERT INTO `questions` VALUES (168, 'geography', 'medium', 'Mount Everest is found in which mountain range?', 'Himalayas');
INSERT INTO `questions` VALUES (169, 'general', 'hard', 'How many strings does a violin have?', '4');
INSERT INTO `questions` VALUES (170, 'general', 'easy', 'What was the Hunchback of Notre Dame\'s name?', 'Quasimodo');
INSERT INTO `questions` VALUES (171, 'general', 'easy', 'What color is the circle on the Japanese national flag?', 'red');
INSERT INTO `questions` VALUES (172, 'general', 'medium', 'What is the family name of the author of the \"Harry Potter\" books?', 'Rowling');
INSERT INTO `questions` VALUES (173, 'science', 'easy', 'How many sides does an octagon have?', '8');
INSERT INTO `questions` VALUES (174, 'general', 'easy', 'What is the name of the city where the cartoon family The Simpsons live?', 'Springfield');
INSERT INTO `questions` VALUES (175, 'science', 'easy', 'How many colours are there in a rainbow?', '7');
INSERT INTO `questions` VALUES (176, 'science', 'easy', 'How many degrees are found in a circle?', '360');
INSERT INTO `questions` VALUES (177, 'general', 'easy', 'How many squares are there on a chess board?', '64');
INSERT INTO `questions` VALUES (178, 'general', 'hard', 'Name the historical prince whose name was used by Bram Stoker in his famous novel', 'Dracula');
INSERT INTO `questions` VALUES (179, 'general', 'easy', 'What is the family name of the author who wrote a series of novels about orcs  hobbits  goblins and elves?', 'Tolkien');
INSERT INTO `questions` VALUES (180, 'science', 'medium', 'Which hormone controls the supply of sugar between muscles and blood?', 'Insulin');
INSERT INTO `questions` VALUES (181, 'general', 'easy', 'In Japanese  what is the word for goodbye?', 'Sayonara');
INSERT INTO `questions` VALUES (182, 'general', 'easy', 'Which fictional character was also known as Lord Greystoke?', 'Tarzan');
INSERT INTO `questions` VALUES (183, 'general', 'easy', 'What is the Chinese system of medicine called  which uses slender needles inserted into the body at specific points?', 'Acupuncture');
INSERT INTO `questions` VALUES (184, 'science', 'easy', 'Which branch of mathematics deals with the sides and angles of triangles  and their relationship to each other?', 'Trigonometry');
INSERT INTO `questions` VALUES (185, 'science', 'easy', 'A cube has how many edges?', '12');
INSERT INTO `questions` VALUES (186, 'general', 'medium', 'How many times has Donald Trump been married?', '3');
INSERT INTO `questions` VALUES (187, 'sport', 'medium', 'What is the family name of the top goalscorer at the Euros to date (data valid as of 2012)?', 'Platini');
INSERT INTO `questions` VALUES (188, 'sport', 'hard', 'How many goals has Alan Shearer scored in European Championship tournaments in total?', '11');
INSERT INTO `questions` VALUES (189, 'sport', 'medium', 'What nationality was the coach of Greece when they won Euro 2004?', 'German');
INSERT INTO `questions` VALUES (190, 'sport', 'hard', 'Which company supplied the Euro 2012 matchball?', 'Adidas');
INSERT INTO `questions` VALUES (191, 'sport', 'medium', 'Which team knocked England out of Euro 2004 at the quarter-final stages?', 'Portugal');
INSERT INTO `questions` VALUES (192, 'sport', 'easy', 'Which sports playing area is 2.7 metres by 1.5 metres?', 'Table Tennis');
INSERT INTO `questions` VALUES (193, 'sport', 'easy', 'Which sport do the Oklahoma City Thunder play?', 'Basketball');
INSERT INTO `questions` VALUES (194, 'sport', 'medium', 'Which racket sport made its Olympic debut in 1992?', 'Badminton');
INSERT INTO `questions` VALUES (195, 'sport', 'easy', 'How many colours make up the Olympic rings?', '5');
INSERT INTO `questions` VALUES (196, 'sport', 'medium', 'Which team are known as the Gunners?', 'Arsenal');
INSERT INTO `questions` VALUES (197, 'sport', 'hard', 'Which team first won an FA Cup semifinal on a penalty shoot-out?', 'Liverpool');
INSERT INTO `questions` VALUES (198, '321321312', 'easy', 'Michael Schumacher drove for eleven years with which constructor?', 'Ferrari');
INSERT INTO `questions` VALUES (216, 'general', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (217, 'general', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (218, 'general', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (219, 'general', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (220, 'general', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (221, 'general', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (222, 'general', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (223, 'general', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (224, 'general', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (225, 'general', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (226, 'science', 'medium', '20220720aaa', 'a');
INSERT INTO `questions` VALUES (227, 'science', 'easy', '20220720', '24');
INSERT INTO `questions` VALUES (228, 'science', 'easy', '1', '1');
INSERT INTO `questions` VALUES (229, 'science', 'easy', '1', '1');
INSERT INTO `questions` VALUES (230, 'general', 'easy', '1', '1');
INSERT INTO `questions` VALUES (231, 'science', 'easy', '1', '1');
INSERT INTO `questions` VALUES (232, 'science', 'easy', '1', '1');
INSERT INTO `questions` VALUES (233, 'science', 'easy', '1', '1');

-- ----------------------------
-- Table structure for records
-- ----------------------------
DROP TABLE IF EXISTS `records`;
CREATE TABLE `records`  (
  `rid` int NOT NULL AUTO_INCREMENT,
  `uid` int NULL DEFAULT NULL,
  `iscorrect` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `myanswer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `time` datetime NULL DEFAULT NULL,
  `qid` int NULL DEFAULT NULL,
  PRIMARY KEY (`rid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 94 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of records
-- ----------------------------
INSERT INTO `records` VALUES (35, 6, 'true', 'panda', '2022-07-21 12:09:31', 112);
INSERT INTO `records` VALUES (36, 6, 'false', '', '2022-07-21 12:09:34', 126);
INSERT INTO `records` VALUES (37, 6, 'false', '', '2022-07-21 12:09:34', 154);
INSERT INTO `records` VALUES (38, 6, 'false', '', '2022-07-21 12:09:35', 155);
INSERT INTO `records` VALUES (39, 6, 'undefined', 'null', '2022-07-21 12:09:35', 0);
INSERT INTO `records` VALUES (40, 6, 'false', '', '2022-07-21 12:11:00', 108);
INSERT INTO `records` VALUES (41, 6, 'false', '123', '2022-07-21 12:11:02', 126);
INSERT INTO `records` VALUES (42, 6, 'false', '123', '2022-07-21 12:11:03', 155);
INSERT INTO `records` VALUES (43, 6, 'false', '123', '2022-07-21 12:11:04', 112);
INSERT INTO `records` VALUES (44, 6, 'undefined', 'null', '2022-07-21 12:11:06', 0);
INSERT INTO `records` VALUES (45, 6, 'false', 'asd', '2022-07-21 12:34:33', 149);
INSERT INTO `records` VALUES (46, 6, 'false', 'asdasd', '2022-07-21 12:34:35', 188);
INSERT INTO `records` VALUES (47, 6, 'false', 'asdasd', '2022-07-21 12:34:36', 189);
INSERT INTO `records` VALUES (48, 6, 'false', 'adasda', '2022-07-21 12:34:37', 194);
INSERT INTO `records` VALUES (49, 6, 'false', 'asdasd', '2022-07-21 12:34:39', 190);
INSERT INTO `records` VALUES (50, 6, 'false', 'asdasd', '2022-07-21 12:34:40', 196);
INSERT INTO `records` VALUES (51, 6, 'false', 'adasd', '2022-07-21 12:34:41', 165);
INSERT INTO `records` VALUES (52, 6, 'false', 'asdasda', '2022-07-21 12:34:43', 187);
INSERT INTO `records` VALUES (53, 6, 'false', 'asdadas', '2022-07-21 12:34:44', 147);
INSERT INTO `records` VALUES (54, 6, 'undefined', 'null', '2022-07-21 12:34:45', 0);
INSERT INTO `records` VALUES (55, 6, 'false', 'we213123', '2022-07-21 12:39:53', 108);
INSERT INTO `records` VALUES (56, 6, 'false', '123123', '2022-07-21 12:40:03', 108);
INSERT INTO `records` VALUES (57, 6, 'false', '213213', '2022-07-21 12:40:07', 112);
INSERT INTO `records` VALUES (58, 6, 'true', 'panda', '2022-07-21 12:47:05', 108);
INSERT INTO `records` VALUES (59, 6, 'false', '', '2022-07-21 12:47:05', 112);
INSERT INTO `records` VALUES (60, 6, 'false', '', '2022-07-21 12:47:06', 126);
INSERT INTO `records` VALUES (61, 6, 'false', '', '2022-07-21 12:47:06', 154);
INSERT INTO `records` VALUES (62, 6, 'false', '', '2022-07-21 12:47:07', 155);
INSERT INTO `records` VALUES (63, 6, 'true', 'panda', '2022-07-21 12:47:57', 108);
INSERT INTO `records` VALUES (64, 6, 'false', '2', '2022-07-21 12:48:03', 112);
INSERT INTO `records` VALUES (65, 6, 'false', '', '2022-07-21 12:48:09', 126);
INSERT INTO `records` VALUES (66, 6, 'false', 'asdf', '2022-07-21 12:48:15', 154);
INSERT INTO `records` VALUES (67, 6, 'false', 'sdsdsd', '2022-07-21 12:48:21', 155);
INSERT INTO `records` VALUES (68, 6, 'true', 'panda', '2022-07-22 06:35:14', 108);
INSERT INTO `records` VALUES (69, 6, 'false', 'asd', '2022-07-22 06:35:18', 126);
INSERT INTO `records` VALUES (70, 6, 'false', 'sdsdsd', '2022-07-22 06:35:21', 155);
INSERT INTO `records` VALUES (71, 6, 'false', '23123', '2022-07-22 06:35:23', 112);
INSERT INTO `records` VALUES (72, 6, 'false', '123123', '2022-07-22 06:35:25', 154);
INSERT INTO `records` VALUES (73, 6, 'false', 'sdsdsd', '2022-07-22 06:37:03', 155);
INSERT INTO `records` VALUES (74, 6, 'false', '', '2022-07-22 07:16:34', 126);
INSERT INTO `records` VALUES (75, 6, 'false', 'suis', '2022-07-22 07:16:40', 155);
INSERT INTO `records` VALUES (76, 6, 'false', 'dhsdjja', '2022-07-22 07:16:46', 154);
INSERT INTO `records` VALUES (77, 6, 'false', 'sdsdsds', '2022-07-22 07:16:52', 112);
INSERT INTO `records` VALUES (78, 6, 'false', 'de4d', '2022-07-22 07:16:58', 108);
INSERT INTO `records` VALUES (79, 7, 'true', 'panda', '2022-07-24 10:04:12', 108);
INSERT INTO `records` VALUES (80, 7, 'false', 'asdas', '2022-07-24 10:04:19', 154);
INSERT INTO `records` VALUES (81, 7, 'false', 'sdsws', '2022-07-24 10:04:22', 155);
INSERT INTO `records` VALUES (82, 7, 'false', 'sdsa', '2022-07-24 10:04:23', 126);
INSERT INTO `records` VALUES (83, 7, 'false', 'sdwq', '2022-07-24 10:04:25', 112);
INSERT INTO `records` VALUES (84, 7, 'false', 'cd', '2022-07-24 10:04:58', 191);
INSERT INTO `records` VALUES (85, 7, 'false', 'csda', '2022-07-24 10:05:04', 197);
INSERT INTO `records` VALUES (86, 7, 'false', '123', '2022-07-24 10:05:10', 194);
INSERT INTO `records` VALUES (87, 7, 'false', '23231ssdsa', '2022-07-24 10:05:16', 193);
INSERT INTO `records` VALUES (88, 7, 'false', 'dwq2s1', '2022-07-24 10:05:22', 148);
INSERT INTO `records` VALUES (89, 7, 'false', 'dsdsa123', '2022-07-24 10:05:28', 196);
INSERT INTO `records` VALUES (90, 7, 'false', 'dsds', '2022-07-24 10:05:34', 192);
INSERT INTO `records` VALUES (91, 7, 'false', 'dsasd', '2022-07-24 10:05:40', 189);
INSERT INTO `records` VALUES (92, 7, 'false', 'cdd34sds', '2022-07-24 10:05:46', 149);
INSERT INTO `records` VALUES (93, 7, 'false', '', '2022-07-24 10:05:52', 195);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `userid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `question_donated` int NULL DEFAULT 0,
  PRIMARY KEY (`userid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Roway', '$2y$10$C.ogj0Gat9jqNMsTRL..XOiKy3i9xnOwiChCyMpExKqu/cMpog0yi', 5);
INSERT INTO `user` VALUES (2, 'Marc', '$2y$10$frk6nOA2ExVjiAoD3GMubOyL/OuJ3WDbpXoais34XVpis9OzXCQy.', 0);
INSERT INTO `user` VALUES (3, 'jack', '$2y$10$y51eA3Ro.DppQ1ybE0dH6ure.05AtyvjW.F3G26lBI9KihfNL1Dxu', 0);
INSERT INTO `user` VALUES (4, 'Tony', '$2y$10$phnlizfUxHOh3s65YoGdI.xje.Q66v2Zn3H0Kt9QZyYt7ssSvg7XS', 1);
INSERT INTO `user` VALUES (6, 'zyh', '$2y$10$zZLP9XuHF4mZKPv6PGbPc.WjK10cQfhjMrCXJm8aBFIS6nWiztv76', 0);
INSERT INTO `user` VALUES (7, 'fy', '$2y$10$ZUjPImZ3yRmDOXBj1PZ1XudVyOvs//11R5TPeszkMgWZZI/BSndSe', 0);
INSERT INTO `user` VALUES (8, 'zyq', '$2y$10$JOjWqVnvffVUlZPjqn/0keuRvMuvCEW0RJzmOKYqJtSiI/bO6nruO', 0);

SET FOREIGN_KEY_CHECKS = 1;
