<?php
require_once "cfg.php";
require_once CLASSES."university.php";
$proc = new university;
$proc->setPage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo university::$HTML["METAS"]."\n";
        echo university::$HTML["LINKS"]."\n";
        echo university::$HTML["NO_INDEX_METAS"]."\n";
        echo university::$HTML["BODYSCRIPTSBLOCK"]."\n";
    ?>
    <title><?php echo university::$HTML["TITLE"]."\n";?></title>
</head>
<body>
    <h1>Welcome</h1>
</body>
</html>