<?php

    $results = [
        ['id' => 16, 'name' => 'Edythe'],
        ['id' => 14, 'name' => 'Dung'],
        ['id' => 20, 'name' => 'Rickie'],
        ['id' => 56, 'name' => 'Clifford'],
        ['id' => 71, 'name' => 'Ashton']
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- <script src="jquery-3.3.1.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <?php foreach ($results as $element): ?>
        <div id="elto-<?= $element['id'] ?>">
            <!-- ... -->
            <span><?= $element['name'] ?></span>
            <div>
                <a class="rem" data-id="#elto-<?= $element['id'] ?>" href="del.php?id=<?= $element['id'] ?>">remover</a>
            </div>
        </div>
    <?php endforeach ?>
    <script>
        $('.rem').on('click', function(evt) {
            evt.preventDefault();

            var el = $(this).attr('data-id');

            // $(this).parent().parent().remove();
            if (confirm("Certeza que quer remover?")) {
                $(el).remove();
            }
        });
    </script>
</body>
</html>