<?php
    $data = [
        "john.doe@example.com",
        "jane-doe@website.org",
        "invalid-email@com",
        "123-456-7890",
        "987.654.3210",
        "http://www.example.com",
        "https://site.org/path?query=string",
        "not-a-url",
    ];

?>
<?php include '../includes/header.php'; ?>
    <h1>Emails validos</h1>
    <?php foreach ($data as $email) { ?>
    <ul>
        <li>Email: <?= $email ?></li>
        <li>
            Validado: <?php if (preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $email)) { echo "Si"; } else { echo "No"; } ?>
        </li>
    </ul>
    <?php } ?>

    <h1>Numeros de telefono validos</h1>
    <?php foreach ($data as $tlf) { ?>
        <?php if (preg_match_all('/[0-9]{3}[.-][0-9]{3}[.-][0-9]{4}/', $tlf)) { ?>
            <ul>
                <li>Telefono: <?= $tlf ?></li>
            </ul>
        <?php } ?>    
    <?php } ?>

    <h1>Dividir URLs</h1>
    <?php foreach ($data as $url) { ?>
        <?php if (preg_match('/http/', $url)) { ?>
            <p>URL: <?= $url ?></p>
            <?php
                $url = preg_split('/\//', $url);
                // elimina la segunda posición del array ya que es una cadena vacia
                unset($url[1]);
                echo "<ul>";
                foreach ($url as $part) {
                    echo "<li>$part</li>";
                }
                echo "</ul>";
            ?>
        <?php } ?>
    <?php } ?>
    <h1>Emails validos</h1>
    <?php foreach ($data as $email) { ?>
    <ul>
        <li>Email: <?= preg_replace('/^(?![a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$).*/', '', $email) ?></li>
    </ul>
    <?php } ?>
<?php include '../includes/footer.php'; ?>