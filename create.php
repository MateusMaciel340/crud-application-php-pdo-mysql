<?php
include './functions/functions.php';

$pdo = pdo_connect_mysql();

$msg = '';

// Check if POST data is not empty
if (!empty($_POST)) {

    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;

    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $created = isset($_POST['created']) ? $_POST['created'] : '';


    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO contacts VALUES (?,?,?,?,?,?)');
    $stmt->execute([$id, $name, $email, $phone, $title, $created]);

    // Output message
    $msg = 'Contato cadastrado com sucesso!';
}
?>

<?= template_header('Cadastrar contato') ?>

<div class="content update">
    <h2>Cadastrar Contato</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="name">Nome Completo</label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="name" placeholder="Mateus Silva" id="name">
        <label for="email">Email</label>
        <label for="phone">Telefone</label>
        <input type="text" name="email" placeholder="mateus@example.com" id="email">
        <input type="text" name="phone" placeholder="(85) 99423 - 9305" id="phone">
        <label for="title">Título</label>
        <label for="created">Data e Horário</label>
        <input type="text" name="title" placeholder="Negócios" id="title">
        <input type="datetime-local" name="created" value="<?= date('Y-m-d\TH:i') ?>" id="created">
        <input type="submit" value="Cadastrar">
    </form>

    <?php if ($msg) : ?>
        <p style="message-gray"><?= $msg ?></p>
    <?php endif; ?>
</div>

<?= template_footer() ?>