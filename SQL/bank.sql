 Database: `bank`

Table structure for table `users'
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4_unicode_ci;
Insert:
INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Salman', 'khan@gmail.com', 50000),
(2, 'Kiara', 'advani@gmail.com', 30000),
(3, 'Shahrukh', 'shah@gmail.com', 40000),
(4, 'Priyanka', 'chopra@gmail.com', 50000),
(5, 'Shahid', 'kapoor@gmail.com', 40000),
(6, 'Ranbir', 'singh@gmail.com', 30000),
(7, 'Deepika', 'padukone@gmail.com', 50000),
(8, 'Juhi', 'chawla@gmail.com', 40000),
(9, 'Nick', 'jonas@gmail.com', 30000),
(10, 'Taapsee', 'pannu@gmail.com', 50000);
2. Table structure for table `transaction`
CREATE TABLE `transaction` (
  `sender_name `varchar(255) NOT NULL,
  `receiver_name` varchar(255)  NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4_general_ci;
