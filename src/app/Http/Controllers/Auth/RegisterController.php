<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profil;
use App\Registrasi;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    public function cara_penggunaan()
    {
        return view('cara_penggunaan', get_defined_vars());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        DB::beginTransaction();
        try {
            $user = new User([
                'username' => $data['username'],
                'password' => bcrypt($data['password']),
                'role_id' => 2, //Role_id 2 adalah User
            ]);

            $user->save();

            $profil = new Profil([
                'user_id' => $user->id,
                'nik' => $data['nik'],
                'nama_lengkap' => $data['nama_lengkap'],
                'tanggal_lahir' => $data['tanggal_lahir'],
                'alamat' => $data['alamat'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'rtrw' => $data['rtrw'],
                'kelurahan' => $data['kelurahan'],
                'kecamatan' => $data['kecamatan']
            ]);

            $profil->save();
            // return redirect('profil')->with('success', 'Task Created Successfully!');

            DB::commit();

            return $user;
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }

        // Auth::loginUsingId($user->id);
    }
}
