#
# DUMP FILE
#
# Database is ported from MS Access
#------------------------------------------------------------------
# Created using "MS Access to MySQL" form http://www.bullzip.com
# Program Version 5.4.274
#
# OPTIONS:
#   sourcefilename=C:\Users\gluef\Google Drive\Work\Forbes-Kimball-Family\forbes-kimball.mdb
#   sourceusername=
#   sourcepassword=
#   sourcesystemdatabase=
#   destinationdatabase=users
#   storageengine=MyISAM
#   dropdatabase=0
#   createtables=1
#   unicode=1
#   autocommit=1
#   transferdefaultvalues=1
#   transferindexes=1
#   transferautonumbers=1
#   transferrecords=1
#   columnlist=1
#   tableprefix=
#   negativeboolean=0
#   ignorelargeblobs=0
#   memotype=LONGTEXT
#   datetimetype=DATETIME
#

CREATE DATABASE IF NOT EXISTS `users`;
USE `users`;

#
# Table structure for table 'users'
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `users_index` INTEGER NOT NULL AUTO_INCREMENT, 
  `username` VARCHAR(50), 
  `password` VARCHAR(50), 
  `firstname` VARCHAR(50), 
  `middlename` VARCHAR(50), 
  `maidenname` VARCHAR(50), 
  `lastname` VARCHAR(50), 
  `preferredname` VARCHAR(50), 
  `relationship` VARCHAR(50), 
  `birthdate` DATETIME, 
  `phone` VARCHAR(50), 
  `address` VARCHAR(50), 
  `city` VARCHAR(50), 
  `state` VARCHAR(50), 
  `zip` VARCHAR(50), 
  `share` TINYINT(1), 
  `notifyshare` TINYINT(1), 
  `active` TINYINT(1), 
  `christmascardlist` TINYINT(1), 
  `userlevel` INTEGER DEFAULT 0, 
  PRIMARY KEY (`users_index`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'users'
#

INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (25, 'dvr@mesanetworks.net', 'ariel213', 'Daniel', 'Edward', NULL, 'Rector', NULL, 'Son-In-Law', '1940-01-11 00:00:00', '719-687-7352', '1288 Coyote Tr', 'Woodland Park', 'CO', '80863', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (26, 'jenrector@aol.com', 'oopack', 'Jennifer', 'Danielle', NULL, 'Benjamin', NULL, 'grand daughter', '1970-12-16 00:00:00', '816-523-9204', '5614 Holmes St.', 'Kansas City', 'MO', '64110', 0, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (27, 'barbie1844@gmail.com', 'shewry', 'Barbie', 'Joan', NULL, 'Forbes', NULL, 'daughter', '1951-12-30 00:00:00', '555-555-5555', 'P.O. Box  155', 'Haifa, Israel', 'na', '31001', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (28, 'melendez1997@yahoo.com', 'nurture1st', 'Pollyanna', 'Marie', NULL, 'Melendez', NULL, 'Granddaughter', '1973-12-25 00:00:00', '719-687-8739', '1140 Sundance Circle', 'Woodland Park', 'CO', '80863', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (29, 'wendy.herrin@gmail.com', 'Sparkle13fo', 'Gwendolyn', 'Rector', NULL, 'Herrin', NULL, 'grand daughter', '1965-05-10 00:00:00', '503-247-7114', '6717 N. Alta Ave.', 'Portland', 'OR', '97203', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (33, 'calibrat58@yahoo.com', 'ss91351', 'Selena', NULL, NULL, 'Couto', NULL, 'granddaughter', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (34, 'CFORBES1@SOCAL.RR.COM', 'Shelby', 'Chris', NULL, NULL, 'Forbes', NULL, 'son', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (35, 'dorlamarquis2@yahoo.com', 'lukeluke', 'Dorla', 'Marie', 'Walters', 'Marquis-Forbes', 'Corkie', 'daughter in-law', '1952-03-21 00:00:00', '818-767-7555', '10222 La Tuna Cyn Rd.', 'Sun Valley ', 'Ca', '91352', 1, 0, 0, 1, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (36, 'j-cup@hotmail.com', 'kingss', 'Jake', 'Lance', 'Suyat', 'Davis', 'Jake', 'great-grandson', '1990-06-30 00:00:00', '360-652-4637', '19017 94th dr', 'stanwood', 'wa', '98292', 0, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (37, 'kuyamasta@hotmail.com', 'louise', 'Joey', NULL, NULL, 'Suyat', NULL, 'step-grandson', NULL, NULL, '3101 NE 13th st', 'Renton', 'WA', '98056', 1, 0, 0, 1, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (40, 'mothergoldstein@aol.com', 'momof3', 'Lisa', 'Marie', 'Forbes', 'Goldstein', ' ', 'Grand daughter', '1968-11-26 00:00:00', '661-977-2333', '25399 The Old Rd #5-108', 'Stevenson Ranch', 'Ca', '91381', 1, 0, 0, 1, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (42, 'imlivingforhim@gmail.com', 'Bettis18', 'Tiffany', 'Marie', 'Bettis', 'Smith', 'Tiffany', 'granddaughter-in-law', '1988-08-01 00:00:00', '661-877-6365', '5080 Seymour Road', 'Dalzell', 'SC', '29040', 1, 0, 0, 1, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (43, 'hinata_moon@hotmail.com', 'Rosetta12', 'Lindsey', 'Ryan', 'Edwards', 'Edwards', 'Lindsey', 'great-granddaughter', '1992-10-13 00:00:00', '507-637-2032', '403 E. Elm', 'Redwood Falls', 'MN', '56283', 0, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (44, 'moonfaerie24@live.com', 'jackie06', 'Tove\'', 'Michelle', '', 'Westrup', 'Tove\'', 'great granddaughter', '1991-08-15 00:00:00', '', '', '', '', '', 1, 0, 0, 1, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (45, 'funkenwagls@aol.com', 'monkey1', 'Garrett', 'Edwin', NULL, 'Lane', NULL, 'great-grandson', '1990-06-27 00:00:00', '661-296-3851', '22085 Alamogordo rd', 'saugus', 'ca', '91350', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (46, 'hurleystar418@yahoo.com', 'tiff12', 'Tiffany', 'Carin', NULL, 'Winkler', NULL, 'grand daughter', '1989-03-21 00:00:00', '661-251-4854', '16655 Gazeley St.', 'Canyon Country', 'CA', '91351', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (48, 'arielforbes@sbcglobal.net', 'weasel', 'Ariel Mary', 'Elizabeth', 'Forbes', 'Rasgado', 'Ariel', 'granddaughter', '1978-08-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (1, 'lou@gluefish.com', 'goldf1ng', 'Louis', 'Maitland', NULL, 'Wilson', NULL, 'son-in-law', '1946-04-14 00:00:00', '503-881-0501', '807 N 1st St', 'Woodburn', 'OR', '97071', 1, 0, 1, 1, 3);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (2, 'caruthes@hotmail.com', 'ilovelou', 'Carolyn', 'Ruth', NULL, 'Forbes', NULL, 'daughter', '1948-05-23 00:00:00', '503-981-0501', '807 N 1st St', 'Woodburn', 'OR', '97071', 1, 0, 1, 1, 3);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (7, 'kevin@kevincoulston.com', 'Globalt3ch', 'Kevin', 'James', NULL, 'Coulston Jr.', NULL, 'Great Grandson', '1985-10-22 00:00:00', '928-451-4789', 'P.O. Box 394', 'Cornville', 'AZ', '86325', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (8, 'pinsrock@hotmail.com', 'sarebear', 'Genevieve', 'Sarah Beth Michelle', NULL, 'Forbes', NULL, 'Grand-daughter', '1982-05-21 00:00:00', '805-459-1707', '3027 East Avenue J-14', 'Lancaster', 'CA', '93535', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (10, 'mshksh@aol.com', 'mshksh', 'Kathleen \"Katie\"', 'Sue', NULL, 'Hagan (Rector)', NULL, 'Grandaughter', '1967-04-21 00:00:00', '970-555-5555', '0018 Dolores Circle', 'Glenwood Springs', 'CO', '81601', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (11, 'kimshults@yahoo.com', 'lillian', 'Kimberly', 'Frances', NULL, 'Davis', NULL, 'Grand daughter', '1969-04-22 00:00:00', '916-812-8612', '7433 South Land Park Dr ', 'Apartment 104 Sacramento', 'CA', '95831', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (12, 'vmrector@aol.com', '302051', 'Vicki', 'Marie Eleanor', NULL, 'Rector (Forbes)', NULL, 'Daughter', '1945-08-27 00:00:00', '719-687-7352', '1288 Coyote Trl', 'Woodland Park', 'CO', '80863', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (15, 'lance_r_davis@hotmail.com', 'Yeshua00', 'Lance', 'Robert', NULL, 'Davis', NULL, 'Grandson', '1967-06-05 00:00:00', '360-652-4637', '19017 94th Drive NW', 'Stanwood', 'WA', '98292', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (16, 'kiltedforbes@yahoo.co.uk', 'monkey', 'aaron', 'alexander matthew', NULL, 'forbes', NULL, 'grandson', '1980-04-08 00:00:00', '661-965-7058', '838 morning glory drive', 'independence', 'or', '97351', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (17, 'redgure@hotmail.com', 'wita1975', 'Jeremy', 'George', NULL, 'Forbes', NULL, 'Grandson', '1975-10-31 00:00:00', '818-744-0391', '9813 Monogram Ave', 'North Hills', 'CA', '91343', 0, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (19, 'lindapunkin@hotmail.com', 'kristopher', 'Linda', 'Carolyn', NULL, 'Davis', NULL, 'Granddaughter', '1966-03-12 00:00:00', '503-981-0501', '807 N. !st St.', 'Woodburn', 'Or', '97071', 0, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (22, 'forbsgandy@gmail.com', 'sevenoften', 'Marilyn', '', NULL, 'Gandy', NULL, 'daughter', '1911-11-11 00:00:00', '111-111-1111', '1111', 'asl;kddkj', 'VA', '97071', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (23, 'deb@cementcreek.net', '213818ff', 'Deborah', 'Ann', NULL, 'Rector', NULL, 'Granddaughter', '1962-12-29 00:00:00', '970-349-1827', 'PO Box 1827', 'Crested Butte', 'CO', '81224', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (24, 'DawnFQPM@yahoo.com', 'shelby', 'Dawn', 'D', NULL, 'Forbes', NULL, 'Granddaughter in law', '1969-08-19 00:00:00', '916-821-0103', '10035 Mills Station Road ', 'Sacramento', 'CA', '95827', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (54, 'bestrecruiter@yahoo.com', 'Kimberly1', 'Maria Elena', '', 'Amparan', 'Amparan', 'Maria Elena', 'Not related', '1945-08-19 00:00:00', '818-614-2402', '19221 Sherman Way, #7', 'Reseda', 'CA', '91335', 0, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (55, 'westrupjill@yahoo.com', 'alaska9293', 'Jill', 'Rebecca', 'Joanna', 'Westrup', 'jill', 'great-granddaughter', '1993-09-02 00:00:00', '530-344-8008', '2796 countryside dr', 'placerville', 'ca', '95667', 0, 0, 0, 1, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (56, 'mmundt44@gmail.com', 'shewry1984', 'Barbie', 'Joan', 'Forbes', 'Mundt', 'Barbie Mundt', 'Daughter', '1951-12-30 00:00:00', '4693486023', '1731 Green Tree Place', 'Duncanville', 'TX', '75137', 1, 0, 0, 1, 0);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (57, 'Refreshing-Humanoid@hotmail.com', 'Rosetta12', 'Lindsey', 'Ryan', 'Edwards', 'Edwards', 'Lindsey Edwards', 'great-granddaughter', '1992-10-13 00:00:00', NULL, NULL, 'Redwood Falls', 'MN', '56283', 0, 0, 0, 0, 0);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (58, 'jessikawork@gmail.com', 'alaska9293', 'Jessika', 'faith', '', 'forbes', 'jessika', 'great grand daughter', '1993-09-02 00:00:00', '', '', '', '', '', 0, 0, 0, 1, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (59, 'dawnforbes@att.net', 'TooOld1969', 'Dawn', 'Danelle', 'Snow', 'Forbes', 'Dawn', 'Grand daughter in law', '1969-08-19 00:00:00', '916-821-0103', '3606 24th Avenue', 'Sacramento', 'Ca', '95820', 0, 1, 0, 1, 0);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (60, 'eatpulses@aol.com', 'carolyn', 'W', 'RONALD', '', 'ELTERMAN', 'RON', 'ex-husband of daughter Carolyn', '1950-11-15 00:00:00', '503-784-9290', '773 H STREET  (MAILING: PO BOX 620)', 'CRESCENT CITY', 'CA', '95530', 0, 0, 0, 0, 0);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (61, 'kimballjudy61@gmail.com', '02191947', 'Judy', 'A', 'Kimball', 'Kimball', 'Judy', 'distant cousin of Mary Eleanor', '1947-02-19 00:00:00', '', '578 Lowell St', 'Peabody', 'MA', '01960', 0, 1, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (62, 'zoesdaddy0408@yahoo.com', '1Loveyou', 'Timothy', 'Andrew', NULL, 'Shepard', NULL, 'Great-Grandson-in-law', '1989-09-24 00:00:00', '503-989-2261', '807 N 1st st', 'Woodburn', 'OR', '97071', 1, 0, 0, 0, 1);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (63, 'esmeshults@gmail.com', 'lillian1996', 'esme', 'kimberly', 'shults', 'shults', 'esme', 'great grandchild', '1996-11-06 00:00:00', '916-716-9665', '3300 Whitney ave', 'sacramento', 'Ca', '95821', 0, 0, 0, 0, 0);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (65, 'Skymarshall.fyrebat@gmail.com', 'piratecat', 'Will', '', '', 'Madden', '', 'Spawn of demons', NULL, '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (66, 'kaheak88@gmail.com', 'doggie34', 'kahealani', 'kuuipo', '', 'kealoha', 'kahea', '', '1993-05-20 00:00:00', '916-880-0160', '4605 attawa avenue', 'sacramento', 'ca', '95822', 1, 0, 0, 1, 0);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (69, 'awilson42@gmail.com', 'shuxue42', 'D', '', '', 'Wilson', '', '', NULL, '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (70, 'dreia42@icloud.com', 'ophanim42', 'D', '', '', 'wilson', '', '', NULL, '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `users` (`users_index`, `username`, `password`, `firstname`, `middlename`, `maidenname`, `lastname`, `preferredname`, `relationship`, `birthdate`, `phone`, `address`, `city`, `state`, `zip`, `share`, `notifyshare`, `active`, `christmascardlist`, `userlevel`) VALUES (72, 'slfort1958@gmail.com', 'stumpy8812', 'Tanya', 'lanette', 'bright', 'fort', 'angel', 'granddaughter ', '1972-10-25 00:00:00', '317-672-9322', '4814 mathews way', 'indpls', 'In', '46227', 1, 0, 0, 1, 1);
# 46 records
