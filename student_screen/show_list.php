<?php
/**
 * 显示学院或学生社团列表
 * 参数type:
 *          1:学院
 *          2:社团
 */


$type = $_GET['type'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<!----------如果$type = 1则显示这个div---------->
<div>
    <a href="show.php?type=1&college=0">所有学院</a>
    <a href="show.php?type=1&college=1">机汽学院</a>
    <a href="show.php?type=1&college=2">电信学院</a>
</div>


<!----------如果$type = 2则显示这个div---------->
<div>
    <a href="show.php?type=2&org=0">所有组织</a>
    <a href="show.php?type=2&org=1">组织1</a>
    <a href="show.php?type=2&org=2">组织2</a>
</div>
</body>
