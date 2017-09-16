<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LeadsSaveRequest;
use App\Lead;

class LandingController extends Controller
{

    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = view('welcome');

        return $view;
    }

    public function store(LeadsSaveRequest $request)
    {
        $this->lead->fill($request->all());
        $this->lead->save();

        return redirect()->route('leads.success');
    }

    public function success()
    {

    }
}
