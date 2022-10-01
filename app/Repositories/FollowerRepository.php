<?php

namespace App\Repositories;
use App\Models\Follower;
use DB;

class FollowerRepository
{
    
    public function toggleFollow($data){

       try {
            DB::beginTransaction();

            if(auth()->id() == $data['to_id'] || $data['to_id'] == auth()->id())
                 throw new \Exception("Error Processing Request", 1);

            $follower = Follower::where('from_id', auth()->id())->where('to_id', $data['to_id'])->first();

            if($follower){
                $follower->delete();
            }else{

                $follower = Follower::create([
                    'from_id' => auth()->id(),
                    'to_id' => $data['to_id']
                 ]);

            }
                
            DB::commit();

            return true;

       } catch (\Exception $e) {
           
           DB::rollback();
           toastr()->error("An error occured");
           return false;
       }

    }


    // public function unFollow($data){

    //    try {
    //         DB::beginTransaction();                 
    //         $follower = Follower::where('from_id', auth()->id())->where('to_id', $data['to_id'])->first();
    //         $follower->delete();
    //         return true;
    //         DB:commit();
    //    } catch (\Exception $e) {
           
    //        DB::rollback();
    //        toastr()->error("An error occured");
    //        return false;
    //    }

    // }


}
