<?php
session_start();
include_once("default.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>PHYSIQUE</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="Style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
</head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <?php
  if(isset($_GET['idp'])){
      try{
        $bdd=new PDO('mysql:host=localhost;dbname=sonatrach','root','')or die(print_r($bdd->errorInfo()));
      }
      catch(Exception $e){
        die('Erreur : '.$e->getMessage());
      }
      $req=$bdd->prepare('SELECT idp,nomp,physique FROM projet WHERE idp = :idp');
      $req->execute(array('idp'=>$_GET['idp']))or die(print_r($bdd->errorInfo()));
      $result=$req->fetch();
      echo '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h3>Projet : '.$result['nomp'].'</h3></div>';
      $resultPh=json_decode($result['physique'],true);
      echo '<h6><a href="resultatProjetF.php?idp='.$_GET['idp'].'" style="text-decoration=none;">
      <button class="btn btn-secondary">Financier</button></a></h6>';
  ?>

    <h2 style="display:inline-block;"><?php echo '<a href="modifierProjet.php?idp='. $_GET['idp'] .'">
  <button class="btn btn-secondary">Modifier</button></a>';?><h2>

  <div class="resultTable">
    <table>
      <caption style="caption-side:top;text-align:center;font-size:20px;">PROGRAMME <strong>PHYSIQUE</strong> MENSUEL</caption>
      <thead>
        <tr>
          <th>ACTIVITE</th>
          <th>G.T.</th>
          <th>T.S.</th>
          <th colspan="2">TRAIT.</th>
          <th colspan="2">RETRAIT.</th>
          <th>GRAV.</th>
          <th>AERO-MAG</th>
          <th colspan="6">SISMIQUE TERRAIN</th>
          <th colspan="3">FORAGE</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th colspan="3">"2D"</th>
          <th colspan="3">"3D"</th>
          <th colspan="3"></th>
        </tr>
        <tr>
          <th>Unité d'Oeuvre</th>
          <th>M-ing.</th>
          <th>M-ing.</th>
          <th>Km</th>
          <th>Km<sup>2<sup></th>
          <th>Km</th>
          <th>Km<sup>2</sup></th>
          <th>M-équ.</th>
          <th>Kms</th>
          <th>M-équ.</th>
          <th>Km</th>
          <th>PV</th>
          <th>M-équ.</th>
          <th>Km<sup>2</sup></th>
          <th>PV</th>
          <th>M-app.</th>
          <th>Mètres</th>
          <th>Puits-Equi</th>
        </tr>
      </thead>
        <tbody>
        <tr>
          <th>Janvier</th>
          <td><?php echo $resultPh['GT']['janv'];?></td>
          <td><?php echo $resultPh['TS']['janv'];?></td>
          <td><?php echo $resultPh['Trait']['Km']['janv'];?></td>
          <td><?php echo $resultPh['Trait']['Km2']['janv'];?></td>
          <td><?php echo $resultPh['Retrait']['Km']['janv'];?></td>
          <td><?php echo $resultPh['Retrait']['Km2']['janv'];?></td>
          <td><?php echo $resultPh['Grav']['janv'];?></td>
          <td><?php echo $resultPh['Aero']['janv'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['janv'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Km']['janv'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['PV']['janv'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['janv'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Km2']['janv'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['PV']['janv'];?></td>
          <td><?php echo $resultPh['Forage']['Mapp']['janv'];?></td>
          <td><?php echo $resultPh['Forage']['Metres']['janv'];?></td>
          <td><?php echo $resultPh['Forage']['Puits']['janv'];?></td>
        </tr>
        <tr>
          <th>Février</th>
          <td><?php echo $resultPh['GT']['fevr'];?></td>
          <td><?php echo $resultPh['TS']['fevr'];?></td>
          <td><?php echo $resultPh['Trait']['Km']['fevr'];?></td>
          <td><?php echo $resultPh['Trait']['Km2']['fevr'];?></td>
          <td><?php echo $resultPh['Retrait']['Km']['fevr'];?></td>
          <td><?php echo $resultPh['Retrait']['Km2']['fevr'];?></td>
          <td><?php echo $resultPh['Grav']['fevr'];?></td>
          <td><?php echo $resultPh['Aero']['fevr'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['fevr'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Km']['fevr'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['PV']['fevr'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['fevr'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Km2']['fevr'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['PV']['fevr'];?></td>
          <td><?php echo $resultPh['Forage']['Mapp']['fevr'];?></td>
          <td><?php echo $resultPh['Forage']['Metres']['fevr'];?></td>
          <td><?php echo $resultPh['Forage']['Puits']['fevr'];?></td>
        </tr>
        <tr>
          <th>Mars</th>
          <td><?php echo $resultPh['GT']['mars'];?></td>
          <td><?php echo $resultPh['TS']['mars'];?></td>
          <td><?php echo $resultPh['Trait']['Km']['mars'];?></td>
          <td><?php echo $resultPh['Trait']['Km2']['mars'];?></td>
          <td><?php echo $resultPh['Retrait']['Km']['mars'];?></td>
          <td><?php echo $resultPh['Retrait']['Km2']['mars'];?></td>
          <td><?php echo $resultPh['Grav']['mars'];?></td>
          <td><?php echo $resultPh['Aero']['mars'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['mars'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Km']['mars'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['PV']['mars'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['mars'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Km2']['mars'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['PV']['mars'];?></td>
          <td><?php echo $resultPh['Forage']['Mapp']['mars'];?></td>
          <td><?php echo $resultPh['Forage']['Metres']['mars'];?></td>
          <td><?php echo $resultPh['Forage']['Puits']['mars'];?></td>
        </tr>
        <tr style="background-color:#fff6bd;">
          <th>Trimestre 1</th>
          <td><?php echo $resultPh['GT']['trimestre1'];?></td>
          <td><?php echo $resultPh['TS']['trimestre1'];?></td>
          <td><?php echo $resultPh['Trait']['Km']['trimestre1'];?></td>
          <td><?php echo $resultPh['Trait']['Km2']['trimestre1'];?></td>
          <td><?php echo $resultPh['Retrait']['Km']['trimestre1'];?></td>
          <td><?php echo $resultPh['Retrait']['Km2']['trimestre1'];?></td>
          <td><?php echo $resultPh['Grav']['trimestre1'];?></td>
          <td><?php echo $resultPh['Aero']['trimestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['trimestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Km']['trimestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['PV']['trimestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['trimestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Km2']['trimestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['PV']['trimestre1'];?></td>
          <td><?php echo $resultPh['Forage']['Mapp']['trimestre1'];?></td>
          <td><?php echo $resultPh['Forage']['Metres']['trimestre1'];?></td>
          <td><?php echo $resultPh['Forage']['Puits']['trimestre1'];?></td>
        </tr>
        <tr>
          <th>Avril</th>
          <td><?php echo $resultPh['GT']['avr'];?></td>
          <td><?php echo $resultPh['TS']['avr'];?></td>
          <td><?php echo $resultPh['Trait']['Km']['avr'];?></td>
          <td><?php echo $resultPh['Trait']['Km2']['avr'];?></td>
          <td><?php echo $resultPh['Retrait']['Km']['avr'];?></td>
          <td><?php echo $resultPh['Retrait']['Km2']['avr'];?></td>
          <td><?php echo $resultPh['Grav']['avr'];?></td>
          <td><?php echo $resultPh['Aero']['avr'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['avr'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Km']['avr'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['PV']['avr'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['avr'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Km2']['avr'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['PV']['avr'];?></td>
          <td><?php echo $resultPh['Forage']['Mapp']['avr'];?></td>
          <td><?php echo $resultPh['Forage']['Metres']['avr'];?></td>
          <td><?php echo $resultPh['Forage']['Puits']['avr'];?></td>
        </tr>
        <tr>
          <th>Mai</th>
          <td><?php echo $resultPh['GT']['mai'];?></td>
          <td><?php echo $resultPh['TS']['mai'];?></td>
          <td><?php echo $resultPh['Trait']['Km']['mai'];?></td>
          <td><?php echo $resultPh['Trait']['Km2']['mai'];?></td>
          <td><?php echo $resultPh['Retrait']['Km']['mai'];?></td>
          <td><?php echo $resultPh['Retrait']['Km2']['mai'];?></td>
          <td><?php echo $resultPh['Grav']['mai'];?></td>
          <td><?php echo $resultPh['Aero']['mai'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['mai'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Km']['mai'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['PV']['mai'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['mai'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Km2']['mai'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['PV']['mai'];?></td>
          <td><?php echo $resultPh['Forage']['Mapp']['mai'];?></td>
          <td><?php echo $resultPh['Forage']['Metres']['mai'];?></td>
          <td><?php echo $resultPh['Forage']['Puits']['mai'];?></td>
        </tr>
        <tr>
          <th>Juin</th>
          <td><?php echo $resultPh['GT']['juin'];?></td>
          <td><?php echo $resultPh['TS']['juin'];?></td>
          <td><?php echo $resultPh['Trait']['Km']['juin'];?></td>
          <td><?php echo $resultPh['Trait']['Km2']['juin'];?></td>
          <td><?php echo $resultPh['Retrait']['Km']['juin'];?></td>
          <td><?php echo $resultPh['Retrait']['Km2']['juin'];?></td>
          <td><?php echo $resultPh['Grav']['juin'];?></td>
          <td><?php echo $resultPh['Aero']['juin'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['juin'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Km']['juin'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['PV']['juin'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['juin'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Km2']['juin'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['PV']['juin'];?></td>
          <td><?php echo $resultPh['Forage']['Mapp']['juin'];?></td>
          <td><?php echo $resultPh['Forage']['Metres']['juin'];?></td>
          <td><?php echo $resultPh['Forage']['Puits']['juin'];?></td>
        </tr>
        <tr style="background-color:#fff6bd;">
          <th>Trimestre 2</th>
          <td><?php echo $resultPh['GT']['trimestre2'];?></td>
          <td><?php echo $resultPh['TS']['trimestre2'];?></td>
          <td><?php echo $resultPh['Trait']['Km']['trimestre2'];?></td>
          <td><?php echo $resultPh['Trait']['Km2']['trimestre2'];?></td>
          <td><?php echo $resultPh['Retrait']['Km']['trimestre2'];?></td>
          <td><?php echo $resultPh['Retrait']['Km2']['trimestre2'];?></td>
          <td><?php echo $resultPh['Grav']['trimestre2'];?></td>
          <td><?php echo $resultPh['Aero']['trimestre2'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['trimestre2'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Km']['trimestre2'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['PV']['trimestre2'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['trimestre2'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Km2']['trimestre2'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['PV']['trimestre2'];?></td>
          <td><?php echo $resultPh['Forage']['Mapp']['trimestre2'];?></td>
          <td><?php echo $resultPh['Forage']['Metres']['trimestre2'];?></td>
          <td><?php echo $resultPh['Forage']['Puits']['trimestre2'];?></td>
        </tr>
        <tr style="background-color:#FAFA84;">
          <th>Semestre 1</th>
          <td><?php echo $resultPh['GT']['semestre1'];?></td>
          <td><?php echo $resultPh['TS']['semestre1'];?></td>
          <td><?php echo $resultPh['Trait']['Km']['semestre1'];?></td>
          <td><?php echo $resultPh['Trait']['Km2']['semestre1'];?></td>
          <td><?php echo $resultPh['Retrait']['Km']['semestre1'];?></td>
          <td><?php echo $resultPh['Retrait']['Km2']['semestre1'];?></td>
          <td><?php echo $resultPh['Grav']['semestre1'];?></td>
          <td><?php echo $resultPh['Aero']['semestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['semestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Km']['semestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['PV']['semestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['semestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Km2']['semestre1'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['PV']['semestre1'];?></td>
          <td><?php echo $resultPh['Forage']['Mapp']['semestre1'];?></td>
          <td><?php echo $resultPh['Forage']['Metres']['semestre1'];?></td>
          <td><?php echo $resultPh['Forage']['Puits']['semestre1'];?></td>
        </tr>
      <tr>
        <th>Juillet</th>
        <td><?php echo $resultPh['GT']['juill'];?></td>
        <td><?php echo $resultPh['TS']['juill'];?></td>
        <td><?php echo $resultPh['Trait']['Km']['juill'];?></td>
        <td><?php echo $resultPh['Trait']['Km2']['juill'];?></td>
        <td><?php echo $resultPh['Retrait']['Km']['juill'];?></td>
        <td><?php echo $resultPh['Retrait']['Km2']['juill'];?></td>
        <td><?php echo $resultPh['Grav']['juill'];?></td>
        <td><?php echo $resultPh['Aero']['juill'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['juill'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Km']['juill'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['PV']['juill'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['juill'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Km2']['juill'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['PV']['juill'];?></td>
        <td><?php echo $resultPh['Forage']['Mapp']['juill'];?></td>
        <td><?php echo $resultPh['Forage']['Metres']['juill'];?></td>
        <td><?php echo $resultPh['Forage']['Puits']['juill'];?></td>
      </tr>
      <tr>
        <th>Août</th>
        <td><?php echo $resultPh['GT']['aout'];?></td>
        <td><?php echo $resultPh['TS']['aout'];?></td>
        <td><?php echo $resultPh['Trait']['Km']['aout'];?></td>
        <td><?php echo $resultPh['Trait']['Km2']['aout'];?></td>
        <td><?php echo $resultPh['Retrait']['Km']['aout'];?></td>
        <td><?php echo $resultPh['Retrait']['Km2']['aout'];?></td>
        <td><?php echo $resultPh['Grav']['aout'];?></td>
        <td><?php echo $resultPh['Aero']['aout'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['aout'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Km']['aout'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['PV']['aout'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['aout'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Km2']['aout'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['PV']['aout'];?></td>
        <td><?php echo $resultPh['Forage']['Mapp']['aout'];?></td>
        <td><?php echo $resultPh['Forage']['Metres']['aout'];?></td>
        <td><?php echo $resultPh['Forage']['Puits']['aout'];?></td>
      </tr>
      <tr>
        <th>Septembre</th>
        <td><?php echo $resultPh['GT']['sept'];?></td>
        <td><?php echo $resultPh['TS']['sept'];?></td>
        <td><?php echo $resultPh['Trait']['Km']['sept'];?></td>
        <td><?php echo $resultPh['Trait']['Km2']['sept'];?></td>
        <td><?php echo $resultPh['Retrait']['Km']['sept'];?></td>
        <td><?php echo $resultPh['Retrait']['Km2']['sept'];?></td>
        <td><?php echo $resultPh['Grav']['sept'];?></td>
        <td><?php echo $resultPh['Aero']['sept'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['sept'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Km']['sept'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['PV']['sept'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['sept'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Km2']['sept'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['PV']['sept'];?></td>
        <td><?php echo $resultPh['Forage']['Mapp']['sept'];?></td>
        <td><?php echo $resultPh['Forage']['Metres']['sept'];?></td>
        <td><?php echo $resultPh['Forage']['Puits']['sept'];?></td>
      </tr>
      <tr style="background-color:#fff6bd;">
        <th>Trimestre 3</th>
        <td><?php echo $resultPh['GT']['trimestre3'];?></td>
        <td><?php echo $resultPh['TS']['trimestre3'];?></td>
        <td><?php echo $resultPh['Trait']['Km']['trimestre3'];?></td>
        <td><?php echo $resultPh['Trait']['Km2']['trimestre3'];?></td>
        <td><?php echo $resultPh['Retrait']['Km']['trimestre3'];?></td>
        <td><?php echo $resultPh['Retrait']['Km2']['trimestre3'];?></td>
        <td><?php echo $resultPh['Grav']['trimestre3'];?></td>
        <td><?php echo $resultPh['Aero']['trimestre3'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['trimestre3'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Km']['trimestre3'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['PV']['trimestre3'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['trimestre3'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Km2']['trimestre3'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['PV']['trimestre3'];?></td>
        <td><?php echo $resultPh['Forage']['Mapp']['trimestre3'];?></td>
        <td><?php echo $resultPh['Forage']['Metres']['trimestre3'];?></td>
        <td><?php echo $resultPh['Forage']['Puits']['trimestre3'];?></td>
      </tr>
      <tr>
        <th>Octobre</th>
        <td><?php echo $resultPh['GT']['oct'];?></td>
        <td><?php echo $resultPh['TS']['oct'];?></td>
        <td><?php echo $resultPh['Trait']['Km']['oct'];?></td>
        <td><?php echo $resultPh['Trait']['Km2']['oct'];?></td>
        <td><?php echo $resultPh['Retrait']['Km']['oct'];?></td>
        <td><?php echo $resultPh['Retrait']['Km2']['oct'];?></td>
        <td><?php echo $resultPh['Grav']['oct'];?></td>
        <td><?php echo $resultPh['Aero']['oct'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['oct'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Km']['oct'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['PV']['oct'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['oct'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Km2']['oct'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['PV']['oct'];?></td>
        <td><?php echo $resultPh['Forage']['Mapp']['oct'];?></td>
        <td><?php echo $resultPh['Forage']['Metres']['oct'];?></td>
        <td><?php echo $resultPh['Forage']['Puits']['oct'];?></td>
      </tr>
      <tr>
        <th>Novembre</th>
        <td><?php echo $resultPh['GT']['nov'];?></td>
        <td><?php echo $resultPh['TS']['nov'];?></td>
        <td><?php echo $resultPh['Trait']['Km']['nov'];?></td>
        <td><?php echo $resultPh['Trait']['Km2']['nov'];?></td>
        <td><?php echo $resultPh['Retrait']['Km']['nov'];?></td>
        <td><?php echo $resultPh['Retrait']['Km2']['nov'];?></td>
        <td><?php echo $resultPh['Grav']['nov'];?></td>
        <td><?php echo $resultPh['Aero']['nov'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['nov'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Km']['nov'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['PV']['nov'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['nov'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Km2']['nov'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['PV']['nov'];?></td>
        <td><?php echo $resultPh['Forage']['Mapp']['nov'];?></td>
        <td><?php echo $resultPh['Forage']['Metres']['nov'];?></td>
        <td><?php echo $resultPh['Forage']['Puits']['nov'];?></td>
      </tr>
      <tr>
        <th>Décembre</th>
        <td><?php echo $resultPh['GT']['dec'];?></td>
        <td><?php echo $resultPh['TS']['dec'];?></td>
        <td><?php echo $resultPh['Trait']['Km']['dec'];?></td>
        <td><?php echo $resultPh['Trait']['Km2']['dec'];?></td>
        <td><?php echo $resultPh['Retrait']['Km']['dec'];?></td>
        <td><?php echo $resultPh['Retrait']['Km2']['dec'];?></td>
        <td><?php echo $resultPh['Grav']['dec'];?></td>
        <td><?php echo $resultPh['Aero']['dec'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['dec'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Km']['dec'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['PV']['dec'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['dec'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Km2']['dec'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['PV']['dec'];?></td>
        <td><?php echo $resultPh['Forage']['Mapp']['dec'];?></td>
        <td><?php echo $resultPh['Forage']['Metres']['dec'];?></td>
        <td><?php echo $resultPh['Forage']['Puits']['dec'];?></td>
      </tr>
      <tr style="background-color:#fff6bd;">
        <th>Trimestre 4</th>
        <td><?php echo $resultPh['GT']['trimestre4'];?></td>
        <td><?php echo $resultPh['TS']['trimestre4'];?></td>
        <td><?php echo $resultPh['Trait']['Km']['trimestre4'];?></td>
        <td><?php echo $resultPh['Trait']['Km2']['trimestre4'];?></td>
        <td><?php echo $resultPh['Retrait']['Km']['trimestre4'];?></td>
        <td><?php echo $resultPh['Retrait']['Km2']['trimestre4'];?></td>
        <td><?php echo $resultPh['Grav']['trimestre4'];?></td>
        <td><?php echo $resultPh['Aero']['trimestre4'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['trimestre4'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Km']['trimestre4'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['PV']['trimestre4'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['trimestre4'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Km2']['trimestre4'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['PV']['trimestre4'];?></td>
        <td><?php echo $resultPh['Forage']['Mapp']['trimestre4'];?></td>
        <td><?php echo $resultPh['Forage']['Metres']['trimestre4'];?></td>
        <td><?php echo $resultPh['Forage']['Puits']['trimestre4'];?></td>
      </tr>
      <tr style="background-color:#FAFA84;">
        <th>Semestre 2</th>
        <td><?php echo $resultPh['GT']['semestre2'];?></td>
        <td><?php echo $resultPh['TS']['semestre2'];?></td>
        <td><?php echo $resultPh['Trait']['Km']['semestre2'];?></td>
        <td><?php echo $resultPh['Trait']['Km2']['semestre2'];?></td>
        <td><?php echo $resultPh['Retrait']['Km']['semestre2'];?></td>
        <td><?php echo $resultPh['Retrait']['Km2']['semestre2'];?></td>
        <td><?php echo $resultPh['Grav']['semestre2'];?></td>
        <td><?php echo $resultPh['Aero']['semestre2'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['semestre2'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['Km']['semestre2'];?></td>
        <td><?php echo $resultPh['Sismiq']['2D']['PV']['semestre2'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['semestre2'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['Km2']['semestre2'];?></td>
        <td><?php echo $resultPh['Sismiq']['3D']['PV']['semestre2'];?></td>
        <td><?php echo $resultPh['Forage']['Mapp']['semestre2'];?></td>
        <td><?php echo $resultPh['Forage']['Metres']['semestre2'];?></td>
        <td><?php echo $resultPh['Forage']['Puits']['semestre2'];?></td>
      </tr>
      </tbody>
      <tfoot>
        <tr style="background-color:#ECEC59;">
          <th>GLOBAL</th>
          <td><?php echo $resultPh['GT']['GLOBAL'];?></td>
          <td><?php echo $resultPh['TS']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Trait']['Km']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Trait']['Km2']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Retrait']['Km']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Retrait']['Km2']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Grav']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Aero']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Mequ']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['Km']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Sismiq']['2D']['PV']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Mequ']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['Km2']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Sismiq']['3D']['PV']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Forage']['Mapp']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Forage']['Metres']['GLOBAL'];?></td>
          <td><?php echo $resultPh['Forage']['Puits']['GLOBAL'];?></td>
        </tr>
      </tfoot>
    </table>
  </div><br/>
  <h2 style="text-align:center;margin-top:610px;margin-bottom:40px;" class="text-muted">Représentation graphique des activités<h2>
<!-- /////////////////////////////////-->
<!-- Buttons list-->
<!-- /////////////////////////////////-->
  <div class="btn-group" style="margin-left:140px;">
    <button class="btn btn-dark btn-sm" onclick="GT()">G.T.</button>
    <button class="btn btn-dark btn-sm" onclick="TS()">T.S.</button>
    <button class="btn btn-dark btn-sm" onclick="TraitKm()">TRAIT.<br/>Km</button>
    <button class="btn btn-dark btn-sm" onclick="TraitKm2()">TRAIT.<br/>Km<sup>2</sup></button>
    <button class="btn btn-dark btn-sm" onclick="RetraitKm()">RETRAIT.<br/>Km</button>
    <button class="btn btn-dark btn-sm" onclick="RetraitKm2()">RETRAIT.<br/>Km<sup>2</sup></button>
    <button class="btn btn-dark btn-sm" onclick="Grav()">GRAV.</button>
    <button class="btn btn-dark btn-sm" onclick="Aero()">AERO-MAG</button>
    <button class="btn btn-dark btn-sm" onclick="Sismiq2DMequ()">SISMIQUE<br/>2D(M-équ)</button>
    <button class="btn btn-dark btn-sm" onclick="Sismiq2DKm()">SISMIQUE<br/>2D(Km)</button>
    <button class="btn btn-dark btn-sm" onclick="Sismiq2DPV()">SISMIQUE<br/>2D(PV)</button>
  </div><br/>
  <div class="btn-group" style="margin-left:270px;">
    <button class="btn btn-dark btn-sm" onclick="Sismiq3DMequ()">SISMIQUE<br/>3D(M-équ)</button>
    <button class="btn btn-dark btn-sm" onclick="Sismiq3DKm2()">SISMIQUE<br/>3D(Km<sup>2</sup>)</button>
    <button class="btn btn-dark btn-sm" onclick="Sismiq3DPV()">SISMIQUE<br/>3D(PV)</button>
    <button class="btn btn-dark btn-sm" onclick="ForageMapp()">FORAGE<br/>(M-app)</button>
    <button class="btn btn-dark btn-sm" onclick="ForageMetres()">FORAGE<br/>(Mètres)</button>
    <button class="btn btn-dark btn-sm" onclick="ForagePuits()">FORAGE<br/>(Puits-Equi)</button>
  </div>
<!-- /////////////////////////////////-->
<?php
  $chartGT=join(',',$resultPh['GT']);
  $chartTS=join(',',$resultPh['TS']);
  $chartTraitKm=join(',',$resultPh['Trait']['Km']);
  $chartTraitKm2=join(',',$resultPh['Trait']['Km2']);
  $chartRetraitKm=join(',',$resultPh['Retrait']['Km']);
  $chartRetraitKm2=join(',',$resultPh['Retrait']['Km2']);
  $chartGrav=join(',',$resultPh['Grav']);
  $chartAero=join(',',$resultPh['Aero']);
  $chartSismiq2DMequ=join(',',$resultPh['Sismiq']['2D']['Mequ']);
  $chartSismiq2DKm=join(',',$resultPh['Sismiq']['2D']['Km']);
  $chartSismiq2DPV=join(',',$resultPh['Sismiq']['2D']['PV']);
  $chartSismiq3DMequ=join(',',$resultPh['Sismiq']['3D']['Mequ']);
  $chartSismiq3DKm2=join(',',$resultPh['Sismiq']['3D']['Km2']);
  $chartSismiq3DPV=join(',',$resultPh['Sismiq']['3D']['PV']);
  $chartForageMapp=join(',',$resultPh['Forage']['Mapp']);
  $chartForageMetres=join(',',$resultPh['Forage']['Metres']);
  $chartForagePuits=join(',',$resultPh['Forage']['Puits']);
  }
  else{
    echo '<br/> Informations didn\'t get received correctly in ListeProjet.php';
  }
  ?>
  <!-- /////////////////////////////////-->
  <!-- FIRST CHART-->
  <!-- /////////////////////////////////-->
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <canvas id="myChart"></canvas>
      </div>
    </div>
  </div>
<script>
  function GT(){
    myChart.data.datasets[0].data=[<?php echo $chartGT; ?>];
    myChart.data.datasets[0].label='G.T.';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='M-app';
    myChart.update();
  }
  function TS(){
    myChart.data.datasets[0].data=[<?php echo $chartTS; ?>];
    myChart.data.datasets[0].label='T.S.';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='M-ing';
    myChart.update();
  }
  function TraitKm(){
    myChart.data.datasets[0].data=[<?php echo $chartTraitKm; ?>];
    myChart.data.datasets[0].label='TRAIT (Km)';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='Km';
    myChart.update();
  }
  function TraitKm2(){
    myChart.data.datasets[0].data=[<?php echo $chartTraitKm2; ?>];
    myChart.data.datasets[0].label='TRAIT (Km2)';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='Km2';
    myChart.update();
  }
  function RetraitKm(){
    myChart.data.datasets[0].data=[<?php echo $chartRetraitKm; ?>];
    myChart.data.datasets[0].label='RETRAIT (Km)';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='Km';
    myChart.update();
  }
  function RetraitKm2(){
    myChart.data.datasets[0].data=[<?php echo $chartRetraitKm2; ?>];
    myChart.data.datasets[0].label='RETRAIT (Km2)';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='Km2';
    myChart.update();
  }
  function Grav(){
    myChart.data.datasets[0].data=[<?php echo $chartGrav; ?>];
    myChart.data.datasets[0].label='GRAV.';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='M-équ';
    myChart.update();
  }
  function Aero(){
    myChart.data.datasets[0].data=[<?php echo $chartAero; ?>];
    myChart.data.datasets[0].label='AERO-MAG';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='Kms';
    myChart.update();
  }
  function Sismiq2DMequ(){
    myChart.data.datasets[0].data=[<?php echo $chartSismiq2DMequ; ?>];
    myChart.data.datasets[0].label='SISMIQUE 2D';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='M-équ';
    myChart.update();
  }
  function Sismiq2DKm(){
    myChart.data.datasets[0].data=[<?php echo $chartSismiq2DKm; ?>];
    myChart.data.datasets[0].label='SISMIQUE 2D';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='Km';
    myChart.update();
  }
  function Sismiq2DPV(){
    myChart.data.datasets[0].data=[<?php echo $chartSismiq2DPV; ?>];
    myChart.data.datasets[0].label='SISMIQUE 2D';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='PV';
    myChart.update();
  }
  function Sismiq3DMequ(){
    myChart.data.datasets[0].data=[<?php echo $chartSismiq3DMequ; ?>];
    myChart.data.datasets[0].label='SISMIQUE 3D';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='M-équ';
    myChart.update();
  }
  function Sismiq3DKm2(){
    myChart.data.datasets[0].data=[<?php echo $chartSismiq3DKm2; ?>];
    myChart.data.datasets[0].label='SISMIQUE 3D';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='Km2';
    myChart.update();
  }
  function Sismiq3DPV(){
    myChart.data.datasets[0].data=[<?php echo $chartSismiq3DPV; ?>];
    myChart.data.datasets[0].label='SISMIQUE 3D';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='PV';
    myChart.update();
  }
  function ForageMapp(){
    myChart.data.datasets[0].data=[<?php echo $chartForageMapp; ?>];
    myChart.data.datasets[0].label='FORAGE';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='M-app.';
    myChart.update();
  }
  function ForageMetres(){
    myChart.data.datasets[0].data=[<?php echo $chartForageMetres; ?>];
    myChart.data.datasets[0].label='FORAGE';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='Mètres';
    myChart.update();
  }
  function ForagePuits(){
    myChart.data.datasets[0].data=[<?php echo $chartForagePuits; ?>];
    myChart.data.datasets[0].label='FORAGE';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='Puits-Equi';
    myChart.update();
  }
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['janv', 'fevr', 'mars','trimestre1' ,'avr', 'mai', 'juin','trimestre2','semestre1','juill','aout','sept','trimestre3','oct','nov',
          'dec','trimestre4','semestre2','GLOBAL'],
          datasets: [{
              label: 'G.T.',
              data: [<?php echo $chartGT; ?>],
              borderWidth: 1,
              hoverBorderWidth : 3 ,
              backgroundColor: [
                'rgba(0, 0, 0, 0.1)','rgba(0, 0, 0, 0.1)','rgba(0, 0, 0, 0.1)','#ffea61',
                'rgba(0, 0, 0, 0.1)','rgba(0, 0, 0, 0.1)','rgba(0, 0, 0, 0.1)','#ffea61','orange',
                'rgba(0, 0, 0, 0.1)','rgba(0, 0, 0, 0.1)','rgba(0, 0, 0, 0.1)','#ffea61',
                'rgba(0, 0, 0, 0.1)','rgba(0, 0, 0, 0.1)','rgba(0, 0, 0, 0.1)','#ffea61','orange','red'
            ]
          }]
      },
      options: {
          scales: {
              yAxes: [{
                scaleLabel:{
                  display:true,
                  labelString: 'M-ing',
                  fontSize:16
                },
                  ticks: {
                      beginAtZero: true
                  }
              }]
          },
          hover: {//so the numbers do not disappear when we hover over them
              animationDuration: 0
          },
          animation: {
  duration: 600,
  onComplete: function () {
      var ctx = this.chart.ctx;
      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, 'normal', Chart.defaults.global.defaultFontFamily);
      ctx.fillStyle = this.chart.config.options.defaultFontColor;
      ctx.textAlign = 'center';
      ctx.textBaseline = 'bottom';
      this.data.datasets.forEach(function (dataset) {
          for (var i = 0; i < dataset.data.length; i++) {
              var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
              ctx.fillText(dataset.data[i], model.x, model.y - 5);
          }
      });
  }}
      }
  });
  </script><br/>

  <!-- /////////////////////////////////-->
  <!-- SECOND CHART-->
  <!-- /////////////////////////////////-->
  <h2 style="text-align:center;margin-bottom:40px;" class="text-muted">comparaison entre activités<h2>
  <div class="btn-group" style="margin-left:210px;">
    <button class="btn btn-dark btn-bg" onclick="GTTS()">G.T. | T.S.</button>
    <button class="btn btn-dark btn-bg" onclick="TraitRetraitKm()">Trait | Retrait (Km)</button>
    <button class="btn btn-dark btn-bg" onclick="TraitRetraitKm2()">Trait | Retrait (Km<sup>2</sup>)</button>
    <button class="btn btn-dark btn-bg" onclick="Sismiq2D3DMequ()">2D | 3D (M-équ)</button>
    <button class="btn btn-dark btn-bg" onclick="Sismiq2D3DPV()">2D | 3D (PV)</button>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <canvas id="myChart2"></canvas>
      </div>
    </div>
  </div>
  <script>
  function GTTS(){
    myChart2.data.datasets[0].data=[<?php echo $chartGT; ?>];
    myChart2.data.datasets[1].data=[<?php echo $chartTS; ?>];
    myChart2.data.datasets[0].label='G.T.';
    myChart2.data.datasets[1].label='T.S.';
    myChart2.options.scales.yAxes[0].scaleLabel.labelString='M-ing.';
    myChart2.update();
  }
  function TraitRetraitKm(){
    myChart2.data.datasets[0].data=[<?php echo $chartTraitKm; ?>];
    myChart2.data.datasets[1].data=[<?php echo $chartRetraitKm; ?>];
    myChart2.data.datasets[0].label='Trait';
    myChart2.data.datasets[1].label='Retrait';
    myChart2.options.scales.yAxes[0].scaleLabel.labelString='Km';
    myChart2.update();
  }
  function TraitRetraitKm2(){
    myChart2.data.datasets[0].data=[<?php echo $chartTraitKm2; ?>];
    myChart2.data.datasets[1].data=[<?php echo $chartRetraitKm2; ?>];
    myChart2.data.datasets[0].label='Trait';
    myChart2.data.datasets[1].label='Retrait';
    myChart2.options.scales.yAxes[0].scaleLabel.labelString='Km2';
    myChart2.update();
  }
  function Sismiq2D3DMequ(){
    myChart2.data.datasets[0].data=[<?php echo $chartSismiq2DMequ; ?>];
    myChart2.data.datasets[1].data=[<?php echo $chartSismiq3DMequ; ?>];
    myChart2.data.datasets[0].label='SISMIQUE 2D';
    myChart2.data.datasets[1].label='SISMIQUE 3D';
    myChart2.options.scales.yAxes[0].scaleLabel.labelString='M-équ';
    myChart2.update();
  }
  function Sismiq2D3DPV(){
    myChart2.data.datasets[0].data=[<?php echo $chartSismiq2DPV; ?>];
    myChart2.data.datasets[1].data=[<?php echo $chartSismiq3DPV; ?>];
    myChart2.data.datasets[0].label='SISMIQUE 2D';
    myChart2.data.datasets[1].label='SISMIQUE 3D';
    myChart2.options.scales.yAxes[0].scaleLabel.labelString='PV';
    myChart2.update();
  }
  var ctx = document.getElementById('myChart2').getContext('2d');
  var myChart2 = new Chart(ctx, {
      type: 'line',
      data: {
          labels: ['janv', 'fevr', 'mars','trimestre1' ,'avr', 'mai', 'juin','trimestre2','semestre1','juill','aout','sept','trimestre3','oct','nov',
          'dec','trimestre4','semestre2','GLOBAL'],
          datasets: [{
              label: 'G.T.',
              data: [<?php echo $chartGT; ?>],
              borderColor: 'green',
              borderWidth: 3,
              //fill:'false'
          },{
            label: 'T.S.',
            data: [<?php echo $chartTS; ?>],
            borderColor: 'orange',
            borderWidth: 3,
            //fill:'false'
          }]
      },
      options: {
          scales: {
              yAxes: [{
                scaleLabel:{
                  display:true,
                  labelString: 'M-ing',
                  fontSize:16
                },
                  ticks: {
                      beginAtZero: true
                  }
              }]
          },
          hover: {//so the numbers do not disappear when we hover over them
              animationDuration: 0
          },
          animation: {
  duration: 600,
  onComplete: function () {
      var ctx = this.chart.ctx;
      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, 'normal', Chart.defaults.global.defaultFontFamily);
      ctx.fillStyle = this.chart.config.options.defaultFontColor;
      ctx.textAlign = 'center';
      ctx.textBaseline = 'bottom';
      this.data.datasets.forEach(function (dataset) {
          for (var i = 0; i < dataset.data.length; i++) {
              var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
              ctx.fillText(dataset.data[i], model.x, model.y - 5);
          }
      });
  }}
      }
  });
  </script>
</main>
</body>
</html>
