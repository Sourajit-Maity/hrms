<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\SubRole;
use App\Usermanagement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SubroleController extends Controller
{
    public function addsubrole()

    {
        $roles= DB::table('azhrms_user_role')->get();
     
        return view('backend.role.addsubrole',compact('roles'));
    }

    public function submitrole(Request $request)
    {
        $this->validate($request, [
 
            'respname'  => 'required|string|max:120',
            'resp_display_name'  => 'required',
            'role_id' => 'required'
        ]);
 
        SubRole::create([
            'respname' => $request->get('respname'),
            'resp_display_name' => $request->get('resp_display_name'),
            'role_id' => $request->get('role_id'),
            'password' => bcrypt($request->get('password'))
        ]);
 
 
        return Redirect::to('view-sub-role')->with('success','Subrole Created Successfully!');
    }

    public function viewsubrole(Request $request)
   {

    
       $subrole = DB::table('azhrms_user_role_categories')
       ->select('respname','resp_display_name','azhrms_user_role.name as name','azhrms_user_role.display_name','azhrms_user_role_categories.id as id')
       ->join('azhrms_user_role','azhrms_user_role_categories.role_id','=','azhrms_user_role.id')
       ->get();
      
     
      return view('backend.role.viewsubrole',compact('subrole',));
   }

   public function deletesubrole(Request $request,$id)
    {

        SubRole::where('id',$id)->delete();
        
        return Redirect::back();
    }
    function Conform_Delete()
    {
        return confirm("Are You Sure Want to Delete?");

    }


    public function editsubRole($id)

    {
        $roles= DB::table('azhrms_user_role')->get();
        $roleedit= DB::table('azhrms_user_role_categories')->get();
        $roleedit = SubRole::findOrFail($id);
 
        return view('backend.role.editsubrole', compact('roleedit','roles') );
    }
 
 
    public function updatesubrole($id, Request $request)
    {
        $this->validate($request, [
 
            'respname'  => 'required|string|max:120',
            'resp_display_name'  => 'required',
           
        ]);
 
        $subrole= SubRole::findOrFail($id);
        $subrole->update($request->all());
        return Redirect::to('view-sub-role')->with('success','Successfully Updated!');
    }
 
}
