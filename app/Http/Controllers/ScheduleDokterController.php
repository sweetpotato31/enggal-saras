<?php

namespace App\Http\Controllers;

use App\Models\PenjadwalanDokter;
use App\Models\Layanan;
use App\Models\Dokter;
use Illuminate\Http\Request;

class ScheduleDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Request $request){

    //     $validatedData = $request->validate([
    //         'layanan_id'     => ['required'],
    //         'dokter_id'      => ['required'],
    //         'jadwal_praktik' => ['required'],
    //         'senin'          => [],
    //         'selasa'         => [],
    //         'rabu'           => [],
    //         'kamis'          => [],
    //         'jumat'          => [],
    //         'sabtu'          => [],
    //         'minggu'         => [],
    //         'start'          => ['required'],
    //         'finish'         => ['required']
    //     ]);

    //     // Gabungkan data checkbox dengan data yang divalidasi  
    //     // Simpan data ke database
    //     PenjadwalanDokter::create($validatedData);
    //     $request->session()->flash('success', 'Data berhasil ditambahkan');
    //     return redirect('/tenaga-medis/jadwal-dokter');
    // }

    public function create(Request $request) {
        // Debug data yang dikirim dari formulir
        // dd($request->all());
    
        // Validasi input
        $validatedData = $request->validate([
            'layanan_id'     => ['required'],
            'dokter_id'      => ['required'],
            'jadwal_praktik' => ['required'],
            'start'          => ['required'],
            'finish'         => ['required']
        ]);
    
        // Mengatur nilai untuk setiap hari berdasarkan checkbox
        $data = [
            'senin'  => $request->has('senin') ? $request->start . '-' .  $request->finish : '-',
            'selasa' => $request->has('selasa') ? $request->start . '-' . $request->finish : '-',
            'rabu'   => $request->has('rabu') ? $request->start . '-' . $request->finish : '-',
            'kamis'  => $request->has('kamis') ? $request->start . '-' . $request->finish : '-',
            'jumat'  => $request->has('jumat') ? $request->start . '-' . $request->finish : '-',
            'sabtu'  => $request->has('sabtu') ? $request->start . '-' . $request->finish : '-',
            'minggu' => $request->has('minggu') ? $request->start . '-' . $request->finish : '-'
        ];
    
        // Gabungkan data checkbox dengan data yang divalidasi
        $validatedData = array_merge($validatedData, $data);
    
        // Debug data sebelum menyimpan
        // dd($validatedData);
    
        // Simpan data ke database
        PenjadwalanDokter::create($validatedData);
        $request->session()->flash('success', 'Data berhasil ditambahkan');
        return redirect('/tenaga-medis/jadwal-dokter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $jadwalDokter = PenjadwalanDokter::all();
        return view('m_dokter/jadwal-dokter', ['title' => 'jadwal-dokter', 'jadwalDokter' => $jadwalDokter]);
    }

    public function storeForm()
    {
        $layanan = Layanan::all();
        $dokter = Dokter::all();
        return view('m_dokter/create-jadwal-dokter', ['title' => 'create-jadwal-dokter', 'layanan' => $layanan, 'dokter' => $dokter]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PenjadwalanDokter $penjadwalanDokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $layanan = Layanan::all();
        $dokter = Dokter::all();
        $penjadwalanDokter = PenjadwalanDokter::find($id);
        return view('m_dokter/edit-jadwal-dokter', ['title' => 'edit-jadwal-dokter', 'layanan' => $layanan, 'dokter' => $dokter, 'penjadwalanDokter' => $penjadwalanDokter]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'layanan_id'     => ['required'],
            'dokter_id'      => ['required'],
            'jadwal_praktik' => ['required'],
            'start'          => ['required'],
            'finish'         => ['required']
        ]);
    
        // Mengatur nilai untuk setiap hari berdasarkan checkbox
        $data = [
            'senin'  => $request->has('senin') ? $request->start . '-' . $request->finish : '-',
            'selasa' => $request->has('selasa') ? $request->start . '-' . $request->finish : '-',
            'rabu'   => $request->has('rabu') ? $request->start . '-' . $request->finish : '-',
            'kamis'  => $request->has('kamis') ? $request->start . '-' . $request->finish : '-',
            'jumat'  => $request->has('jumat') ? $request->start . '-' . $request->finish : '-',
            'sabtu'  => $request->has('sabtu') ? $request->start . '-' . $request->finish : '-',
            'minggu' => $request->has('minggu') ? $request->start . '-' . $request->finish : '-'
        ];
    
        // Gabungkan data checkbox dengan data yang divalidasi
        $validatedData = array_merge($validatedData, $data);

        $penjadwalanDokter = PenjadwalanDokter::find($id);
        $penjadwalanDokter->update([
           
                'layanan_id'     => $request->layanan_id,
                'dokter_id'      => $request->dokter_id,
                'jadwal_praktik' => $request->jadwal_praktik,
                'start'          => $request->start,
                'finish'         => $request->finish,
                'senin'          => $request->has('senin') ? $request->start . '-' . $request->finish : '-',
                'selasa'         => $request->has('selasa') ? $request->start . '-' . $request->finish : '-',
                'rabu'           => $request->has('rabu') ? $request->start . '-' . $request->finish : '-',
                'kamis'          => $request->has('kamis') ? $request->start . '-' . $request->finish : '-',
                'jumat'          => $request->has('jumat') ? $request->start . '-' . $request->finish : '-',
                'sabtu'          => $request->has('sabtu') ? $request->start . '-' . $request->finish : '-',
                'minggu'         => $request->has('minggu') ? $request->start . '-' . $request->finish : '-'
        ]);

        if($penjadwalanDokter){
            $request->session()->flash('success','Data berhasil di ubah');
            return redirect('/tenaga-medis/jadwal-dokter');
        }else{
            $request->session()->flash('failed','Data Gagal di ubah');
            return redirect('/tenaga-medis/jadwal-dokter');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $penjadwalanDokter = PenjadwalanDOkter::find($id);
        $penjadwalanDokter->destroy($id);
        if($penjadwalanDokter){
            $request->session()->flash('success','Data berhasil di hapus');
            return redirect('/tenaga-medis/jadwal-dokter');
        }else{
            $request->session()->flash('failed','Data Gagal di hapus');
        return redirect('/tenaga-medis/jadwal-dokter');
        }
    }
}
