<?php 
return function() {
    if($contribPage = page('contributions')) {
        $filterBy = get('filter');
        $unfiltered = $contribPage->children()->listed();
        $projects = $unfiltered
        ->when($filterBy, function($filterBy) {
            if($this->filterBy('category', $filterBy) == '') {
                return $this->filterBy('language', $filterBy);
            }
            if($this->filterBy('language', $filterBy) == '') {
                return $this->filterBy('category', $filterBy);
            }
            if($this->filterBy('language', $filterBy) == '' && $this->filterBy('category', $filterBy) == '') {
                return $this;
            }
        });
        $catFilter = $unfiltered->pluck('category', null, true);
        $langFilter = $unfiltered->pluck('language', null, true);
        $filters = array_merge($catFilter, $langFilter);
    }  

    return [
        'contribPage' => $contribPage,
        'filterBy' => $filterBy, 
        'unfiltered' => $unfiltered,
        'projects' => $projects,
        'filters' => $filters
    ];
};