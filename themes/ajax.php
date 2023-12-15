<?php

$email_settingsArr = array();
$email_settings  = email_settings::get_data($email_settingsArr);
if (count($email_settings)) {
    $email_settings = $email_settings[0];
}

if (isset($_POST['request']) && $_POST['request'] == 'contact_us_form') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
        $recaptcha_response = $_POST['recaptcha_response'];

        $data = array(
            'secret' => "6Ldso5ghAAAAAOeC9nGV2Zq1nmFYwN2Z-Sp4Eyre",
            'response' => $recaptcha_response
        );

        $verify = curl_init();
        // curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        // curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $recaptcha = curl_exec($verify);
        $recaptcha = json_decode($recaptcha, true);

        if ($recaptcha["success"] === true) {
            // $ArrData = array(
            //     'title'                    =>    strip_tags($_POST['name']),
            //     'phone'                    =>    strip_tags($_POST['phone']),
            //     'email'                    =>    strip_tags($_POST['email']),
            //     'preffered_date'           =>    strip_tags($_POST['date']),
            //     'address'                  =>    strip_tags($_POST['address']),
            //     'service'                  =>    strip_tags($_POST['service']),
            //     'special_selection'        =>    $special,
            // );
            // contact_us_form_data::add_record($ArrData);

            // $email =     strip_tags($_POST['email']);

            $tableStyle = 'border: 1px solid #ddd;text-align: left; border-colspan: colspan; width: 100%;';
            $tableCellStyle = 'border: 1px solid #ddd;text-align: left; padding: 15px;';
            $tableCellStyler = 'border: 1px solid #ddd;text-align: right; padding: 15px;';
            $tableCellStyleHead = 'border: 1px solid #ddd;text-align: center; padding: 15px;';

            $html = "<table style='" . $tableStyle . "'>
                        <tr>
                            <td style='" . $tableCellStyle . "'>Name</td>                                    
                            <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']) . "</td>                                    
                        </tr>

                        <tr>
                            <td style='" . $tableCellStyle . "'>Phone Number</td>                                    
                            <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['phoneNumber']) . "</td>                                    
                        </tr>

                        <tr>
                            <td style='" . $tableCellStyle . "'>Email</td>                                    
                            <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['emailAddress']) . "</td>                                    
                        </tr>
                       
                        <tr>
                            <td style='" . $tableCellStyle . "'>Service</td>                                    
                            <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['service']) . "</td>                                    
                        </tr>

                        <tr>
                            <td style='" . $tableCellStyle . "'>Message</td>                                    
                            <td style='" . $tableCellStyle . "'>" . strip_tags($_POST['message'], '<br>') . "</td>                                    
                        </tr>
                    </table>
                    
                    <p>Thanks..</p>
                    <p> Rapid Plumbing Group</p>";

            $subject = 'New Contact Form Enquiry';
            $message = $html;
            $to_email = $email_settings['title'];

            if (!empty($_FILES["file"]["name"])) {
                $uploadStatus = 1;

                $targetDir = "uploads/";
                $fileName = basename($_FILES["file"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');

                if (in_array($fileType, $allowTypes)) {
                    $uploadStatus = 1;

                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                        $uploadedFile = $targetFilePath;
                    } else {
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, your file is too large. Please use file size less than 2MB.";
                    }
                } else {
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }



                if ($uploadStatus == 1) {
                    $semi_rand = md5(time());
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
                    $headers = "From:Rapid Plumbing Group <info@rapidplumbinggroup.com.au>" . "\r\n";
                    $headers .= 'Cc: ' . $email_settings['cc_email'] . '' . "\r\n";
                    $headers .= 'Bcc: ' . $email_settings['bcc_email'] . ' ' . "\r\n";
                    $headers .= 'Reply-To: ' . $email . "\r\n";
                    //$headers .= "Bcc: tracking+sps_main_booking@api.aiims.com.au\r\n";
                    $headers .= "MIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

                    $messagea = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                        "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
                    if (is_file($uploadedFile)) {
                        $messagea .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile, "rb");
                        $data =  @fread($fp, filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $messagea .= "Content-Type: application/octet-stream; name=\"" . basename($uploadedFile) . "\"\n" .
                            "Content-Description: " . basename($uploadedFile) . "\n" .
                            "Content-Disposition: attachment;\n" . " filename=\"" . basename($uploadedFile) . "\"; size=" . filesize($uploadedFile) . ";\n" .
                            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                    $messagea .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;
                    $result =  mail($to_email, $subject, $messagea, $headers, $returnpath);
                    @unlink($uploadedFile);
                    echo "success";
                } else {
                    echo $statusMsg;
                }
            } else {
                _send_mail($to_email, $subject, $message, $email_settings['cc_email'], $email_settings['bcc_email'], $email);
                echo "success";
            }
        } else {
            echo 'captchaerror';
        }
    }
}
