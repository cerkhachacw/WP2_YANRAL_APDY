<?php

namespace App\Helpers;

trait Pagination
{
    public function paginate($request, $query)
    {
        $q = $request->getVar('q');
        $page =  $request->getVar('page') ?? 1;
        $perPage = $request->getVar('per_page') ?? 10;

        if($q) {
            $query = $query->like('name', $q);
        }

        $query = $query->paginate($perPage, 'default', $page);
        
        return $query;
    }
}