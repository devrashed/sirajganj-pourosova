<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect; 
use App\User;
use DB;

class userController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 /*   public function index()
    {
        return view('home');
    }
*/

 protected function Userstore(Request $request)
    {

    $data = new User([
        'name' => $request->get('name'),
        'email'=> $request->get('email'),
        'utype'=> $request->get('usertype'),
        'password'=> bcrypt($request->get('password')),
        'status'=> $request->get('ustatus'),
        
   ]);
         
/*  dd($data);
  die();*/

      $data->save();
      return redirect('/createuser')->with('success', 'New User Create Successfully');
    }



  public function viewuser() 
     {
      $alluser = User::paginate(20); //all()->toArray();

        /*$data= DB::table('users')
            ->select('users.*')         
            ->orderBy('status', 'desc')
            ->paginate(20); */
       return view ('viewuser',compact('alluser'));  
     }

      public function Useredit($id)
    {
       //$data= User::findorfail($id);
  
        $data= DB::table('users')
        ->select('users.*')         
        ->where('users.id', '=', $id)
        ->first();  

   /*  dd($data);
  die();*/

    
        return view ('editUser',compact('data'));

          } 


     public function userDel($id) {

       $ddd=DB::table('users')->where('id',$id)->delete();
       return redirect('/viewser')->with('success','User Information delete'); 
    }


    public function userupdate(Request $request, $id)
    {  

      $data = User::find($id);
      $data->name=$request->input('name');
      $data->email=$request->input('email');
      $data->utype=$request->input('utype');
      $data->password=$request->input('password');
         

      $data->save();    

      $request->session()->flash('message', 'Successfully update Data');
      return redirect('/viewser'); 
    }

    
    public function userlist()
    {
       /*$listuser=User::all();*/

           $listusers= DB::table('users')
            ->select('users.*')         
            ->where([
                    ['utype', '=', 'sales']
                 ])->get();
           
    /*    dd($listuser);
        exit();*/

        return view('create_client',compact('listusers'));
        //return view('create_client')->withlist($listuser);
    }


      public function activestatus(Request $request,$id)
    {

      $data = User::find($id);      
      $data->status='Active';    

      $data->save();

     return Redirect::back()->with('error', '');

      //return view('viewuser');
        //return view('create_client')->withlist($listuser);
    }

  public function deactivestatus(Request $request,$id)
    {

      $data = User::find($id);      
      $data->status='Deactive';    

      $data->save();

      return Redirect::back()->with('error', '');

      //return view('viewuser');
        //return view('create_client')->withlist($listuser);
    }


       public function surveyarlist()
    {
       //$data= User::findorfail($id);
  


      return view ('pappdetails',compact('data'));

          } 



}
