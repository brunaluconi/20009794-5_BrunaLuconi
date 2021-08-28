<?php
include("dados/dados.php");
?>

<h2 style="font-size: 40px;text-align:center;color: rgb(46, 45, 45);">Nossos doces</h2><br>

<!-- <p style="font-size: 20px;text-align:center;color: rgb(46, 45, 45);"><?= $doces[0]['title']; ?></p> -->

<h3 style="font-size: 25px;color: black;"><a href="index.php?pagina=pages/sobre_doce.php" style="color: black;">Brigadeiros</a> - R$ 10 (caixinha com 5)</h3>
<img src="images/brigadeiros.jpg" alt="Brigadeiros">
<br>
<br>
<h3 style="font-size:25px;color: rgb(46, 45, 45);"><a href="index.php?pagina=pages/sobre_doce.php" style="color: black;">Cookies</a> - R$ 15 (caixinha com 5)</h3>
<img src="images/cookies.jpg" alt="Cookies">
<br>
<br>
<h3 style="font-size: 25px;color: black;"><a href="index.php?pagina=pages/sobre_doce.php" style="color: black;">Cupcake</a> - R$ 10 (caixinha com 2)</h3>
<img src="images/cupcakes.jpg" alt="Cupcake">
<br>
<br>
<h3 style="font-size: 25px;color: black;"><a href="index.php?pagina=pages/sobre_doce.php" style="color: black;">Brownie</a> - R$ 12 (caixinha com 3)</h3>
<img src="images/brownies.jpg" alt="Brownie">
<br>




<!--<article>
    <h2>
        <a href="index.php?pagina=pages/sobre_doce.php" class="category"><?= $doces[0]['title'];?></a><br>
        <img src=<?= $doces[0]['images']; ?> alt="Brigadeiros">
        <p><?php echo $doces[0]['description']; ?></p>

    </h2>
</article> -->

<?php
foreach ($doces as $value) {
?>
    <p>
        <a href="index.php?pagina=pages/sobre_doce.php&id=<?= $value[0]["id"]; ?>"><?= $value[0]["title"]; ?></a>
    </p>
<?php
}
