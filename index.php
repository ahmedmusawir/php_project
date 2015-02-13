<!DOCTYPE html>
<html>
  <head>
    <title>The PHP Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/mystyle.css" rel="stylesheet" media="screen">
    <link href="../_css/style.css" rel="stylesheet" media="screen">
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=basic&skin=desert"></script> 


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries 
    [if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    [endif]
    -->
  <style type="text/css">
  </style>

  </head>

<body>
  
<div id="wrap">

  <header class="jumbotron">
  <div class="container">
  <h1><a href="http://www.htmlfivedev.com"><img src="logo-130x90.png"></a>PHP Project: The Basics<br/> <small>A Basic Overview of PHP Coding</small></h1>
  </div>
  </header>

<section class="container" id="main">
  
    <div class="row"> <!-- ROW 0 BEGIN-->

      <article class="col-sm-4 col-md-4 left_menu">
        <?php include('left_menu.php'); ?> <!-- LEFT MENU INCLUDED VIA PHP -->
      </article> <!--ARTICLE 1 ENDS -->

      <article class="col-sm-8 col-md-8">
      <h2 class="btn btn-block btn-primary disabled">Code View</h2>
      
        <div id="code_pane" class="thumbnail code-color">
          
                <?php highlight_file('first_php_code.php'); ?>
                <hr>
            <aside>
                <span id="run_code" class="btn btn-primary">Run Code</span>
                <h2 class="btn btn-info btn-block disabled">Result Pane</h2>
            </aside>

            <section id="display_code"></section>


      </div> <!-- END OF CODE VIEW -->

        
      
       
      </article> <!--ARTICLE 2 ENDS -->

    </div> <!-- ROW 1 ENDS --> 


</section> <!-- MAIN CONTENT END -->
</div><!-- End of Wrap -->

<footer class="navbar navbar-inverse footer">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://www.htmlfivedev.com">The PHP Project &copy; 2013</a>
        </div>
        
     </div>
</footer> <!--END OF FOOTER -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        // fade in content.
        //$( '.container' ).fadeIn(3000);   

        $('#run_code').on('click', function(){
          $( "#display_code" ).load( "php_pages/run_code.php #main").hide().fadeToggle(2000);

        });

        $('#get_var_code').on('click', function(){
          $( "#code_pane" ).load( "var_code_view.html");

        });

        $('#get_str_code').on('click', function(){
          $( "#code_pane" ).load( "str_code_view.html");

        });

        $('#get_num_code').on('click', function(){
          $( "#code_pane" ).load( "num_code_view.html");

        });
        $('#get_array_code').on('click', function(){
          $( "#code_pane" ).load( "array_code_view.html");

        });
        $('#get_bool_code').on('click', function(){
          $( "#code_pane" ).load( "bool_code_view.html");

        });
        $('#get_type_code').on('click', function(){
          $( "#code_pane" ).load( "type_code_view.html");

        });

        $('#get_ifelse_code').on('click', function(){
          $( "#code_pane" ).load( "ifelse_code_view.html");

        });

        $('#get_switch_code').on('click', function(){
          $( "#code_pane" ).load( "switch_code_view.html");

        });

        $('#get_while_code').on('click', function(){
          $( "#code_pane" ).load( "whileloop_code_view.html");

        });

        $('#get_for_code').on('click', function(){
          $( "#code_pane" ).load( "forloop_code_view.html");

        });

        $('#get_cont_code').on('click', function(){
          $( "#code_pane" ).load( "contbreak_code_view.html");

        });



    });

    </script>
  </body>
</html>