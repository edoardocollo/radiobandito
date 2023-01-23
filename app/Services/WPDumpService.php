<?php

namespace App\Services;

use App\Models\Dj;
use App\Models\Page;
use App\Models\Podcast;
use App\Models\Show;
use Illuminate\Support\Facades\DB;

class WPDumpService
{


    public function hydrateFromWP(){
        $this->getPodcast();
        $this->getPages();
        $this->getShows();
        $this->getDjs();
    }

    public function getPodcast(){
                $podcasts = DB::table('radiobandito.OvASj2on_posts')
            ->join('radiobandito.OvASj2on_postmeta', 'radiobandito.OvASj2on_posts.ID', '=', 'radiobandito.OvASj2on_postmeta.post_id')
            ->where('radiobandito.OvASj2on_posts.post_type', '=', 'podcast')
            ->where('radiobandito.OvASj2on_postmeta.meta_key', '=', 'enclosure')
            ->select(
            	'radiobandito.OvASj2on_posts.ID',
                        'radiobandito.OvASj2on_posts.post_author',
                        'radiobandito.OvASj2on_posts.post_content',
                        'radiobandito.OvASj2on_posts.post_title',
                        'radiobandito.OvASj2on_posts.post_status',
                        'radiobandito.OvASj2on_posts.post_name',
                        'radiobandito.OvASj2on_postmeta.meta_value as url',
                        'radiobandito.OvASj2on_posts.post_date',
                        'radiobandito.OvASj2on_posts.post_modified'
            )
            ->get();
        foreach ($podcasts as $podcastDB){
            $podcast = new Podcast();
            $podcast->id = $podcastDB->ID;
            $podcast->post_author = $podcastDB->post_author;
            $podcast->content = $podcastDB->post_content;
            $podcast->title = $podcastDB->post_title;
            $podcast->status = $podcastDB->post_status;
            $podcast->post_name = $podcastDB->post_name;
            $podcast->url = $podcastDB->url;
            $imgId = DB::table('radiobandito.OvASj2on_postmeta')
                ->where('post_id', '=', $podcast->id)
                ->where('meta_key', '=', '_thumbnail_id')
                ->select('meta_value')
                ->first();
            $img = DB::table('radiobandito.OvASj2on_postmeta')
                ->where('post_id', '=', $imgId->meta_value)
                ->where('meta_key', '=', '_wp_attached_file')
                ->select('meta_value', 'post_id')
                ->first();
            $podcast->img_url = 'https://www.radiobandito.it/wp-content/uploads/'.$img->meta_value;
            $podcast->img_id = $img->post_id;
            $podcast->save();
        }
    }

    public function getPages(){
        $pages = DB::table('radiobandito.OvASj2on_posts')->where('post_type', '=', 'page' )->get();
        foreach ($pages as $page){
            $imgId = DB::table('radiobandito.OvASj2on_postmeta')
                ->where('post_id', '=', $page->ID)
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
                'id' => $page->ID,
                'post_author' => $page->post_author,
                'content' => $page->post_content,
                'title' => $page->post_title,
                'status' => $page->post_status,
                'post_name' => $page->post_name,
                'img_url' => ($img)?'https://www.radiobandito.it/wp-content/uploads/'.$img->meta_value:null,
                'img_id' => ($imgId)?$imgId->meta_value:null,
            ];
            Page::create($data);
        }
    }

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
