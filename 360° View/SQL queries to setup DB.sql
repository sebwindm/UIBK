
CREATE TABLE `useraccounts` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255)  NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255)  NOT NULL,
  `address` VARCHAR(255)  NOT NULL ,
  `telephonenumber` VARCHAR(255)  NOT NULL ,
  `PowerBILink` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
);

INSERT INTO `useraccounts`(`email`, `password`, `firstname`,`lastname`, `address`,`telephonenumber`, `PowerBILink`) VALUES
('manuel@neuer.de','$2y$10$qCgb4MKzbMKAqUU2LOFBQ.wGoAD6yBElFA7V7EPwK.QGCViJjx4mu','Manuel', 'Neuer','Universitätsstraße 15, 86609 Donauwörth, Deutschland','+49536733823','https://app.powerbi.com/view?r=eyJrIjoiZGM5NWYxZDUtYzI1ZS00YTgxLTliMDMtNjQxNjY0N2M5MjIxIiwidCI6IjU4MDVlYmNhLWRjMTgtNDQzZi1iNzJjLTdlZDk5Yjk5MzRiNSIsImMiOjh9'),
('thomas@mueller.de','$2y$10$qCgb4MKzbMKAqUU2LOFBQ.wGoAD6yBElFA7V7EPwK.QGCViJjx4mu','Thomas', 'Mueller','Hafenstraße 22, 39043 Klausen, Italien','+394636436','https://app.powerbi.com/view?r=eyJrIjoiYWRkYWU1MTMtNDBhMi00M2EzLWI4OTAtYWQwODg0YjVlOTQwIiwidCI6IjU4MDVlYmNhLWRjMTgtNDQzZi1iNzJjLTdlZDk5Yjk5MzRiNSIsImMiOjh9'),
('marco@reus.de','$2y$10$qCgb4MKzbMKAqUU2LOFBQ.wGoAD6yBElFA7V7EPwK.QGCViJjx4mu','Marco','Reus','Zehnergasse 11, 121314 Inzing, Österreich','+43600213153123','EMPTY'),
('philipp@lahm.de','$2y$10$qCgb4MKzbMKAqUU2LOFBQ.wGoAD6yBElFA7V7EPwK.QGCViJjx4mu','Philipp','Lahm','Pfad zu endlosem Rum 4, 6410 Telfs, Austria','069383536345','EMPTY'),
('jogi@dfb.de','$2y$10$qCgb4MKzbMKAqUU2LOFBQ.wGoAD6yBElFA7V7EPwK.QGCViJjx4mu','Joachim', 'Loew','Otto-Fleck-Schneise 6, 60528 Frankfurt/Main, Deutschland','+4969-67 88 0','https://app.powerbi.com/view?r=eyJrIjoiMTljZGMxMTktN2QwMS00NDcwLWIzMmQtZmFiOGUwNDgyZDY2IiwidCI6IjU4MDVlYmNhLWRjMTgtNDQzZi1iNzJjLTdlZDk5Yjk5MzRiNSIsImMiOjh9'),
('francofoda@ofb.at','$2y$10$qCgb4MKzbMKAqUU2LOFBQ.wGoAD6yBElFA7V7EPwK.QGCViJjx4mu','Franco', 'Foda','Ernst Happel Stadion, Sektor A/F, Meiereistraße 7, 1020 Wien, Österreich','+43/1/727 18-0','EMPTY');


CREATE TABLE `supervisors` (
  `supervisor_id` INT (10) NOT NULL AUTO_INCREMENT ,
  `useraccount_email` varchar(255)  NOT NULL,
  PRIMARY KEY (`supervisor_id`),
  FOREIGN KEY(useraccount_email) REFERENCES useraccounts(email) ON DELETE CASCADE
);

INSERT INTO `supervisors` (`useraccount_email`) VALUES
('jogi@dfb.de'),
('francofoda@ofb.at');


CREATE TABLE `customers` (
  `customer_id` INT (10) NOT NULL AUTO_INCREMENT ,
  `type` VARCHAR(255)  NOT NULL ,
  `companyname` VARCHAR(255)  NOT NULL ,
  `useraccount_email` VARCHAR(255)  NOT NULL ,
  `supervisor_id` INT (10) NOT NULL ,
  PRIMARY KEY (`customer_id`),
  FOREIGN KEY(useraccount_email) REFERENCES useraccounts(email) ON DELETE CASCADE,
  FOREIGN KEY(supervisor_id) REFERENCES supervisors(supervisor_id) ON DELETE CASCADE
);

INSERT INTO `customers` (`type`, `companyname`, `useraccount_email`, `supervisor_id`) VALUES
('private','ManuelNeuer Immobilien','manuel@neuer.de','1'),
('private','Müller und Müller','thomas@mueller.de','1'),
('business','Reus Immobilien GmbH','marco@reus.de','2'),
('business','Lahme Geschäfte AG','philipp@lahm.de','2');



