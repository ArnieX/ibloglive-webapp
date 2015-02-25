#Database model

#Stream table

```
CREATE TABLE `stream` (
`ID` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`removed` int(2) NOT NULL DEFAULT '0',
`UUID` int(11) NOT NULL AUTO_INCREMENT,
UNIQUE KEY `ID` (`ID`),
UNIQUE KEY `UUID` (`UUID`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
```

#Admins table

```
CREATE TABLE `admins` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
```

#Settings table

```
CREATE TABLE `settings` (
`key` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`value` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
```
