<?php

namespace App\Http\Controllers;

use App\Models\Township;
use Illuminate\Http\Request;

class TownshipController extends Controller
{
    public function getByRegionId($id)
    {
        $townships = Township::where('region_id', $id)
            ->get();
        return json_encode($townships);
    }
}
