<?php

namespace App\Http\Controllers\API;

use App\FindPeople;
use App\Http\Controllers\Controller;
use App\Http\Resources\FindPeopleCollection;
use App\User;
use Illuminate\Http\Request;

class FindPeopleController extends Controller
{
    public function findPeople(Request $request, $id, $lat, $lon, $from, $to){
        $search = FindPeople::where('from',$from)->where('to',$to)->where('user_id1','!=',$id)->whereNull('user_id2')->orderBy('created_at','DESC')->first();

        if ($search){
            $user1_info = User::where('id',$search->user_id1)->get();
            $user2_info = User::where('id',$id)->get();
            $updates = array('user_id2'=>$id, 'lat2'=>$lat, 'lon2'=>$lon);
            $search->update($updates);

            return response()->json(
            [
                'error'    => 0,
                'errorMsg' => '',
                'data'     => [
                    'user1'=> $search->user_id1,
                    'user1_info'=>$user1_info->toArray(),
                    'lat1'=> $search->lat1,
                    'lon1'=> $search->lon1,
                    'from'=> $search->from,
                    'to'=> $search->to,
                    'user2'=> $search->user_id2,
                    'user2_info'=>$user2_info->toArray(),
                    'lat2'=> $search->lat2,
                    'lon2'=> $search->lon2,
                ]
            ]
            );
        }
        else {
            $find = new FindPeople();
            $find->user_id1 = $id;
            $find->lat1 = $lat;
            $find->lon1 = $lon;
            $find->from = $from;
            $find->to = $to;
            $find->save();
            return response()->json(
                [
                    'error'    => 0,
                    'errorMsg' => '',
                    'data'     => []
                ]
            );
        }

    }

    public function getPeople($id){
        $find = FindPeople::where('user_id1',$id)->orWhere('user_id2',$id)->get();
        return new FindPeopleCollection($find);
    }

    public function checkRequest($lat, $lon, $req_t_id, $user_id, $flag){
        $check = FindPeople::find($req_t_id);
        if($check){
            if ($flag == 'user_id1'){
                $update1 = array('user_id1'=>$user_id, 'lat1'=>$lat, 'lon1'=>$lon);
                $check->update($update1);
            }
            elseif($flag == 'user_id2'){
                $update2 = array('user_id2'=>$user_id, 'lat2'=>$lat, 'lon2'=>$lon);
                $check->update($update2);
            }

            $user1_info = User::where('id',$check->user_id1)->get();
            $user2_info = User::where('id',$check->user_id2)->get();

            return response()->json(
                [
                    'error'    => 0,
                    'errorMsg' => '',
                    'data'     => [
                        'details' =>   $check,
                        'user1_info'=> $user1_info->toArray(),
                        'user2_info'=> $user2_info->toArray(),
                    ]
                ]
            );
        }
    }
}
