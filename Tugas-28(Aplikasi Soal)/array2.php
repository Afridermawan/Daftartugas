<?php
$pertanyaan = array(
        0 => array(
            'soal' => 'Siapa pencipta dari PHP ?',
             'pilihan' => 'A. Rasmus Lerdorf |B. Steve Jobs |C. Bill Gates',
             'jawaban' => 'A'
        ),
        1 => array(
            'soal' => 'Pada tahun berapa PHP dibuat ?',
            'pilihan' => 'A. 2000 |B. 1996 |C. 1995',
            'jawaban' => 'C'
        ),
        2 => array(
            'soal' => 'Kenapa PHP tidak dapat tampil pada inspect element browser ?',
            'pilihan' => 'A. Dikarenanakan berjalan pada client |B. Karena PHP berjalan disisi Server |C. Karena user',
            'jawaban' => 'B'
        ),
        3 => array(
            'soal' => 'Apa kepanjangan dari PHP ?',
            'pilihan' => 'A. Pemberi Harapan Palsu |B. HyperText Preprocessor |C. Hypertext MarkUp Language',
            'jawaban' => 'B'           
        ),
        4 => array(
            'soal' => 'Dibawah berikut yang mana komentar dari PHP ?',
            'pilihan' => 'A. //komentar |B. <-- komentar --> |C. < komentar >',
            'jawaban' => 'A'           
        ),
        5 => array(
            'soal' => 'Berikut cara penulisan variabel yang benar di PHP ?',
            'pilihan' => 'A. $1nama |B. $tempat-lahir |C. $nama',
            'jawaban' => 'C'           
        ),
        6 => array(
            'soal' => 'Kepanjangan dari HTML ?',
            'pilihan' => 'A. HyperText MarkUp Language |B. HyperText Mark Language |C. HyperText Preprocessor',
            'jawaban' => 'A'           
        ),
        7 => array(
            'soal' => 'Berikut perintah PHP yang benar untuk menampilkan kata "Hello World" ?',
            'pilihan' => 'A. echo"Hello World"; |B. write "Hello World"; |C. show"Hello World"',
            'jawaban' => 'A'           
        ),
        8 => array(
            'soal' => 'PHP berjalan di sisi ?',
            'pilihan' => 'A. user |B. client |C. server',
            'jawaban' => 'C'           
        ),
        9 => array(
            'soal' => 'Berikut struktur kendali pengulangan di PHP ?',
            'pilihan' => 'A. Perintah IF ELSE |B. Perintah FOR |C. Perintah IF',
            'jawaban' => 'B'           
        )

    ); 
$_SESSION['pertanyaan'] = $pertanyaan;
