<?php

// AbstractFilter.php

namespace App\NewFilters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

abstract class AbstractFilter
{
    protected $request;

    protected $data;

    protected $filters = [];

    public function __construct(Request $request, $data)
    {
        $this->request = $request;
        $this->data = $data;
    }
    public function filter()
    {
        foreach($this->getFilters() as $filter => $value)
        {
            $this->data = array_filter($this->data, array($this->resolveFilter($filter, $value), 'filter'));
        }
        return $this->data;
    }

    protected function getFilters()
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }

    protected function resolveFilter($filter, $value)
    {
        return new $this->filters[$filter]($value);
    }
}
