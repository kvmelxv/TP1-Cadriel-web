<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ville;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::select()
            ->orderby('nom')
            ->paginate(12);     
        
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villes = Ville::all();
        return view('users.create', ['villes' => $villes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string',
            'telephone' => 'required',
            'email' => 'required|email',
            'date_de_naissance' => 'required|date',
            'password' => [ Password::min(6)
                                ->max(20)
                                ->mixedCase()
                                ->numbers()
                                ->symbols()
                                ->uncompromised(),
                            'confirmed' ],
            'ville_id' => 'required|exists:villes,id'
        ]);

        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        $etudiant = new Etudiant;
        $etudiant->id = $user->id;
        $etudiant->save();
        
        return redirect(route('user.index'))->withSuccess('Utilisateur crée avec succée !');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $villes = Ville::all();
        return view('users.edit', ['villes' => $villes, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
         $request->validate([
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string',
            'telephone' => 'required',
            'email' => 'required|email',
            'date_de_naissance' => 'required|date',
            'ville_id' => 'required|exists:villes,id'
        ]);

        $user->fill($request->all());
        $user->save();
        
        return redirect()->route('user.show', $user->id)->withSuccess(trans('The user has been modified with success.'));
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->withSuccess(trans('The user has been deleted.'));
    }

    public function forgot() {
        return view('users.forgot');
    }

    public function mail(Request $request) {

        $request->validate([
            'email'=>'required|email|exists:users'
        ]);

        $user = User::where('email', $request->email)->first();
        $userId = $user->id;
        $tempPassword = str::random(45);
        $user->temp_password = $tempPassword;
        $user->save();

        $to_name = $user->name;
        $to_email = $request->email;
        $body = "<a href= '".route('password.reset', [$userId, $tempPassword])."'> Click here to reset your passaword </a>";

        Mail::send('users.mail', ['name'=>$to_name, 'body'=>$body],
            function($message) use ($to_email)
            {
                $message->to($to_email)->subject('Reset Password');
            }
        );

        return redirect(route('login'))->withSuccess('Please check your email to reset your password!');

    }
}
