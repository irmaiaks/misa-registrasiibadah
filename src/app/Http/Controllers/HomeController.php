<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

use App\Keluhan;
use App\Profil;
use App\Registrasi;
use App\User;
use App\JenisIbadah;
use App\JadwalIbadah;
use App\Kuota;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use UxWeb\SweetAlert\SweetAlert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Symfony\Component\DomCrawler\Image;
use Carbon\Carbon;
use Barryvdh\DomPDF\PDF;
use Dompdf\Css\Style;
use Alert;
use Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Home atau Utama
    public function index()
    {
        return view('home', get_defined_vars());
    }

    //Visi & Misi
    public function tentang()
    {
        return view('tentang', get_defined_vars());
    }

    public function qrcode()
    {
        $arr = DB::select("SELECT t.* FROM registrasi as t JOIN profil as p ON p.id = t.profil_id JOIN users as u ON u.id = p.user_id WHERE u.id = " . Auth::user()->id);
        $qrcode = end($arr);

        return view('qrcode', get_defined_vars());
    }


    //Registrasi Ibadah
    public function registrasi()
    {
        $profil = Profil::where('user_id', Auth::user()->id)->first();

        return view('registrasi', get_defined_vars());
    }

    //Registrasi Ibadah Umum
    public function registrasi_umum()
    {
        $jadwal = JadwalIbadah::where(array('jenis_id' => 1))->get();

        return view('registrasi_umum', get_defined_vars());
    }


    //Jadwal Registrasi Ibadah
    public function registrasi_jadwal()
    {
        $jadwal = JadwalIbadah::where(array('jenis_id' => 2))->get();

        return view('registrasi_jadwal', get_defined_vars());
    }


    //Form Registrasi Ibadah
    public function form_registrasi($id)
    {
        $profil = Profil::where('user_id', Auth::user()->id)->first();
        $jadwal = JadwalIbadah::where(array('id' => $id))->first();
        $kuota = Kuota::where(array('jadwal_ibadah_id' => $id))->first();

        return view('form_registrasi', get_defined_vars());
    }


    //Registrasi Ibadah
    public function buat_registrasi(Request $request)
    {
        DB::beginTransaction();
        try {
            $profil = Profil::where(array('user_id' => Auth::user()->id))->first();

            if ($profil) {
                $profil->nik = $request->nik;
                $profil->nama_lengkap = $request->nama_lengkap;
                $profil->tempat_lahir = $request->tempat_lahir;
                $profil->alamat = $request->alamat;
                $profil->jenis_kelamin = $request->jenis_kelamin;
                $profil->no_hp = $request->no_hp;
            } else {
                $profil = new Profil([
                    'user_id' => Auth::user()->id,
                    'nik' => $request->nik,
                    'nama_lengkap' => $request->nama_lengkap,
                    'tempat_lahir' => $request->tempat_lahir,
                    'alamat' => $request->alamat,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'no_hp' => $request->no_hp,
                ]);
            }

            if ($profil->save()) {
                $registrasi = new Registrasi([
                    'profil_id' => $profil->id,
                    'jadwal_ibadah_id' => $request->jadwal_ibadah_id
                ]);

                if ($registrasi->save()) {
                    $keluhan = new Keluhan([
                        'registrasi_id' => $registrasi->id,
                        'demam' => $request->demam,
                        'tenggorokan' => $request->tenggorokan,
                        'pilek' => $request->pilek,
                        'batuk' => $request->batuk,
                        'sesak' => $request->sesak
                    ]);

                    $keluhan->save();

                    $registrasi->qr_code = Carbon::now()->timestamp . '_' . Auth::user()->username . '.png';
                    $registrasi->save();

                    QrCode::format('png')->generate($registrasi->id, public_path('template/qrcode/' . $registrasi->qr_code));

                    $kuota_tersisa = Kuota::where(array('jadwal_ibadah_id' => $request->jadwal_ibadah_id))->first()->kuota;

                    if ($kuota_tersisa <= 0) {
                        DB::rollBack();
                        SweetAlert::error('Mohon maaf kuota untuk minggu ini sudah habis', 'KOUTA HABIS')->persistent();
                        return redirect()->back();
                    } else {
                        $kuota = Kuota::where(array('jadwal_ibadah_id' => $request->jadwal_ibadah_id))->first();
                        $kuota->kuota = $kuota_tersisa - 1;
                        $kuota->save();
                    }
                }
            }

            DB::commit();
            SweetAlert::success('Registrasi Ibadah Berhasil. Selamat Beribadah', 'BERHASIL')->persistent();
            return redirect()->route('qrcode');
        } catch (\Exception $e) {
            DB::rollBack();
            SweetAlert::error($e->getMessage())->persistent();
            return redirect()->back();
        }
    }

    public function download_qrcode()
    {
        $arr = DB::select("SELECT t.qr_code FROM registrasi as t JOIN profil as p ON p.id = t.profil_id JOIN users as u ON u.id = p.user_id WHERE u.id = " . Auth::user()->id);
        $qrcode = end($arr);

        $filepath = public_path('template/qrcode/' . $qrcode->qr_code);
        return Response::download($filepath);
    }

    public function cancel_ibadah($id)
    {
        DB::beginTransaction();
        try {
            $registrasi = Registrasi::find($id);
            $kuota = Kuota::where(array('jadwal_ibadah_id' => $registrasi->jadwal_ibadah_id))->first();
            $kuota->kuota = $kuota->kuota + 1;
            $kuota->save();

            $del = Registrasi::destroy($id);

            if ($del) {
                DB::commit();
                SweetAlert::success('QrCode Berhasil di Hapus', 'BERHASIL');
            } else {
                DB::rollBack();
                SweetAlert::error('Gagal Menghapus QrCode', 'GAGAL');
            }
        } catch (Exception $e) {
            DB::rollBack();
        }

        return redirect()->back();
    }

    public function data_registrasi()
    {
        $data = User::find(Auth::user()->id);

        return view('data_registrasi', get_defined_vars());
    }

    public function info()
    {
        return view('info', get_defined_vars());
    }

    public function scan()
    {
        return view('scan', get_defined_vars());
    }

    public function kontak()
    {
        return view('kontak', get_defined_vars());
    }

    public function showQrCode($id)
    {
        $data = DB::select("SELECT p.nik, p.nama_lengkap, p.tempat_lahir, p.alamat, p.jenis_kelamin, p.no_hp, k.demam, k.tenggorokan
        , k.pilek, k.batuk, k.sesak, t.status FROM registrasi as t JOIN profil as p ON p.id = t.profil_id JOIN keluhan as k ON k.registrasi_id = t.id WHERE t.id = " . $id)[0];

        if ($data->status == 1) {
            $a = Registrasi::find($id);
            $a->status = 0;
            $a->save();

            $status = 1;
        } else {
            $status = 2;
        }

        return json_encode(array('data' => $data, 'status' => $status));
    }


    //DOWNLOAD PDF
    /*public function pdf($id)
    {
        $data = DB::select("SELECT p.nik, p.nama_lengkap, p.tempat_lahir, p.alamat, p.jenis_kelamin, p.no_hp, k.demam, k.tenggorokan
        , k.pilek, k.batuk, k.sesak FROM registrasi as t JOIN profil as p ON p.id = t.profil_id JOIN keluhan as k ON k.registrasi_id = t.id WHERE t.id = " . $id)[0];

        $pdf = PDF::loadview('pdf', ['data' => $data]);
        return $pdf->download($data->nama_lengkap . '_' . $id . '.pdf');
    }*/
}
