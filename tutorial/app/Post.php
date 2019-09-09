<?php

namespace App;

use Illuminate\Support\Facades\View;
use Jenssegers\Model\Model;
use PHPHtmlParser\Dom;

class Post extends Model
{
    public function getContentAttribute()
    {
        $content = $this->attributes['content'];
        $dom = new Dom;
        $dom->load($content);
        foreach($dom->find('.1989-image') as $image)
        {
            $attributes = [
                'img_src' => $image->getTag()->getAttribute('data-img-src')["value"],
                'caption' => $image->getTag()->getAttribute('data-caption')["value"],
            ];

            $componentDom = new Dom;
            $componentDom->loadStr(View::make('image', $attributes)->render());

            $image->delete();
            $image->parent->addChild($componentDom->firstChild());
        }

        return $dom;
    }
}
