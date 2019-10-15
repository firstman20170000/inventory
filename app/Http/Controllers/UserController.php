<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Hash;
class Usercontroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');  
    }
    public function getviewusertable(Request $request)
    {
        return view('user-table');
    }
    public function getuserdata(Request $request)
    {
        $userdata=User::orderBy('id','desc')->get();
        return json_encode(['data' =>  $userdata]);
    }
    public function createuser(Request $request)
    {
        return view('user-create');
    }
    public function createnewuser(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'name'=>'required|min:6|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'password_confirmation' => 'required|min:6|max:20|same:password'  
        ]);
        $user=new User();
        $user->fname=$request->fname;
        $user->lname=$request->lname;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->name=$request->name;
        $user->save();  
        return redirect()->back()->with('msg2',1);
    }
    public function edituser($id,Request $request)
    {
        $user=User::where('id',$id)->first();
        return view('user-edit',['user'=>$user]);
    }
    public function updateuserinfo(Request $request)
    {
        $userid=$request->userid;
        $user=User::where('id',$userid)->first();
        $rule=array();
        if($user->fname!=$request->fname)
        {
            $rule['fname']='required';
        }
        if($user->lname!=$request->lname)
        {
            $rule['lname']='required';
        }
        if($user->name!=$request->name)
        {
            $rule['name']='required|min:6|unique:users';
        }
        if($user->email!=$request->email)
        {
            $rule['email']='required|email|unique:users';
        }
        
        if($request->password!="")
        {
            
            $rule['password']='required|min:6';
            $rule['password_confirmation']='required|min:6|max:20|same:password';
        }
        if(count($rule)!=0)
        {
            $request->validate($rule);
        }
        if($request->password!="")
        {
            $user->password=Hash::make($request->password);
        }
        $user->fname=$request->fname;
        $user->name=$request->name;
        $user->lname=$request->lname;
        $user->email=$request->email;
        $user->save();
        return redirect('/view/user-table');
    }
    public function deleteuser($id,Request $request)
    {
        $user=User::where('id',$id)->first();
        $user->delete();
        return redirect('/view/user-table');
    }
}
