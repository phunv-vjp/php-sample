<?php

  // variable
  $firstName = 'van Phu';
  $lastName = 'Nguyen';

  $fullName =  $firstName . $lastName;
  echo "Name: " . $firstName;
  echo "</br>FullMame : " . $fullName;

  $number = 12.3;
  echo gettype($number);

  // ep kieu
  settype($number, "integer");
  echo gettype($number);

   // in xuong dong
   echo "\n";

  // kieu mang
  $name_arr = array('Bac', 'Nam', 'Tanaka');
  print_r($name_arr);
  var_dump($name_arr);
  echo $name_arr[0];

   // in xuong dong
   echo "\n";

  // dinh nghia hang
  define("PI", 3.14);

  echo 'PI: ' . PI;

  // loop
  $tong = 10;
  for ($i=0; $i < $tong; $i++) { 
    print_r($i);
  }

  // in xuong dong
  echo "\n";

  // toan tu
  $a = 100;
  $b = 200;
  $tong = $a + $b;
  $check = ($a < $b) && ($tong > 200);
  echo $check;

  echo "\n";

  // if else
  $so_can_kiem_tra = 13;
  $so_du = $so_can_kiem_tra % 2;
  if ($so_du == 0){
      echo 'Số '.$so_can_kiem_tra.' Là Số Chẵn';
  } else {
    echo 'So' .$so_can_kiem_tra . 'la so le';
  }

  // switch case
  $number = 1;
  switch ($number)
  {
      case 0 :
          echo 'Số không';
          break;
      case 1:
          echo 'Số một';
          break;
      case 2:
          echo 'Số hai';
          break;
      case 3:
          echo 'Số ba';
          break;
      case 4 :
          echo 'Số bốn';
          break;
      default:
          echo 'Không tìm thấy';
          break;
  }

  echo "\nwhile\n";

  $i = 1; // Biến dùng để lặp
  while ($i <= 10){ // Nếu $i <= 10 thì mới lặp
    echo $i . ' - '; // Xuất ra màn hình
    $i++; // Tăng biến $i lên 1
  }

  echo "\nDo while\n";
  $i = 1;
  do{
      echo $i;
      $i++;
  }while ($i <= 10);

  echo "\nForReach\n";

  // Danh sách các năm
  $nam = array(
    1990,
    1991,
    1992,
    1993,
    1994,
    1995
  );

  //Dùng foreach xuất ra các năm trong $nam
  foreach ($nam as $key => $giatri){
    echo $key . '=>' . $giatri . "\n";
  }


  // function
  $so1 = 12;
  $so2 = 13;
    
  // chỉ truyền 2 đối số vào
  echo tinhtong($so1, $so2);

    // chỉ truyền 2 đối số vào
    echo tinhtong($so1, $so2, 2);
    
  // $c có một giá trị mặc định
  // hàm này tính tổng của 3 số
  function tinhtong($a, $b, $c = false)
  {
      $tong = $a + $b;
      if ($c != false){ // nếu $c được truyền vào (vì false là giá trị mặc định)
          $tong = $tong + $c; // thì thực hiện cộng thêm $c
      }
      return $tong;
  }

  echo "\n";
  // bien toan cuc. Bien cuc bo
  // Biến toàn cục
$bien_toan_cuc = 12;
echo kiem_tra();

function kiem_tra()
{
    // Biến cục bộ
    $bien_cuc_bo = 13;
  
    // Lấy biến toàn cục
    global $bien_toan_cuc;
  
    // Lấy số dư biến cục bộ chia cho biến toàn cục và
    // kiểm trả về true nếu số dư = 0, ngược lại trả về false
    if ($bien_cuc_bo % $bien_toan_cuc){
        return true;
    }
    else{
        return false;
    }
}

?>