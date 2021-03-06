<?php

namespace App\Http\Controllers;

use App\Nurse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\DataMappers\nurse_mapper;

class NurseController extends Controller implements GeneralUserController
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function update(Nurse $user)
    {
        if (Auth::user()->admin_privilege == "1"){
           $nMap = new nurse_mapper();
           $nMap->update_nurse($user);
       return redirect('/admin');
    }   
        else{
            return redirect('/nurses');
        }

    }


} 