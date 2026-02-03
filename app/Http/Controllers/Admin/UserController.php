<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ambil semua data user
        return view('admin.users.index', compact('users'));
    }

    public function export()
    {
        $users = User::all();
        $filename = "users_export_" . date('Y-m-d_H-i-s') . ".csv";

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];

        $columns = ['ID', 'Nama', 'Email', 'Terdaftar'];

        $callback = function() use ($users, $columns) {
            $file = fopen('php://output', 'w');
            
            // Tambahkan BOM agar Excel bisa membaca UTF-8 dengan benar
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));

            // Gunakan titik koma (;) sebagai pemisah karena Excel Indonesia biasanya menggunakan ini
            fputcsv($file, $columns, ';');

            foreach ($users as $user) {
                $row['ID']  = $user->id;
                $row['Nama'] = $user->name;
                $row['Email'] = $user->email;
                $row['Terdaftar'] = $user->created_at->format('Y-m-d H:i');

                fputcsv($file, array($row['ID'], $row['Nama'], $row['Email'], $row['Terdaftar']), ';');
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
