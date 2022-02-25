<!DOCTYPE HTML>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modelo1.php">
</head>
    
<body>
    <main>
        <section>
            <img src="<?=$dados['foto']; ?>" alt="img" class="img">
            <h1><?= $dados['nome']; ?></h1>
            <h3><?= $dados['cargo']; ?></h3>
        </section>
        <section class="main">
            <h2>Resumo</h2>
            <p><?= $dados['resumo']; ?></p>
            
            <?php if($dados['formacoes']){
    ?>
            <h2>Formação</h2>
            <ul class="lista-topicos">
                <?php for($i = 0; $i < sizeof($dados['formacoes']['cursos']); $i++){
        ?>
                <li>
                    <div>
                        <h4><?= $dados['formacoes']['cursos'][$i] ?></h4>
                        <p><?= $dados['formacoes']['instituicoes'][$i] ?></p>
                        <p><?= $dados['formacoes']['conclusoes'][$i] ?></p>
                    </div>
                </li>
    <?php } ?>
            </ul>
<?php } ?>
            <h2>Contato</h2>
            <ul class="lista-topicos">
                <li>
                    <div>
                        <h4>Endereço:</h4>
                        <p><?= $dados['endereco']; ?></p>
                    </div>
                </li>
                <li>
                    <div>
                        <h4>Telefone</h4>
                        <p><?= $dados['telefone']; ?></p>
                    </div>
                </li>
                <li>
                    <div>
                        <h4>Email:</h4>
                        <p><?= $dados['email']; ?></p>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <script>
        window.print();
    </script>
</body>
</html>