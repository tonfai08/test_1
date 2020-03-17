<?php
$list = $_GET['list'];
$search = $_GET['search'];
$type_search = $_GET['type_search'];
$list_1 = explode(",",$list);

echo "List : [".$list."]<br>
Search : ".$search.
"Type_search : ".$type_search.
"<br>Result :::<br>"
;

function linear($arr, $x) {
      for($i = 0; $i < sizeof($arr); $i++) {
        $l=$i+1;
          if($arr[$i] == $x) {
              return "Round :".$l."====>".$x."=".$arr[$i]."found !!!<br>";
          }
          else{
            echo "Round :".$l."====>".$x."!=".$arr[$i]."<br>";
          }
      }
      return "ไม่พบตัวเลข";
  }
  function binary($arr, $x) {
    if (count($arr) === 0) return "ไม่พบ array";
    $low = 0;
    $high = count($arr) - 1;
    $z = 1;
    sort($arr);
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if($arr[$mid] == $x) {
            return "Round :".$z."====>".$x."=".$arr[$mid]."found !!!<br>";
        }
        if ($x < $arr[$mid]) {
            $high = $mid -1;
            echo "Round :".$z."====>".$x."!=".$arr[$mid]."<br>";
        }
        else {
            $low = $mid + 1;
            echo "Round :".$z."====>".$x."!=".$arr[$mid]."<br>";
        }
        $z++;
    }
    return "ไม่พบตัวเลข";
}
function bubble($arr)
{
    $z = 1;
    $swapped=true;
    $n=count($arr);
    $temp=null;
    while($swapped)//outer loop
    {
        $swapped = false;
        for($i=0; $i<$n-1; $i++)//inner loop
        {
          $l=$i+1;
            if( $arr[$i]>$arr[$i+1]) //swap if the current value is greater the next value. change > to > for descending order
            {
                $temp=$arr[$i];
                $arr[$i]=$arr[$i+1];
                $arr[$i+1]=$temp;
                $swapped=true;
                echo "Round :".$l."====>".$arr[$i+1].">".$arr[$i]." swapped<br>";
            }
            else{
              echo "Round :".$l."====>".$arr[$i]."<".$arr[$i+1]."<br>";
            }
        }
    }
    echo "Bubbles sort :";
    foreach ($arr as $value1) {
            echo "$value1\n";
    }
    return ;
}
if($type_search == '1')
{
    echo linear($list_1, $search);
}
else if($type_search == '2')
{
    echo binary($list_1, $search);
}
else if($type_search == '3')
{
    echo bubble($list_1);

}
?>
