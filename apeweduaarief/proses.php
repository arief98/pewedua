<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Ujian Tengah Semester Pemrograman Web Dua</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link href="assets/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="assets/jumbotron-narrow.css" rel="stylesheet">
    <script src="assets//ie-emulation-modes-warning.js"></script>
  </head>

  <body>
    
            <form method="post" action="index.php" value="sejarah">
<?php 

        $artikel = [
                      [
                        'id'=>1,
                        'judul'=>'Artikel Sejarah 1',
                        'kategori'=>'sejarah',
                        'isi'=>'Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. '
                      ],
                      [
                        'id'=>2,
                        'judul'=>'Artikel Sejarah 2',
                        'kategori'=>'sejarah',
                        'isi'=>'Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. '
                      ],
                      [
                        'id'=>3,
                        'judul'=>'Artikel Sejarah 3',
                        'kategori'=>'sejarah',
                        'isi'=>'Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. '
                      ],
                      [
                        'id'=>4,
                        'judul'=>'Artikel Sejarah 4',
                        'kategori'=>'sejarah',
                        'isi'=>'Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. '
                      ],
                      [
                        'id'=>5,
                        'judul'=>'Artikel Sejarah 5',
                        'kategori'=>'sejarah',
                        'isi'=>'Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. '
                      ],
                      [
                        'id'=>6,
                        'judul'=>'Artikel Sejarah 6',
                        'kategori'=>'sejarah',
                        'isi'=>'Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. '
                      ],
                      [
                        'id'=>7,
                        'judul'=>'Artikel Sejarah 7',
                        'kategori'=>'sejarah',
                        'isi'=>'Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. '
                      ],
                      [
                        'id'=>8,
                        'judul'=>'Artikel Sejarah 8',
                        'kategori'=>'sejarah',
                        'isi'=>'Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. Isi artikel sejarahnya adalah ini. '
                      ],


                                            [
                        'id'=>9,
                        'judul'=>'Artikel Teknologi 1',
                        'kategori'=>'teknologi',
                        'isi'=>'Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. '
                      ],
                      [
                        'id'=>10,
                        'judul'=>'Artikel Teknologi 2',
                        'kategori'=>'teknologi',
                        'isi'=>'Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. '
                      ],
                      [
                        'id'=>11,
                        'judul'=>'Artikel Teknologi 3',
                        'kategori'=>'teknologi',
                        'isi'=>'Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. '
                      ],
                      [
                        'id'=>12,
                        'judul'=>'Artikel Teknologi 4',
                        'kategori'=>'teknologi',
                        'isi'=>'Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. Isi artikel teknologinya adalah ini. '
                      ],
                      [
                        'id'=>13,
                        'judul'=>'Artikel Olahraga 1',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>14,
                        'judul'=>'Artikel Olahraga 2',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>15,
                        'judul'=>'Artikel Olahraga 3',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>16,
                        'judul'=>'Artikel Olahraga 4',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>17,
                        'judul'=>'Artikel Olahraga 5',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>18,
                        'judul'=>'Artikel Olahraga 6',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>19,
                        'judul'=>'Artikel Olahraga 7',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>20,
                        'judul'=>'Artikel Olahraga 8',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>21,
                        'judul'=>'Artikel Olahraga 5',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>22,
                        'judul'=>'Artikel Olahraga 6',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>23,
                        'judul'=>'Artikel Olahraga 7',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ],
                      [
                        'id'=>24,
                        'judul'=>'Artikel Olahraga 8',
                        'kategori'=>'olahraga',
                        'isi'=>'Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. Isi artikel olahraganya adalah ini. '
                      ]
                  ];



 ?>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Tigris</h3>
      </div>
      <div class="row">
        <h2>Selamat Datang Arief,</h2>
      
      
        <div class="col-sm-6">
          <h4>Contoh Judul</h4>
          <p>Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. </p>
        </div>
        <div class="col-sm-6">
          <h4>Contoh Judul</h4>
          <p>Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. </p>
        </div>
        <div class="col-sm-6">
          <h4>Contoh Judul</h4>
          <p>Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. </p>
        </div>
        <div class="col-sm-6">
          <h4>Contoh Judul</h4>
          <p>Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. </p>
        </div>
        <div class="col-sm-6">
          <h4>Contoh Judul</h4>
          <p>Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. </p>
        </div>
        <div class="col-sm-6">
          <h4>Contoh Judul</h4>
          <p>Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. Ini adalah contoh isi. </p>
        </div>
          
      </div>

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> 
    <script src="assets/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>