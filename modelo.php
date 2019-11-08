<!doctype html>
<html lang="pt_br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alertify.js</title>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <link href="./css/customizado.css" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/themes/default.min.css">
    <link rel="stylesheet" href="./css/alertify.min.css">
  </head>

  <body>

    <header>
      <!-- Menu Fixo -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="modelo.php">Alertify.js Tutorial</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="modelo.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://alertifyjs.com/">Link para baixar o Plugin</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Conteúdo do seu tutorial -->
    <main role="main" class="container">
      <h1 class="mt-5">Alertify.js</h1>
      <p class="lead"> Alertify.js é um plugin jQuery que nos possibilita ter alerts e notificações personalizados, com diferentes códigos, variando de código para cada alert diferente. Os alerts são: </p>
      <hr>
      <div class="utilizando">
        <h2>1. Como utilizar</h2>
        <p>Primeiramente vamos até o site do Alertify.js que é: </p>
        <a href="https://alertifyjs.com/">https://alertifyjs.com/</a>
        <p>E baixamos o plugin.</p><br>
        <p>
          Ele virá em uma pasta zipada, basta extrai-la e teremos 2 arquivos e uma pasta. 
          Nós colocamos a pasta "css" e o arquivo "alertify.min.js" em nosso projeto. 
          <br> Após colocarmos tudo isso em nosso projeto, devemos importar o plugin para onde queremos utiliza-lo.
          Para isso iremos usar os seguintes códigos:
          <div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">    <span style="color: #007700">&lt;link</span> <span style="color: #0000CC">rel=</span><span style="background-color: #fff0f0">&quot;stylesheet&quot;</span> <span style="color: #0000CC">href=</span><span style="background-color: #fff0f0">&quot;./css/themes/default.min.css&quot;</span><span style="color: #007700">&gt;</span>
    <span style="color: #007700">&lt;link</span> <span style="color: #0000CC">rel=</span><span style="background-color: #fff0f0">&quot;stylesheet&quot;</span> <span style="color: #0000CC">href=</span><span style="background-color: #fff0f0">&quot;./css/alertify.min.css&quot;</span><span style="color: #007700">&gt;</span>
</pre></div>


          Terminado isso, teremos vários tipos de alerts e notificações diferentes, como nos exemplos abaixo.
        </p>
      </div>
      <hr>
      <div class="exemplos">
      <h2>2.0 Exemplos:</h2>
      <br>
      <h3>2.1 Exemplos de Alerts: </h3>
        <p>Alert Comum: </p>
        <p>código script: 
        <div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">$(<span style="background-color: #fff0f0">&#39;.alert&#39;</span>).click(<span style="color: #008800; font-weight: bold">function</span>(event){ 
        alertify.alert(<span style="background-color: #fff0f0">&#39;Messagealert.&#39;</span>).show()
})
          </pre>
        </div>

        </p>
        <button class="alert btn btn-info"> Executar </button>
        <p>Alert para Confirmar: </p>
        <p>código script:
        <div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">$(<span style="background-color: #fff0f0">&#39;.confirme&#39;</span>).click(<span style="color: #008800; font-weight: bold">function</span>(event){
            alertify.confirm(<span style="background-color: #fff0f0">&quot;This is a confirm dialog.&quot;</span>,
            <span style="color: #008800; font-weight: bold">function</span>(){
              alertify.success(<span style="background-color: #fff0f0">&#39;Ok&#39;</span>)
            },
            <span style="color: #008800; font-weight: bold">function</span>(){
              alertify.error(<span style="background-color: #fff0f0">&#39;Cancel&#39;</span>)
            })  
})
            </pre>
        </div>

        </p>
        <button class="confirme btn btn-info"> Executar </button>
        <p>Alert para Confirmar: </p>
        <p>código script: 
        <div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">$(<span style="background-color: #fff0f0">&#39;.prompt&#39;</span>).click(<span style="color: #008800; font-weight: bold">function</span>(event){

