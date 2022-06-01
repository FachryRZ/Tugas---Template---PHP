<?php
if (isset($_POST['update'])) {
    include('config.php');
    $id = $_POST['id'];
    $teacher = $_POST['teacher'];
    $hour = $_POST['hour'];

    $sql = "UPDATE teachers SET teacher='$teacher', hour='$hour' WHERE id='$id'";
    if (mysqli_query($config, $sql)) {
        echo '<script>window.location.href="?m=teacher&s=view"</script>';
    } else {
        echo '<script>alert("Data Gagal diupdate!"); window.location.href="?m=teacher&s=add"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}