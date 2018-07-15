<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role as RoleModel;
use Carbon\Carbon;

class RoleController extends Controller
{

    public function storeRole(RoleModel $roleModel, Request $request)
    {
        $now = Carbon::now()->toDateTimeString();
        $data = $request->all();
        $data['last_update'] = $now;
        $roleModel->create($data);
        \Session::flash("message", "the role created successfully");

        return redirect()->back();
    }

    public function updateRole($id, RoleModel $roleModel, Request $request)
    {
        $now = Carbon::now()->toDateTimeString();
        $data = $request->all();
        $data['last_update'] = $now;
        $role = $roleModel->find($id);
        $role->update($data);
        \Session::flash("message", "the role updated successfully");

        return redirect()->back();
    }

    public function deleteRole($id, RoleModel $roleModel, Request $request)
    {
        $now = Carbon::now()->toDateTimeString();
        $data = $request->all();
        $data['last_update'] = $now;
        $role = $roleModel->find($id);
        $role->forceDelete();
        \Session::flash("message", "the role deleted successfully");

        return redirect()->back();
    }

    public function deleteSelected(RoleModel $roleModel, Request $request)
    {
        $ids = explode(',', $request->ids);
        foreach ($ids as $id) {
            $now = Carbon::now()->toDateTimeString();
            $data['last_update'] = $now;
            $role = $roleModel->find($id);
            $role->update($data);

            $role->forceDelete();
        }
        return 'ok';
    }

    public function deleteAll(RoleModel $roleModel, Request $request)
    {
        $now = Carbon::now()->toDateTimeString();
        $roleModel->update(["last_update"=>$now]);
        \DB::table('roles')->truncate();
        return 'ok';
    }

   public function rolesSetup(RoleModel $roleModel)
   {
       $roles = $roleModel->all();
       $lastUpdate = \DB::table('roles')->orderBy('last_update', 'desc')->first();
       return view('admin.userControl.roles_setup', compact(["roles", "lastUpdate"]));
   }

    public function accessListing(RoleModel $roleModel)
    {
        $users = [];
        $roles = $roleModel->get();

        return view('admin.userControl.access_listing', compact(["users", "roles"]));
    }
 
}
