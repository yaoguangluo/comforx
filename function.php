<?php

  function strFormat($str)
    {
        //echo $str;
       $out="";
       for($i=0;$i<strlen($str);$i++)
        {
            $temp=substr($str,$i,1); //将单个字符存到数组当中
            if(" "==$temp)
            {
               $out=$out."%20"; 
            }elseif("#"==$temp)
            {
                $out=$out."%23"; 
            }else{
                     $out=$out.$temp;
                 }

        }
        return $out;
    }

?>