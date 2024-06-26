# star-light-cinema

Movie Booking System

---

                    STAR LIGHT CINEMA (SLC)

Welcome to STAR LIGHT CINEMA (SLC), your ultimate destination for seamless and immersive movie experiences. SLC is a cutting-edge movie booking system designed to revolutionize the way you discover, book, and enjoy movies at our state-of-the-art cinemas.

At SLC, we're dedicated to providing you with an unparalleled movie-going experience, combining advanced technology with user-friendly interfaces to streamline the entire process. Whether you're a casual movie enthusiast or a seasoned cinephile, SLC caters to all your entertainment needs, offering a diverse selection of blockbuster hits, indie gems, and timeless classics.

With SLC, booking your favorite movie tickets is quick, convenient, and hassle-free. Our intuitive platform allows you to browse upcoming movie releases, check showtimes, and reserve seats with just a few clicks. Say goodbye to long queues and last-minute rushes – SLC puts you in control of your movie-going experience, ensuring that every visit to the cinema is memorable and enjoyable.

But SLC is more than just a movie booking system – it's a community hub where movie lovers come together to share their passion for cinema. Explore our interactive features, connect with fellow movie buffs, and stay up-to-date with the latest industry news and exclusive promotions.

Join us at STAR LIGHT CINEMA and embark on a cinematic journey like never before. Whether you're seeking thrills, laughter, or heartfelt moments, SLC promises to deliver an unforgettable cinematic adventure that will leave you wanting more.

Experience the magic of movies with STAR LIGHT CINEMA – where every film comes to life!

---

Instructions to implement SLC in your machines

1. Open the project on any text editor or IDE and start coding.
2. Make sure you have XAMPP installed, if not download it from https://www.apachefriends.org/download.html
3. Place the entire project folder inside the htdocs directory of XAMPP installation path i.e., /xampp/htdocs/.
4. Start the APACHE server and MySQL
5. Create a database named "star-light" in phpmyadmin
6. Import the sql file from the 'db' folder into that created database. The filename is "slc_database.sql".
7. Open any browser (CHROME) and type the url localhost/star-light-cinema

Rstrictions

1. All admin pages are restriceted for admins only
2. All users can book tickets including guest user
3. Guest users cannot access admin panel
4. Payment gateway has been disabled due to some issues regarding payment processing. It will be enabled once the issue is resolved
5. Only manager can add new admin

Instructions to access Admin panel

1. First register yourself
2. Make sure you enter your email as "<yourname>@manager.slc.lk"
3. After successful registration, the system will take you back to the login page
4. Once you have successfully registered, import the sql file from 'db' folder into created database. The filename is "manager.slc".
5. Then, in the login page enter username and password which you used during registration
6. Now you will be redirected to admin dashboard page
