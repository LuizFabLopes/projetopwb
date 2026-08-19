<?php include "cabecalho.php"?>
<?php

    if(isset($_POST["login"]))
    {
        //Procedimento para banco de dados
    }
    if(empty($_POST["login"]))
    {
        $mensasgemErro = "Preencha o campo de login";
    }
?>
<div class="row w-100">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">

            <?php
                if(isset($mensasgemErro))
                {
                    
                    echo '<div class="alert alert-danger">';
                    echo $mensasgemErro;
                    echo '</div>';
                    
                }
            ?>
                <form action="index.php" method="post">
                    <label for="login">Username</label>
                    <input class="form-control" type="text" name="ligin" id="login"/>
                    <label for="senha">Senha</label>
                    <input class="form-control" type="password" name="senha" id="senha"/>
                    <div class="row mt-3">
                        <div class="col-md-6"><button type="submit" class="btn btn-primary">
                                Entrar
                            </button></div>
                            
                        <div class="col-md-6 align-item-center d-flex justify-content-center">
                            <input type="checkbox" class="form-check-input mx-2" value="senha"/>Salvar Senha
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div> 


    <div class="col-md-4"></div>
</div>
<?php include "rodape.php"?>