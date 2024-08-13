<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Angka pertama" required>
        <select name="operator" required>
            <option value="add">Tambah</option>
            <option value="sub">Kurangi</option>
            <option value="mul">Kali</option>
            <option value="div">Bagi</option>
        </select>
        <input type="number" name="num2" placeholder="Angka kedua" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = 0;

        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "sub":
                $result = $num1 - $num2;
                break;
            case "mul":
                $result = $num1 * $num2;
                break;
            case "div":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Tidak bisa membagi dengan nol!";
                    exit;
                }
                break;
        }

        echo "<h3>Hasil: $result</h3>";
    }
    ?>
</body>
</html>
