<?php

// AbstractSort.php

namespace App\NewFilters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

abstract class AbstractSort
{
    protected $request;

    protected $data;

    protected $sorts = [];

    public function __construct(Request $request, $data)
    {
        $this->request = $request;
        $this->data = $data;
    }
    public function sort()
    {
        foreach($this->getSorts() as $sort => $value)
        {
            usort($this->data, array($this->resolveSort($sort), $value));
        }
        return $this->data;
    }

    protected function getSorts()
    {
        $sorts = explode(';', $this->request->sort);
        $finalSorts = [];
        if(count($sorts)){
            foreach ($sorts as $sort){
                $cleanSort = str_replace(['+', '-'], '', $sort);
                if(in_array($cleanSort, array_keys($this->sorts))){
                    $finalSorts[$cleanSort] = (strpos($sort, '-') !== false) ? 'sortByDesc' : 'sortByAsc';
                }
            }
        }

        return $finalSorts;
    }

    protected function resolveSort($sort)
    {
        return new $this->sorts[$sort];
    }
}
