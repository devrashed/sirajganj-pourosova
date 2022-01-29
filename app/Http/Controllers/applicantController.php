<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect; 
use App\applicant;
use App\User;
use App\Finalsub;
use App\Investigation;
use App\Declineapp;
use DB;
use Auth;


class applicantController extends Controller
{

   /*==== SMS API ===== */



const API_TOKEN = "KodeRank-52b0e465-2202-438a-b50f-debb6acc27ce"; //put ssl provided api_token here
const SID = "KODERANKNONMASK"; // put ssl provided sid here
const DOMAIN = "https://smsplus.sslwireless.com"; //api domain // example http://smsplus.sslwireless.com

function singleSms($msisdn, $messageBody, $csmsId)
{
    $params = [
        "api_token" => "KodeRank-52b0e465-2202-438a-b50f-debb6acc27ce",
        "sid" => "KODERANKNONMASK",
        "msisdn" => $msisdn,
        "sms" => $messageBody,
        "csms_id" => $csmsId
    ];
    $url = trim(self::DOMAIN, '/')."/api/v3/send-sms";
    $params = json_encode($params);

    $this->callApi($url, $params);
}


function callApi($url, $params)
{
    $ch = curl_init(); // Initialize cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($params),
        'accept:application/json'
    ));

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
} 


/*==== END SMS API ===== */


   public function creatapplicant(Request $request)
    {
          
    date_default_timezone_set('Asia/Dhaka');
    $ctime = date('h:i:s', time());
    
    $images=array();

    if($files=$request->file('mimage')){
        foreach($files as $file){
            $desti_path = base_path() . '/public/upload';
            $name=$file->getClientOriginalName();
            $file->move($desti_path,$name);
            $images[]=$name;
        }
    }        //new applicant applicant::create
      $data = applicant::create([

      $file = $request->input('image'),
      $mpdf = $request->file('image')->getClientOriginalName(),
      $destination = base_path() . '/public/upload',
      $request->file('image')->move($destination, $mpdf), 



     'applicant_name' =>$request->get('applicant'),
     'relation_name' =>$request->get('applicantrelation'),
     'presentaddress' =>$request->get('preAddress'),
     'permanentaddress' =>$request->get('parAddress'),
     'mobilenumber' =>$request->get('mobile'),
     'areaname' =>$request->get('areaname'),
     'dagcs' =>$request->get('dagno'),
     'dagsa' =>$request->get('dagsa'),
     'dagras' =>$request->get('dagsrs'),
     'seatno' =>$request->get('seatno'),
     'app_land_amount' =>$request->get('amountofland'),
     'land_grab' =>$request->get('landaquar'),
     'buildingtype' =>$request->get('buildingtype'),
     'khotiyancs' =>$request->get('khotiyan'),
     'khatiyansa' =>$request->get('khotiyansa'),
     'kbhatiyanrs' =>$request->get('khotiyanrs'),
     'mujarname' =>$request->get('mujarno'),
     'wordname' =>$request->get('wordno'),
     'roadName' =>$request->get('roadno'),
     'siteNorth' =>$request->get('uttor'),
     'siteSouth' =>$request->get('dokkhin'),
     'siteEast' =>$request->get('purb'),
     'siteWest' =>$request->get('poshcim'),
     'akabaka' =>$request->get('siteakabaka'),
     'buildingfirst' =>$request->get('first'),
     'othersfloor' =>$request->get('others'),
     'road_Name' =>$request->get('name'),
     'roaddistance' =>$request->get('distance'),
     'roadsituation' =>$request->get('situation'),
     'communicationbyroad' =>$request->get('roadcommunication'),
     'northbysite' =>$request->get('northborder'),
     'Eastbysite' =>$request->get('eastborder'),
     'southbysite' =>$request->get('southborder'),
     'westbysite' =>$request->get('westborder'),
     'before_building_count' =>$request->get('beforbuilding'),
     'propose_building_build' =>$request->get('proposedbuild'),
     'clectricity_line' =>$request->get('electriccityline'),
     'water_line' =>$request->get('waterline'),
     'gas_line' =>$request->get('gasline'),
     'proposesaftytank' =>$request->get(''),
     'clean_line' =>$request->get('clearline'),
     'proposesafty' =>$request->get('safty'),
     'propose_building_pond' =>$request->get('pondstart'),
     'propose_building_pond_purpose' =>$request->get('pondbuild'),
     'authorised_officer' =>$request->get('authorised'),
     'proposeroadDistanc' =>$request->get('roaddistanc'),
     'propose_building_distance' =>$request->get('builddistanc'),
     'gasline_distance' =>$request->get('gashsupply'),
     'clearline_distance' =>$request->get('cleardistance'),
     'electri_city_distance' =>$request->get('electrictydistance'),	 
     'imarotfloor'=>$request->get('imarot'), 
     'tax'=>$request->get('taxno'),
     'holdingno'=>$request->get('folding'),
     'lastcitytax'=>$request->get('lasttax'),
     'frontplat'=>$request->get('frontroad'),
     'jlno'=>$request->get('jalno'),     
     'classification'=>$request->get('landclasification'),	  
     'cdate' =>$request->get('cdate'),
     'ctime' => $ctime,
     'status' =>$request->get('status'),
     'surstatus' =>$request->get('surstatus'),
     'mimage'=>  implode("|",$images),
     'pdfup'=> $mpdf,
    /* 'aszip'=>$zip,  */
     'surstatus' =>$request->get('surstatus'),
     'serial' =>$request->get('serielnumber'),
     ]);

      
    $data->save();     
    $id = $data->id;

    $url = "https://smsplus.sslwireless.com";
    $number=$request->get('mobile');
    $sms_content="সিরাজগঞ্জ পৌরসভায় ভবন নির্মাণের জন্য আপনি আবেদন করেছেন। 
    আপনার আবেদন নাম্বারঃ".$request->get('serielnumber'); 

    $msisdn = $number;
    $messageBody = $sms_content;
    $csmsId = "4437343343P3Z684333392";
    $this->singleSms($msisdn, $messageBody, $csmsId);

  
return view('/appmessage',compact('id'));
}

