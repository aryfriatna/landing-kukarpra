<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Premium All-Season Tire',
                'category' => 'Passenger',
                'image' => 'https://images.pexels.com/photos/3806288/pexels-photo-3806288.jpeg',
                'price' => '120.00',
                'description' => 'All-season performance with enhanced grip and durability for passenger vehicles.'
            ],
            [
                'id' => 2,
                'name' => 'Off-Road Adventure Tire',
                'category' => 'SUV/Truck',
                'image' => 'https://images.pexels.com/photos/12920715/pexels-photo-12920715.jpeg',
                'price' => '175.00',
                'description' => 'Rugged construction with aggressive tread for maximum traction in off-road conditions.'
            ],
            [
                'id' => 3,
                'name' => 'Performance Sport Tire',
                'category' => 'Performance',
                'image' => 'https://images.pexels.com/photos/2865990/pexels-photo-2865990.jpeg',
                'price' => '199.00',
                'description' => 'High-speed rated with responsive handling for sports cars and performance vehicles.'
            ],
            [
                'id' => 4,
                'name' => 'Eco-Friendly Tire',
                'category' => 'Passenger',
                'image' => 'https://images.pexels.com/photos/244552/pexels-photo-244552.jpeg',
                'price' => '145.00',
                'description' => 'Low rolling resistance design for improved fuel efficiency and reduced carbon footprint.'
            ]
        ];

        $categories = ['All', 'Passenger', 'SUV/Truck', 'Performance', 'All-Season', 'Winter', 'Summer'];

        return view('pages.products', compact('products', 'categories'));
    }
}