<?php

function parseContacts($filename)
{
  $contacts = [];
    $fileName = 'contacts.txt';
    $handle = fopen($filename,'r');
    $contents = fread($handle, filesize($filename));
    $contentsOfArray = explode("\n",trim($contents));

    foreach ($contentsOfArray as $key => $content){
      $contactString = explode("|",$content);
      $contacts[$key]['name'] = $contactString[0];
      $phoneNumber = substr($contactString[1],0,3)."-".substr($contactString[1],4,3)."-".substr($contactString[1],-4);
      $contacts[$key]['number'] = $phoneNumber;
    }
    fclose($handle);
    return $contacts;

}


var_dump(parseContacts('contacts.txt'));
