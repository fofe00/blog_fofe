<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function socialProvider()
    {
        //provider
        return Socialite::driver('github')->redirect();
    }

    public function socialProviderCallback()
    {
        //calback url
        /** Using try catch because if any user directly hits the URL then
         * it will throw exception
         */
        try {
            /** Use socialite to get the user details like token, name, email, profile pic
             * as per your needs
             */
            $socialUser     = Socialite::driver('github')->user();
            $token          = $socialUser->token;
            $name           = $socialUser->name;
            $email          = $socialUser->email;

            /** Uncomment the following to check the details description of user details */
            //echo '<pre>'; print_r($socialUser);exit;

            /** Get the user details */
            $user           = User::where('email', $email)->first();

            /** If no user found with that email then you can insert into database */
            if (!$user) {
                /** Create new user with GitHub credentials */
                $newUser = User::create([
                    'provider_type'     => 'github',
                    'provider_token'    => $token,
                    'name'              => $name,
                    'email'             => $email,
                ]);
                /** User is valid and store his details in session and redirect to dashboard */
                session()->put('user_details', $newUser);
                return redirect('/home/')->send();
            }
            /** Check user with provider of your database */
            if ($user->provider_type != 'github') {
                session()->flash('error', 'Please try logging with GitHub');
                return redirect('/auth/login');
            }
            /** Every time after successful authentication we will update provider token of our database */
            $user->provider_token = $token;
            $user->save();

            /** User is valid and store his details in session and redirect to dashboard */
            session()->put('user_details', $user);
            return redirect('/user/dashboard')->send();
        } catch (\Exception $e) {
            session()->flash('error', 'Oops error in validating you. Try again');
            return redirect('/auth/login');
        }
    }
}
