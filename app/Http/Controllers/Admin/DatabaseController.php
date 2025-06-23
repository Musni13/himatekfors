<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DatabaseController extends Controller
{
    public function index()
    {
        return view('admin.database');
    }

    

    public function store()
    {
        $filename = 'backup_' . Carbon::now()->format('Y-m-d_H-i-s') . '.sql';
        $path = storage_path("app/{$filename}");

        $db = config('database.connections.mysql');

        // Ganti path ini jika tidak menggunakan XAMPP
        $mysqldumpPath = 'C:\\xampp\\mysql\\bin\\mysqldump.exe';

        $command = "\"{$mysqldumpPath}\" --user={$db['username']} --password=\"{$db['password']}\" --host={$db['host']} {$db['database']} > \"{$path}\"";

        $result = null;
        $output = null;
        exec($command, $output, $result);

        if (!file_exists($path) || $result !== 0) {
            return back()->with('error', 'Gagal melakukan backup database. Pastikan path mysqldump benar.');
        }

        return response()->download($path)->deleteFileAfterSend(true);
    }

}

