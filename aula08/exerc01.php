<?php

    $dia = $_POST["dia"];

    switch ($dia) {
        case "1":
            echo "HOJE É DOMINGO";
            break;
            case "2":
                echo "HOJE É SEGUNDA";
                break;
                case "3":
                    echo "HOJE É TERÇA";
                    break;
                    case "4":
                        echo "HOJE É QUARTA";
                        break;
                            case "5":
                                echo "HOJE É QUINTA";
                                break;
                                case "6":
                                    echo "HOJE É SEXTA";
                                    break;
                                    case "7":
                                        echo "HOJE É SABADO";
                                        break;
        
        default:
            echo "Valor é invalido";
            break;
    }

?>