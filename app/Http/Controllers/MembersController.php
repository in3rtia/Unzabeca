<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Member;
use App\Status;


class MembersController extends Controller
{
    //Retrieve users and view them
    public function viewMembers()
    {
        $members = Member::where('approved', 'Approved Member')
                    ->orderBy('first_name', 'desc')
                    ->take(10)
                    ->get();
        return view('members.viewMembers')->with('members', $members);
    }

    //Display view for adding a new member
    public function viewAddMember()
    {
        $status = Status::all();
        return view('members.addMember')->with('status', $status);
    }

    public function viewEditMember($member_id)
    {
        $members = Member::findOrFail($member_id);
        return view('members.viewMembers')->with('members', $members);
    }

    //Update member details
    public function update(Request $data, $member_id)
    {
        // validation
        $this->validate($data, [
            'first_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email'=> 'required|max:255|email',
            'year' => 'required|max:255',
            'role' => 'max:255',
            'status_id' => 'required|max:255',
            'phone_number' => 'required|max:255'
        ]);

        $members = Member::findOrFail($member_id);

        $members->update($data->all());

        return redirect()->back()
            ->with('status', 'Member has been updated successfully!!');
    }


    //Add a new member
    public function addMember(Request $data)
    {
        $this->validate($data, [
            'first_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email'=> 'required|max:255|email|unique:members',
            'year' => 'required|max:255',
            'role' => 'max:255',
            'status_id' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'approved' => 'max:255'
        ]);

        Member::create([
            'first_name' => $data -> first_name,
            'middle_name' => $data -> middle_name,
            'last_name' => $data -> last_name,
            'email' => $data -> email,
            'year' => $data -> year,
            'role' => ucwords($data -> role),
            'status_id' => $data -> status_id,
            'phone_number' => $data -> phone_number,
            'approved' => $data -> approved
        ]);

        return redirect()->back()->with('status', 'Member has been added successfully!!');
    }

    public function delete($member_id)
    {
        $user = Member::findOrFail($member_id);
        $user->delete();
        return redirect()->back()->with('status', 'Member has been deleted successfully!!');
    }
}
