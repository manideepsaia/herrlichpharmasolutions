

CREATE TABLE `tab_cust_requests` (
  `REQ_ID` varchar(35) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(75) NOT NULL,
  `PHONE` varchar(35) NOT NULL,
  `ADDRESS` varchar(250) NOT NULL,
  `MESSAGE` varchar(500) NOT NULL,
  `REQ_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

