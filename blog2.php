<?php

include('Connection.php');
$sql = "SELECT * FROM comment";
$result = mysqli_query($conn, $sql);
$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);



if (isset($_POST['comment_submit'])) {
    $username= $_POST['username'];
    $message = $_POST['message'];
    $query = "INSERT INTO comment(username,message) VALUES ('" . $username . "','" . $message . "')";
    mysqli_query($conn, $query);
    header('Refresh: 0');
}



?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
        .comment_class {

            width: 1250px;
            height: 550px;
            background-color: white;
            padding: 10px;
            overflow: hidden;
            overflow-y: scroll;
        }

        
        body {
            margin-top: 20px;
            background: #eee;
        }

        @media (min-width: 0) {
            .g-mr-15 {
                margin-right: 1.07143rem !important;
            }
        }

        @media (min-width: 0) {
            .g-mt-3 {
                margin-top: 0.21429rem !important;
            }
        }

        .g-height-50 {
            height: 50px;
        }

        .g-width-50 {
            width: 50px !important;
        }

        @media (min-width: 0) {
            .g-pa-30 {
                padding: 2.14286rem !important;
            }
        }

        .g-bg-secondary {
            background-color: #fafafa !important;
        }

        .u-shadow-v18 {
            box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
        }

        .g-color-gray-dark-v4 {
            color: #777 !important;
        }

        .g-font-size-12 {
            font-size: 0.85714rem !important;
        }

        .media-comment {
            margin-top: 20px
        }
    </style>
   <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-dark">
        <a class="navbar-brand text-white" href="home.php">Go Back</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Features</a>
        <a class="nav-item nav-link" href="#">Pricing</a>
        <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
            </div>
        </div>
    </nav>
</head>

<body>
    


    <div class="container">
    <div class="group">
      <h1 class="text text-center bw-bold">Please give us your feedback to improve our services : </h1>
    </div>
  </div>
    <div class="row" style="margin-top:120px; width: 600px; margin-bottom: 20px;">
        <div class="col-4">
            <div class="comment_class">

                <div class="container bg-secondary">

                    <div class="row">
                        <?php foreach ($comments as $comment) { ?>

                            <div class="col-md-8">

                                <div class="media g-mb-30 media-comment">

                                    <!-- <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description"> -->
                                    <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="width: 1000px; border-radius: 30px;">

                                        <div class="g-mb-15">
                                            <h5 class="h5 g-color-gray-dark-v1 mb-0"><?php echo $comment['username']; ?></h5>

                                            <br>
                                            <span class="g-color-gray-dark-v4 g-font-size-12"><?php echo $comment['date']; ?></span>
                                        </div>

                                        <p><?php echo $comment['message']; ?></p>

                                       
                                    </div>
                                </div>
                            </div>
                        <?php } ?>



                    </div>
                </div>



            </div>
        </div>
        <!-- <div class="col-4">
            <p>asdasd</p>
        </div> -->
    </div>
    <section class="mt-10" style="margin: 30px; width: 280px;">
        <div class="container">

            <div class="col-8">
                <form method="POST">
                    <div class="container" style = "border-radius: 30px;">
                            <label for = "username" style = "margin-bottom: 20px;">Username</label>
                            <input type = "text" name = "username" id = "username" style=" width : 500px; border-radius: 30px; padding: 20px; margin-bottom: 40px;" placeholder="Enter your name please " />
                    </div>
                    <div class="container" style="border-radius: 30px;">
                    <label for = "comment_section" style = "margin-bottom: 30px;">Comment</label>

                        <textarea id = "comment_section" style="border-radius: 30px; padding: 20px;" name="message" id="" cols="100" rows="10" placeholder="Enter your comment here :- "></textarea>
                    </div>

                    <div style="margin-top: 30px;">
                        <input  style="border-radius: 30px;" type="submit" class="btn btn-success" value="Post Comment" name="comment_submit">
                    </div>
                </form>
            </div>
        </div>

    </section>
    <?php include('footer.php'); ?>
</body>

</html>