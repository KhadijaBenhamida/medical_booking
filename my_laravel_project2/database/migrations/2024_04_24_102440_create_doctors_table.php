<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImportDoctors extends Command
{
    protected $signature = 'import:doctors';
    protected $description = 'Import doctors from a CSV file';

    public function handle()
    {
        $file = base_path('doctors.csv'); // Adjust the path as necessary

        if (!File::exists($file)) {
            $this->error('File not found.');
            return;
        }

        $fileContent = File::get($file);
        $lines = explode(PHP_EOL, $fileContent);

        foreach ($lines as $line) {
            if (empty($line)) continue;

            $row = str_getcsv($line);
            $doctor = [
                'Doctor Name' => $row[0],
                'Speciality' => $row[1],
                'Country' => $row[2],
                'City' => $row[3],
                // Add other fields as necessary
            ];

            DB::table('doctors')->insert($doctor);
        }

        $this->info('Doctors imported successfully.');
    }
}
