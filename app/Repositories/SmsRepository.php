<?php namespace Modelbook\Repositories;

use GuzzleHttp\Client as Guzzle;
use Laracasts\Flash\Flash;
use Modelbook\Senders\smsGateway;
use Modelbook\Senders\UserMailer;
use Modelbook\User;

class SmsRepository {

    /**
     * @var UserMailer
     */
    private $mailer;

    /**
     * Create the event handler.
     *
     * @param UserMailer $mailer
     */
    public function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;

    }

    public function checkCarrier($phone)
    {
        $client = new Guzzle();
        $response = $client->get('http://sms.lv',[
            'query'=>[
                'x'=>env('SMSLV_KEY'),
                'num'=>$phone,
                'ajax'=>1
            ]
        ]);
        $result = $response->getBody();
        $carier = preg_match('/alert\(\s*"(.+?)"\s*\)/', $result, $matches);
       dd( $carier );
    }

    public function sendWellcomeSmsWithPasswordToRegistredUser(User $user, $password)
    {
        $smsGateway = new SmsGateway(env('SMS_GATEWAY_EMAIL'), env('SMS_GATEWAY_PW'));
        $user_first_last_name = $user->user_firstname . ' ' . $user->user_lastname;
        $smsGateway->createContact($user_first_last_name,  $user->user_phone);
        $data[] = [
            'device' => $this->getSmsGatewayDeviceIdBasedOnCarrier($user, $password),
            'number' => $user->user_phone,
            'message' => $user->user_firstname . '! Wellcome to gomodel.es your registration have been sucesful! Please replay us back to this SMS with your email address, to confirm your emails, mobile phone number.',
        ];

        $data[] = [
            'device' => $this->getSmsGatewayDeviceIdBasedOnCarrier($user, $password),
            'number' => $user->user_phone,
            'message' => 'Login in to your profile using thea'.'s' . ' credentials. Email:' . $user->email . ' Password:' . $password . ' Your gomodel.es team!',
        ];

        $data[] = [
            'device' => $this->getSmsGatewayDeviceIdBasedOnCarrier($user, $password),
            'number' => $user->user_phone,
            'message' => 'You can save this number as gomodel.es so you know next time from who these messages are! gomodel.es super-team!',
            'send_at' => strtotime('+1 minutes'),
        ];
        $result = $smsGateway->sendManyMessages($data);
        if ($this->getSmsGatewayDeviceIdBasedOnCarrier($user, $password) == false)
        {
            $this->mailer->sendWelcomeEmailTo($user, $password);
            Flash::success('You have registred! Your login credentials have been sent to your e-mail');
        } else {
            Flash::success('You have registred! Your login credentials will be sent to your mobile phone number');
        }

    }

    public function getSmsGatewayDeviceIdBasedOnCarrier(User $user, $password)
    {
        $carrier = $this->checkCarrier($user->user_phone);

        switch ($carrier) {
            case 'Latvijas Mobilais Telefons':
                return 6507;
                break;
            case 'Tele2':
                return 6507;
                break;
            case 'BITE Latvija':
                return 6507;
                break;
            default:
                return false;
        }
    }
}