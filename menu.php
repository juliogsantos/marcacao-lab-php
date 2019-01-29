<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
<a href="main.php" class="navbar-brand">Home</a>
    </div>
  
  <div>
<ul class="nav navbar-nav">
    <li><a href="marcacao-view.php">Marcar Laboratorio</a></li>
    <li><a href="cadastro.php">Cadastrar Usuario</a></li>
</ul>
  </div>
</div>

</div>
<div style="font-size:16px; display:block;"><?php
    $data = date('D');
    $mes = date('M');
    $dia = date('d');
    $ano = date('Y');
    
    $semana = array(
        'Sun' => 'Domingo', 
        'Mon' => 'Segunda-Feira',
        'Tue' => 'Ter&ccedil;a-Feira',
        'Wed' => 'Quarta-Feira',
        'Thu' => 'Quinta-Feira',
        'Fri' => 'Sexta-Feira',
        'Sat' => 'S&aaccute;bado'
    );
    
    $mes_extenso = array(
        'Jan' => 'Janeiro',
        'Feb' => 'Fevereiro',
        'Mar' => 'Mar&ccedil;o',
        'Apr' => 'Abril',
        'May' => 'Maio',
        'Jun' => 'Junho',
        'Jul' => 'Julho',
        'Aug' => 'Agosto',
        'Nov' => 'Novembro',
        'Sep' => 'Setembro',
        'Oct' => 'Outubro',
        'Dec' => 'Dezembro'
    );
    
    echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";
?><div style="float:right;"><a href="logout.php">Sair</a></div>
</div>