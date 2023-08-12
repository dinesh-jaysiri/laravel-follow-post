<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function storeAvatar(Request $request)
    {
        $request->validate([
            'avatar' => "required|max:3000|image"
        ]);


        $user = User::find(auth()->user()->id);
        $fileName = $user->id . '-' . uniqid() . '.jpg';
        $imgData = Image::make($request->file('avatar'))->fit(120)->encode('jpg');

        Storage::put('public/avatars/' . $fileName, $imgData);
        $oldAvatar = $user->avatar;
        $user->avatar = $fileName;
        $user->save();

        if ($oldAvatar != '/img/user.png') {
            Storage::delete(str_replace('/storage/', 'public/', $oldAvatar));
        }
        return redirect('/profile/' . $user->username)->with('success', "Successfully uploaded new avatar.");
    }

    public function showAvatarUplod()
    {
        return view('avatar-upload');
    }

    public function showHomePage()
    {
        $user = User::find(auth()->user()->id);
        return view('home-feed',["feedPosts"=> $user->feedPosts()->latest()->paginate(4)]);
    }

    private function getSheardData($user)
    {
        $isFollowing = 0;
        if (auth()->check()) {
            $isFollowing = Follow::where([['user_id', '=', auth()->user()->id], ['followeduser', '=', $user->id]])->count();

        }
        View::share('sharedData', ['user' => $user, 'postCount' => $user->posts()->count(), 'isFollowing' => $isFollowing, 'followingCount' => $user->following()->count(), 'followersCount' => $user->followers()->count()]);

    }


    public function profile(User $user)
    {
        $this->getSheardData($user);
        return view('profile-posts', ['posts' => $user->posts()->latest()->get()]);
    }



    public function followers(User $user)
    {
        $this->getSheardData($user);
        return view('profile-followers', ['followers' => $user->followers()->latest()->get()]);
    }

    public function following(User $user)
    {
        $this->getSheardData($user);
        return view('profile-following', ['following' => $user->following()->latest()->get()]);
    }

    public function showRegisterPage()
    {
        return view("sign-up");
    }
    public function register(Request $request)
    {

        $incomingField = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:4', 'confirmed']
        ]);

        $incomingField['password'] = bcrypt($incomingField['password']);

        $user = User::create($incomingField);
        auth()->login($user);

        return redirect('/')->with('success', 'You have successfully registered and logged in.');

    }

    public function login(Request $request)
    {
        $incomingField = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $incomingField['email'] = strip_tags($incomingField['email']);
        $incomingField['password'] = strip_tags($incomingField['password']);

        auth()->attempt(['email' => $incomingField['email'], 'password' => $incomingField['password']]);

        if (auth()->check()) {
            $request->session()->regenerate();

        }

        return redirect('/')->with('failure', 'Invalid login.');
    }

    public function showLoginPage()
    {

        return view('sign-in');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'You are successfully loged out.');
    }
}