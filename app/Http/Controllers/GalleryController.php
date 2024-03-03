<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function sign_in()
    {
        return view('pages.sign_in');
    }
    public function proses_masuk(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect('/explore');
        } else {
            echo "gagal login";
        }
    }

    public function sign_up()
    {
        return view('pages.sign_up');
    }
    public function proses_register(Request $request)
    {
        $datasimpan = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'tgl_lahir' => $request->date,
        ];
        User::create($datasimpan);
        return redirect('/sign_in');
    }








    public function change_password()
    {
        return view('pages.change_password');
    }
    public function explore()
    {
        return view('pages.explore');
    }
    public function follower_or_follow()
    {
        return view('pages.follower_or_follow');
    }
    public function index()
    {
        return view('pages.index');
    }
    public function komen()
    {
        return view('pages.komen');
    }
    public function my_pin()
    {
        return view('pages.my_pin');
    }
    public function other_pin()
    {
        return view('pages.other_pin');
    }



    public function pin()
    {
        return view('pages.pin');
    }
    public function buat_pin(Request $request)
    {
        $datasimpan = [
            'users_id' => auth()->User()->id,
            'foto_id' => $request->file,
            'judul_foto' => $request->judul_foto,
            'deskripsi_foto' => $request->deskripsi_foto,
        ];
        Foto::create($datasimpan);
        return redirect('/explore');
    }





    public function profile()
    {
        return view('pages.profile');
    }




    // LOGOUT
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/sign_in');
    }



    public function getData(Request $request)
    {
        $explore = Foto::with(['like', 'favorite'])->withCount(['like', 'komentar'])->paginate(4);
        return response()->json([
            'data'  => $explore,
            'statuscode'    => 200,
        ]);
    }



    public function likesfoto (Request $request) {
        try {
            $request->validate([
                'idfoto' => 'required'
            ]);
            $existingLike = Likefoto::where('id_foto', $request->idfoto)->where('id_user', auth()->user()->id)->first();
            if(!$existingLike) {
                $dataSimpan = [
                    'id_foto'       => $request->idfoto,
                    'id_user'       => auth()->user()->id
                ];
            Likefoto::create($dataSimpan);
            } else {
                Likefoto::where('id_foto', $request->idfoto)->where('id_user', auth()->user()->id)->delete();
            }

            return response()->json('Data Berhasil Di Simpan', 200);
        } catch (\Throwable $th) {
            return response()->json('Something went wrong', 500);
        }
}
