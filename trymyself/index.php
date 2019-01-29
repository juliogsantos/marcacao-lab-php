<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
    <div class="navbar-inverse navbar-fixed-top">
       <div class="<container-fluid></container-fluid>">
        <ul class="nav nav-pills">
            <li role="presentation"><a id="pagina01" href="#page01"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Home</a></li>
         <li role="presentation"><a id="pagina02" href="#page02">page 2</a></li>
        </ul> 
       </div>
    </div>
    <!----P-A-G-I-N-A---H-O-M-E---------------------------->
    <div class="row viewHome">
        <div id="page01" class="view">
           <div id="customContainer"></div>
            <div class="form-group">
                <form action="php/add.php" method="post">
                    <input type="text" class="form-control input" name="nome" placeholder="Nome"/>
                    </br>
                    <input class="btn btn-inverse" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
    <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    <!----P-A-G-I-N-A---M-A-I-N---------------------------->
    <div class="row viewMain">
        <div id="page02" class="view">.col-md-4</div>
    </div>
    <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    <!----------------------------------------------------->
    <!----S-C-R-I-P-T-S------------------------------------>
    <!----------------------------------------------------->
    <div class="container">

        <div id="customContainer"></div>

    </div>

    <script src="js/jquery-3.0.0.min.js"></script>

    <!-- noty -->
    <script type="text/javascript" src="js/noty/packaged/jquery.noty.packaged.js"></script>
    

    <script type="text/javascript">

        var notification_html = [];
notification_html[0] = '<h5 style="text-align:center">Não foi possível adicionar!!!</h5>',
    notification_html[1] = '<h5 style="text-align:center">Adicionado com sucesso!!!</h5>'; 

        function generate(type, text) {

            var n = noty({
                text        : text,
                type        : type,
                dismissQueue: true,
                layout      : 'Center',
                closeWith   : ['timeout'],
                theme       : 'relax',
                timeout     : 4000,
                maxVisible  : 10,
                animation   : {
                    open  : 'animated bounceInLeft',
                    close : 'animated bounceOutLeft',
                    easing: 'swing',
                    speed : 500
                }
            });
            console.log('html: ' + n.options.id);
        }

        function generateAll() {
            //generate('warning', notification_html[0]);
            //generate('error', notification_html[1]);
            //generate('information', notification_html[2]);
            //generate('success', notification_html[3]);
            // generate('notification');
            <?php if($_GET['adicionado'] == 1){
        echo "generate('success', notification_html[1]);";
    
        }
                  if($_GET['adicionado'] == 0){
        echo "generate('error', notification_html[0]);";
        } ?>
      }

        $(document).ready(function () {

            setTimeout(function() {
                generateAll();
            }, 500);

        });
    </script>
</body>
</html>		