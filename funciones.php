<?php
    function obtenerIniciales($name){
        $nm=substr(trim(strtoupper($name)),0,3);
        return $nm;
    }

    function obtenerAnio($fecha){
        $l=strlen($fecha);
        $year="";
        for($k=0;$k<=$l;$k++){
            if($k==2 || $k==3){
                $year.=$fecha[$k];
            }
        }
        return $year;
    }
    function obtenerMesDia($fecha){
        $l=strlen($fecha);
        $moth="";
        for($k=0;$k<=$l;$k++){
            if($k==5 || $k==6){
                $moth.=$fecha[$k];
            }
        }
        $day="";
        for($k=0;$k<=$l;$k++){
            if($k==8 || $k==9){
                $day.=$fecha[$k];
            }
        }
        return $moth.$day;
    }
    function generarClave($name, $fecha){
        $todo=obtenerIniciales($name).obtenerAnio($fecha).obtenerMesDia($fecha);
        return $todo;
    }

?>