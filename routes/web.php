<?php
use App\Model\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 
Route::get('/', function () {
    return view('admin.ffff');
 
});
Route::get('register', function () {
    return view('admin.register2');
 
});
Route::post('store', function (Request $request) {
    
    $User=new User(); 
    $User->name=$request->name;
    $User->save();
    $new_id=$User->id;
    $path=Storage_path('fonts/');
    $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
    $fontDirs = $defaultConfig['fontDir']; 
    $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
    $fontData = $defaultFontConfig['fontdata']; 
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' =>'A4-L',
        'fontDir' => array_merge($fontDirs, [
             __DIR__ . $path,
        ]),
        'fontdata' => $fontData + [
             'frutiger' => [
                 'R' => 'FreeSans.ttf',
                 'I' => 'FreeSansOblique.ttf',
             ]
        ],
        'default_font' => 'freesans',
        'pagenumPrefix' => '',
        'pagenumSuffix' => '',
        'nbpgPrefix' => ' कुल ',
        'nbpgSuffix' => ' पृष्ठों का पृष्ठ'
    ]);
    $rs_user=User::find($new_id);
    $bg_files_path  =\Storage_path('app/backgroud/');
    $bg_file_front = $bg_files_path."PLEDGE-1.jpg";
    $html = view('admin.pdf_page',compact('bg_file_front','rs_user')); 
    $mpdf->WriteHTML($html); 
    $documentUrl = Storage_path() . '/app/download/';  
    @mkdir($documentUrl, 0755, true);  
    $mpdf->Output($documentUrl.'/'.$new_id.'.pdf', 'F');
    
    $rs_user->folder_path='/app/download'.'/'.$new_id; 
    $rs_user->save(); 
    $documentUrl = Storage_path() .$rs_user->folder_path.'.pdf';
    return response()->file($documentUrl);
 
});

Route::post('download', function (Request $request) {
    $UserDetail=User::find($request->certificate_no);  
    $documentUrl = Storage_path() .$UserDetail->folder_path.'.pdf';
    return response()->file($documentUrl);
 
});
Route::post('register2', function (Request $request) {
    $User=new User(); 
    $User->name=$request->name;
    $User->date=date('Y-m-d');
    $User->save();
    $new_id=$User->id;
    $path=Storage_path('fonts/');
    $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
    $fontDirs = $defaultConfig['fontDir']; 
    $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
    $fontData = $defaultFontConfig['fontdata']; 
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' =>'A4-L',
        'fontDir' => array_merge($fontDirs, [
             __DIR__ . $path,
        ]),
        'fontdata' => $fontData + [
             'frutiger' => [
                 'R' => 'FreeSans.ttf',
                 'I' => 'FreeSansOblique.ttf',
             ]
        ],
        'default_font' => 'freesans',
        'pagenumPrefix' => '',
        'pagenumSuffix' => '',
        'nbpgPrefix' => ' कुल ',
        'nbpgSuffix' => ' पृष्ठों का पृष्ठ'
    ]);
    $rs_user=User::find($new_id);
    $bg_files_path  =\Storage_path('app/backgroud/');
    $bg_file_front = $bg_files_path."PLEDGE-1.jpg";
    $html = view('admin.pdf_page',compact('bg_file_front','rs_user')); 
    $mpdf->WriteHTML($html); 
    $documentUrl = Storage_path() . '/app/download/';  
    @mkdir($documentUrl, 0755, true);  
    $mpdf->Output($documentUrl.'/'.$new_id.'.pdf', 'F');
    
    $rs_user->folder_path='/app/download'.'/'.$new_id; 
    $rs_user->save(); 
    $documentUrl = Storage_path() .$rs_user->folder_path.'.pdf';
    return response()->file($documentUrl);
 
});
