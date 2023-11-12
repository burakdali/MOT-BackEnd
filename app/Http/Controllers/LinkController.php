<?php

namespace App\Http\Controllers;

use App\Http\Resources\LinksResource;
use App\Models\Link;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $link= Link::all();
        return view('Minister.Links' , compact('link'));
    }
    function getAllLinks()
    {
        $links = Link::all();
        return LinksResource::collection($links);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $link= Link::all();
        return view('Minister.create_links',compact('link'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLinkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLinkRequest $request)
    {
        $request->validate([
            'facebook'      => 'required',
            'instagram'     => 'required',
            'x'             => 'required',
            'linked_in'     => 'required',
            'location'      => 'required',
            'phone_number'  => 'required',
            'email'         => 'required',
        ]);
        Link::create($request->post());
        return redirect()->route('Links.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $link=Link::find($id);
        return view('Minister.edit_link',compact('link'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLinkRequest  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        $request->validate([
            'facebook'      => 'required',
            'instagram'     => 'required',
            'x'             => 'required',
            'linked_in'     => 'required',
            'location'      => 'required',
            'phone_number'  => 'required',
            'email'         => 'required',
        ]);

        $link->fill($request->post())->save();

        return redirect()->route('links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $link= Link::find($id);
        $link->delete();
        return redirect()->route('Links.index');
    }

}
