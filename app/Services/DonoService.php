<?php


namespace App\Services;


use App\Models\Dono;
use App\Models\Nucleo;

class DonoService
{
     public function dontDeleteDonoWithId1($id) {
        if($id === 1){
            return true;
        }
     }

     public function updateNucleoBeforeDeleteDono($id){
            return true;
     }
    /*DB::transaction(function () {
        DB::update('update users set votes = 1');

        DB::delete('delete from posts');
    });*/
}
