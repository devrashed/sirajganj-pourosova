<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect; 
use App\applicant;
use App\User;
use App\Finalsub;
use App\Appmanagement;
use App\Cash;
use DB;
use Auth;
use PDF;
use App\Mutiimage;
use App\Investigation;
use App\Requestcash;
use App\planapprove;

class modaretController extends Controller
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
 
  
  
  public function submitsurvayer(Request $request) 
     {
    
     $request->validate([
        /*'admindetails'=>'required',*/
        'sendername'=> 'required|not_in:0',
     ]); 

     $updata= applicant::where('id', $request->get('appid'))
     ->update(['surstatus' => 'Yes']);

    date_default_timezone_set('Asia/Dhaka');
    $ctime = date('h:i:s', time()); 

    $cdate=date("yy-m-d"); 

    $data = new Appmanagement([ 
    'sender_id' =>$request->get('currentuser'),
    'reciver_id' =>$request->get('sendername'),
    'acomment' =>$request->get('admindetails'),
    'appid' => $request->get('appid'),
    'appstatus' => $request->get('substatus'),
    'adate' =>$cdate,
    'atime' =>$ctime,
    ]);  

  $data->save();
  return view ('submit_notice'); 
  
   }

 
  
public function subapp(Request $request) 
   {
    
     $request->validate([
        'comdetails'=>'required',
        'sendername'=> 'required',
       
     ]); 
  
    date_default_timezone_set('Asia/Dhaka');
    $ctime = date('h:i:s', time()); 

    $cdate=date("yy-m-d"); 

    $data = new Appmanagement([ 
    'sender_id' =>$request->get('currentuser'),
    'reciver_id' =>$request->get('sendername'),
    'acomment' =>$request->get('comdetails'),
    'appid' => $request->get('appid'),
    'adate' =>$cdate,
    'atime' =>$ctime,
    ]);  

   /*dd($data);
    exit();*/

    $data->save();
    return view ('submit_notice'); 
  
   }

 public function Adminoldapp() 
   {
    // self::olddetailsapp($id);

     $currentuer=Auth::user()->id; 

     $recivesub= DB::table('appmanagement as am')
     ->select(
     'am.amid',
     'ap.id as apid', 
     'ap.applicant_name',
     'ap.relation_name',
     'ap.presentaddress',
     'ap.mobilenumber',
     'ap.pdfup as pdfup',
     'u.utype',
     'u.name',
     'serial',
     ) 
     ->leftJoin('applicant as ap', 'am.appid', '=', 'ap.id')
     ->leftJoin('users as u', 'am.sender_id', '=', 'u.id')
     ->where('am.reciver_id', '=',$currentuer)
     ->where('am.appstatus', '=','send')
     ->where('ap.surstatus', '=','Yes')
     ->orderBy('amid','desc')
     //->take(1)
     ->get();     

      return view ('oldapplicant',compact('recivesub'));   
   } 



public function olddetailsapp($id) 
     {

    $currentuer=Auth::user()->utype;

    $adata= DB::table('appmanagement as am')               
    ->leftJoin('applicant as ap', 'am.appid', '=', 'ap.id')
	->where('am.appstatus', '=', 'send')
    ->where('ap.id', '=', $id)
    ->first();		

    $userlist= DB::table('users')
    ->select('users.*')         
    ->where('utype', '<>', $currentuer)
    ->get();

    $comment= DB::table('appmanagement as am')  
    ->leftJoin('applicant as ap', 'am.appid', '=', 'ap.id')
    ->leftJoin('users as u', 'am.sender_id', '=', 'u.id')
    ->where('am.appid', '=', $id)
    ->orderBy('amid', 'ASC')  
    ->get();
       
    $report= DB::table('invest as iv')  
    ->leftJoin('applicant as ap', 'iv.apid', '=', 'ap.id')
    ->leftJoin('users as u', 'iv.author', '=', 'u.id')
    ->orderBy('iv.id', 'desc') 
    ->where('iv.apid', '=', $id) 
    ->get();  

    $cash= DB::table('cash as ca')  
    ->leftJoin('applicant as ap', 'ca.cappid', '=', 'ap.id')     
    ->where('ca.cappid', '=', $id) 
    ->get();

   /*dd($cash);
    exit();*/

return view ('Old_detailsApp',compact('adata','userlist','report','comment','cash'));  
     }
      


