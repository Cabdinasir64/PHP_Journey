<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Week5 - Basic Upload</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 50px;">

    <div style="background-color: #ffffff; width: 400px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">

        <h2 style="text-align: center; color: #333;">File Upload</h2>

        <?php
        if (isset($_POST['submit'])) {

            $folder = "uploads/";

            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $file_name = $_FILES['uploaded_file']['name'];
            $file_size = $_FILES['uploaded_file']['size'];
            $file_tmp  = $_FILES['uploaded_file']['tmp_name'];
            $file_type = $_FILES['uploaded_file']['type'];

            $file_parts = explode('.', $file_name);
            $file_ext   = strtolower(end($file_parts));

            $allowed_types = array("jpg", "jpeg", "png", "pdf");

            $max_size = 2 * 1024 * 1024;

            $custom_name = $_POST['custom_name'];

            if (empty($file_name)) {
                echo "<p style='color: red;'>Fadlan dooro file!</p>";
            } elseif (!in_array($file_ext, $allowed_types)) {
                echo "<p style='color: red;'>Kaliya jpg, png, iyo pdf ayaa la ogolyahay!</p>";
            } elseif ($file_size > $max_size) {
                echo "<p style='color: red;'>File-ku wuu weyn yahay (ugu badnaan 2MB)!</p>";
            } else {

                if (!empty($custom_name)) {
                    $final_name = $custom_name . "." . $file_ext;
                } else {
                    $final_name = $file_name;
                }

                $destination = $folder . $final_name;

                if (file_exists($destination)) {
                    echo "<p style='color: red;'>File magacaan leh mar hore ayuu jiray!</p>";
                } else {
                    if (move_uploaded_file($file_tmp, $destination)) {
                        echo "<p style='color: green;'>File-ka si fiican ayaa loo qaaday!</p>";

                        echo "<div style='background-color: #eee; padding: 10px; margin-top: 10px;'>";
                        echo "<p><b>Magaca Cusub:</b> " . $final_name . "</p>";
                        echo "<p><b>Magicii Hore:</b> " . $file_name . "</p>";
                        echo "<p><b>Nooca:</b> " . $file_type . "</p>";
                        echo "<p><b>Cabirka:</b> " . round($file_size / (1024 * 1024), 2) . " MB</p>";
                        echo "</div>";
                    } else {
                        echo "<p style='color: red;'>Cillad baa dhacday, permission-ka hubi!</p>";
                    }
                }
            }
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data" style="margin-top: 20px;">

            <div style="margin-bottom: 15px;">
                <label style="display: block; font-weight: bold;">Dooro File:</label>
                <input type="file" name="uploaded_file" style="width: 100%; margin-top: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; font-weight: bold;">Magac Cusub (Optional):</label>
                <input type="text" name="custom_name" placeholder="Hadaad rabto qor magac" style="width: 95%; padding: 8px; margin-top: 5px;">
            </div>

            <button type="submit" name="submit" style="background-color: #007bff; color: white; padding: 10px 15px; border: none; width: 100%; cursor: pointer;">Upload Gareey</button>

        </form>

    </div>

</body>

</html>