<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;
use Response;
use Auth;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $data = [];

        // $data['tasklist'] = Task::where('is_active', 1)->where('created_by', Auth::user()->id)->get();

        return view('task', $data);
    }
}