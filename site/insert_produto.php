<?php
require_once 'core/init.php'
?>

<!DOCTYPE html>
<html>

<head>
  <title>BS Shop</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="UTF-8"> 
  <!--apply css-->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

  <!--response-->
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scaleable=no">

  <!--script/source-->
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
  <script src="http://www.w3schools.com/lib/w3data.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>



<!-- top bar -->
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class="container">
    <ul class="nav navbar-nav navbar-left" >
        <li><a href="#" class="navbar-brand textf"><font size=5>LOGO</font></a></li>
        </ul>
         <ul class="nav navbar-nav navbar-right">
         <li><a href="#" class="textf"><img src="http://www.softmarketing.com.br/v2/wp-content/uploads/2014/06/iconmonstr-speech-bubble-15-icon-256.png" width="20" height="18" />&nbsp&nbsp Atendimento &nbsp&nbsp</a></li>
         <li><a href="#" class="textf"><img src="http://www.koalashop.com.br/images/Email%20Markting/Novo%20Modelo/carrinho-de-compras.png" width="20" height="18" /> &nbsp 0&nbsp&nbsp</a></li>
         <li><a href="#" class="textf">&nbsp&nbspEntrar</a></li>
        </ul>
  </div>
</nav>






<!-- JQuery banner rotativo-->
   
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 1,
                $Align: 0,
                $NoDrag: true
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1024);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet element */
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            background-color:black;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }

        /* jssor slider thumbnail navigator skin 09 css */
        
        .jssort09-600-45 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 1024px;
            height: 45px;
        }
        
        .jssort09-600-45 .t {
            font-family: verdana;
            font-weight: normal;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            color:#fff;
            line-height: 45px;
            font-size: 20px;
            padding-left: 10px;
        }
        
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1024px; height: 205px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1024px; height: 205px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/placeholder1.jpg" />
                <div data-u="thumb">Primeiro placeholder</div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/placeholder2.jpg" />
                <div data-u="thumb">Segundo placeholder</div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/placeholder3.jpg" />
                <div data-u="thumb">Terceiro placeholder</div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/placeholder4.jpg" />
                <div data-u="thumb">Quarto placeholder</div>
            </div>
            <a data-u="add" href="http://www.jssor.com" style="display:none">Jssor Slider</a>
        
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:1024px;height:45px;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=40.0); opacity:0.4;"></div>
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
    </div>
    <!-- Banner END -->






  <!-- navbar start-->
  <?php 
    $sql = "SELECT * FROM categorias WHERE cat_parente = 0";
    $pquery = $db->query($sql);
  ?>

  <nav class="navbar navbar-default navbar-static-top " id="navbar-cat">
    <div class="container">
      <ul class="nav navbar-nav">

      <?php
        while($cat_parente = mysqli_fetch_assoc($pquery)) :
      ?>

      <?php 
        $cat_parente_id = $cat_parente['cat_id'];
        $sql2 = "SELECT * FROM categorias WHERE cat_parente = '$cat_parente_id' ";
        $cquery = $db->query($sql2);
      ?>

      <!--Drop down das categorias-->
      <li class="dropdown textf" >
        <a href="#" class="dropdown-toggle textf" data-toggle="dropdown"><?php 
          echo $cat_parente['cat_nome']
        ?>
        <span class="caret"></span></a>

        <ul class="dropdown-menu textf" role="menu">
          <?php
            while($filho = mysqli_fetch_assoc($cquery)) : 
          ?>

          <li><a href="#" class="textf">
          <?php 
            echo $filho['cat_nome']
          ?>
          </a></li>

          <?php
            endwhile;
          ?>
        </ul>
      </li>
      <?php 
        endwhile;
      ?>
      </ul>

            <!-- campo de busca -->
            <div class="container" id="imaginary_container">
                <div class="input-group stylish-input-group" >
                    <input type="text" class="form-control textf" placeholder="Busca" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
    </div>
  </nav>
  <!-- navbar end -->


