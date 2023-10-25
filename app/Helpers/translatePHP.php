<?php

    function translatePHP($value, $type) 
    {
        switch ( app()->getLocale() ) {
            case 'ca':
                if($type === 'titol'){
                    return $value->titol_cat;
                } else if ($type === 'nom') {
                    return $value->nom_cat;
                } else {
                    return $value->descripcio_cat;
                }
                break;
            default:
                if($type === 'titol'){
                    return $value->titol_esp;
                } else if ($type === 'nom') {
                    return $value->nom_esp;
                } else {
                    return $value->descripcio_esp;
                }
        }
    }