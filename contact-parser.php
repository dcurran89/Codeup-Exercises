<?php

function parseContacts($filename)
{
    // todo - read file and parse contacts
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contacts = explode("\n", $contents);
    array_pop($contacts);
    
    foreach($contacts as $index => $contact){
        $info = explode("|", $contact);
        $info['name'] = $info[0];
        unset($info[0]);
        $info['number'] = $info[1];
        unset($info[1]);
        $number = $info['number'];
        if(ctype_digit($number) && strlen($number) == 10) {
          $number = substr($number, 0, 3) .'-'.
                    substr($number, 3, 3) .'-'.
                    substr($number, 6);
        }
        $info['number'] = $number;
        $contacts[$index] = $info;
    }

    fclose($handle);
    return $contacts;
}
var_dump(parseContacts('contacts.txt'));
