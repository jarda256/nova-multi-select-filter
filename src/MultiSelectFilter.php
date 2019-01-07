<?php

namespace jarda256\NovaMultiselectFilter;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

abstract class MultiSelectFilter extends Filter
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
