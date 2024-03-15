<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - prima pagina</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- style -->
    <style>

        #user-text {
            width: 300px;
        }

    </style>

</head>

<body>
    
    <h1 class="text-center">BadWords</h1>
    
    <div class="container border border-primary p-3">

        <form action="results.php" class="row row-gap-3">

            <div class="col-12">
                <label for="">Inserisci un testo:</label>
                <!-- <input type="text" id="user-text" name="user-text" placeholder="Inserisci qui"> -->
                <textarea class="form-control w-100" id="user-text" name="user-text" rows="3"></textarea>
            </div>

            <div class="col-6">
                <label for="">Inserisci la parola da censuare:</label>
                <input type="text" id="user-word" name="user-word" placeholder="Inserisci qui">
            </div>

            <div class="row">
                <input type="submit" class="col-2 offset-5 btn btn-outline-primary">
            </div>
        
        </form>


    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>