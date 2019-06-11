<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInformation;
use App\Http\Resources\UserInfoResource;
use App\Http\Resources\UserInfoResourceCollection;

class UserInfo extends Controller
{
    /**
     *
     */
    public function show(UserInformation $UserInfo): UserInfoResource
    {
        return new UserInfoResource($UserInfo);
    }

    public function index(): UserInfoResourceCollection
    {
        return new UserInfoResourceCollection(UserInformation::paginate());
    }
}
