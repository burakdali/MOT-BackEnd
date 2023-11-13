<?php

namespace App\Http\Controllers;

use App\Http\Resources\LinksResource;
use App\Models\Link;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;

class LinkController extends Controller
{

    public function index()
    {
        $link = Link::all();
        return view('Minister.Links', compact('link'));
    }
    function getAllLinks()
    {
        $links = Link::all();
        return LinksResource::collection($links);
    }

    public function create()
    {
        $link = Link::all();
        return view('Minister.create_links', compact('link'));
    }


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


    public function show(Link $link)
    {
        //
    }


    public function edit($id)
    {
        $link = Link::find($id);
        return view('Minister.edit_link', compact('link'));
    }


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

    public function destroy($id)
    {
        $link = Link::find($id);
        $link->delete();
        return redirect()->route('Links.index');
    }
}
