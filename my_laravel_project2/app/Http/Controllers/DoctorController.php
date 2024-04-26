<?php
namespace App;
namespace App\Http\Controllers;
use App\Doctor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
   

    public function readCsv()
    {
        $filePath = storage_path('app/doctors.csv');
        $file = fopen($filePath, 'r');
    
        $header = fgetcsv($file);
    
        $users = [];
        while ($row = fgetcsv($file)) {
            $users[] = array_combine($header, $row);
        }
    
        fclose($file);
    
        return view('doctors.index', compact('doctors'));
    }


    
   
    
    }

