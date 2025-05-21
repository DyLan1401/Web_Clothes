<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
=======

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534

/**
 * CRUD User controller
 */
class CrudUserController extends Controller
{

    /**
     * Login page
     */
    public function login()
    {
        return view('crud_user.login');
    }

    /**
     * User submit form login
     */
    public function authUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
<<<<<<< HEAD

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('list')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }
=======
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('index')
                ->withSuccess('Signed in');
        }
    
        return redirect("login")->withSuccess('Login details are not valid');
    }
    
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534

    /**
     * Registration page
     */
    public function createUser()
    {
        return view('crud_user.create');
    }
<<<<<<< HEAD

=======
 
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
    /**
     * User submit form register
     */
    public function postUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = User::create([
            'name' => $data['name'],
<<<<<<< HEAD
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
=======
           
            'email' => $data['email'],
            'password' =>\Illuminate\Support\Facades\Hash::make($data['password'])
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
        ]);

        return redirect("login");
    }

    /**
     * View user detail page
     */
<<<<<<< HEAD
    public function readUser(Request $request)
    {
=======
    public function readUser(Request $request) {
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.read', ['messi' => $user]);
    }

    /**
     * Delete user by id
     */
<<<<<<< HEAD
    public function deleteUser(Request $request)
    {
=======
    public function deleteUser(Request $request) {
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
        $user_id = $request->get('id');
        $user = User::destroy($user_id);

        return redirect("list")->withSuccess('You have signed-in');
    }

    /**
     * Form update user page
     */
    public function updateUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.update', ['user' => $user]);
    }

    /**
     * Submit form update user
     */
    public function postUpdateUser(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
<<<<<<< HEAD
            'email' => 'required|email|unique:users,id,' . $input['id'],
            'password' => 'required|min:6',
        ]);

        $user = User::find($input['id']);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->save();
=======
            
            'email' => 'required|email|unique:users,id,'.$input['id'],
            'password' => 'required|min:6',
        ]);

       $user = User::find($input['id']);
       $user->name = $input['name'];
       $user->email = $input['email'];
       $user->password = $input['password'];
       $user->save();
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534

        return redirect("list")->withSuccess('You have signed-in');
    }

    /**
     * List of users
     */
    public function listUser()
    {
<<<<<<< HEAD
        if (Auth::check()) {
            $users = User::paginate(10);
            return view('crud_user.list', ['users' => $users]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Sign out
     */
    public function signOut()
    {
        Session::flush();
=======
//       // Lấy tất cả người dùng từ bảng users
        $users = User::all();

        // Truyền dữ liệu vào view
        return view('crud_user.list', compact('users'));
    }
    /**
     * Sign out
     */
    public function signOut() {
        \Illuminate\Support\Facades\Session::flush();
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
        Auth::logout();

        return Redirect('login');
    }
<<<<<<< HEAD

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_role');
    }
}
=======
}
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
