<?php

namespace LidyaPos\Widget\Repositories\Caches;

use LidyaPos\Support\Repositories\Caches\CacheAbstractDecorator;
use LidyaPos\Widget\Repositories\Interfaces\WidgetInterface;

class WidgetCacheDecorator extends CacheAbstractDecorator implements WidgetInterface
{
    /**
     * {@inheritDoc}
     */
    public function getByTheme($theme)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
