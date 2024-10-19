<?php
 
  $sub1= 78;
  $sub2= 95;
  $sub3= 83;
  $sub4= 72;    
  $sub5= 70;
  $totalMarks = $sub1+$sub2+$sub3+$sub4+$sub5;
  
 function marksValidation($sub)
 {
    if($sub<0 || $sub>100)
    {
      return false;
    }
    else
    {
      return true;
    }
 }

 function averageCal($s1,$s2,$s3,$s4,$s5){

  $avgMarks = ($s1+$s2+$s3+$s4+$s5)/5;
  return $avgMarks;

 }
 function gradeCalculation($avg)
 {
     switch($avg){
         case ($avg>=80 && $avg<=100):
         echo "Grade A+";
         break;
         case ($avg>=70 && $avg<80):
         echo "Grade A";
         break;
         case ($avg>=60 && $avg<70):
         echo "Grade A-";
         break;
         case ($avg>=50 && $avg<60):
         echo "Grade B";
         break;
         case ($avg>=40 && $avg<50):
         echo "Grade C";
         break;
         case ($avg>=33 && $avg<40):
         echo "Grade D";
         break;
         default:
         echo "Fail";
     }

 }
if(marksValidation($sub1) && marksValidation($sub2) && marksValidation($sub3) && marksValidation($sub4) && marksValidation($sub5))
{
    
    $averageMarks = averageCal($sub1,$sub2,$sub3,$sub4,$sub5);

    echo "Total Marks: ".$totalMarks;

    echo "\n";

    printf("Average Marks:%.2f",$averageMarks);

    echo "\n";

    gradeCalculation($averageMarks);

}
else{
    echo "Mark is invalid";
}

?>