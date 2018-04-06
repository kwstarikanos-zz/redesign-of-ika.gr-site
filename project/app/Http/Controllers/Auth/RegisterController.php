<?php

namespace App\Http\Controllers\Auth;

use App\Models\Insured;
use App\User;
use App\Models\Employer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;

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
    protected $redirectTo = '/';

    public function showRegistrationForm()
    {
        return view('register', ['title' => 'Εγγραφή']);
    }


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
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create(
            [
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]
        );
        if ($data['role'] == "insured") {
            $exists = Insured::where(
                [
                    ['afm', '=', $data['afm']],
                    ['amka', '=', $data['amka']],
                    ['ama', '=', $data['ama']],
                ]
            )->count();
            if ($exists) {
                Insured::where(
                    [
                        ['afm', '=', $data['afm']],
                        ['amka', '=', $data['amka']],
                        ['ama', '=', $data['ama']],
                    ]
                )->update(['users_id' => $user['id']]);
            } else {
                Insured::insert(
                    [
                        'afm' => $data['afm'],
                        'amka' => $data['amka'],
                        'ama' => $data['ama'],
                        'users_id' => $user['id'],
                        'retired' => 0
                    ]
                );
            }
        } else if ($data['role'] == "employer") {
            $employer = new Employer;
            $employer->e_id = $user['id'];
            $employer->save();
        }

        return $user;
    }
}