alertify.prompt(<span style="background-color: #fff0f0">&quot;titulo.&quot;</span>, <span style="background-color: #fff0f0">&quot;valor de inicio&quot;</span>,
<span style="color: #008800; font-weight: bold">function</span>(evt, value ){
  alertify.success(<span style="background-color: #fff0f0">&#39;mensagem &#39;</span> <span style="color: #333333">+</span> value);
},
<span style="color: #008800; font-weight: bold">function</span>(){
  alertify.error(<span style="background-color: #fff0f0">&#39;Cancel&#39;</span>);
})
})
</pre></div>

        </p>
        <button class="prompt btn btn-info"> Executar </button>
        <hr>
        <h2> 2.2 Exemplos de notificações: </h2>      
        <p>Notificação de Sucesso: </p>
        <p>código script:
        <div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">alertify.success(<span style="background-color: #fff0f0">&#39;Success message&#39;</span>)
</pre></div>
 
        </p>
        <button class="notificacaoSucesso btn btn-info"> Executar </button>
      
        <p>Notificação de error: </p>
        <p>código script: 
        <div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">alertify.error(<span style="background-color: #fff0f0">&#39;Error Message&#39;</span>) 
</pre></div>
        </p>
        <button class="notificacaoError btn btn-info"> Executar </button>
      
        <p>Notificação de Warning: </p>
        <p>código script: 
        <div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">alertify.warning(<span style="background-color: #fff0f0">&#39;Warning Message&#39;</span>)
</pre></div>
        </p>
        <button class="notificacaoWarning btn btn-info"> Executar </button>
      
        <p>Notificação Normal </p>
        <p>código script:<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">alertify.warning(<span style="background-color: #fff0f0">&#39;Warning Message&#39;</span>)
</pre></div>
<br>
        <button class="notificacaoNormal btn btn-info"> Executar </button>
      
          <br>
        <p>
      
      </div>
      <hr>
      <div class="ExemploPratico">
        <h2>3.0 Exemplo de código para utilização</h2>
        <p>Precisaremos inicialmente de um button com a classe que utilizaremos, como por exemplo: </p> 
        <div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"> <span style="color: #007700">&lt;button</span> <span style="color: #0000CC">class=</span><span style="background-color: #fff0f0">&quot;notificacaoNormal btn btn-info&quot;</span><span style="color: #007700">&gt;</span> Executar <span style="color: #FF0000; background-color: #FFAAAA">&lt;</span>/&gt;
          
          </pre></div>
          
        <p>Em seguida iremos usar a classe "notificacaoNormal" para conseguirmos utilizar o plugin com o seguinte código: </p>     
        <div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">$(<span style="color: #008800; font-weight: bold">function</span>() {
            
            $(<span style="background-color: #fff0f0">&#39;.notificacaoNormal&#39;</span>).click(<span style="color: #008800; font-weight: bold">function</span>(event){
                     alertify.message(<span style="background-color: #fff0f0">&#39;Normal Message&#39;</span>)
            })
})
          </pre></div>
          
        <hr>
        <div class="agradecimento">
        <h2>4.0 Conclusão</h2>

        <p>Com esse pequeno tutorial conseguimos então aplicar o alertify.js em qualquer página web, então é isso, Até mais, Dev.</p>
        </div> 
    </main>


    <!-- Rodapé -->
    <footer class="footer">
      <div class="container">
        <span class="text-muted">DevMedia</span>
      </div>
    </footer>

  </body>
  <script src="./js/alertify.min.js"></script>
  <script>
    $(function() {
      $('.alert').click(function(event){
        alertify.alert('Message alert.').show()
      })
      $('.confirme').click(function(event){
        alertify.confirm("Confirm Dialog.",
        function(){
          alertify.success('Ok');
        },
        function(){
          alertify.error('Cancel');
        });
      })
      $('.prompt').click(function(event){
        alertify.prompt("Prompt.", "Valor Padrão",
        function(evt, value ){
          alertify.success('Ok: ' + value);
         },
        function(){
          alertify.error('Cancel');
        })
      })
      $('.notificacaoSucesso').click(function(event){
        alertify.success('Success message')
      })
      $('.notificacaoError').click(function(event){
        alertify.error('Error Message')
      })
      $('.notificacaoWarning').click(function(event){
        alertify.warning('Warning Message')
      })
      $('.notificacaoNormal').click(function(event){
        alertify.message('Normal Message')
      })
    })
  </script>
</html>

