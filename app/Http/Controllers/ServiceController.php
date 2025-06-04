<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Tire Replacement',
                'description' => 'Professional installation of new tires with proper balancing and alignment checks.',
                'icon' => 'wrench'
            ],
            [
                'title' => 'Wheel Alignment',
                'description' => 'Precision wheel alignment to improve handling and extend tire life.',
                'icon' => 'tool'
            ],
            [
                'title' => 'Tire Rotation',
                'description' => 'Regular rotation to ensure even wear and maximum tire life.',
                'icon' => 'refresh-ccw'
            ],
            [
                'title' => 'Tire Repair',
                'description' => 'Quick and reliable repair of punctures and minor damage.',
                'icon' => 'shield'
            ],
            [
                'title' => 'Tire Balancing',
                'description' => 'Computer-assisted balancing for a smooth ride without vibration.',
                'icon' => 'activity'
            ],
            [
                'title' => '24/7 Roadside Assistance',
                'description' => 'Emergency tire service when you need it most, anywhere, anytime.',
                'icon' => 'truck'
            ]
        ];

        return view('pages.services', compact('services'));
    }
}