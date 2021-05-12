<?php

class CustomException extends Exception {
    public function errorMessage() {
 return 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';    }
}
$email  = "someone@example..com";
try {
    if (!filter_var($email, FILTER_VAIDATE_EMAIL)) {
        throw new CustomException($email);

    }
} catch (CustomException $e) {
    echo $e->errorMessage();
}
