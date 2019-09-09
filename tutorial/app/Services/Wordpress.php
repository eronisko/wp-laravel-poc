<?php

namespace App\Services;

use App\Http\Resources\WordpressPost;
use App\Post;

class Wordpress
{

    public function __construct(string $url) {
        $this->url = $url;
    }

    public function getPost($id) {
        $response = file_get_contents($this->url . "posts/$id", false);
        return new Post(WordpressPost::make(json_decode($response))->resolve());
    }
}