<!--check
  <!-- bg 
  <div id="fundo-image">-->

    <!-- div centro 
    <div id="bigbox"> -->
    

    <!-- alinhamento -->

    <!-- produtos -->
    
      
      <form action="insert_produto.php" class="fontf" method="post" enctype="multipart/form-data">

        <table align="center"  width="1000">
          <tr align="center">
          <td>
            <h2>Adicione novo produto</h2>
          </td>
          </tr>
        </table>
        
        <table align="center" width="1000" border="">

          <tr height="35">
            <td align="right"><b>Nome do produto:</b></td>
            <td class="ptablespc"><input type="text" name="produto_nome" size="60" required/></td>
          </tr>

          <tr height="35">
            <td align="right"><b>Categoria do produto:</b></td>
            <td class="ptablespc">
              <select name="produto_cat" required>
                <option>Selecione a categoria</option>

                <?php
                  $get_cats = "select * from categorias where cat_parente!=0 ";
                  $run_cats = $db->query($get_cats);

                  while($row_cats=mysqli_fetch_array($run_cats)){
                    $cat_id = $row_cats['cat_id'];
                    $cat_nome = $row_cats['cat_nome'];
                    $cat_parente = $row_cats['cat_parente'];

                    if($cat_parente==1)
                    $sexo='Masculino';
                    else
                    $sexo='Feminino';
                  
                  echo "<option value='$cat_id'>$cat_nome -> $sexo</option>";
                  }
                  ?>
                </select>

            </td>
          </tr>

          <tr height="35">  
            <td align="right"><b>Marca do produto:</b></td>
            <td class="ptablespc">

              <select name="produto_cat" required>
                <option>Selecione a marca</option>

                <?php
                  $get_marcas = "select * from marcas ";
                  $run_marcas = $db->query($get_marcas);

                  while($row_marcas=mysqli_fetch_array($run_marcas)){
                    $marcas_id = $row_marcas['marca_id'];
                    $marcas_nome = $row_marcas['marca_nome'];
                   

                    
                  
                  echo "<option value='$marcas_id'>$marcas_nome</option>";
                  }
                  ?>
                </select>


            </td>
          </tr>
          <br />
          <tr height="35">
            <td align="right"><b>Imagem do produto:</b></td>
            <td class="ptablespc"><input type="file" name="produto_img" required/></td>
          </tr>

          <tr height="35">
            <td align="right"><b>Preço do produto:</b></td>
            <td class="ptablespc"><input type="text" name="produto_preco" required/></td>
          </tr>

          <tr height="35">
            <td align="right"><b>Descrição do produto:</b></td>
            <td height="160"><textarea name="produto_desc" cols="50" rows="6"></textarea></td>
          </tr>

          <tr height="35">
            <td align="right"><b>Keywords do produto:</b></td>
            <td class="ptablespc"><input type="text" name="produto_keywords" size="60" /></td>
          </tr>

          <tr height="35" align="center">
          <br/>
            <td colspan="7"><input type="submit" name="insert_post" value="Inserir produto"></td>
          </tr>

        </table>
      


    <!-- rodape -->
   

    <div class="col-md-12">
    <nav class="navbar-static-bottom" id="foot">
      <div class="container">
        <center>
            <div class="col-md-4">
            <a href="#" class="textf"><font size=5>INSTITUCIONAL</font></a><br /><br />
            <a href="#" class="textf">» Sobre o BSShop!</a><br />
            <a href="#" class="textf">» Políticas do site</a><br />
            </div>
            <div class="col-md-4">
            <a href="#" class="textf"><font size=5>SERVIÇOS</font></a><br /><br />
            <a href="#" class="textf">» Entrega</a><br />
            <a href="#" class="textf">» Trocas e devoluções</a><br />
            <a href="#" class="textf">» Garantia</a><br />
            </div>
            <div class="col-md-4">
            <a href="#" class="textf"><font size=5>ATENDIMENTO</font></a><br /><br />
            <a href="#" class="textf">» Fale Conosco</a><br />
            <a href="#" class="textf">» Localização</a><br />
            </div>
        </center>
      </div>
    </nav>
    </div>
  



    <!-- details modal -->
    <?php include 'details-modal-1.php';
        /*  include 'details-modal-2.php';
          include 'details-modal-3.php';
          include 'details-modal-4.php';
          include 'details-modal-5.php';
          include 'details-modal-6.php';
          include 'details-modal-7.php';*/
    ?>

</body>
</html>




<?php
    
    if(isset($_POST['insert_post'])){

      $produto_nome = $_POST['produto_nome'];
      $produto_cat = $_POST['produto_cat'];
      $produto_marca = $_POST['produto_marca'];
      $produto_preco = $_POST['produto_preco'];
      $produto_desc = $_POST['produto_desc'];
      $produto_keywords = $_POST['produto_keywords'];

      //img
      $produto_img = $_FILES['produto_img']['name'];
      $produto_img_tmp = $_FILES['produto_img']['tmp_name'];

      $insert_produto = "insert into produtos(produto_cat, produto_marca,produto_nome,produto_preco,produto_desc,produto_img,produto_keywords) values('$produto_cat','$produto_marca','$produto_nome','$produto_preco','$produto_desc','$produto_img','$produto_keywords')";

      
      $insert_pro = $db->query($insert_produto);

      if($insert_pro){
        echo "<script>alert('Produto foi inserido!')</script>";
        echo "<script>window.open()</script>";
      }
    }
    
?>