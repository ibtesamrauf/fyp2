<?php 
// session_start();
// unset($_SESSION['cart_back']);

// if (is_dir_empty($dir)) {
//   echo "the folder is empty"; 
// }else{
//   echo "the folder is NOT empty";
// }

// function is_dir_empty($dir) {
//   if (!is_readable($dir)) return NULL; 
//   $handle = opendir($dir);
//   while (false !== ($entry = readdir($handle))) {
//     if ($entry != "." && $entry != "..") {
//       return FALSE;
//     }
//   }
//   return TRUE;
// }




// public static function isEmptyDir($dir){ 
//      return (($files = @scandir($dir)) && count($files) <= 2); 
// }

// if(isEmptyDir($dir1))
// {
// echo "the folder is empty"; 	
// }
// if (count(glob("../"."item images/deal/*")) === 0 ) 
// {
//   echo "the folder is empty"; 
// }
// else
// {
// 	  echo "item exist"; 

// }



// $dir1 = "item images/aaaa";

// if(count(glob("$dir1/*"))==0) {
//     echo 'dir empty';
// } else {
//     echo 'not empty';
// }



// rmdir($dir1);

// unlink('item images/test1/download (1).jpg');

session_start();
print_r($_SESSION['check_new_order']);

if (!empty($_SESSION['check_new_order'])) 
{
	# code...
	echo "<br>true";
}
?>