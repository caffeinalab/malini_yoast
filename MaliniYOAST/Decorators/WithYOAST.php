<?php

namespace MaliniYOAST\Decorators;

use Malini\Post;
use Malini\Abstracts\PostDecorator;
use Malini\Interfaces\PostDecoratorInterface;

class WithYOAST extends PostDecorator implements PostDecoratorInterface
{

    public function decorate(Post $post, array $options = []) : Post {
        $post->extend('getSEOHtml', function() {
            ob_start();
            do_action('wpseo_head');
            return ob_get_clean();
        });
        $post->addRawAttributes([
            'meta_html'     => '@this:getSEOHtml',
            'meta'          => '@grouped_meta:_yoast_wpseo_,1'
        ]);

        $this->filterConfig(
            $post,
            $options,
            [ 'meta_html', 'meta' ]
        );

        return $post;
    }

}
