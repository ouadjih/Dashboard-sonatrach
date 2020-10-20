<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<?php
  include_once("default.php");
  if(isset($_GET['idp'])){
    try{
      $bdd=new PDO('mysql:host=localhost;dbname=sonatrach','root','');
    }
    catch(Exception $e){
      die('Erreur : '.$e->getMessage());
    }
    $req=$bdd->prepare('SELECT*FROM projet WHERE idp = :idp');
    $req->execute(array('idp'=>$_GET['idp']))or die(print_r($bdd->errorInfo()));
    $result=$req->fetch();
    $resultF=json_decode($result['financier'],true);
    $resultPh=json_decode($result['physique'],true);
?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Modification de projet : <?php echo $result['nomp']; ?></h1>
        </div>
    <form action="inputAddProjet.php" method="post">
<!--//////////////////////////////////-->
<!--HIDDEN INPUT-->
<input type="hidden" name="idp" value="<?php echo $_GET['idp']; ?>"/>
<!--//////////////////////////////////-->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Programme Financier : </h1>
      </div>

  <table>
    <caption>PROGRAMME <strong>FINANCIER</strong> MENSUEL</caption>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
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
        <td><input type="number" name="janvGT_f" value="<?php echo $resultF['GT']['janv'];?>"></td>
        <td><input type="number" name="janvTS_f" value="<?php echo $resultF['TS']['janv'];?>"></td>
        <td><input type="number" name="janvTraitKm_f" value="<?php echo $resultF['Trait']['Km']['janv'];?>"></td>
        <td><input type="number" name="janvTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['janv'];?>"></td>
        <td><input type="number" name="janvRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['janv'];?>"></td>
        <td><input type="number" name="janvRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['janv'];?>"></td>
        <td><input type="number" name="janvGrav_f" value="<?php echo $resultF['Grav']['janv'];?>"></td>
        <td><input type="number" name="janvAero_f" value="<?php echo $resultF['Aero']['janv'];?>"></td>
        <td><input type="number" name="janvSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['janv'];?>"></td>
        <td><input type="number" name="janvSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['janv'];?>"></td>
        <td><input type="number" name="janvForage_f" value="<?php echo $resultF['Forage']['janv'];?>"></td>
      </tr>
      <tr>
        <th>Février</th>
        <td><input type="number" name="fevrGT_f" value="<?php echo $resultF['GT']['fevr'];?>"></td>
        <td><input type="number" name="fevrTS_f" value="<?php echo $resultF['TS']['fevr'];?>"></td>
        <td><input type="number" name="fevrTraitKm_f" value="<?php echo $resultF['Trait']['Km']['fevr'];?>"></td>
        <td><input type="number" name="fevrTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['fevr'];?>"></td>
        <td><input type="number" name="fevrRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['fevr'];?>"></td>
        <td><input type="number" name="fevrRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['fevr'];?>"></td>
        <td><input type="number" name="fevrGrav_f" value="<?php echo $resultF['Grav']['fevr'];?>"></td>
        <td><input type="number" name="fevrAero_f" value="<?php echo $resultF['Aero']['fevr'];?>"></td>
        <td><input type="number" name="fevrSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['fevr'];?>"></td>
        <td><input type="number" name="fevrSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['fevr'];?>"></td>
        <td><input type="number" name="fevrForage_f" value="<?php echo $resultF['Forage']['fevr'];?>"></td>
      </tr>
      <tr>
        <th>Mars</th>
        <td><input type="number" name="marsGT_f" value="<?php echo $resultF['GT']['mars'];?>"></td>
        <td><input type="number" name="marsTS_f" value="<?php echo $resultF['TS']['mars'];?>"></td>
        <td><input type="number" name="marsTraitKm_f" value="<?php echo $resultF['Trait']['Km']['mars'];?>"></td>
        <td><input type="number" name="marsTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['mars'];?>"></td>
        <td><input type="number" name="marsRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['mars'];?>"></td>
        <td><input type="number" name="marsRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['mars'];?>"></td>
        <td><input type="number" name="marsGrav_f" value="<?php echo $resultF['Grav']['mars'];?>"></td>
        <td><input type="number" name="marsAero_f" value="<?php echo $resultF['Aero']['mars'];?>"></td>
        <td><input type="number" name="marsSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['mars'];?>"></td>
        <td><input type="number" name="marsSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['mars'];?>"></td>
        <td><input type="number" name="marsForage_f" value="<?php echo $resultF['Forage']['mars'];?>"></td>
      </tr>
      <tr>
        <th>Avril</th>
        <td><input type="number" name="avrGT_f" value="<?php echo $resultF['GT']['avr'];?>"></td>
        <td><input type="number" name="avrTS_f" value="<?php echo $resultF['TS']['avr'];?>"></td>
        <td><input type="number" name="avrTraitKm_f" value="<?php echo $resultF['Trait']['Km']['avr'];?>"></td>
        <td><input type="number" name="avrTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['avr'];?>"></td>
        <td><input type="number" name="avrRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['avr'];?>"></td>
        <td><input type="number" name="avrRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['avr'];?>"></td>
        <td><input type="number" name="avrGrav_f" value="<?php echo $resultF['Grav']['avr'];?>"></td>
        <td><input type="number" name="avrAero_f" value="<?php echo $resultF['Aero']['avr'];?>"></td>
        <td><input type="number" name="avrSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['avr'];?>"></td>
        <td><input type="number" name="avrSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['avr'];?>"></td>
        <td><input type="number" name="avrForage_f" value="<?php echo $resultF['Forage']['avr'];?>"></td>
      </tr>
      <tr>
        <th>Mai</th>
        <td><input type="number" name="maiGT_f" value="<?php echo $resultF['GT']['mai'];?>"></td>
        <td><input type="number" name="maiTS_f" value="<?php echo $resultF['TS']['mai'];?>"></td>
        <td><input type="number" name="maiTraitKm_f" value="<?php echo $resultF['Trait']['Km']['mai'];?>"></td>
        <td><input type="number" name="maiTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['mai'];?>"></td>
        <td><input type="number" name="maiRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['mai'];?>"></td>
        <td><input type="number" name="maiRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['mai'];?>"></td>
        <td><input type="number" name="maiGrav_f" value="<?php echo $resultF['Grav']['mai'];?>"></td>
        <td><input type="number" name="maiAero_f" value="<?php echo $resultF['Aero']['mai'];?>"></td>
        <td><input type="number" name="maiSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['mai'];?>"></td>
        <td><input type="number" name="maiSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['mai'];?>"></td>
        <td><input type="number" name="maiForage_f" value="<?php echo $resultF['Forage']['mai'];?>"></td>
      </tr>
      <tr>
        <th>Juin</th>
        <td><input type="number" name="juinGT_f" value="<?php echo $resultF['GT']['juin'];?>"></td>
        <td><input type="number" name="juinTS_f" value="<?php echo $resultF['TS']['juin'];?>"></td>
        <td><input type="number" name="juinTraitKm_f" value="<?php echo $resultF['Trait']['Km']['juin'];?>"></td>
        <td><input type="number" name="juinTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['juin'];?>"></td>
        <td><input type="number" name="juinRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['juin'];?>"></td>
        <td><input type="number" name="juinRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['juin'];?>"></td>
        <td><input type="number" name="juinGrav_f" value="<?php echo $resultF['Grav']['juin'];?>"></td>
        <td><input type="number" name="juinAero_f" value="<?php echo $resultF['Aero']['juin'];?>"></td>
        <td><input type="number" name="juinSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['juin'];?>"></td>
        <td><input type="number" name="juinSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['juin'];?>"></td>
        <td><input type="number" name="juinForage_f" value="<?php echo $resultF['Forage']['juin'];?>"></td>
      </tr>
    <tr>
      <th>Juillet</th>
      <td><input type="number" name="juillGT_f" value="<?php echo $resultF['GT']['juill'];?>"></td>
      <td><input type="number" name="juillTS_f" value="<?php echo $resultF['TS']['juill'];?>"></td>
      <td><input type="number" name="juillTraitKm_f" value="<?php echo $resultF['Trait']['Km']['juill'];?>"></td>
      <td><input type="number" name="juillTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['juill'];?>"></td>
      <td><input type="number" name="juillRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['juill'];?>"></td>
      <td><input type="number" name="juillRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['juill'];?>"></td>
      <td><input type="number" name="juillGrav_f" value="<?php echo $resultF['Grav']['juill'];?>"></td>
      <td><input type="number" name="juillAero_f" value="<?php echo $resultF['Aero']['juill'];?>"></td>
      <td><input type="number" name="juillSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['juill'];?>"></td>
      <td><input type="number" name="juillSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['juill'];?>"></td>
      <td><input type="number" name="juillForage_f" value="<?php echo $resultF['Forage']['juill'];?>"></td>
    </tr>
    <tr>
      <th>Août</th>
      <td><input type="number" name="aoutGT_f" value="<?php echo $resultF['GT']['aout'];?>"></td>
      <td><input type="number" name="aoutTS_f" value="<?php echo $resultF['TS']['aout'];?>"></td>
      <td><input type="number" name="aoutTraitKm_f" value="<?php echo $resultF['Trait']['Km']['aout'];?>"></td>
      <td><input type="number" name="aoutTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['aout'];?>"></td>
      <td><input type="number" name="aoutRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['aout'];?>"></td>
      <td><input type="number" name="aoutRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['aout'];?>"></td>
      <td><input type="number" name="aoutGrav_f" value="<?php echo $resultF['Grav']['aout'];?>"></td>
      <td><input type="number" name="aoutAero_f" value="<?php echo $resultF['Aero']['aout'];?>"></td>
      <td><input type="number" name="aoutSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['aout'];?>"></td>
      <td><input type="number" name="aoutSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['aout'];?>"></td>
      <td><input type="number" name="aoutForage_f" value="<?php echo $resultF['Forage']['aout'];?>"></td>
    </tr>
    <tr>
      <th>Septembre</th>
      <td><input type="number" name="septGT_f" value="<?php echo $resultF['GT']['sept'];?>"></td>
      <td><input type="number" name="septTS_f" value="<?php echo $resultF['TS']['sept'];?>"></td>
      <td><input type="number" name="septTraitKm_f" value="<?php echo $resultF['Trait']['Km']['sept'];?>"></td>
      <td><input type="number" name="septTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['sept'];?>"></td>
      <td><input type="number" name="septRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['sept'];?>"></td>
      <td><input type="number" name="septRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['sept'];?>"></td>
      <td><input type="number" name="septGrav_f" value="<?php echo $resultF['Grav']['sept'];?>"></td>
      <td><input type="number" name="septAero_f" value="<?php echo $resultF['Aero']['sept'];?>"></td>
      <td><input type="number" name="septSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['sept'];?>"></td>
      <td><input type="number" name="septSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['sept'];?>"></td>
      <td><input type="number" name="septForage_f" value="<?php echo $resultF['Forage']['sept'];?>"></td>
    </tr>
    <tr>
      <th>Octobre</th>
      <td><input type="number" name="octGT_f" value="<?php echo $resultF['GT']['oct'];?>"></td>
      <td><input type="number" name="octTS_f" value="<?php echo $resultF['TS']['oct'];?>"></td>
      <td><input type="number" name="octTraitKm_f" value="<?php echo $resultF['Trait']['Km']['oct'];?>"></td>
      <td><input type="number" name="octTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['oct'];?>"></td>
      <td><input type="number" name="octRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['oct'];?>"></td>
      <td><input type="number" name="octRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['oct'];?>"></td>
      <td><input type="number" name="octGrav_f" value="<?php echo $resultF['Grav']['oct'];?>"></td>
      <td><input type="number" name="octAero_f" value="<?php echo $resultF['Aero']['oct'];?>"></td>
      <td><input type="number" name="octSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['oct'];?>"></td>
      <td><input type="number" name="octSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['oct'];?>"></td>
      <td><input type="number" name="octForage_f" value="<?php echo $resultF['Forage']['oct'];?>"></td>
    </tr>
    <tr>
      <th>Novembre</th>
      <td><input type="number" name="novGT_f" value="<?php echo $resultF['GT']['nov'];?>"></td>
      <td><input type="number" name="novTS_f" value="<?php echo $resultF['TS']['nov'];?>"></td>
      <td><input type="number" name="novTraitKm_f" value="<?php echo $resultF['Trait']['Km']['nov'];?>"></td>
      <td><input type="number" name="novTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['nov'];?>"></td>
      <td><input type="number" name="novRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['nov'];?>"></td>
      <td><input type="number" name="novRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['nov'];?>"></td>
      <td><input type="number" name="novGrav_f" value="<?php echo $resultF['Grav']['nov'];?>"></td>
      <td><input type="number" name="novAero_f" value="<?php echo $resultF['Aero']['nov'];?>"></td>
      <td><input type="number" name="novSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['nov'];?>"></td>
      <td><input type="number" name="novSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['nov'];?>"></td>
      <td><input type="number" name="novForage_f" value="<?php echo $resultF['Forage']['nov'];?>"></td>
    </tr>
    <tr>
      <th>Décembre</th>
      <td><input type="number" name="decGT_f" value="<?php echo $resultF['GT']['dec'];?>"></td>
      <td><input type="number" name="decTS_f" value="<?php echo $resultF['TS']['dec'];?>"></td>
      <td><input type="number" name="decTraitKm_f" value="<?php echo $resultF['Trait']['Km']['dec'];?>"></td>
      <td><input type="number" name="decTraitKm2_f" value="<?php echo $resultF['Trait']['Km2']['dec'];?>"></td>
      <td><input type="number" name="decRetraitKm_f" value="<?php echo $resultF['Retrait']['Km']['dec'];?>"></td>
      <td><input type="number" name="decRetraitKm2_f" value="<?php echo $resultF['Retrait']['Km2']['dec'];?>"></td>
      <td><input type="number" name="decGrav_f" value="<?php echo $resultF['Grav']['dec'];?>"></td>
      <td><input type="number" name="decAero_f" value="<?php echo $resultF['Aero']['dec'];?>"></td>
      <td><input type="number" name="decSismiq2D_f" value="<?php echo $resultF['Sismiq']['2D']['dec'];?>"></td>
      <td><input type="number" name="decSismiq3D_f" value="<?php echo $resultF['Sismiq']['3D']['dec'];?>"></td>
      <td><input type="number" name="decForage_f" value="<?php echo $resultF['Forage']['dec'];?>"></td>
    </tr>
    </tbody>
  </table>


      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Programme physique : </h1>
      </div>

  <table>
    <caption>PROGRAMME <strong>PHYSIQUE</strong> MENSUEL</caption>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th colspan="3">"2D"</th>
        <th colspan="3">"3D"</th>
        <td colspan="3"></td>
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
        <td><input type="number" name="janvGT_ph" value="<?php echo $resultPh['GT']['janv'];?>"></td>
        <td><input type="number" name="janvTS_ph" value="<?php echo $resultPh['TS']['janv'];?>"></td>
        <td><input type="number" name="janvTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['janv'];?>"></td>
        <td><input type="number" name="janvTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['janv'];?>"></td>
        <td><input type="number" name="janvRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['janv'];?>"></td>
        <td><input type="number" name="janvRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['janv'];?>"></td>
        <td><input type="number" name="janvGrav_ph" value="<?php echo $resultPh['Grav']['janv'];?>"></td>
        <td><input type="number" name="janvAero_ph" value="<?php echo $resultPh['Aero']['janv'];?>"></td>
        <td><input type="number" name="janvSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['janv'];?>"></td>
        <td><input type="number" name="janvSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['janv'];?>"></td>
        <td><input type="number" name="janvSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['janv'];?>"></td>
        <td><input type="number" name="janvSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['janv'];?>"></td>
        <td><input type="number" name="janvSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['janv'];?>"></td>
        <td><input type="number" name="janvSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['janv'];?>"></td>
        <td><input type="number" name="janvForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['janv'];?>"></td>
        <td><input type="number" name="janvForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['janv'];?>"></td>
        <td><input type="number" name="janvForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['janv'];?>"></td>
      </tr>
      <tr>
        <th>Février</th>
        <td><input type="number" name="fevrGT_ph" value="<?php echo $resultPh['GT']['fevr'];?>"></td>
        <td><input type="number" name="fevrTS_ph" value="<?php echo $resultPh['TS']['fevr'];?>"></td>
        <td><input type="number" name="fevrTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['fevr'];?>"></td>
        <td><input type="number" name="fevrTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['fevr'];?>"></td>
        <td><input type="number" name="fevrRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['fevr'];?>"></td>
        <td><input type="number" name="fevrRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['fevr'];?>"></td>
        <td><input type="number" name="fevrGrav_ph" value="<?php echo $resultPh['Grav']['fevr'];?>"></td>
        <td><input type="number" name="fevrAero_ph" value="<?php echo $resultPh['Aero']['fevr'];?>"></td>
        <td><input type="number" name="fevrSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['fevr'];?>"></td>
        <td><input type="number" name="fevrSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['fevr'];?>"></td>
        <td><input type="number" name="fevrSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['fevr'];?>"></td>
        <td><input type="number" name="fevrSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['fevr'];?>"></td>
        <td><input type="number" name="fevrSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['fevr'];?>"></td>
        <td><input type="number" name="fevrSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['fevr'];?>"></td>
        <td><input type="number" name="fevrForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['fevr'];?>"></td>
        <td><input type="number" name="fevrForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['fevr'];?>"></td>
        <td><input type="number" name="fevrForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['fevr'];?>"></td>
      </tr>
      <tr>
        <th>Mars</th>
        <td><input type="number" name="marsGT_ph" value="<?php echo $resultPh['GT']['mars'];?>"></td>
        <td><input type="number" name="marsTS_ph" value="<?php echo $resultPh['TS']['mars'];?>"></td>
        <td><input type="number" name="marsTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['mars'];?>"></td>
        <td><input type="number" name="marsTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['mars'];?>"></td>
        <td><input type="number" name="marsRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['mars'];?>"></td>
        <td><input type="number" name="marsRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['mars'];?>"></td>
        <td><input type="number" name="marsGrav_ph" value="<?php echo $resultPh['Grav']['mars'];?>"></td>
        <td><input type="number" name="marsAero_ph" value="<?php echo $resultPh['Aero']['mars'];?>"></td>
        <td><input type="number" name="marsSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['mars'];?>"></td>
        <td><input type="number" name="marsSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['mars'];?>"></td>
        <td><input type="number" name="marsSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['mars'];?>"></td>
        <td><input type="number" name="marsSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['mars'];?>"></td>
        <td><input type="number" name="marsSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['mars'];?>"></td>
        <td><input type="number" name="marsSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['mars'];?>"></td>
        <td><input type="number" name="marsForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['mars'];?>"></td>
        <td><input type="number" name="marsForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['mars'];?>"></td>
        <td><input type="number" name="marsForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['mars'];?>"></td>
      </tr>
      <tr>
        <th>Avril</th>
        <td><input type="number" name="avrGT_ph" value="<?php echo $resultPh['GT']['avr'];?>"></td>
        <td><input type="number" name="avrTS_ph" value="<?php echo $resultPh['TS']['avr'];?>"></td>
        <td><input type="number" name="avrTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['avr'];?>"></td>
        <td><input type="number" name="avrTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['avr'];?>"></td>
        <td><input type="number" name="avrRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['avr'];?>"></td>
        <td><input type="number" name="avrRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['avr'];?>"></td>
        <td><input type="number" name="avrGrav_ph" value="<?php echo $resultPh['Grav']['avr'];?>"></td>
        <td><input type="number" name="avrAero_ph" value="<?php echo $resultPh['Aero']['avr'];?>"></td>
        <td><input type="number" name="avrSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['avr'];?>"></td>
        <td><input type="number" name="avrSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['avr'];?>"></td>
        <td><input type="number" name="avrSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['avr'];?>"></td>
        <td><input type="number" name="avrSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['avr'];?>"></td>
        <td><input type="number" name="avrSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['avr'];?>"></td>
        <td><input type="number" name="avrSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['avr'];?>"></td>
        <td><input type="number" name="avrForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['avr'];?>"></td>
        <td><input type="number" name="avrForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['avr'];?>"></td>
        <td><input type="number" name="avrForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['avr'];?>"></td>
      </tr>
      <tr>
        <th>Mai</th>
        <td><input type="number" name="maiGT_ph" value="<?php echo $resultPh['GT']['mai'];?>"></td>
        <td><input type="number" name="maiTS_ph" value="<?php echo $resultPh['TS']['mai'];?>"></td>
        <td><input type="number" name="maiTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['mai'];?>"></td>
        <td><input type="number" name="maiTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['mai'];?>"></td>
        <td><input type="number" name="maiRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['mai'];?>"></td>
        <td><input type="number" name="maiRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['mai'];?>"></td>
        <td><input type="number" name="maiGrav_ph" value="<?php echo $resultPh['Grav']['mai'];?>"></td>
        <td><input type="number" name="maiAero_ph" value="<?php echo $resultPh['Aero']['mai'];?>"></td>
        <td><input type="number" name="maiSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['mai'];?>"></td>
        <td><input type="number" name="maiSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['mai'];?>"></td>
        <td><input type="number" name="maiSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['mai'];?>"></td>
        <td><input type="number" name="maiSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['mai'];?>"></td>
        <td><input type="number" name="maiSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['mai'];?>"></td>
        <td><input type="number" name="maiSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['mai'];?>"></td>
        <td><input type="number" name="maiForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['mai'];?>"></td>
        <td><input type="number" name="maiForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['mai'];?>"></td>
        <td><input type="number" name="maiForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['mai'];?>"></td>
      </tr>
      <tr>
        <th>Juin</th>
        <td><input type="number" name="juinGT_ph" value="<?php echo $resultPh['GT']['juin'];?>"></td>
        <td><input type="number" name="juinTS_ph" value="<?php echo $resultPh['TS']['juin'];?>"></td>
        <td><input type="number" name="juinTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['juin'];?>"></td>
        <td><input type="number" name="juinTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['juin'];?>"></td>
        <td><input type="number" name="juinRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['juin'];?>"></td>
        <td><input type="number" name="juinRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['juin'];?>"></td>
        <td><input type="number" name="juinGrav_ph" value="<?php echo $resultPh['Grav']['juin'];?>"></td>
        <td><input type="number" name="juinAero_ph" value="<?php echo $resultPh['Aero']['juin'];?>"></td>
        <td><input type="number" name="juinSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['juin'];?>"></td>
        <td><input type="number" name="juinSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['juin'];?>"></td>
        <td><input type="number" name="juinSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['juin'];?>"></td>
        <td><input type="number" name="juinSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['juin'];?>"></td>
        <td><input type="number" name="juinSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['juin'];?>"></td>
        <td><input type="number" name="juinSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['juin'];?>"></td>
        <td><input type="number" name="juinForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['juin'];?>"></td>
        <td><input type="number" name="juinForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['juin'];?>"></td>
        <td><input type="number" name="juinForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['juin'];?>"></td>
      </tr>
      <th>Juillet</th>
      <td><input type="number" name="juillGT_ph" value="<?php echo $resultPh['GT']['juill'];?>"></td>
      <td><input type="number" name="juillTS_ph" value="<?php echo $resultPh['TS']['juill'];?>"></td>
      <td><input type="number" name="juillTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['juill'];?>"></td>
      <td><input type="number" name="juillTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['juill'];?>"></td>
      <td><input type="number" name="juillRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['juill'];?>"></td>
      <td><input type="number" name="juillRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['juill'];?>"></td>
      <td><input type="number" name="juillGrav_ph" value="<?php echo $resultPh['Grav']['juill'];?>"></td>
      <td><input type="number" name="juillAero_ph" value="<?php echo $resultPh['Aero']['juill'];?>"></td>
      <td><input type="number" name="juillSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['juill'];?>"></td>
      <td><input type="number" name="juillSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['juill'];?>"></td>
      <td><input type="number" name="juillSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['juill'];?>"></td>
      <td><input type="number" name="juillSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['juill'];?>"></td>
      <td><input type="number" name="juillSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['juill'];?>"></td>
      <td><input type="number" name="juillSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['juill'];?>"></td>
      <td><input type="number" name="juillForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['juill'];?>"></td>
      <td><input type="number" name="juillForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['juill'];?>"></td>
      <td><input type="number" name="juillForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['juill'];?>"></td>
    </tr>
    <tr>
      <th>Août</th>
      <td><input type="number" name="aoutGT_ph" value="<?php echo $resultPh['GT']['aout'];?>"></td>
      <td><input type="number" name="aoutTS_ph" value="<?php echo $resultPh['TS']['aout'];?>"></td>
      <td><input type="number" name="aoutTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['aout'];?>"></td>
      <td><input type="number" name="aoutTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['aout'];?>"></td>
      <td><input type="number" name="aoutRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['aout'];?>"></td>
      <td><input type="number" name="aoutRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['aout'];?>"></td>
      <td><input type="number" name="aoutGrav_ph" value="<?php echo $resultPh['Grav']['aout'];?>"></td>
      <td><input type="number" name="aoutAero_ph" value="<?php echo $resultPh['Aero']['aout'];?>"></td>
      <td><input type="number" name="aoutSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['aout'];?>"></td>
      <td><input type="number" name="aoutSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['aout'];?>"></td>
      <td><input type="number" name="aoutSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['aout'];?>"></td>
      <td><input type="number" name="aoutSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['aout'];?>"></td>
      <td><input type="number" name="aoutSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['aout'];?>"></td>
      <td><input type="number" name="aoutSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['aout'];?>"></td>
      <td><input type="number" name="aoutForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['aout'];?>"></td>
      <td><input type="number" name="aoutForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['aout'];?>"></td>
      <td><input type="number" name="aoutForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['aout'];?>"></td>
    </tr>
    <tr>
      <th>Septembre</th>
      <td><input type="number" name="septGT_ph" value="<?php echo $resultPh['GT']['sept'];?>"></td>
      <td><input type="number" name="septTS_ph" value="<?php echo $resultPh['TS']['sept'];?>"></td>
      <td><input type="number" name="septTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['sept'];?>"></td>
      <td><input type="number" name="septTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['sept'];?>"></td>
      <td><input type="number" name="septRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['sept'];?>"></td>
      <td><input type="number" name="septRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['sept'];?>"></td>
      <td><input type="number" name="septGrav_ph" value="<?php echo $resultPh['Grav']['sept'];?>"></td>
      <td><input type="number" name="septAero_ph" value="<?php echo $resultPh['Aero']['sept'];?>"></td>
      <td><input type="number" name="septSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['sept'];?>"></td>
      <td><input type="number" name="septSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['sept'];?>"></td>
      <td><input type="number" name="septSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['sept'];?>"></td>
      <td><input type="number" name="septSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['sept'];?>"></td>
      <td><input type="number" name="septSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['sept'];?>"></td>
      <td><input type="number" name="septSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['sept'];?>"></td>
      <td><input type="number" name="septForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['sept'];?>"></td>
      <td><input type="number" name="septForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['sept'];?>"></td>
      <td><input type="number" name="septForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['sept'];?>"></td>
    </tr>
    <tr>
      <th>Octobre</th>
      <td><input type="number" name="octGT_ph" value="<?php echo $resultPh['GT']['oct'];?>"></td>
      <td><input type="number" name="octTS_ph" value="<?php echo $resultPh['TS']['oct'];?>"></td>
      <td><input type="number" name="octTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['oct'];?>"></td>
      <td><input type="number" name="octTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['oct'];?>"></td>
      <td><input type="number" name="octRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['oct'];?>"></td>
      <td><input type="number" name="octRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['oct'];?>"></td>
      <td><input type="number" name="octGrav_ph" value="<?php echo $resultPh['Grav']['oct'];?>"></td>
      <td><input type="number" name="octAero_ph" value="<?php echo $resultPh['Aero']['oct'];?>"></td>
      <td><input type="number" name="octSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['oct'];?>"></td>
      <td><input type="number" name="octSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['oct'];?>"></td>
      <td><input type="number" name="octSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['oct'];?>"></td>
      <td><input type="number" name="octSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['oct'];?>"></td>
      <td><input type="number" name="octSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['oct'];?>"></td>
      <td><input type="number" name="octSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['oct'];?>"></td>
      <td><input type="number" name="octForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['oct'];?>"></td>
      <td><input type="number" name="octForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['oct'];?>"></td>
      <td><input type="number" name="octForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['oct'];?>"></td>
    </tr>
    <tr>
      <th>Novembre</th>
      <td><input type="number" name="novGT_ph" value="<?php echo $resultPh['GT']['nov'];?>"></td>
      <td><input type="number" name="novTS_ph" value="<?php echo $resultPh['TS']['nov'];?>"></td>
      <td><input type="number" name="novTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['nov'];?>"></td>
      <td><input type="number" name="novTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['nov'];?>"></td>
      <td><input type="number" name="novRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['nov'];?>"></td>
      <td><input type="number" name="novRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['nov'];?>"></td>
      <td><input type="number" name="novGrav_ph" value="<?php echo $resultPh['Grav']['nov'];?>"></td>
      <td><input type="number" name="novAero_ph" value="<?php echo $resultPh['Aero']['nov'];?>"></td>
      <td><input type="number" name="novSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['nov'];?>"></td>
      <td><input type="number" name="novSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['nov'];?>"></td>
      <td><input type="number" name="novSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['nov'];?>"></td>
      <td><input type="number" name="novSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['nov'];?>"></td>
      <td><input type="number" name="novSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['nov'];?>"></td>
      <td><input type="number" name="novSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['nov'];?>"></td>
      <td><input type="number" name="novForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['nov'];?>"></td>
      <td><input type="number" name="novForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['nov'];?>"></td>
      <td><input type="number" name="novForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['nov'];?>"></td>
    </tr>
    <tr>
      <th>Décembre</th>
      <td><input type="number" name="decGT_ph" value="<?php echo $resultPh['GT']['dec'];?>"></td>
      <td><input type="number" name="decTS_ph" value="<?php echo $resultPh['TS']['dec'];?>"></td>
      <td><input type="number" name="decTraitKm_ph" value="<?php echo $resultPh['Trait']['Km']['dec'];?>"></td>
      <td><input type="number" name="decTraitKm2_ph" value="<?php echo $resultPh['Trait']['Km2']['dec'];?>"></td>
      <td><input type="number" name="decRetraitKm_ph" value="<?php echo $resultPh['Retrait']['Km']['dec'];?>"></td>
      <td><input type="number" name="decRetraitKm2_ph" value="<?php echo $resultPh['Retrait']['Km2']['dec'];?>"></td>
      <td><input type="number" name="decGrav_ph" value="<?php echo $resultPh['Grav']['dec'];?>"></td>
      <td><input type="number" name="decAero_ph" value="<?php echo $resultPh['Aero']['dec'];?>"></td>
      <td><input type="number" name="decSismiq2DMequ_ph" value="<?php echo $resultPh['Sismiq']['2D']['Mequ']['dec'];?>"></td>
      <td><input type="number" name="decSismiq2DKm_ph" value="<?php echo $resultPh['Sismiq']['2D']['Km']['dec'];?>"></td>
      <td><input type="number" name="decSismiq2DPV_ph" value="<?php echo $resultPh['Sismiq']['2D']['PV']['dec'];?>"></td>
      <td><input type="number" name="decSismiq3DMequ_ph" value="<?php echo $resultPh['Sismiq']['3D']['Mequ']['dec'];?>"></td>
      <td><input type="number" name="decSismiq3DKm2_ph" value="<?php echo $resultPh['Sismiq']['3D']['Km2']['dec'];?>"></td>
      <td><input type="number" name="decSismiq3DPV_ph" value="<?php echo $resultPh['Sismiq']['3D']['PV']['dec'];?>"></td>
      <td><input type="number" name="decForageMapp_ph" value="<?php echo $resultPh['Forage']['Mapp']['dec'];?>"></td>
      <td><input type="number" name="decForageMetres_ph" value="<?php echo $resultPh['Forage']['Metres']['dec'];?>"></td>
      <td><input type="number" name="decForagePuits_ph" value="<?php echo $resultPh['Forage']['Puits']['dec'];?>"></td>
    </tr>
    </tbody>
  </table>
  <br/>
 <button type="submit" class="btn btn-secondary btn-lg">Envoyer</button>
</form>
<?php
}
else{
  echo '<br/> Informations didn\'t get received correctly in ListeProjet.php';
}
?>
   </main>
</body>
</html>