public function Adminoldappsubmit(Request $request) 
     {

     $request->validate([
    /*'admindetails'=>'required',*/
    'sendername'=> 'required|not_in:0',
       
     ]); 

     $updata= Appmanagement::where('amid', $request->get('apman'))
     ->update(['appstatus' => 'update']);

    date_default_timezone_set('Asia/Dhaka');
    $ctime = date('h:i:s', time()); 

    $cdate=date("yy-m-d"); 

    $data = new Appmanagement([ 
    'sender_id' =>$request->get('currentuser'),
    'reciver_id' =>$request->get('sendername'),
    'acomment' =>$request->get('admindetails'),
    'appid' => $request->get('appid'),
    'appstatus' => $request->get('apstatus'),
    'adate' =>$cdate,
    'atime' =>$ctime,
    ]);  

  /*  dd($data); 
    exit();*/

    $data->save();
    return view ('submit_notice');  
   }


     public function cashdata($id) 
     {

        $adata= DB::table('applicant as ap') 
        ->where('ap.id', '=', $id)
        ->first(); 

      return view ('cashupdate',compact('adata'));    
     }


 public function cashcreate(Request $request) 
     {
     
     $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:6000',
            'amount' => 'required',
            'cdate' => 'required',
            'totalland' => 'required',
        ]);

      
    //if ($request->file('pfile')=='') {
    
    /* $file = $request->file('pfile');
     $desti_path = base_path() . '/public/upload';
     $extension = $file->getClientOriginalExtension();
     $files = $file->getClientOriginalName();
     $fileName = $files.'_'.time().'.'.$extension;
     $file->move($desti_path,$fileName);*/

    //}
 

    $data = new Cash([
    $file = $request->input('image'),
    $photo = $request->file('image')->getClientOriginalName(),
    $destination = base_path() . '/public/upload',
    $request->file('image')->move($destination, $photo),
  
 
    'amount' =>$request->get('amount'),
    'tland' =>$request->get('totalland'),
    'totalvat' => $request->get('tvate'),
    'totalaykor' => $request->get('toaykor'),
    'cappid' =>$request->get('apid'),
    'cdate' =>$request->get('cdate'),
    'image' =>$photo,
    //'pdfile' =>$files,
    
    ]);  

   /*dd($data);
    exit();*/

    $data->save();
    //return redirect()->back()->with('success', 'File uploaded successfully.');
    return redirect('/oldapplication');
   }
   
   public function pdfdownload($id) 
    {
        $expdf= DB::table('applicant as ap')
        ->leftJoin('appmanagement as am', 'ap.id', '=', 'am.appid')
        ->leftJoin('invest as iv', 'ap.id', '=', 'iv.apid')
        ->leftJoin('cash as ca', 'ap.id', '=', 'ca.cappid')
        //s->leftJoin('users as us', 'iv.author', '=', 'us.id')
        ->where('ap.id', '=', $id)
        ->get();  
       
        /*dd($appdata);
        exot();*/
      
      $pdf = PDF::loadView('downloadpdf', compact('expdf'));
      return $pdf->download('application.pdf');     
    } 


    public function imagecreate() 
    {
        return view('mutiimge');
    }    


   
   public function imagestore(Request $request) 
    {
    
  // $input=$request->all();
    $images=array();
    if($files=$request->file('mimage')){
        foreach($files as $file){
            $desti_path = base_path() . '/public/upload';
            $name=$file->getClientOriginalName();
            $file->move($desti_path,$name);
            $images[]=$name;
        }
    }
    /*Insert your data*/
    
    $data = new mutiimage([

    //$data = mutiimage::insert( [
        'mimage'=>  implode("|",$images),
        'name' =>$request->get('mname'),
        'position' =>$request->get('mposition'),
        //you can put other insertion here
    ]);     
 
    $data->save();

    return redirect()->back()->with('success', 'File uploaded successfully.');

    }      

  public function mayorsub(Request $request) 
    {
      
    date_default_timezone_set('Asia/Dhaka');
    $ctime = date('h:i:s', time()); 
    $cdate=date("yy-m-d"); 

    $updata= Appmanagement::where('appid', $request->get('appid'))
    ->update(['appstatus' => 'update']);    
    
    $data = new Finalsub([ 
    'fappid' =>$request->get('appid'),
    'mayorid' =>$request->get('currentuser'),
    'fcdate' =>$cdate,
    'fctime' =>$ctime,
    ]);  
 
 /*   dd($data);
    exit();*/
    $data->save(); 
     

    $url = "https://smsplus.sslwireless.com";
    $number=$request->get('mobile');
    $sms_content="আপনার ভবন নির্মন আবেদনটি সফলভাবে সম্পন্ন হয়েছে। পরবর্তী নির্দেশনার জন্য পৌরসভা অফিসে এসে যোগাযোগ করুন।";
    
	  $msisdn = $number;
    $messageBody = $sms_content;
    $csmsId = "4437343343P3Z684333392";
    $this->singleSms($msisdn, $messageBody, $csmsId);
    
    return view ('submit_notice');
  }   

