<?php
class Payments extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $this->checkVendorIsLoggedIn();
    }

    public function index()
    {
        $txREF  = Hash::create('md5', Session::get('logInAdmin').date("D:M:Y H:i:s"), "transHash");
        
        if ($_POST['amount_in_naira'] >= 500) {
            $flutterWave = new Flutterwave;
            $flutterWave->collectPayment($txREF, Session::get('logInAdmin'), "NGN", trim($_POST['amount_in_naira']));
        } else{
            echo "Invalid Amount Top up";
        }
    }

    public function paymentCallback(){
        // Save transaction history
        // Confirm the transaction

        if (!isset($_GET['txref'])) {
            echo "No Reference Supplied";
        } else{
            $flutterWave = new Flutterwave;
            $txREF          = $_GET['txref'];
            $save           = $flutterWave->verify($txREF);
            $save['vendor'] = Session::get("logInAdmin");
            $newBalance     = $this->userDetails()[0]['wallet'] + $save['charge'] ;
            $status         = $this->model->saveBankTrans("books", $save, $newBalance);
                if ($status == "successful") {
                    header("Location:".ROOT."/vendor/financials?status=completed");
                }
        }
    }


    private function checkVendorIsLoggedIn(){
        if (Session::get("logInAdmin") == "") {
            header("Location:".ROOT."/auth/login");
        }
    }

    private function userDetails()
    {
        return $this->model->getUserDetails('vendor');
    }
}
