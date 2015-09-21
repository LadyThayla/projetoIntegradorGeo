<?php 
    include 'menu.php';

    require '../Model/Patente.php';
    require '../Model/Estado.php';
    require '../Model/Instituicao.php';


    //Instancia o objeto Patente
    $patenteObj = new Patente();
    $patentes = $patenteObj->listar();

    //Instancia o objeto Estado
    $estadoObj = new Estado();
    $estados = $estadoObj->listar();

    //Instancia o objeto Instituicao
    $instituicaoObj = new Instituicao();
    $instituicoes = $instituicaoObj->listar();

?>

<!DOCTYPE html>

    <body>
        <form name="editarUsuario" action="../Controller/controllerUsuario.php" method="POST" >
        <input type="hidden" name="action" id="action" value="inserirUsuario" />
            <div class="row">
                <div class="col-md-3">           

                </div>
                <div class="col-md-3">
                    <label>Patente</label>
                        <?php 
                        //Se existirem patentes, exibe
                        if($patentes){ ?>
                          <select class="selectpicker form-control" name="patente" id="patente">
							<optgroup label="militar">
                            <?php
                            for($l=0; $l<mysql_num_rows($patentes); $l++){
                            ?>
							  <option value="<?php echo mysql_result($patentes, $l, 'id');?>"><?php echo mysql_result($patentes, $l, 'nome');?></option>
                            <?php
                            }
                            ?>
                            </optgroup>
						  </select>
                        <?php }else{ //Não há patentes, exibe mensagem ?>
							Não há patentes cadastradas. Você precisa primeiro cadastrar uma patente.
                        <?php } ?>
                </div>

                 <div class="col-md-3">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o seu nome aqui."/>
                </div>
            </div>    

            <div class="row">
                <div class="col-md-3">
                    
                </div>

                <div class="col-md-3">
                    
                </div>
            </div>                 

            <div class="row">
                <div class="col-md-3">
                    
                </div>

                 <div class="col-md-3">
                    <label>Instituição</label>
                        <?php 
                        //Se existirem patentes, exibe
                        if($instituicoes){ ?>
                          <select class="selectpicker form-control" name="instituicao" id="instituicao">
                            <optgroup label="instituicao">
                            <?php
                            for($l=0; $l<mysql_num_rows($instituicoes); $l++){
                            ?>
                              <option value="<?php echo mysql_result($instituicoes, $l, 'id');?>"><?php echo mysql_result($instituicoes, $l, 'nome');?></option>
                            <?php
                            }
                            ?>
                            </optgroup>
                          </select>
                        <?php }else{ //Não há instituições, exibe mensagem ?>
                        Não há instituições cadastradas. Você precisa primeiro cadastrar uma instituição.
                        <?php } ?>
                </div>


                <div class="col-md-3">
                     <label>UF:</label>
                    <?php
                    if(mysql_num_rows($estados)>0){
                    ?>
                    <select class="form-control" name="estado" id="estado">
                        <?php
                        for($l=0; $l<mysql_num_rows($estados); $l++){
                        ?>
                        <option value="<?=mysql_result($estados, $l, 'id')?>"><?=mysql_result($estados, $l, 'nome')?></option>
                        <?php } ?>
                    </select>
                    <?php }else{ //Não há estados cadastrados ?>
                    Ops... parece que não há estados cadastrados. Você precisa primeiro cadastrar um Estado.
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    
                </div>

            </div>

            <div class="row">
                <div class="col-md-3">
                
                </div>
                <div class="col-md-3">
                    <label>Email:</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Digite o seu e-mail aqui."/>
                </div>
                <div class="col-md-3">
                     <label>Entre sua senha:</label>
                     <input type="text" class="form-control" name="senha" id="senha" placeholder="Digite a sua senha aqui."/>
                </div>
                <div class="col-md-3">
                    
                </div>           
            </div>

            <div class="row">
                <div class="col-md-3">
                
                </div>
                <div class="col-md-3">
                    <label>Administrador:</label>
                    <input type="checkbox" class="form-control" name="administrador" id="administrador" value=1/>
                </div>
                <div class="col-md-3">
                     <label>Ativo:</label>
                     <input type="checkbox" class="form-control" name="ativo" id="ativo" value=1/>
                </div>
                <div class="col-md-3">
                    
                </div>           
            </div>  


        </div>
        <!--    ###########################################  -->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                 
                </div>
                <div class="col-md-6">
                    <div class="col-md-3">
                        <button type="button" class="btn btn-primary btn-block" onclick="location.href='usuarios.php'">Cancelar</button>    
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary btn-block">Salvar</i></button>    
                    </div>                    
                </div>
            </div>
        </div>

    </form>

</body>



<?php
    include 'inferior.php';
?>





