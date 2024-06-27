<?php

namespace App\Http\Controllers;

use App\Models\Task; // Ditambahkan untuk akses ke model Task
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // private telah dihapus

    public function __construct()
    {
        // $this->tasks & turunannya telah dihapus
    }

    public function index()
    {
    $pageTitle = 'Task List'; // Ditambahkan
    $tasks = Task::all(); // Diperbarui dari $this->tasks; agar dapat mengakses model Task
    return view('tasks.index', [
        'pageTitle' => $pageTitle, //Ditambahkan
        'tasks' => $tasks,
    ]);
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Task';
       // $tasks = $this->tasks;
       // $task = $tasks[$id - 1];
       $task = Task::find($id); // Diperbarui

        return view('tasks.edit', ['pageTitle' => $pageTitle, 'task' => $task]);
    }

    public function create()
    {
    $pageTitle = 'Create Task'; // Ditambahkan
    // $tasks = $this->tasks;
    return view('tasks.create', [
        'pageTitle' => $pageTitle, //Ditambahkan
    // 'tasks' => $tasks,
    ]);
    }

}