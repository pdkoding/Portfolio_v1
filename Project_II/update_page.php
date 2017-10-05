<?php include 'dropdown.php';?>
<?php include 'get_delete_data.php';?>
<?php
$var = get_data();
$view = return_about();
$query = update();
$var_d = get_delete_data();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style_update_page.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>

<h1>Edit my Portfolio</h1>
<a class="HomePage" href="../index.php" target="_blank">Home Page</a>
<a class="LogOut" href="logout.php">Log Out</a>


<!-- EDIT form -->

<div class="edit">
<form action="update_page.php" method="POST">
    <p>EDIT
        <select name="about">
            <?php
            foreach ($var as $x){
                $content = $x['content_name'];
                echo "<option name=$content>" . $content . "</option>";
            }
            ?>
        </select>
    </p>
    <input type="submit" value="Submit">
</form>
<form action="update_page.php" method="POST">
    <label for="subject">Good o`l stuff</label><br>
        <textarea name="text" style="width:350px;height:150px;">
            <?php echo $view['text_content']; ?>
        </textarea><br>
    <input type="hidden" value="<?php echo $view['id']; ?>" name="id">
    <input type="submit" value="Submit">
</form>
</div>

<!-- ADD form -->

<div class="add">
<form action="add.php" method="POST">
    <p>ADD</p>
        <label for="subject">New stuff</label><br>
        <textarea name="add_title" placeholder="Title" style="width:350px;height:50px;"></textarea><br>
        <textarea name="add_text" placeholder="Come on I don`t have whole day.." style="width:350px;height:150px;"></textarea><br>
    <input type="submit" value="Submit">
</form>


<!-- DELETE form -->

<form action="delete.php" method="POST">
    <p>DELETE
        <select name="delete">
            <?php
            foreach ($var_d as $y){
                $content_d = $y['content_name'];
                echo "<option>" . $content_d . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Delete">
    </p>
</form>
</div>
</body>
</html>