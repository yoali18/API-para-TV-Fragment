<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function alumnos(){
        $datos = [
            [
            "nombre" => "Laura Solis Ramirez",
            "matricula" => "YZA345678",
            "curp" => "SORL840927MDFVLA06",
            "sexo" => "Mujer",
            "edad" => 38,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Jorge Mendoza Gonzalez",
            "matricula" => "BCD901234",
            "curp" => "MOGJ850128HDFRGR03",
            "sexo" => "Hombre",
            "edad" => 36,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Ana Castro Diaz",
            "matricula" => "EFG567890",
            "curp" => "CADA800229HDFRNN06",
            "sexo" => "Mujer",
            "edad" => 42,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Roberto Ramirez Lopez",
            "matricula" => "HIJ123456",
            "curp" => "RORL870330HDFRBR09",
            "sexo" => "Hombre",
            "edad" => 35,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Martha Vargas Martinez",
            "matricula" => "KLM789012",
            "curp" => "VAMM800331MDFNRR05",
            "sexo" => "Mujer",
            "edad" => 41,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Raul Gutierrez Gonzalez",
            "matricula" => "NOP345678",
            "curp" => "GUGR840432HDFLLR07",
            "sexo" => "Hombre",
            "edad" => 37,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Carmen Pineda Martinez",
            "matricula" => "QRS901234",
            "curp" => "PIMC810533MDFRLN06",
            "sexo" => "Mujer",
            "edad" => 40,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Francisco Nava Diaz",
            "matricula" => "TUV567890",
            "curp" => "NADF840634HDFLSC04",
            "sexo" => "Hombre",
            "edad" => 37,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Alejandra Rosales Gonzalez",
            "matricula" => "WXY123456",
            "curp" => "ROGA830535MDFLLA05",
            "sexo" => "Mujer",
            "edad" => 38,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Ricardo Solis Ramirez",
            "matricula" => "ZAB789012",
            "curp" => "SARR850536HDFRNR09",
            "sexo" => "Hombre",
            "edad" => 36,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Laura Mendoza Gonzalez",
            "matricula" => "CDE901234",
            "curp" => "MOLG840437MDFLVR08",
            "sexo" => "Mujer",
            "edad" => 39,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Jorge Gutierrez Lopez",
            "matricula" => "EFG567890",
            "curp" => "GULJ840438HDFRRC05",
            "sexo" => "Hombre",
            "edad" => 38,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Ana Pineda Martinez",
            "matricula" => "GHI123456",
            "curp" => "PIMA810539HDFLRL09",
            "sexo" => "Mujer",
            "edad" => 41,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Roberto Nava Diaz",
            "matricula" => "IJK789012",
            "curp" => "NADR830740HDFRRT07",
            "sexo" => "Hombre",
            "edad" => 39,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Martha Rosales Gonzalez",
            "matricula" => "LMN345678",
            "curp" => "ROGM840541HDFRSN05",
            "sexo" => "Mujer",
            "edad" => 37,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Raul Gutierrez Lopez",
            "matricula" => "OPQ901234",
            "curp" => "GULR830542HDFRRN09",
            "sexo" => "Hombre",
            "edad" => 39,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Francisco Solis Ramirez",
            "matricula" => "RST567890",
            "curp" => "SORF830543HDFRRS03",
            "sexo" => "Hombre",
            "edad" => 38,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Alejandra Mendoza Gonzalez",
            "matricula" => "UVW123456",
            "curp" => "MOGA840444HDFRZL06",
            "sexo" => "Mujer",
            "edad" => 37,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Ricardo Gutierrez Lopez",
            "matricula" => "XYZ789012",
            "curp" => "GULR840645HDFRZL06",
            "sexo" => "Hombre",
            "edad" => 39,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Ana Torres Ramirez",
            "matricula" => "ABC123457",
            "curp" => "TORA890202HDFRRN05",
            "sexo" => "Mujer",
            "edad" => 27,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Carlos Mendoza Martinez",
            "matricula" => "XYZ789013",
            "curp" => "MENC880303MDFRRT08",
            "sexo" => "Hombre",
            "edad" => 32,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Laura Gutierrez Gonzalez",
            "matricula" => "DEF345679",
            "curp" => "GUGL670304HDFDRD02",
            "sexo" => "Mujer",
            "edad" => 41,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Ricardo Ramirez Diaz",
            "matricula" => "LMN901235",
            "curp" => "RARZ710405MDFZNS09",
            "sexo" => "Hombre",
            "edad" => 25,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "María Pineda Gomez",
            "matricula" => "OPQ567891",
            "curp" => "PIGM760506HDFRRS06",
            "sexo" => "Mujer",
            "edad" => 29,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Pedro Hernandez Sánchez",
            "matricula" => "STU123457",
            "curp" => "HESP850607MDFRZL03",
            "sexo" => "Hombre",
            "edad" => 39,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Mariana Jimenez Martinez",
            "matricula" => "VWX789013",
            "curp" => "JIMM900708HDFMRL04",
            "sexo" => "Mujer",
            "edad" => 28,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Luis Morales López",
            "matricula" => "YZA345679",
            "curp" => "MOLR910809MDFRNN09",
            "sexo" => "Hombre",
            "edad" => 30,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Silvia Vargas Sánchez",
            "matricula" => "BCD901235",
            "curp" => "VASV920910HDFRRF03",
            "sexo" => "Mujer",
            "edad" => 31,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Roberto Gutierrez Gonzalez",
            "matricula" => "EFG567891",
            "curp" => "GUGR750111HDFTRB02",
            "sexo" => "Hombre",
            "edad" => 35,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Daniel Pineda Martinez",
            "matricula" => "HIJ123457",
            "curp" => "PIMD930212MDFLVS05",
            "sexo" => "Hombre",
            "edad" => 26,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Raul Nava Diaz",
            "matricula" => "KLM789013",
            "curp" => "NADR800313HDFVRL07",
            "sexo" => "Hombre",
            "edad" => 40,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Fernanda Rosales Gonzalez",
            "matricula" => "NOP345679",
            "curp" => "ROGF950314MDFRNN07",
            "sexo" => "Mujer",
            "edad" => 33,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Hector Ramos Lopez",
            "matricula" => "QRS901235",
            "curp" => "RALL860515HDFMSR09",
            "sexo" => "Hombre",
            "edad" => 37,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Daniel Torres Martinez",
            "matricula" => "TUV567891",
            "curp" => "TOMD870516HDFRNR06",
            "sexo" => "Hombre",
            "edad" => 32,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Javier Solis Ramirez",
            "matricula" => "WXY123457",
            "curp" => "SORJ820617MDFLVV08",
            "sexo" => "Hombre",
            "edad" => 36,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Rocio Mendoza Gonzalez",
            "matricula" => "ZAB789013",
            "curp" => "MEGR760718MDFNCC07",
            "sexo" => "Mujer",
            "edad" => 27,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Miguel Castro Diaz",
            "matricula" => "CDE901235",
            "curp" => "CADM800619HDFGML08",
            "sexo" => "Hombre",
            "edad" => 33,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Alicia Ramirez Lopez",
            "matricula" => "EFG567891",
            "curp" => "RALA850720HDFMLC06",
            "sexo" => "Mujer",
            "edad" => 28,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Oscar Vargas Martinez",
            "matricula" => "GHI123457",
            "curp" => "VAMO890521HDFGRC09",
            "sexo" => "Hombre",
            "edad" => 29,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ],
            [
            "nombre" => "Martha Hernandez Gonzalez",
            "matricula" => "IJK789013",
            "curp" => "HEGM900622MDFNRT06",
            "sexo" => "Mujer",
            "edad" => 32,
            "imagen" => "https://e7.pngegg.com/pngimages/178/595/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png"
            ]
        ];
        return response()->json($datos);
    }
}