public function editapplink($id) 
{

     $data= DB::table('applicant')          
           ->where('id', '=', $id)
           ->first(); 

return view ('Editapplication',compact('data'));        
}

public  function appUpdate(Request $request, $id){

     $data = applicant::find($id);    
        
    $data->applicant_name=$request->input('applicant');
    $data->relation_name=$request->input('applicantrelation');
    $data->presentaddress=$request->input('preAddress');
    $data->permanentaddress =$request->input('parAddress');
    $data->mobilenumber =$request->input('mobile');
    $data->areaname =$request->input('areaname');
     $data->dagcs =$request->input('dagno');
     $data->dagsa =$request->input('dagsa');
     $data->dagras =$request->input('dagsrs');
    $data->seatno =$request->input('seatno');
     $data->app_land_amount =$request->input('amountofland');
     $data->land_grab =$request->input('landaquar');
     $data->buildingtype =$request->input('buildingtype');
     $data->khotiyancs =$request->input('khotiyan');
     $data->khatiyansa =$request->input('khotiyansa');
     $data->kbhatiyanrs =$request->input('khotiyanrs');
     $data->mujarname =$request->input('mujarno');
     $data->wordname =$request->input('wordno');
     $data->roadName =$request->input('roadno');
     $data->siteNorth =$request->input('uttor');
     $data->siteSouth =$request->input('dokkhin');
     $data->siteEast =$request->input('purb');
     $data->siteWest=$request->input('poshcim');
     $data->akabaka =$request->input('siteakabaka');
     $data->buildingfirst =$request->input('first');
     $data->othersfloor=$request->input('others');
     $data->road_Name=$request->input('name');
     $data->roaddistance =$request->input('distance');
     $data->roadsituation=$request->input('situation');
     $data->communicationbyroad =$request->input('roadcommunication');
     $data->northbysite =$request->input('northborder');
     $data->Eastbysite=$request->input('eastborder');
     $data->southbysite=$request->input('southborder');
     $data->westbysite=$request->input('westborder');
     $data->before_building_count =$request->input('beforbuilding');
     $data->propose_building_build=$request->input('proposedbuild');
     $data->clectricity_line =$request->input('electriccityline');
     $data->water_line=$request->input('waterline');
     $data->gas_line=$request->input('gasline');
     $data->clean_line=$request->input('clearline');
     $data->proposesafty=$request->input('safty');
     $data->propose_building_pond=$request->input('pondstart');
     $data->propose_building_pond_purpose=$request->input('pondbuild');
     $data->authorised_officer=$request->input('authorised');
     $data->proposeroadDistanc=$request->input('roaddistanc');
     $data->propose_building_distance=$request->input('builddistanc');
     $data->gasline_distance=$request->input('gashsupply');
     $data->clearline_distance=$request->input('cleardistance');
     $data->electri_city_distance=$request->input('electrictydistance');
     $data->imarotfloor=$request->input('imarot');
     $data->tax=$request->input('taxno');
     $data->holdingno=$request->input('folding');
     $data->lastcitytax=$request->input('lasttax');
     $data->frontplat=$request->input('frontroad');
     $data->jlno=$request->input('jalno');    
     $data->classification=$request->input('landclasification');
     $data->cdate=$request->input('cdate');
     $data->status=$request->input('status');
     $data->surstatus=$request->input('surstatus');
     $data->surstatus =$request->input('surstatus');
     $data->serial=$request->input('serielnumber');
   
    $data->save();    
    $request->session()->flash('message', 'Successfully update Data');
    return redirect('/viewapplicant'); 
  
   }

   public function acceptapp(Request $request)
    {
    
    $url = "https://smsplus.sslwireless.com";
    $number=$request->get('mobiln');
    $sms_content="আপনার আবেদনটি গ্রহণ করা হল। শিগ্রি পরবর্তী আপডেট জানানো হবে।";
    /*$text=urlencode($sms_content);  
    $data= array(
    'username'=>"Talha",
    'password'=>"S8XqVUo",
    'number'=>"$number",
    'message'=>"$text"
    );

    $ch = curl_init(); // Initialize cURL
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $smsresult = curl_exec($ch);
    $p = explode("|",$smsresult);
    $sendstatus = $p[0];

    $smsresult = file_get_contents("http://66.45.237.70/api.php?username=yourid&password=yourpass&number=$number&message=$text");*/
    
    $msisdn = $number;
    $messageBody = $sms_content;
    $csmsId = "4437343343P3Z684333392";
    $this->singleSms($msisdn, $messageBody, $csmsId);
   

    return redirect()->back()->with('success', 'সফল ভাবে এস এম এস পাঠানো হয়েছে।');
    
    }
  
  public function lastappid($id)
  {
     $data= DB::table('applicant')          
            ->where('id', '=', $id)
            ->first(); 
     return view ('lastdatashow',compact('data'));  
  }
   