public function smsrequest($id)
{
    $adata= DB::table('applicant') 
    ->where('id', '=',$id)
    ->first();   
    return view ('sendsms',compact('adata'));  
}


public function requestcreat(Request $request) 
   {    

    $data = new Requestcash([ 
    'rappid' =>$request->get('apid'),
    'sendsms' =>$request->get('details'),
    ]);
    
    $data->save();
    
    $sendsms=$request->get('details'); 

    $url = "https://smsplus.sslwireless.com";
    $number=$request->get('mobilenumber');
    $msisdn = $number;
    $messageBody = $sendsms;
    $csmsId = "4437343343P3Z684333392";
    $this->singleSms($msisdn, $messageBody, $csmsId);
    
    return redirect()->back()->with('success', 'সফল ভাবে এস এম এস পাঠানো হয়েছে।');
}


 


public function completeapps($id) 
{   
    $data = DB::table('applicant as ap')    
    ->leftJoin('cash as ca', 'ap.id', '=', 'ca.cappid')       
    ->where('ap.id', '=', $id)
    ->first();     
   
    $comment= DB::table('appmanagement as am')  
    ->leftJoin('applicant as ap', 'am.appid', '=', 'ap.id')
    ->leftJoin('users as u', 'am.sender_id', '=', 'u.id')
    ->where('am.appid', '=', $id)
    ->orderBy('amid', 'ASC')  
    ->get(); 
       
    $report= DB::table('invest as iv')  
    ->leftJoin('applicant as ap', 'iv.apid', '=', 'ap.id')
    ->leftJoin('users as u', 'iv.author', '=', 'u.id')
    ->orderBy('iv.id', 'desc') 
    ->where('iv.apid', '=', $id) 
    ->get();  

    $authentic=DB::table('appmanagement as apm') 
    ->leftJoin('users as ur', 'apm.reciver_id', '=', 'ur.id')  
    ->where('apm.appstatus', '=', 'update') 
    ->where('ur.utype', '=', 'Sub.Asst.Engineer-1')
    ->where('apm.appid', '=', $id) 
    ->get();
   
    $permission=DB::table('appmanagement as apm') 
    ->leftJoin('users as ur', 'apm.reciver_id', '=', 'ur.id')  
    ->where('apm.appstatus', '=', 'update') 
    ->where('ur.utype', '=', 'Sub.Asst.Engineer-2')
    ->where('apm.appid', '=', $id) 
    ->get();

    /*dd($authentic);
    exit();*/

return view ('successapp_details', compact('data','comment','report','authentic','permission'));  
} 
 

