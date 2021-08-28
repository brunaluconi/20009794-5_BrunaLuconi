<h2 style="font-size: 40px;text-align:center;color: rgb(46, 45, 45);">Sobre o doce</h2>

<p style="font-size: 20px;text-align:center;color: rgb(46, 45, 45);"><?php echo ($dados[0]["description"]); ?></p>

<?php
include("dados/dados.php");

if (isset($_GET[0]["title"]) && !empty($_GET[0]["title"])) {
    $title = $_GET[0]["title"];
} else {
    return 0;
}

foreach ($doces as $value) {
    if ($value[0]["title"] == $title) {
    ?>
        <p>
            <?=$value[0]["title"];?><br>
            <?=$value[0]["description"];?>
        </p>
<?php            
    } else { 
        //
    }
}

?> 