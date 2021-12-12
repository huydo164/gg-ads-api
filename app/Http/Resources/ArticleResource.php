<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
          'title' => $this->title,
          'type' => $this->type,
          'short_description' => $this->short_description,
          'site_id' => $this->site_id,
          'origin_url' => $this->origin_url,
          'origin_url_md5' => $this->origin_url_md5,
          'image_path' => $this->image_path,
          'youtube_url' => $this->youtube_url,
          'youtube_id' => $this->youtube_id,
          'description' => $this->description,
          'youtube_views' => $this->youtube_views,
          'views' => $this->views,
          'status' => $this->status,
          'hash_md5' => $this->hash_md5,
          'article_category_id' => $this->article_category_id,
          'public_start_at' => $this->public_start_at,
          'public_end_at' => $this->public_end_at,
          'create_origin_at' => $this->create_origin_at,
          'update_origin_at' => $this->update_origin_at,
          'last_crawl_at' => $this->last_crawl_at,
          'admin_note' => $this->admin_note,
          'updated_at' => $this->updated_at,
          'related_article' => $this->related_article,
          'created_at'=> $this->created_at,
        ];
    }
}
