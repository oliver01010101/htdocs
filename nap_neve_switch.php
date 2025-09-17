<?php
$result = null;
$is_valid = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        ///üres, nem szám | nem egész szám | nem 1-7
        $number = (int)$_POST["day"] ?? 0;
        $result = "";
        switch($number){
            case 1: $result .= "Hétfő"; break;
            case 2: $result .= "Kedd"; break;
            case 3: $result .= "Szerda"; break;
            case 4: $result .= "Csütörtök"; break;
            case 5: $result .= "Péntek"; break;
            case 6: $result .= "Szombat"; break;
            case 7: $result .= "Vasárnap"; break;
            default: $result .= "Érvénytelen sorszám (1-7)"; break;
        }
    }
?>
<form>
    <label>
        Nap sorszáma(1-7):
        <input type="number" name="day" id="day" min="0" max="7">
    </label>
    <button type="submit">Kiír</button>
</form>
<?php if($result): ?>
<p>
    <?= $result ?>
</p>
<?php endif; ?>