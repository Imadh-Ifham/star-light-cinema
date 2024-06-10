-- Offer Table
INSERT INTO Offer (type, Created_Date, Name) VALUES 
('Discount', '2024-04-01', 'Spring Sale'),
('Promotion', '2024-04-15', '2-for-1 Deal'),
('Discount', '2024-04-20', 'Weekend Special'),
('Promotion', '2024-04-25', 'Family Package'),
('Discount', '2024-04-30', 'Student Discount');

-- Movie Table
INSERT INTO Movie (Title, Director, Duration, Description, IMDB_Rating, Movie_Status, OID) VALUES 
('Spider Man', 'Sam Raimi', '02:01:00', 'A teenager gains spider-like abilities and decides to use his newfound powers to fight crime as Spider-Man.', 7, 'Now Showing', 1),
('Kung Fu Panda 4', 'Jen Yuh Nelson', '01:35:00', 'The story focuses on Po who now lives his dream as the Dragon Warrior, protecting the Valley of Peace alongside his friends and fellow kung fu masters, the Furious Five.', 8, 'Now Showing', 2),
('Heart of Stone', 'Tom Harper', '01:58:00', 'A woman with a mysterious past is hired to transport a valuable item from one continent to another, but they must navigate a web of danger and betrayal.', 6, 'Now Showing', 3),
('Iron Man', 'Jon Favreau', '02:06:00', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil.', 8, 'Coming Soon', 4),
('Madame Webb', 'S.J. Clarkson', '02:20:00', 'The story of Cassandra Webb, a clairvoyant mutant who is also known as Madame Web, navigating her life amidst her unique abilities.', 7, 'Coming Soon', 5);

-- Movie Genre Table
INSERT INTO Movie_Genre (MID, Genre) VALUES 
(1, 'Action'),
(1, 'Adventure'),
(2, 'Animation'),
(2, 'Comedy'),
(3, 'Action'),
(3, 'Thriller'),
(4, 'Action'),
(4, 'Sci-Fi'),
(5, 'Action'),
(5, 'Fantasy');

-- Movie Cast Table
INSERT INTO Movie_Cast (MID, Actor_name) VALUES 
(1, 'Tobey Maguire'),
(1, 'Kirsten Dunst'),
(2, 'Jack Black'),
(2, 'Angelina Jolie'),
(3, 'Tom Holland'),
(3, 'Emily Blunt'),
(4, 'Robert Downey Jr.'),
(4, 'Gwyneth Paltrow'),
(5, 'To Be Cast'),
(5, 'To Be Cast');

-- Users Table
INSERT INTO Users (Email, Gender, First_Name, Last_Name, City) VALUES 
('user1@example.com', 'Male', 'John', 'Doe', 'New York'),
('user2@example.com', 'Female', 'Jane', 'Smith', 'Los Angeles'),
('user3@example.com', 'Male', 'Michael', 'Johnson', 'Chicago'),
('user4@example.com', 'Female', 'Emily', 'Brown', 'Houston'),
('user5@example.com', 'Male', 'David', 'Wilson', 'Miami');

-- Hall Table
INSERT INTO Hall (Hall_ID, Name, Capacity, Address, Type, Screen_Size) VALUES 
('H01', 'Main Hall', 200, '123 Main St, CityA', 'Standard', 'Large'),
('H02', 'VIP Hall', 50, '456 Elm St, CityB', 'VIP', 'Extra Large'),
('H03', 'Family Hall', 150, '789 Oak St, CityC', 'Standard', 'Medium'),
('H04', 'Small Hall', 100, '101 Pine St, CityD', 'Standard', 'Small'),
('H05', 'Premium Hall', 80, '202 Maple St, CityE', 'Premium', 'Medium');

-- Shows Table
INSERT INTO Shows (Start_Time, Hall_ID, Date, MID, Price, Availability) VALUES 
('12:00:00', 'H01', '2024-05-05', 1, 10.00, 150),
('14:30:00', 'H02', '2024-05-05', 2, 12.00, 40),
('17:00:00', 'H03', '2024-05-05', 3, 15.00, 120),
('12:00:00', 'H04', '2024-05-06', 4, 8.00, 80),
('15:00:00', 'H05', '2024-05-06', 5, 10.00, 70);

-- Poster Table
INSERT INTO Poster (Name, Created_Date, MID) VALUES 
('Spider Man Poster', '2024-04-01', 1),
('Kung Fu Panda 4 Poster', '2024-04-15', 2),
('Heart of Stone Poster', '2024-04-20', 3),
('Iron Man Poster', '2024-04-25', 4),
('Madame Webb Poster', '2024-04-30', 5);

-- Admins Table
INSERT INTO Admins (First_Name, Last_Name, Email, Role, Password, Phone_Number) VALUES 
('Admin1', 'Smith', 'admin1@example.com', 'Manager', 'password1', '1234567890'),
('Admin2', 'Johnson', 'admin2@example.com', 'Supervisor', 'password2', '9876543210'),
('Admin3', 'Williams', 'admin3@example.com', 'Coordinator', 'password3', '5551234567'),
('Admin4', 'Brown', 'admin4@example.com', 'Manager', 'password4', '9998887777'),
('Admin5', 'Jones', 'admin5@example.com', 'Supervisor', 'password5', '4445678901');

-- Movie Admin Table
INSERT INTO Movie_Admin (MID, Admin_ID, Action, Date) VALUES 
(1, 1, 'Add', '2024-04-01'),
(2, 2, 'Add', '2024-04-15'),
(3, 3, 'Add', '2024-04-20'),
(4, 4, 'Add', '2024-04-25'),
(5, 5, 'Add', '2024-04-30');

-- Admin Offer Table
INSERT INTO Admin_Offer (Admin_ID, OID, Action, Date) VALUES 
(1, 1, 'Add', '2024-04-01'),
(2, 2, 'Add', '2024-04-15'),
(3, 3, 'Add', '2024-04-20'),
(4, 4, 'Add', '2024-04-25'),
(5, 5, 'Add', '2024-04-30');

-- Admin Poster Table
INSERT INTO Admin_Poster (Admin_ID, Poster_ID, Action, Date) VALUES 
(1, 1, 'Add', '2024-04-01'),
(2, 2, 'Add', '2024-04-15'),
(3, 3, 'Add', '2024-04-20'),
(4, 4, 'Add', '2024-04-25'),
(5, 5, 'Add', '2024-04-30');
