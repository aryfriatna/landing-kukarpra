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
                'name' => 'Ban Forklift',
                'category' => 'Forklift',
                'image' => asset('assets/images/forklift.jpg'),
                'price' => '120.00',
                'description' => 'Ban tangguh untuk mendukung performa dan keselamatan forklift di area industri dan pergudangan. Tersedia dalam tipe solid, pneumatic, dan non-marking.',
                'link' => route('products.forklift')
            ],
            [
                'id' => 2,
                'name' => 'Ban Dump Truck',
                'category' => 'Dump Truck',
                'image' => asset('assets/images/dump-truck.png'),
                'price' => '175.00',
                'description' => 'Dirancang untuk traksi tinggi dan ketahanan di medan berat. Cocok untuk kebutuhan tambang, proyek konstruksi, dan area berlumpur.',
                'link' => route('products.dumpTruck')
            ],
            [
                'id' => 3,
                'name' => 'Ban Light Truck',
                'category' => 'Light Truck',
                'image' => asset('assets/images/light-truck.jpg'),
                'price' => '199.00',
                'description' => 'Ideal untuk angkutan ringan dan distribusi harian. Memberikan stabilitas, efisiensi bahan bakar, dan daya cengkeram optimal di segala cuaca.',
                'link' => route('products.lightTruck')
            ],
            [
                'id' => 4,
                'name' => 'Ban Tronton',
                'category' => 'Tronton',
                'image' => asset('assets/images/tronton.jpg'),
                'price' => '145.00',
                'description' => 'Khusus untuk kendaraan niaga berat, ban ini menawarkan daya tahan beban tinggi, kestabilan, dan efisiensi untuk jalur logistik jarak jauh.',
                'link' => route('products.tronton')
            ]
        ];

        $categories = ['All', 'Forklift', 'Dump Truck', 'Light Truck', 'Tronton'];

        return view('pages.products', compact('products', 'categories'));
    }

    public function forklift()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Ban Forklift 4.00-8',
                'category' => 'Forklift',
                'image' => asset('assets/images/forklift 4.00-8.jpg'),
                'price' => '25000.00',
                'description' => 'Robust forklift designed for heavy lifting and warehouse operations.'
            ],
            [
                'id' => 2,
                'name' => 'Ban Forklift 5.00-8',
                'category' => 'Forklift',
                'image' => asset('assets/images/forklift 5.00-8.jpg'),
                'price' => '30000.00',
                'description' => 'Environmentally friendly electric forklift with low noise operation.'
            ],
            [
                'id' => 3,
                'name' => 'Ban Forklift 16x6-8',
                'category' => 'Forklift',
                'image' => asset('assets/images/forklift 16x6-8.jpg'),
                'price' => '30000.00',
                'description' => 'Environmentally friendly electric forklift with low noise operation.'
            ],
            [
                'id' => 4,
                'name' => 'Ban Forklift 18x7-8',
                'category' => 'Forklift',
                'image' => asset('assets/images/forklift 18x7-8.jpg'),
                'price' => '30000.00',
                'description' => 'Environmentally friendly electric forklift with low noise operation.'
            ]
        ];
        return view('pages.products.forklift', compact('products'));
    }

    public function dumpTruck()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Ban Dump Truck 7.50-15',
                'category' => 'Dump Truck',
                'image' => asset('assets/images/truck 7.50 - 15.jpg'),
                'price' => '25000.00',
                'description' => 'Robust forklift designed for heavy lifting and warehouse operations.'
            ],
            [
                'id' => 2,
                'name' => 'Ban Dump Truck 7.50-16',
                'category' => 'Dump Truck',
                'image' => asset('assets/images/truck 7.50 - 16.jpg'),
                'price' => '30000.00',
                'description' => 'Environmentally friendly electric forklift with low noise operation.'
            ],
            [
                'id' => 3,
                'name' => 'Ban Dump Truck 8.25-16',
                'category' => 'Dump Truck',
                'image' => asset('assets/images/truck 8.25 - 16.jpg'),
                'price' => '35000.00',
                'description' => 'Heavy-duty tire designed for extreme off-road conditions.'
            ],
            [
                'id' => 4,
                'name' => 'Ban Dump Truck 8.25-20',
                'category' => 'Dump Truck',
                'image' => asset('assets/images/truck 8.25 - 20.jpg'),
                'price' => '40000.00',
                'description' => 'High-performance tire for construction and mining applications.'
            ],
            [
                'id' => 5,
                'name' => 'Ban Dump Truck 9.00-20',
                'category' => 'Dump Truck',
                'image' => asset('assets/images/truck 9 - 20.jpg'),
                'price' => '45000.00',
                'description' => 'Designed for heavy-duty trucks with superior load capacity.'
            ]
        ];
        return view('pages.products.dump-truck', compact('products'));
    }

    public function lightTruck()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Ban Light Truck 7.50-15',
                'category' => 'Light Truck',
                'image' => asset('assets/images/truck 7.50 - 15.jpg'),
                'price' => '25000.00',
                'description' => 'Robust forklift designed for heavy lifting and warehouse operations.'
            ],
            [
                'id' => 2,
                'name' => 'Ban Light Truck 7.50-16',
                'category' => 'Light Truck',
                'image' => asset('assets/images/truck 7.50 - 16.jpg'),
                'price' => '30000.00',
                'description' => 'Environmentally friendly electric forklift with low noise operation.'
            ],
            [
                'id' => 3,
                'name' => 'Ban Light Truck 8.25-16',
                'category' => 'Light Truck',
                'image' => asset('assets/images/truck 8.25 - 16.jpg'),
                'price' => '35000.00',
                'description' => 'Heavy-duty tire designed for extreme off-road conditions.'
            ],
            [
                'id' => 4,
                'name' => 'Ban Light Truck 8.25-20',
                'category' => 'Light Truck',
                'image' => asset('assets/images/truck 8.25 - 20.jpg'),
                'price' => '40000.00',
                'description' => 'High-performance tire for construction and mining applications.'
            ],
            [
                'id' => 5,
                'name' => 'Ban Light Truck 9.00-20',
                'category' => 'Light Truck',
                'image' => asset('assets/images/truck 9 - 20.jpg'),
                'price' => '45000.00',
                'description' => 'Designed for heavy-duty trucks with superior load capacity.'
            ]
        ];
        return view('pages.products.light-truck', compact('products'));
    }

    public function tronton()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Ban Tronton 7.50-15',
                'category' => 'Tronton',
                'image' => asset('assets/images/truck 7.50 - 15.jpg'),
                'price' => '25000.00',
                'description' => 'Robust forklift designed for heavy lifting and warehouse operations.'
            ],
            [
                'id' => 2,
                'name' => 'Ban Tronton 7.50-16',
                'category' => 'Tronton',
                'image' => asset('assets/images/truck 7.50 - 16.jpg'),
                'price' => '30000.00',
                'description' => 'Environmentally friendly electric forklift with low noise operation.'
            ],
            [
                'id' => 3,
                'name' => 'Ban Tronton 8.25-16',
                'category' => 'Tronton',
                'image' => asset('assets/images/truck 8.25 - 16.jpg'),
                'price' => '35000.00',
                'description' => 'Heavy-duty tire designed for extreme off-road conditions.'
            ],
            [
                'id' => 4,
                'name' => 'Ban Tronton 8.25-20',
                'category' => 'Tronton',
                'image' => asset('assets/images/truck 8.25 - 20.jpg'),
                'price' => '40000.00',
                'description' => 'High-performance tire for construction and mining applications.'
            ],
            [
                'id' => 5,
                'name' => 'Ban Tronton 9.00-20',
                'category' => 'Tronton',
                'image' => asset('assets/images/truck 9 - 20.jpg'),
                'price' => '45000.00',
                'description' => 'Designed for heavy-duty trucks with superior load capacity.'
            ]
        ];
        return view('pages.products.tronton', compact('products'));
    }
}
