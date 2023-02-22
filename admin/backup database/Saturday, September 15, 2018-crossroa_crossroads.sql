

CREATE TABLE `walkins` (
  `res_id` varchar(500) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pax` text NOT NULL,
  `res_date` text NOT NULL,
  `res_time` varchar(30) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`res_id`),
  UNIQUE KEY `res_time` (`res_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

INSERT INTO walkins VALUES("CFL-RES-40145","Ian","Rosales","4","2018-09-14","3:00-5:00 pm","confirmed");



