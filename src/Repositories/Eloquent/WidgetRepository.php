<?php

namespace LidyaPos\Widget\Repositories\Eloquent;

use LidyaPos\Support\Repositories\Eloquent\RepositoriesAbstract;
use LidyaPos\Widget\Repositories\Interfaces\WidgetInterface;

class WidgetRepository extends RepositoriesAbstract implements WidgetInterface
{
    /**
     * {@inheritDoc}
     */
    public function getByTheme($theme)
    {
        $data = $this->model->where('theme', $theme)->get();
        $this->resetModel();

        return $data;
    }
}
