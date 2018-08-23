<?php // CÓDIGO DO CABEÇALHO ?>
<html>
<head>
    <title>Pagina 1</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

        
</head>
    <body>

    	
        <header class="topo">
           <h1 style="text-align:center;font-family: verdana ">League land</h1>
        </header>

        
<?php        
    wp_nav_menu( array(
	'theme_location'  => 'primary',
	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
	'container'       => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id'    => 'bs-example-navbar-collapse-1',
	'menu_class'      => 'navbar-nav mr-auto',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker(),
) );

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">x <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">x</a>
      </li>
     
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>

<section class = "content-page">
<h1 style="text-align:center">Novos Icones de invocador</h1>

	<div class="row">
		   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>   <p>&nbsp;</p>
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWxinLnF6EJiE6MPQv3usCOjby0ElVOdh17R6U2T_aBi1gUUJK5w" class="rounded float-left" alt="...">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTjmsKdYIjBy3ct2QXgYgBGP8mwJh1TmJXlCZgeK6FX-w8CXoF" class="rounded float-right" alt="..."> 
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvF4U1P1ol2x6wonrvfvSpeUja6l7abN5j1_Wri9jeMJDCnHkPbQ" class="rounded float-center" alt="...">
	</div>

</section>

  
        
   