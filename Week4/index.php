<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Week 4</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 30px;">

    <div style="display: flex; gap: 30px; justify-content: center; align-items: flex-start;">

        <div style="background-color: #ffffff; padding: 20px; border: 1px solid #ccc; border-radius: 8px; width: 350px;">
            <form action="" method="post">
                <label style="display: block; margin-top: 10px; font-weight: bold;">Name:</label>
                <input type="text" name="name" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

                <label style="display: block; margin-top: 10px; font-weight: bold;">Password:</label>
                <input type="password" name="pass" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

                <label style="display: block; margin-top: 10px; font-weight: bold;">Comment:</label>
                <textarea name="comment" rows="3" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;"></textarea>

                <label style="display: block; margin-top: 12px; font-weight: bold;">Faculties (Checkbox):</label>
                <input type="radio" name="faculties" value="Engineering"> Engineering<br>
                <input type="radio" name="faculties" value="Medicine"> Medicine<br>
                <input type="radio" name="faculties" value="Computer Sciences"> Computer Sciences

                <label style="display: block; margin-top: 12px; font-weight: bold;">Residence (Multiple Option):</label>
                <select name="residence[]" multiple style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; height: 90px;">
                    <option value="Muqdisho">Muqdisho</option>
                    <option value="Hargeysa">Hargeysa</option>
                    <option value="Kismayo">Kismayo</option>
                    <option value="Marko">Marko</option>
                </select>

                <div style="margin-top: 15px;">
                    <input type="submit" name="submit" value="Register" style="background-color: #28a745; color: white; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;">
                    <input type="reset" value="Reset" style="background-color: #dc3545; color: white; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; margin-left: 5px;">
                </div>
            </form>
        </div>

        <div style="background-color: #ffffff; padding: 20px; border: 1px solid #ccc; border-radius: 8px; width: 350px; min-height: 200px;">
            <h3 style="margin-top: 0; color: #333; border-bottom: 2px solid #28a745; padding-bottom: 8px;">Output Result</h3>

            <?php
            if (isset($_POST['submit'])) {
                if (!empty($_POST['name'])) {
                    echo "<p><strong>Name:</strong> " . $_POST['name'] . "</p>";
                }

                if (!empty($_POST['pass'])) {
                    echo "<p><strong>Password:</strong> " . $_POST['pass'] . "</p>";
                }

                if (!empty($_POST['comment'])) {
                    echo "<p><strong>Comment:</strong> " . $_POST['comment'] . "</p>";
                }

                if (!empty($_POST['faculties'])) {
                    echo "<p><strong>Faculties:</strong> " . $_POST['faculties'] . "</p>";
                }

                if (!empty($_POST['residence'])) {
                    echo "<p><strong>Residence:</strong> ";
                    foreach ($_POST['residence'] as $city) {
                        echo "$city, ";
                    }
                    echo "</p>";
                }
            }
            ?>
        </div>

    </div>

</body>

</html>