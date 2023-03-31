<?php

namespace App\Http\Controllers;

use App\Models\Promocode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class PromocodeController extends Controller
{
    public function index()
    {
        $filters = [];

        $codes = Promocode::filter(FacadesRequest::only($filters))->get();
    }
}
