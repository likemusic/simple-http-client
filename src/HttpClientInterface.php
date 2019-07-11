<?php

namespace Likemusic\SimpleHttpClient;

interface HttpClientInterface
{
    /**
     * @param string $url
     * @return string
     */
    public function getUrlContent($url);
}
