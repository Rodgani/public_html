<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vhiclce_request extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }
    function autoabo(){

    $available_date = DateTime::createFromFormat('d/m/Y', $_POST['available_date']);
    if(! is_bool($available_date)){
    $available_date = $available_date->format('Y-m-d');
    } else{
        $available_date = '';
    }
    $datepic = DateTime::createFromFormat('d/m/Y', $_POST['datepic']);
    $datepic = $datepic->format('Y-m-d');
    $data['km']             = $_POST['km'];
    $data['duration']       = $_POST['duration'];
    $data['delivery']       = $_POST['delivery'];
    $data['price']          = $_POST['price'];
    $data['vehicle_id']     = $_POST['vehicle_id'];
    $data['gender']         = $_POST['gender'];
    $data['vorname']        = $_POST['vorname'];
    $data['email']          = $_POST['email'];
    $data['datepic']        = $datepic;
    $data['firma']          = $_POST['firma'];
    $data['nachname']       = $_POST['nachname'];
    $data['telefon_nummer'] = $_POST['telefon_nummer'];
    $data['strasse']        = $_POST['strasse'];
    $data['nr']             = $_POST['nr'];
    $data['adresszusatz']   = $_POST['adresszusatz'];
    $data['postleitzahl']   = $_POST['postleitzahl'];
    $data['ort']            = $_POST['ort'];
    $data['available_date'] = $available_date;
    $data['created_at']     = date('Y-m-d:h:i:s');
    $request_id = $this->Admin_model->insert_table('autoabo_requests',$data);
        if($request_id){
            $_SESSION['request_done'] = $request_id;
            $this->autoabo_new_email_admin($data);
            $this->confirmation_email($data['email'],$data['vorname']);
            redirect('bestaetigung');
        }
    }
        function custom_autoabo(){ 
    $wunschdatum = DateTime::createFromFormat('d/m/Y', $_POST['wunschdatum']);
    $wunschdatum = $wunschdatum->format('Y-m-d');
$data['req_name']                  = $_POST['req_name'];
$data['req_voraname']              = $_POST['req_voraname'];
$data['req_adresse']               = $_POST['req_adresse'];
$data['req_nr']                    = $_POST['req_nr'];
$data['req_plz']                   = $_POST['req_plz'];
$data['req_ort']                   = $_POST['req_ort'];
$data['req_geburtstag']            = $_POST['req_geburtstag'];
$data['req_telefon']               = $_POST['req_telefon'];
$data['email']                     = $_POST['email'];
$data['marke']                     = $_POST['marke'];
$data['typ']                       = $_POST['typ'];
$data['jahrgang']                  = $_POST['jahrgang'];
$data['req_treibstoff']            = $_POST['req_treibstoff'];
$data['req_getriebeart']           = $_POST['req_getriebeart'];
$data['raq_farbe']                 = $_POST['raq_farbe'];
$data['req_mindestlaufzeit']       = $_POST['req_mindestlaufzeit'];
$data['req_kilometer_pro_monate']  = $_POST['req_kilometer_pro_monate'];
$data['req_wunschpreis_pro_monat'] = $_POST['req_wunschpreis_pro_monat'];
$data['wunschdatum']               = $wunschdatum;
$data['created_at']     = date('Y-m-d:h:i:s');
    $request_id = $this->Admin_model->insert_table('custom_requests',$data);
        if($request_id){
            // $this->autoabo_new_custom_request_admin($data);
            echo "requested";
        }
    }
    public function mietemich(){
    $available_date = DateTime::createFromFormat('d/m/Y', $_POST['available_date']);
    if(! is_bool($available_date)){
    $available_date = $available_date->format('Y-m-d');
    }
    else{
        $available_date = '';
    }
    $datepic = DateTime::createFromFormat('d/m/Y', $_POST['datepic']);
    $datepic = $datepic->format('Y-m-d');
    $data['km']             = $_POST['km'];
    $data['duration']       = $_POST['duration'];
    $data['price']          = $_POST['price'];
    $data['vehicle_id']     = $_POST['vehicle_id'];
    $data['gender']         = $_POST['gender'];
    $data['vorname']        = $_POST['vorname'];
    $data['email']          = $_POST['email'];
    $data['datepic']        = $datepic;
    $data['firma']          = $_POST['firma'];
    $data['nachname']       = $_POST['nachname'];
    $data['telefon_nummer'] = $_POST['telefon_nummer'];
    $data['strasse']        = $_POST['strasse'];
    $data['nr']             = $_POST['nr'];
    $data['adresszusatz']   = $_POST['adresszusatz'];
    $data['postleitzahl']   = $_POST['postleitzahl'];
    $data['ort']            = $_POST['ort'];
    $data['available_date'] = $available_date;
    $data['created_at']     = date('Y-m-d:h:i:s');
    $request_id = $this->Admin_model->insert_table('mietemich_requests',$data);
        if($request_id){
            $_SESSION['request_done'] = $request_id;
            $this->mietemich_new_email_admin($data);
            $this->confirmation_email($data['email']);
            redirect('bestaetigung-tagesmiete');
        }
    }
    public function purchaserequests(){
            $images = array();
            $files = $_FILES;
                $count_basic = 0;
            foreach ($_FILES['image']['name'] as $key => $value) {
                if($value != ''){
                    $count_basic++;
                }
            }
         for ($i=0;$i<$count_basic;$i++)
            {
          $_FILES['image'.$i]['name']     = $files['image']['name'][$i];
          $_FILES['image'.$i]['type']     = $files['image']['type'][$i];
          $_FILES['image'.$i]['tmp_name'] = $files['image']['tmp_name'][$i];
          $_FILES['image'.$i]['error']    = $files['image']['error'][$i];
          $_FILES['image'.$i]['size']     = $files['image']['size'][$i];
          $strtotime           = strtotime("now");
          $target_file         = str_replace(' ', '-', $files['image']['name'][$i]);
          $rand_key            = rand(111111,999999);
          $filename =  $rand_key.$strtotime.'_'.$target_file ;
          $config['upload_path']   = './uploads/emails';
          $config['allowed_types'] = '*';
          $config['file_name']     =  $filename;
          $this->load->library( 'upload', $config );
          $this->upload->initialize($config);
          // $this->upload->do_upload('image'.$i);
                if (!$this->upload->do_upload('image'.$i)) {
                    $errors = $this->upload->display_errors();
                    echo $errors;
                }else{
                     $images[] = $filename ;
                }
             }
        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        // SMTP configuration
        $mail->Timeout = 30;
        $mail->isSMTP();
        $mail->Host     = 'lx25.hoststar.hosting';
        // $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->Username = 'autoabo@automobile-wohlensee.ch';
        $mail->Password = 'Starterplus_12';
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;
        $mail->setFrom(OWNER_REPLY_TO, 'automobile-wohlensee');
        $mail->addReplyTo(OWNER_REPLY_TO, 'automobile-wohlensee');
        // Add a recipient
        $mail->addAddress(OWNER_EMAIL);
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->Subject = 'Eine neue Anfrage für den Fahrzeugverkauf';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $this->load->view('sale_mail_template',array(),true);
        foreach ($images as $key => $value) {
            $mail->addStringAttachment(file_get_contents(base_url()."uploads/emails/".$value), $value);
        }        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
    public function autoabo_new_email_admin($data){
        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        // SMTP configuration
        $mail->Timeout = 30;
        $mail->isSMTP();
        $mail->Host     = 'lx25.hoststar.hosting';
        // $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->Username = 'autoabo@automobile-wohlensee.ch';
        $mail->Password = 'Starterplus_12';
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;
        $mail->setFrom(OWNER_REPLY_TO, 'automobile-wohlensee');
        $mail->addReplyTo(OWNER_REPLY_TO, 'automobile-wohlensee');
        // Add a recipient
        $mail->addAddress(OWNER_EMAIL);
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->Subject = 'neue Anforderungen für das monatliche Abonnement';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $this->load->view('autoabo_new_email_admin',$data,true);
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
        public function autoabo_new_custom_request_admin($data){
        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        // SMTP configuration
        $mail->Timeout = 30;
        $mail->isSMTP();
        $mail->SMTPOptions = array(
    'tls' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
        $mail->Host     = 'lx25.hoststar.hosting';
         // $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->Username = 'autoabo@automobile-wohlensee.ch';
        $mail->Password = 'Starterplus_12';
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;
        $mail->setFrom(OWNER_REPLY_TO, 'automobile-wohlensee');
        $mail->addReplyTo(OWNER_REPLY_TO, 'automobile-wohlensee');
        // Add a recipient
        // $mail->addAddress(OWNER_EMAIL);
        $mail->addAddress('rashid.shahzad56@gmail.com');
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->Subject = 'neue Anfrage fur die Sonderanfertigung fur Auto Abo';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $this->load->view('autoabo_new_custom_request_admin',$data,true);
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            // echo 'Message has been sent';
        }
    }
    public function mietemich_new_email_admin($data){
        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        // SMTP configuration
        $mail->Timeout = 30;
        $mail->isSMTP();
        $mail->Host     = 'lx25.hoststar.hosting';
         // $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->Username = 'autoabo@automobile-wohlensee.ch';
        $mail->Password = 'Starterplus_12';
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;
        $mail->setFrom(OWNER_REPLY_TO, 'automobile-wohlensee');
        $mail->addReplyTo(OWNER_REPLY_TO, 'automobile-wohlensee');
        // Add a recipient
        $mail->addAddress(OWNER_EMAIL);
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->Subject = 'neue Anforderungen für die tägliche Miete';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $this->load->view('mietemich_new_email_admin',$data,true);
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
    public function confirmation_email($email){
        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'lx25.hoststar.hosting';
        // $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->Username = 'autoabo@automobile-wohlensee.ch';
        $mail->Password = 'Starterplus_12';
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;
        $mail->setFrom(OWNER_REPLY_TO, 'automobile-wohlensee');
        $mail->addReplyTo(OWNER_REPLY_TO, 'automobile-wohlensee');
        // Add a recipient
        $mail->addAddress($email);
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->Subject = 'Bestätigungs-E-Mail von automobile-wohlensee.ch';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $this->load->view('confirmation_email', $data, true);
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
}//end of controller admin
