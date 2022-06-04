<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vehicle_request extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }

    function promocode_check() {
      if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        return;
      }

      $code = $_POST['promocode'];
      // hour: 23 is unix, because of that: 22 because DST is only +1
      $valid_until = mktime(22,59,59,11,30,2021);
      header('Content-Type: application/json');
      if (strtolower($code) == strtolower('HERBST2021') AND $valid_until > strtotime('now')) {
        echo json_encode(['success' => 'ok']);
      } else {
        http_response_code(400);
        echo json_encode(['error' => 'invalid']);
      }
    }

    function userdata_save() {
      $data = array();
      $data['gender']         = $_POST['gender'];
      $data['vorname']        = $_POST['vorname'];
      $data['email']          = $_POST['email'];
      $data['datepic']        = $_POST['datepic'];
      $data['firma']          = $_POST['firma'];
      $data['nachname']       = $_POST['nachname'];
      $data['telefon_nummer'] = $_POST['telefon_nummer'];
      $data['strasse']        = $_POST['strasse'];
      $data['nr']             = $_POST['nr'];
      $data['adresszusatz']   = $_POST['adresszusatz'];
      $data['postleitzahl']   = $_POST['postleitzahl'];
      $data['ort']            = $_POST['ort'];
      $data['delivery']       = $_POST['delivery']; // is not saved in DB
      $_SESSION['abonnieren_userdata'] = $data;
    }

    function autoabo(){
      if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        return;
      }

    $available_date = DateTime::createFromFormat('d.m.Y', $_POST['available_date']);
    if(! is_bool($available_date)){
    $available_date = $available_date->format('Y-m-d');
    } else {
        $available_date = '';
    }

    $datepic = DateTime::createFromFormat('d.m.Y', $_POST['datepic']);
    if(! is_bool($datepic)) {
      $datepic = $datepic->format('Y-m-d');
    } else {
      $datepic = '';
    }

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
    $data['promocode']      = $_POST['promocode'];
    $data['aufmerksam']     = $_POST['aufmerksam'] . (isset($_POST['aufmerksam_detail']) && !empty($_POST['aufmerksam_detail'])  ? ': ' . $_POST['aufmerksam_detail'] : '');
    $data['created_at']     = date('Y-m-d:h:i:s');
    $request_id = $this->Admin_model->insert_table('autoabo_requests',$data);
        if($request_id){
            $_SESSION['request_done'] = $request_id;
            $vehicle = $this->Admin_model->get_table_row_query("select a.* from autoabo a where a.id = " . $data['vehicle_id'])[0];
            $data['vehicle_data'] = $vehicle;
            $this->autoabo_new_email_admin($data);
            $this->confirmation_email_abo($data['email'],$data);

            unset($_SESSION['abonnieren_userdata']);

            header('Content-Type: application/json');
            echo json_encode(['success' => 'ok']);
            // redirect('bestaetigung');
        }
    }
        function custom_autoabo(){
          if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            return;
          }
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
            $this->autoabo_new_custom_request_admin($data);
            echo "requested";
        }
    }


    public function mietemich(){
      if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        return;
      }

    $available_date = DateTime::createFromFormat('d.m.Y', $_POST['available_date']);
    if(! is_bool($available_date)){
      $available_date = $available_date->format('Y-m-d');
    } else {
      $available_date = '';
    }

    $datepic = DateTime::createFromFormat('d.m.Y', $_POST['datepic']);
    if(! is_bool($datepic)) {
      $datepic = $datepic->format('Y-m-d');
    } else {
      $datepic = '';
    }

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
    $data['promocode']      = isset($_POST['promocode']) ? $_POST['promocode'] : '';
    $data['created_at']     = date('Y-m-d:h:i:s');
    $request_id = $this->Admin_model->insert_table('mietemich_requests',$data);

    $data['delivery']       = $_POST['delivery']; // is not saved in DB
        if($request_id){
            $_SESSION['request_done'] = $request_id;
            $vehicle = $this->Admin_model->get_table_row_query("select a.* from mietemich a where a.id = " . $data['vehicle_id'])[0];
            $data['vehicle_data'] = $vehicle;
            $this->mietemich_new_email_admin($data);
            $this->confirmation_email($data['email'], $data);

            unset($_SESSION['abonnieren_userdata']);

            header('Content-Type: application/json');
            echo json_encode(['success' => 'ok']);
            // redirect('bestaetigung-tagesmiete');
        }
    }
    public function purchaserequests(){
      if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        return;
      }
            $images = array();
            $files = $_FILES;
            $count_basic = 0;
              if (isset($_FILES['image'])) {
                foreach ($_FILES['image']['name'] as $key => $value) {
                  if ($value != '') {
                    $count_basic++;
                  }
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
          $config['upload_path']   = 'uploads/emails';
          $config['allowed_types'] = '*';
          $config['file_name']     =  $filename;
          $this->load->library( 'upload', $config );
          $this->upload->initialize($config);
          // $this->upload->do_upload('image'.$i);
          if (!$this->upload->do_upload('image'.$i)) {
              $errors = $this->upload->display_errors();
              // echo $errors;
              header('Content-Type: application/json');

              http_response_code(400);
              echo json_encode(['error' => 'mail_error', 'message' => $errors]);
              return;
            }else{
                 $images[] = $filename ;
            }
        }
         $data = array();
         $data['automarke'] = $_POST['automarke'];
         $data['modell'] = $_POST['modell'];
         $data['aufbau'] = $_POST['aufbau'];
         $data['farbe'] = $_POST['farbe'];
         $data['inverkehrssetzung'] = $_POST['inverkehrssetzung'];
         $data['kilometerstand'] = $_POST['kilometerstand'];
         $data['treibstoff'] = $_POST['treibstoff'];
         $data['getriebeart'] = $_POST['getriebeart'];
         $data['typenschein'] = $_POST['typenschein'];
         $data['fahrzeugzustand'] = $_POST['fahrzeugzustand'];
         $data['preisvorstellung'] = $_POST['preisvorstellung'];
         $data['name'] = $_POST['name'];
         $data['vorname'] = $_POST['vorname'];
         $data['adresse'] = $_POST['Adresse'];
         $data['plz_ort'] = $_POST['plz_ort'];
         $data['email'] = $_POST['email'];
         $data['telefon'] = $_POST['telefon'];

        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        // SMTP configuration
        $mail->Timeout = 30;
        $mail->isSMTP();
        $mail->Host     = SMTP_HOST;
        // $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = SMTP_PORT;
        $mail->setFrom(SMTP_EMAIL_2, 'Automobile Wohlensee AG');
        $mail->addReplyTo(OWNER_REPLY_TO, 'Automobile Wohlensee AG');
        // Add a recipient
        $mail->addAddress(OWNER_EMAIL_2);
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->CharSet = 'utf-8';
        $mail->Subject = 'Neue Anfrage Fahrzeugankauf';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $this->load->view('sale_mail_template',$data,true);
        $mail->AltBody = $mail->Subject;
        foreach ($images as $key => $value) {
            $mail->addStringAttachment(file_get_contents("uploads/emails/".$value), $value);
        }
        // Send email

        header('Content-Type: application/json');

        if(!$mail->send()){
            http_response_code(400);
            echo json_encode(['error' => 'mail_error', 'message' => $mail->ErrorInfo]);
        } else {
            $this->confirmation_purchaserequest_email($data['email'], $data);

            http_response_code(200);
            echo json_encode(['success' => 'ok']);
        }
    }

    public function autoabo_new_email_admin($data){
        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        // SMTP configuration
        $mail->Timeout = 30;
        $mail->isSMTP();
        $mail->Host     = SMTP_HOST;
        // $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = SMTP_PORT;
        $mail->setFrom(SMTP_EMAIL, 'Automobile Wohlensee AG');
        $mail->addReplyTo(OWNER_REPLY_TO, 'Automobile Wohlensee AG');
        // Add a recipient
        $mail->addAddress(OWNER_EMAIL);
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->CharSet = 'utf-8';
        $mail->Subject = 'Neue Anfrage für das monatliche Abonnement';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $this->load->view('autoabo_new_email_admin',$data,true);
        $mail->AltBody = $mail->Subject;
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
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
        $mail->Host     = SMTP_HOST;
         // $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = SMTP_PORT;
        $mail->setFrom(SMTP_EMAIL, 'Automobile Wohlensee AG');
        $mail->addReplyTo(OWNER_REPLY_TO, 'Automobile Wohlensee AG');
        // Add a recipient
        // $mail->addAddress(OWNER_EMAIL);
        $mail->addAddress(OWNER_EMAIL);
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->CharSet = 'utf-8';
        $mail->Subject = 'Neue Anfrage fur die Sonderanfertigung für Auto Abo';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $this->load->view('autoabo_new_custom_request_admin',$data,true);
        $mail->AltBody = $mail->Subject;
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
    public function mietemich_new_email_admin($data){
        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        // SMTP configuration
        $mail->Timeout = 30;
        $mail->isSMTP();
        $mail->Host     = SMTP_HOST;
         // $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = SMTP_PORT;
        $mail->setFrom(SMTP_EMAIL, 'Automobile Wohlensee AG');
        $mail->addReplyTo(OWNER_REPLY_TO, 'Automobile Wohlensee AG');
        // Add a recipient
        $mail->addAddress(OWNER_EMAIL);
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->CharSet = 'utf-8';
        $mail->Subject = 'Neue Anfrage für die tägliche Miete';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $this->load->view('mietemich_new_email_admin',$data,true);
        $mail->AltBody = $mail->Subject;
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
    public function confirmation_email($email, $data){
        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = SMTP_HOST;
        // $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        // $mail->SMTPSecure = 'tls';
        $mail->Port     = SMTP_PORT;
        $mail->setFrom(SMTP_EMAIL_2, 'Automobile Wohlensee AG');
        $mail->addReplyTo(OWNER_REPLY_TO, 'Automobile Wohlensee AG');
        // Add a recipient
        $mail->addAddress($email);
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // Email subject
        $mail->CharSet = 'utf-8';
        $mail->Subject = 'Miete Bestätigung von automobile-wohlensee.ch';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $this->load->view('confirmation_email', $data, true);
        $mail->AltBody = $mail->Subject;
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

  public function confirmation_email_abo($email, $data){
    $this->load->library("phpmailer_library");
    $mail = $this->phpmailer_library->load();
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host     = SMTP_HOST;
    // $mail->SMTPDebug = true;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USERNAME;
    $mail->Password = SMTP_PASSWORD;
    // $mail->SMTPSecure = 'tls';
    $mail->Port     = SMTP_PORT;
    $mail->setFrom(SMTP_EMAIL_2, 'Automobile Wohlensee AG');
    $mail->addReplyTo(OWNER_REPLY_TO, 'Automobile Wohlensee AG');
    // Add a recipient
    $mail->addAddress($email);
    // Add cc or bcc
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    // Email subject
    $mail->CharSet = 'utf-8';
    $mail->Subject = 'Auto-Abo Bestätigung von automobile-wohlensee.ch';
    // Set email format to HTML
    $mail->isHTML(true);
    // Email body content
    $mail->Body = $this->load->view('confirmation_email_abo', $data, true);
    $mail->AltBody = $mail->Subject;
    // Send email
    if(!$mail->send()){
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
  }

  public function confirmation_purchaserequest_email($email, $data){
    $this->load->library("phpmailer_library");
    $mail = $this->phpmailer_library->load();
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host     = SMTP_HOST;
    // $mail->SMTPDebug = true;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USERNAME;
    $mail->Password = SMTP_PASSWORD;
    // $mail->SMTPSecure = 'tls';
    $mail->Port     = SMTP_PORT;
    $mail->setFrom(SMTP_EMAIL_2, 'Automobile Wohlensee AG');
    $mail->addReplyTo(OWNER_REPLY_TO, 'Automobile Wohlensee AG');
    // Add a recipient
    $mail->addAddress($email);
    // Add cc or bcc
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    // Email subject
    $mail->CharSet = 'utf-8';
    $mail->Subject = 'Bestätigung Fahrzeugankauf von automobile-wohlensee.ch';
    // Set email format to HTML
    $mail->isHTML(true);
    // Email body content
    $mail->Body = $this->load->view('confirmation_purchaserequest_email', $data, true);
    $mail->AltBody = $mail->Subject;
    // Send email
    if(!$mail->send()){
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
  }
}//end of controller admin
