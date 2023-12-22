<?php

namespace App\Http\Controllers;

use App\Models\User;
use Gate;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index()
    {
        // Ensure the user is an admin
        if (!Gate::allows('isAdmin')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $users = User::all();

        return response()->json($users);
    }

    public function destroy($userId)
    {
        if (!Gate::allows('isAdmin')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $user = User::find($userId);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }
}
