<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Inserting into Movie Table
        $title = $_POST['title'];
        $director = $_POST['director'];
        $rating = $_POST['rating'];
        $minutes = $_POST['duration'];
        $description = $_POST['description'];
        $language = $_POST['language'];
        $status = $_POST['status'];
        
        $hour = intval($minutes) / 60;
        $min = intval($minutes) % 60;
        $min = str_pad($min, 2, '0', STR_PAD_LEFT); // Add leading zero if less than 10
        $duration = sprintf("%02d:%s:00", $hour, $min);


        $sql_movie = "INSERT INTO Movie (Title,Director,Rating,Description,Duration,language,Movie_Status)
                VALUES('$title','$director','$rating','$description','$duration','$language','$status')";

        mysqli_query($conn, $sql_movie);

        // Retrieving Movie_Id
        $sql_movie_id = "SELECT MID FROM Movie WHERE Title = '" . $title . "'";
        $row1 = mysqli_query( $conn,$sql_movie_id );
        $movie_id = mysqli_fetch_assoc( $row1 )['MID'];

        
        // Inserting Data Into Poster table
        $poster = $_POST['posterName'];
        $currentDate = date("Y-m-d");
        $sql_poster = "INSERT INTO Poster (Name, Created_Date, Movie_ID)
                        VALUES ('$poster','$currentDate', '$movie_id')";
        mysqli_query($conn, $sql_poster);

        
        // Inserting into Multi Value table of Movie entity

        foreach ( $_POST['genre'] as $key => $value ) {
            $sql_genre = "INSERT INTO Movie_Genre (Genre,Movie_ID)
                    VALUES ('$value',$movie_id)";
            mysqli_query( $conn,$sql_genre );
        }

        
        foreach ( $_POST['castName'] as $key => $value ) {
            $castPic = $_POST['castPic'][$key];
            $sql_cast = "INSERT INTO Movie_Cast (Actor_name,Movie_ID,A_Pic_name)
                    VALUES ('$value','$movie_id','$castPic')";
            mysqli_query( $conn , $sql_cast );
        }
        

        // Inserting into shows table  with only one show for now.
        $show_date = isset($_POST['show_date']) ? $_POST['show_date'] : "";
        $hall = isset($_POST['hall']) ? $_POST['hall'] : "";
        if($hall == 'H-1') {
            $capacity = 50;
        } elseif ($hall == 'H-2'){
            $capacity = 45;
        } else if ($hall == 'H-3') {
            $capacity = 20;
        }
        $show_time = isset($_POST['time']) ? $_POST['time']  : "";
        $price = isset($_POST['price']) ? $_POST['price'] : "";
        if (!empty($show_time)){
            foreach ( $show_time as $d => $time) {
                $sql_shows = "INSERT INTO Shows (Movie_ID,Start_Time,Date,Hall_ID,price,Available)
                    VALUES('$movie_id','$time','$show_date','$hall','$price','$capacity')";
                mysqli_query( $conn , $sql_shows );
            }
        }else{
            $show_time = "";
        }

        

        // Inserting into Shows Table
        /*
        // belove codes are related inserting data when there is a multiple  show in one movie(hidden due to error)
        foreach ( $_POST['show_date'] as $key ){
            $show_date = $_POST['show_date'][$key];
            $hall = $_POST['hall' . $key];

            foreach ( $_POST['time'][$key]  as $t => $show_time ){
                $sql_shows = "INSERT INTO Shows (Movie_ID,Sart_Time,Date,Hall_ID)
                VALUES('$movie_pk','$show_time','$show_date','$hall')";

                mysqli_query($conn, $sql_shows);
            }  
        }
        */
        echo   "<script>
                window.onload = function() {
                    alert('Movie added successfully!');
                    window.history.back();
                };
                </script>";
        
    }
?>