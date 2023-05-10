<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\CompletedTask as CompletedTaskModel;

class CompletedTaskController extends Controller
{
    /**
     * 「完了タスク」の一覧を表示する
     *
     * @return \Illuminate\View\View
     */
    protected function list()
    {
        $completedTasks = CompletedTaskModel::where('user_id', Auth::id())->paginate(10);
        return view('task.completed_list', ['list' => $completedTasks]);
    }   
}