public function viewapplicant() 
     {
      $adata= DB::table('applicant')          
            ->where('status', '=', 'Yes')
            ->where('surstatus', '=', 'No')
            ->orderBy('id', 'desc')  
            ->paginate(100); 
      return view ('viewapplicant',compact('adata'));  
     }


public function detailsapp($id) 
     {

        $currentuer=Auth::user()->utype;

        $adata= DB::table('applicant')          
                ->where('id', '=', $id)
                ->first(); 

        $userlist= DB::table('users')
        ->select('users.*')         
        ->where('utype', '<>', $currentuer)
        ->get(); 

return view ('pappdetails',compact('adata','userlist'));  
}

public function declineapp(Request $request) 
     {

    $request->validate([
        'decdetails'=>'required',       
     ]);     

    date_default_timezone_set('Asia/Dhaka');
    $ctime = date('h:i:s', time());

    $cdate=date("yy-m-d"); 


    $url = "https://smsplus.sslwireless.com";
    $number=$request->get('mobilenumber');
    $sms_content= $request->get('decdetails');
    
    $msisdn = $number;
    $messageBody = $sms_content;
    $csmsId = "4437343343P3Z684333392";
    $this->singleSms($msisdn, $messageBody, $csmsId);

   /* $data= array(
    'username'=>"Talha",
    'password'=>"S8XqVUo",
    'number'=>"$number",
    'message'=>"$text"
    );

    $ch = curl_init(); // Initialize cURL
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $smsresult = curl_exec($ch);
    $p = explode("|",$smsresult);
    $sendstatus = $p[0];

    $smsresult = file_get_contents("http://66.45.237.70/api.php?username=yourid&password=yourpass&number=$number&message=$text");*/

    
    https://smsplus.sslwireless.com/api/v3/send-sms?api_token=**&sid=**&sms=Test SMS&msisdn=880*****&csms_id=anyuniqueid

   /* return redirect()->back()->with('success', 'সফল ভাবে এস এম এস পাঠানো হয়েছে।');*/


    $updata= applicant::where('id', $request->get('app'))
    ->update(['status' => 'No']);      

     $data = new declineapp([ 
    'apid' =>$request->get('app'),    
    'message' =>$request->get('decdetails'),
    'ctime' =>$ctime,
    'cdate' =>$cdate,
    ]); 

    $data->save();

   return view ('decline');  
     }

  public function cancelapp() {

      $adata= DB::table('applicant')          
            ->where('status', '=', 'No')
            ->orderBy('id', 'desc')
            ->paginate(100); 
      return view ('cancleapp',compact('adata'));  
     }   


  public function successapp() {

      $adata= DB::table('finalsub as fl')  
      ->select(
      'ap.id as apid',
      'ap.pdfup as pdfup',
      'fl.id as flid',      
      'applicant_name',
      'relation_name',
      'mobilenumber',
      'fappid',
      'mayorid',
      'fcdate',
      'fctime',
      'serial',
    )

    ->leftJoin('applicant as ap', 'fl.fappid', '=', 'ap.id')
    ->orderBy('flid', 'desc')  
    ->paginate(100); 
    return view ('successapp',compact('adata'));  
    }



  public function invest($id) {
       $invest= DB::table('applicant')
       ->where('id', '=',$id)
       ->first();
      return view ('investigationReport',compact('invest'));  
  }
   
    public function investsub(Request $request) {

     date_default_timezone_set('Asia/Dhaka');
     $ctime = date('h:i:s', time());

      $data = new Investigation([
     'apid' =>$request->get('appid'),
     'author' =>$request->get('logonuser'),  
     'details' =>$request->get('details'), 
     'plot' => $request->get('poltmiter'),  
     'idate' =>$request->get('cdate'),
	 'itime' =>$ctime,
      ]);

   /*dd($data);
    exit();*/
    $data->save();
    return view('/reportaccept');

    }


}
