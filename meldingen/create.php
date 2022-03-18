<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <select type="group" id="group" class="form-input">
                    <option value="">- kies de type -</option>
                    <option value="Achtbaan">Achtbaan</option>
                    <option value="Draaiend">Draaiende Attractie</option>
                    <option value="Kinder">Kinderattractie</option>
                    <option value="Eten">Restaurant, cafe, etc</option>
                    <option value="Parkshow">Parkshow</option>
                    <option value="Water">Waterattractie</option>
                    <option value="Overig">Overig</option>
                </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="prio">Prioriteit:</label>
                <input type="checkbox" name="priority" id="priority">
                <label for="prio">heeft dit prioriteit?</label>
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-group">
                <label for="overig">Overige informatie:</label>
                <textarea name="overig" id="overig" cols="72" rows="4"></textarea>
            </div>
            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
