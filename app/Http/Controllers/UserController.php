<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('pages.pengelola.users.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pengelola.users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create(
            [
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'nama_lengkap' => $request->nama_lengkap,
                'role' => $request->role,
                'alamat' => $request->alamat,
            ]
        );

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = User::findOrFail($id);

        return view('pages.pengelola.users.edit', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = User::findOrFail($id);
        $data = $request->all();

        $item->update($data);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::findOrFail($id);

        $item->delete();

        return redirect()->route('user.index');
    }

    public function export_excel()
    {
        return Excel::download(new UserExport, 'laporan-data-user.xlsx');
    }


    public function export_pdf()
    {
        $data = User::all();
        $pdf = Pdf::loadView('export.user', [
            'data' => $data
        ]);

        return $pdf->download('laporan-data-user.pdf');
    }
}
