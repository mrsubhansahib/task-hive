<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Workspace;

class WorkspaceController extends Controller
{
    public function create(){
        $workspace = Auth::user()->workspaces()->first();
        return view ('pages.workspace.create');
    }

    public function edit()
    {
        $workspace = Auth::user()->workspaces()->first();
        return view('pages.workspace.update', compact('workspace'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:30',
            'description' => 'required|max:100',
            'visibility' => 'required|in:public,private',
        ]);

        $workspace = Auth::user()->workspaces()->first();

        if (!$workspace) {
            return redirect()->back()->with('error', 'Workspace not found.');
        }

        $workspace->update([
            'title' => $request->title,
            'description' => $request->description,
            'visibility' => $request->visibility,
        ]);

        return redirect('/workspace')->with('success', 'Workspace updated successfully.');
    }
}
