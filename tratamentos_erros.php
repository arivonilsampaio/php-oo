<?php    

// tenha uma lógica
try{
  // tenha uma lógica onde possa occorer um potencial erro (excecão)
  echo '<h3> *** Try *** </h3>';
  
  // $sql = 'Select * from clientes';
  // mysql_query($sql); //erro
  
  if(!file_exists('require_arquivo_a.php')){
    throw new Exception('O arquivo em questão não esta disponível.');
  }
  
} catch(Error $e){
  echo '<h3> *** cacth Error *** </h3>';
  echo '<p style="color:red;">' . $e . '</p>';

} catch (Exception $e){
  echo '<h3> *** cacth Excepiton *** </h3>';
  echo '<p style="color:red;">' . $e . '</p>';
}


finally{
  echo '<h3> *** Finally *** </h3>';
}



// tenha uma lógica
// try{
//   // tenha uma lógica onde possa occorer um potencial erro (excecão)
// }


// ?>