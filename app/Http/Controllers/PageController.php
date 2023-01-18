<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
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
     * @param  \App\Http\Requests\StorePageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageRequest  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }

    public function getPages(){
        $pages = Page::where('status', '=', 'publish')->get();
        return $pages;
    }
    public function getDataFromWP(){
//        $pages = DB::table('radiobandito.OvASj2on_posts')->where('post_type', '=', 'page' )->get();
//        foreach ($pages as $page){
//            $imgId = DB::table('radiobandito.OvASj2on_postmeta')
//                ->where('post_id', '=', $page->ID)
//                ->where('meta_key', '=', '_thumbnail_id')
//                ->select('meta_value')
//                ->first();
//            $img = null;
//            if ($imgId && property_exists($imgId, 'meta_value')){
//                $img = DB::table('radiobandito.OvASj2on_postmeta')
//                    ->where('post_id', '=', $imgId->meta_value)
//                    ->where('meta_key', '=', '_wp_attached_file')
//                    ->select()
//                    ->first();
//                $img = $img;
//            }
//            $data = [
//                'id' => $page->ID,
//                'post_author' => $page->post_author,
//                'content' => $page->post_content,
//                'title' => $page->post_title,
//                'status' => $page->post_status,
//                'post_name' => $page->post_name,
//                'img_url' => ($img)?'https://www.radiobandito.it/wp-content/uploads/'.$img->meta_value:null,
//                'img_id' => ($imgId)?$imgId->meta_value:null,
//            ];
//            Page::create($data);
//
//        }
    }
}
