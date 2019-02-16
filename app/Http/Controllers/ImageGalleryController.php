<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;

class ImageGalleryController extends Controller
{
    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$images = ImageGallery::get();
    	return view('image-gallery',compact('images'));
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        $input['title'] = $request->title;
        ImageGallery::create($input);


    	return back()
    		->with('success','Image Uploaded successfully.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	ImageGallery::find($id)->delete();
    	return back()
    		->with('success','Image removed successfully.');	
    }
}
