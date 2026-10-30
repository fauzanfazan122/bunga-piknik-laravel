<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{

    // data sample
    private $dataProduk = [
        [
            "judul" => "Bucket Mawar",
            "deskripsi" => "Bucket bunga mawar dengan nuansa romantis untuk acara spesial.",
            "harga" => 70000,
            "gambar" => "https://cahayafloristmojokerto.com/wp-content/uploads/2024/03/buket-bunga-hati-besar-mojokerto.png"
        ],
        [
            "judul" => "Bucket Melati",
            "deskripsi" => "Komposisi bunga melati yang harum dan elegan untuk dekorasi.",
            "harga" => 85000,
            "gambar" => "https://static.hiamag.com/styles/autox754/public/article/15/07/2020/9513601-1742291491.jpg"
        ],
        [
            "judul" => "Bucket Anggrek",
            "deskripsi" => "Bucket anggrek dengan warna cantik dan tekstur unik.",
            "harga" => 95000,
            "gambar" => "https://cdn.sanity.io/images/ps1oh0ka/production/125cc22d124c35057708a733955b24a0adf64b5a-800x800.jpg"
        ],
        [
            "judul" => "Bucket Tulip",
            "deskripsi" => "Bunga tulip segar dengan kombinasi warna pastel yang menawan.",
            "harga" => 110000,
            "gambar" => "https://cdn.shopify.com/s/files/1/1785/6349/products/image_404a8e92-7ff7-4192-b8fd-a56b458471f2.jpg?v=1591962283"
        ],
        [
            "judul" => "Bucket Lavender",
            "deskripsi" => "Aroma lavender yang menenangkan cocok untuk hadiah dan dekorasi.",
            "harga" => 125000,
            "gambar" => "https://www.ufl.ua/files/IMG_9911.jpg"
        ],
        [
            "judul" => "Bucket Daisy",
            "deskripsi" => "Bunga daisy yang cerah dan fresh untuk acara keluarga.",
            "harga" => 90000,
            "gambar" => "https://vietnameseflowers.com/cdn/shop/products/daisy-flower-vietnam_1200x1200.jpg?v=1595981788"
        ],
        [
            "judul" => "Bucket Krisan",
            "deskripsi" => "Kombinasi krisan dengan warna hangat untuk tampilan elegan.",
            "harga" => 100000,
            "gambar" => "https://content2.flowwow-images.com/data/flowers/524x524/82/1703047489_95448582.jpg"
        ],
        [
            "judul" => "Bucket Wedding",
            "deskripsi" => "Paket bucket bunga premium untuk momen pernikahan yang berkesan.",
            "harga" => 250000,
            "gambar" => "https://www.freshbouquet.co.uk/cdn/shop/files/white-hydrangea-with-roses-bridal-wedding-bouquet-3033752.png?v=1759067313&width=1946"
        ],
        [
            "judul" => "Bucket Cokelat",
            "deskripsi" => "Campuran bunga dan cokelat untuk hadiah yang lebih istimewa.",
            "harga" => 180000,
            "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIhqzGiCaw9GyW8ynjMpLSA_rU7tnncuIhtSSfhqoEqZ06YYgy73DkeWP5&s=10"
        ],
        [
            "judul" => "Bucket Floral Deluxe",
            "deskripsi" => "Bucket floral premium dengan pilihan bunga segar premium.",
            "harga" => 220000,
            "gambar" => "https://www.longmansflorist.co.uk/Websites/853/images/product/1868167024large.jpg?ver=4"
        ]
    ];

    public function index()
    {
        return view('produk', [
            'produk' => $this->dataProduk,
            'title' => 'Produk'
        ]);
    }
}
