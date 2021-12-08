<?php

namespace AR\Calculator\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CalculatorController extends Controller
{
    public function index(): View
    {
        return view("calculator::calculator");
    }

    public function result(Request $request): void
    {
        echo "Addition : " , ($request->v1 + $request->v2);
    }

}
