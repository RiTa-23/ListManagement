<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $members = Member::with('user')->latest()->get();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validated=$request->validate([
      'studentID' => 'required|max:7|unique:members,studentID',
      'name' => 'required|max:20',
      'nickname' => 'nullable|max:20',
      'faculty' => 'required|max:10',
      'department' => 'required|max:10',
      'grade' => 'required|max:5',
    ]);
            $request->user()->members()->create($validated);
            return redirect()->route('members.create')->with('success','メンバーが作成されました'); 
        }catch(\Exception $e){
            return redirect()->route('members.create')->with('error', 'メンバーの作成に失敗しました');
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('members.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('members.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        try{
            $validated=$request->validate([
      'studentID' => 'required|max:7|',
      'name' => 'required|max:20',
      'nickname' => 'nullable|max:20',
      'faculty' => 'required|max:10',
      'department' => 'required|max:10',
      'grade' => 'required|max:5',
    ]);
            $member->update($validated);
            return redirect()->route('members.index',$member)->with('success','更新に成功しました'); 
        }catch(\Exception $e){
            return redirect()->route('members.edit',$member)->with('error', '更新に失敗しました');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function search(Request $request)
{
    $query = Member::query();

    // 各項目に対して検索条件が指定されているかチェックし、絞り込み
    if ($request->filled('studentID')) {
        $query->where('studentID', 'like', '%' . $request->studentID . '%');
    }

    if ($request->filled('name')) {
        $query->where('name', 'like', '%' . $request->name . '%');
    }

    if ($request->filled('nickname')) {
        $query->where('nickname', 'like', '%' . $request->nickname . '%');
    }

    if ($request->filled('faculty')) {
        $query->where('faculty', 'like', '%' . $request->faculty . '%');
    }

    if ($request->filled('department')) {
        $query->where('department', 'like', '%' . $request->department . '%');
    }

    if ($request->filled('grade')) {
        $query->where('grade', 'like', '%' . $request->grade . '%');
    }

    // ページネーションを追加（1ページに10件表示）
    $members = $query->latest()->paginate(10);

    return view('members.search', compact('members'));
}


}
