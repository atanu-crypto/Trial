<!-- <?php
session_start();

if(!isset($_SESSION['usernamePass'])){
    header('location:index.php');
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="assets/css/stylehome.css"> -->

</head>

<body>

<!-- headerSection / header  -->

    <section id="headerSection">
        <div class="header">
            <div class="logo">
                <h1>wrp</h1>
            </div>

            <nav>
                    <a href="#homeSection">Home</a>
                    <a href="#whySection">why</a>
                    <a href="#aboutSection">about</a>
                    <a href="#contactSection">contact</a> 
            </nav>
        </div>
    </section>

<!-- homeSection / home -->

    <section id="homeSection">
        <div class="home">
            <h1>Connect Us</h1>
        </div>
    </section>


<!-- whySection / why -->


    <section id="whySection">
        <div class="why">
            <h1>Q1.How to Do?</h1>  

                <div class="comment_form">

                    <label for="comment">Comment:</label>

                        <form action="comment.php" method="post">
                            <textarea rows="5" placeholder="Comments Here..." name="commentarea"></textarea><br>
                            <button type="submit">Submit</button>
                        </form>

                </div>


                <div class="comments">
                    <table>
                    <tr>
                        <td>
                        <?php
                        
                        $conn = mysqli_connect("localhost","root","","registerdb");
                            if($conn-> connect_error)
                            {
                                die("Connetion faild: ".$conn-> connect_error);
                            }
                        
                        $sql = "select * from commentbox";
                        $result = $conn-> query($sql);
                        
                        if($result-> num_rows > 0)
                        {
                            while($row = $result-> fetch_assoc())
                            
                            {
                                echo "<tr><td>".$row['username']."</td><td>"."</td><td>".$row['comments']."</td></tr>";
                            }
                            echo "</table>";
                        }
                        else{
                            echo "No comments";
                        }
                        $conn-> close();
                        ?> 
                        
                        </td>
                    </tr>
                    </table> 

                </div>

                <div class="logout">
                    <a href="logout.php" id="logout">Logout </a>  
                </div>

        </div>
    </section>


<!-- aboutSection -->

    <section id="aboutSection">
        <h1>About Us</h1>
    </section>


<!-- contactSection -->

    <section id="contactSection">
        
    </section>


<!-- footerSection -->
    <section id="footerSection">
        &COPY; Designed by atanu
    </section>

</body>

</html>



<!-- Extra Code 
//  echo $_SESSION['usernamePass'];
                        //  echo $_SESSION['commentspass'];
// $sqlc = "select comments from commentbox inner join registertable on commentbox.comments = registertable.username";
                        // $sqllog = "select username from registertable";
                        // $resultcomm = $conn-> query($sqlcomm);
                        // $resultlog = $conn-> query($sqllog);
                        // if($resultcomm-> num_rows > 0)
// $result = mysqli_query($conn,$sqlcomm);
                        // if(mysqli_num_rows($result) > 0)
// while($row = mysqli_fetch_array($resultcomm))
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
                        
                        $conn = mysqli_connect("localhost","root","","registerdb");
                            if($conn-> connect_error)
                            {
                                die("Connetion faild: ".$conn-> connect_error);
                            }
                        
                        $sql = "select * from commentbox";
                        $result = $conn-> query($sql);
                        
                        if($result-> num_rows > 0)
                        {
                            while($row = $result-> fetch_assoc())
                            
                            {
                                echo "<tr><td>".$row['username']."</td><td>"."</td><td>".$row['comments']."</td></tr>";
                            }
                            echo "</table>";
                        }
                        else{
                            echo "No comments";
                        }
                        $conn-> close();
                        ?> 
                        <?php
                            
                            $conn = mysqli_connect("localhost","root","","registerdb");
                                if($conn-> connect_error)
                                {
                                    die("Connetion faild: ".$conn-> connect_error);
                                }
                            
                            $sql = "select * from commentbox";
                            $result = $conn-> query($sql);
                            
                            if($result-> num_rows > 0)
                            {
                                while($row = $result-> fetch_assoc())
                                
                                {
                                    echo '<br>'.$row['username'].'<br>';
                                }
                            }
                            else{
                                echo "No comments";
                            }
                            $conn-> close();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <?php
                            
                            $conn = mysqli_connect("localhost","root","","registerdb");
                                if($conn-> connect_error)
                                {
                                    die("Connetion faild: ".$conn-> connect_error);
                                }
                            
                            $sql = "select * from commentbox";
                            $result = $conn-> query($sql);
                            
                            if($result-> num_rows > 0)
                            {
                                while($row = $result-> fetch_assoc())
                                
                                {
                                    echo '<br>'.$row['comments'].'<br>';
                                }
                            }
                            else{
                                echo "No comments";
                            }
                            $conn-> close();
                            ?>-->