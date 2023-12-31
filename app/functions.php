<?php

/**
 * Data create by function 
 */

 function create($sqq){

   connect() -> query($sqq);

 }

 /**
 * Data show all by function 
 */

 function all($table, $order="DESC"){
   
   return connect()->query("SELECT * FROM $table ORDER BY id $order");

 }

  /**
 * Data find by function 
 */

 function find(){
   
 }

  /**
 * Data delete by function 
 */

 function delete($table, $id){
   connect()->query("DELETE FROM $table WHERE id='$id'");
 }


  /**
 * Data update by function 
 */

 function update(){
   
 }




/**
 * Validation massage
 */

 function validate($msg, $type="danger" ){

    return "<p class=\" alert alert-$type\"> $msg <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
 }


 /**
  * file upload function
  */

  function move($file, $loca = '/', array $type){

      // File upload system with php 

		$file_name = $file['name'];
		$file_tmpname = $file['tmp_name'];
		$file_size = $file['size'];
		$size_in_kb = $file_size/ 1024;

      // Get Extension

		$file_arr = explode('.', $file_name);

		$extension = end($file_arr);

		//unique file name

		$unique_name_pro = time() .rand(1, 9999999);

		$unique_name = md5($unique_name_pro)  . "." . $extension;


      $msgfl = '';
      if( in_array($extension, $type) == false ){
         $msgfl = validate('Image formet is wrong!!', 'danger');
      }elseif( $size_in_kb > 500 ){
			$msgfl = validate('Minimum Image Size 500 KB', 'info');
      }else{
         ///Finaly upload file
         move_uploaded_file($file_tmpname, $loca . $unique_name);
      }


      

      return [
         'unique_name' => $unique_name,
         'err_msg'     => $msgfl

      ];


  }


