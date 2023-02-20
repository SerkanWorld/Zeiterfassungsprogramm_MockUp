

<?php
	$pageNamSt = basename($_SERVER['PHP_SELF']);
	$pageNam = chop($pageNamSt, ".php");
  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
	$d = '../zeiterfassung';
  $folder = scandir($d);
	$nav = '';
  $act = '';
  $img = '';
  
    if($curPageName != "index.php") {
      foreach($folder as $x => $val){
        if(strpos($val, '.php') !== false){
    
          $namesSit = chop($val, ".php");
          if( $val == $pageNamSt){
           $act = ' active';
          }
          else{
           $act = '';
          }
    
          switch($namesSit) {
            case "dashboard":
              $img = '<img src="img/dashboard.png" alt="" height=30>';
              break;
            case "arbeitszeit":
              $img = '<img src="img/zeit.png" alt="" height=30>';
              break;
            case "ferien":
              $img = '<img src="img/ferien.png" alt="" height=30>';
              break;
            case "projektuebersicht":
              $img = '<img src="img/projekt.png" alt="" height=30>';
              break;
            default:
              $img = '';
              break;
          }
          

          if($namesSit != "index"){
            $nav.='<li class="nav-item"><a class = "nav-link'.$act.'" href=/zeiterfassung/'.$val.'>'. $img . '   ' .strtoupper($namesSit).'</a></li>';
          }
          
    
          if($pageNam == "index")
          $pageNam =  "Anmelden";
        }	
        }	
    }
    
      
  
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
    <?php
			echo strtoupper($pageNam);
		?>
  </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <a href="dashboard.php"><img src="img\BlackLogo_SPWeb_Creations.svg" class="float-left" alt="Logo" height=125 style="margin-top: 5px"></a>
        </div>
        <div class="col-sm-8"><div class="text-center"><H1>Zeiterfassung</H1></div></div>
        <div class="col-sm-2"> <div class="text-right"><a href="index.php">login</a></div></div>
      </div>
    </div>    
  </div>

  <!--sidebar-->
<div class="container-fluid">
  <div class="row content">
    <div class="col-lg-2 sidebar"> 
      <nav class="navbar">
        <ul class="navbar-nav">
          <?php
         
            echo $nav;
            
          ?>
        </ul>
      </nav>
    </div>



  