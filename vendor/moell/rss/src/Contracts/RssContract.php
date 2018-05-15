<?php

/**
 * @author  <91@foxmail.com>
 */

namespace \Rss\Contracts;

interface RssContract
{
    public function setEncode($encode);

    public function channel(array $channel);

    public function item(array $item);

    public function items(array $items);

    public function build();

    public function fastBuild(array $channel, array $item);

    public function __toString();
}