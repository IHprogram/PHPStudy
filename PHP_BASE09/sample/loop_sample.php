<h1>繰り返しの中にIFの組み合わせ</h1>

<?php
for ($i = 1; $i < 30; $i += 2) {
    if ($i % 3 == 0) {
        echo '<p>{$i}は3で割り切れる!</p>';
    } else {
        echo '<p>{$i}は3で割り切れない...</P>';
    }
}
?>




<h1>繰り返しの中でさらに繰り返す組み合わせ</h1>

<ul>
    <?php
    for ($x = 1; $x <= 3; $x++) {
        echo '<li>xの値は{$x}で、</li>';
        for ($y = 1; $y <= 5; $y++) {
            echo '<li>yの値は{$y}となります。</li>';
        }
        echo '<br>';
    }
    ?>
</ul>