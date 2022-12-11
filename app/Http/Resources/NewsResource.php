<?php

namespace App\Http\Resources;

use App\Models\Comment;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $comments = Comment::where('news_key', $this->key)->get();
        return [
            'key' => $this->key,
            'category_name' => $this->category_name,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'author' => $this->author,
            'content' => $this->content,
            'image' => $this->image,
            'primary_image' => $this->primary_image,
            'social_image' => $this->social_image,
            'datetime' => $this->datetime,
            'comments' => $comments,
        ];
    }
}
