<?php
namespace App\Http\Controllers\Admin;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User as UserModel;
use App\Role as RoleModel;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function storeUser(UserModel $userModel, UserRequest $request)
    {
        $data                      = $request->all();
        $data["password"]          = bcrypt($data["password"]);
        $confirmation_code         = str_random(30);
        $data["confirmation_code"] = $confirmation_code;
        $now                       = Carbon::now()->toDateTimeString();
        $data["last_update"]       = $now;
        $data["is_admin"]          = 1;
        $user                      = $userModel->create($data);
        if(isset($data["permission"])) {
            $permissions               = $data["permission"];
            foreach ($permissions as $permission) {
                Permission::create(["name"=>$permission, "user_id" => $user->id]);
            }
        }
        // send activation code to use Email
        $view_data['email']        = $user->email;
        $view_data['name']         = $user->name;
        $view_data['link']         = url("/patient/activate_account/$confirmation_code");
        $to_email_id               = $user->email;
        $subject                   = 'Verify your email address';

        Mail::send(['html' => 'emails.email_verification'], ['view_data' => $view_data],
            function ($message) use ($to_email_id, $subject) {
                $message->to($to_email_id)->subject($subject);
            });
        \Session::flash("message", "the user created successfully");

        return redirect()->back();
    }

    public function updateUser($id, UserModel $userModel, Request $request)
    {
        $data                = $request->all();
        $user                = $userModel->find($id);
        $data["password"]    = isset($data["password"]) && !empty($data["password"]) ? bcrypt($data["password"]) : $user->password;
        $now                 = Carbon::now()->toDateTimeString();
        $data["last_update"] = $now;
        $data["is_admin"]    = 1;
        $user->update($data);
        if(isset($data["permission"])) {
            $permissions = $data["permission"];
            \DB::table('permissions')->where("user_id", $user->id)->delete();
            foreach ($permissions as $permission) {
                Permission::create(["name" => $permission, "user_id" => $user->id]);
            }
        }
        \Session::flash("message", "the user updated successfully");

        return redirect()->back();
    }

    public function deleteUser($id, UserModel $userModel, Request $request)
    {
        $data = $request->all();
        $user = $userModel->find($id);
        $now  = Carbon::now()->toDateTimeString();
        $user->update(["last_update"=>$now]);
        $user->permissions()->forceDelete();

        $user->forceDelete();
        \Session::flash("message", "the user deleted successfully");

        return redirect()->back();
    }

    public function deleteSelected(UserModel $userModel, Request $request)
    {
        $ids = explode(',', $request->ids);
        foreach ($ids as $id) {
            $user = $userModel->find($id);
            $user->permissions()->forceDelete();
            $user->forceDelete();
        }
        return 'ok';
    }

    public function deleteAll(UserModel $userModel, Request $request)
    {
        \DB::table('permissions')->truncate();
        \DB::table('users')->truncate();
        return 'ok';
    }

    public function accessListing(UserModel $userModel,RoleModel $roleModel)
    {
        $users      = $userModel->get();
        $roles      = $roleModel->get();
        $lastUpdate = \DB::table('users')->orderBy('last_update', 'desc')->first();
        return view('admin.userControl.access_listing', compact(["users", "roles", "lastUpdate"]));
    }
}
