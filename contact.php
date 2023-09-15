<?php


if ($_POST["pass"] == $_POST["CPASS"]) {
    echo "<script> alert('თვენ წარმატებით გაიარეთ რეგისტრაცია') </script>";
}
else {
    echo "<script> alert('პაროლი და მისი კონფირმაცია არასწორია') </script>";
}