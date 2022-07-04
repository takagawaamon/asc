<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;

class PositionController extends Controller
{
    public function index(Position $position)
    {
    return view('ascuser/index')->with(['users' => $position->getByPosition()]);
    }
}
