<html>
    <head>
        <title>Kalender</title>
        <meta charset="UTF-8" />
        <script>
            function goLastMonth(month, year)
            {
                if (month == 1)
                {
                    --year;
                    month = 12;
                }
                --month;
                var monthstring = "" + month + "";
                var monthlength = monthstring.length;
                if (monthlength <= 1)
                {
                    monthstring = "0" + monthstring;
                }
                document.location.href = "<?php $_SERVER['PHP_SELF']; ?>?month=" + monthstring + "&year=" + year;
            }

            function goNextMonth(month, year)
            {
                if (month == 12)
                {
                    ++year;
                    month = 1;
                }
                ++month;
                var monthstring = "" + month + "";
                var monthlength = monthstring.length;
                if (monthlength <= 1)
                {
                    monthstring = "0" + monthstring;
                }
                document.location.href = "<?php $_SERVER['PHP_SELF']; ?>?month=" + monthstring + "&year=" + year;
            }
        </script>
    </head>
    <body>
        <?php
        if (isset($_GET['day'])) {
            $day = $_GET['day'];
        } else {
            $day = date("j");
        }

        if (isset($_GET['month'])) {
            $month = $_GET['month'];
        } else {
            $month = date("m");
        }
        if (isset($_GET['year'])) {
            $year = $_GET['year'];
        } else {
            $year = date("y");
        }


        //huidige tijd door de pc
        $currentTimeStamp = strtotime("$day-$month-$year");
        $monthName = date("F", $currentTimeStamp);
        $numDays = date("t", $currentTimeStamp);
        $counter = 0;
        ?>

        <table border="1">
            <tr>
                <td><input style="width:50px;" type="button" value="<" name="previousbutton" onclick="goLastMonth(<?php echo $month . "," . $year ?>)"></td>
                <!--zet de maand en jaar in de eerste cell-->
                <td colspan="5"> <?php echo $monthName . ", " . $year; ?></td>
                <td><input style="width:50px;" type="button" value=">" name="nextbutton" onclick="goNextMonth(<?php echo $month . "," . $year ?>)"></td>

            </tr>
            <tr>
                <td width="50px">Sun</td>
                <td width="50px">Mon</td>
                <td width="50px">Tue</td>
                <td width="50px">Wed</td>
                <td width="50px">Thu</td>
                <td width="50px">Fri</td>
                <td width="50px">Sat</td>
            </tr>
            <?php
            echo"<tr>";
// alle dagen afdrukken
            for ($i = 1; $i < $numDays + 1; $i++, $counter++) {

                $timeStamp = strtotime("$i-$month-$year");
                if ($i == 1) {
                    // als de dag niet op zondag begint zal hij lege cellen drukken
                    $firstDay = date("w", $timeStamp);
                    for ($j = 0; $j < $firstDay; $j++, $counter++) {
                        echo "<td>&nbsp;</td>";
                    }
                }
                if ($counter % 7 == 0) {
                    echo "</tr><tr>";
                }
                $monthstring = $month;
                $monthlength = strlen($monthstring);
                $daystring = $i;
                $daylength = strlen($daystring);
                if ($monthlength <= 1) {
                    $monthstring = "0" . $monthstring;
                }
                if ($daylength <= 1) {
                    $daystring = "0" . $daylength . $daystring;
                }
                echo "<td align=center> <a href=" . $_SERVER['PHP_SELF'] . "?month=" . $monthstring . "&day=" . $daystring . "&year=" . $year . "&v=true>" . $i . "</a>" . "</td>";
            }

            echo "</tr>";
            ?>
        </table>
        <?php
        if (isset($_GET['v'])) {
            echo "<a href=" . $_SERVER['PHP_SELF'] . "?month=" . $month . "&day=" . $day . "&year=" . $year . "&v=true&f=true>" . "add event</a>";
            if (isset($_GET['f'])) {
                include("new_event.php");
            }
        }
        ?>
        <?php
        if (isset($_GET['add'])) {
            echo "<p>gelukt</p>";
            try {
                $name = $_POST['Name'];
                $speaker = $_POST['Speaker'];
                $location = $_POST['Location'];
                $date = $day . "/" . $month . "/" . $year;
                $db = new PDO('mysql:host=localhost;dbname=tedx;charset=UTF8', 'test', 'Vbox2013'); // connectie maken met de database
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //exception opgooien als er iets mis gaat
                $sqlinsert = "insert into events (event_name, speaker, location, date_time) values('" . $name . "','" . $speaker . "','" . $location . "','" . $date . "')";
                $stmt = $db->query($sqlinsert); //query statement
            } catch (PDOException $ex) {
                echo "<p>FOUT: " . $ex->getMessage() . "</p>"; // exception 
            }
        }
        ?>

    </body>
</html>