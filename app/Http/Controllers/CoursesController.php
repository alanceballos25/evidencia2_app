<!-- <?php

//namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use App\Models\Course;

//class CoursesController extends Controller{

//     public function index(){
//         $courses = Course::all();
//         $coursesObject = $courses[0];
//         return view('index', ['courses' => $courses], ["coursesObject" => $coursesObject]);
//     }

//     public function create(){
//         return view('create');
//     }

//     public function store (Request $request){
//         $course = new Course; 
//         $course -> name = $request -> name;
//         $course -> description = $request -> description;
//         $course -> dificulty = $request -> dificulty;
//         $course -> instructor = $request -> instructor;
//         $course -> email = $request -> email;

//         $course->save();
//         return redirect('/courses/create');
//     }


// } -->