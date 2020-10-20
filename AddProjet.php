<?php
session_start();
?>
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
?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Ajouter un nouveau projet : </h1>
        </div>
    <form action="inputAddProjet.php" method="post">
<!--//////////////////////////////////-->
<!--HIDDEN INPUT-->
<input type="hidden" name="idp" value="<?php echo $_GET['idp']; ?>"/>
<!--//////////////////////////////////-->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Programme Financier : <?php  $_GET['idp'];?></h1>
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
        <td><input type="number" name="janvGT_f"></td>
        <td><input type="number" name="janvTS_f"></td>
        <td><input type="number" name="janvTraitKm_f"></td>
        <td><input type="number" name="janvTraitKm2_f"></td>
        <td><input type="number" name="janvRetraitKm_f"></td>
        <td><input type="number" name="janvRetraitKm2_f"></td>
        <td><input type="number" name="janvGrav_f"></td>
        <td><input type="number" name="janvAero_f"></td>
        <td><input type="number" name="janvSismiq2D_f"></td>
        <td><input type="number" name="janvSismiq3D_f"></td>
        <td><input type="number" name="janvForage_f"></td>
      </tr>
      <tr>
        <th>Février</th>
        <td><input type="number" name="fevrGT_f"></td>
        <td><input type="number" name="fevrTS_f"></td>
        <td><input type="number" name="fevrTraitKm_f"></td>
        <td><input type="number" name="fevrTraitKm2_f"></td>
        <td><input type="number" name="fevrRetraitKm_f"></td>
        <td><input type="number" name="fevrRetraitKm2_f"></td>
        <td><input type="number" name="fevrGrav_f"></td>
        <td><input type="number" name="fevrAero_f"></td>
        <td><input type="number" name="fevrSismiq2D_f"></td>
        <td><input type="number" name="fevrSismiq3D_f"></td>
        <td><input type="number" name="fevrForage_f"></td>
      </tr>
      <tr>
        <th>Mars</th>
        <td><input type="number" name="marsGT_f"></td>
        <td><input type="number" name="marsTS_f"></td>
        <td><input type="number" name="marsTraitKm_f"></td>
        <td><input type="number" name="marsTraitKm2_f"></td>
        <td><input type="number" name="marsRetraitKm_f"></td>
        <td><input type="number" name="marsRetraitKm2_f"></td>
        <td><input type="number" name="marsGrav_f"></td>
        <td><input type="number" name="marsAero_f"></td>
        <td><input type="number" name="marsSismiq2D_f"></td>
        <td><input type="number" name="marsSismiq3D_f"></td>
        <td><input type="number" name="marsForage_f"></td>
      </tr>
      <tr>
        <th>Avril</th>
        <td><input type="number" name="avrGT_f"></td>
        <td><input type="number" name="avrTS_f"></td>
        <td><input type="number" name="avrTraitKm_f"></td>
        <td><input type="number" name="avrTraitKm2_f"></td>
        <td><input type="number" name="avrRetraitKm_f"></td>
        <td><input type="number" name="avrRetraitKm2_f"></td>
        <td><input type="number" name="avrGrav_f"></td>
        <td><input type="number" name="avrAero_f"></td>
        <td><input type="number" name="avrSismiq2D_f"></td>
        <td><input type="number" name="avrSismiq3D_f"></td>
        <td><input type="number" name="avrForage_f"></td>
      </tr>
      <tr>
        <th>Mai</th>
        <td><input type="number" name="maiGT_f"></td>
        <td><input type="number" name="maiTS_f"></td>
        <td><input type="number" name="maiTraitKm_f"></td>
        <td><input type="number" name="maiTraitKm2_f"></td>
        <td><input type="number" name="maiRetraitKm_f"></td>
        <td><input type="number" name="maiRetraitKm2_f"></td>
        <td><input type="number" name="maiGrav_f"></td>
        <td><input type="number" name="maiAero_f"></td>
        <td><input type="number" name="maiSismiq2D_f"></td>
        <td><input type="number" name="maiSismiq3D_f"></td>
        <td><input type="number" name="maiForage_f"></td>
      </tr>
      <tr>
        <th>Juin</th>
        <td><input type="number" name="juinGT_f"></td>
        <td><input type="number" name="juinTS_f"></td>
        <td><input type="number" name="juinTraitKm_f"></td>
        <td><input type="number" name="juinTraitKm2_f"></td>
        <td><input type="number" name="juinRetraitKm_f"></td>
        <td><input type="number" name="juinRetraitKm2_f"></td>
        <td><input type="number" name="juinGrav_f"></td>
        <td><input type="number" name="juinAero_f"></td>
        <td><input type="number" name="juinSismiq2D_f"></td>
        <td><input type="number" name="juinSismiq3D_f"></td>
        <td><input type="number" name="juinForage_f"></td>
      </tr>
    <tr>
      <th>Juillet</th>
      <td><input type="number" name="juillGT_f"></td>
      <td><input type="number" name="juillTS_f"></td>
      <td><input type="number" name="juillTraitKm_f"></td>
      <td><input type="number" name="juillTraitKm2_f"></td>
      <td><input type="number" name="juillRetraitKm_f"></td>
      <td><input type="number" name="juillRetraitKm2_f"></td>
      <td><input type="number" name="juillGrav_f"></td>
      <td><input type="number" name="juillAero_f"></td>
      <td><input type="number" name="juillSismiq2D_f"></td>
      <td><input type="number" name="juillSismiq3D_f"></td>
      <td><input type="number" name="juillForage_f"></td>
    </tr>
    <tr>
      <th>Août</th>
      <td><input type="number" name="aoutGT_f"></td>
      <td><input type="number" name="aoutTS_f"></td>
      <td><input type="number" name="aoutTraitKm_f"></td>
      <td><input type="number" name="aoutTraitKm2_f"></td>
      <td><input type="number" name="aoutRetraitKm_f"></td>
      <td><input type="number" name="aoutRetraitKm2_f"></td>
      <td><input type="number" name="aoutGrav_f"></td>
      <td><input type="number" name="aoutAero_f"></td>
      <td><input type="number" name="aoutSismiq2D_f"></td>
      <td><input type="number" name="aoutSismiq3D_f"></td>
      <td><input type="number" name="aoutForage_f"></td>
    </tr>
    <tr>
      <th>Septembre</th>
      <td><input type="number" name="septGT_f"></td>
      <td><input type="number" name="septTS_f"></td>
      <td><input type="number" name="septTraitKm_f"></td>
      <td><input type="number" name="septTraitKm2_f"></td>
      <td><input type="number" name="septRetraitKm_f"></td>
      <td><input type="number" name="septRetraitKm2_f"></td>
      <td><input type="number" name="septGrav_f"></td>
      <td><input type="number" name="septAero_f"></td>
      <td><input type="number" name="septSismiq2D_f"></td>
      <td><input type="number" name="septSismiq3D_f"></td>
      <td><input type="number" name="septForage_f"></td>
    </tr>
    <tr>
      <th>Octobre</th>
      <td><input type="number" name="octGT_f"></td>
      <td><input type="number" name="octTS_f"></td>
      <td><input type="number" name="octTraitKm_f"></td>
      <td><input type="number" name="octTraitKm2_f"></td>
      <td><input type="number" name="octRetraitKm_f"></td>
      <td><input type="number" name="octRetraitKm2_f"></td>
      <td><input type="number" name="octGrav_f"></td>
      <td><input type="number" name="octAero_f"></td>
      <td><input type="number" name="octSismiq2D_f"></td>
      <td><input type="number" name="octSismiq3D_f"></td>
      <td><input type="number" name="octForage_f"></td>
    </tr>
    <tr>
      <th>Novembre</th>
      <td><input type="number" name="novGT_f"></td>
      <td><input type="number" name="novTS_f"></td>
      <td><input type="number" name="novTraitKm_f"></td>
      <td><input type="number" name="novTraitKm2_f"></td>
      <td><input type="number" name="novRetraitKm_f"></td>
      <td><input type="number" name="novRetraitKm2_f"></td>
      <td><input type="number" name="novGrav_f"></td>
      <td><input type="number" name="novAero_f"></td>
      <td><input type="number" name="novSismiq2D_f"></td>
      <td><input type="number" name="novSismiq3D_f"></td>
      <td><input type="number" name="novForage_f"></td>
    </tr>
    <tr>
      <th>Décembre</th>
      <td><input type="number" name="decGT_f"></td>
      <td><input type="number" name="decTS_f"></td>
      <td><input type="number" name="decTraitKm_f"></td>
      <td><input type="number" name="decTraitKm2_f"></td>
      <td><input type="number" name="decRetraitKm_f"></td>
      <td><input type="number" name="decRetraitKm2_f"></td>
      <td><input type="number" name="decGrav_f"></td>
      <td><input type="number" name="decAero_f"></td>
      <td><input type="number" name="decSismiq2D_f"></td>
      <td><input type="number" name="decSismiq3D_f"></td>
      <td><input type="number" name="decForage_f"></td>
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
        <td><input type="number" name="janvGT_ph"></td>
        <td><input type="number" name="janvTS_ph"></td>
        <td><input type="number" name="janvTraitKm_ph"></td>
        <td><input type="number" name="janvTraitKm2_ph"></td>
        <td><input type="number" name="janvRetraitKm_ph"></td>
        <td><input type="number" name="janvRetraitKm2_ph"></td>
        <td><input type="number" name="janvGrav_ph"></td>
        <td><input type="number" name="janvAero_ph"></td>
        <td><input type="number" name="janvSismiq2DMequ_ph"></td>
        <td><input type="number" name="janvSismiq2DKm_ph"></td>
        <td><input type="number" name="janvSismiq2DPV_ph"></td>
        <td><input type="number" name="janvSismiq3DMequ_ph"></td>
        <td><input type="number" name="janvSismiq3DKm2_ph"></td>
        <td><input type="number" name="janvSismiq3DPV_ph"></td>
        <td><input type="number" name="janvForageMapp_ph"></td>
        <td><input type="number" name="janvForageMetres_ph"></td>
        <td><input type="number" name="janvForagePuits_ph"></td>
      </tr>
      <tr>
        <th>Février</th>
        <td><input type="number" name="fevrGT_ph"></td>
        <td><input type="number" name="fevrTS_ph"></td>
        <td><input type="number" name="fevrTraitKm_ph"></td>
        <td><input type="number" name="fevrTraitKm2_ph"></td>
        <td><input type="number" name="fevrRetraitKm_ph"></td>
        <td><input type="number" name="fevrRetraitKm2_ph"></td>
        <td><input type="number" name="fevrGrav_ph"></td>
        <td><input type="number" name="fevrAero_ph"></td>
        <td><input type="number" name="fevrSismiq2DMequ_ph"></td>
        <td><input type="number" name="fevrSismiq2DKm_ph"></td>
        <td><input type="number" name="fevrSismiq2DPV_ph"></td>
        <td><input type="number" name="fevrSismiq3DMequ_ph"></td>
        <td><input type="number" name="fevrSismiq3DKm2_ph"></td>
        <td><input type="number" name="fevrSismiq3DPV_ph"></td>
        <td><input type="number" name="fevrForageMapp_ph"></td>
        <td><input type="number" name="fevrForageMetres_ph"></td>
        <td><input type="number" name="fevrForagePuits_ph"></td>
      </tr>
      <tr>
        <th>Mars</th>
        <td><input type="number" name="marsGT_ph"></td>
        <td><input type="number" name="marsTS_ph"></td>
        <td><input type="number" name="marsTraitKm_ph"></td>
        <td><input type="number" name="marsTraitKm2_ph"></td>
        <td><input type="number" name="marsRetraitKm_ph"></td>
        <td><input type="number" name="marsRetraitKm2_ph"></td>
        <td><input type="number" name="marsGrav_ph"></td>
        <td><input type="number" name="marsAero_ph"></td>
        <td><input type="number" name="marsSismiq2DMequ_ph"></td>
        <td><input type="number" name="marsSismiq2DKm_ph"></td>
        <td><input type="number" name="marsSismiq2DPV_ph"></td>
        <td><input type="number" name="marsSismiq3DMequ_ph"></td>
        <td><input type="number" name="marsSismiq3DKm2_ph"></td>
        <td><input type="number" name="marsSismiq3DPV_ph"></td>
        <td><input type="number" name="marsForageMapp_ph"></td>
        <td><input type="number" name="marsForageMetres_ph"></td>
        <td><input type="number" name="marsForagePuits_ph"></td>
      </tr>
      <tr>
        <th>Avril</th>
        <td><input type="number" name="avrGT_ph"></td>
        <td><input type="number" name="avrTS_ph"></td>
        <td><input type="number" name="avrTraitKm_ph"></td>
        <td><input type="number" name="avrTraitKm2_ph"></td>
        <td><input type="number" name="avrRetraitKm_ph"></td>
        <td><input type="number" name="avrRetraitKm2_ph"></td>
        <td><input type="number" name="avrGrav_ph"></td>
        <td><input type="number" name="avrAero_ph"></td>
        <td><input type="number" name="avrSismiq2DMequ_ph"></td>
        <td><input type="number" name="avrSismiq2DKm_ph"></td>
        <td><input type="number" name="avrSismiq2DPV_ph"></td>
        <td><input type="number" name="avrSismiq3DMequ_ph"></td>
        <td><input type="number" name="avrSismiq3DKm2_ph"></td>
        <td><input type="number" name="avrSismiq3DPV_ph"></td>
        <td><input type="number" name="avrForageMapp_ph"></td>
        <td><input type="number" name="avrForageMetres_ph"></td>
        <td><input type="number" name="avrForagePuits_ph"></td>
      </tr>
      <tr>
        <th>Mai</th>
        <td><input type="number" name="maiGT_ph"></td>
        <td><input type="number" name="maiTS_ph"></td>
        <td><input type="number" name="maiTraitKm_ph"></td>
        <td><input type="number" name="maiTraitKm2_ph"></td>
        <td><input type="number" name="maiRetraitKm_ph"></td>
        <td><input type="number" name="maiRetraitKm2_ph"></td>
        <td><input type="number" name="maiGrav_ph"></td>
        <td><input type="number" name="maiAero_ph"></td>
        <td><input type="number" name="maiSismiq2DMequ_ph"></td>
        <td><input type="number" name="maiSismiq2DKm_ph"></td>
        <td><input type="number" name="maiSismiq2DPV_ph"></td>
        <td><input type="number" name="maiSismiq3DMequ_ph"></td>
        <td><input type="number" name="maiSismiq3DKm2_ph"></td>
        <td><input type="number" name="maiSismiq3DPV_ph"></td>
        <td><input type="number" name="maiForageMapp_ph"></td>
        <td><input type="number" name="maiForageMetres_ph"></td>
        <td><input type="number" name="maiForagePuits_ph"></td>
      </tr>
      <tr>
        <th>Juin</th>
        <td><input type="number" name="juinGT_ph"></td>
        <td><input type="number" name="juinTS_ph"></td>
        <td><input type="number" name="juinTraitKm_ph"></td>
        <td><input type="number" name="juinTraitKm2_ph"></td>
        <td><input type="number" name="juinRetraitKm_ph"></td>
        <td><input type="number" name="juinRetraitKm2_ph"></td>
        <td><input type="number" name="juinGrav_ph"></td>
        <td><input type="number" name="juinAero_ph"></td>
        <td><input type="number" name="juinSismiq2DMequ_ph"></td>
        <td><input type="number" name="juinSismiq2DKm_ph"></td>
        <td><input type="number" name="juinSismiq2DPV_ph"></td>
        <td><input type="number" name="juinSismiq3DMequ_ph"></td>
        <td><input type="number" name="juinSismiq3DKm2_ph"></td>
        <td><input type="number" name="juinSismiq3DPV_ph"></td>
        <td><input type="number" name="juinForageMapp_ph"></td>
        <td><input type="number" name="juinForageMetres_ph"></td>
        <td><input type="number" name="juinForagePuits_ph"></td>
      </tr>
      <th>Juillet</th>
      <td><input type="number" name="juillGT_ph"></td>
      <td><input type="number" name="juillTS_ph"></td>
      <td><input type="number" name="juillTraitKm_ph"></td>
      <td><input type="number" name="juillTraitKm2_ph"></td>
      <td><input type="number" name="juillRetraitKm_ph"></td>
      <td><input type="number" name="juillRetraitKm2_ph"></td>
      <td><input type="number" name="juillGrav_ph"></td>
      <td><input type="number" name="juillAero_ph"></td>
      <td><input type="number" name="juillSismiq2DMequ_ph"></td>
      <td><input type="number" name="juillSismiq2DKm_ph"></td>
      <td><input type="number" name="juillSismiq2DPV_ph"></td>
      <td><input type="number" name="juillSismiq3DMequ_ph"></td>
      <td><input type="number" name="juillSismiq3DKm2_ph"></td>
      <td><input type="number" name="juillSismiq3DPV_ph"></td>
      <td><input type="number" name="juillForageMapp_ph"></td>
      <td><input type="number" name="juillForageMetres_ph"></td>
      <td><input type="number" name="juillForagePuits_ph"></td>
    </tr>
    <tr>
      <th>Août</th>
      <td><input type="number" name="aoutGT_ph"></td>
      <td><input type="number" name="aoutTS_ph"></td>
      <td><input type="number" name="aoutTraitKm_ph"></td>
      <td><input type="number" name="aoutTraitKm2_ph"></td>
      <td><input type="number" name="aoutRetraitKm_ph"></td>
      <td><input type="number" name="aoutRetraitKm2_ph"></td>
      <td><input type="number" name="aoutGrav_ph"></td>
      <td><input type="number" name="aoutAero_ph"></td>
      <td><input type="number" name="aoutSismiq2DMequ_ph"></td>
      <td><input type="number" name="aoutSismiq2DKm_ph"></td>
      <td><input type="number" name="aoutSismiq2DPV_ph"></td>
      <td><input type="number" name="aoutSismiq3DMequ_ph"></td>
      <td><input type="number" name="aoutSismiq3DKm2_ph"></td>
      <td><input type="number" name="aoutSismiq3DPV_ph"></td>
      <td><input type="number" name="aoutForageMapp_ph"></td>
      <td><input type="number" name="aoutForageMetres_ph"></td>
      <td><input type="number" name="aoutForagePuits_ph"></td>
    </tr>
    <tr>
      <th>Septembre</th>
      <td><input type="number" name="septGT_ph"></td>
      <td><input type="number" name="septTS_ph"></td>
      <td><input type="number" name="septTraitKm_ph"></td>
      <td><input type="number" name="septTraitKm2_ph"></td>
      <td><input type="number" name="septRetraitKm_ph"></td>
      <td><input type="number" name="septRetraitKm2_ph"></td>
      <td><input type="number" name="septGrav_ph"></td>
      <td><input type="number" name="septAero_ph"></td>
      <td><input type="number" name="septSismiq2DMequ_ph"></td>
      <td><input type="number" name="septSismiq2DKm_ph"></td>
      <td><input type="number" name="septSismiq2DPV_ph"></td>
      <td><input type="number" name="septSismiq3DMequ_ph"></td>
      <td><input type="number" name="septSismiq3DKm2_ph"></td>
      <td><input type="number" name="septSismiq3DPV_ph"></td>
      <td><input type="number" name="septForageMapp_ph"></td>
      <td><input type="number" name="septForageMetres_ph"></td>
      <td><input type="number" name="septForagePuits_ph"></td>
    </tr>
    <tr>
      <th>Octobre</th>
      <td><input type="number" name="octGT_ph"></td>
      <td><input type="number" name="octTS_ph"></td>
      <td><input type="number" name="octTraitKm_ph"></td>
      <td><input type="number" name="octTraitKm2_ph"></td>
      <td><input type="number" name="octRetraitKm_ph"></td>
      <td><input type="number" name="octRetraitKm2_ph"></td>
      <td><input type="number" name="octGrav_ph"></td>
      <td><input type="number" name="octAero_ph"></td>
      <td><input type="number" name="octSismiq2DMequ_ph"></td>
      <td><input type="number" name="octSismiq2DKm_ph"></td>
      <td><input type="number" name="octSismiq2DPV_ph"></td>
      <td><input type="number" name="octSismiq3DMequ_ph"></td>
      <td><input type="number" name="octSismiq3DKm2_ph"></td>
      <td><input type="number" name="octSismiq3DPV_ph"></td>
      <td><input type="number" name="octForageMapp_ph"></td>
      <td><input type="number" name="octForageMetres_ph"></td>
      <td><input type="number" name="octForagePuits_ph"></td>
    </tr>
    <tr>
      <th>Novembre</th>
      <td><input type="number" name="novGT_ph"></td>
      <td><input type="number" name="novTS_ph"></td>
      <td><input type="number" name="novTraitKm_ph"></td>
      <td><input type="number" name="novTraitKm2_ph"></td>
      <td><input type="number" name="novRetraitKm_ph"></td>
      <td><input type="number" name="novRetraitKm2_ph"></td>
      <td><input type="number" name="novGrav_ph"></td>
      <td><input type="number" name="novAero_ph"></td>
      <td><input type="number" name="novSismiq2DMequ_ph"></td>
      <td><input type="number" name="novSismiq2DKm_ph"></td>
      <td><input type="number" name="novSismiq2DPV_ph"></td>
      <td><input type="number" name="novSismiq3DMequ_ph"></td>
      <td><input type="number" name="novSismiq3DKm2_ph"></td>
      <td><input type="number" name="novSismiq3DPV_ph"></td>
      <td><input type="number" name="novForageMapp_ph"></td>
      <td><input type="number" name="novForageMetres_ph"></td>
      <td><input type="number" name="novForagePuits_ph"></td>
    </tr>
    <tr>
      <th>Décembre</th>
      <td><input type="number" name="decGT_ph"></td>
      <td><input type="number" name="decTS_ph"></td>
      <td><input type="number" name="decTraitKm_ph"></td>
      <td><input type="number" name="decTraitKm2_ph"></td>
      <td><input type="number" name="decRetraitKm_ph"></td>
      <td><input type="number" name="decRetraitKm2_ph"></td>
      <td><input type="number" name="decGrav_ph"></td>
      <td><input type="number" name="decAero_ph"></td>
      <td><input type="number" name="decSismiq2DMequ_ph"></td>
      <td><input type="number" name="decSismiq2DKm_ph"></td>
      <td><input type="number" name="decSismiq2DPV_ph"></td>
      <td><input type="number" name="decSismiq3DMequ_ph"></td>
      <td><input type="number" name="decSismiq3DKm2_ph"></td>
      <td><input type="number" name="decSismiq3DPV_ph"></td>
      <td><input type="number" name="decForageMapp_ph"></td>
      <td><input type="number" name="decForageMetres_ph"></td>
      <td><input type="number" name="decForagePuits_ph"></td>
    </tr>
    </tbody>
  </table>
  <br/>
 <button type="submit" class="btn btn-secondary btn-lg">Envoyer</button>
</form>

   </main>
</body>
</html>
