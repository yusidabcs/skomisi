# skomisi

### Create Agents Tbl

```
CREATE TABLE `agents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `address` text,
  `telp` int(11) DEFAULT NULL,
  `hp` int(11) DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `bank_account_number` int(11) DEFAULT NULL,
  `bank_account_name` varchar(200) DEFAULT NULL,
  `contact_person` varchar(200) DEFAULT NULL,
  `agent_type` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
```
