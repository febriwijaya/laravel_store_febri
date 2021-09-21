<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;

class LocationController extends Controller
{
  public function province()
  {
    return Province::all();
  }

  public function regencies($provinces_id)
  {
    return Regency::where('province_id', $provinces_id)->get();
  }
}
