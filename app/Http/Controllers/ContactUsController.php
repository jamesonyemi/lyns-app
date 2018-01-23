<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;


class ContactUsController extends Controller
{

    /**
     * Display a listing of the projects.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        // $projects = Project::with('assignedby')->paginate(25);
         // $projects = Project::latest()->paginate(25);
         //      return view('projects.index',compact('projects'))
         //          ->with('p', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new project.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $contact =  ContactUs::pluck('name','id')->all();
           // $assigned_to  =  User::pluck('name','id')->all();
        return view('index', compact('contact'));
    }

    /**
     * Store a new project in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $this->affirm($request);
              
             $contact = ContactUs::create($data);
            return redirect()->route('index')
                             ->with('success_message', 'Your Message has been Successfully Sent!');

        } 

        catch (Exception $exception) 
        {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request']);
        }
    }

    /**
     * Display the specified project.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $saveContactInfo = ContactUs::findOrFail($id);

        return view('index', compact('saveContactInfo'));
    }

    /**
     * Show the form for editing the specified project.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        // $project = Project::findOrFail($id);
        // $assigned_to = User::pluck('name','id')->all();

        // return view('projects.edit', compact('project','assigned_to'));
    }

    /**
     * Update the specified project in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            $this->affirm($request);
            $data = $this->getData($request);
            
            $project = Project::findOrFail($id);
            $project->update($data);

            return redirect()->route('projects.project.index')
                             ->with('success_message', 'Project was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request']);
        }        
    }

    /**
     * Remove the specified project from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->delete();

            return redirect()->route('projects.project.index')
                             ->with('success_message', 'Project was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request']);
        }
    }
    
    /**
     * Validate the given request with the defined rules.
     *
     * @param  Illuminate\Http\Request  $request
     *
     * @return boolean
     */
    protected function affirm(Request $request)
    {
        return $this->validate($request, [
            'name' => 'string|required',
            'email' => 'email|required', 
            'message' => 'string|min:1|nullable',
        ]);
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $data =  $request->all();


        $data['name'] = !empty($request->input('name')) ? $request->input('name') : null;
        $data['email'] = !empty($request->input('email')) ? $request->input('email') : null;
        $data['message'] = !empty($request->input('message')) ? $request->input('message') : null;

        return $data;
    }

}