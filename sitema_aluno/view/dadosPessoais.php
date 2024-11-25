<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="../util/css/card.css">
</head>
<body>

<link rel="stylesheet" href="../util/css/card.css">
<h1>seus dados</h1>

<form action="" method="post">

<div class="container noselect">
  <div class="canvas">
    <div class="tracker tr-1"></div>
    <div class="tracker tr-2"></div>
    <div class="tracker tr-3"></div>
    <div class="tracker tr-4"></div>
    <div class="tracker tr-5"></div>
    <div class="tracker tr-6"></div>
    <div class="tracker tr-7"></div>
    <div class="tracker tr-8"></div>
    <div class="tracker tr-9"></div>
    <div class="tracker tr-10"></div>
    <div class="tracker tr-11"></div>
    <div class="tracker tr-12"></div>
    <div class="tracker tr-13"></div>
    <div class="tracker tr-14"></div>
    <div class="tracker tr-15"></div>
    <div class="tracker tr-16"></div>
    <div class="tracker tr-17"></div>
    <div class="tracker tr-18"></div>
    <div class="tracker tr-19"></div>
    <div class="tracker tr-20"></div>
    <div class="tracker tr-21"></div>
    <div class="tracker tr-22"></div>
    <div class="tracker tr-23"></div>
    <div class="tracker tr-24"></div>
    <div class="tracker tr-25"></div>
    <div id="card">
   
      <div class="title">

      <div class="form__group field " id="NomeIN">
              <input class="form__field" name="txtNomeU" type="text"
                placeholder="Nome Completo" value=" <?php echo unserialize($_SESSION['Usuario'])->getNome(); ?>">

            </div>

            <div class="form__group field " id="CpfIN">
              <input class="form__field" name="txtCpfU" type="text"
                placeholder="CPF:333.333.333-33" value=" <?php echo unserialize($_SESSION['Usuario'])->getCpf(); ?>">
            </div>

            <div class="form__group field" id="DataIN">
              <!-- <span class="material-symbols-outlined svg_icon">calendar_month</span> -->
              <input class="form__field" name="txtDateU" type="data"
                placeholder="" value=" <?php echo unserialize($_SESSION['Usuario'])->getDataNascimento(); ?>">

            </div>

            <div class="form__group field " id="EmailIN">
              <input class="form__field" name="txtEmailU" type="text"
                placeholder="Email" value=" <?php echo unserialize($_SESSION['Usuario'])->getEmail(); ?>">
            </div>

            <div class="form__group field " id="SenhaIN">
              <input class="form__field" name="txtsenhaU" type="password"
                placeholder="Email" value=" <?php echo unserialize($_SESSION['Usuario'])->getSenha(); ?>">

            </div>


      </div>
      <div class="subtitle">
      
<div class="alterar">
  <button name="btnAtualizarU" class="noselect " id="atualizar">
      <span class="text">atualizar</span><span class="icon">
        <svg
          viewBox="0 0 24 24"
          height="24"
          width="24"
          xmlns="http://www.w3.org/2000/svg">
        </svg><span class="buttonSpan">+</span></span>
    </button>



    <button name="btnDeletarU" class="noselect" id="deletar"><span class="text">Delete</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path>
        </svg></span></button>
  </div>
      </div>
      
    </div>
  </div>
</div>
  

</form>












</body>
</html>