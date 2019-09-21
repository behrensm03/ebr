<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Michael Behrens">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="styles/main.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <script type="text/javascript" src="js/custom.js"></script>
        <title>Electric Buffalo Records - Artists</title>
        <link rel="icon" type="image/png" href="images/ebr.png">
    </head>

    <body>

        <?php include("includes/nav.php") ?>

        <div class="top artists">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 title">
                    <div class="underline">Artists</div>
                </div>
            </div>

            <?php
            $artistImages = array(
                'sample.png',
                'sample.png',
                'sample.png'
            );
            $artistNames = array(
                'Artist 1',
                'Artist 2',
                'Artist 3'
            );
            $artistBios = array(
                'artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1',
                'artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1',
                'artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1 artist 1'
            );

            // include("includes/row.php");
            // include("includes/row.php");
            // include("includes/row.php");
            ?>

            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 artist left">
                    <?php 
                        $randomInt = rand(0,2);
                        $randomClass = 'artist' . $randomInt;
                    ?>
                    <a href="noah-thomas.php">
                    <div class="artist-name <?php echo $randomClass; ?>" id="artist1">
                        <div class="">noah</div>
                    </div>
                    </a>   
                </div>
                <div class="col-lg-4 artist right">
                    <?php 
                        $randomInt = rand(3,5);
                        $randomClass = 'artist' . $randomInt;
                    ?>
                    <div class="artist-name <?php echo $randomClass; ?>" id="artist1">
                        paradise
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 artist left">
                    <?php 
                        $randomInt = rand(6,8);
                        $randomClass = 'artist' . $randomInt;
                    ?>
                    <div class="artist-name <?php echo $randomClass; ?>" id="artist1">
                        syncopators
                    </div>
                </div>
                <div class="col-lg-4 artist right">
                    <?php 
                        $randomInt = rand(9,11);
                        $randomClass = 'artist' . $randomInt;
                    ?>
                    <div class="artist-name <?php echo $randomClass; ?>" id="artist1">
                        zen
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 artist left">
                    <?php 
                        $randomInt = rand(12,14);
                        $randomClass = 'artist' . $randomInt;
                    ?>
                    <div class="artist-name <?php echo $randomClass; ?>" id="artist1">
                        hugh wilhelm
                    </div>
                </div>
            </div>





        </div>


        <?php include("includes/footer.php"); ?>


    </body>


</html>