INSERT INTO Hall (Hall_ID,Name,Screen_Size,type,Capacity,Address)
VALUES  ('H-1','Vega','16X','2D',50,'123, Galle Road, Colombo 03'),
		('H-2','Sirius','16X','2D',45,'123, Galle Road, Colombo 03'),
        ('H-3','Polaris','4X','3D',20,'123, Galle Road, Colombo 03');

INSERT INTO Movie (Title, Director, Rating, Description, Duration, Language, Movie_Status)
VALUES 
    ('The Dark Knight', 'Christopher Nolan', 9, 'A vigilante known as Batman wreaks havoc on crime in Gotham City.', '02:32:00', 'English', 'Ongoing'),
    ('Inception', 'Christopher Nolan', 8, 'A thief who enters the dreams of others to steal their secrets.', '02:28:00', 'English', 'Ongoing'),
    ('Interstellar', 'Christopher Nolan', 9, 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', '02:49:00', 'English', 'Ongoing'),
    ('Shawshank Redemption', 'Frank Darabont', 10, 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', '02:22:00', 'English', 'Ongoing'),
    ('The Matrix', 'Lana Wachowski, Lilly Wachowski', 8, 'A computer hacker learns about the true nature of reality and his role in the war against its controllers.', '02:16:00', 'English', 'Ongoing'),
    ('The Godfather', 'Francis Ford Coppola', 10, 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', '02:55:00', 'English', 'Upcoming'),
    ('Fight Club', 'David Fincher', 9, 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.', '02:19:00', 'English', 'Upcoming'),
    ('Viswasam', 'Siva', 8, 'A village chieftain struggles to protect his family when he is caught in a rivalry with a local politician.', '02:33:00', 'Tamil', 'Ongoing'),
    ('Kaithi', 'Lokesh Kanagaraj', 9, 'An ex-convict decides to meet his daughter for the first time and attempts to get back home with her amidst chaos.', '02:25:00', 'Tamil', 'Ongoing');


INSERT INTO Shows (Movie_ID, Start_Time, Date, Hall_ID, Price, Available)
VALUES 
    (1, '09:00:00', '2024-04-27', 'H-1', 600.00, 50),
    (2, '09:00:00', '2024-04-27', 'H-2', 600.00, 45),
    (3, '09:00:00', '2024-04-27', 'H-3', 1000.00, 20),
    (4, '09:00:00', '2024-04-27', 'H-1', 600.00, 50),
    (5, '09:00:00', '2024-04-27', 'H-2', 600.00, 45),
    (8, '09:00:00', '2024-04-27', 'H-3', 1000.00, 20),
    (9, '09:00:00', '2024-04-27', 'H-1', 600.00, 50);

INSERT INTO Poster (Name, Created_Date, Movie_ID, isAd)
VALUES 
    ('darkknight.jpg', '2024-04-26', 1, FALSE),
    ('inception.jpg', '2024-04-26', 2, FALSE),
    ('interstellar.jpg', '2024-04-26', 3, FALSE),
    ('shawshank.jpg', '2024-04-26', 4, FALSE),
    ('matrix.jpg', '2024-04-26', 5, FALSE),
    ('godfather.jpg', '2024-04-26', 6, FALSE),
    ('fightclub.jpg', '2024-04-26', 7, FALSE),
    ('viswasam.jpg', '2024-04-26', 8, FALSE),
    ('kaithi.jpg', '2024-04-26', 9, FALSE);

INSERT INTO Poster (Name, Created_Date, isAd, related_movie)
VALUES 
    ('offer1.png', '2024-04-26', 1, ad poster),
    ('slc.jpg', '2024-04-26', 1, Star Light Cinema),
    ('offer2.png', '2024-04-26', 1, ad poster),
    ('slc.jpg', '2024-04-26', 1, Star Light Cinema),
    ('offer3.png', '2024-04-26', 1, ad poster);

INSERT INTO Movie_Genre (Genre, Movie_ID)
VALUES 
    ('Action', 1), ('Thriller', 1), ('Crime', 1), 
    ('Action', 2), ('Sci-Fi', 2),
    ('Sci-Fi', 3), ('Drama', 3), ('Adventure', 3),
    ('Drama', 4), ('Crime', 4), ('Adventure', 4), 
    ('Action', 5), ('Sci-Fi', 5), 
    ('Drama', 6), ('Crime', 6),
    ('Drama', 7), ('Thriller', 7), ('Action', 7),
    ('Action', 8), ('Drama', 8), ('Thriller', 8),
    ('Action', 9), ('Thriller', 9), ('Crime', 9);


INSERT INTO Movie_Cast (Actor_name, Movie_ID, A_Pic_name)
VALUES 
    ('Christian Bale', 1, 'christian_bale.jpg'), -- The Dark Knight
    ('Heath Ledger', 1, 'heath_ledger.jpg'),
    ('Leonardo DiCaprio', 2, 'leonardo_dicaprio.jpg'), -- Inception
    ('Joseph Gordon-Levitt', 2, 'joseph_gordon_levitt.jpg'),
    ('Matthew McConaughey', 3, 'matthew_mcconaughey.jpg'), -- Interstellar
    ('Anne Hathaway', 3, 'anne_hathaway.jpg'),
    ('Tim Robbins', 4, 'tim_robbins.jpg'), -- Shawshank Redemption
    ('Morgan Freeman', 4, 'morgan_freeman.jpg'),
    ('Keanu Reeves', 5, 'keanu_reeves.jpg'), -- The Matrix
    ('Carrie-Anne Moss', 5, 'carrie_anne_moss.jpg'),
    ('Marlon Brando', 6, 'marlon_brando.jpg'), -- The Godfather
    ('Al Pacino', 6, 'al_pacino.jpg'),
    ('Brad Pitt', 7, 'brad_pitt.jpg'), -- Fight Club
    ('Edward Norton', 7, 'edward_norton.jpg'),
    ('Ajith Kumar', 8, 'ajith_kumar.jpg'), -- Viswasam
    ('Nayanthara', 8, 'nayanthara.jpg'),
    ('Karthi', 9, 'karthi.jpg'), -- Kaithi
    ('Narain', 9, 'narain.jpg');