CREATE TABLE `buildings` (
  `building_id` INT (10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `geocode` varchar(255) NOT NULL,
  `picture_file_path` varchar(255) NOT NULL,
  PRIMARY KEY (`building_id`), UNIQUE (`name`,`geocode`)
);

INSERT INTO `buildings`(`name`, `country`, `city`, `zipcode`,`street`, `number`, `geocode`,`picture_file_path`) VALUES
('DEZ Einkaufszentrum','Austria','Innsbruck','6020','Amraser-See-Straße','56a','47.262390, 11.430027','./images/dez.jpg'),
('Sowi Campus','Austria','Innsbruck','6020','Universitätsstraße ','15','47.270034, 11.398956','./images/sowi.jpg'),
('Sillpark Einkaufszentrum','Austria','Innsbruck','6020','Museumstraße ','38','47.266152, 11.403783','./images/sillpark.jpg'),
('Flughafen Innsbruck','Austria','Innsbruck','6020','Fürstenweg ','180','47.257968, 11.351332','./images/flughafen.jpg'),
('Rocket Launch Center Innsbruck','Austria','Innsbruck','6020','Bergiselweg ','3','47.249080, 11.399489','./images/rocket.jpg'),
('Ozeandampferwerft Innsbruck','Austria','Innsbruck','6020','Innrain','149','47.255026, 11.376544','./images/werft.jpg'),
('Philip Neuner Tabakfachgeschäft','Austria','Aldrans','6071','Dorf ','1b','47.251714, 11.447371','./images/tabakladen.jpg'),
('Hornbach Innsbruck','Austria','Innsbruck','6063','Serlessstraße ','5','47.276053, 11.454164','./images/hornbach.jpg'),
('Olympiaworld Innsbruck','Austria','Innsbruck','6020','Olympiastraße ','10','47.258583, 11.409736','./images/olympiaworld.jpg'),
('McDonalds Völs','Austria','Völs','60617620','Gießenweg ','2','47.257205, 11.323156','./images/mcdonalds.jpg');


CREATE TABLE `projects` (
  `project_id` INT (10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255)  NOT NULL,
  `type` ENUM('Deal','Loan')  NOT NULL,
  `status` varchar(255)  NOT NULL,
  `project_size` varchar(255)  NOT NULL,
  `iban` varchar(255)  NOT NULL,
  `totalamount` varchar(255)  NOT NULL,
  `repaymentamount` varchar(255)  NOT NULL,
  `interestrate` varchar(255) NOT NULL,
  `repaymentrate` varchar(255)  NOT NULL,
  `remainingterm` varchar(255) NOT NULL,
  `building_id` INT (10) NOT NULL,
  PRIMARY KEY (`project_id`), UNIQUE (`name`,`iban`),
  FOREIGN KEY(building_id) REFERENCES buildings(building_id) ON DELETE CASCADE
);


INSERT INTO `projects`(`name`, `type`, `status`, `project_size`, `iban`,`totalamount`, `repaymentamount`, `interestrate`,`repaymentrate`,`remainingterm`,`building_id`) VALUES
('Rocket Launch Center Innsbruck','Loan','under review','3.000.000','AT236236','1.000.000','500.000','0.01','100.000','12','5'),
('Ozeandampferwerft Innsbruck','Deal','under review','100.000.000','AT2637347347','10.000.000','10.000.000','0.03','1.000.000','120','6'),
('Hornbach Innsbruck','Deal','under review','100.000.000','AT2637347347','10.000.000','10.000.000','0.03','1.000.000','120','8'),
('McDonalds Völs','Deal','under review','100.000.000','AT2637347347','10.000.000','10.000.000','0.03','1.000.000','120','10');


CREATE TABLE `customer_projects` (
  `customer_id` INT (10) NOT NULL,
  `project_id` INT (10) NOT NULL,
  `group_project` ENUM('yes','no') NOT NULL,
  `borrower_group` VARCHAR(255) NOT NULL,
  FOREIGN KEY(customer_id) REFERENCES customers(customer_id) ON DELETE CASCADE,
  FOREIGN KEY(project_id) REFERENCES projects(project_id) ON DELETE CASCADE
);
INSERT INTO `customer_projects`(`customer_id`, `project_id`, `group_project`, `borrower_group`) VALUES
('1','1','no','1'),
('1','2','no','1'),
('2','3','no','2'),
('2','4','no','2');


CREATE TABLE `collaterals` (
  `collateral_id` INT(10) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `project_id` INT NOT NULL,
  `building_id` INT NOT NULL,
  PRIMARY KEY (`collateral_id`),
  FOREIGN KEY(project_id) REFERENCES projects(project_id) ON DELETE CASCADE,
  FOREIGN KEY(building_id) REFERENCES buildings(building_id) ON DELETE CASCADE
);

INSERT INTO `collaterals`(`description`, `project_id`,`building_id`) VALUES
('This is a useless description.','1','1'),
('This is a useless description.','2','2'),
('This is a useless description.','2','3'),
('This is a useless description.','3','4'),
('This is a useless description.','4','7'),
('This is a useless description.','4','9');

CREATE TABLE `sessions` (
  `session_id` INT(10) NOT NULL AUTO_INCREMENT,
  `start_date_time` DATETIME NOT NULL,
  `duration_seconds` INT(255) NOT NULL,
  `useraccount_email` varchar(255) NOT NULL,
  PRIMARY KEY (`session_id`),
  FOREIGN KEY(useraccount_email) REFERENCES useraccounts(email) ON DELETE CASCADE
);

CREATE TABLE `log_data` (
  `log_id` INT(10) NOT NULL AUTO_INCREMENT,
  `access_date_time` DATETIME NOT NULL,
  `accessed_webpage` varchar(255) NOT NULL,
  `access_type` varchar(255) NOT NULL,
  `session_id` INT(10) NOT NULL,
  PRIMARY KEY (`log_id`),
  FOREIGN KEY(session_id) REFERENCES sessions(session_id) ON DELETE CASCADE
);
