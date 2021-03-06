<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("inc/head.php") ?>
    

</head>
<body>

<?php require_once("inc/header.php") ?>

    <div class="container py-5" >

        <div class="card-columns">
            
           
            <div class="card bg-dark text-white text-center p-3">
              <blockquote class="blockquote mb-0">
                <p>Total de Agendamentos</p>
                <h4><p id="nSend"></p></h4>
                
              </blockquote>
            </div>
            
            <div class="card bg-dark text-white text-center p-3">
                <blockquote class="blockquote mb-0">
                  <p>Total de Dúvidas</p>
                  <h4><p id="nSendd"></p></h4>
                </blockquote>
              </div>
              <div class="card bg-warning text-white text-center p-3 disabled">
                  <blockquote class="blockquote mb-0">
                    <p>Relatórios</p>
                    <h4><p id="">Em breve</p></h4>
                  </blockquote>
                </div>
                </div>

        
        
        <ul class="nav nav-tabs py-3" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active text-secondary" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Agendamento </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Dúvidas</a>
            </li>
            
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              
                <table class="table" id="usuarios_table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data da consulta</th>
                        <th scope="col">Horário consulta</th>
                        
                      </tr>
                    </thead>
                    <tbody id="myTable">
                          
                      </tbody>
                  </table>

            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <table class="table" id="duvidas">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Dúvida</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody id="myTable">
                          
                      </tbody>
                  </table>

            </div>
          </div>

    

<script>
  $.getJSON("json/usuarios.json", (data) =>{
    console.log(data.usuarios)
     var i = 0;
    $.each(data.usuarios, (key, value) => {
      $('#usuarios_table').append(
        `<tr> 
          <td>${value.nome}</td> 
          <td>${value.email}</td> 
          <td>${value.telefone}</td> 
          <td>${value.date}</td> 
          <td>${value.time}</td> 
           
        </tr>`);

        i += 1;
    });
    $('#nSend').append(i);

  });
</script>

<script>
  $.getJSON("json/duvidas.json", (data) =>{
    console.log(data.usuarios)
     var i = 0;
    $.each(data.usuarios, (key, value) => {
      $('#duvidas').append(
        `<tr> 
          <td>${value.nome}</td> 
          <td>${value.email}</td> 
          <td>${value.telefone}</td> 
          <td>${value.duvida}</td> 
         
           
        </tr>`);

        i += 1;
    });
    $('#nSendd').append(i);

  });
</script>

    



    </div>

  <!-- Footer section  -->
  <?php require_once("inc/footer.php") ?>

</body>
</html>