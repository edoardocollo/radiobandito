<?php

namespace App\Services;

use App\Models\Dj;
use App\Models\Show;
use Illuminate\Support\Facades\DB;

class WPDumpService
{

    public function getShows(){
        $Programs = DB::table('radiobandito.OvASj2on_posts')->where('post_type', '=', 'shows' )->where('post_status', '=', 'publish')->get();
        foreach ($Programs as $program){
            $imgId = DB::table('radiobandito.OvASj2on_postmeta')
                ->where('post_id', '=', $program->ID)
                ->where('meta_key', '=', '_thumbnail_id')
                ->select('meta_value')
                ->first();
            $img = null;
            if ($imgId && property_exists($imgId, 'meta_value')){
                $img = DB::table('radiobandito.OvASj2on_postmeta')
                    ->where('post_id', '=', $imgId->meta_value)
                    ->where('meta_key', '=', '_wp_attached_file')
                    ->select()
                    ->first();
                $img = $img;
            }
            $data = [
                'id' => $program->ID,
                'post_author' => $program->post_author,
                'content' => $program->post_content,
                'title' => $program->post_title,
                'status' => $program->post_status,
                'post_name' => $program->post_name,
                'img_url' => ($img)?'https://www.radiobandito.it/wp-content/uploads/'.$img->meta_value:null,
                'img_id' => ($imgId)?$imgId->meta_value:null,
            ];
            Show::create($data);
//
        }

    }
    public function getDjs(){
        $Djs = DB::table('radiobandito.OvASj2on_posts')->where('post_type', '=', 'members' )->where('post_status', '=', 'publish')->get();
        foreach ($Djs as $dj){
            $imgId = DB::table('radiobandito.OvASj2on_postmeta')
                ->where('post_id', '=', $dj->ID)
                ->where('meta_key', '=', '_thumbnail_id')
                ->select('meta_value')
                ->first();
            $img = null;
            if ($imgId && property_exists($imgId, 'meta_value')){
                $img = DB::table('radiobandito.OvASj2on_postmeta')
                    ->where('post_id', '=', $imgId->meta_value)
                    ->where('meta_key', '=', '_wp_attached_file')
                    ->select()
                    ->first();
            }

            $data = [
                'id' => $dj->ID,
                'post_author' => $dj->post_author,
                'content' => $dj->post_content,
                'title' => $dj->post_title,
                'status' => $dj->post_status,
                'post_name' => $dj->post_name,
                'img_url' => ($img)?'https://www.radiobandito.it/wp-content/uploads/'.$img->meta_value:null,
                'img_id' => ($imgId)?$imgId->meta_value:null,
            ];
            Dj::create($data);
//
        }

    }

}
