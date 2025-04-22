<?php

namespace App\Http\Controllers;

use App\Models\DonasiGajah;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DonasiGajahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexAdmin()
    {
        $data = DonasiGajah::with('user')->get();

        $sum = DonasiGajah::selectRaw('SUM(CAST(donasi AS DECIMAL(10, 2))) as total')->value('total');
        //         $sum = DonasiGajah::selectRaw('SUM(donasi::numeric) as total')->value('total');

        return view('admins.donasi-gajah', [
            'data' => $data,
            'total' => (string) $sum,
        ]);
    }

    /**
     *  Actions
     */
    public function donasiGajah(Request $request)
    {
        try {
            $nominal = $request->input('nominal');
            DB::beginTransaction();
            $nominal = str_replace('.', '', $nominal);

            $user = User::find(Auth::user()->id);
            $user->balance = (string) ((int) $user->balance - (int) $nominal);
            $user->save();

            DonasiGajah::create([
                'donasi' => $nominal,
                'user_id' => (int) Auth::user()->id,
            ]);

            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors([
                'error' => [
                    'message' => 'Terjadi kesalahan server',
                ]
            ]);
        }

        return redirect()->back()->with('success', 'Berhasil melakukan donasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DonasiGajah $donasiGajah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DonasiGajah $donasiGajah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DonasiGajah $donasiGajah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DonasiGajah $donasiGajah)
    {
        //
    }
}
