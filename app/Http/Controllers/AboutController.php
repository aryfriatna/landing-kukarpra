<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $milestones = [
            ['year' => '1995', 'title' => 'Company Founded', 'description' => 'Started as a small family-owned tire shop with just 3 employees.'],
            ['year' => '2002', 'title' => 'First Expansion', 'description' => 'Opened our second location and expanded our product offerings.'],
            ['year' => '2010', 'title' => 'Service Innovation', 'description' => 'Introduced 24/7 roadside assistance and mobile tire fitting services.'],
            ['year' => '2015', 'title' => '20th Anniversary', 'description' => 'Celebrated 20 years with 10 locations across the country.'],
            ['year' => '2020', 'title' => 'Digital Transformation', 'description' => 'Launched our e-commerce platform and digital service scheduling.'],
            ['year' => '2023', 'title' => 'Sustainability Initiative', 'description' => 'Introduced eco-friendly tire options and recycling program.']
        ];

        return view('pages.about', compact('milestones'));
    }
}