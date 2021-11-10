<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    //user-login api
    public function userlogin(Request $request){
        $messages = [
            'phone.required' => 'Please enter a valid Phone Number',
            'password.required' => 'Password is required',
        ];

        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'password' => 'required',
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorStr = implode(', ', $errors);
            $data = [
                'error' => 1,
                'errorMsg' => $errorStr,
                'data' => '',
            ];
            return response()->json($data);
        }

        $credentials = $request->only(['password']);

        $credentials['phone'] = $request->get('phone');

        $token = Auth::attempt($credentials);

        if ($token) {
            $user = Auth::user();
            return new UserResource($user);
        }
        else {
            return response()->json(
                [
                    'error'    => 1,
                    'errorMsg' => 'Invalid Login Credentials',
                    'data'     => []
                ]
            );
        }
    }

    //user-register api
    public function userRegister(Request $request){

        $email_check= User::where('email', $request->email)->whereNotNull('email')->first();
        $mobile_check = User::where('phone', $request->phone)->first();

        if ($email_check) {
            return 'This Email has already been taken';
        }
        elseif ($mobile_check) {
            return 'This Mobile No. has already been taken';
        }
        else {
            $this->validate($request, [
                'name'        => 'required|string|max:255',
                'phone'       => 'required|numeric|regex:/(0)[0-9]/|not_regex:/[a-z]/|digits:11|unique:users',
                'division_id' => 'nullable',
                'district_id' => 'nullable',
                'area_id'     => 'nullable',
                'image'       => 'nullable',
                'email'       => 'nullable|unique:users',
                'password'    => 'required|string',
            ]);


            $img = base64_decode($request->image);

            $user = new User();

            if ($img) {
                $uniImage = uniqid(16);
                $Imagename = $uniImage . '_1' . '.jpg';
                $ImagePath = 'assets/backend/images/user_images/' . $Imagename;
                file_put_contents($ImagePath, $img);
                $user->image = $img ? $Imagename : null;
            }

            $user->name           = $request->name;
            $user->phone          = $request->phone;
            $user->division_id    = $request->division_id;
            $user->district_id    = $request->district_id;
            $user->area_id        = $request->area_id;
            $user->email          = $request->email;
            $user->password       = bcrypt($request->password);
            $user->save();

            return new UserResource($user);
        }

    }

    public function show($id,Request $request){
        $profile= User::find($id);
        return new UserResource($profile);

    }
    public function edit($id,Request $request){

        $email_check= User::where('email', $request->email)->where('id', '!=' , $id)->whereNotNull('email')->first();
        $mobile_check = User::where('phone', $request->phone)->where('id', '!=' , $id)->first();

        if ($email_check) {
            return 'This Email has already been taken';
        }
        elseif ($mobile_check) {
            return 'This Mobile No. has already been taken';
        }
        else {
//            $this->validate($request, [
//                'name' => 'string|max:255',
//                'phone' => 'numeric|regex:/(0)[0-9]/|not_regex:/[a-z]/|digits:11',
//                'email' => 'nullable',
//            ]);
            $user = User::find($id);
            $user->name           = $request->name;
            $user->phone          = $request->phone;
            $user->division_id    = $request->division_id;
            $user->district_id    = $request->district_id;
            $user->area_id        = $request->area_id;
            $user->email          = $request->email;
            $user->save();
            return new UserResource($user);

        }
    }
}
