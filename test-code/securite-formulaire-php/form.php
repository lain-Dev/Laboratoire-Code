<?php
    if ($_POST) {
        require 'validation.php';

        $rules = array(
            'email' => 'email|required',
            'password' => 'required'
        );
        $validation = new Validation();

        if ($validation->validate($_POST, $rules) == true) {
            var_dump($_POST);
        } else {
            echo '<ul>';
            foreach ($validation->errors as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul>';
        }
    }
?>
<!DOCTYPE html>
<html>
<body>
    <form id="ma_form" action="#" method="post" novalidate>
        <p>
            <input type="text" name="email" id="email" required>
        </p>
        <p>
            <input type="password" name="password" id="password" required>
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="Log in">
        </p>
    </form>
</body>
</html>