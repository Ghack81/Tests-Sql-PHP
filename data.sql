CREATE TABLE `CARNET` (
          `ID` int(11) NOT NULL AUTO_INCREMENT,
          `nom` varchar(30) DEFAULT NULL,
          `telephone` varchar(30) DEFAULT NULL,
          `email` varchar(30) DEFAULT NULL,
          PRIMARY KEY (`ID`)
        ) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

        INSERT INTO `CARNET` VALUES 
        (1,'SMITH','065/36.63.98','mention@gmail.com'),
        (2,'DURAND','065/96.55.12','tom-pierre@hotmail.com'),
        (3,'GUDULE','068/23.45.78','eric-math@gmail.com'),
        (4,'ZAPATA','0455/89.55.11','pierre-orly@outlook.com'),
        (5,'JOURDAI','0496/.36.65.89','jourdain-nicolas@outlook.fr'),
        (6,'DUPUY','02/.36.96.74','marie-dupuis@outlook.be'),
        (7,'ANDREAS','018/61.02.12','andrea-lou@gmail.com'),
        (9,'Kafka','065/.98.66.22','kafka-franz@hotmail.be'),
        (11,'Dalton','0485/98.65.12','dalton-joe@gmail.com');