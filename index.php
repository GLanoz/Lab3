<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Lab-3</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='style.css'>
</head>

<title>Lab-3</title>

<body>

    <div class="wrapper">

        <div class="header"> <?php echo "<h1> Я вивчаю PHP! </h1>"; ?> </div>

        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
        </label>
        <div id="sidebarMenu">
            <ul class="sidebarMenuInner">
                <li>Владислав Писаренко <span>Я вивчаю PHP!</span></li>
                <li><a href="https://github.com/GLanoz" target="_blank">GitHub</a></li>
                <li><a href="https://www.linkedin.com/in/vladyslav-pysarenko-396670220/" target="_blank">Linkedin</a></li>
            </ul>
        </div>


        <section class="table-item" <h1>Таблиця</h1>

            <table border="table-border">
                <?php

                $tableSize = 10;

                echo "<tr><th>0</th>";
                for ($index = 1; $index <= $tableSize; $index++) {
                    echo "<th> $index </th>";
                }
                echo " </tr> ";

                for ($index = 1; $index <= $tableSize; $index++) {
                    echo "<tr> <th> $index </th>";
                    for ($index2 = 1; $index2 <= $tableSize; $index2++) {
                        echo "<td>" . ($index * $index2) . "</td>";
                    }
                    echo " </tr> ";
                }
                ?>
            </table>

            <section class="array">
                <h1>Масив</h1>
                <?php
                // Створюємо масив з 10 випадкових чисел в діапазоні від -10 до 10
                $numbers = array();
                for ($i = 0; $i < 10; $i++) {
                    $numbers[] = rand(-10, 10);
                }

                // Виводимо масив на екран
                echo "<h2>Масив у вигляді рядка:</h2>";
                foreach ($numbers as $number) {
                    echo $number . " ";
                }

                echo "<h2>Масив у вигляді стовпчика:</h2>";
                foreach ($numbers as $number) {
                    echo $number . "<br>";
                }

                echo "<h2>Масив у вигляді print_r:</h2>";
                echo "<pre>";
                print_r($numbers);
                echo "</pre>";

                $sum = 0;
                foreach ($numbers as $number) {
                    $sum += $number;
                }
                echo "<h2>Сума всіх елементів масиву: $sum</h2>";

                $count = 0;
                $product = 1;
                $positive_numbers_sum = 0;
                foreach ($numbers as $number) {
                    if ($number > 0) {
                        $count++;
                        $positive_numbers_sum += $number;
                    }
                }
                if ($count > 0) {
                    $average = $positive_numbers_sum / $count;

                    foreach ($numbers as $number) {
                        if ($number > $average) {
                            $product *= $number;
                        }
                    }

                    echo "<h2>Середнє арифметичне серед додатних чисел: $average</h2>";
                    echo "<h2>Добуток всіх чисел, більших за середнє арифметичне: $product</h2>";
                } else {
                    echo "<h2>В масиві немає додатних чисел</h2>";
                }
                ?>
            </section>
        </section>

</body>
<footer>
    <div class="footer-wrapper">
        <p>&copy; 2023 Vladyslav Pysarenko. All rights reserved.</p>
        <p>Все виглядає сиро і не гарно, ну я думаю фронт же був і не потрібен, зробив просто для себе)</p>
    </div>
</footer>

</html>