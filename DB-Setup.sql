BEGIN;
--
-- Table structure for table `gamedata`
--

CREATE TABLE IF NOT EXISTS `gamedata` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(3) NOT NULL,
  `score` int(10) NOT NULL,
  `reached` varchar(12) NOT NULL,
  `hints` int(3) NOT NULL,
  `qlevel` int(3) NOT NULL,
  `hlevel` int(3) NOT NULL,
  `ques` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gamedata`
--

INSERT INTO `gamedata` (`userid`, `level`, `score`, `reached`, `hints`, `qlevel`, `hlevel`, `ques`, `ans`) VALUES
(1, 1, 1000, '1390067826', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `email` varchar(80) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(2) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `pass`, `email`, `name`, `gender`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'Shadab Zafar', 'M');

COMMIT;
