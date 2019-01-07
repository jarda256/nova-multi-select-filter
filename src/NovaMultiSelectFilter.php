<?php

namespace jarda256\NovaMultiSelectFilter;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

abstract class NovaMultiSelectFilter extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'multiselect-filter';

    /**
     * Prepare the filter for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_add(parent::jsonSerialize(), 'multiple', TRUE);

    }
}
