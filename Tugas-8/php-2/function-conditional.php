<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Function</title>
</head>

<body>
  <h1>Berlatih Function PHP</h1>
  <?php

  echo "<h3> Soal No 1 Greetings </h3>";
  /* 
    Soal No 1
    Greetings
    Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

    contoh: greetings("abduh");
    Output: "Halo Abduh, Selamat Datang di Sanbercode!"
  */

  // Code function di sini
  function greetings($nama)
  {
    echo "Halo $nama, Selamat Datang di Sanbercode!<br>";
  }

  // Hapus komentar untuk menjalankan code!
  greetings("Bagas");
  greetings("Wahyu");
  greetings("Giffari");

  echo "<br>";

  echo "<h3>Soal No 2 Reverse String</h3>";
  /* 
    Soal No 2
    Reverse String
    Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
    Function reverseString menerima satu parameter berupa string.
    NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

    reverseString("abdul");
    Output: ludba
  */

  // Code function di sini
  function reverseString($text)
  {
    $reversedText = "";
    $length = strlen($text);

    for ($i = $length - 1; $i >= 0; $i--) {
      $reversedText .= $text[$i];
    }

    return $reversedText;
  }

  // Fungsi untuk menampilkan output nomor 2
  function showReversedString($text)
  {
    echo "Original text: $text <br>";
    echo "Reversed text: " . reverseString($text) . "<br><br>";
  }

  reverseString("Giffari");
  reverseString("Sanbercode");
  reverseString("We Are Sanbers Developers");

  // Menampilkan ke browser
  showReversedString("Giffari");
  showReversedString("Sanbercode");
  showReversedString("We Are Sanbers Developers");
  echo "<br>";

  echo "<h3>Soal No 3 Palindrome </h3>";
  /* 
    Soal No 3 
    Palindrome
    Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
    Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
    Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
    NB: 
    Contoh: 
    palindrome("katak") => output : "true"
    palindrome("jambu") => output : "false"
    NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!
*/


  // Code function di sini
  function palindrome($text)
  {
    $reversedString = reverseString($text);
    if ($text === $reversedString) {
      return true;
    } else {
      return false;
    }
  }

  // Fungsi untuk menampilkan output nomor 3
  function showPalindrome($text)
  {
    $isPalindrome = palindrome($text) ? "true" : "false";
    echo "text: $text<br>";
    echo "palindrome: $isPalindrome<br><br>";
  }

  // Hapus komentar di bawah ini untuk jalankan code
  palindrome("civic"); // true
  palindrome("nababan"); // true
  palindrome("jambaban"); // false
  palindrome("racecar"); // true

  // Menampilkan ke browser
  showPalindrome("civic");
  showPalindrome("nababan");
  showPalindrome("jambaban");
  showPalindrome("racecar");


  echo "<h3>Soal No 4 Tentukan Nilai </h3>";
  /*
    Soal 4
    buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
    berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
    Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
    sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
  */

  // Code function di sini
  function tentukan_nilai($nilai)
  {
    if ($nilai >= 85 && $nilai <= 100) {
      return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
      return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
      return "Cukup";
    } else {
      return "Kurang";
    }
  }

  function showGrade($nilai)
  {
    echo "Nilai: $nilai<br>";
    echo "Grade: " . tentukan_nilai($nilai) . "<br><br>";
  }

  // Hapus komentar di bawah ini untuk jalankan code
  echo "Tampilan output sesuai soal:<br>";
  echo tentukan_nilai(98); //Sangat Baik
  echo tentukan_nilai(76); //Baik
  echo tentukan_nilai(67); //Cukup
  echo tentukan_nilai(43); //Kurang

  // Fungsi untuk menampilkan output nomor 4
  echo "<br><br><b>Tampilan output lebih rapi:</b><br>";
  echo showGrade(98); // Sangat Baik
  echo showGrade(76); // Baik
  echo showGrade(67); // Cukup
  echo showGrade(43); // Kurang


  ?>

</body>

</html>