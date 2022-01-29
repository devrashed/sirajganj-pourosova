<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
    protected $fillable = [
    'applicant_name',
    'relation_name',
    'presentaddress',
    'permanentaddress',
    'mobilenumber',
    'areaname',
    'dagcs',
    'dagsa',
    'dagras',
    'seatno',
    'app_land_amount',
    'land_grab',
    'buildingtype',
    'khotiyancs',
    'khatiyansa',
    'kbhatiyanrs',
    'mujarname',
    'wordname',
    'roadName',
    'siteNorth',
    'siteSouth',
    'siteEast',
    'siteWest',
    'akabaka',
    'buildingfirst',
    'othersfloor',
    'road_Name',
    'roaddistance',
    'roadsituation',
    /*'roadDetails',*/
    'communicationbyroad',
    'northbysite',
    'Eastbysite',
    'southbysite',
    'westbysite',
    'before_building_count',
    'propose_building_build',
    'clectricity_line',
    'water_line',
    'gas_line',
    'clean_line',
    'proposesafty',
    'propose_building_pond',
    'propose_building_pond_purpose',
    'authorised_officer',
    'proposeroadDistanc',
    'propose_building_distance',
    'gasline_distance',
    'clearline_distance',
    'electri_city_distance',    
    'imarotfloor',
    'tax',
    'holdingno',
    'lastcitytax',
    'frontplat',
    /*'namjari',*/
    /*'mujano',*/
    'jlno',
    /*'kharij',*/
    /*'jomiroiriman',*/
    'classification', 
    'cdate',
    'ctime',
    'status',
    'surstatus',
    'mimage',
    'pdfup',
   /* 'aszip',*/
    'serial',
 ];

protected $table = 'applicant';
}
