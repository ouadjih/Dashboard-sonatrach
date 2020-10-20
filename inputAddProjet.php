<?php
  include("Login/functions/function.php");
  echo 'HELLO !'.'<br/>';
  $bdd=bdd();
  if(// FINANCIER
    isset($_POST['idp']) &&
    isset($_POST['janvGT_f']) && isset($_POST['janvTS_f']) && isset($_POST['janvTraitKm_f']) && isset($_POST['janvTraitKm2_f'])&&
  isset($_POST['janvRetraitKm_f'])&& isset($_POST['janvRetraitKm2_f'])&& isset($_POST['janvGrav_f'])&& isset($_POST['janvAero_f'])&&
  isset($_POST['janvSismiq2D_f'])&& isset($_POST['janvSismiq3D_f'])&& isset($_POST['janvForage_f'])&&
  isset($_POST['fevrGT_f']) && isset($_POST['fevrTS_f']) && isset($_POST['fevrTraitKm_f']) && isset($_POST['fevrTraitKm2_f'])&&
  isset($_POST['fevrRetraitKm_f'])&& isset($_POST['fevrRetraitKm2_f'])&& isset($_POST['fevrGrav_f'])&& isset($_POST['fevrAero_f'])&&
  isset($_POST['fevrSismiq2D_f'])&& isset($_POST['fevrSismiq3D_f'])&& isset($_POST['fevrForage_f'])&&
  isset($_POST['marsGT_f']) && isset($_POST['marsTS_f']) && isset($_POST['marsTraitKm_f']) && isset($_POST['marsTraitKm2_f'])&&
  isset($_POST['marsRetraitKm_f'])&& isset($_POST['marsRetraitKm2_f'])&& isset($_POST['marsGrav_f'])&& isset($_POST['marsAero_f'])&&
  isset($_POST['marsSismiq2D_f'])&& isset($_POST['marsSismiq3D_f'])&& isset($_POST['marsForage_f'])&&
  isset($_POST['avrGT_f']) && isset($_POST['avrTS_f']) && isset($_POST['avrTraitKm_f']) && isset($_POST['avrTraitKm2_f'])&&
  isset($_POST['avrRetraitKm_f'])&& isset($_POST['avrRetraitKm2_f'])&& isset($_POST['avrGrav_f'])&& isset($_POST['avrAero_f'])&&
  isset($_POST['avrSismiq2D_f'])&& isset($_POST['avrSismiq3D_f'])&& isset($_POST['avrForage_f'])&&
  isset($_POST['maiGT_f']) && isset($_POST['maiTS_f']) && isset($_POST['maiTraitKm_f']) && isset($_POST['maiTraitKm2_f'])&&
  isset($_POST['maiRetraitKm_f'])&& isset($_POST['maiRetraitKm2_f'])&& isset($_POST['maiGrav_f'])&& isset($_POST['maiAero_f'])&&
  isset($_POST['maiSismiq2D_f'])&& isset($_POST['maiSismiq3D_f'])&& isset($_POST['maiForage_f'])&&
  isset($_POST['juinGT_f']) && isset($_POST['juinTS_f']) && isset($_POST['juinTraitKm_f']) && isset($_POST['juinTraitKm2_f'])&&
  isset($_POST['juinRetraitKm_f'])&& isset($_POST['juinRetraitKm2_f'])&& isset($_POST['juinGrav_f'])&& isset($_POST['juinAero_f'])&&
  isset($_POST['juinSismiq2D_f'])&& isset($_POST['juinSismiq3D_f'])&& isset($_POST['juinForage_f'])&&
  isset($_POST['juillGT_f']) && isset($_POST['juillTS_f']) && isset($_POST['juillTraitKm_f']) && isset($_POST['juillTraitKm2_f'])&&
  isset($_POST['juillRetraitKm_f'])&& isset($_POST['juillRetraitKm2_f'])&& isset($_POST['juillGrav_f'])&& isset($_POST['juillAero_f'])&&
  isset($_POST['juillSismiq2D_f'])&& isset($_POST['juillSismiq3D_f'])&& isset($_POST['juillForage_f'])&&
  isset($_POST['aoutGT_f']) && isset($_POST['aoutTS_f']) && isset($_POST['aoutTraitKm_f']) && isset($_POST['aoutTraitKm2_f'])&&
  isset($_POST['aoutRetraitKm_f'])&& isset($_POST['aoutRetraitKm2_f'])&& isset($_POST['aoutGrav_f'])&& isset($_POST['aoutAero_f'])&&
  isset($_POST['aoutSismiq2D_f'])&& isset($_POST['aoutSismiq3D_f'])&& isset($_POST['aoutForage_f'])&&
  isset($_POST['septGT_f']) && isset($_POST['septTS_f']) && isset($_POST['septTraitKm_f']) && isset($_POST['septTraitKm2_f'])&&
  isset($_POST['septRetraitKm_f'])&& isset($_POST['septRetraitKm2_f'])&& isset($_POST['septGrav_f'])&& isset($_POST['septAero_f'])&&
  isset($_POST['septSismiq2D_f'])&& isset($_POST['septSismiq3D_f'])&& isset($_POST['septForage_f'])&&
  isset($_POST['octGT_f']) && isset($_POST['octTS_f']) && isset($_POST['octTraitKm_f']) && isset($_POST['octTraitKm2_f'])&&
  isset($_POST['octRetraitKm_f'])&& isset($_POST['octRetraitKm2_f'])&& isset($_POST['octGrav_f'])&& isset($_POST['octAero_f'])&&
  isset($_POST['octSismiq2D_f'])&& isset($_POST['octSismiq3D_f'])&& isset($_POST['octForage_f'])&&
  isset($_POST['novGT_f']) && isset($_POST['novTS_f']) && isset($_POST['novTraitKm_f']) && isset($_POST['novTraitKm2_f'])&&
  isset($_POST['novRetraitKm_f'])&& isset($_POST['novRetraitKm2_f'])&& isset($_POST['novGrav_f'])&& isset($_POST['novAero_f'])&&
  isset($_POST['novSismiq2D_f'])&& isset($_POST['novSismiq3D_f'])&& isset($_POST['novForage_f'])&&
  isset($_POST['decGT_f']) && isset($_POST['decTS_f']) && isset($_POST['decTraitKm_f']) && isset($_POST['decTraitKm2_f'])&&
  isset($_POST['decRetraitKm_f'])&& isset($_POST['decRetraitKm2_f'])&& isset($_POST['decGrav_f'])&& isset($_POST['decAero_f'])&&
  isset($_POST['decSismiq2D_f'])&& isset($_POST['decSismiq3D_f'])&& isset($_POST['decForage_f'])
  && // PHYSIQUE
  isset($_POST['janvGT_ph']) && isset($_POST['janvTS_ph']) && isset($_POST['janvTraitKm_ph']) && isset($_POST['janvTraitKm2_ph'])&&
  isset($_POST['janvRetraitKm_ph'])&& isset($_POST['janvRetraitKm2_ph'])&& isset($_POST['janvGrav_ph'])&& isset($_POST['janvAero_ph'])&&
  isset($_POST['janvSismiq2DMequ_ph'])&& isset($_POST['janvSismiq2DKm_ph'])&& isset($_POST['janvSismiq2DPV_ph']) &&
  isset($_POST['janvSismiq3DMequ_ph'])&&isset($_POST['janvSismiq3DKm2_ph']) && isset($_POST['janvSismiq3DPV_ph'])&&
  isset($_POST['janvForageMapp_ph']) && isset($_POST['janvForageMetres_ph']) && isset($_POST['janvForagePuits_ph']) &&
  isset($_POST['fevrGT_ph']) && isset($_POST['fevrTS_ph']) && isset($_POST['fevrTraitKm_ph']) && isset($_POST['fevrTraitKm2_ph'])&&
  isset($_POST['fevrRetraitKm_ph'])&& isset($_POST['fevrRetraitKm2_ph'])&& isset($_POST['fevrGrav_ph'])&& isset($_POST['fevrAero_ph'])&&
  isset($_POST['fevrSismiq2DMequ_ph'])&& isset($_POST['fevrSismiq2DKm_ph'])&& isset($_POST['fevrSismiq2DPV_ph']) &&
  isset($_POST['fevrSismiq3DMequ_ph'])&&isset($_POST['fevrSismiq3DKm2_ph']) && isset($_POST['fevrSismiq3DPV_ph'])&&
  isset($_POST['fevrForageMapp_ph']) && isset($_POST['fevrForageMetres_ph']) && isset($_POST['fevrForagePuits_ph']) &&
  isset($_POST['marsGT_ph']) && isset($_POST['marsTS_ph']) && isset($_POST['marsTraitKm_ph']) && isset($_POST['marsTraitKm2_ph'])&&
  isset($_POST['marsRetraitKm_ph'])&& isset($_POST['marsRetraitKm2_ph'])&& isset($_POST['marsGrav_ph'])&& isset($_POST['marsAero_ph'])&&
  isset($_POST['marsSismiq2DMequ_ph'])&& isset($_POST['marsSismiq2DKm_ph'])&& isset($_POST['marsSismiq2DPV_ph']) &&
  isset($_POST['marsSismiq3DMequ_ph'])&&isset($_POST['marsSismiq3DKm2_ph']) && isset($_POST['marsSismiq3DPV_ph'])&&
  isset($_POST['marsForageMapp_ph']) && isset($_POST['marsForageMetres_ph']) && isset($_POST['marsForagePuits_ph']) &&
  isset($_POST['avrGT_ph']) && isset($_POST['avrTS_ph']) && isset($_POST['avrTraitKm_ph']) && isset($_POST['avrTraitKm2_ph'])&&
  isset($_POST['avrRetraitKm_ph'])&& isset($_POST['avrRetraitKm2_ph'])&& isset($_POST['avrGrav_ph'])&& isset($_POST['avrAero_ph'])&&
  isset($_POST['avrSismiq2DMequ_ph'])&& isset($_POST['avrSismiq2DKm_ph'])&& isset($_POST['avrSismiq2DPV_ph']) &&
  isset($_POST['avrSismiq3DMequ_ph'])&&isset($_POST['avrSismiq3DKm2_ph']) && isset($_POST['avrSismiq3DPV_ph'])&&
  isset($_POST['avrForageMapp_ph']) && isset($_POST['avrForageMetres_ph']) && isset($_POST['avrForagePuits_ph']) &&
  isset($_POST['maiGT_ph']) && isset($_POST['maiTS_ph']) && isset($_POST['maiTraitKm_ph']) && isset($_POST['maiTraitKm2_ph'])&&
  isset($_POST['maiRetraitKm_ph'])&& isset($_POST['maiRetraitKm2_ph'])&& isset($_POST['maiGrav_ph'])&& isset($_POST['maiAero_ph'])&&
  isset($_POST['maiSismiq2DMequ_ph'])&& isset($_POST['maiSismiq2DKm_ph'])&& isset($_POST['maiSismiq2DPV_ph']) &&
  isset($_POST['maiSismiq3DMequ_ph'])&&isset($_POST['maiSismiq3DKm2_ph']) && isset($_POST['maiSismiq3DPV_ph'])&&
  isset($_POST['maiForageMapp_ph']) && isset($_POST['maiForageMetres_ph']) && isset($_POST['maiForagePuits_ph']) &&
  isset($_POST['juinGT_ph']) && isset($_POST['juinTS_ph']) && isset($_POST['juinTraitKm_ph']) && isset($_POST['juinTraitKm2_ph'])&&
  isset($_POST['juinRetraitKm_ph'])&& isset($_POST['juinRetraitKm2_ph'])&& isset($_POST['juinGrav_ph'])&& isset($_POST['juinAero_ph'])&&
  isset($_POST['juinSismiq2DMequ_ph'])&& isset($_POST['juinSismiq2DKm_ph'])&& isset($_POST['juinSismiq2DPV_ph']) &&
  isset($_POST['juinSismiq3DMequ_ph'])&&isset($_POST['juinSismiq3DKm2_ph']) && isset($_POST['juinSismiq3DPV_ph'])&&
  isset($_POST['juinForageMapp_ph']) && isset($_POST['juinForageMetres_ph']) && isset($_POST['juinForagePuits_ph']) &&
  isset($_POST['juillGT_ph']) && isset($_POST['juillTS_ph']) && isset($_POST['juillTraitKm_ph']) && isset($_POST['juillTraitKm2_ph'])&&
  isset($_POST['juillRetraitKm_ph'])&& isset($_POST['juillRetraitKm2_ph'])&& isset($_POST['juillGrav_ph'])&& isset($_POST['juillAero_ph'])&&
  isset($_POST['juillSismiq2DMequ_ph'])&& isset($_POST['juillSismiq2DKm_ph'])&& isset($_POST['juillSismiq2DPV_ph']) &&
  isset($_POST['juillSismiq3DMequ_ph'])&&isset($_POST['juillSismiq3DKm2_ph']) && isset($_POST['juillSismiq3DPV_ph'])&&
  isset($_POST['juillForageMapp_ph']) && isset($_POST['juillForageMetres_ph']) && isset($_POST['juillForagePuits_ph']) &&
  isset($_POST['aoutGT_ph']) && isset($_POST['aoutTS_ph']) && isset($_POST['aoutTraitKm_ph']) && isset($_POST['aoutTraitKm2_ph'])&&
  isset($_POST['aoutRetraitKm_ph'])&& isset($_POST['aoutRetraitKm2_ph'])&& isset($_POST['aoutGrav_ph'])&& isset($_POST['aoutAero_ph'])&&
  isset($_POST['aoutSismiq2DMequ_ph'])&& isset($_POST['aoutSismiq2DKm_ph'])&& isset($_POST['aoutSismiq2DPV_ph']) &&
  isset($_POST['aoutSismiq3DMequ_ph'])&&isset($_POST['aoutSismiq3DKm2_ph']) && isset($_POST['aoutSismiq3DPV_ph'])&&
  isset($_POST['aoutForageMapp_ph']) && isset($_POST['aoutForageMetres_ph']) && isset($_POST['aoutForagePuits_ph']) &&
  isset($_POST['septGT_ph']) && isset($_POST['septTS_ph']) && isset($_POST['septTraitKm_ph']) && isset($_POST['septTraitKm2_ph'])&&
  isset($_POST['septRetraitKm_ph'])&& isset($_POST['septRetraitKm2_ph'])&& isset($_POST['septGrav_ph'])&& isset($_POST['septAero_ph'])&&
  isset($_POST['septSismiq2DMequ_ph'])&& isset($_POST['septSismiq2DKm_ph'])&& isset($_POST['septSismiq2DPV_ph']) &&
  isset($_POST['septSismiq3DMequ_ph'])&&isset($_POST['septSismiq3DKm2_ph']) && isset($_POST['septSismiq3DPV_ph'])&&
  isset($_POST['septForageMapp_ph']) && isset($_POST['septForageMetres_ph']) && isset($_POST['septForagePuits_ph']) &&
  isset($_POST['octGT_ph']) && isset($_POST['octTS_ph']) && isset($_POST['octTraitKm_ph']) && isset($_POST['octTraitKm2_ph'])&&
  isset($_POST['octRetraitKm_ph'])&& isset($_POST['octRetraitKm2_ph'])&& isset($_POST['octGrav_ph'])&& isset($_POST['octAero_ph'])&&
  isset($_POST['octSismiq2DMequ_ph'])&& isset($_POST['octSismiq2DKm_ph'])&& isset($_POST['octSismiq2DPV_ph']) &&
  isset($_POST['octSismiq3DMequ_ph'])&&isset($_POST['octSismiq3DKm2_ph']) && isset($_POST['octSismiq3DPV_ph'])&&
  isset($_POST['octForageMapp_ph']) && isset($_POST['octForageMetres_ph']) && isset($_POST['octForagePuits_ph']) &&
  isset($_POST['novGT_ph']) && isset($_POST['novTS_ph']) && isset($_POST['novTraitKm_ph']) && isset($_POST['novTraitKm2_ph'])&&
  isset($_POST['novRetraitKm_ph'])&& isset($_POST['novRetraitKm2_ph'])&& isset($_POST['novGrav_ph'])&& isset($_POST['novAero_ph'])&&
  isset($_POST['novSismiq2DMequ_ph'])&& isset($_POST['novSismiq2DKm_ph'])&& isset($_POST['novSismiq2DPV_ph']) &&
  isset($_POST['novSismiq3DMequ_ph'])&&isset($_POST['novSismiq3DKm2_ph']) && isset($_POST['novSismiq3DPV_ph'])&&
  isset($_POST['novForageMapp_ph']) && isset($_POST['novForageMetres_ph']) && isset($_POST['novForagePuits_ph']) &&
  isset($_POST['decGT_ph']) && isset($_POST['decTS_ph']) && isset($_POST['decTraitKm_ph']) && isset($_POST['decTraitKm2_ph'])&&
  isset($_POST['decRetraitKm_ph'])&& isset($_POST['decRetraitKm2_ph'])&& isset($_POST['decGrav_ph'])&& isset($_POST['decAero_ph'])&&
  isset($_POST['decSismiq2DMequ_ph'])&& isset($_POST['decSismiq2DKm_ph'])&& isset($_POST['decSismiq2DPV_ph']) &&
  isset($_POST['decSismiq3DMequ_ph'])&&isset($_POST['decSismiq3DKm2_ph']) && isset($_POST['decSismiq3DPV_ph'])&&
  isset($_POST['decForageMapp_ph']) && isset($_POST['decForageMetres_ph']) && isset($_POST['decForagePuits_ph'])
  ){
    // FINANCIER
    // GT_f

    $trimestre1GT_f=((float)$_POST['janvGT_f']+(float)$_POST['fevrGT_f']+(float)$_POST['marsGT_f'])/3;
        $trimestre1GT_f=number_format($trimestre1GT_f,2);
    $trimestre2GT_f=((float)$_POST['avrGT_f']+(float)$_POST['maiGT_f']+(float)$_POST['juinGT_f'])/3;
        $trimestre2GT_f=number_format($trimestre2GT_f,2);
    $semestre1GT_f=($trimestre1GT_f+$trimestre2GT_f)/2;   $semestre1GT_f=number_format($semestre1GT_f,2);
    $trimestre3GT_f=((float)$_POST['juillGT_f']+(float)$_POST['aoutGT_f']+(float)$_POST['septGT_f'])/3;
        $trimestre3GT_f=number_format($trimestre3GT_f,2);
    $trimestre4GT_f=((float)$_POST['octGT_f']+(float)$_POST['novGT_f']+(float)$_POST['decGT_f'])/3;
        $trimestre4GT_f=number_format($trimestre4GT_f,2);
    $semestre2GT_f=($trimestre3GT_f+$trimestre4GT_f)/2;   $semestre2GT_f=number_format($semestre2GT_f,2);
    $globalGT_f=($semestre1GT_f+$semestre2GT_f)/2;    $globalGT_f=number_format($globalGT_f,2);

    $arrayGT_f=['janv'=>$_POST['janvGT_f'],'fevr'=>$_POST['fevrGT_f'],'mars'=>$_POST['marsGT_f'],'trimestre1'=>$trimestre1GT_f,'avr'=>$_POST['avrGT_f'],
      'mai'=>$_POST['maiGT_f'],'juin'=>$_POST['juinGT_f'],'trimestre2'=>$trimestre2GT_f,'semestre1'=>$semestre1GT_f,'juill'=>$_POST['juillGT_f'],
      'aout'=>$_POST['aoutGT_f'],'sept'=>$_POST['septGT_f'],'trimestre3'=>$trimestre3GT_f,'oct'=>$_POST['octGT_f'],'nov'=>$_POST['novGT_f'],
      'dec'=>$_POST['decGT_f'],'trimestre4'=>$trimestre4GT_f,'semestre2'=>$semestre2GT_f,'GLOBAL'=>$globalGT_f];

    // TS_f
    $trimestre1TS_f=((float)$_POST['janvTS_f']+(float)$_POST['fevrTS_f']+(float)$_POST['marsTS_f'])/3;
        $trimestre1TS_f=number_format($trimestre1TS_f,2);
    $trimestre2TS_f=((float)$_POST['avrTS_f']+(float)$_POST['maiTS_f']+(float)$_POST['juinTS_f'])/3;
        $trimestre2TS_f=number_format($trimestre2TS_f,2);
    $semestre1TS_f=($trimestre1TS_f+$trimestre2TS_f)/2;   $semestre1TS_f=number_format($semestre1TS_f,2);
    $trimestre3TS_f=((float)$_POST['juillTS_f']+(float)$_POST['aoutTS_f']+(float)$_POST['septTS_f'])/3;
        $trimestre3TS_f=number_format($trimestre3TS_f,2);
    $trimestre4TS_f=((float)$_POST['octTS_f']+(float)$_POST['novTS_f']+(float)$_POST['decTS_f'])/3;
        $trimestre4TS_f=number_format($trimestre4TS_f,2);
    $semestre2TS_f=($trimestre3TS_f+$trimestre4TS_f)/2;   $semestre2TS_f=number_format($semestre2TS_f,2);
    $globalTS_f=($semestre1TS_f+$semestre2TS_f)/2;    $globalTS_f=number_format($globalTS_f,2);

    $arrayTS_f=['janv'=>$_POST['janvTS_f'],'fevr'=>$_POST['fevrTS_f'],'mars'=>$_POST['marsTS_f'],'trimestre1'=>$trimestre1TS_f,'avr'=>$_POST['avrTS_f'],
      'mai'=>$_POST['maiTS_f'],'juin'=>$_POST['juinTS_f'],'trimestre2'=>$trimestre2TS_f,'semestre1'=>$semestre1TS_f,'juill'=>$_POST['juillTS_f'],
      'aout'=>$_POST['aoutTS_f'],'sept'=>$_POST['septTS_f'],'trimestre3'=>$trimestre3TS_f,'oct'=>$_POST['octTS_f'],'nov'=>$_POST['novTS_f'],
      'dec'=>$_POST['decTS_f'],'trimestre4'=>$trimestre4TS_f,'semestre2'=>$semestre2TS_f,'GLOBAL'=>$globalTS_f];

    // TraitKm_f
    $trimestre1TraitKm_f=((float)$_POST['janvTraitKm_f']+(float)$_POST['fevrTraitKm_f']+(float)$_POST['marsTraitKm_f'])/3;
        $trimestre1TraitKm_f=number_format($trimestre1TraitKm_f,2);
    $trimestre2TraitKm_f=((float)$_POST['avrTraitKm_f']+(float)$_POST['maiTraitKm_f']+(float)$_POST['juinTraitKm_f'])/3;
        $trimestre2TraitKm_f=number_format($trimestre2TraitKm_f,2);
    $semestre1TraitKm_f=($trimestre1TraitKm_f+$trimestre2TraitKm_f)/2;   $semestre1TraitKm_f=number_format($semestre1TraitKm_f,2);
    $trimestre3TraitKm_f=((float)$_POST['juillTraitKm_f']+(float)$_POST['aoutTraitKm_f']+(float)$_POST['septTraitKm_f'])/3;
        $trimestre3TraitKm_f=number_format($trimestre3TraitKm_f,2);
    $trimestre4TraitKm_f=((float)$_POST['octTraitKm_f']+(float)$_POST['novTraitKm_f']+(float)$_POST['decTraitKm_f'])/3;
        $trimestre4TraitKm_f=number_format($trimestre4TraitKm_f,2);
    $semestre2TraitKm_f=($trimestre3TraitKm_f+$trimestre4TraitKm_f)/2;   $semestre2TraitKm_f=number_format($semestre2TraitKm_f,2);
    $globalTraitKm_f=($semestre1TraitKm_f+$semestre2TraitKm_f)/2;    $globalTraitKm_f=number_format($globalTraitKm_f,2);
    // TraitKm2_f
    $trimestre1TraitKm2_f=((float)$_POST['janvTraitKm2_f']+(float)$_POST['fevrTraitKm2_f']+(float)$_POST['marsTraitKm2_f'])/3;
        $trimestre1TraitKm2_f=number_format($trimestre1TraitKm2_f,2);
    $trimestre2TraitKm2_f=((float)$_POST['avrTraitKm2_f']+(float)$_POST['maiTraitKm2_f']+(float)$_POST['juinTraitKm2_f'])/3;
        $trimestre2TraitKm2_f=number_format($trimestre2TraitKm2_f,2);
    $semestre1TraitKm2_f=($trimestre1TraitKm2_f+$trimestre2TraitKm2_f)/2;   $semestre1TraitKm2_f=number_format($semestre1TraitKm2_f,2);
    $trimestre3TraitKm2_f=((float)$_POST['juillTraitKm2_f']+(float)$_POST['aoutTraitKm2_f']+(float)$_POST['septTraitKm2_f'])/3;
        $trimestre3TraitKm2_f=number_format($trimestre3TraitKm2_f,2);
    $trimestre4TraitKm2_f=((float)$_POST['octTraitKm2_f']+(float)$_POST['novTraitKm2_f']+(float)$_POST['decTraitKm2_f'])/3;
        $trimestre4TraitKm2_f=number_format($trimestre4TraitKm2_f,2);
    $semestre2TraitKm2_f=($trimestre3TraitKm2_f+$trimestre4TraitKm2_f)/2;   $semestre2TraitKm2_f=number_format($semestre2TraitKm2_f,2);
    $globalTraitKm2_f=($semestre1TraitKm2_f+$semestre2TraitKm2_f)/2;    $globalTraitKm2_f=number_format($globalTraitKm2_f,2);

    $arrayTrait_f=['Km'=>[
      'janv'=>$_POST['janvTraitKm_f'],'fevr'=>$_POST['fevrTraitKm_f'],'mars'=>$_POST['marsTraitKm_f'],'trimestre1'=>$trimestre1TraitKm_f,
      'avr'=>$_POST['avrTraitKm_f'],'mai'=>$_POST['maiTraitKm_f'],'juin'=>$_POST['juinTraitKm_f'],'trimestre2'=>$trimestre2TraitKm_f,
      'semestre1'=>$semestre1TraitKm_f,'juill'=>$_POST['juillTraitKm_f'],'aout'=>$_POST['aoutTraitKm_f'],'sept'=>$_POST['septTraitKm_f'],
      'trimestre3'=>$trimestre3TraitKm_f,'oct'=>$_POST['octTraitKm_f'],'nov'=>$_POST['novTraitKm_f'],'dec'=>$_POST['decTraitKm_f'],
      'trimestre4'=>$trimestre4TraitKm_f,'semestre2'=>$semestre2TraitKm_f,'GLOBAL'=>$globalTraitKm_f
      ],
      'Km2'=>[
        'janv'=>$_POST['janvTraitKm2_f'],'fevr'=>$_POST['fevrTraitKm2_f'],'mars'=>$_POST['marsTraitKm2_f'],'trimestre1'=>$trimestre1TraitKm2_f,
        'avr'=>$_POST['avrTraitKm2_f'],'mai'=>$_POST['maiTraitKm2_f'],'juin'=>$_POST['juinTraitKm2_f'],'trimestre2'=>$trimestre2TraitKm2_f,
        'semestre1'=>$semestre1TraitKm2_f,'juill'=>$_POST['juillTraitKm2_f'],'aout'=>$_POST['aoutTraitKm2_f'],'sept'=>$_POST['septTraitKm2_f'],
        'trimestre3'=>$trimestre3TraitKm2_f,'oct'=>$_POST['octTraitKm2_f'],'nov'=>$_POST['novTraitKm2_f'],'dec'=>$_POST['decTraitKm2_f'],
        'trimestre4'=>$trimestre4TraitKm2_f,'semestre2'=>$semestre2TraitKm2_f,'GLOBAL'=>$globalTraitKm2_f
    ]];

    // RetraitKm_f
    $trimestre1RetraitKm_f=((float)$_POST['janvRetraitKm_f']+(float)$_POST['fevrRetraitKm_f']+(float)$_POST['marsRetraitKm_f'])/3;
        $trimestre1RetraitKm_f=number_format($trimestre1RetraitKm_f,2);
    $trimestre2RetraitKm_f=((float)$_POST['avrRetraitKm_f']+(float)$_POST['maiRetraitKm_f']+(float)$_POST['juinRetraitKm_f'])/3;
        $trimestre2RetraitKm_f=number_format($trimestre2RetraitKm_f,2);
    $semestre1RetraitKm_f=($trimestre1RetraitKm_f+$trimestre2RetraitKm_f)/2;   $semestre1RetraitKm_f=number_format($semestre1RetraitKm_f,2);
    $trimestre3RetraitKm_f=((float)$_POST['juillRetraitKm_f']+(float)$_POST['aoutRetraitKm_f']+(float)$_POST['septRetraitKm_f'])/3;
        $trimestre3RetraitKm_f=number_format($trimestre3RetraitKm_f,2);
    $trimestre4RetraitKm_f=((float)$_POST['octRetraitKm_f']+(float)$_POST['novRetraitKm_f']+(float)$_POST['decRetraitKm_f'])/3;
        $trimestre4RetraitKm_f=number_format($trimestre4RetraitKm_f,2);
    $semestre2RetraitKm_f=($trimestre3RetraitKm_f+$trimestre4RetraitKm_f)/2;   $semestre2RetraitKm_f=number_format($semestre2RetraitKm_f,2);
    $globalRetraitKm_f=($semestre1RetraitKm_f+$semestre2RetraitKm_f)/2;    $globalRetraitKm_f=number_format($globalRetraitKm_f,2);
    // RetraitKm2_f
    $trimestre1RetraitKm2_f=((float)$_POST['janvRetraitKm2_f']+(float)$_POST['fevrRetraitKm2_f']+(float)$_POST['marsRetraitKm2_f'])/3;
        $trimestre1RetraitKm2_f=number_format($trimestre1RetraitKm2_f,2);
    $trimestre2RetraitKm2_f=((float)$_POST['avrRetraitKm2_f']+(float)$_POST['maiRetraitKm2_f']+(float)$_POST['juinRetraitKm2_f'])/3;
        $trimestre2RetraitKm2_f=number_format($trimestre2RetraitKm2_f,2);
    $semestre1RetraitKm2_f=($trimestre1RetraitKm2_f+$trimestre2RetraitKm2_f)/2;   $semestre1RetraitKm2_f=number_format($semestre1RetraitKm2_f,2);
    $trimestre3RetraitKm2_f=((float)$_POST['juillRetraitKm2_f']+(float)$_POST['aoutRetraitKm2_f']+(float)$_POST['septRetraitKm2_f'])/3;
        $trimestre3RetraitKm2_f=number_format($trimestre3RetraitKm2_f,2);
    $trimestre4RetraitKm2_f=((float)$_POST['octRetraitKm2_f']+(float)$_POST['novRetraitKm2_f']+(float)$_POST['decRetraitKm2_f'])/3;
        $trimestre4RetraitKm2_f=number_format($trimestre4RetraitKm2_f,2);
    $semestre2RetraitKm2_f=($trimestre3RetraitKm2_f+$trimestre4RetraitKm2_f)/2;   $semestre2RetraitKm2_f=number_format($semestre2RetraitKm2_f,2);
    $globalRetraitKm2_f=($semestre1RetraitKm2_f+$semestre2RetraitKm2_f)/2;    $globalRetraitKm2_f=number_format($globalRetraitKm2_f,2);

    $arrayRetrait_f=['Km'=>[
      'janv'=>$_POST['janvRetraitKm_f'],'fevr'=>$_POST['fevrRetraitKm_f'],'mars'=>$_POST['marsRetraitKm_f'],'trimestre1'=>$trimestre1RetraitKm_f,
      'avr'=>$_POST['avrRetraitKm_f'],'mai'=>$_POST['maiRetraitKm_f'],'juin'=>$_POST['juinRetraitKm_f'],'trimestre2'=>$trimestre2RetraitKm_f,
      'semestre1'=>$semestre1RetraitKm_f,'juill'=>$_POST['juillRetraitKm_f'],'aout'=>$_POST['aoutRetraitKm_f'],'sept'=>$_POST['septRetraitKm_f'],
      'trimestre3'=>$trimestre3RetraitKm_f,'oct'=>$_POST['octRetraitKm_f'],'nov'=>$_POST['novRetraitKm_f'],'dec'=>$_POST['decRetraitKm_f'],
      'trimestre4'=>$trimestre4RetraitKm_f,'semestre2'=>$semestre2RetraitKm_f,'GLOBAL'=>$globalRetraitKm_f
      ],
      'Km2'=>[
        'janv'=>$_POST['janvRetraitKm2_f'],'fevr'=>$_POST['fevrRetraitKm2_f'],'mars'=>$_POST['marsRetraitKm2_f'],'trimestre1'=>$trimestre1RetraitKm2_f,
        'avr'=>$_POST['avrRetraitKm2_f'],'mai'=>$_POST['maiRetraitKm2_f'],'juin'=>$_POST['juinRetraitKm2_f'],'trimestre2'=>$trimestre2RetraitKm2_f,
        'semestre1'=>$semestre1RetraitKm2_f,'juill'=>$_POST['juillRetraitKm2_f'],'aout'=>$_POST['aoutRetraitKm2_f'],'sept'=>$_POST['septRetraitKm2_f'],
        'trimestre3'=>$trimestre3RetraitKm2_f,'oct'=>$_POST['octRetraitKm2_f'],'nov'=>$_POST['novRetraitKm2_f'],'dec'=>$_POST['decRetraitKm2_f'],
        'trimestre4'=>$trimestre4RetraitKm2_f,'semestre2'=>$semestre2RetraitKm2_f,'GLOBAL'=>$globalRetraitKm2_f
    ]];

    // Grav_f
    $trimestre1Grav_f=((float)$_POST['janvGrav_f']+(float)$_POST['fevrGrav_f']+(float)$_POST['marsGrav_f'])/3;
        $trimestre1Grav_f=number_format($trimestre1Grav_f,2);
    $trimestre2Grav_f=((float)$_POST['avrGrav_f']+(float)$_POST['maiGrav_f']+(float)$_POST['juinGrav_f'])/3;
        $trimestre2Grav_f=number_format($trimestre2Grav_f,2);
    $semestre1Grav_f=($trimestre1Grav_f+$trimestre2Grav_f)/2;   $semestre1Grav_f=number_format($semestre1Grav_f,2);
    $trimestre3Grav_f=((float)$_POST['juillGrav_f']+(float)$_POST['aoutGrav_f']+(float)$_POST['septGrav_f'])/3;
        $trimestre3Grav_f=number_format($trimestre3Grav_f,2);
    $trimestre4Grav_f=((float)$_POST['octGrav_f']+(float)$_POST['novGrav_f']+(float)$_POST['decGrav_f'])/3;
        $trimestre4Grav_f=number_format($trimestre4Grav_f,2);
    $semestre2Grav_f=($trimestre3Grav_f+$trimestre4Grav_f)/2;   $semestre2Grav_f=number_format($semestre2Grav_f,2);
    $globalGrav_f=($semestre1Grav_f+$semestre2Grav_f)/2;    $globalGrav_f=number_format($globalGrav_f,2);

    $arrayGrav_f=['janv'=>$_POST['janvGrav_f'],'fevr'=>$_POST['fevrGrav_f'],'mars'=>$_POST['marsGrav_f'],'trimestre1'=>$trimestre1Grav_f,
      'avr'=>$_POST['avrGrav_f'],'mai'=>$_POST['maiGrav_f'],'juin'=>$_POST['juinGrav_f'],'trimestre2'=>$trimestre2Grav_f,'semestre1'=>$semestre1Grav_f,
      'juill'=>$_POST['juillGrav_f'],'aout'=>$_POST['aoutGrav_f'],'sept'=>$_POST['septGrav_f'],'trimestre3'=>$trimestre3Grav_f,
      'oct'=>$_POST['octGrav_f'],'nov'=>$_POST['novGrav_f'],'dec'=>$_POST['decGrav_f'],'trimestre4'=>$trimestre4Grav_f,'semestre2'=>$semestre2Grav_f,
      'GLOBAL'=>$globalGrav_f];

    // Aero_f
    $trimestre1Aero_f=((float)$_POST['janvAero_f']+(float)$_POST['fevrAero_f']+(float)$_POST['marsAero_f'])/3;
        $trimestre1Aero_f=number_format($trimestre1Aero_f,2);
    $trimestre2Aero_f=((float)$_POST['avrAero_f']+(float)$_POST['maiAero_f']+(float)$_POST['juinAero_f'])/3;
        $trimestre2Aero_f=number_format($trimestre2Aero_f,2);
    $semestre1Aero_f=($trimestre1Aero_f+$trimestre2Aero_f)/2;   $semestre1Aero_f=number_format($semestre1Aero_f,2);
    $trimestre3Aero_f=((float)$_POST['juillAero_f']+(float)$_POST['aoutAero_f']+(float)$_POST['septAero_f'])/3;
        $trimestre3Aero_f=number_format($trimestre3Aero_f,2);
    $trimestre4Aero_f=((float)$_POST['octAero_f']+(float)$_POST['novAero_f']+(float)$_POST['decAero_f'])/3;
        $trimestre4Aero_f=number_format($trimestre4Aero_f,2);
    $semestre2Aero_f=($trimestre3Aero_f+$trimestre4Aero_f)/2;   $semestre2Aero_f=number_format($semestre2Aero_f,2);
    $globalAero_f=($semestre1Aero_f+$semestre2Aero_f)/2;    $globalAero_f=number_format($globalAero_f,2);

    $arrayAero_f=['janv'=>$_POST['janvAero_f'],'fevr'=>$_POST['fevrAero_f'],'mars'=>$_POST['marsAero_f'],'trimestre1'=>$trimestre1Aero_f,
      'avr'=>$_POST['avrAero_f'],'mai'=>$_POST['maiAero_f'],'juin'=>$_POST['juinAero_f'],'trimestre2'=>$trimestre2Aero_f,'semestre1'=>$semestre1Aero_f,
      'juill'=>$_POST['juillAero_f'],'aout'=>$_POST['aoutAero_f'],'sept'=>$_POST['septAero_f'],'trimestre3'=>$trimestre3Aero_f,
      'oct'=>$_POST['octAero_f'],'nov'=>$_POST['novAero_f'],'dec'=>$_POST['decAero_f'],'trimestre4'=>$trimestre4Aero_f,'semestre2'=>$semestre2Aero_f,
      'GLOBAL'=>$globalAero_f];

    // Sismiq2D_f
    $trimestre1Sismiq2D_f=((float)$_POST['janvSismiq2D_f']+(float)$_POST['fevrSismiq2D_f']+(float)$_POST['marsSismiq2D_f'])/3;
        $trimestre1Sismiq2D_f=number_format($trimestre1Sismiq2D_f,2);
    $trimestre2Sismiq2D_f=((float)$_POST['avrSismiq2D_f']+(float)$_POST['maiSismiq2D_f']+(float)$_POST['juinSismiq2D_f'])/3;
        $trimestre2Sismiq2D_f=number_format($trimestre2Sismiq2D_f,2);
    $semestre1Sismiq2D_f=($trimestre1Sismiq2D_f+$trimestre2Sismiq2D_f)/2;   $semestre1Sismiq2D_f=number_format($semestre1Sismiq2D_f,2);
    $trimestre3Sismiq2D_f=((float)$_POST['juillSismiq2D_f']+(float)$_POST['aoutSismiq2D_f']+(float)$_POST['septSismiq2D_f'])/3;
        $trimestre3Sismiq2D_f=number_format($trimestre3Sismiq2D_f,2);
    $trimestre4Sismiq2D_f=((float)$_POST['octSismiq2D_f']+(float)$_POST['novSismiq2D_f']+(float)$_POST['decSismiq2D_f'])/3;
        $trimestre4Sismiq2D_f=number_format($trimestre4Sismiq2D_f,2);
    $semestre2Sismiq2D_f=($trimestre3Sismiq2D_f+$trimestre4Sismiq2D_f)/2;   $semestre2Sismiq2D_f=number_format($semestre2Sismiq2D_f,2);
    $globalSismiq2D_f=($semestre1Sismiq2D_f+$semestre2Sismiq2D_f)/2;    $globalSismiq2D_f=number_format($globalSismiq2D_f,2);
    // Sismiq3D_f
    $trimestre1Sismiq3D_f=((float)$_POST['janvSismiq3D_f']+(float)$_POST['fevrSismiq3D_f']+(float)$_POST['marsSismiq3D_f'])/3;
        $trimestre1Sismiq3D_f=number_format($trimestre1Sismiq3D_f,2);
    $trimestre2Sismiq3D_f=((float)$_POST['avrSismiq3D_f']+(float)$_POST['maiSismiq3D_f']+(float)$_POST['juinSismiq3D_f'])/3;
        $trimestre2Sismiq3D_f=number_format($trimestre2Sismiq3D_f,2);
    $semestre1Sismiq3D_f=($trimestre1Sismiq3D_f+$trimestre2Sismiq3D_f)/2;   $semestre1Sismiq3D_f=number_format($semestre1Sismiq3D_f,2);
    $trimestre3Sismiq3D_f=((float)$_POST['juillSismiq3D_f']+(float)$_POST['aoutSismiq3D_f']+(float)$_POST['septSismiq3D_f'])/3;
        $trimestre3Sismiq3D_f=number_format($trimestre3Sismiq3D_f,2);
    $trimestre4Sismiq3D_f=((float)$_POST['octSismiq3D_f']+(float)$_POST['novSismiq3D_f']+(float)$_POST['decSismiq3D_f'])/3;
        $trimestre4Sismiq3D_f=number_format($trimestre4Sismiq3D_f,2);
    $semestre2Sismiq3D_f=($trimestre3Sismiq3D_f+$trimestre4Sismiq3D_f)/2;   $semestre2Sismiq3D_f=number_format($semestre2Sismiq3D_f,2);
    $globalSismiq3D_f=($semestre1Sismiq3D_f+$semestre2Sismiq3D_f)/2;    $globalSismiq3D_f=number_format($globalSismiq3D_f,2);

    $arraySismiq_f=['2D'=>[
      'janv'=>$_POST['janvSismiq2D_f'],'fevr'=>$_POST['fevrSismiq2D_f'],'mars'=>$_POST['marsSismiq2D_f'],'trimestre1'=>$trimestre1Sismiq2D_f,
      'avr'=>$_POST['avrSismiq2D_f'],'mai'=>$_POST['maiSismiq2D_f'],'juin'=>$_POST['juinSismiq2D_f'],'trimestre2'=>$trimestre2Sismiq2D_f,
      'semestre1'=>$semestre1Sismiq2D_f,'juill'=>$_POST['juillSismiq2D_f'],'aout'=>$_POST['aoutSismiq2D_f'],'sept'=>$_POST['septSismiq2D_f'],
      'trimestre3'=>$trimestre3Sismiq2D_f,'oct'=>$_POST['octSismiq2D_f'],'nov'=>$_POST['novSismiq2D_f'],'dec'=>$_POST['decSismiq2D_f'],
      'trimestre4'=>$trimestre4Sismiq2D_f,'semestre2'=>$semestre2Sismiq2D_f,'GLOBAL'=>$globalSismiq2D_f
      ],
      '3D'=>[
        'janv'=>$_POST['janvSismiq3D_f'],'fevr'=>$_POST['fevrSismiq3D_f'],'mars'=>$_POST['marsSismiq3D_f'],'trimestre1'=>$trimestre1Sismiq3D_f,
        'avr'=>$_POST['avrSismiq3D_f'],'mai'=>$_POST['maiSismiq3D_f'],'juin'=>$_POST['juinSismiq3D_f'],'trimestre2'=>$trimestre2Sismiq3D_f,
        'semestre1'=>$semestre1Sismiq3D_f,'juill'=>$_POST['juillSismiq3D_f'],'aout'=>$_POST['aoutSismiq3D_f'],'sept'=>$_POST['septSismiq3D_f'],
        'trimestre3'=>$trimestre3Sismiq3D_f,'oct'=>$_POST['octSismiq3D_f'],'nov'=>$_POST['novSismiq3D_f'],'dec'=>$_POST['decSismiq3D_f'],
        'trimestre4'=>$trimestre4Sismiq3D_f,'semestre2'=>$semestre2Sismiq3D_f,'GLOBAL'=>$globalSismiq3D_f
    ]];

    // Forage_f
    $trimestre1Forage_f=((float)$_POST['janvForage_f']+(float)$_POST['fevrForage_f']+(float)$_POST['marsForage_f'])/3;
        $trimestre1Forage_f=number_format($trimestre1Forage_f,2);
    $trimestre2Forage_f=((float)$_POST['avrForage_f']+(float)$_POST['maiForage_f']+(float)$_POST['juinForage_f'])/3;
        $trimestre2Forage_f=number_format($trimestre2Forage_f,2);
    $semestre1Forage_f=($trimestre1Forage_f+$trimestre2Forage_f)/2;   $semestre1Forage_f=number_format($semestre1Forage_f,2);
    $trimestre3Forage_f=((float)$_POST['juillForage_f']+(float)$_POST['aoutForage_f']+(float)$_POST['septForage_f'])/3;
        $trimestre3Forage_f=number_format($trimestre3Forage_f,2);
    $trimestre4Forage_f=((float)$_POST['octForage_f']+(float)$_POST['novForage_f']+(float)$_POST['decForage_f'])/3;
        $trimestre4Forage_f=number_format($trimestre4Forage_f,2);
    $semestre2Forage_f=($trimestre3Forage_f+$trimestre4Forage_f)/2;   $semestre2Forage_f=number_format($semestre2Forage_f,2);
    $globalForage_f=($semestre1Forage_f+$semestre2Forage_f)/2;    $globalForage_f=number_format($globalForage_f,2);

    $arrayForage_f=['janv'=>$_POST['janvForage_f'],'fevr'=>$_POST['fevrForage_f'],'mars'=>$_POST['marsForage_f'],'trimestre1'=>$trimestre1Forage_f,
      'avr'=>$_POST['avrForage_f'],'mai'=>$_POST['maiForage_f'],'juin'=>$_POST['juinForage_f'],'trimestre2'=>$trimestre2Forage_f,
      'semestre1'=>$semestre1Forage_f,'juill'=>$_POST['juillForage_f'],'aout'=>$_POST['aoutForage_f'],'sept'=>$_POST['septForage_f'],
      'trimestre3'=>$trimestre3Forage_f,'oct'=>$_POST['octForage_f'],'nov'=>$_POST['novForage_f'],'dec'=>$_POST['decForage_f'],
      'trimestre4'=>$trimestre4Forage_f,'semestre2'=>$semestre2Forage_f,'GLOBAL'=>$globalForage_f];

    // PHYSIQUE
    // GT_ph
    $trimestre1GT_ph=((float)$_POST['janvGT_ph']+(float)$_POST['fevrGT_ph']+(float)$_POST['marsGT_ph'])/3;
        $trimestre1GT_ph=number_format($trimestre1GT_ph,2);
    $trimestre2GT_ph=((float)$_POST['avrGT_ph']+(float)$_POST['maiGT_ph']+(float)$_POST['juinGT_ph'])/3;
        $trimestre2GT_ph=number_format($trimestre2GT_ph,2);
    $semestre1GT_ph=($trimestre1GT_ph+$trimestre2GT_ph)/2;   $semestre1GT_ph=number_format($semestre1GT_ph,2);
    $trimestre3GT_ph=((float)$_POST['juillGT_ph']+(float)$_POST['aoutGT_ph']+(float)$_POST['septGT_ph'])/3;
        $trimestre3GT_ph=number_format($trimestre3GT_ph,2);
    $trimestre4GT_ph=((float)$_POST['octGT_ph']+(float)$_POST['novGT_ph']+(float)$_POST['decGT_ph'])/3;
        $trimestre4GT_ph=number_format($trimestre4GT_ph,2);
    $semestre2GT_ph=($trimestre3GT_ph+$trimestre4GT_ph)/2;   $semestre2GT_ph=number_format($semestre2GT_ph,2);
    $globalGT_ph=($semestre1GT_ph+$semestre2GT_ph)/2;    $globalGT_ph=number_format($globalGT_ph,2);

    $arrayGT_ph=['janv'=>$_POST['janvGT_ph'],'fevr'=>$_POST['fevrGT_ph'],'mars'=>$_POST['marsGT_ph'],'trimestre1'=>$trimestre1GT_ph,
      'avr'=>$_POST['avrGT_ph'],'mai'=>$_POST['maiGT_ph'],'juin'=>$_POST['juinGT_ph'],'trimestre2'=>$trimestre2GT_ph,'semestre1'=>$semestre1GT_ph,
      'juill'=>$_POST['juillGT_ph'],'aout'=>$_POST['aoutGT_ph'],'sept'=>$_POST['septGT_ph'],'trimestre3'=>$trimestre3GT_ph,
      'oct'=>$_POST['octGT_ph'],'nov'=>$_POST['novGT_ph'],'dec'=>$_POST['decGT_ph'],'trimestre4'=>$trimestre4GT_ph,'semestre2'=>$semestre2GT_ph,
      'GLOBAL'=>$globalGT_ph];

    // TS_ph
    $trimestre1TS_ph=((float)$_POST['janvTS_ph']+(float)$_POST['fevrTS_ph']+(float)$_POST['marsTS_ph'])/3;
        $trimestre1TS_ph=number_format($trimestre1TS_ph,2);
    $trimestre2TS_ph=((float)$_POST['avrTS_ph']+(float)$_POST['maiTS_ph']+(float)$_POST['juinTS_ph'])/3;
        $trimestre2TS_ph=number_format($trimestre2TS_ph,2);
    $semestre1TS_ph=($trimestre1TS_ph+$trimestre2TS_ph)/2;   $semestre1TS_ph=number_format($semestre1TS_ph,2);
    $trimestre3TS_ph=((float)$_POST['juillTS_ph']+(float)$_POST['aoutTS_ph']+(float)$_POST['septTS_ph'])/3;
        $trimestre3TS_ph=number_format($trimestre3TS_ph,2);
    $trimestre4TS_ph=((float)$_POST['octTS_ph']+(float)$_POST['novTS_ph']+(float)$_POST['decTS_ph'])/3;
        $trimestre4TS_ph=number_format($trimestre4TS_ph,2);
    $semestre2TS_ph=($trimestre3TS_ph+$trimestre4TS_ph)/2;   $semestre2TS_ph=number_format($semestre2TS_ph,2);
    $globalTS_ph=($semestre1TS_ph+$semestre2TS_ph)/2;    $globalTS_ph=number_format($globalTS_ph,2);

    $arrayTS_ph=['janv'=>$_POST['janvTS_ph'],'fevr'=>$_POST['fevrTS_ph'],'mars'=>$_POST['marsTS_ph'],'trimestre1'=>$trimestre1TS_ph,
      'avr'=>$_POST['avrTS_ph'],'mai'=>$_POST['maiTS_ph'],'juin'=>$_POST['juinTS_ph'],'trimestre2'=>$trimestre2TS_ph,'semestre1'=>$semestre1TS_ph,
      'juill'=>$_POST['juillTS_ph'],'aout'=>$_POST['aoutTS_ph'],'sept'=>$_POST['septTS_ph'],'trimestre3'=>$trimestre3TS_ph,
      'oct'=>$_POST['octTS_ph'],'nov'=>$_POST['novTS_ph'],'dec'=>$_POST['decTS_ph'],'trimestre4'=>$trimestre4TS_ph,'semestre2'=>$semestre2TS_ph,
      'GLOBAL'=>$globalTS_ph];

    // TraitKm_ph
    $trimestre1TraitKm_ph=((float)$_POST['janvTraitKm_ph']+(float)$_POST['fevrTraitKm_ph']+(float)$_POST['marsTraitKm_ph'])/3;
        $trimestre1TraitKm_ph=number_format($trimestre1TraitKm_ph,2);
    $trimestre2TraitKm_ph=((float)$_POST['avrTraitKm_ph']+(float)$_POST['maiTraitKm_ph']+(float)$_POST['juinTraitKm_ph'])/3;
        $trimestre2TraitKm_ph=number_format($trimestre2TraitKm_ph,2);
    $semestre1TraitKm_ph=($trimestre1TraitKm_ph+$trimestre2TraitKm_ph)/2;   $semestre1TraitKm_ph=number_format($semestre1TraitKm_ph,2);
    $trimestre3TraitKm_ph=((float)$_POST['juillTraitKm_ph']+(float)$_POST['aoutTraitKm_ph']+(float)$_POST['septTraitKm_ph'])/3;
        $trimestre3TraitKm_ph=number_format($trimestre3TraitKm_ph,2);
    $trimestre4TraitKm_ph=((float)$_POST['octTraitKm_ph']+(float)$_POST['novTraitKm_ph']+(float)$_POST['decTraitKm_ph'])/3;
        $trimestre4TraitKm_ph=number_format($trimestre4TraitKm_ph,2);
    $semestre2TraitKm_ph=($trimestre3TraitKm_ph+$trimestre4TraitKm_ph)/2;   $semestre2TraitKm_ph=number_format($semestre2TraitKm_ph,2);
    $globalTraitKm_ph=($semestre1TraitKm_ph+$semestre2TraitKm_ph)/2;    $globalTraitKm_ph=number_format($globalTraitKm_ph,2);
    // TraitKm2_ph
    $trimestre1TraitKm2_ph=((float)$_POST['janvTraitKm2_ph']+(float)$_POST['fevrTraitKm2_ph']+(float)$_POST['marsTraitKm2_ph'])/3;
        $trimestre1TraitKm2_ph=number_format($trimestre1TraitKm2_ph,2);
    $trimestre2TraitKm2_ph=((float)$_POST['avrTraitKm2_ph']+(float)$_POST['maiTraitKm2_ph']+(float)$_POST['juinTraitKm2_ph'])/3;
        $trimestre2TraitKm2_ph=number_format($trimestre2TraitKm2_ph,2);
    $semestre1TraitKm2_ph=($trimestre1TraitKm2_ph+$trimestre2TraitKm2_ph)/2;   $semestre1TraitKm2_ph=number_format($semestre1TraitKm2_ph,2);
    $trimestre3TraitKm2_ph=((float)$_POST['juillTraitKm2_ph']+(float)$_POST['aoutTraitKm2_ph']+(float)$_POST['septTraitKm2_ph'])/3;
        $trimestre3TraitKm2_ph=number_format($trimestre3TraitKm2_ph,2);
    $trimestre4TraitKm2_ph=((float)$_POST['octTraitKm2_ph']+(float)$_POST['novTraitKm2_ph']+(float)$_POST['decTraitKm2_ph'])/3;
        $trimestre4TraitKm2_ph=number_format($trimestre4TraitKm2_ph,2);
    $semestre2TraitKm2_ph=($trimestre3TraitKm2_ph+$trimestre4TraitKm2_ph)/2;   $semestre2TraitKm2_ph=number_format($semestre2TraitKm2_ph,2);
    $globalTraitKm2_ph=($semestre1TraitKm2_ph+$semestre2TraitKm2_ph)/2;    $globalTraitKm2_ph=number_format($globalTraitKm2_ph,2);

    $arrayTrait_ph=['Km'=>[
      'janv'=>$_POST['janvTraitKm_ph'],'fevr'=>$_POST['fevrTraitKm_ph'],'mars'=>$_POST['marsTraitKm_ph'],'trimestre1'=>$trimestre1TraitKm_ph,
      'avr'=>$_POST['avrTraitKm_ph'],'mai'=>$_POST['maiTraitKm_ph'],'juin'=>$_POST['juinTraitKm_ph'],'trimestre2'=>$trimestre2TraitKm_ph,
      'semestre1'=>$semestre1TraitKm_ph,'juill'=>$_POST['juillTraitKm_ph'],'aout'=>$_POST['aoutTraitKm_ph'],'sept'=>$_POST['septTraitKm_ph'],
      'trimestre3'=>$trimestre3TraitKm_ph,'oct'=>$_POST['octTraitKm_ph'],'nov'=>$_POST['novTraitKm_ph'],'dec'=>$_POST['decTraitKm_ph'],
      'trimestre4'=>$trimestre4TraitKm_ph,'semestre2'=>$semestre2TraitKm_ph,'GLOBAL'=>$globalTraitKm_ph
      ],
      'Km2'=>[
        'janv'=>$_POST['janvTraitKm2_ph'],'fevr'=>$_POST['fevrTraitKm2_ph'],'mars'=>$_POST['marsTraitKm2_ph'],'trimestre1'=>$trimestre1TraitKm2_ph,
        'avr'=>$_POST['avrTraitKm2_ph'],'mai'=>$_POST['maiTraitKm2_ph'],'juin'=>$_POST['juinTraitKm2_ph'],'trimestre2'=>$trimestre2TraitKm2_ph,
        'semestre1'=>$semestre1TraitKm2_ph,'juill'=>$_POST['juillTraitKm2_ph'],'aout'=>$_POST['aoutTraitKm2_ph'],'sept'=>$_POST['septTraitKm2_ph'],
        'trimestre3'=>$trimestre3TraitKm2_ph,'oct'=>$_POST['octTraitKm2_ph'],'nov'=>$_POST['novTraitKm2_ph'],'dec'=>$_POST['decTraitKm2_ph'],
        'trimestre4'=>$trimestre4TraitKm2_ph,'semestre2'=>$semestre2TraitKm2_ph,'GLOBAL'=>$globalTraitKm2_ph
    ]];

    // RetraitKm_ph
    $trimestre1RetraitKm_ph=((float)$_POST['janvRetraitKm_ph']+(float)$_POST['fevrRetraitKm_ph']+(float)$_POST['marsRetraitKm_ph'])/3;
        $trimestre1RetraitKm_ph=number_format($trimestre1RetraitKm_ph,2);
    $trimestre2RetraitKm_ph=((float)$_POST['avrRetraitKm_ph']+(float)$_POST['maiRetraitKm_ph']+(float)$_POST['juinRetraitKm_ph'])/3;
        $trimestre2RetraitKm_ph=number_format($trimestre2RetraitKm_ph,2);
    $semestre1RetraitKm_ph=($trimestre1RetraitKm_ph+$trimestre2RetraitKm_ph)/2;   $semestre1RetraitKm_ph=number_format($semestre1RetraitKm_ph,2);
    $trimestre3RetraitKm_ph=((float)$_POST['juillRetraitKm_ph']+(float)$_POST['aoutRetraitKm_ph']+(float)$_POST['septRetraitKm_ph'])/3;
        $trimestre3RetraitKm_ph=number_format($trimestre3RetraitKm_ph,2);
    $trimestre4RetraitKm_ph=((float)$_POST['octRetraitKm_ph']+(float)$_POST['novRetraitKm_ph']+(float)$_POST['decRetraitKm_ph'])/3;
        $trimestre4RetraitKm_ph=number_format($trimestre4RetraitKm_ph,2);
    $semestre2RetraitKm_ph=($trimestre3RetraitKm_ph+$trimestre4RetraitKm_ph)/2;   $semestre2RetraitKm_ph=number_format($semestre2RetraitKm_ph,2);
    $globalRetraitKm_ph=($semestre1RetraitKm_ph+$semestre2RetraitKm_ph)/2;    $globalRetraitKm_ph=number_format($globalRetraitKm_ph,2);
    // RetraitKm2_ph
    $trimestre1RetraitKm2_ph=((float)$_POST['janvRetraitKm2_ph']+(float)$_POST['fevrRetraitKm2_ph']+(float)$_POST['marsRetraitKm2_ph'])/3;
        $trimestre1RetraitKm2_ph=number_format($trimestre1RetraitKm2_ph,2);
    $trimestre2RetraitKm2_ph=((float)$_POST['avrRetraitKm2_ph']+(float)$_POST['maiRetraitKm2_ph']+(float)$_POST['juinRetraitKm2_ph'])/3;
        $trimestre2RetraitKm2_ph=number_format($trimestre2RetraitKm2_ph,2);
    $semestre1RetraitKm2_ph=($trimestre1RetraitKm2_ph+$trimestre2RetraitKm2_ph)/2;   $semestre1RetraitKm2_ph=number_format($semestre1RetraitKm2_ph,2);
    $trimestre3RetraitKm2_ph=((float)$_POST['juillRetraitKm2_ph']+(float)$_POST['aoutRetraitKm2_ph']+(float)$_POST['septRetraitKm2_ph'])/3;
        $trimestre3RetraitKm2_ph=number_format($trimestre3RetraitKm2_ph,2);
    $trimestre4RetraitKm2_ph=((float)$_POST['octRetraitKm2_ph']+(float)$_POST['novRetraitKm2_ph']+(float)$_POST['decRetraitKm2_ph'])/3;
        $trimestre4RetraitKm2_ph=number_format($trimestre4RetraitKm2_ph,2);
    $semestre2RetraitKm2_ph=($trimestre3RetraitKm2_ph+$trimestre4RetraitKm2_ph)/2;   $semestre2RetraitKm2_ph=number_format($semestre2RetraitKm2_ph,2);
    $globalRetraitKm2_ph=($semestre1RetraitKm2_ph+$semestre2RetraitKm2_ph)/2;    $globalRetraitKm2_ph=number_format($globalRetraitKm2_ph,2);

    $arrayRetrait_ph=['Km'=>[
      'janv'=>$_POST['janvRetraitKm_ph'],'fevr'=>$_POST['fevrRetraitKm_ph'],'mars'=>$_POST['marsRetraitKm_ph'],'trimestre1'=>$trimestre1RetraitKm_ph,
      'avr'=>$_POST['avrRetraitKm_ph'],'mai'=>$_POST['maiRetraitKm_ph'],'juin'=>$_POST['juinRetraitKm_ph'],'trimestre2'=>$trimestre2RetraitKm_ph,
      'semestre1'=>$semestre1RetraitKm_ph,'juill'=>$_POST['juillRetraitKm_ph'],'aout'=>$_POST['aoutRetraitKm_ph'],'sept'=>$_POST['septRetraitKm_ph'],
      'trimestre3'=>$trimestre3RetraitKm_ph,'oct'=>$_POST['octRetraitKm_ph'],'nov'=>$_POST['novRetraitKm_ph'],'dec'=>$_POST['decRetraitKm_ph'],
      'trimestre4'=>$trimestre4RetraitKm_ph,'semestre2'=>$semestre2RetraitKm_ph,'GLOBAL'=>$globalRetraitKm_ph
      ],
      'Km2'=>[
        'janv'=>$_POST['janvRetraitKm2_ph'],'fevr'=>$_POST['fevrRetraitKm2_ph'],'mars'=>$_POST['marsRetraitKm2_ph'],
        'trimestre1'=>$trimestre1RetraitKm2_ph,'avr'=>$_POST['avrRetraitKm2_ph'],'mai'=>$_POST['maiRetraitKm2_ph'],'juin'=>$_POST['juinRetraitKm2_ph'],
        'trimestre2'=>$trimestre2RetraitKm2_ph,'semestre1'=>$semestre1RetraitKm2_ph,'juill'=>$_POST['juillRetraitKm2_ph'],
        'aout'=>$_POST['aoutRetraitKm2_ph'],'sept'=>$_POST['septRetraitKm2_ph'],'trimestre3'=>$trimestre3RetraitKm2_ph,'oct'=>$_POST['octRetraitKm2_ph'],
        'nov'=>$_POST['novRetraitKm2_ph'],'dec'=>$_POST['decRetraitKm2_ph'],'trimestre4'=>$trimestre4RetraitKm2_ph,'semestre2'=>$semestre2RetraitKm2_ph,
        'GLOBAL'=>$globalRetraitKm2_ph
    ]];

    // Grav_ph
    $trimestre1Grav_ph=((float)$_POST['janvGrav_ph']+(float)$_POST['fevrGrav_ph']+(float)$_POST['marsGrav_ph'])/3;
        $trimestre1Grav_ph=number_format($trimestre1Grav_ph,2);
    $trimestre2Grav_ph=((float)$_POST['avrGrav_ph']+(float)$_POST['maiGrav_ph']+(float)$_POST['juinGrav_ph'])/3;
        $trimestre2Grav_ph=number_format($trimestre2Grav_ph,2);
    $semestre1Grav_ph=($trimestre1Grav_ph+$trimestre2Grav_ph)/2;   $semestre1Grav_ph=number_format($semestre1Grav_ph,2);
    $trimestre3Grav_ph=((float)$_POST['juillGrav_ph']+(float)$_POST['aoutGrav_ph']+(float)$_POST['septGrav_ph'])/3;
        $trimestre3Grav_ph=number_format($trimestre3Grav_ph,2);
    $trimestre4Grav_ph=((float)$_POST['octGrav_ph']+(float)$_POST['novGrav_ph']+(float)$_POST['decGrav_ph'])/3;
        $trimestre4Grav_ph=number_format($trimestre4Grav_ph,2);
    $semestre2Grav_ph=($trimestre3Grav_ph+$trimestre4Grav_ph)/2;   $semestre2Grav_ph=number_format($semestre2Grav_ph,2);
    $globalGrav_ph=($semestre1Grav_ph+$semestre2Grav_ph)/2;    $globalGrav_ph=number_format($globalGrav_ph,2);

    $arrayGrav_ph=['janv'=>$_POST['janvGrav_ph'],'fevr'=>$_POST['fevrGrav_ph'],'mars'=>$_POST['marsGrav_ph'],'trimestre1'=>$trimestre1Grav_ph,
      'avr'=>$_POST['avrGrav_ph'],'mai'=>$_POST['maiGrav_ph'],'juin'=>$_POST['juinGrav_ph'],'trimestre2'=>$trimestre2Grav_ph,
      'semestre1'=>$semestre1Grav_ph,'juill'=>$_POST['juillGrav_ph'],'aout'=>$_POST['aoutGrav_ph'],'sept'=>$_POST['septGrav_ph'],
      'trimestre3'=>$trimestre3Grav_ph,'oct'=>$_POST['octGrav_ph'],'nov'=>$_POST['novGrav_ph'],'dec'=>$_POST['decGrav_ph'],
      'trimestre4'=>$trimestre4Grav_ph,'semestre2'=>$semestre2Grav_ph,'GLOBAL'=>$globalGrav_ph];

    // Aero_ph
    $trimestre1Aero_ph=((float)$_POST['janvAero_ph']+(float)$_POST['fevrAero_ph']+(float)$_POST['marsAero_ph'])/3;
        $trimestre1Aero_ph=number_format($trimestre1Aero_ph,2);
    $trimestre2Aero_ph=((float)$_POST['avrAero_ph']+(float)$_POST['maiAero_ph']+(float)$_POST['juinAero_ph'])/3;
        $trimestre2Aero_ph=number_format($trimestre2Aero_ph,2);
    $semestre1Aero_ph=($trimestre1Aero_ph+$trimestre2Aero_ph)/2;   $semestre1Aero_ph=number_format($semestre1Aero_ph,2);
    $trimestre3Aero_ph=((float)$_POST['juillAero_ph']+(float)$_POST['aoutAero_ph']+(float)$_POST['septAero_ph'])/3;
        $trimestre3Aero_ph=number_format($trimestre3Aero_ph,2);
    $trimestre4Aero_ph=((float)$_POST['octAero_ph']+(float)$_POST['novAero_ph']+(float)$_POST['decAero_ph'])/3;
        $trimestre4Aero_ph=number_format($trimestre4Aero_ph,2);
    $semestre2Aero_ph=($trimestre3Aero_ph+$trimestre4Aero_ph)/2;   $semestre2Aero_ph=number_format($semestre2Aero_ph,2);
    $globalAero_ph=($semestre1Aero_ph+$semestre2Aero_ph)/2;    $globalAero_ph=number_format($globalAero_ph,2);

    $arrayAero_ph=['janv'=>$_POST['janvAero_ph'],'fevr'=>$_POST['fevrAero_ph'],'mars'=>$_POST['marsAero_ph'],'trimestre1'=>$trimestre1Aero_ph,
      'avr'=>$_POST['avrAero_ph'],'mai'=>$_POST['maiAero_ph'],'juin'=>$_POST['juinAero_ph'],'trimestre2'=>$trimestre2Aero_ph,
      'semestre1'=>$semestre1Aero_ph,'juill'=>$_POST['juillAero_ph'],'aout'=>$_POST['aoutAero_ph'],'sept'=>$_POST['septAero_ph'],
      'trimestre3'=>$trimestre3Aero_ph,'oct'=>$_POST['octAero_ph'],'nov'=>$_POST['novAero_ph'],'dec'=>$_POST['decAero_ph'],
      'trimestre4'=>$trimestre4Aero_ph,'semestre2'=>$semestre2Aero_ph,'GLOBAL'=>$globalAero_ph];

    // Sismiq2DMequ_ph
    $trimestre1Sismiq2DMequ_ph=((float)$_POST['janvSismiq2DMequ_ph']+(float)$_POST['fevrSismiq2DMequ_ph']+(float)$_POST['marsSismiq2DMequ_ph'])/3;
        $trimestre1Sismiq2DMequ_ph=number_format($trimestre1Sismiq2DMequ_ph,2);
    $trimestre2Sismiq2DMequ_ph=((float)$_POST['avrSismiq2DMequ_ph']+(float)$_POST['maiSismiq2DMequ_ph']+(float)$_POST['juinSismiq2DMequ_ph'])/3;
        $trimestre2Sismiq2DMequ_ph=number_format($trimestre2Sismiq2DMequ_ph,2);
    $semestre1Sismiq2DMequ_ph=($trimestre1Sismiq2DMequ_ph+$trimestre2Sismiq2DMequ_ph)/2;
        $semestre1Sismiq2DMequ_ph=number_format($semestre1Sismiq2DMequ_ph,2);
    $trimestre3Sismiq2DMequ_ph=((float)$_POST['juillSismiq2DMequ_ph']+(float)$_POST['aoutSismiq2DMequ_ph']+(float)$_POST['septSismiq2DMequ_ph'])/3;
        $trimestre3Sismiq2DMequ_ph=number_format($trimestre3Sismiq2DMequ_ph,2);
    $trimestre4Sismiq2DMequ_ph=((float)$_POST['octSismiq2DMequ_ph']+(float)$_POST['novSismiq2DMequ_ph']+(float)$_POST['decSismiq2DMequ_ph'])/3;
        $trimestre4Sismiq2DMequ_ph=number_format($trimestre4Sismiq2DMequ_ph,2);
    $semestre2Sismiq2DMequ_ph=($trimestre3Sismiq2DMequ_ph+$trimestre4Sismiq2DMequ_ph)/2;
        $semestre2Sismiq2DMequ_ph=number_format($semestre2Sismiq2DMequ_ph,2);
    $globalSismiq2DMequ_ph=($semestre1Sismiq2DMequ_ph+$semestre2Sismiq2DMequ_ph)/2;
        $globalSismiq2DMequ_ph=number_format($globalSismiq2DMequ_ph,2);
    // Sismiq2DKm_ph
    $trimestre1Sismiq2DKm_ph=((float)$_POST['janvSismiq2DKm_ph']+(float)$_POST['fevrSismiq2DKm_ph']+(float)$_POST['marsSismiq2DKm_ph'])/3;
        $trimestre1Sismiq2DKm_ph=number_format($trimestre1Sismiq2DKm_ph,2);
    $trimestre2Sismiq2DKm_ph=((float)$_POST['avrSismiq2DKm_ph']+(float)$_POST['maiSismiq2DKm_ph']+(float)$_POST['juinSismiq2DKm_ph'])/3;
        $trimestre2Sismiq2DKm_ph=number_format($trimestre2Sismiq2DKm_ph,2);
    $semestre1Sismiq2DKm_ph=($trimestre1Sismiq2DKm_ph+$trimestre2Sismiq2DKm_ph)/2;   $semestre1Sismiq2DKm_ph=number_format($semestre1Sismiq2DKm_ph,2);
    $trimestre3Sismiq2DKm_ph=((float)$_POST['juillSismiq2DKm_ph']+(float)$_POST['aoutSismiq2DKm_ph']+(float)$_POST['septSismiq2DKm_ph'])/3;
        $trimestre3Sismiq2DKm_ph=number_format($trimestre3Sismiq2DKm_ph,2);
    $trimestre4Sismiq2DKm_ph=((float)$_POST['octSismiq2DKm_ph']+(float)$_POST['novSismiq2DKm_ph']+(float)$_POST['decSismiq2DKm_ph'])/3;
        $trimestre4Sismiq2DKm_ph=number_format($trimestre4Sismiq2DKm_ph,2);
    $semestre2Sismiq2DKm_ph=($trimestre3Sismiq2DKm_ph+$trimestre4Sismiq2DKm_ph)/2;   $semestre2Sismiq2DKm_ph=number_format($semestre2Sismiq2DKm_ph,2);
    $globalSismiq2DKm_ph=($semestre1Sismiq2DKm_ph+$semestre2Sismiq2DKm_ph)/2;    $globalSismiq2DKm_ph=number_format($globalSismiq2DKm_ph,2);
    // Sismiq2DPV_ph
    $trimestre1Sismiq2DPV_ph=((float)$_POST['janvSismiq2DPV_ph']+(float)$_POST['fevrSismiq2DPV_ph']+(float)$_POST['marsSismiq2DPV_ph'])/3;
        $trimestre1Sismiq2DPV_ph=number_format($trimestre1Sismiq2DPV_ph,2);
    $trimestre2Sismiq2DPV_ph=((float)$_POST['avrSismiq2DPV_ph']+(float)$_POST['maiSismiq2DPV_ph']+(float)$_POST['juinSismiq2DPV_ph'])/3;
        $trimestre2Sismiq2DPV_ph=number_format($trimestre2Sismiq2DPV_ph,2);
    $semestre1Sismiq2DPV_ph=($trimestre1Sismiq2DPV_ph+$trimestre2Sismiq2DPV_ph)/2;   $semestre1Sismiq2DPV_ph=number_format($semestre1Sismiq2DPV_ph,2);
    $trimestre3Sismiq2DPV_ph=((float)$_POST['juillSismiq2DPV_ph']+(float)$_POST['aoutSismiq2DPV_ph']+(float)$_POST['septSismiq2DPV_ph'])/3;
        $trimestre3Sismiq2DPV_ph=number_format($trimestre3Sismiq2DPV_ph,2);
    $trimestre4Sismiq2DPV_ph=((float)$_POST['octSismiq2DPV_ph']+(float)$_POST['novSismiq2DPV_ph']+(float)$_POST['decSismiq2DPV_ph'])/3;
        $trimestre4Sismiq2DPV_ph=number_format($trimestre4Sismiq2DPV_ph,2);
    $semestre2Sismiq2DPV_ph=($trimestre3Sismiq2DPV_ph+$trimestre4Sismiq2DPV_ph)/2;   $semestre2Sismiq2DPV_ph=number_format($semestre2Sismiq2DPV_ph,2);
    $globalSismiq2DPV_ph=($semestre1Sismiq2DPV_ph+$semestre2Sismiq2DPV_ph)/2;    $globalSismiq2DPV_ph=number_format($globalSismiq2DPV_ph,2);
    // Sismiq3DMequ_ph
    $trimestre1Sismiq3DMequ_ph=((float)$_POST['janvSismiq3DMequ_ph']+(float)$_POST['fevrSismiq3DMequ_ph']+(float)$_POST['marsSismiq3DMequ_ph'])/3;
        $trimestre1Sismiq3DMequ_ph=number_format($trimestre1Sismiq3DMequ_ph,2);
    $trimestre2Sismiq3DMequ_ph=((float)$_POST['avrSismiq3DMequ_ph']+(float)$_POST['maiSismiq3DMequ_ph']+(float)$_POST['juinSismiq3DMequ_ph'])/3;
        $trimestre2Sismiq3DMequ_ph=number_format($trimestre2Sismiq3DMequ_ph,2);
    $semestre1Sismiq3DMequ_ph=($trimestre1Sismiq3DMequ_ph+$trimestre2Sismiq3DMequ_ph)/2;
        $semestre1Sismiq3DMequ_ph=number_format($semestre1Sismiq3DMequ_ph,2);
    $trimestre3Sismiq3DMequ_ph=((float)$_POST['juillSismiq3DMequ_ph']+(float)$_POST['aoutSismiq3DMequ_ph']+(float)$_POST['septSismiq3DMequ_ph'])/3;
        $trimestre3Sismiq3DMequ_ph=number_format($trimestre3Sismiq3DMequ_ph,2);
    $trimestre4Sismiq3DMequ_ph=((float)$_POST['octSismiq3DMequ_ph']+(float)$_POST['novSismiq3DMequ_ph']+(float)$_POST['decSismiq3DMequ_ph'])/3;
        $trimestre4Sismiq3DMequ_ph=number_format($trimestre4Sismiq3DMequ_ph,2);
    $semestre2Sismiq3DMequ_ph=($trimestre3Sismiq3DMequ_ph+$trimestre4Sismiq3DMequ_ph)/2;
        $semestre2Sismiq3DMequ_ph=number_format($semestre2Sismiq3DMequ_ph,2);
    $globalSismiq3DMequ_ph=($semestre1Sismiq3DMequ_ph+$semestre2Sismiq3DMequ_ph)/2;
        $globalSismiq3DMequ_ph=number_format($globalSismiq3DMequ_ph,2);
    // Sismiq3DKm2_ph
    $trimestre1Sismiq3DKm2_ph=((float)$_POST['janvSismiq3DKm2_ph']+(float)$_POST['fevrSismiq3DKm2_ph']+(float)$_POST['marsSismiq3DKm2_ph'])/3;
        $trimestre1Sismiq3DKm2_ph=number_format($trimestre1Sismiq3DKm2_ph,2);
    $trimestre2Sismiq3DKm2_ph=((float)$_POST['avrSismiq3DKm2_ph']+(float)$_POST['maiSismiq3DKm2_ph']+(float)$_POST['juinSismiq3DKm2_ph'])/3;
        $trimestre2Sismiq3DKm2_ph=number_format($trimestre2Sismiq3DKm2_ph,2);
    $semestre1Sismiq3DKm2_ph=($trimestre1Sismiq3DKm2_ph+$trimestre2Sismiq3DKm2_ph)/2;
        $semestre1Sismiq3DKm2_ph=number_format($semestre1Sismiq3DKm2_ph,2);
    $trimestre3Sismiq3DKm2_ph=((float)$_POST['juillSismiq3DKm2_ph']+(float)$_POST['aoutSismiq3DKm2_ph']+(float)$_POST['septSismiq3DKm2_ph'])/3;
        $trimestre3Sismiq3DKm2_ph=number_format($trimestre3Sismiq3DKm2_ph,2);
    $trimestre4Sismiq3DKm2_ph=((float)$_POST['octSismiq3DKm2_ph']+(float)$_POST['novSismiq3DKm2_ph']+(float)$_POST['decSismiq3DKm2_ph'])/3;
        $trimestre4Sismiq3DKm2_ph=number_format($trimestre4Sismiq3DKm2_ph,2);
    $semestre2Sismiq3DKm2_ph=($trimestre3Sismiq3DKm2_ph+$trimestre4Sismiq3DKm2_ph)/2;
        $semestre2Sismiq3DKm2_ph=number_format($semestre2Sismiq3DKm2_ph,2);
    $globalSismiq3DKm2_ph=($semestre1Sismiq3DKm2_ph+$semestre2Sismiq3DKm2_ph)/2;
        $globalSismiq3DKm2_ph=number_format($globalSismiq3DKm2_ph,2);
    // Sismiq3DPV_ph
    $trimestre1Sismiq3DPV_ph=((float)$_POST['janvSismiq3DPV_ph']+(float)$_POST['fevrSismiq3DPV_ph']+(float)$_POST['marsSismiq3DPV_ph'])/3;
        $trimestre1Sismiq3DPV_ph=number_format($trimestre1Sismiq3DPV_ph,2);
    $trimestre2Sismiq3DPV_ph=((float)$_POST['avrSismiq3DPV_ph']+(float)$_POST['maiSismiq3DPV_ph']+(float)$_POST['juinSismiq3DPV_ph'])/3;
        $trimestre2Sismiq3DPV_ph=number_format($trimestre2Sismiq3DPV_ph,2);
    $semestre1Sismiq3DPV_ph=($trimestre1Sismiq3DPV_ph+$trimestre2Sismiq3DPV_ph)/2;
        $semestre1Sismiq3DPV_ph=number_format($semestre1Sismiq3DPV_ph,2);
    $trimestre3Sismiq3DPV_ph=((float)$_POST['juillSismiq3DPV_ph']+(float)$_POST['aoutSismiq3DPV_ph']+(float)$_POST['septSismiq3DPV_ph'])/3;
        $trimestre3Sismiq3DPV_ph=number_format($trimestre3Sismiq3DPV_ph,2);
    $trimestre4Sismiq3DPV_ph=((float)$_POST['octSismiq3DPV_ph']+(float)$_POST['novSismiq3DPV_ph']+(float)$_POST['decSismiq3DPV_ph'])/3;
        $trimestre4Sismiq3DPV_ph=number_format($trimestre4Sismiq3DPV_ph,2);
    $semestre2Sismiq3DPV_ph=($trimestre3Sismiq3DPV_ph+$trimestre4Sismiq3DPV_ph)/2;
        $semestre2Sismiq3DPV_ph=number_format($semestre2Sismiq3DPV_ph,2);
    $globalSismiq3DPV_ph=($semestre1Sismiq3DPV_ph+$semestre2Sismiq3DPV_ph)/2;
        $globalSismiq3DPV_ph=number_format($globalSismiq3DPV_ph,2);

    $arraySismiq_ph=['2D'=>[
      'Mequ'=>['janv'=>$_POST['janvSismiq2DMequ_ph'],'fevr'=>$_POST['fevrSismiq2DMequ_ph'],'mars'=>$_POST['marsSismiq2DMequ_ph'],
      'trimestre1'=>$trimestre1Sismiq2DMequ_ph,'avr'=>$_POST['avrSismiq2DMequ_ph'],'mai'=>$_POST['maiSismiq2DMequ_ph'],
      'juin'=>$_POST['juinSismiq2DMequ_ph'],'trimestre2'=>$trimestre2Sismiq2DMequ_ph,'semestre1'=>$semestre1Sismiq2DMequ_ph,
      'juill'=>$_POST['juillSismiq2DMequ_ph'],'aout'=>$_POST['aoutSismiq2DMequ_ph'],'sept'=>$_POST['septSismiq2DMequ_ph'],
      'trimestre3'=>$trimestre3Sismiq2DMequ_ph,'oct'=>$_POST['octSismiq2DMequ_ph'],'nov'=>$_POST['novSismiq2DMequ_ph'],
      'dec'=>$_POST['decSismiq2DMequ_ph'],'trimestre4'=>$trimestre4Sismiq2DMequ_ph,'semestre2'=>$semestre2Sismiq2DMequ_ph,
      'GLOBAL'=>$globalSismiq2DMequ_ph],

      'Km'=>['janv'=>$_POST['janvSismiq2DKm_ph'],'fevr'=>$_POST['fevrSismiq2DKm_ph'],'mars'=>$_POST['marsSismiq2DKm_ph'],
      'trimestre1'=>$trimestre1Sismiq2DKm_ph,'avr'=>$_POST['avrSismiq2DKm_ph'],'mai'=>$_POST['maiSismiq2DKm_ph'],
      'juin'=>$_POST['juinSismiq2DKm_ph'],'trimestre2'=>$trimestre2Sismiq2DKm_ph,'semestre1'=>$semestre1Sismiq2DKm_ph,
      'juill'=>$_POST['juillSismiq2DKm_ph'],'aout'=>$_POST['aoutSismiq2DKm_ph'],'sept'=>$_POST['septSismiq2DKm_ph'],
      'trimestre3'=>$trimestre3Sismiq2DKm_ph,'oct'=>$_POST['octSismiq2DKm_ph'],'nov'=>$_POST['novSismiq2DKm_ph'],
      'dec'=>$_POST['decSismiq2DKm_ph'],'trimestre4'=>$trimestre4Sismiq2DKm_ph,'semestre2'=>$semestre2Sismiq2DKm_ph,
      'GLOBAL'=>$globalSismiq2DKm_ph],

      'PV'=>['janv'=>$_POST['janvSismiq2DPV_ph'],'fevr'=>$_POST['fevrSismiq2DPV_ph'],'mars'=>$_POST['marsSismiq2DPV_ph'],
      'trimestre1'=>$trimestre1Sismiq2DPV_ph,'avr'=>$_POST['avrSismiq2DPV_ph'],'mai'=>$_POST['maiSismiq2DPV_ph'],
      'juin'=>$_POST['juinSismiq2DPV_ph'],'trimestre2'=>$trimestre2Sismiq2DPV_ph,'semestre1'=>$semestre1Sismiq2DPV_ph,
      'juill'=>$_POST['juillSismiq2DPV_ph'],'aout'=>$_POST['aoutSismiq2DPV_ph'],'sept'=>$_POST['septSismiq2DPV_ph'],
      'trimestre3'=>$trimestre3Sismiq2DPV_ph,'oct'=>$_POST['octSismiq2DPV_ph'],'nov'=>$_POST['novSismiq2DPV_ph'],
      'dec'=>$_POST['decSismiq2DPV_ph'],'trimestre4'=>$trimestre4Sismiq2DPV_ph,'semestre2'=>$semestre2Sismiq2DPV_ph,
      'GLOBAL'=>$globalSismiq2DPV_ph]
    ],
      '3D'=>[
        'Mequ'=>['janv'=>$_POST['janvSismiq3DMequ_ph'],'fevr'=>$_POST['fevrSismiq3DMequ_ph'],'mars'=>$_POST['marsSismiq3DMequ_ph'],
        'trimestre1'=>$trimestre1Sismiq3DMequ_ph,'avr'=>$_POST['avrSismiq3DMequ_ph'],'mai'=>$_POST['maiSismiq3DMequ_ph'],
        'juin'=>$_POST['juinSismiq3DMequ_ph'],'trimestre2'=>$trimestre2Sismiq3DMequ_ph,'semestre1'=>$semestre1Sismiq3DMequ_ph,
        'juill'=>$_POST['juillSismiq3DMequ_ph'],'aout'=>$_POST['aoutSismiq3DMequ_ph'],'sept'=>$_POST['septSismiq3DMequ_ph'],
        'trimestre3'=>$trimestre3Sismiq3DMequ_ph,'oct'=>$_POST['octSismiq3DMequ_ph'],'nov'=>$_POST['novSismiq3DMequ_ph'],
        'dec'=>$_POST['decSismiq3DMequ_ph'],'trimestre4'=>$trimestre4Sismiq3DMequ_ph,'semestre2'=>$semestre2Sismiq3DMequ_ph,
        'GLOBAL'=>$globalSismiq3DMequ_ph],

        'Km2'=>['janv'=>$_POST['janvSismiq3DKm2_ph'],'fevr'=>$_POST['fevrSismiq3DKm2_ph'],'mars'=>$_POST['marsSismiq3DKm2_ph'],
        'trimestre1'=>$trimestre1Sismiq3DKm2_ph,'avr'=>$_POST['avrSismiq3DKm2_ph'],'mai'=>$_POST['maiSismiq3DKm2_ph'],
        'juin'=>$_POST['juinSismiq3DKm2_ph'],'trimestre2'=>$trimestre2Sismiq3DKm2_ph,'semestre1'=>$semestre1Sismiq3DKm2_ph,
        'juill'=>$_POST['juillSismiq3DKm2_ph'],'aout'=>$_POST['aoutSismiq3DKm2_ph'],'sept'=>$_POST['septSismiq3DKm2_ph'],
        'trimestre3'=>$trimestre3Sismiq3DKm2_ph,'oct'=>$_POST['octSismiq3DKm2_ph'],'nov'=>$_POST['novSismiq3DKm2_ph'],
        'dec'=>$_POST['decSismiq3DKm2_ph'],'trimestre4'=>$trimestre4Sismiq3DKm2_ph,'semestre2'=>$semestre2Sismiq3DKm2_ph,
        'GLOBAL'=>$globalSismiq3DKm2_ph],

        'PV'=>['janv'=>$_POST['janvSismiq3DPV_ph'],'fevr'=>$_POST['fevrSismiq3DPV_ph'],'mars'=>$_POST['marsSismiq3DPV_ph'],
        'trimestre1'=>$trimestre1Sismiq3DPV_ph,'avr'=>$_POST['avrSismiq3DPV_ph'],'mai'=>$_POST['maiSismiq3DPV_ph'],
        'juin'=>$_POST['juinSismiq3DPV_ph'],'trimestre2'=>$trimestre2Sismiq3DPV_ph,'semestre1'=>$semestre1Sismiq3DPV_ph,
        'juill'=>$_POST['juillSismiq3DPV_ph'],'aout'=>$_POST['aoutSismiq3DPV_ph'],'sept'=>$_POST['septSismiq3DPV_ph'],
        'trimestre3'=>$trimestre3Sismiq3DPV_ph,'oct'=>$_POST['octSismiq3DPV_ph'],'nov'=>$_POST['novSismiq3DPV_ph'],
        'dec'=>$_POST['decSismiq3DPV_ph'],'trimestre4'=>$trimestre4Sismiq3DPV_ph,'semestre2'=>$semestre2Sismiq3DPV_ph,
        'GLOBAL'=>$globalSismiq3DPV_ph]
    ]];

    // ForageMapp_ph
    $trimestre1ForageMapp_ph=((float)$_POST['janvForageMapp_ph']+(float)$_POST['fevrForageMapp_ph']+(float)$_POST['marsForageMapp_ph'])/3;
        $trimestre1ForageMapp_ph=number_format($trimestre1ForageMapp_ph,2);
    $trimestre2ForageMapp_ph=((float)$_POST['avrForageMapp_ph']+(float)$_POST['maiForageMapp_ph']+(float)$_POST['juinForageMapp_ph'])/3;
        $trimestre2ForageMapp_ph=number_format($trimestre2ForageMapp_ph,2);
    $semestre1ForageMapp_ph=($trimestre1ForageMapp_ph+$trimestre2ForageMapp_ph)/2;
        $semestre1ForageMapp_ph=number_format($semestre1ForageMapp_ph,2);
    $trimestre3ForageMapp_ph=((float)$_POST['juillForageMapp_ph']+(float)$_POST['aoutForageMapp_ph']+(float)$_POST['septForageMapp_ph'])/3;
        $trimestre3ForageMapp_ph=number_format($trimestre3ForageMapp_ph,2);
    $trimestre4ForageMapp_ph=((float)$_POST['octForageMapp_ph']+(float)$_POST['novForageMapp_ph']+(float)$_POST['decForageMapp_ph'])/3;
        $trimestre4ForageMapp_ph=number_format($trimestre4ForageMapp_ph,2);
    $semestre2ForageMapp_ph=($trimestre3ForageMapp_ph+$trimestre4ForageMapp_ph)/2;
        $semestre2ForageMapp_ph=number_format($semestre2ForageMapp_ph,2);
    $globalForageMapp_ph=($semestre1ForageMapp_ph+$semestre2ForageMapp_ph)/2;
        $globalForageMapp_ph=number_format($globalForageMapp_ph,2);
    // ForageMetres_ph
    $trimestre1ForageMetres_ph=((float)$_POST['janvForageMetres_ph']+(float)$_POST['fevrForageMetres_ph']+(float)$_POST['marsForageMetres_ph'])/3;
        $trimestre1ForageMetres_ph=number_format($trimestre1ForageMetres_ph,2);
    $trimestre2ForageMetres_ph=((float)$_POST['avrForageMetres_ph']+(float)$_POST['maiForageMetres_ph']+(float)$_POST['juinForageMetres_ph'])/3;
        $trimestre2ForageMetres_ph=number_format($trimestre2ForageMetres_ph,2);
    $semestre1ForageMetres_ph=($trimestre1ForageMetres_ph+$trimestre2ForageMetres_ph)/2;
        $semestre1ForageMetres_ph=number_format($semestre1ForageMetres_ph,2);
    $trimestre3ForageMetres_ph=((float)$_POST['juillForageMetres_ph']+(float)$_POST['aoutForageMetres_ph']+(float)$_POST['septForageMetres_ph'])/3;
        $trimestre3ForageMetres_ph=number_format($trimestre3ForageMetres_ph,2);
    $trimestre4ForageMetres_ph=((float)$_POST['octForageMetres_ph']+(float)$_POST['novForageMetres_ph']+(float)$_POST['decForageMetres_ph'])/3;
        $trimestre4ForageMetres_ph=number_format($trimestre4ForageMetres_ph,2);
    $semestre2ForageMetres_ph=($trimestre3ForageMetres_ph+$trimestre4ForageMetres_ph)/2;
        $semestre2ForageMetres_ph=number_format($semestre2ForageMetres_ph,2);
    $globalForageMetres_ph=($semestre1ForageMetres_ph+$semestre2ForageMetres_ph)/2;
        $globalForageMetres_ph=number_format($globalForageMetres_ph,2);
    // ForagePuits_ph
    $trimestre1ForagePuits_ph=((float)$_POST['janvForagePuits_ph']+(float)$_POST['fevrForagePuits_ph']+(float)$_POST['marsForagePuits_ph'])/3;
        $trimestre1ForagePuits_ph=number_format($trimestre1ForagePuits_ph,2);
    $trimestre2ForagePuits_ph=((float)$_POST['avrForagePuits_ph']+(float)$_POST['maiForagePuits_ph']+(float)$_POST['juinForagePuits_ph'])/3;
        $trimestre2ForagePuits_ph=number_format($trimestre2ForagePuits_ph,2);
    $semestre1ForagePuits_ph=($trimestre1ForagePuits_ph+$trimestre2ForagePuits_ph)/2;
        $semestre1ForagePuits_ph=number_format($semestre1ForagePuits_ph,2);
    $trimestre3ForagePuits_ph=((float)$_POST['juillForagePuits_ph']+(float)$_POST['aoutForagePuits_ph']+(float)$_POST['septForagePuits_ph'])/3;
        $trimestre3ForagePuits_ph=number_format($trimestre3ForagePuits_ph,2);
    $trimestre4ForagePuits_ph=((float)$_POST['octForagePuits_ph']+(float)$_POST['novForagePuits_ph']+(float)$_POST['decForagePuits_ph'])/3;
        $trimestre4ForagePuits_ph=number_format($trimestre4ForagePuits_ph,2);
    $semestre2ForagePuits_ph=($trimestre3ForagePuits_ph+$trimestre4ForagePuits_ph)/2;
        $semestre2ForagePuits_ph=number_format($semestre2ForagePuits_ph,2);
    $globalForagePuits_ph=($semestre1ForagePuits_ph+$semestre2ForagePuits_ph)/2;
        $globalForagePuits_ph=number_format($globalForagePuits_ph,2);

    $arrayForge_ph=[
    'Mapp'=>['janv'=>$_POST['janvForageMapp_ph'],'fevr'=>$_POST['fevrForageMapp_ph'],'mars'=>$_POST['marsForageMapp_ph'],
    'trimestre1'=>$trimestre1ForageMapp_ph,'avr'=>$_POST['avrForageMapp_ph'],'mai'=>$_POST['maiForageMapp_ph'],
    'juin'=>$_POST['juinForageMapp_ph'],'trimestre2'=>$trimestre2ForageMapp_ph,'semestre1'=>$semestre1ForageMapp_ph,
    'juill'=>$_POST['juillForageMapp_ph'],'aout'=>$_POST['aoutForageMapp_ph'],'sept'=>$_POST['septForageMapp_ph'],
    'trimestre3'=>$trimestre3ForageMapp_ph,'oct'=>$_POST['octForageMapp_ph'],'nov'=>$_POST['novForageMapp_ph'],
    'dec'=>$_POST['decForageMapp_ph'],'trimestre4'=>$trimestre4ForageMapp_ph,'semestre2'=>$semestre2ForageMapp_ph,
    'GLOBAL'=>$globalForageMapp_ph],

    'Metres'=>['janv'=>$_POST['janvForageMetres_ph'],'fevr'=>$_POST['fevrForageMetres_ph'],'mars'=>$_POST['marsForageMetres_ph'],
    'trimestre1'=>$trimestre1ForageMetres_ph,'avr'=>$_POST['avrForageMetres_ph'],'mai'=>$_POST['maiForageMetres_ph'],
    'juin'=>$_POST['juinForageMetres_ph'],'trimestre2'=>$trimestre2ForageMetres_ph,'semestre1'=>$semestre1ForageMetres_ph,
    'juill'=>$_POST['juillForageMetres_ph'],'aout'=>$_POST['aoutForageMetres_ph'],'sept'=>$_POST['septForageMetres_ph'],
    'trimestre3'=>$trimestre3ForageMetres_ph,'oct'=>$_POST['octForageMetres_ph'],'nov'=>$_POST['novForageMetres_ph'],
    'dec'=>$_POST['decForageMetres_ph'],'trimestre4'=>$trimestre4ForageMetres_ph,'semestre2'=>$semestre2ForageMetres_ph,
    'GLOBAL'=>$globalForageMetres_ph],

    'Puits'=>['janv'=>$_POST['janvForagePuits_ph'],'fevr'=>$_POST['fevrForagePuits_ph'],'mars'=>$_POST['marsForagePuits_ph'],
    'trimestre1'=>$trimestre1ForagePuits_ph,'avr'=>$_POST['avrForagePuits_ph'],'mai'=>$_POST['maiForagePuits_ph'],
    'juin'=>$_POST['juinForagePuits_ph'],'trimestre2'=>$trimestre2ForagePuits_ph,'semestre1'=>$semestre1ForagePuits_ph,
    'juill'=>$_POST['juillForagePuits_ph'],'aout'=>$_POST['aoutForagePuits_ph'],'sept'=>$_POST['septForagePuits_ph'],
    'trimestre3'=>$trimestre3ForagePuits_ph,'oct'=>$_POST['octForagePuits_ph'],'nov'=>$_POST['novForagePuits_ph'],
    'dec'=>$_POST['decForagePuits_ph'],'trimestre4'=>$trimestre4ForagePuits_ph,'semestre2'=>$semestre2ForagePuits_ph,
    'GLOBAL'=>$globalForagePuits_ph]
  ];

  // $arrayFinancier contien le tableau Financier
  $arrayFinancier=['GT'=>$arrayGT_f,'TS'=>$arrayTS_f,'Trait'=>$arrayTrait_f,'Retrait'=>$arrayRetrait_f,'Grav'=>$arrayGrav_f,
    'Aero'=>$arrayAero_f,'Sismiq'=>$arraySismiq_f,'Forage'=>$arrayForage_f];
  // convert it to JSON
  $jsonFinancier=json_encode($arrayFinancier);
  //echo '<br/>FINANCIER<br/><br/>'.$jsonFinancier.'<br/>';
  // $arrayPhysique contien le tableau Physique
  $arrayPhysique=['GT'=>$arrayGT_ph,'TS'=>$arrayTS_ph,'Trait'=>$arrayTrait_ph,'Retrait'=>$arrayRetrait_ph,'Grav'=>$arrayGrav_ph,
    'Aero'=>$arrayAero_ph,'Sismiq'=>$arraySismiq_ph,'Forage'=>$arrayForge_ph];
  // convert it to JSON
  $jsonPhysique=json_encode($arrayPhysique);
  //echo '<br/><br/>PHYSIQUE<br/><br/>'.$jsonPhysique.'<br/>';
  /*if(isset($_POST['idp'])){
    $req=$bdd->prepare('UPDATE projet SET nomp=:nomp,description=:description,financier=:financier,physique=:physique WHERE idp=:idp');
    $req->execute(array('nomp'=>$_POST['NomP'],'description'=>$_POST['DescriptionP'],'financier'=>$jsonFinancier,'physique'=>$jsonPhysique,
      'idp'=>$_POST['idp']))or die(print_r($req->errorInfo()));
  }
  else{
    $req=$bdd->prepare('INSERT INTO projet (financier,physique) VALUES(:financier,:physique)');
    $req->execute(array('financier'=>$jsonFinancier,'physique'=>$jsonPhysique))
    or die(print_r($req->errorInfo()));
  }*/
  $req=$bdd->prepare('UPDATE projet SET financier=:financier,physique=:physique WHERE idp=:idp');
  $req->execute(array('financier'=>$jsonFinancier,'physique'=>$jsonPhysique,
    'idp'=>$_POST['idp']))or die(print_r($req->errorInfo()));
  $req->closeCursor();
?>
<script> location.replace("ListeProjet.php"); </script>
<?php
  }
  else{
    echo '<br/> Informations didn\'t get received correctly in AddProjet.php';
  }
