<?php 
$main_site = 'https://secure-lake-82013.herokuapp.com/';
define ('WP_HOME',$main_site);



function baseurl($ur){
   $url=WP_HOME.$ur;
   return $url;
}
function base_url($ur){
   $url=WP_HOME.$ur;
   return $url;
}


  function GetResult($totalScore,$db){

    
    $data=$db->get('tbl_accuracy');
    foreach($data as $score){
      if ($totalScore >= $score['min_value']  && $totalScore <= $score['max_value'] ) {
       $message='kompetentes Niveau  '.$score['accuracy_name'];
       $result=array(
                      'next' => $score['next_level'], 
                      'msg'=>$message,
                      'score'=>$totalScore
                    );
      }
    }

    // if ($totalScore >= 0  && $totalScore <= 14 ) {
    //    $result=array('next' => 'A1', 'msg'=>'kompetentes Niveau A1.2','score'=>$totalScore);
    // } else if($totalScore >= 15  && $totalScore <= 20) {
    //   $result=array('next' => 'A2', 'msg'=>'kompetentes Niveau A2.1','score'=>$totalScore);
    // } else if($totalScore >= 21  && $totalScore <= 30) {
    //   $result=array('next' => 'A2', 'msg'=>'kompetentes Niveau A2.1','score'=>$totalScore);
    // } else if($totalScore >= 31  && $totalScore <= 40) {
    //   $result=array('next' => 'B1', 'msg'=>'kompetentes Niveau A2.2','score'=>$totalScore);
    // } else if($totalScore >= 41  && $totalScore <= 50) {
    //   $result=array('next' => 'B1', 'msg'=>'kompetentes Niveau B1.1','score'=>$totalScore);
    // } else if($totalScore >= 51  && $totalScore <= 60) {
    //   $result=array('next' => 'B1', 'msg'=>'kompetentes Niveau B1.2','score'=>$totalScore);
    // } else if($totalScore >= 61  && $totalScore <= 70) {
    //   $result=array('next' => 'B2', 'msg'=>'kompetentes Niveau Brückenkurs','score'=>$totalScore);
    // } else if($totalScore >= 71  && $totalScore <= 78) {
    //   $result=array('next' => 'B2', 'msg'=>'kompetentes Niveau B2.1','score'=>$totalScore);
    // } else if($totalScore >= 79  && $totalScore <= 85) {
    //   $result=array('next' => 'B2', 'msg'=>'kompetentes Niveau B2.2','score'=>$totalScore);
    // } else if($totalScore >= 85  && $totalScore <= 90) {
    //   $result=array('next' => 'C1', 'msg'=>'kompetentes Niveau B2.3','score'=>$totalScore);
    // } else if($totalScore >= 91) {
    //   $result=array('next' => 'C1', 'msg'=>'kompetentes Niveau C1','score'=>$totalScore);
    // }

    return $result;

  }



function sanitize_text_input($str){
    $str=strip_tags($str); 
   $newstr = filter_var($str, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
    return $newstr;


}



?>