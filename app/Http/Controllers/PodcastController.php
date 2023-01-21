<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePodcastRequest;
use App\Http\Requests\UpdatePodcastRequest;
use App\Models\Podcast;
use Illuminate\Support\Facades\DB;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePodcastRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePodcastRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePodcastRequest  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePodcastRequest $request, Podcast $podcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Podcast $podcast)
    {
        //
    }

    public function getPodcasts(){

//        $podcasts = DB::table('radiobandito.OvASj2on_posts')
//            ->join('radiobandito.OvASj2on_postmeta', 'radiobandito.OvASj2on_posts.ID', '=', 'radiobandito.OvASj2on_postmeta.post_id')
//            ->where('radiobandito.OvASj2on_posts.post_type', '=', 'podcast')
//            ->where('radiobandito.OvASj2on_postmeta.meta_key', '=', 'enclosure')
//            ->select(
//            	'radiobandito.OvASj2on_posts.ID',
//                        'radiobandito.OvASj2on_posts.post_author',
//                        'radiobandito.OvASj2on_posts.post_content',
//                        'radiobandito.OvASj2on_posts.post_title',
//                        'radiobandito.OvASj2on_posts.post_status',
//                        'radiobandito.OvASj2on_posts.post_name',
//                        'radiobandito.OvASj2on_postmeta.meta_value as url',
//                        'radiobandito.OvASj2on_posts.post_date',
//                        'radiobandito.OvASj2on_posts.post_modified'
//            )
//            ->get();
//        foreach ($podcasts as $podcastDB){
//            $podcast = new Podcast();
//            $podcast->id = $podcastDB->ID;
//            $podcast->post_author = $podcastDB->post_author;
//            $podcast->content = $podcastDB->post_content;
//            $podcast->title = $podcastDB->post_title;
//            $podcast->status = $podcastDB->post_status;
//            $podcast->post_name = $podcastDB->post_name;
//            $podcast->url = $podcastDB->url;
//            $imgId = DB::table('radiobandito.OvASj2on_postmeta')
//                ->where('post_id', '=', $podcast->id)
//                ->where('meta_key', '=', '_thumbnail_id')
//                ->select('meta_value')
//                ->first();
//            $img = DB::table('radiobandito.OvASj2on_postmeta')
//                ->where('post_id', '=', $imgId->meta_value)
//                ->where('meta_key', '=', '_wp_attached_file')
//                ->select('meta_value', 'post_id')
//                ->first();
//            $podcast->img_url = 'https://www.radiobandito.it/wp-content/uploads/'.$img->meta_value;
//            $podcast->img_id = $img->post_id;
//            $podcast->save();
//        }

//'SELECT
//	radiobandito.OvASj2on_posts.ID,
//    radiobandito.OvASj2on_posts.post_author,
//    radiobandito.OvASj2on_posts.post_content,
//    radiobandito.OvASj2on_posts.post_title,
//    radiobandito.OvASj2on_posts.post_status,
//    radiobandito.OvASj2on_posts.post_name,
//    radiobandito.OvASj2on_postmeta.meta_value as url,
//	radiobandito.OvASj2on_posts.post_date,
//    radiobandito.OvASj2on_posts.post_modified
//FROM radiobandito.OvASj2on_posts
//left join radiobandito.OvASj2on_postmeta on radiobandito.OvASj2on_posts.ID = radiobandito.OvASj2on_postmeta.post_id
//where radiobandito.OvASj2on_posts.post_type = 'podcast'
//and radiobandito.OvASj2on_postmeta.meta_key = 'enclosure'
//;'

        $podcasts = Podcast::paginate(6)->sortByDesc('modified_at');
        return $podcasts;
    }
}
