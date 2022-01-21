<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Password;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUserUpdateRequest $request, User $user)
    {
        $user->send_comments = $request->has('send_comments');
        $user->send_videos = $request->has('send_videos');
        $user->email = $request->email;
        $user->name = $request->name;
        $user->zip = $request->zip;

        $user->update();

        Alert::success('Success!', 'User Updated Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        Alert::error('Success!', $user->name . ' has been deleted');

        return redirect(route('admin.users.index'));
    }

    public function ban($id)
    {
        $user = User::find($id);

        $user->is_banned = 1;
        $user->update();

        Alert::success('Success!', $user->name . ' was banned!');

        return redirect()->back();
    }

    public function unban($id)
    {
        $user = User::find($id);

        $user->is_banned = 0;
        $user->update();

        Alert::success('Success!', $user->name . ' was unbanned!');

        return redirect()->back();
    }

    public function resetPasswordLink($id)
    {
        $user = User::find($id);

        Password::broker()->sendResetLink(['email' => $user->email]);

        Alert::success('Success!', 'Password reset link sent to: '. $user->email);

        return redirect(route('admin.users.index'));
    }
}
