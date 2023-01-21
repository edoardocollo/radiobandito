<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//SELECT
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
class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_author',
        'content',
        'title',
        'status',
        'post_name',
        'url',
        'img_url',
        'img_id',
    ];

    public function jsonSerialize(): mixed
    {
        return [
            'post_author'=> $this->post_author,
            'content'=> $this->content,
            'title'=> $this->title,
            'status'=> $this->status,
            'post_name'=> $this->post_name,
            'url'=> $this->url,
            'img_url'=> $this->img_url,
            'img_id'=> $this->img_id,
            'updated_at' => $this->updated_at->format('d-m-Y H:i')
        ];
    }


}
