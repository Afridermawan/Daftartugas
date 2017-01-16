<?php
$jawabanbenar = null;
$jawabansalah = 0;


$pertanyaan[]=[
    'soal' => 'Siapakah pencipta dari PHP ?',
    'A' => 'Rasmus Lerdorf',
    'B' => 'Steve Jobs',
    'C'=> 'Bill Gates',
    'jawaban' => 'A'
];
$pertanyaan[]=[
    'soal' => 'Tahun berapakah PHP dibuat ?',
    'A' => '2000',
    'B' => '1996',
    'C' => '1995',
    'jawaban' => 'C'
];
$pertanyaan[]=[
      'soal' => 'Kenapa PHP tidak dapat tampil pada inspect element browser ?',
      'A' => 'Dikarenanakan berjalan pada client',
      'B' => 'Karena PHP berjalan  disisi Server',
      'C' => 'Karena berjalan user',
      'jawaban' => 'B'
  ];
$pertanyaan[]=[
      'soal' => 'Apakah kepanjangan dari PHP ?',
      'A' => 'Pemberi Harapan Palsu',
      'B' => 'HyperText Preprocessor',
      'C' => 'Hypertext MarkUp Language',
      'jawaban' => 'B'
  ];
$pertanyaan[]=[
    'soal' => 'Dibawah ini manakah komentar dari PHP ?',
    'A' => '//komentar',
    'B' => '<-- komentar -->',
    'C' => '< komentar >',
    'jawaban' => 'A'
];
$pertanyaan[]=[
    'soal' => 'Manakah penulisan variabel yang benar ?',
    'A' => '$1nama',
    'B' => '$tempat-lahir',
    'C' => '$nama',
    'jawaban' => 'C'
];
$pertanyaan[]=[
    'soal' => 'Apakah kepanjangan dari HTML ?',
    'A' => 'HyperText MarkUp Language',
    'B' => 'HyperText Mark Language',
    'C' => 'HyperText Preprocessor',
    'jawaban' => 'A'
];
$pertanyaan[]=[
    'soal' => 'Manakah perintah yang benar untuk menampilkan "Hello World" ?',
    'A' => 'echo"Hello World";',
    'B' => 'write "Hello World";',
    'C' => 'show"Hello World"',
    'jawaban' => 'A'
];
$pertanyaan[]=[
    'soal' => 'Di sisi manakah PHP berjalan ?',
    'A' => 'user',
    'B' => 'client',
    'C' => 'server',
    'jawaban' => 'C'
];
$pertanyaan[]=[
    'soal' => 'Manakah pengulangan di PHP ?',
    'A' => 'Perintah IF ELSE',
    'B' => 'Perintah FOR',
    'C' => 'Perintah IF',
    'jawaban' => 'B'
];
    $_SESSION['pertanyaan'] = $pertanyaan;
?>
