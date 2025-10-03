<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $articleId)
    {
        $request->validate([
            'content' => 'required|string',
            'name'    => 'required_without:user|string|max:255',
            'email'   => 'required_without:user|email',
        ]);

        $user = Auth::user();

        Comment::create([
            'article_id' => $articleId,
            'name'       => $user ? $user->name : $request->name,
            'email'      => $user ? $user->email : $request->email,
            'content'    => $request->content,
        
        ]);

        return back()->with('success', 'Votre commentaire a été publié.');
    }
}
