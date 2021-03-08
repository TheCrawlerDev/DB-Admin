<?php
    exec('ps -aux', $processes);
    // print_r($processes);
    $retorno = array();
    $cpuUsage = 0;
    foreach($processes as $process){
        // $cols = split(' ', ereg_replace(' +', ' ', $process));
        // $process = str_replace('  ','%*%',$process);
        $process = str_replace('  ',' ',$process);
        $cols = explode(' ',$process);
        $cols = array_filter($cols);
        $cols_n = array();
        foreach($cols as $col){
          $cols_n[] = $col;
        }
        print_r($process);
        print_r($cols_n);
        $retorno['%CPU'] = intval($cols[2]);
        $retorno['%MEM'] = intval($cols[3]);
        echo "</br></br>";
        // if(strpos($cols[2], '.') > -1){
        //     $cpuUsage += floatval($cols[2]);
        // }
    }
    print_r($retorno);
?>
