<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Input;
use Log;

use Illuminate\Auth\Access\Gate;
use App\User;
use App\Http\Requests;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Closure;
use Spatie\Permission\Traits\HasRoles;


class PermissionController extends Controller
{
    public function index()
    {

        $userData = \App\user::all();
        $data['userList'] = $userData;

        $permissionList = DB::table('user_has_permissions')->get();
        $data['permissionList'] = $permissionList;


        return view('permissions.index', $data);
    }

    public function edit($id)
    {

        $user = \App\User::query()->findOrFail($id);


        if (Input::get('viewdashboard')) {
            if (!$user->can('viewdashboard')) {
                $user->givePermissionTo('viewbdashboard');

            }
        } else {
            $user->revokePermissionTo('viewbdashboard');

        }
        if (Input::get('viewblocks')) {
            if (!$user->can('viewblocks')) {
                $user->givePermissionTo('viewblocks');

            }
        } else {
            $user->revokePermissionTo('viewblocks');

        }


        if (Input::get('manageblocks')) {
            if (!$user->can('manageblocks')) {
                $user->givePermissionTo('manageblocks');

            }
        } else {
            $user->revokePermissionTo('manageblocks');

        }

        if (Input::get('viewrecyclesilos')) {
            if (!$user->can('viewrecyclesilos')) {
                $user->givePermissionTo('viewrecyclesilos');

            }
        } else {
            $user->revokePermissionTo('viewrecyclesilos');

        }

        if (Input::get('managerecyclesilos')) {
            if (!$user->can('managerecyclesilos')) {
                $user->givePermissionTo('managerecyclesilos');

            }
        } else {
            $user->revokePermissionTo('managerecyclesilos');

        }
        if (Input::get('viewprimesilos')) {
            if (!$user->can('viewprimesilos')) {
                $user->givePermissionTo('viewprimesilos');

            }
        } else {
            $user->revokePermissionTo('viewprimesilos');

        }
        if (Input::get('manageprimesilos')) {
            if (!$user->can('manageprimesilos')) {
                $user->givePermissionTo('manageprimesilos');

            }
        } else {
            $user->revokePermissionTo('manageprimesilos');

        }
        if (Input::get('manageusers')) {
            if (!$user->can('manageusers')) {
                $user->givePermissionTo('manageusers');

            }
        } else {
            $user->revokePermissionTo('manageusers');

        }
        return redirect('permissions');

    }

    public function editShow($id)
    {
        $permissionUser = DB::table('user_has_permissions')->where('user_id', '=', $id)->get();

        $permissionDetail = DB::table('permissions')->get();

        $data['permissionDetail'] = $permissionDetail;
        $data['permissionData'] = $permissionUser;

        $userData = DB::table('users')->where('id', '=', $id)->get();

        $data['userData'] = $userData;

        return view('permissions.edit', $data);
    }
}















