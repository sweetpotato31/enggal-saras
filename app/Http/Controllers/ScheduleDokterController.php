<?php

namespace App\Http\Controllers;

use App\Models\PenjadwalanDokter;
use App\Models\Layanan;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleDokterController extends Controller
{
    public function getJadwal($dokter_id, $layanan_id){
        $jadwal = PenjadwalanDokter::where('dokter_id', $dokter_id)
                                    ->where('layanan_id', $layanan_id)
                                    ->first();
        return response()->json($jadwal);
    }
    public function filterData($field, $model){
        if (request($field)) {
            $model->where($field, 'like', '%' . request($field) . '%');
        }
    }
    public function filterDataUnique($field, $model){
        if (request($field)) {
            $model->where($field, request($field));
        }
    }
    public function indexData(){
        $jadwalDokter = PenjadwalanDokter::latest();

        if(request('nama_lengkap')) {
            $this->filterData('nama_lengkap', $dokter);
        }
        return view('pages.dokter.jadwal_dokter.jadwal-dokter', ['title' => 'jadwal-dokter', 'jadwalDokter' => $jadwalDokter->get()]);
    }
    public function indexCreate(){
        $layanan = Layanan::all();
        $dokter = Dokter::all();
        $jadwals = PenjadwalanDokter::all();
        return view('pages.dokter.jadwal_dokter.create-jadwal-dokter', ['title' => 'create-jadwal-dokter', 'layanan' => $layanan, 'dokter' => $dokter, 'jadwals' => $jadwals]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'layanan_id'     => ['required'],
            'dokter_id'      => ['required'],
            'jadwal_praktik' => ['required'],
            'start'          => ['required'],
            'finish'         => ['required']
        ]);
    
        $days = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];
        $data = [];
        foreach ($days as $day) {
            $data[$day] = $request->has($day) ? $request->start . '-' . $request->finish : '';
        }
        $validatedData = array_merge($validatedData, $data);
        PenjadwalanDokter::create($validatedData);
        $request->session()->flash('success', 'Data berhasil ditambahkan');
        return redirect('/tenaga-medis/jadwal-dokter');
    }
    public function edit($id){
        $layanan = Layanan::all();
        $dokter = Dokter::all();
        $penjadwalanDokter = PenjadwalanDokter::find($id);
        return view('pages.dokter.jadwal_dokter.edit-jadwal-dokter', ['title' => 'edit-jadwal-dokter', 'layanan' => $layanan, 'dokter' => $dokter, 'penjadwalanDokter' => $penjadwalanDokter]);
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'layanan_id'     => ['required'],
            'dokter_id'      => ['required'],
            'jadwal_praktik' => ['required'],
            'start'          => ['required'],
            'finish'         => ['required']
        ]);
    
        $data = [
            'senin'  => $request->has('senin') ? $request->start . '-' . $request->finish : '-',
            'selasa' => $request->has('selasa') ? $request->start . '-' . $request->finish : '-',
            'rabu'   => $request->has('rabu') ? $request->start . '-' . $request->finish : '-',
            'kamis'  => $request->has('kamis') ? $request->start . '-' . $request->finish : '-',
            'jumat'  => $request->has('jumat') ? $request->start . '-' . $request->finish : '-',
            'sabtu'  => $request->has('sabtu') ? $request->start . '-' . $request->finish : '-',
            'minggu' => $request->has('minggu') ? $request->start . '-' . $request->finish : '-'
        ];
    
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
    public function destroy(Request $request, $id){
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
