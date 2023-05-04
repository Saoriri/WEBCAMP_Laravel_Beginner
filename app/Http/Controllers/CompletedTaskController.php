<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRegisterPostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Task as TaskModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CompletedTask as CompletedTaskModel;

class CompletedTaskController extends Controller
{
    /**
     * 「完了タスク」の一覧を表示する
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        $completedTasks = CompletedTaskModel::paginate(10);
        return view('completed_list', ['list' => $completedTasks]);
    }   
}