?>
<?php
  echo 'HELLO !'.'<br/>';
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=sonatrach', 'root', '')or die(print_r($bdd->errorInfo()));
  }
  catch (Exception $e){
    die('Erreur : '.$e->getMessage());
  }
  if(// FINANCIER
    isset($_POST['NomP']) && isset($_POST['DescriptionP']) &&
    isset($_POST['janvGT_f']) && isset($_POST['janvTS_f']) && isset($_POST['janvTraitKm_f']) && isset($_POST['janvTraitKm2_f'])&&
  isset($_POST['janvRetraitKm_f'])&& isset($_POST['janvRetraitKm2_f'])&& isset($_POST['janvGrav_f'])&& isset($_POST['janvAero_f'])&&
  isset($_POST['janvSismiq2D_f'])&& isset($_POST['janvSismiq3D_f'])&& isset($_POST['janvForage_f'])&&
  isset($_POST['fevrGT_f']) && isset($_POST['fevrTS_f']) && isset($_POST['fevrTraitKm_f']) && isset($_POST['fevrTraitKm2_f'])&&
  isset($_POST['fevrRetraitKm_f'])&& isset($_POST['fevrRetraitKm2_f'])&& isset($_POST['fevrGrav_f'])&& isset($_POST['fevrAero_f'])&&
  isset($_POST['fevrSismiq2D_f'])&& isset($_POST['fevrSismiq3D_f'])&& isset($_POST['fevrForage_f'])&&
  isset($_POST['marsGT_f']) && isset($_POST['marsTS_f']) && isset($_POST['marsTraitKm_f']) && isset($_POST['marsTraitKm2_f'])&&
  isset($_POST['marsRetraitKm_f'])&& isset($_POST['marsRetraitKm2_f'])&& isset($_POST['marsGrav_f'])&& isset($_POST['marsAero_f'])&&
  isset($_POST['marsSismiq2D_f'])&& isset($_POST['marsSismiq3D_f'])&& isset($_POST['marsForage_f'])&&
  isset($_POST['avrGT_f']) && isset($_POST['avrTS_f']) && isset($_POST['avrTraitKm_f']) && isset($_POST['avrTraitKm2_f'])&&
  isset($_POST['avrRetraitKm_f'])&& isset($_POST['avrRetraitKm2_f'])&& isset($_POST['avrGrav_f'])&& isset($_POST['avrAero_f'])&&
  isset($_POST['avrSismiq2D_f'])&& isset($_POST['avrSismiq3D_f'])&& isset($_POST['avrForage_f'])&&
  isset($_POST['maiGT_f']) && isset($_POST['maiTS_f']) && isset($_POST['maiTraitKm_f']) && isset($_POST['maiTraitKm2_f'])&&
  isset($_POST['maiRetraitKm_f'])&& isset($_POST['maiRetraitKm2_f'])&& isset($_POST['maiGrav_f'])&& isset($_POST['maiAero_f'])&&
  isset($_POST['maiSismiq2D_f'])&& isset($_POST['maiSismiq3D_f'])&& isset($_POST['maiForage_f'])&&
  isset($_POST['juinGT_f']) && isset($_POST['juinTS_f']) && isset($_POST['juinTraitKm_f']) && isset($_POST['juinTraitKm2_f'])&&
  isset($_POST['juinRetraitKm_f'])&& isset($_POST['juinRetraitKm2_f'])&& isset($_POST['juinGrav_f'])&& isset($_POST['juinAero_f'])&&
  isset($_POST['juinSismiq2D_f'])&& isset($_POST['juinSismiq3D_f'])&& isset($_POST['juinForage_f'])&&
  isset($_POST['juillGT_f']) && isset($_POST['juillTS_f']) && isset($_POST['juillTraitKm_f']) && isset($_POST['juillTraitKm2_f'])&&
  isset($_POST['juillRetraitKm_f'])&& isset($_POST['juillRetraitKm2_f'])&& isset($_POST['juillGrav_f'])&& isset($_POST['juillAero_f'])&&
  isset($_POST['juillSismiq2D_f'])&& isset($_POST['juillSismiq3D_f'])&& isset($_POST['juillForage_f'])&&
  isset($_POST['aoutGT_f']) && isset($_POST['aoutTS_f']) && isset($_POST['aoutTraitKm_f']) && isset($_POST['aoutTraitKm2_f'])&&
  isset($_POST['aoutRetraitKm_f'])&& isset($_POST['aoutRetraitKm2_f'])&& isset($_POST['aoutGrav_f'])&& isset($_POST['aoutAero_f'])&&
  isset($_POST['aoutSismiq2D_f'])&& isset($_POST['aoutSismiq3D_f'])&& isset($_POST['aoutForage_f'])&&
  isset($_POST['septGT_f']) && isset($_POST['septTS_f']) && isset($_POST['septTraitKm_f']) && isset($_POST['septTraitKm2_f'])&&
  isset($_POST['septRetraitKm_f'])&& isset($_POST['septRetraitKm2_f'])&& isset($_POST['septGrav_f'])&& isset($_POST['septAero_f'])&&
  isset($_POST['septSismiq2D_f'])&& isset($_POST['septSismiq3D_f'])&& isset($_POST['septForage_f'])&&
  isset($_POST['octGT_f']) && isset($_POST['octTS_f']) && isset($_POST['octTraitKm_f']) && isset($_POST['octTraitKm2_f'])&&
  isset($_POST['octRetraitKm_f'])&& isset($_POST['octRetraitKm2_f'])&& isset($_POST['octGrav_f'])&& isset($_POST['octAero_f'])&&
  isset($_POST['octSismiq2D_f'])&& isset($_POST['octSismiq3D_f'])&& isset($_POST['octForage_f'])&&
  isset($_POST['novGT_f']) && isset($_POST['novTS_f']) && isset($_POST['novTraitKm_f']) && isset($_POST['novTraitKm2_f'])&&
  isset($_POST['novRetraitKm_f'])&& isset($_POST['novRetraitKm2_f'])&& isset($_POST['novGrav_f'])&& isset($_POST['novAero_f'])&&
  isset($_POST['novSismiq2D_f'])&& isset($_POST['novSismiq3D_f'])&& isset($_POST['novForage_f'])&&
  isset($_POST['decGT_f']) && isset($_POST['decTS_f']) && isset($_POST['decTraitKm_f']) && isset($_POST['decTraitKm2_f'])&&
  isset($_POST['decRetraitKm_f'])&& isset($_POST['decRetraitKm2_f'])&& isset($_POST['decGrav_f'])&& isset($_POST['decAero_f'])&&
  isset($_POST['decSismiq2D_f'])&& isset($_POST['decSismiq3D_f'])&& isset($_POST['decForage_f'])
  && // PHYSIQUE
  isset($_POST['janvGT_ph']) && isset($_POST['janvTS_ph']) && isset($_POST['janvTraitKm_ph']) && isset($_POST['janvTraitKm2_ph'])&&
  isset($_POST['janvRetraitKm_ph'])&& isset($_POST['janvRetraitKm2_ph'])&& isset($_POST['janvGrav_ph'])&& isset($_POST['janvAero_ph'])&&
  isset($_POST['janvSismiq2DMequ_ph'])&& isset($_POST['janvSismiq2DKm_ph'])&& isset($_POST['janvSismiq2DPV_ph']) &&
  isset($_POST['janvSismiq3DMequ_ph'])&&isset($_POST['janvSismiq3DKm2_ph']) && isset($_POST['janvSismiq3DPV_ph'])&&
  isset($_POST['janvForageMapp_ph']) && isset($_POST['janvForageMetres_ph']) && isset($_POST['janvForagePuits_ph']) &&
  isset($_POST['fevrGT_ph']) && isset($_POST['fevrTS_ph']) && isset($_POST['fevrTraitKm_ph']) && isset($_POST['fevrTraitKm2_ph'])&&
  isset($_POST['fevrRetraitKm_ph'])&& isset($_POST['fevrRetraitKm2_ph'])&& isset($_POST['fevrGrav_ph'])&& isset($_POST['fevrAero_ph'])&&
  isset($_POST['fevrSismiq2DMequ_ph'])&& isset($_POST['fevrSismiq2DKm_ph'])&& isset($_POST['fevrSismiq2DPV_ph']) &&
  isset($_POST['fevrSismiq3DMequ_ph'])&&isset($_POST['fevrSismiq3DKm2_ph']) && isset($_POST['fevrSismiq3DPV_ph'])&&
  isset($_POST['fevrForageMapp_ph']) && isset($_POST['fevrForageMetres_ph']) && isset($_POST['fevrForagePuits_ph']) &&
  isset($_POST['marsGT_ph']) && isset($_POST['marsTS_ph']) && isset($_POST['marsTraitKm_ph']) && isset($_POST['marsTraitKm2_ph'])&&
  isset($_POST['marsRetraitKm_ph'])&& isset($_POST['marsRetraitKm2_ph'])&& isset($_POST['marsGrav_ph'])&& isset($_POST['marsAero_ph'])&&
  isset($_POST['marsSismiq2DMequ_ph'])&& isset($_POST['marsSismiq2DKm_ph'])&& isset($_POST['marsSismiq2DPV_ph']) &&
  isset($_POST['marsSismiq3DMequ_ph'])&&isset($_POST['marsSismiq3DKm2_ph']) && isset($_POST['marsSismiq3DPV_ph'])&&
  isset($_POST['marsForageMapp_ph']) && isset($_POST['marsForageMetres_ph']) && isset($_POST['marsForagePuits_ph']) &&
  isset($_POST['avrGT_ph']) && isset($_POST['avrTS_ph']) && isset($_POST['avrTraitKm_ph']) && isset($_POST['avrTraitKm2_ph'])&&
  isset($_POST['avrRetraitKm_ph'])&& isset($_POST['avrRetraitKm2_ph'])&& isset($_POST['avrGrav_ph'])&& isset($_POST['avrAero_ph'])&&
  isset($_POST['avrSismiq2DMequ_ph'])&& isset($_POST['avrSismiq2DKm_ph'])&& isset($_POST['avrSismiq2DPV_ph']) &&
  isset($_POST['avrSismiq3DMequ_ph'])&&isset($_POST['avrSismiq3DKm2_ph']) && isset($_POST['avrSismiq3DPV_ph'])&&
  isset($_POST['avrForageMapp_ph']) && isset($_POST['avrForageMetres_ph']) && isset($_POST['avrForagePuits_ph']) &&
  isset($_POST['maiGT_ph']) && isset($_POST['maiTS_ph']) && isset($_POST['maiTraitKm_ph']) && isset($_POST['maiTraitKm2_ph'])&&
  isset($_POST['maiRetraitKm_ph'])&& isset($_POST['maiRetraitKm2_ph'])&& isset($_POST['maiGrav_ph'])&& isset($_POST['maiAero_ph'])&&
  isset($_POST['maiSismiq2DMequ_ph'])&& isset($_POST['maiSismiq2DKm_ph'])&& isset($_POST['maiSismiq2DPV_ph']) &&
  isset($_POST['maiSismiq3DMequ_ph'])&&isset($_POST['maiSismiq3DKm2_ph']) && isset($_POST['maiSismiq3DPV_ph'])&&
  isset($_POST['maiForageMapp_ph']) && isset($_POST['maiForageMetres_ph']) && isset($_POST['maiForagePuits_ph']) &&
  isset($_POST['juinGT_ph']) && isset($_POST['juinTS_ph']) && isset($_POST['juinTraitKm_ph']) && isset($_POST['juinTraitKm2_ph'])&&
  isset($_POST['juinRetraitKm_ph'])&& isset($_POST['juinRetraitKm2_ph'])&& isset($_POST['juinGrav_ph'])&& isset($_POST['juinAero_ph'])&&
  isset($_POST['juinSismiq2DMequ_ph'])&& isset($_POST['juinSismiq2DKm_ph'])&& isset($_POST['juinSismiq2DPV_ph']) &&
  isset($_POST['juinSismiq3DMequ_ph'])&&isset($_POST['juinSismiq3DKm2_ph']) && isset($_POST['juinSismiq3DPV_ph'])&&
  isset($_POST['juinForageMapp_ph']) && isset($_POST['juinForageMetres_ph']) && isset($_POST['juinForagePuits_ph']) &&
  isset($_POST['juillGT_ph']) && isset($_POST['juillTS_ph']) && isset($_POST['juillTraitKm_ph']) && isset($_POST['juillTraitKm2_ph'])&&
  isset($_POST['juillRetraitKm_ph'])&& isset($_POST['juillRetraitKm2_ph'])&& isset($_POST['juillGrav_ph'])&& isset($_POST['juillAero_ph'])&&
  isset($_POST['juillSismiq2DMequ_ph'])&& isset($_POST['juillSismiq2DKm_ph'])&& isset($_POST['juillSismiq2DPV_ph']) &&
  isset($_POST['juillSismiq3DMequ_ph'])&&isset($_POST['juillSismiq3DKm2_ph']) && isset($_POST['juillSismiq3DPV_ph'])&&
  isset($_POST['juillForageMapp_ph']) && isset($_POST['juillForageMetres_ph']) && isset($_POST['juillForagePuits_ph']) &&
  isset($_POST['aoutGT_ph']) && isset($_POST['aoutTS_ph']) && isset($_POST['aoutTraitKm_ph']) && isset($_POST['aoutTraitKm2_ph'])&&
  isset($_POST['aoutRetraitKm_ph'])&& isset($_POST['aoutRetraitKm2_ph'])&& isset($_POST['aoutGrav_ph'])&& isset($_POST['aoutAero_ph'])&&
  isset($_POST['aoutSismiq2DMequ_ph'])&& isset($_POST['aoutSismiq2DKm_ph'])&& isset($_POST['aoutSismiq2DPV_ph']) &&
  isset($_POST['aoutSismiq3DMequ_ph'])&&isset($_POST['aoutSismiq3DKm2_ph']) && isset($_POST['aoutSismiq3DPV_ph'])&&
  isset($_POST['aoutForageMapp_ph']) && isset($_POST['aoutForageMetres_ph']) && isset($_POST['aoutForagePuits_ph']) &&
  isset($_POST['septGT_ph']) && isset($_POST['septTS_ph']) && isset($_POST['septTraitKm_ph']) && isset($_POST['septTraitKm2_ph'])&&
  isset($_POST['septRetraitKm_ph'])&& isset($_POST['septRetraitKm2_ph'])&& isset($_POST['septGrav_ph'])&& isset($_POST['septAero_ph'])&&
  isset($_POST['septSismiq2DMequ_ph'])&& isset($_POST['septSismiq2DKm_ph'])&& isset($_POST['septSismiq2DPV_ph']) &&
  isset($_POST['septSismiq3DMequ_ph'])&&isset($_POST['septSismiq3DKm2_ph']) && isset($_POST['septSismiq3DPV_ph'])&&
  isset($_POST['septForageMapp_ph']) && isset($_POST['septForageMetres_ph']) && isset($_POST['septForagePuits_ph']) &&
  isset($_POST['octGT_ph']) && isset($_POST['octTS_ph']) && isset($_POST['octTraitKm_ph']) && isset($_POST['octTraitKm2_ph'])&&
  isset($_POST['octRetraitKm_ph'])&& isset($_POST['octRetraitKm2_ph'])&& isset($_POST['octGrav_ph'])&& isset($_POST['octAero_ph'])&&
  isset($_POST['octSismiq2DMequ_ph'])&& isset($_POST['octSismiq2DKm_ph'])&& isset($_POST['octSismiq2DPV_ph']) &&
  isset($_POST['octSismiq3DMequ_ph'])&&isset($_POST['octSismiq3DKm2_ph']) && isset($_POST['octSismiq3DPV_ph'])&&
  isset($_POST['octForageMapp_ph']) && isset($_POST['octForageMetres_ph']) && isset($_POST['octForagePuits_ph']) &&
  isset($_POST['novGT_ph']) && isset($_POST['novTS_ph']) && isset($_POST['novTraitKm_ph']) && isset($_POST['novTraitKm2_ph'])&&
  isset($_POST['novRetraitKm_ph'])&& isset($_POST['novRetraitKm2_ph'])&& isset($_POST['novGrav_ph'])&& isset($_POST['novAero_ph'])&&
  isset($_POST['novSismiq2DMequ_ph'])&& isset($_POST['novSismiq2DKm_ph'])&& isset($_POST['novSismiq2DPV_ph']) &&
  isset($_POST['novSismiq3DMequ_ph'])&&isset($_POST['novSismiq3DKm2_ph']) && isset($_POST['novSismiq3DPV_ph'])&&
  isset($_POST['novForageMapp_ph']) && isset($_POST['novForageMetres_ph']) && isset($_POST['novForagePuits_ph']) &&
  isset($_POST['decGT_ph']) && isset($_POST['decTS_ph']) && isset($_POST['decTraitKm_ph']) && isset($_POST['decTraitKm2_ph'])&&
  isset($_POST['decRetraitKm_ph'])&& isset($_POST['decRetraitKm2_ph'])&& isset($_POST['decGrav_ph'])&& isset($_POST['decAero_ph'])&&
  isset($_POST['decSismiq2DMequ_ph'])&& isset($_POST['decSismiq2DKm_ph'])&& isset($_POST['decSismiq2DPV_ph']) &&
  isset($_POST['decSismiq3DMequ_ph'])&&isset($_POST['decSismiq3DKm2_ph']) && isset($_POST['decSismiq3DPV_ph'])&&
  isset($_POST['decForageMapp_ph']) && isset($_POST['decForageMetres_ph']) && isset($_POST['decForagePuits_ph'])
  ){
    // FINANCIER
    // GT_f

    $trimestre1GT_f=((float)$_POST['janvGT_f']+(float)$_POST['fevrGT_f']+(float)$_POST['marsGT_f'])/3;
        $trimestre1GT_f=number_format($trimestre1GT_f,2);
    $trimestre2GT_f=((float)$_POST['avrGT_f']+(float)$_POST['maiGT_f']+(float)$_POST['juinGT_f'])/3;
        $trimestre2GT_f=number_format($trimestre2GT_f,2);
    $semestre1GT_f=($trimestre1GT_f+$trimestre2GT_f)/2;   $semestre1GT_f=number_format($semestre1GT_f,2);
    $trimestre3GT_f=((float)$_POST['juillGT_f']+(float)$_POST['aoutGT_f']+(float)$_POST['septGT_f'])/3;
        $trimestre3GT_f=number_format($trimestre3GT_f,2);
    $trimestre4GT_f=((float)$_POST['octGT_f']+(float)$_POST['novGT_f']+(float)$_POST['decGT_f'])/3;
        $trimestre4GT_f=number_format($trimestre4GT_f,2);
    $semestre2GT_f=($trimestre3GT_f+$trimestre4GT_f)/2;   $semestre2GT_f=number_format($semestre2GT_f,2);
    $globalGT_f=($semestre1GT_f+$semestre2GT_f)/2;    $globalGT_f=number_format($globalGT_f,2);

    $arrayGT_f=['janv'=>$_POST['janvGT_f'],'fevr'=>$_POST['fevrGT_f'],'mars'=>$_POST['marsGT_f'],'trimestre1'=>$trimestre1GT_f,'avr'=>$_POST['avrGT_f'],
      'mai'=>$_POST['maiGT_f'],'juin'=>$_POST['juinGT_f'],'trimestre2'=>$trimestre2GT_f,'semestre1'=>$semestre1GT_f,'juill'=>$_POST['juillGT_f'],
      'aout'=>$_POST['aoutGT_f'],'sept'=>$_POST['septGT_f'],'trimestre3'=>$trimestre3GT_f,'oct'=>$_POST['octGT_f'],'nov'=>$_POST['novGT_f'],
      'dec'=>$_POST['decGT_f'],'trimestre4'=>$trimestre4GT_f,'semestre2'=>$semestre2GT_f,'GLOBAL'=>$globalGT_f];

    // TS_f
    $trimestre1TS_f=((float)$_POST['janvTS_f']+(float)$_POST['fevrTS_f']+(float)$_POST['marsTS_f'])/3;
        $trimestre1TS_f=number_format($trimestre1TS_f,2);
    $trimestre2TS_f=((float)$_POST['avrTS_f']+(float)$_POST['maiTS_f']+(float)$_POST['juinTS_f'])/3;
        $trimestre2TS_f=number_format($trimestre2TS_f,2);
    $semestre1TS_f=($trimestre1TS_f+$trimestre2TS_f)/2;   $semestre1TS_f=number_format($semestre1TS_f,2);
    $trimestre3TS_f=((float)$_POST['juillTS_f']+(float)$_POST['aoutTS_f']+(float)$_POST['septTS_f'])/3;
        $trimestre3TS_f=number_format($trimestre3TS_f,2);
    $trimestre4TS_f=((float)$_POST['octTS_f']+(float)$_POST['novTS_f']+(float)$_POST['decTS_f'])/3;
        $trimestre4TS_f=number_format($trimestre4TS_f,2);
    $semestre2TS_f=($trimestre3TS_f+$trimestre4TS_f)/2;   $semestre2TS_f=number_format($semestre2TS_f,2);
    $globalTS_f=($semestre1TS_f+$semestre2TS_f)/2;    $globalTS_f=number_format($globalTS_f,2);

    $arrayTS_f=['janv'=>$_POST['janvTS_f'],'fevr'=>$_POST['fevrTS_f'],'mars'=>$_POST['marsTS_f'],'trimestre1'=>$trimestre1TS_f,'avr'=>$_POST['avrTS_f'],
      'mai'=>$_POST['maiTS_f'],'juin'=>$_POST['juinTS_f'],'trimestre2'=>$trimestre2TS_f,'semestre1'=>$semestre1TS_f,'juill'=>$_POST['juillTS_f'],
      'aout'=>$_POST['aoutTS_f'],'sept'=>$_POST['septTS_f'],'trimestre3'=>$trimestre3TS_f,'oct'=>$_POST['octTS_f'],'nov'=>$_POST['novTS_f'],
      'dec'=>$_POST['decTS_f'],'trimestre4'=>$trimestre4TS_f,'semestre2'=>$semestre2TS_f,'GLOBAL'=>$globalTS_f];

    // TraitKm_f
    $trimestre1TraitKm_f=((float)$_POST['janvTraitKm_f']+(float)$_POST['fevrTraitKm_f']+(float)$_POST['marsTraitKm_f'])/3;
        $trimestre1TraitKm_f=number_format($trimestre1TraitKm_f,2);
    $trimestre2TraitKm_f=((float)$_POST['avrTraitKm_f']+(float)$_POST['maiTraitKm_f']+(float)$_POST['juinTraitKm_f'])/3;
        $trimestre2TraitKm_f=number_format($trimestre2TraitKm_f,2);
    $semestre1TraitKm_f=($trimestre1TraitKm_f+$trimestre2TraitKm_f)/2;   $semestre1TraitKm_f=number_format($semestre1TraitKm_f,2);
    $trimestre3TraitKm_f=((float)$_POST['juillTraitKm_f']+(float)$_POST['aoutTraitKm_f']+(float)$_POST['septTraitKm_f'])/3;
        $trimestre3TraitKm_f=number_format($trimestre3TraitKm_f,2);
    $trimestre4TraitKm_f=((float)$_POST['octTraitKm_f']+(float)$_POST['novTraitKm_f']+(float)$_POST['decTraitKm_f'])/3;
        $trimestre4TraitKm_f=number_format($trimestre4TraitKm_f,2);
    $semestre2TraitKm_f=($trimestre3TraitKm_f+$trimestre4TraitKm_f)/2;   $semestre2TraitKm_f=number_format($semestre2TraitKm_f,2);
    $globalTraitKm_f=($semestre1TraitKm_f+$semestre2TraitKm_f)/2;    $globalTraitKm_f=number_format($globalTraitKm_f,2);
    // TraitKm2_f
    $trimestre1TraitKm2_f=((float)$_POST['janvTraitKm2_f']+(float)$_POST['fevrTraitKm2_f']+(float)$_POST['marsTraitKm2_f'])/3;
        $trimestre1TraitKm2_f=number_format($trimestre1TraitKm2_f,2);
    $trimestre2TraitKm2_f=((float)$_POST['avrTraitKm2_f']+(float)$_POST['maiTraitKm2_f']+(float)$_POST['juinTraitKm2_f'])/3;
        $trimestre2TraitKm2_f=number_format($trimestre2TraitKm2_f,2);
    $semestre1TraitKm2_f=($trimestre1TraitKm2_f+$trimestre2TraitKm2_f)/2;   $semestre1TraitKm2_f=number_format($semestre1TraitKm2_f,2);
    $trimestre3TraitKm2_f=((float)$_POST['juillTraitKm2_f']+(float)$_POST['aoutTraitKm2_f']+(float)$_POST['septTraitKm2_f'])/3;
        $trimestre3TraitKm2_f=number_format($trimestre3TraitKm2_f,2);
    $trimestre4TraitKm2_f=((float)$_POST['octTraitKm2_f']+(float)$_POST['novTraitKm2_f']+(float)$_POST['decTraitKm2_f'])/3;
        $trimestre4TraitKm2_f=number_format($trimestre4TraitKm2_f,2);
    $semestre2TraitKm2_f=($trimestre3TraitKm2_f+$trimestre4TraitKm2_f)/2;   $semestre2TraitKm2_f=number_format($semestre2TraitKm2_f,2);
    $globalTraitKm2_f=($semestre1TraitKm2_f+$semestre2TraitKm2_f)/2;    $globalTraitKm2_f=number_format($globalTraitKm2_f,2);

    $arrayTrait_f=['Km'=>[
      'janv'=>$_POST['janvTraitKm_f'],'fevr'=>$_POST['fevrTraitKm_f'],'mars'=>$_POST['marsTraitKm_f'],'trimestre1'=>$trimestre1TraitKm_f,
      'avr'=>$_POST['avrTraitKm_f'],'mai'=>$_POST['maiTraitKm_f'],'juin'=>$_POST['juinTraitKm_f'],'trimestre2'=>$trimestre2TraitKm_f,
      'semestre1'=>$semestre1TraitKm_f,'juill'=>$_POST['juillTraitKm_f'],'aout'=>$_POST['aoutTraitKm_f'],'sept'=>$_POST['septTraitKm_f'],
      'trimestre3'=>$trimestre3TraitKm_f,'oct'=>$_POST['octTraitKm_f'],'nov'=>$_POST['novTraitKm_f'],'dec'=>$_POST['decTraitKm_f'],
      'trimestre4'=>$trimestre4TraitKm_f,'semestre2'=>$semestre2TraitKm_f,'GLOBAL'=>$globalTraitKm_f
      ],
      'Km2'=>[
        'janv'=>$_POST['janvTraitKm2_f'],'fevr'=>$_POST['fevrTraitKm2_f'],'mars'=>$_POST['marsTraitKm2_f'],'trimestre1'=>$trimestre1TraitKm2_f,
        'avr'=>$_POST['avrTraitKm2_f'],'mai'=>$_POST['maiTraitKm2_f'],'juin'=>$_POST['juinTraitKm2_f'],'trimestre2'=>$trimestre2TraitKm2_f,
        'semestre1'=>$semestre1TraitKm2_f,'juill'=>$_POST['juillTraitKm2_f'],'aout'=>$_POST['aoutTraitKm2_f'],'sept'=>$_POST['septTraitKm2_f'],
        'trimestre3'=>$trimestre3TraitKm2_f,'oct'=>$_POST['octTraitKm2_f'],'nov'=>$_POST['novTraitKm2_f'],'dec'=>$_POST['decTraitKm2_f'],
        'trimestre4'=>$trimestre4TraitKm2_f,'semestre2'=>$semestre2TraitKm2_f,'GLOBAL'=>$globalTraitKm2_f
    ]];

    // RetraitKm_f
    $trimestre1RetraitKm_f=((float)$_POST['janvRetraitKm_f']+(float)$_POST['fevrRetraitKm_f']+(float)$_POST['marsRetraitKm_f'])/3;
        $trimestre1RetraitKm_f=number_format($trimestre1RetraitKm_f,2);
    $trimestre2RetraitKm_f=((float)$_POST['avrRetraitKm_f']+(float)$_POST['maiRetraitKm_f']+(float)$_POST['juinRetraitKm_f'])/3;
        $trimestre2RetraitKm_f=number_format($trimestre2RetraitKm_f,2);
    $semestre1RetraitKm_f=($trimestre1RetraitKm_f+$trimestre2RetraitKm_f)/2;   $semestre1RetraitKm_f=number_format($semestre1RetraitKm_f,2);
    $trimestre3RetraitKm_f=((float)$_POST['juillRetraitKm_f']+(float)$_POST['aoutRetraitKm_f']+(float)$_POST['septRetraitKm_f'])/3;
        $trimestre3RetraitKm_f=number_format($trimestre3RetraitKm_f,2);
    $trimestre4RetraitKm_f=((float)$_POST['octRetraitKm_f']+(float)$_POST['novRetraitKm_f']+(float)$_POST['decRetraitKm_f'])/3;
        $trimestre4RetraitKm_f=number_format($trimestre4RetraitKm_f,2);
    $semestre2RetraitKm_f=($trimestre3RetraitKm_f+$trimestre4RetraitKm_f)/2;   $semestre2RetraitKm_f=number_format($semestre2RetraitKm_f,2);
    $globalRetraitKm_f=($semestre1RetraitKm_f+$semestre2RetraitKm_f)/2;    $globalRetraitKm_f=number_format($globalRetraitKm_f,2);
    // RetraitKm2_f
    $trimestre1RetraitKm2_f=((float)$_POST['janvRetraitKm2_f']+(float)$_POST['fevrRetraitKm2_f']+(float)$_POST['marsRetraitKm2_f'])/3;
        $trimestre1RetraitKm2_f=number_format($trimestre1RetraitKm2_f,2);
    $trimestre2RetraitKm2_f=((float)$_POST['avrRetraitKm2_f']+(float)$_POST['maiRetraitKm2_f']+(float)$_POST['juinRetraitKm2_f'])/3;
        $trimestre2RetraitKm2_f=number_format($trimestre2RetraitKm2_f,2);
    $semestre1RetraitKm2_f=($trimestre1RetraitKm2_f+$trimestre2RetraitKm2_f)/2;   $semestre1RetraitKm2_f=number_format($semestre1RetraitKm2_f,2);
    $trimestre3RetraitKm2_f=((float)$_POST['juillRetraitKm2_f']+(float)$_POST['aoutRetraitKm2_f']+(float)$_POST['septRetraitKm2_f'])/3;
        $trimestre3RetraitKm2_f=number_format($trimestre3RetraitKm2_f,2);
    $trimestre4RetraitKm2_f=((float)$_POST['octRetraitKm2_f']+(float)$_POST['novRetraitKm2_f']+(float)$_POST['decRetraitKm2_f'])/3;
        $trimestre4RetraitKm2_f=number_format($trimestre4RetraitKm2_f,2);
    $semestre2RetraitKm2_f=($trimestre3RetraitKm2_f+$trimestre4RetraitKm2_f)/2;   $semestre2RetraitKm2_f=number_format($semestre2RetraitKm2_f,2);
    $globalRetraitKm2_f=($semestre1RetraitKm2_f+$semestre2RetraitKm2_f)/2;    $globalRetraitKm2_f=number_format($globalRetraitKm2_f,2);

    $arrayRetrait_f=['Km'=>[
      'janv'=>$_POST['janvRetraitKm_f'],'fevr'=>$_POST['fevrRetraitKm_f'],'mars'=>$_POST['marsRetraitKm_f'],'trimestre1'=>$trimestre1RetraitKm_f,
      'avr'=>$_POST['avrRetraitKm_f'],'mai'=>$_POST['maiRetraitKm_f'],'juin'=>$_POST['juinRetraitKm_f'],'trimestre2'=>$trimestre2RetraitKm_f,
      'semestre1'=>$semestre1RetraitKm_f,'juill'=>$_POST['juillRetraitKm_f'],'aout'=>$_POST['aoutRetraitKm_f'],'sept'=>$_POST['septRetraitKm_f'],
      'trimestre3'=>$trimestre3RetraitKm_f,'oct'=>$_POST['octRetraitKm_f'],'nov'=>$_POST['novRetraitKm_f'],'dec'=>$_POST['decRetraitKm_f'],
      'trimestre4'=>$trimestre4RetraitKm_f,'semestre2'=>$semestre2RetraitKm_f,'GLOBAL'=>$globalRetraitKm_f
      ],
      'Km2'=>[
        'janv'=>$_POST['janvRetraitKm2_f'],'fevr'=>$_POST['fevrRetraitKm2_f'],'mars'=>$_POST['marsRetraitKm2_f'],'trimestre1'=>$trimestre1RetraitKm2_f,
        'avr'=>$_POST['avrRetraitKm2_f'],'mai'=>$_POST['maiRetraitKm2_f'],'juin'=>$_POST['juinRetraitKm2_f'],'trimestre2'=>$trimestre2RetraitKm2_f,
        'semestre1'=>$semestre1RetraitKm2_f,'juill'=>$_POST['juillRetraitKm2_f'],'aout'=>$_POST['aoutRetraitKm2_f'],'sept'=>$_POST['septRetraitKm2_f'],
        'trimestre3'=>$trimestre3RetraitKm2_f,'oct'=>$_POST['octRetraitKm2_f'],'nov'=>$_POST['novRetraitKm2_f'],'dec'=>$_POST['decRetraitKm2_f'],
        'trimestre4'=>$trimestre4RetraitKm2_f,'semestre2'=>$semestre2RetraitKm2_f,'GLOBAL'=>$globalRetraitKm2_f
    ]];

    // Grav_f
    $trimestre1Grav_f=((float)$_POST['janvGrav_f']+(float)$_POST['fevrGrav_f']+(float)$_POST['marsGrav_f'])/3;
        $trimestre1Grav_f=number_format($trimestre1Grav_f,2);
    $trimestre2Grav_f=((float)$_POST['avrGrav_f']+(float)$_POST['maiGrav_f']+(float)$_POST['juinGrav_f'])/3;
        $trimestre2Grav_f=number_format($trimestre2Grav_f,2);
    $semestre1Grav_f=($trimestre1Grav_f+$trimestre2Grav_f)/2;   $semestre1Grav_f=number_format($semestre1Grav_f,2);
    $trimestre3Grav_f=((float)$_POST['juillGrav_f']+(float)$_POST['aoutGrav_f']+(float)$_POST['septGrav_f'])/3;
        $trimestre3Grav_f=number_format($trimestre3Grav_f,2);
    $trimestre4Grav_f=((float)$_POST['octGrav_f']+(float)$_POST['novGrav_f']+(float)$_POST['decGrav_f'])/3;
        $trimestre4Grav_f=number_format($trimestre4Grav_f,2);
    $semestre2Grav_f=($trimestre3Grav_f+$trimestre4Grav_f)/2;   $semestre2Grav_f=number_format($semestre2Grav_f,2);
    $globalGrav_f=($semestre1Grav_f+$semestre2Grav_f)/2;    $globalGrav_f=number_format($globalGrav_f,2);

    $arrayGrav_f=['janv'=>$_POST['janvGrav_f'],'fevr'=>$_POST['fevrGrav_f'],'mars'=>$_POST['marsGrav_f'],'trimestre1'=>$trimestre1Grav_f,
      'avr'=>$_POST['avrGrav_f'],'mai'=>$_POST['maiGrav_f'],'juin'=>$_POST['juinGrav_f'],'trimestre2'=>$trimestre2Grav_f,'semestre1'=>$semestre1Grav_f,
      'juill'=>$_POST['juillGrav_f'],'aout'=>$_POST['aoutGrav_f'],'sept'=>$_POST['septGrav_f'],'trimestre3'=>$trimestre3Grav_f,
      'oct'=>$_POST['octGrav_f'],'nov'=>$_POST['novGrav_f'],'dec'=>$_POST['decGrav_f'],'trimestre4'=>$trimestre4Grav_f,'semestre2'=>$semestre2Grav_f,
      'GLOBAL'=>$globalGrav_f];

    // Aero_f
    $trimestre1Aero_f=((float)$_POST['janvAero_f']+(float)$_POST['fevrAero_f']+(float)$_POST['marsAero_f'])/3;
        $trimestre1Aero_f=number_format($trimestre1Aero_f,2);
    $trimestre2Aero_f=((float)$_POST['avrAero_f']+(float)$_POST['maiAero_f']+(float)$_POST['juinAero_f'])/3;
        $trimestre2Aero_f=number_format($trimestre2Aero_f,2);
    $semestre1Aero_f=($trimestre1Aero_f+$trimestre2Aero_f)/2;   $semestre1Aero_f=number_format($semestre1Aero_f,2);
    $trimestre3Aero_f=((float)$_POST['juillAero_f']+(float)$_POST['aoutAero_f']+(float)$_POST['septAero_f'])/3;
        $trimestre3Aero_f=number_format($trimestre3Aero_f,2);
    $trimestre4Aero_f=((float)$_POST['octAero_f']+(float)$_POST['novAero_f']+(float)$_POST['decAero_f'])/3;
        $trimestre4Aero_f=number_format($trimestre4Aero_f,2);
    $semestre2Aero_f=($trimestre3Aero_f+$trimestre4Aero_f)/2;   $semestre2Aero_f=number_format($semestre2Aero_f,2);
    $globalAero_f=($semestre1Aero_f+$semestre2Aero_f)/2;    $globalAero_f=number_format($globalAero_f,2);

    $arrayAero_f=['janv'=>$_POST['janvAero_f'],'fevr'=>$_POST['fevrAero_f'],'mars'=>$_POST['marsAero_f'],'trimestre1'=>$trimestre1Aero_f,
      'avr'=>$_POST['avrAero_f'],'mai'=>$_POST['maiAero_f'],'juin'=>$_POST['juinAero_f'],'trimestre2'=>$trimestre2Aero_f,'semestre1'=>$semestre1Aero_f,
      'juill'=>$_POST['juillAero_f'],'aout'=>$_POST['aoutAero_f'],'sept'=>$_POST['septAero_f'],'trimestre3'=>$trimestre3Aero_f,
      'oct'=>$_POST['octAero_f'],'nov'=>$_POST['novAero_f'],'dec'=>$_POST['decAero_f'],'trimestre4'=>$trimestre4Aero_f,'semestre2'=>$semestre2Aero_f,
      'GLOBAL'=>$globalAero_f];

    // Sismiq2D_f
    $trimestre1Sismiq2D_f=((float)$_POST['janvSismiq2D_f']+(float)$_POST['fevrSismiq2D_f']+(float)$_POST['marsSismiq2D_f'])/3;
        $trimestre1Sismiq2D_f=number_format($trimestre1Sismiq2D_f,2);
    $trimestre2Sismiq2D_f=((float)$_POST['avrSismiq2D_f']+(float)$_POST['maiSismiq2D_f']+(float)$_POST['juinSismiq2D_f'])/3;
        $trimestre2Sismiq2D_f=number_format($trimestre2Sismiq2D_f,2);
    $semestre1Sismiq2D_f=($trimestre1Sismiq2D_f+$trimestre2Sismiq2D_f)/2;   $semestre1Sismiq2D_f=number_format($semestre1Sismiq2D_f,2);
    $trimestre3Sismiq2D_f=((float)$_POST['juillSismiq2D_f']+(float)$_POST['aoutSismiq2D_f']+(float)$_POST['septSismiq2D_f'])/3;
        $trimestre3Sismiq2D_f=number_format($trimestre3Sismiq2D_f,2);
    $trimestre4Sismiq2D_f=((float)$_POST['octSismiq2D_f']+(float)$_POST['novSismiq2D_f']+(float)$_POST['decSismiq2D_f'])/3;
        $trimestre4Sismiq2D_f=number_format($trimestre4Sismiq2D_f,2);
    $semestre2Sismiq2D_f=($trimestre3Sismiq2D_f+$trimestre4Sismiq2D_f)/2;   $semestre2Sismiq2D_f=number_format($semestre2Sismiq2D_f,2);
    $globalSismiq2D_f=($semestre1Sismiq2D_f+$semestre2Sismiq2D_f)/2;    $globalSismiq2D_f=number_format($globalSismiq2D_f,2);
    // Sismiq3D_f
    $trimestre1Sismiq3D_f=((float)$_POST['janvSismiq3D_f']+(float)$_POST['fevrSismiq3D_f']+(float)$_POST['marsSismiq3D_f'])/3;
        $trimestre1Sismiq3D_f=number_format($trimestre1Sismiq3D_f,2);
    $trimestre2Sismiq3D_f=((float)$_POST['avrSismiq3D_f']+(float)$_POST['maiSismiq3D_f']+(float)$_POST['juinSismiq3D_f'])/3;
        $trimestre2Sismiq3D_f=number_format($trimestre2Sismiq3D_f,2);
    $semestre1Sismiq3D_f=($trimestre1Sismiq3D_f+$trimestre2Sismiq3D_f)/2;   $semestre1Sismiq3D_f=number_format($semestre1Sismiq3D_f,2);
    $trimestre3Sismiq3D_f=((float)$_POST['juillSismiq3D_f']+(float)$_POST['aoutSismiq3D_f']+(float)$_POST['septSismiq3D_f'])/3;
        $trimestre3Sismiq3D_f=number_format($trimestre3Sismiq3D_f,2);
    $trimestre4Sismiq3D_f=((float)$_POST['octSismiq3D_f']+(float)$_POST['novSismiq3D_f']+(float)$_POST['decSismiq3D_f'])/3;
        $trimestre4Sismiq3D_f=number_format($trimestre4Sismiq3D_f,2);
    $semestre2Sismiq3D_f=($trimestre3Sismiq3D_f+$trimestre4Sismiq3D_f)/2;   $semestre2Sismiq3D_f=number_format($semestre2Sismiq3D_f,2);
    $globalSismiq3D_f=($semestre1Sismiq3D_f+$semestre2Sismiq3D_f)/2;    $globalSismiq3D_f=number_format($globalSismiq3D_f,2);

    $arraySismiq_f=['2D'=>[
      'janv'=>$_POST['janvSismiq2D_f'],'fevr'=>$_POST['fevrSismiq2D_f'],'mars'=>$_POST['marsSismiq2D_f'],'trimestre1'=>$trimestre1Sismiq2D_f,
      'avr'=>$_POST['avrSismiq2D_f'],'mai'=>$_POST['maiSismiq2D_f'],'juin'=>$_POST['juinSismiq2D_f'],'trimestre2'=>$trimestre2Sismiq2D_f,
      'semestre1'=>$semestre1Sismiq2D_f,'juill'=>$_POST['juillSismiq2D_f'],'aout'=>$_POST['aoutSismiq2D_f'],'sept'=>$_POST['septSismiq2D_f'],
      'trimestre3'=>$trimestre3Sismiq2D_f,'oct'=>$_POST['octSismiq2D_f'],'nov'=>$_POST['novSismiq2D_f'],'dec'=>$_POST['decSismiq2D_f'],
      'trimestre4'=>$trimestre4Sismiq2D_f,'semestre2'=>$semestre2Sismiq2D_f,'GLOBAL'=>$globalSismiq2D_f
      ],
      '3D'=>[
        'janv'=>$_POST['janvSismiq3D_f'],'fevr'=>$_POST['fevrSismiq3D_f'],'mars'=>$_POST['marsSismiq3D_f'],'trimestre1'=>$trimestre1Sismiq3D_f,
        'avr'=>$_POST['avrSismiq3D_f'],'mai'=>$_POST['maiSismiq3D_f'],'juin'=>$_POST['juinSismiq3D_f'],'trimestre2'=>$trimestre2Sismiq3D_f,
        'semestre1'=>$semestre1Sismiq3D_f,'juill'=>$_POST['juillSismiq3D_f'],'aout'=>$_POST['aoutSismiq3D_f'],'sept'=>$_POST['septSismiq3D_f'],
        'trimestre3'=>$trimestre3Sismiq3D_f,'oct'=>$_POST['octSismiq3D_f'],'nov'=>$_POST['novSismiq3D_f'],'dec'=>$_POST['decSismiq3D_f'],
        'trimestre4'=>$trimestre4Sismiq3D_f,'semestre2'=>$semestre2Sismiq3D_f,'GLOBAL'=>$globalSismiq3D_f
    ]];

    // Forage_f
    $trimestre1Forage_f=((float)$_POST['janvForage_f']+(float)$_POST['fevrForage_f']+(float)$_POST['marsForage_f'])/3;
        $trimestre1Forage_f=number_format($trimestre1Forage_f,2);
    $trimestre2Forage_f=((float)$_POST['avrForage_f']+(float)$_POST['maiForage_f']+(float)$_POST['juinForage_f'])/3;
        $trimestre2Forage_f=number_format($trimestre2Forage_f,2);
    $semestre1Forage_f=($trimestre1Forage_f+$trimestre2Forage_f)/2;   $semestre1Forage_f=number_format($semestre1Forage_f,2);
    $trimestre3Forage_f=((float)$_POST['juillForage_f']+(float)$_POST['aoutForage_f']+(float)$_POST['septForage_f'])/3;
        $trimestre3Forage_f=number_format($trimestre3Forage_f,2);
    $trimestre4Forage_f=((float)$_POST['octForage_f']+(float)$_POST['novForage_f']+(float)$_POST['decForage_f'])/3;
        $trimestre4Forage_f=number_format($trimestre4Forage_f,2);
    $semestre2Forage_f=($trimestre3Forage_f+$trimestre4Forage_f)/2;   $semestre2Forage_f=number_format($semestre2Forage_f,2);
    $globalForage_f=($semestre1Forage_f+$semestre2Forage_f)/2;    $globalForage_f=number_format($globalForage_f,2);

    $arrayForage_f=['janv'=>$_POST['janvForage_f'],'fevr'=>$_POST['fevrForage_f'],'mars'=>$_POST['marsForage_f'],'trimestre1'=>$trimestre1Forage_f,
      'avr'=>$_POST['avrForage_f'],'mai'=>$_POST['maiForage_f'],'juin'=>$_POST['juinForage_f'],'trimestre2'=>$trimestre2Forage_f,
      'semestre1'=>$semestre1Forage_f,'juill'=>$_POST['juillForage_f'],'aout'=>$_POST['aoutForage_f'],'sept'=>$_POST['septForage_f'],
      'trimestre3'=>$trimestre3Forage_f,'oct'=>$_POST['octForage_f'],'nov'=>$_POST['novForage_f'],'dec'=>$_POST['decForage_f'],
      'trimestre4'=>$trimestre4Forage_f,'semestre2'=>$semestre2Forage_f,'GLOBAL'=>$globalForage_f];

    // PHYSIQUE
    // GT_ph
    $trimestre1GT_ph=((float)$_POST['janvGT_ph']+(float)$_POST['fevrGT_ph']+(float)$_POST['marsGT_ph'])/3;
        $trimestre1GT_ph=number_format($trimestre1GT_ph,2);
    $trimestre2GT_ph=((float)$_POST['avrGT_ph']+(float)$_POST['maiGT_ph']+(float)$_POST['juinGT_ph'])/3;
        $trimestre2GT_ph=number_format($trimestre2GT_ph,2);
    $semestre1GT_ph=($trimestre1GT_ph+$trimestre2GT_ph)/2;   $semestre1GT_ph=number_format($semestre1GT_ph,2);
    $trimestre3GT_ph=((float)$_POST['juillGT_ph']+(float)$_POST['aoutGT_ph']+(float)$_POST['septGT_ph'])/3;
        $trimestre3GT_ph=number_format($trimestre3GT_ph,2);
    $trimestre4GT_ph=((float)$_POST['octGT_ph']+(float)$_POST['novGT_ph']+(float)$_POST['decGT_ph'])/3;
        $trimestre4GT_ph=number_format($trimestre4GT_ph,2);
    $semestre2GT_ph=($trimestre3GT_ph+$trimestre4GT_ph)/2;   $semestre2GT_ph=number_format($semestre2GT_ph,2);
    $globalGT_ph=($semestre1GT_ph+$semestre2GT_ph)/2;    $globalGT_ph=number_format($globalGT_ph,2);

    $arrayGT_ph=['janv'=>$_POST['janvGT_ph'],'fevr'=>$_POST['fevrGT_ph'],'mars'=>$_POST['marsGT_ph'],'trimestre1'=>$trimestre1GT_ph,
      'avr'=>$_POST['avrGT_ph'],'mai'=>$_POST['maiGT_ph'],'juin'=>$_POST['juinGT_ph'],'trimestre2'=>$trimestre2GT_ph,'semestre1'=>$semestre1GT_ph,
      'juill'=>$_POST['juillGT_ph'],'aout'=>$_POST['aoutGT_ph'],'sept'=>$_POST['septGT_ph'],'trimestre3'=>$trimestre3GT_ph,
      'oct'=>$_POST['octGT_ph'],'nov'=>$_POST['novGT_ph'],'dec'=>$_POST['decGT_ph'],'trimestre4'=>$trimestre4GT_ph,'semestre2'=>$semestre2GT_ph,
      'GLOBAL'=>$globalGT_ph];

    // TS_ph
    $trimestre1TS_ph=((float)$_POST['janvTS_ph']+(float)$_POST['fevrTS_ph']+(float)$_POST['marsTS_ph'])/3;
        $trimestre1TS_ph=number_format($trimestre1TS_ph,2);
    $trimestre2TS_ph=((float)$_POST['avrTS_ph']+(float)$_POST['maiTS_ph']+(float)$_POST['juinTS_ph'])/3;
        $trimestre2TS_ph=number_format($trimestre2TS_ph,2);
    $semestre1TS_ph=($trimestre1TS_ph+$trimestre2TS_ph)/2;   $semestre1TS_ph=number_format($semestre1TS_ph,2);
    $trimestre3TS_ph=((float)$_POST['juillTS_ph']+(float)$_POST['aoutTS_ph']+(float)$_POST['septTS_ph'])/3;
        $trimestre3TS_ph=number_format($trimestre3TS_ph,2);
    $trimestre4TS_ph=((float)$_POST['octTS_ph']+(float)$_POST['novTS_ph']+(float)$_POST['decTS_ph'])/3;
        $trimestre4TS_ph=number_format($trimestre4TS_ph,2);
    $semestre2TS_ph=($trimestre3TS_ph+$trimestre4TS_ph)/2;   $semestre2TS_ph=number_format($semestre2TS_ph,2);
    $globalTS_ph=($semestre1TS_ph+$semestre2TS_ph)/2;    $globalTS_ph=number_format($globalTS_ph,2);

    $arrayTS_ph=['janv'=>$_POST['janvTS_ph'],'fevr'=>$_POST['fevrTS_ph'],'mars'=>$_POST['marsTS_ph'],'trimestre1'=>$trimestre1TS_ph,
      'avr'=>$_POST['avrTS_ph'],'mai'=>$_POST['maiTS_ph'],'juin'=>$_POST['juinTS_ph'],'trimestre2'=>$trimestre2TS_ph,'semestre1'=>$semestre1TS_ph,
      'juill'=>$_POST['juillTS_ph'],'aout'=>$_POST['aoutTS_ph'],'sept'=>$_POST['septTS_ph'],'trimestre3'=>$trimestre3TS_ph,
      'oct'=>$_POST['octTS_ph'],'nov'=>$_POST['novTS_ph'],'dec'=>$_POST['decTS_ph'],'trimestre4'=>$trimestre4TS_ph,'semestre2'=>$semestre2TS_ph,
      'GLOBAL'=>$globalTS_ph];

    // TraitKm_ph
    $trimestre1TraitKm_ph=((float)$_POST['janvTraitKm_ph']+(float)$_POST['fevrTraitKm_ph']+(float)$_POST['marsTraitKm_ph'])/3;
        $trimestre1TraitKm_ph=number_format($trimestre1TraitKm_ph,2);
    $trimestre2TraitKm_ph=((float)$_POST['avrTraitKm_ph']+(float)$_POST['maiTraitKm_ph']+(float)$_POST['juinTraitKm_ph'])/3;
        $trimestre2TraitKm_ph=number_format($trimestre2TraitKm_ph,2);
    $semestre1TraitKm_ph=($trimestre1TraitKm_ph+$trimestre2TraitKm_ph)/2;   $semestre1TraitKm_ph=number_format($semestre1TraitKm_ph,2);
    $trimestre3TraitKm_ph=((float)$_POST['juillTraitKm_ph']+(float)$_POST['aoutTraitKm_ph']+(float)$_POST['septTraitKm_ph'])/3;
        $trimestre3TraitKm_ph=number_format($trimestre3TraitKm_ph,2);
    $trimestre4TraitKm_ph=((float)$_POST['octTraitKm_ph']+(float)$_POST['novTraitKm_ph']+(float)$_POST['decTraitKm_ph'])/3;
        $trimestre4TraitKm_ph=number_format($trimestre4TraitKm_ph,2);
    $semestre2TraitKm_ph=($trimestre3TraitKm_ph+$trimestre4TraitKm_ph)/2;   $semestre2TraitKm_ph=number_format($semestre2TraitKm_ph,2);
    $globalTraitKm_ph=($semestre1TraitKm_ph+$semestre2TraitKm_ph)/2;    $globalTraitKm_ph=number_format($globalTraitKm_ph,2);
    // TraitKm2_ph
    $trimestre1TraitKm2_ph=((float)$_POST['janvTraitKm2_ph']+(float)$_POST['fevrTraitKm2_ph']+(float)$_POST['marsTraitKm2_ph'])/3;
        $trimestre1TraitKm2_ph=number_format($trimestre1TraitKm2_ph,2);
    $trimestre2TraitKm2_ph=((float)$_POST['avrTraitKm2_ph']+(float)$_POST['maiTraitKm2_ph']+(float)$_POST['juinTraitKm2_ph'])/3;
        $trimestre2TraitKm2_ph=number_format($trimestre2TraitKm2_ph,2);
    $semestre1TraitKm2_ph=($trimestre1TraitKm2_ph+$trimestre2TraitKm2_ph)/2;   $semestre1TraitKm2_ph=number_format($semestre1TraitKm2_ph,2);
    $trimestre3TraitKm2_ph=((float)$_POST['juillTraitKm2_ph']+(float)$_POST['aoutTraitKm2_ph']+(float)$_POST['septTraitKm2_ph'])/3;
        $trimestre3TraitKm2_ph=number_format($trimestre3TraitKm2_ph,2);
    $trimestre4TraitKm2_ph=((float)$_POST['octTraitKm2_ph']+(float)$_POST['novTraitKm2_ph']+(float)$_POST['decTraitKm2_ph'])/3;
        $trimestre4TraitKm2_ph=number_format($trimestre4TraitKm2_ph,2);
    $semestre2TraitKm2_ph=($trimestre3TraitKm2_ph+$trimestre4TraitKm2_ph)/2;   $semestre2TraitKm2_ph=number_format($semestre2TraitKm2_ph,2);
    $globalTraitKm2_ph=($semestre1TraitKm2_ph+$semestre2TraitKm2_ph)/2;    $globalTraitKm2_ph=number_format($globalTraitKm2_ph,2);

    $arrayTrait_ph=['Km'=>[
      'janv'=>$_POST['janvTraitKm_ph'],'fevr'=>$_POST['fevrTraitKm_ph'],'mars'=>$_POST['marsTraitKm_ph'],'trimestre1'=>$trimestre1TraitKm_ph,
      'avr'=>$_POST['avrTraitKm_ph'],'mai'=>$_POST['maiTraitKm_ph'],'juin'=>$_POST['juinTraitKm_ph'],'trimestre2'=>$trimestre2TraitKm_ph,
      'semestre1'=>$semestre1TraitKm_ph,'juill'=>$_POST['juillTraitKm_ph'],'aout'=>$_POST['aoutTraitKm_ph'],'sept'=>$_POST['septTraitKm_ph'],
      'trimestre3'=>$trimestre3TraitKm_ph,'oct'=>$_POST['octTraitKm_ph'],'nov'=>$_POST['novTraitKm_ph'],'dec'=>$_POST['decTraitKm_ph'],
      'trimestre4'=>$trimestre4TraitKm_ph,'semestre2'=>$semestre2TraitKm_ph,'GLOBAL'=>$globalTraitKm_ph
      ],
      'Km2'=>[
        'janv'=>$_POST['janvTraitKm2_ph'],'fevr'=>$_POST['fevrTraitKm2_ph'],'mars'=>$_POST['marsTraitKm2_ph'],'trimestre1'=>$trimestre1TraitKm2_ph,
        'avr'=>$_POST['avrTraitKm2_ph'],'mai'=>$_POST['maiTraitKm2_ph'],'juin'=>$_POST['juinTraitKm2_ph'],'trimestre2'=>$trimestre2TraitKm2_ph,
        'semestre1'=>$semestre1TraitKm2_ph,'juill'=>$_POST['juillTraitKm2_ph'],'aout'=>$_POST['aoutTraitKm2_ph'],'sept'=>$_POST['septTraitKm2_ph'],
        'trimestre3'=>$trimestre3TraitKm2_ph,'oct'=>$_POST['octTraitKm2_ph'],'nov'=>$_POST['novTraitKm2_ph'],'dec'=>$_POST['decTraitKm2_ph'],
        'trimestre4'=>$trimestre4TraitKm2_ph,'semestre2'=>$semestre2TraitKm2_ph,'GLOBAL'=>$globalTraitKm2_ph
    ]];

    // RetraitKm_ph
    $trimestre1RetraitKm_ph=((float)$_POST['janvRetraitKm_ph']+(float)$_POST['fevrRetraitKm_ph']+(float)$_POST['marsRetraitKm_ph'])/3;
        $trimestre1RetraitKm_ph=number_format($trimestre1RetraitKm_ph,2);
    $trimestre2RetraitKm_ph=((float)$_POST['avrRetraitKm_ph']+(float)$_POST['maiRetraitKm_ph']+(float)$_POST['juinRetraitKm_ph'])/3;
        $trimestre2RetraitKm_ph=number_format($trimestre2RetraitKm_ph,2);
    $semestre1RetraitKm_ph=($trimestre1RetraitKm_ph+$trimestre2RetraitKm_ph)/2;   $semestre1RetraitKm_ph=number_format($semestre1RetraitKm_ph,2);
    $trimestre3RetraitKm_ph=((float)$_POST['juillRetraitKm_ph']+(float)$_POST['aoutRetraitKm_ph']+(float)$_POST['septRetraitKm_ph'])/3;
        $trimestre3RetraitKm_ph=number_format($trimestre3RetraitKm_ph,2);
    $trimestre4RetraitKm_ph=((float)$_POST['octRetraitKm_ph']+(float)$_POST['novRetraitKm_ph']+(float)$_POST['decRetraitKm_ph'])/3;
        $trimestre4RetraitKm_ph=number_format($trimestre4RetraitKm_ph,2);
    $semestre2RetraitKm_ph=($trimestre3RetraitKm_ph+$trimestre4RetraitKm_ph)/2;   $semestre2RetraitKm_ph=number_format($semestre2RetraitKm_ph,2);
    $globalRetraitKm_ph=($semestre1RetraitKm_ph+$semestre2RetraitKm_ph)/2;    $globalRetraitKm_ph=number_format($globalRetraitKm_ph,2);
    // RetraitKm2_ph
    $trimestre1RetraitKm2_ph=((float)$_POST['janvRetraitKm2_ph']+(float)$_POST['fevrRetraitKm2_ph']+(float)$_POST['marsRetraitKm2_ph'])/3;
        $trimestre1RetraitKm2_ph=number_format($trimestre1RetraitKm2_ph,2);
    $trimestre2RetraitKm2_ph=((float)$_POST['avrRetraitKm2_ph']+(float)$_POST['maiRetraitKm2_ph']+(float)$_POST['juinRetraitKm2_ph'])/3;
        $trimestre2RetraitKm2_ph=number_format($trimestre2RetraitKm2_ph,2);
    $semestre1RetraitKm2_ph=($trimestre1RetraitKm2_ph+$trimestre2RetraitKm2_ph)/2;   $semestre1RetraitKm2_ph=number_format($semestre1RetraitKm2_ph,2);
    $trimestre3RetraitKm2_ph=((float)$_POST['juillRetraitKm2_ph']+(float)$_POST['aoutRetraitKm2_ph']+(float)$_POST['septRetraitKm2_ph'])/3;
        $trimestre3RetraitKm2_ph=number_format($trimestre3RetraitKm2_ph,2);
    $trimestre4RetraitKm2_ph=((float)$_POST['octRetraitKm2_ph']+(float)$_POST['novRetraitKm2_ph']+(float)$_POST['decRetraitKm2_ph'])/3;
        $trimestre4RetraitKm2_ph=number_format($trimestre4RetraitKm2_ph,2);
    $semestre2RetraitKm2_ph=($trimestre3RetraitKm2_ph+$trimestre4RetraitKm2_ph)/2;   $semestre2RetraitKm2_ph=number_format($semestre2RetraitKm2_ph,2);
    $globalRetraitKm2_ph=($semestre1RetraitKm2_ph+$semestre2RetraitKm2_ph)/2;    $globalRetraitKm2_ph=number_format($globalRetraitKm2_ph,2);

    $arrayRetrait_ph=['Km'=>[
      'janv'=>$_POST['janvRetraitKm_ph'],'fevr'=>$_POST['fevrRetraitKm_ph'],'mars'=>$_POST['marsRetraitKm_ph'],'trimestre1'=>$trimestre1RetraitKm_ph,
      'avr'=>$_POST['avrRetraitKm_ph'],'mai'=>$_POST['maiRetraitKm_ph'],'juin'=>$_POST['juinRetraitKm_ph'],'trimestre2'=>$trimestre2RetraitKm_ph,
      'semestre1'=>$semestre1RetraitKm_ph,'juill'=>$_POST['juillRetraitKm_ph'],'aout'=>$_POST['aoutRetraitKm_ph'],'sept'=>$_POST['septRetraitKm_ph'],
      'trimestre3'=>$trimestre3RetraitKm_ph,'oct'=>$_POST['octRetraitKm_ph'],'nov'=>$_POST['novRetraitKm_ph'],'dec'=>$_POST['decRetraitKm_ph'],
      'trimestre4'=>$trimestre4RetraitKm_ph,'semestre2'=>$semestre2RetraitKm_ph,'GLOBAL'=>$globalRetraitKm_ph
      ],
      'Km2'=>[
        'janv'=>$_POST['janvRetraitKm2_ph'],'fevr'=>$_POST['fevrRetraitKm2_ph'],'mars'=>$_POST['marsRetraitKm2_ph'],
        'trimestre1'=>$trimestre1RetraitKm2_ph,'avr'=>$_POST['avrRetraitKm2_ph'],'mai'=>$_POST['maiRetraitKm2_ph'],'juin'=>$_POST['juinRetraitKm2_ph'],
        'trimestre2'=>$trimestre2RetraitKm2_ph,'semestre1'=>$semestre1RetraitKm2_ph,'juill'=>$_POST['juillRetraitKm2_ph'],
        'aout'=>$_POST['aoutRetraitKm2_ph'],'sept'=>$_POST['septRetraitKm2_ph'],'trimestre3'=>$trimestre3RetraitKm2_ph,'oct'=>$_POST['octRetraitKm2_ph'],
        'nov'=>$_POST['novRetraitKm2_ph'],'dec'=>$_POST['decRetraitKm2_ph'],'trimestre4'=>$trimestre4RetraitKm2_ph,'semestre2'=>$semestre2RetraitKm2_ph,
        'GLOBAL'=>$globalRetraitKm2_ph
    ]];

    // Grav_ph
    $trimestre1Grav_ph=((float)$_POST['janvGrav_ph']+(float)$_POST['fevrGrav_ph']+(float)$_POST['marsGrav_ph'])/3;
        $trimestre1Grav_ph=number_format($trimestre1Grav_ph,2);
    $trimestre2Grav_ph=((float)$_POST['avrGrav_ph']+(float)$_POST['maiGrav_ph']+(float)$_POST['juinGrav_ph'])/3;
        $trimestre2Grav_ph=number_format($trimestre2Grav_ph,2);
    $semestre1Grav_ph=($trimestre1Grav_ph+$trimestre2Grav_ph)/2;   $semestre1Grav_ph=number_format($semestre1Grav_ph,2);
    $trimestre3Grav_ph=((float)$_POST['juillGrav_ph']+(float)$_POST['aoutGrav_ph']+(float)$_POST['septGrav_ph'])/3;
        $trimestre3Grav_ph=number_format($trimestre3Grav_ph,2);
    $trimestre4Grav_ph=((float)$_POST['octGrav_ph']+(float)$_POST['novGrav_ph']+(float)$_POST['decGrav_ph'])/3;
        $trimestre4Grav_ph=number_format($trimestre4Grav_ph,2);
    $semestre2Grav_ph=($trimestre3Grav_ph+$trimestre4Grav_ph)/2;   $semestre2Grav_ph=number_format($semestre2Grav_ph,2);
    $globalGrav_ph=($semestre1Grav_ph+$semestre2Grav_ph)/2;    $globalGrav_ph=number_format($globalGrav_ph,2);

    $arrayGrav_ph=['janv'=>$_POST['janvGrav_ph'],'fevr'=>$_POST['fevrGrav_ph'],'mars'=>$_POST['marsGrav_ph'],'trimestre1'=>$trimestre1Grav_ph,
      'avr'=>$_POST['avrGrav_ph'],'mai'=>$_POST['maiGrav_ph'],'juin'=>$_POST['juinGrav_ph'],'trimestre2'=>$trimestre2Grav_ph,
      'semestre1'=>$semestre1Grav_ph,'juill'=>$_POST['juillGrav_ph'],'aout'=>$_POST['aoutGrav_ph'],'sept'=>$_POST['septGrav_ph'],
      'trimestre3'=>$trimestre3Grav_ph,'oct'=>$_POST['octGrav_ph'],'nov'=>$_POST['novGrav_ph'],'dec'=>$_POST['decGrav_ph'],
      'trimestre4'=>$trimestre4Grav_ph,'semestre2'=>$semestre2Grav_ph,'GLOBAL'=>$globalGrav_ph];

    // Aero_ph
    $trimestre1Aero_ph=((float)$_POST['janvAero_ph']+(float)$_POST['fevrAero_ph']+(float)$_POST['marsAero_ph'])/3;
        $trimestre1Aero_ph=number_format($trimestre1Aero_ph,2);
    $trimestre2Aero_ph=((float)$_POST['avrAero_ph']+(float)$_POST['maiAero_ph']+(float)$_POST['juinAero_ph'])/3;
        $trimestre2Aero_ph=number_format($trimestre2Aero_ph,2);
    $semestre1Aero_ph=($trimestre1Aero_ph+$trimestre2Aero_ph)/2;   $semestre1Aero_ph=number_format($semestre1Aero_ph,2);
    $trimestre3Aero_ph=((float)$_POST['juillAero_ph']+(float)$_POST['aoutAero_ph']+(float)$_POST['septAero_ph'])/3;
        $trimestre3Aero_ph=number_format($trimestre3Aero_ph,2);
    $trimestre4Aero_ph=((float)$_POST['octAero_ph']+(float)$_POST['novAero_ph']+(float)$_POST['decAero_ph'])/3;
        $trimestre4Aero_ph=number_format($trimestre4Aero_ph,2);
    $semestre2Aero_ph=($trimestre3Aero_ph+$trimestre4Aero_ph)/2;   $semestre2Aero_ph=number_format($semestre2Aero_ph,2);
    $globalAero_ph=($semestre1Aero_ph+$semestre2Aero_ph)/2;    $globalAero_ph=number_format($globalAero_ph,2);

    $arrayAero_ph=['janv'=>$_POST['janvAero_ph'],'fevr'=>$_POST['fevrAero_ph'],'mars'=>$_POST['marsAero_ph'],'trimestre1'=>$trimestre1Aero_ph,
      'avr'=>$_POST['avrAero_ph'],'mai'=>$_POST['maiAero_ph'],'juin'=>$_POST['juinAero_ph'],'trimestre2'=>$trimestre2Aero_ph,
      'semestre1'=>$semestre1Aero_ph,'juill'=>$_POST['juillAero_ph'],'aout'=>$_POST['aoutAero_ph'],'sept'=>$_POST['septAero_ph'],
      'trimestre3'=>$trimestre3Aero_ph,'oct'=>$_POST['octAero_ph'],'nov'=>$_POST['novAero_ph'],'dec'=>$_POST['decAero_ph'],
      'trimestre4'=>$trimestre4Aero_ph,'semestre2'=>$semestre2Aero_ph,'GLOBAL'=>$globalAero_ph];

    // Sismiq2DMequ_ph
    $trimestre1Sismiq2DMequ_ph=((float)$_POST['janvSismiq2DMequ_ph']+(float)$_POST['fevrSismiq2DMequ_ph']+(float)$_POST['marsSismiq2DMequ_ph'])/3;
        $trimestre1Sismiq2DMequ_ph=number_format($trimestre1Sismiq2DMequ_ph,2);
    $trimestre2Sismiq2DMequ_ph=((float)$_POST['avrSismiq2DMequ_ph']+(float)$_POST['maiSismiq2DMequ_ph']+(float)$_POST['juinSismiq2DMequ_ph'])/3;
        $trimestre2Sismiq2DMequ_ph=number_format($trimestre2Sismiq2DMequ_ph,2);
    $semestre1Sismiq2DMequ_ph=($trimestre1Sismiq2DMequ_ph+$trimestre2Sismiq2DMequ_ph)/2;
        $semestre1Sismiq2DMequ_ph=number_format($semestre1Sismiq2DMequ_ph,2);
    $trimestre3Sismiq2DMequ_ph=((float)$_POST['juillSismiq2DMequ_ph']+(float)$_POST['aoutSismiq2DMequ_ph']+(float)$_POST['septSismiq2DMequ_ph'])/3;
        $trimestre3Sismiq2DMequ_ph=number_format($trimestre3Sismiq2DMequ_ph,2);
    $trimestre4Sismiq2DMequ_ph=((float)$_POST['octSismiq2DMequ_ph']+(float)$_POST['novSismiq2DMequ_ph']+(float)$_POST['decSismiq2DMequ_ph'])/3;
        $trimestre4Sismiq2DMequ_ph=number_format($trimestre4Sismiq2DMequ_ph,2);
    $semestre2Sismiq2DMequ_ph=($trimestre3Sismiq2DMequ_ph+$trimestre4Sismiq2DMequ_ph)/2;
        $semestre2Sismiq2DMequ_ph=number_format($semestre2Sismiq2DMequ_ph,2);
    $globalSismiq2DMequ_ph=($semestre1Sismiq2DMequ_ph+$semestre2Sismiq2DMequ_ph)/2;
        $globalSismiq2DMequ_ph=number_format($globalSismiq2DMequ_ph,2);
    // Sismiq2DKm_ph
    $trimestre1Sismiq2DKm_ph=((float)$_POST['janvSismiq2DKm_ph']+(float)$_POST['fevrSismiq2DKm_ph']+(float)$_POST['marsSismiq2DKm_ph'])/3;
        $trimestre1Sismiq2DKm_ph=number_format($trimestre1Sismiq2DKm_ph,2);
    $trimestre2Sismiq2DKm_ph=((float)$_POST['avrSismiq2DKm_ph']+(float)$_POST['maiSismiq2DKm_ph']+(float)$_POST['juinSismiq2DKm_ph'])/3;
        $trimestre2Sismiq2DKm_ph=number_format($trimestre2Sismiq2DKm_ph,2);
    $semestre1Sismiq2DKm_ph=($trimestre1Sismiq2DKm_ph+$trimestre2Sismiq2DKm_ph)/2;   $semestre1Sismiq2DKm_ph=number_format($semestre1Sismiq2DKm_ph,2);
    $trimestre3Sismiq2DKm_ph=((float)$_POST['juillSismiq2DKm_ph']+(float)$_POST['aoutSismiq2DKm_ph']+(float)$_POST['septSismiq2DKm_ph'])/3;
        $trimestre3Sismiq2DKm_ph=number_format($trimestre3Sismiq2DKm_ph,2);
    $trimestre4Sismiq2DKm_ph=((float)$_POST['octSismiq2DKm_ph']+(float)$_POST['novSismiq2DKm_ph']+(float)$_POST['decSismiq2DKm_ph'])/3;
        $trimestre4Sismiq2DKm_ph=number_format($trimestre4Sismiq2DKm_ph,2);
    $semestre2Sismiq2DKm_ph=($trimestre3Sismiq2DKm_ph+$trimestre4Sismiq2DKm_ph)/2;   $semestre2Sismiq2DKm_ph=number_format($semestre2Sismiq2DKm_ph,2);
    $globalSismiq2DKm_ph=($semestre1Sismiq2DKm_ph+$semestre2Sismiq2DKm_ph)/2;    $globalSismiq2DKm_ph=number_format($globalSismiq2DKm_ph,2);
    // Sismiq2DPV_ph
    $trimestre1Sismiq2DPV_ph=((float)$_POST['janvSismiq2DPV_ph']+(float)$_POST['fevrSismiq2DPV_ph']+(float)$_POST['marsSismiq2DPV_ph'])/3;
        $trimestre1Sismiq2DPV_ph=number_format($trimestre1Sismiq2DPV_ph,2);
    $trimestre2Sismiq2DPV_ph=((float)$_POST['avrSismiq2DPV_ph']+(float)$_POST['maiSismiq2DPV_ph']+(float)$_POST['juinSismiq2DPV_ph'])/3;
        $trimestre2Sismiq2DPV_ph=number_format($trimestre2Sismiq2DPV_ph,2);
    $semestre1Sismiq2DPV_ph=($trimestre1Sismiq2DPV_ph+$trimestre2Sismiq2DPV_ph)/2;   $semestre1Sismiq2DPV_ph=number_format($semestre1Sismiq2DPV_ph,2);
    $trimestre3Sismiq2DPV_ph=((float)$_POST['juillSismiq2DPV_ph']+(float)$_POST['aoutSismiq2DPV_ph']+(float)$_POST['septSismiq2DPV_ph'])/3;
        $trimestre3Sismiq2DPV_ph=number_format($trimestre3Sismiq2DPV_ph,2);
    $trimestre4Sismiq2DPV_ph=((float)$_POST['octSismiq2DPV_ph']+(float)$_POST['novSismiq2DPV_ph']+(float)$_POST['decSismiq2DPV_ph'])/3;
        $trimestre4Sismiq2DPV_ph=number_format($trimestre4Sismiq2DPV_ph,2);
    $semestre2Sismiq2DPV_ph=($trimestre3Sismiq2DPV_ph+$trimestre4Sismiq2DPV_ph)/2;   $semestre2Sismiq2DPV_ph=number_format($semestre2Sismiq2DPV_ph,2);
    $globalSismiq2DPV_ph=($semestre1Sismiq2DPV_ph+$semestre2Sismiq2DPV_ph)/2;    $globalSismiq2DPV_ph=number_format($globalSismiq2DPV_ph,2);
    // Sismiq3DMequ_ph
    $trimestre1Sismiq3DMequ_ph=((float)$_POST['janvSismiq3DMequ_ph']+(float)$_POST['fevrSismiq3DMequ_ph']+(float)$_POST['marsSismiq3DMequ_ph'])/3;
        $trimestre1Sismiq3DMequ_ph=number_format($trimestre1Sismiq3DMequ_ph,2);
    $trimestre2Sismiq3DMequ_ph=((float)$_POST['avrSismiq3DMequ_ph']+(float)$_POST['maiSismiq3DMequ_ph']+(float)$_POST['juinSismiq3DMequ_ph'])/3;
        $trimestre2Sismiq3DMequ_ph=number_format($trimestre2Sismiq3DMequ_ph,2);
    $semestre1Sismiq3DMequ_ph=($trimestre1Sismiq3DMequ_ph+$trimestre2Sismiq3DMequ_ph)/2;
        $semestre1Sismiq3DMequ_ph=number_format($semestre1Sismiq3DMequ_ph,2);
    $trimestre3Sismiq3DMequ_ph=((float)$_POST['juillSismiq3DMequ_ph']+(float)$_POST['aoutSismiq3DMequ_ph']+(float)$_POST['septSismiq3DMequ_ph'])/3;
        $trimestre3Sismiq3DMequ_ph=number_format($trimestre3Sismiq3DMequ_ph,2);
    $trimestre4Sismiq3DMequ_ph=((float)$_POST['octSismiq3DMequ_ph']+(float)$_POST['novSismiq3DMequ_ph']+(float)$_POST['decSismiq3DMequ_ph'])/3;
        $trimestre4Sismiq3DMequ_ph=number_format($trimestre4Sismiq3DMequ_ph,2);
    $semestre2Sismiq3DMequ_ph=($trimestre3Sismiq3DMequ_ph+$trimestre4Sismiq3DMequ_ph)/2;
        $semestre2Sismiq3DMequ_ph=number_format($semestre2Sismiq3DMequ_ph,2);
    $globalSismiq3DMequ_ph=($semestre1Sismiq3DMequ_ph+$semestre2Sismiq3DMequ_ph)/2;
        $globalSismiq3DMequ_ph=number_format($globalSismiq3DMequ_ph,2);
    // Sismiq3DKm2_ph
    $trimestre1Sismiq3DKm2_ph=((float)$_POST['janvSismiq3DKm2_ph']+(float)$_POST['fevrSismiq3DKm2_ph']+(float)$_POST['marsSismiq3DKm2_ph'])/3;
        $trimestre1Sismiq3DKm2_ph=number_format($trimestre1Sismiq3DKm2_ph,2);
    $trimestre2Sismiq3DKm2_ph=((float)$_POST['avrSismiq3DKm2_ph']+(float)$_POST['maiSismiq3DKm2_ph']+(float)$_POST['juinSismiq3DKm2_ph'])/3;
        $trimestre2Sismiq3DKm2_ph=number_format($trimestre2Sismiq3DKm2_ph,2);
    $semestre1Sismiq3DKm2_ph=($trimestre1Sismiq3DKm2_ph+$trimestre2Sismiq3DKm2_ph)/2;
        $semestre1Sismiq3DKm2_ph=number_format($semestre1Sismiq3DKm2_ph,2);
    $trimestre3Sismiq3DKm2_ph=((float)$_POST['juillSismiq3DKm2_ph']+(float)$_POST['aoutSismiq3DKm2_ph']+(float)$_POST['septSismiq3DKm2_ph'])/3;
        $trimestre3Sismiq3DKm2_ph=number_format($trimestre3Sismiq3DKm2_ph,2);
    $trimestre4Sismiq3DKm2_ph=((float)$_POST['octSismiq3DKm2_ph']+(float)$_POST['novSismiq3DKm2_ph']+(float)$_POST['decSismiq3DKm2_ph'])/3;
        $trimestre4Sismiq3DKm2_ph=number_format($trimestre4Sismiq3DKm2_ph,2);
    $semestre2Sismiq3DKm2_ph=($trimestre3Sismiq3DKm2_ph+$trimestre4Sismiq3DKm2_ph)/2;
        $semestre2Sismiq3DKm2_ph=number_format($semestre2Sismiq3DKm2_ph,2);
    $globalSismiq3DKm2_ph=($semestre1Sismiq3DKm2_ph+$semestre2Sismiq3DKm2_ph)/2;
        $globalSismiq3DKm2_ph=number_format($globalSismiq3DKm2_ph,2);
    // Sismiq3DPV_ph
    $trimestre1Sismiq3DPV_ph=((float)$_POST['janvSismiq3DPV_ph']+(float)$_POST['fevrSismiq3DPV_ph']+(float)$_POST['marsSismiq3DPV_ph'])/3;
        $trimestre1Sismiq3DPV_ph=number_format($trimestre1Sismiq3DPV_ph,2);
    $trimestre2Sismiq3DPV_ph=((float)$_POST['avrSismiq3DPV_ph']+(float)$_POST['maiSismiq3DPV_ph']+(float)$_POST['juinSismiq3DPV_ph'])/3;
        $trimestre2Sismiq3DPV_ph=number_format($trimestre2Sismiq3DPV_ph,2);
    $semestre1Sismiq3DPV_ph=($trimestre1Sismiq3DPV_ph+$trimestre2Sismiq3DPV_ph)/2;
        $semestre1Sismiq3DPV_ph=number_format($semestre1Sismiq3DPV_ph,2);
    $trimestre3Sismiq3DPV_ph=((float)$_POST['juillSismiq3DPV_ph']+(float)$_POST['aoutSismiq3DPV_ph']+(float)$_POST['septSismiq3DPV_ph'])/3;
        $trimestre3Sismiq3DPV_ph=number_format($trimestre3Sismiq3DPV_ph,2);
    $trimestre4Sismiq3DPV_ph=((float)$_POST['octSismiq3DPV_ph']+(float)$_POST['novSismiq3DPV_ph']+(float)$_POST['decSismiq3DPV_ph'])/3;
        $trimestre4Sismiq3DPV_ph=number_format($trimestre4Sismiq3DPV_ph,2);
    $semestre2Sismiq3DPV_ph=($trimestre3Sismiq3DPV_ph+$trimestre4Sismiq3DPV_ph)/2;
        $semestre2Sismiq3DPV_ph=number_format($semestre2Sismiq3DPV_ph,2);
    $globalSismiq3DPV_ph=($semestre1Sismiq3DPV_ph+$semestre2Sismiq3DPV_ph)/2;
        $globalSismiq3DPV_ph=number_format($globalSismiq3DPV_ph,2);

    $arraySismiq_ph=['2D'=>[
      'Mequ'=>['janv'=>$_POST['janvSismiq2DMequ_ph'],'fevr'=>$_POST['fevrSismiq2DMequ_ph'],'mars'=>$_POST['marsSismiq2DMequ_ph'],
      'trimestre1'=>$trimestre1Sismiq2DMequ_ph,'avr'=>$_POST['avrSismiq2DMequ_ph'],'mai'=>$_POST['maiSismiq2DMequ_ph'],
      'juin'=>$_POST['juinSismiq2DMequ_ph'],'trimestre2'=>$trimestre2Sismiq2DMequ_ph,'semestre1'=>$semestre1Sismiq2DMequ_ph,
      'juill'=>$_POST['juillSismiq2DMequ_ph'],'aout'=>$_POST['aoutSismiq2DMequ_ph'],'sept'=>$_POST['septSismiq2DMequ_ph'],
      'trimestre3'=>$trimestre3Sismiq2DMequ_ph,'oct'=>$_POST['octSismiq2DMequ_ph'],'nov'=>$_POST['novSismiq2DMequ_ph'],
      'dec'=>$_POST['decSismiq2DMequ_ph'],'trimestre4'=>$trimestre4Sismiq2DMequ_ph,'semestre2'=>$semestre2Sismiq2DMequ_ph,
      'GLOBAL'=>$globalSismiq2DMequ_ph],

      'Km'=>['janv'=>$_POST['janvSismiq2DKm_ph'],'fevr'=>$_POST['fevrSismiq2DKm_ph'],'mars'=>$_POST['marsSismiq2DKm_ph'],
      'trimestre1'=>$trimestre1Sismiq2DKm_ph,'avr'=>$_POST['avrSismiq2DKm_ph'],'mai'=>$_POST['maiSismiq2DKm_ph'],
      'juin'=>$_POST['juinSismiq2DKm_ph'],'trimestre2'=>$trimestre2Sismiq2DKm_ph,'semestre1'=>$semestre1Sismiq2DKm_ph,
      'juill'=>$_POST['juillSismiq2DKm_ph'],'aout'=>$_POST['aoutSismiq2DKm_ph'],'sept'=>$_POST['septSismiq2DKm_ph'],
      'trimestre3'=>$trimestre3Sismiq2DKm_ph,'oct'=>$_POST['octSismiq2DKm_ph'],'nov'=>$_POST['novSismiq2DKm_ph'],
      'dec'=>$_POST['decSismiq2DKm_ph'],'trimestre4'=>$trimestre4Sismiq2DKm_ph,'semestre2'=>$semestre2Sismiq2DKm_ph,
      'GLOBAL'=>$globalSismiq2DKm_ph],

      'PV'=>['janv'=>$_POST['janvSismiq2DPV_ph'],'fevr'=>$_POST['fevrSismiq2DPV_ph'],'mars'=>$_POST['marsSismiq2DPV_ph'],
      'trimestre1'=>$trimestre1Sismiq2DPV_ph,'avr'=>$_POST['avrSismiq2DPV_ph'],'mai'=>$_POST['maiSismiq2DPV_ph'],
      'juin'=>$_POST['juinSismiq2DPV_ph'],'trimestre2'=>$trimestre2Sismiq2DPV_ph,'semestre1'=>$semestre1Sismiq2DPV_ph,
      'juill'=>$_POST['juillSismiq2DPV_ph'],'aout'=>$_POST['aoutSismiq2DPV_ph'],'sept'=>$_POST['septSismiq2DPV_ph'],
      'trimestre3'=>$trimestre3Sismiq2DPV_ph,'oct'=>$_POST['octSismiq2DPV_ph'],'nov'=>$_POST['novSismiq2DPV_ph'],
      'dec'=>$_POST['decSismiq2DPV_ph'],'trimestre4'=>$trimestre4Sismiq2DPV_ph,'semestre2'=>$semestre2Sismiq2DPV_ph,
      'GLOBAL'=>$globalSismiq2DPV_ph]
    ],
      '3D'=>[
        'Mequ'=>['janv'=>$_POST['janvSismiq3DMequ_ph'],'fevr'=>$_POST['fevrSismiq3DMequ_ph'],'mars'=>$_POST['marsSismiq3DMequ_ph'],
        'trimestre1'=>$trimestre1Sismiq3DMequ_ph,'avr'=>$_POST['avrSismiq3DMequ_ph'],'mai'=>$_POST['maiSismiq3DMequ_ph'],
        'juin'=>$_POST['juinSismiq3DMequ_ph'],'trimestre2'=>$trimestre2Sismiq3DMequ_ph,'semestre1'=>$semestre1Sismiq3DMequ_ph,
        'juill'=>$_POST['juillSismiq3DMequ_ph'],'aout'=>$_POST['aoutSismiq3DMequ_ph'],'sept'=>$_POST['septSismiq3DMequ_ph'],
        'trimestre3'=>$trimestre3Sismiq3DMequ_ph,'oct'=>$_POST['octSismiq3DMequ_ph'],'nov'=>$_POST['novSismiq3DMequ_ph'],
        'dec'=>$_POST['decSismiq3DMequ_ph'],'trimestre4'=>$trimestre4Sismiq3DMequ_ph,'semestre2'=>$semestre2Sismiq3DMequ_ph,
        'GLOBAL'=>$globalSismiq3DMequ_ph],

        'Km2'=>['janv'=>$_POST['janvSismiq3DKm2_ph'],'fevr'=>$_POST['fevrSismiq3DKm2_ph'],'mars'=>$_POST['marsSismiq3DKm2_ph'],
        'trimestre1'=>$trimestre1Sismiq3DKm2_ph,'avr'=>$_POST['avrSismiq3DKm2_ph'],'mai'=>$_POST['maiSismiq3DKm2_ph'],
        'juin'=>$_POST['juinSismiq3DKm2_ph'],'trimestre2'=>$trimestre2Sismiq3DKm2_ph,'semestre1'=>$semestre1Sismiq3DKm2_ph,
        'juill'=>$_POST['juillSismiq3DKm2_ph'],'aout'=>$_POST['aoutSismiq3DKm2_ph'],'sept'=>$_POST['septSismiq3DKm2_ph'],
        'trimestre3'=>$trimestre3Sismiq3DKm2_ph,'oct'=>$_POST['octSismiq3DKm2_ph'],'nov'=>$_POST['novSismiq3DKm2_ph'],
        'dec'=>$_POST['decSismiq3DKm2_ph'],'trimestre4'=>$trimestre4Sismiq3DKm2_ph,'semestre2'=>$semestre2Sismiq3DKm2_ph,
        'GLOBAL'=>$globalSismiq3DKm2_ph],

        'PV'=>['janv'=>$_POST['janvSismiq3DPV_ph'],'fevr'=>$_POST['fevrSismiq3DPV_ph'],'mars'=>$_POST['marsSismiq3DPV_ph'],
        'trimestre1'=>$trimestre1Sismiq3DPV_ph,'avr'=>$_POST['avrSismiq3DPV_ph'],'mai'=>$_POST['maiSismiq3DPV_ph'],
        'juin'=>$_POST['juinSismiq3DPV_ph'],'trimestre2'=>$trimestre2Sismiq3DPV_ph,'semestre1'=>$semestre1Sismiq3DPV_ph,
        'juill'=>$_POST['juillSismiq3DPV_ph'],'aout'=>$_POST['aoutSismiq3DPV_ph'],'sept'=>$_POST['septSismiq3DPV_ph'],
        'trimestre3'=>$trimestre3Sismiq3DPV_ph,'oct'=>$_POST['octSismiq3DPV_ph'],'nov'=>$_POST['novSismiq3DPV_ph'],
        'dec'=>$_POST['decSismiq3DPV_ph'],'trimestre4'=>$trimestre4Sismiq3DPV_ph,'semestre2'=>$semestre2Sismiq3DPV_ph,
        'GLOBAL'=>$globalSismiq3DPV_ph]
    ]];

    // ForageMapp_ph
    $trimestre1ForageMapp_ph=((float)$_POST['janvForageMapp_ph']+(float)$_POST['fevrForageMapp_ph']+(float)$_POST['marsForageMapp_ph'])/3;
        $trimestre1ForageMapp_ph=number_format($trimestre1ForageMapp_ph,2);
    $trimestre2ForageMapp_ph=((float)$_POST['avrForageMapp_ph']+(float)$_POST['maiForageMapp_ph']+(float)$_POST['juinForageMapp_ph'])/3;
        $trimestre2ForageMapp_ph=number_format($trimestre2ForageMapp_ph,2);
    $semestre1ForageMapp_ph=($trimestre1ForageMapp_ph+$trimestre2ForageMapp_ph)/2;
        $semestre1ForageMapp_ph=number_format($semestre1ForageMapp_ph,2);
    $trimestre3ForageMapp_ph=((float)$_POST['juillForageMapp_ph']+(float)$_POST['aoutForageMapp_ph']+(float)$_POST['septForageMapp_ph'])/3;
        $trimestre3ForageMapp_ph=number_format($trimestre3ForageMapp_ph,2);
    $trimestre4ForageMapp_ph=((float)$_POST['octForageMapp_ph']+(float)$_POST['novForageMapp_ph']+(float)$_POST['decForageMapp_ph'])/3;
        $trimestre4ForageMapp_ph=number_format($trimestre4ForageMapp_ph,2);
    $semestre2ForageMapp_ph=($trimestre3ForageMapp_ph+$trimestre4ForageMapp_ph)/2;
        $semestre2ForageMapp_ph=number_format($semestre2ForageMapp_ph,2);
    $globalForageMapp_ph=($semestre1ForageMapp_ph+$semestre2ForageMapp_ph)/2;
        $globalForageMapp_ph=number_format($globalForageMapp_ph,2);
    // ForageMetres_ph
    $trimestre1ForageMetres_ph=((float)$_POST['janvForageMetres_ph']+(float)$_POST['fevrForageMetres_ph']+(float)$_POST['marsForageMetres_ph'])/3;
        $trimestre1ForageMetres_ph=number_format($trimestre1ForageMetres_ph,2);
    $trimestre2ForageMetres_ph=((float)$_POST['avrForageMetres_ph']+(float)$_POST['maiForageMetres_ph']+(float)$_POST['juinForageMetres_ph'])/3;
        $trimestre2ForageMetres_ph=number_format($trimestre2ForageMetres_ph,2);
    $semestre1ForageMetres_ph=($trimestre1ForageMetres_ph+$trimestre2ForageMetres_ph)/2;
        $semestre1ForageMetres_ph=number_format($semestre1ForageMetres_ph,2);
    $trimestre3ForageMetres_ph=((float)$_POST['juillForageMetres_ph']+(float)$_POST['aoutForageMetres_ph']+(float)$_POST['septForageMetres_ph'])/3;
        $trimestre3ForageMetres_ph=number_format($trimestre3ForageMetres_ph,2);
    $trimestre4ForageMetres_ph=((float)$_POST['octForageMetres_ph']+(float)$_POST['novForageMetres_ph']+(float)$_POST['decForageMetres_ph'])/3;
        $trimestre4ForageMetres_ph=number_format($trimestre4ForageMetres_ph,2);
    $semestre2ForageMetres_ph=($trimestre3ForageMetres_ph+$trimestre4ForageMetres_ph)/2;
        $semestre2ForageMetres_ph=number_format($semestre2ForageMetres_ph,2);
    $globalForageMetres_ph=($semestre1ForageMetres_ph+$semestre2ForageMetres_ph)/2;
        $globalForageMetres_ph=number_format($globalForageMetres_ph,2);
    // ForagePuits_ph
    $trimestre1ForagePuits_ph=((float)$_POST['janvForagePuits_ph']+(float)$_POST['fevrForagePuits_ph']+(float)$_POST['marsForagePuits_ph'])/3;
        $trimestre1ForagePuits_ph=number_format($trimestre1ForagePuits_ph,2);
    $trimestre2ForagePuits_ph=((float)$_POST['avrForagePuits_ph']+(float)$_POST['maiForagePuits_ph']+(float)$_POST['juinForagePuits_ph'])/3;
        $trimestre2ForagePuits_ph=number_format($trimestre2ForagePuits_ph,2);
    $semestre1ForagePuits_ph=($trimestre1ForagePuits_ph+$trimestre2ForagePuits_ph)/2;
        $semestre1ForagePuits_ph=number_format($semestre1ForagePuits_ph,2);
    $trimestre3ForagePuits_ph=((float)$_POST['juillForagePuits_ph']+(float)$_POST['aoutForagePuits_ph']+(float)$_POST['septForagePuits_ph'])/3;
        $trimestre3ForagePuits_ph=number_format($trimestre3ForagePuits_ph,2);
    $trimestre4ForagePuits_ph=((float)$_POST['octForagePuits_ph']+(float)$_POST['novForagePuits_ph']+(float)$_POST['decForagePuits_ph'])/3;
        $trimestre4ForagePuits_ph=number_format($trimestre4ForagePuits_ph,2);
    $semestre2ForagePuits_ph=($trimestre3ForagePuits_ph+$trimestre4ForagePuits_ph)/2;
        $semestre2ForagePuits_ph=number_format($semestre2ForagePuits_ph,2);
    $globalForagePuits_ph=($semestre1ForagePuits_ph+$semestre2ForagePuits_ph)/2;
        $globalForagePuits_ph=number_format($globalForagePuits_ph,2);

    $arrayForge_ph=[
    'Mapp'=>['janv'=>$_POST['janvForageMapp_ph'],'fevr'=>$_POST['fevrForageMapp_ph'],'mars'=>$_POST['marsForageMapp_ph'],
    'trimestre1'=>$trimestre1ForageMapp_ph,'avr'=>$_POST['avrForageMapp_ph'],'mai'=>$_POST['maiForageMapp_ph'],
    'juin'=>$_POST['juinForageMapp_ph'],'trimestre2'=>$trimestre2ForageMapp_ph,'semestre1'=>$semestre1ForageMapp_ph,
    'juill'=>$_POST['juillForageMapp_ph'],'aout'=>$_POST['aoutForageMapp_ph'],'sept'=>$_POST['septForageMapp_ph'],
    'trimestre3'=>$trimestre3ForageMapp_ph,'oct'=>$_POST['octForageMapp_ph'],'nov'=>$_POST['novForageMapp_ph'],
    'dec'=>$_POST['decForageMapp_ph'],'trimestre4'=>$trimestre4ForageMapp_ph,'semestre2'=>$semestre2ForageMapp_ph,
    'GLOBAL'=>$globalForageMapp_ph],

    'Metres'=>['janv'=>$_POST['janvForageMetres_ph'],'fevr'=>$_POST['fevrForageMetres_ph'],'mars'=>$_POST['marsForageMetres_ph'],
    'trimestre1'=>$trimestre1ForageMetres_ph,'avr'=>$_POST['avrForageMetres_ph'],'mai'=>$_POST['maiForageMetres_ph'],
    'juin'=>$_POST['juinForageMetres_ph'],'trimestre2'=>$trimestre2ForageMetres_ph,'semestre1'=>$semestre1ForageMetres_ph,
    'juill'=>$_POST['juillForageMetres_ph'],'aout'=>$_POST['aoutForageMetres_ph'],'sept'=>$_POST['septForageMetres_ph'],
    'trimestre3'=>$trimestre3ForageMetres_ph,'oct'=>$_POST['octForageMetres_ph'],'nov'=>$_POST['novForageMetres_ph'],
    'dec'=>$_POST['decForageMetres_ph'],'trimestre4'=>$trimestre4ForageMetres_ph,'semestre2'=>$semestre2ForageMetres_ph,
    'GLOBAL'=>$globalForageMetres_ph],

    'Puits'=>['janv'=>$_POST['janvForagePuits_ph'],'fevr'=>$_POST['fevrForagePuits_ph'],'mars'=>$_POST['marsForagePuits_ph'],
    'trimestre1'=>$trimestre1ForagePuits_ph,'avr'=>$_POST['avrForagePuits_ph'],'mai'=>$_POST['maiForagePuits_ph'],
    'juin'=>$_POST['juinForagePuits_ph'],'trimestre2'=>$trimestre2ForagePuits_ph,'semestre1'=>$semestre1ForagePuits_ph,
    'juill'=>$_POST['juillForagePuits_ph'],'aout'=>$_POST['aoutForagePuits_ph'],'sept'=>$_POST['septForagePuits_ph'],
    'trimestre3'=>$trimestre3ForagePuits_ph,'oct'=>$_POST['octForagePuits_ph'],'nov'=>$_POST['novForagePuits_ph'],
    'dec'=>$_POST['decForagePuits_ph'],'trimestre4'=>$trimestre4ForagePuits_ph,'semestre2'=>$semestre2ForagePuits_ph,
    'GLOBAL'=>$globalForagePuits_ph]
  ];

  // $arrayFinancier contien le tableau Financier
  $arrayFinancier=['GT'=>$arrayGT_f,'TS'=>$arrayTS_f,'Trait'=>$arrayTrait_f,'Retrait'=>$arrayRetrait_f,'Grav'=>$arrayGrav_f,
    'Aero'=>$arrayAero_f,'Sismiq'=>$arraySismiq_f,'Forage'=>$arrayForage_f];
  // convert it to JSON
  $jsonFinancier=json_encode($arrayFinancier);
  //echo '<br/>FINANCIER<br/><br/>'.$jsonFinancier.'<br/>';
  // $arrayPhysique contien le tableau Physique
  $arrayPhysique=['GT'=>$arrayGT_ph,'TS'=>$arrayTS_ph,'Trait'=>$arrayTrait_ph,'Retrait'=>$arrayRetrait_ph,'Grav'=>$arrayGrav_ph,
    'Aero'=>$arrayAero_ph,'Sismiq'=>$arraySismiq_ph,'Forage'=>$arrayForge_ph];
  // convert it to JSON
  $jsonPhysique=json_encode($arrayPhysique);
  //echo '<br/><br/>PHYSIQUE<br/><br/>'.$jsonPhysique.'<br/>';
  $req=$bdd->prepare('INSERT INTO projet (nomp,description,financier,physique) VALUES(:nomp,:description,:financier,:physique)');
  $req->execute(array('nomp'=>$_POST['NomP'],'description'=>$_POST['DescriptionP'],'financier'=>$jsonFinancier,'physique'=>$jsonPhysique))
   or die(print_r($req->errorInfo()));
  $req->closeCursor();
?>
<script> location.replace("ListeProjet.php"); </script>
<?php
  }
  else{
    echo '<br/> Informations didn\'t get received correctly in AddProjet.php';
  }
?>
