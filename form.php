<?php
    $errors = [];

    if(!empty($_POST)){
        $name = $_POST['iname'];
        $company = $_POST['icompany'];
        $subject = $_POST['isub'];
        $email = $_POST['iemail'];
        $content = $_POST['icontent'];

        if(empty($name)){
            $errors[] = 'Name is Empty';
        }

        if(empty($company)){
            $errors[] = 'Company is Empty';
        }

        if(empty($subject)){
            $errors[] = 'Subject is Empty';
        }

        if(empty($email)){
            $errors[] = 'Email is Empty';
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email is invalid';
        }

        if(empty($content)){
            $errors[] = 'Content is Empty';
        }

        if(empty($errors)){
            $toEmail = 'scottmtinez@gmail.com';
            $emailSubject = 'Someone is trying to contact you from you portfolio!';
            $headers = ['From' => $email, 'Reply-To' => $email, 'Content-Type' => 'text/html; charset=utf-8'];
            $bodyParagraphs = ["Name: {$name}", "Company: {$company}", "Subject: {$subject}", "Email: {$email}", "Content: {$content}"];
            $body = join(PHP_EOL, $bodyParagraphs);

            if (mail($toEmail, $emailSubject, $body, $headers)) {
                header('Location: thank-you.html');
            } else {
                $errorMessage = 'Oops, something went wrong. Please try again later';
            }
        }else{
            $allErrors = join('<br/>', $errors);
            $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
        }

        
    }
?>