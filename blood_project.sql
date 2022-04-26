


CREATE DATABASE blood_project;


CREATE TABLE registration (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `p_number` int(15) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `upojila` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO registration (`id`, `name`, `email`, `p_number`, `blood_group`, `district`, `upojila`, `password`) VALUES
(1, 'Shiam', 'shiamjpi161@gmail.com', 1726721780, 'AB+', 'Jessore', 'Monirampur', '123456'),
(4, 'Shiam hos', 'shiamhos@gmail.com', 1578, 'AB+', 'Jes', 'mon', '123'),
(5, 'Bakkar', 'Bakkar@gmail.com', 1725, 'O+', 'Dhaka', 'Mirpur-10', '123456'),
(6, 'Shiam', 'shiamjpi161@gmail.com', 1726721780, 'AB+', 'Jessore', 'Monirampur', 'as744262'),
(7, 'f', 'fdf@gmail.com', 0, 'Select Blood Group', '', 'sw_admin_ashb', 'kcf1235.#as'),
(8, 'NAHIDA AKTER', 'fdf@gmail.com', 52, 'A+', 'jess', 'mon', '12'),
(9, '', '', 0, 'AB+', '', 'green_twn', 'green*to_wn5.');


ALTER TABLE registration
  ADD PRIMARY KEY (`id`);

ALTER TABLE registration
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
