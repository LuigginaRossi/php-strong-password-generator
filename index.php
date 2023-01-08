<?php

    include_once __DIR__ . '/functions.php'
    //il form passa sempre una stringa
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
    <div class="container text-center">
        <h1 class="py-5">PASSWORD GENERATOR</h1>

        <form action="" method="get">
            <div class="mb-3">
                <label for="exampleInputNumb" class="form-label">Enter desired password length:</label>
                <input type="number" class="form-control" id="exampleInputNumb" aria-describedby="number"
                name="lengthPassword">
                <div id="number" class="form-text">(Enter a number)</div>
            </div>
            <button>Reset</button>
            <button>Invia</button>

        </form>
        
        <div class="form-control"> 
            GENERATED PASSWORD:
            <?php echo randPassword() ?>
 
        </div>

    </div>

</body>

</html>