<?php namespace Modelbook\Http\Controllers;
use Illuminate\Http\Request;
use Modelbook\Senders\smsGateway;

class SmsController extends Controller {

    /**
     * Display a listing of the resource.
     * GET /smscontreoller
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.sms.send');
    }
    
    public function indexContacts()
    {
        $username = getenv('SMS_GATEWAY_EMAIL');
        $password = getenv('SMS_GATEWAY_PW');
        $smsGateway = new SmsGateway($username, $password);
        $page = 1;
        $result = $smsGateway->getContacts($page);
        return view('pages.sms.indexContacts', $result);
    }

    public function store(Request $request)

    {
        $smsmessage = $request->input('smsmessage');
        $zaiga = 7889;
        $rolands = 6507;
        $deviceID = $rolands;
        $uzruna = $request->input('uzruna');
        $username = getenv('SMS_GATEWAY_EMAIL');
        $password = getenv('SMS_GATEWAY_PW');

        $smsGateway = new smsGateway($username, $password);

        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37126279947',
            'message' => $uzruna.' Ieva! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37127083140',
            'message' => $uzruna.' Tom! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37125122321',
            'message' => $uzruna.' Mārtiņ! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37129742219',
            'message' => $uzruna.' Lauriņ! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37122047741',
            'message' => $uzruna.' māsa Zaiga! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37127094505',
            'message' => $uzruna.' Zane! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37127083121',
            'message' => $uzruna.' Maikl! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37126275237',
            'message' => $uzruna.' Madariņ! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37129748146',
            'message' => $uzruna.' Ditiņ! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37127587226',
            'message' => $uzruna.' Artūr un Linda! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37120209969',
            'message' => $uzruna.' Kristiāna! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37125932121',
            'message' => $uzruna.' Lienīt! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37122819078',
            'message' => $uzruna.' Jāni! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37128774573',
            'message' => $uzruna.' mīļā sieviņa! '.$smsmessage,
        ];
        $data[] = [
            'device' =>  $deviceID,
            'number' => '+37127831183',
            'message' => $uzruna.' Roland! '.$smsmessage,
        ];

        $result = $smsGateway->sendManyMessages($data);
       // $truth = json_decode($smsGateway->sendManyMessages($data),true);

        flash()->success($result['response']['result']['success'][0]['message'] . ' SMS veiksmīgi tika nosūtīts');
        return view('pages.sms.send');
    }


}
