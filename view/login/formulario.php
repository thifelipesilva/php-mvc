<?php include __DIR__ . '/../init-html.php'; ?>


<form action="/realiza-login" method="post">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" requerid/>
    </div>

    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" required/>
    </div>
    <button class="btn btn-primary">Enviar</button>
</form>



<?php include __DIR__ . '/../end-html.php'; ?>
