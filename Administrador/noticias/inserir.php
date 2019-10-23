<?php include_once '../header.php'; ?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Inserir Noticia</div>
      <div class="card-body">
        <form action="" name="noticias"  method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" name="titulo" placeholder="Nome Completo" required="required" autofocus="autofocus">
                  <label for="firstName">Titulo</label>
                </div>
              </div>
              <div class="col-md-6">
        
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <select id="inputServico" name="fktiponoticia" class="form-control" required="required">
              <option for="inputServico" value='0'>Seleccione Serviço</option>
              <option for="inputServico"value='1'>Causa Animal</option>
              <option for="inputServico"value='2'>Comunidade</option>
              <option for="inputServico"value='3'>Educação</option>
              <option for="inputServico"value='4'>Saude</option>
              <option for="inputServico"value='5'>Nenhum</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="file" id="foto" class="form-control" required="required" >
              <label for="foto">Foto</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
            <textarea id="descricao" name="descricao" class="form-control" rows="15" data-rule="required" data-msg="Please write something for us" placeholder="Descrição" ></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                
              </div>
              <div class="col-md-6">
                
              </div>
            </div>
          </div>
          <input type="submit" name="Cadastro" value="Cadastrar" class="btn btn-primary btn-block"> <input type="reset" value="Limpar" class="btn btn-primary btn-block">
          <!--<a class="btn btn-primary btn-block" href="login.html">Registrar</a>-->
        </form>
      </div>
    </div>
  </div>


  <?php
include_once 'funcoes.class.php';
include_once 'dadosnoticias.php';
if (isset($_POST['Cadastro'])) {
    $dadosnoticias = new DadosNoticias();
    $dadosnoticias->setTitulo($_POST['titulo']);
    $dadosnoticias->setDescricao($_POST['descricao']);
    $dadosnoticias->setFktiponoticia($_POST['fktiponoticia']);
    $dadosimagens->setImagem($_POST['imagem']); //ESTO TENGO QUE ARREGLAR TODAVIA
    $funcoes = new FuncoesNoticias();
    $funcoes->inserir($dadosnoticias);

    if($funcoes){
         echo "<b>Noticia cadastrada com sucesso</b>";
    }else{
      
      echo "<b>Erro ao cadastrar Noticia</b>";
    }
  }
?>
  <?php
  include_once '../footer.php';
  ?>