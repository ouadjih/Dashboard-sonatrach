<?php
session_start();
include_once("default.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>Financier</title>
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
      $req=$bdd->prepare('SELECT idp,nomp,financier FROM projet WHERE idp = :idp');
      $req->execute(array('idp'=>$_GET['idp']))or die(print_r($bdd->errorInfo()));
      $result=$req->fetch();
      echo '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h3>Projet : '.$result['nomp'].'</h3></div>';
      $resultF=json_decode($result['financier'],true);
      echo '<h6><a href="resultatProjetPh.php?idp='.$_GET['idp'].'" style="text-decoration=none;">
      <button class="btn btn-secondary">Physique</button></a></h6>';
  ?>

  <h2 style="display:inline-block;"><?php echo '<a href="modifierProjet.php?idp='. $_GET['idp'] .'">
  <button class="btn btn-secondary">Modifier</button></a>';?><h2>

  <div class="resultTable">
    <table>
      <caption style="caption-side:top;text-align:center;font-size:20px;">PROGRAMME <strong>FINANCIER</strong> MENSUEL</caption>
      <thead>
        <tr>
          <th>ACTIVITE</th>
          <th>G.T.</th>
          <th>T.S.</th>
          <th colspan="2">TRAIT.</th>
          <th colspan="2">RETRAIT.</th>
          <th>GRAV.</th>
          <th>AERO-MAG</th>
          <th colspan="2">SISMIQUE TERRAIN</th>
          <th rowspan="2">FORAGE</th>
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
          <th>"2D"</th>
          <th>"3D"</th>
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
          <th>M-équ.</th>
          <th>M-app.</th>
        </tr>
      </thead>
        <tbody>
        <tr>
          <th>Janvier</th>
          <td><?php echo $resultF['GT']['janv'];?></td>
          <td><?php echo $resultF['TS']['janv'];?></td>
          <td><?php echo $resultF['Trait']['Km']['janv'];?></td>
          <td><?php echo $resultF['Trait']['Km2']['janv'];?></td>
          <td><?php echo $resultF['Retrait']['Km']['janv'];?></td>
          <td><?php echo $resultF['Retrait']['Km2']['janv'];?></td>
          <td><?php echo $resultF['Grav']['janv'];?></td>
          <td><?php echo $resultF['Aero']['janv'];?></td>
          <td><?php echo $resultF['Sismiq']['2D']['janv'];?></td>
          <td><?php echo $resultF['Sismiq']['3D']['janv'];?></td>
          <td><?php echo $resultF['Forage']['janv'];?></td>
        </tr>
        <tr>
          <th>Février</th>
          <td><?php echo $resultF['GT']['fevr'];?></td>
          <td><?php echo $resultF['TS']['fevr'];?></td>
          <td><?php echo $resultF['Trait']['Km']['fevr'];?></td>
          <td><?php echo $resultF['Trait']['Km2']['fevr'];?></td>
          <td><?php echo $resultF['Retrait']['Km']['fevr'];?></td>
          <td><?php echo $resultF['Retrait']['Km2']['fevr'];?></td>
          <td><?php echo $resultF['Grav']['fevr'];?></td>
          <td><?php echo $resultF['Aero']['fevr'];?></td>
          <td><?php echo $resultF['Sismiq']['2D']['fevr'];?></td>
          <td><?php echo $resultF['Sismiq']['3D']['fevr'];?></td>
          <td><?php echo $resultF['Forage']['fevr'];?></td>
        </tr>
        <tr>
          <th>Mars</th>
          <td><?php echo $resultF['GT']['mars'];?></td>
          <td><?php echo $resultF['TS']['mars'];?></td>
          <td><?php echo $resultF['Trait']['Km']['mars'];?></td>
          <td><?php echo $resultF['Trait']['Km2']['mars'];?></td>
          <td><?php echo $resultF['Retrait']['Km']['mars'];?></td>
          <td><?php echo $resultF['Retrait']['Km2']['mars'];?></td>
          <td><?php echo $resultF['Grav']['mars'];?></td>
          <td><?php echo $resultF['Aero']['mars'];?></td>
          <td><?php echo $resultF['Sismiq']['2D']['mars'];?></td>
          <td><?php echo $resultF['Sismiq']['3D']['mars'];?></td>
          <td><?php echo $resultF['Forage']['mars'];?></td>
        </tr>
        <tr style="background-color:#fff6bd;">
          <th>Trimestre 1</th>
          <td><?php echo $resultF['GT']['trimestre1'];?></td>
          <td><?php echo $resultF['TS']['trimestre1'];?></td>
          <td><?php echo $resultF['Trait']['Km']['trimestre1'];?></td>
          <td><?php echo $resultF['Trait']['Km2']['trimestre1'];?></td>
          <td><?php echo $resultF['Retrait']['Km']['trimestre1'];?></td>
          <td><?php echo $resultF['Retrait']['Km2']['trimestre1'];?></td>
          <td><?php echo $resultF['Grav']['trimestre1'];?></td>
          <td><?php echo $resultF['Aero']['trimestre1'];?></td>
          <td><?php echo $resultF['Sismiq']['2D']['trimestre1'];?></td>
          <td><?php echo $resultF['Sismiq']['3D']['trimestre1'];?></td>
          <td><?php echo $resultF['Forage']['trimestre1'];?></td>
        </tr>
        <tr>
          <th>Avril</th>
          <td><?php echo $resultF['GT']['avr'];?></td>
          <td><?php echo $resultF['TS']['avr'];?></td>
          <td><?php echo $resultF['Trait']['Km']['avr'];?></td>
          <td><?php echo $resultF['Trait']['Km2']['avr'];?></td>
          <td><?php echo $resultF['Retrait']['Km']['avr'];?></td>
          <td><?php echo $resultF['Retrait']['Km2']['avr'];?></td>
          <td><?php echo $resultF['Grav']['avr'];?></td>
          <td><?php echo $resultF['Aero']['avr'];?></td>
          <td><?php echo $resultF['Sismiq']['2D']['avr'];?></td>
          <td><?php echo $resultF['Sismiq']['3D']['avr'];?></td>
          <td><?php echo $resultF['Forage']['avr'];?></td>
        </tr>
        <tr>
          <th>Mai</th>
          <td><?php echo $resultF['GT']['mai'];?></td>
          <td><?php echo $resultF['TS']['mai'];?></td>
          <td><?php echo $resultF['Trait']['Km']['mai'];?></td>
          <td><?php echo $resultF['Trait']['Km2']['mai'];?></td>
          <td><?php echo $resultF['Retrait']['Km']['mai'];?></td>
          <td><?php echo $resultF['Retrait']['Km2']['mai'];?></td>
          <td><?php echo $resultF['Grav']['mai'];?></td>
          <td><?php echo $resultF['Aero']['mai'];?></td>
          <td><?php echo $resultF['Sismiq']['2D']['mai'];?></td>
          <td><?php echo $resultF['Sismiq']['3D']['mai'];?></td>
          <td><?php echo $resultF['Forage']['mai'];?></td>
        </tr>
        <tr>
          <th>Juin</th>
          <td><?php echo $resultF['GT']['juin'];?></td>
          <td><?php echo $resultF['TS']['juin'];?></td>
          <td><?php echo $resultF['Trait']['Km']['juin'];?></td>
          <td><?php echo $resultF['Trait']['Km2']['juin'];?></td>
          <td><?php echo $resultF['Retrait']['Km']['juin'];?></td>
          <td><?php echo $resultF['Retrait']['Km2']['juin'];?></td>
          <td><?php echo $resultF['Grav']['juin'];?></td>
          <td><?php echo $resultF['Aero']['juin'];?></td>
          <td><?php echo $resultF['Sismiq']['2D']['juin'];?></td>
          <td><?php echo $resultF['Sismiq']['3D']['juin'];?></td>
          <td><?php echo $resultF['Forage']['juin'];?></td>
        </tr>
        <tr style="background-color:#fff6bd;">
          <th>Trimestre 2</th>
          <td><?php echo $resultF['GT']['trimestre2'];?></td>
          <td><?php echo $resultF['TS']['trimestre2'];?></td>
          <td><?php echo $resultF['Trait']['Km']['trimestre2'];?></td>
          <td><?php echo $resultF['Trait']['Km2']['trimestre2'];?></td>
          <td><?php echo $resultF['Retrait']['Km']['trimestre2'];?></td>
          <td><?php echo $resultF['Retrait']['Km2']['trimestre2'];?></td>
          <td><?php echo $resultF['Grav']['trimestre2'];?></td>
          <td><?php echo $resultF['Aero']['trimestre2'];?></td>
          <td><?php echo $resultF['Sismiq']['2D']['trimestre2'];?></td>
          <td><?php echo $resultF['Sismiq']['3D']['trimestre2'];?></td>
          <td><?php echo $resultF['Forage']['trimestre2'];?></td>
        </tr>
        <tr style="background-color:#FAFA84;">
          <th>Semestre 1</th>
          <td><?php echo $resultF['GT']['semestre1'];?></td>
          <td><?php echo $resultF['TS']['semestre1'];?></td>
          <td><?php echo $resultF['Trait']['Km']['semestre1'];?></td>
          <td><?php echo $resultF['Trait']['Km2']['semestre1'];?></td>
          <td><?php echo $resultF['Retrait']['Km']['semestre1'];?></td>
          <td><?php echo $resultF['Retrait']['Km2']['semestre1'];?></td>
          <td><?php echo $resultF['Grav']['semestre1'];?></td>
          <td><?php echo $resultF['Aero']['semestre1'];?></td>
          <td><?php echo $resultF['Sismiq']['2D']['semestre1'];?></td>
          <td><?php echo $resultF['Sismiq']['3D']['semestre1'];?></td>
          <td><?php echo $resultF['Forage']['semestre1'];?></td>
        </tr>
      <tr>
        <th>Juillet</th>
        <td><?php echo $resultF['GT']['juill'];?></td>
        <td><?php echo $resultF['TS']['juill'];?></td>
        <td><?php echo $resultF['Trait']['Km']['juill'];?></td>
        <td><?php echo $resultF['Trait']['Km2']['juill'];?></td>
        <td><?php echo $resultF['Retrait']['Km']['juill'];?></td>
        <td><?php echo $resultF['Retrait']['Km2']['juill'];?></td>
        <td><?php echo $resultF['Grav']['juill'];?></td>
        <td><?php echo $resultF['Aero']['juill'];?></td>
        <td><?php echo $resultF['Sismiq']['2D']['juill'];?></td>
        <td><?php echo $resultF['Sismiq']['3D']['juill'];?></td>
        <td><?php echo $resultF['Forage']['juill'];?></td>
      </tr>
      <tr>
        <th>Août</th>
        <td><?php echo $resultF['GT']['aout'];?></td>
        <td><?php echo $resultF['TS']['aout'];?></td>
        <td><?php echo $resultF['Trait']['Km']['aout'];?></td>
        <td><?php echo $resultF['Trait']['Km2']['aout'];?></td>
        <td><?php echo $resultF['Retrait']['Km']['aout'];?></td>
        <td><?php echo $resultF['Retrait']['Km2']['aout'];?></td>
        <td><?php echo $resultF['Grav']['aout'];?></td>
        <td><?php echo $resultF['Aero']['aout'];?></td>
        <td><?php echo $resultF['Sismiq']['2D']['aout'];?></td>
        <td><?php echo $resultF['Sismiq']['3D']['aout'];?></td>
        <td><?php echo $resultF['Forage']['aout'];?></td>
      </tr>
      <tr>
        <th>Septembre</th>
        <td><?php echo $resultF['GT']['sept'];?></td>
        <td><?php echo $resultF['TS']['sept'];?></td>
        <td><?php echo $resultF['Trait']['Km']['sept'];?></td>
        <td><?php echo $resultF['Trait']['Km2']['sept'];?></td>
        <td><?php echo $resultF['Retrait']['Km']['sept'];?></td>
        <td><?php echo $resultF['Retrait']['Km2']['sept'];?></td>
        <td><?php echo $resultF['Grav']['sept'];?></td>
        <td><?php echo $resultF['Aero']['sept'];?></td>
        <td><?php echo $resultF['Sismiq']['2D']['sept'];?></td>
        <td><?php echo $resultF['Sismiq']['3D']['sept'];?></td>
        <td><?php echo $resultF['Forage']['sept'];?></td>
      </tr>
      <tr style="background-color:#fff6bd;">
        <th>Trimestre 3</th>
        <td><?php echo $resultF['GT']['trimestre3'];?></td>
        <td><?php echo $resultF['TS']['trimestre3'];?></td>
        <td><?php echo $resultF['Trait']['Km']['trimestre3'];?></td>
        <td><?php echo $resultF['Trait']['Km2']['trimestre3'];?></td>
        <td><?php echo $resultF['Retrait']['Km']['trimestre3'];?></td>
        <td><?php echo $resultF['Retrait']['Km2']['trimestre3'];?></td>
        <td><?php echo $resultF['Grav']['trimestre3'];?></td>
        <td><?php echo $resultF['Aero']['trimestre3'];?></td>
        <td><?php echo $resultF['Sismiq']['2D']['trimestre3'];?></td>
        <td><?php echo $resultF['Sismiq']['3D']['trimestre3'];?></td>
        <td><?php echo $resultF['Forage']['trimestre3'];?></td>
      </tr>
      <tr>
        <th>Octobre</th>
        <td><?php echo $resultF['GT']['oct'];?></td>
        <td><?php echo $resultF['TS']['oct'];?></td>
        <td><?php echo $resultF['Trait']['Km']['oct'];?></td>
        <td><?php echo $resultF['Trait']['Km2']['oct'];?></td>
        <td><?php echo $resultF['Retrait']['Km']['oct'];?></td>
        <td><?php echo $resultF['Retrait']['Km2']['oct'];?></td>
        <td><?php echo $resultF['Grav']['oct'];?></td>
        <td><?php echo $resultF['Aero']['oct'];?></td>
        <td><?php echo $resultF['Sismiq']['2D']['oct'];?></td>
        <td><?php echo $resultF['Sismiq']['3D']['oct'];?></td>
        <td><?php echo $resultF['Forage']['oct'];?></td>
      </tr>
      <tr>
        <th>Novembre</th>
        <td><?php echo $resultF['GT']['nov'];?></td>
        <td><?php echo $resultF['TS']['nov'];?></td>
        <td><?php echo $resultF['Trait']['Km']['nov'];?></td>
        <td><?php echo $resultF['Trait']['Km2']['nov'];?></td>
        <td><?php echo $resultF['Retrait']['Km']['nov'];?></td>
        <td><?php echo $resultF['Retrait']['Km2']['nov'];?></td>
        <td><?php echo $resultF['Grav']['nov'];?></td>
        <td><?php echo $resultF['Aero']['nov'];?></td>
        <td><?php echo $resultF['Sismiq']['2D']['nov'];?></td>
        <td><?php echo $resultF['Sismiq']['3D']['nov'];?></td>
        <td><?php echo $resultF['Forage']['nov'];?></td>
      </tr>
      <tr>
        <th>Décembre</th>
        <td><?php echo $resultF['GT']['dec'];?></td>
        <td><?php echo $resultF['TS']['dec'];?></td>
        <td><?php echo $resultF['Trait']['Km']['dec'];?></td>
        <td><?php echo $resultF['Trait']['Km2']['dec'];?></td>
        <td><?php echo $resultF['Retrait']['Km']['dec'];?></td>
        <td><?php echo $resultF['Retrait']['Km2']['dec'];?></td>
        <td><?php echo $resultF['Grav']['dec'];?></td>
        <td><?php echo $resultF['Aero']['dec'];?></td>
        <td><?php echo $resultF['Sismiq']['2D']['dec'];?></td>
        <td><?php echo $resultF['Sismiq']['3D']['dec'];?></td>
        <td><?php echo $resultF['Forage']['dec'];?></td>
      </tr>
      <tr style="background-color:#fff6bd;">
        <th>Trimestre 4</th>
        <td><?php echo $resultF['GT']['trimestre4'];?></td>
        <td><?php echo $resultF['TS']['trimestre4'];?></td>
        <td><?php echo $resultF['Trait']['Km']['trimestre4'];?></td>
        <td><?php echo $resultF['Trait']['Km2']['trimestre4'];?></td>
        <td><?php echo $resultF['Retrait']['Km']['trimestre4'];?></td>
        <td><?php echo $resultF['Retrait']['Km2']['trimestre4'];?></td>
        <td><?php echo $resultF['Grav']['trimestre4'];?></td>
        <td><?php echo $resultF['Aero']['trimestre4'];?></td>
        <td><?php echo $resultF['Sismiq']['2D']['trimestre4'];?></td>
        <td><?php echo $resultF['Sismiq']['3D']['trimestre4'];?></td>
        <td><?php echo $resultF['Forage']['trimestre4'];?></td>
      </tr>
      <tr style="background-color:#FAFA84;">
        <th>Semestre 2</th>
        <td><?php echo $resultF['GT']['semestre2'];?></td>
        <td><?php echo $resultF['TS']['semestre2'];?></td>
        <td><?php echo $resultF['Trait']['Km']['semestre2'];?></td>
        <td><?php echo $resultF['Trait']['Km2']['semestre2'];?></td>
        <td><?php echo $resultF['Retrait']['Km']['semestre2'];?></td>
        <td><?php echo $resultF['Retrait']['Km2']['semestre2'];?></td>
        <td><?php echo $resultF['Grav']['semestre2'];?></td>
        <td><?php echo $resultF['Aero']['semestre2'];?></td>
        <td><?php echo $resultF['Sismiq']['2D']['semestre2'];?></td>
        <td><?php echo $resultF['Sismiq']['3D']['semestre2'];?></td>
        <td><?php echo $resultF['Forage']['semestre2'];?></td>
      </tr>
      </tbody>
      <tfoot>
        <tr style="background-color:#ECEC59;">
          <th>GLOBAL</th>
          <td><?php echo $resultF['GT']['GLOBAL'];?></td>
          <td><?php echo $resultF['TS']['GLOBAL'];?></td>
          <td><?php echo $resultF['Trait']['Km']['GLOBAL'];?></td>
          <td><?php echo $resultF['Trait']['Km2']['GLOBAL'];?></td>
          <td><?php echo $resultF['Retrait']['Km']['GLOBAL'];?></td>
          <td><?php echo $resultF['Retrait']['Km2']['GLOBAL'];?></td>
          <td><?php echo $resultF['Grav']['GLOBAL'];?></td>
          <td><?php echo $resultF['Aero']['GLOBAL'];?></td>
          <td><?php echo $resultF['Sismiq']['2D']['GLOBAL'];?></td>
          <td><?php echo $resultF['Sismiq']['3D']['GLOBAL'];?></td>
          <td><?php echo $resultF['Forage']['GLOBAL'];?></td>
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
    <button class="btn btn-dark btn-sm" onclick="Sismiq2D()">SISMIQUE<br/>2D</button>
    <button class="btn btn-dark btn-sm" onclick="Sismiq3D()">SISMIQUE<br/>3D</button>
    <button class="btn btn-dark btn-sm" onclick="Forage()">FORAGE</button>
  </div>
<!-- /////////////////////////////////-->
<?php
  $chartGT=join(',',$resultF['GT']);
  $chartTS=join(',',$resultF['TS']);
  $chartTraitKm=join(',',$resultF['Trait']['Km']);
  $chartTraitKm2=join(',',$resultF['Trait']['Km2']);
  $chartRetraitKm=join(',',$resultF['Retrait']['Km']);
  $chartRetraitKm2=join(',',$resultF['Retrait']['Km2']);
  $chartGrav=join(',',$resultF['Grav']);
  $chartAero=join(',',$resultF['Aero']);
  $chartSismiq2D=join(',',$resultF['Sismiq']['2D']);
  $chartSismiq3D=join(',',$resultF['Sismiq']['3D']);
  $chartForage=join(',',$resultF['Forage']);
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
    myChart.options.scales.yAxes[0].scaleLabel.labelString='M-ing';
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
  function Sismiq2D(){
    myChart.data.datasets[0].data=[<?php echo $chartSismiq2D; ?>];
    myChart.data.datasets[0].label='SISMIQUE 2D';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='M-équ';
    myChart.update();
  }
  function Sismiq3D(){
    myChart.data.datasets[0].data=[<?php echo $chartSismiq3D; ?>];
    myChart.data.datasets[0].label='SISMIQUE 3D';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='M-équ';
    myChart.update();
  }
  function Forage(){
    myChart.data.datasets[0].data=[<?php echo $chartForage; ?>];
    myChart.data.datasets[0].label='FORAGE';
    myChart.options.scales.yAxes[0].scaleLabel.labelString='M-app.';
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
    <button class="btn btn-dark btn-bg" onclick="Sismiq2D3D()">SISMIQUE 2D | SISMIQUE 3D</button>
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
  function Sismiq2D3D(){
    myChart2.data.datasets[0].data=[<?php echo $chartSismiq2D; ?>];
    myChart2.data.datasets[1].data=[<?php echo $chartSismiq3D; ?>];
    myChart2.data.datasets[0].label='SISMIQUE 2D';
    myChart2.data.datasets[1].label='SISMIQUE 3D';
    myChart2.options.scales.yAxes[0].scaleLabel.labelString='M-équ';
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