public function printsection($id) 
{   
    $data = DB::table('applicant as ap')    
    ->leftJoin('cash as ca', 'ap.id', '=', 'ca.cappid')       
    ->where('ap.id', '=', $id)
    ->first();     
   
    $comment= DB::table('appmanagement as am')  
    ->leftJoin('applicant as ap', 'am.appid', '=', 'ap.id')
    ->leftJoin('users as u', 'am.sender_id', '=', 'u.id')
    ->where('am.appid', '=', $id)
    ->orderBy('amid', 'ASC')  
    ->get(); 
       
    $report= DB::table('invest as iv')  
    ->leftJoin('applicant as ap', 'iv.apid', '=', 'ap.id')
    ->leftJoin('users as u', 'iv.author', '=', 'u.id')
    ->orderBy('iv.id', 'desc') 
    ->where('iv.apid', '=', $id) 
    ->get();  

    $authentic=DB::table('appmanagement as apm') 
    ->leftJoin('users as ur', 'apm.reciver_id', '=', 'ur.id')  
    ->where('apm.appstatus', '=', 'update') 
    ->where('ur.utype', '=', 'Sub.Asst.Engineer-1')
    ->where('apm.appid', '=', $id) 
    ->get();
   
    $permission=DB::table('appmanagement as apm') 
    ->leftJoin('users as ur', 'apm.reciver_id', '=', 'ur.id')  
    ->where('apm.appstatus', '=', 'update') 
    ->where('ur.utype', '=', 'Sub.Asst.Engineer-2')
    ->where('apm.appid', '=', $id) 
    ->get();

   

return view ('print_completeapp', compact('data','comment','report','authentic','permission'));  
} 


public function cancledeatils($id) 
{ 
  $data = DB::table('applicant as ap')                  
        ->where('ap.id', '=', $id)
        ->first(); 
  return view ('cancelApp_details',compact('data'));   

}

public function reportype(Request $request)
    {
       $request->validate([
        /*'admindetails'=>'required',*/
        'reporttype'=> 'required|not_in:0',       
      ]); 

       $search = $request->get('reporttype');
       $startdate = $request->get('startdate');
       $enddate = $request->get('enddate');

       $datas= DB::table('applicant as ap')     
       ->whereBetween('ap.cdate', [$startdate, $enddate])
       ->where('ap.status','=',$search)  
       ->paginate(100);  
     
      /*dd($datas);
      exit();*/

      return view ('report',compact('datas'));          
    }

public function reportdeatils($id) 
{   
   $data = DB::table('applicant as ap')    
        ->leftJoin('cash as ca', 'ap.id', '=', 'ca.cappid')       
        ->where('ap.id', '=', $id)
        ->first();     
       
   $comment= DB::table('appmanagement as am')  
        ->leftJoin('applicant as ap', 'am.appid', '=', 'ap.id')
        ->leftJoin('users as u', 'am.sender_id', '=', 'u.id')
        ->where('am.appid', '=', $id)
        ->orderBy('amid', 'desc')  
        ->get(); 

           
    $report= DB::table('invest as iv')  
    ->leftJoin('applicant as ap', 'iv.apid', '=', 'ap.id')
    ->leftJoin('users as u', 'iv.author', '=', 'u.id')
    ->orderBy('iv.id', 'desc') 
    ->where('iv.apid', '=', $id) 
    ->get();  

   /*dd($data);
   exit();*/ 
  return view ('report_details ',compact('data','comment','report'));  
} 


  public function planapprove() 
  {
   return view ('planapprov');
  }  

 
 public function approvecreate(Request $request)
 {

  date_default_timezone_set('Asia/Dhaka');
  $ptime = date('h:i:s', time()); 

  $pdate=date("yy-m-d");


  $data = new planapprove([ 
  'plname' =>$request->get('plname'),
/*  'pltype' =>$request->get('relationtype'),*/
  'pltypename' =>$request->get('relationame'),
  'plvillage' =>$request->get('village'),
  'plfoor' => $request->get('floorplan'),
  'plaapplicantid' => $request->get('appnumber'),
  'pldate' =>utf8_encode($pdate),
  ]);  

   /* dd($data); 
    exit();*/

    $data->save();
   //return view ('viewAllplan');

  return Redirect::back()->with('message',' Successful Insert !');

 }

  public function viewallplan(){

  $showplan=DB::table('planapprove as pl') 
  ->leftJoin('applicant as ap', 'pl.plaapplicantid', '=', 'ap.serial')  
 /// ->get();
  ->paginate(25); 

   return view ('viewAllplan',compact('showplan'));
  }

  public function detailpan($id)
  {
     
  $viewdetails=DB::table('planapprove as pl') 
  ->where('pl.plid', '=', $id) 
   ->first();  
  return view ('viewdetailplan',compact('viewdetails'));
  
  }


}