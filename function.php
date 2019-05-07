<?php
function multiply_table($x, $y){
                $string = '';
                $string .= "<th bgcolor = #F5F6CE>";
                for ($i = 1; $i < $y+1; $i++){
                        $string .= "<th bgcolor = #CEF6D8 >" . $i;
                }
                $count = 0;
            
                for ($i = 1; $i < $x+1; $i++){
                    $string .= "<tr align = center>";
                    for ($j = 0; $j < $y+1; $j++){
                        if ($j === 0){
                            $count++;
                            $string .= "<th bgcolor = #CEF6D8>" . $count;
                        }
                        else{
                            if ($i === $j)
                                $string .= "<td align = center width = 25 bgcolor = #F6CED8>" . $i*$j;
                            else 
                            $string .= "<td align = center width = 25> " . $i*$j;
                        }
                    }
                }
                $count = 0;
                return $string;
            }
            