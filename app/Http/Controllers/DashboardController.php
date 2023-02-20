<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use DataTables;
class DashboardController extends Controller
{

    public function index()
    {

        $students_count = Student::count();
        $users_count = User::count();
        $last = User::find(User::max('id'));

        return view('dashboard')
            ->with('stotal', $students_count)
            ->with('utotal', $users_count)
            ->with('lastu', $last['name']);
    }
    

    
}