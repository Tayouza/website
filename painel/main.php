<?php
if (isset($_GET['logout'])) {
    Painel::logout();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>style/painel.css">
    <title>Painel</title>
</head>

<body>
    <main>
        <header>
            <a href=<?php echo INCLUDE_PATH_PAINEL . "logout" ?> class="btn tomato"><span>Logout</span></a>
        </header>
        <div class="conteudo">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, cumque pariatur vel itaque quas id magni quia exercitationem et velit consectetur inventore, in animi harum, aspernatur rem fuga eius culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, cumque pariatur vel itaque quas id magni quia exercitationem et velit consectetur inventore, in animi harum, aspernatur rem fuga eius culpa. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus dicta recusandae consectetur atque dolor quod aut alias. Magnam, ipsum odit explicabo quae nesciunt tenetur tempore iste error porro necessitatibus? Quo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque deserunt quisquam optio ab exercitationem natus porro molestiae vero reiciendis similique, aliquid adipisci, fugit impedit repellendus! Earum necessitatibus quaerat fugit laboriosam! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo, tenetur! Numquam consequuntur aliquam sunt eligendi, quis iusto perferendis maiores assumenda molestias laboriosam eveniet, minus nemo odit culpa quae possimus placeat?
        </div>
    </main>
    <aside>
        <h2>TayouzaDev</h2>
        <h3>Bem vindo, <?php echo ucfirst($_SESSION['user']); ?></h3>
        <div class="menu">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH . 'home' ?>">Home</a></li>
            </ul>
        </div>
    </aside>
</body>

</html>