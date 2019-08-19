<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'name' => ['required', 'string', 'max:255'],
            'register_email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'register_password' => ['required', 'string', 'min:8', 'confirmed'],
            'university' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();

        if ($request->hasFile('avatar')) {
            if ($request->file('avatar')->isValid()) {
                $path = $request->file('avatar')->store(config('custom.file_storage.upload_path'));
                $path = str_replace(config('custom.file_storage.upload_path') . '/', '', $path);
            }
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['register_email'],
            'password' => Hash::make($data['register_password']),
            'university' => $data['university'],
            'batch_id' => $data['batch_id'],
            'language_id' => $data['language_id'],
            'position_id' => $data['position_id'],
            'user_id' => $data['primary_trainer'],
            'avatar' => $path,
        ]);
    }
}
