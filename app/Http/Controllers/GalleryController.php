<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = [
            [
                'id' => 1,
                'category' => 'Products',
                'src' => 'https://images.pexels.com/photos/3806288/pexels-photo-3806288.jpeg',
                'alt' => 'Premium tires display',
                'title' => 'Premium Tire Selection',
                'description' => 'Our extensive range of high-quality tires for all vehicle types'
            ],
            [
                'id' => 2,
                'category' => 'Services',
                'src' => 'https://images.pexels.com/photos/4489766/pexels-photo-4489766.jpeg',
                'alt' => 'Tire replacement service',
                'title' => 'Professional Tire Installation',
                'description' => 'Our technicians installing new tires with precision equipment'
            ],
            [
                'id' => 3,
                'category' => 'Facilities',
                'src' => 'https://images.pexels.com/photos/3807079/pexels-photo-3807079.jpeg',
                'alt' => 'Modern service center',
                'title' => 'State-of-the-Art Facility',
                'description' => 'Our clean, modern service center equipped with the latest technology'
            ]
        ];

        $categories = ['All', 'Products', 'Services', 'Facilities', 'Team'];

        return view('pages.gallery', compact('images', 'categories'));
    }
}