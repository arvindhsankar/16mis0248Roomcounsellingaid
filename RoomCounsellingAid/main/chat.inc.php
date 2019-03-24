<?php
// simple chat class
class SimpleChat {

    // DB variables
    var $sDbName;
    var $sDbUser;
    var $sDbPass;

    // constructor
    function SimpleChat() {
        //mysql_connect("localhost","username","password");
        $this->sDbName = 'dbname';
        $this->sDbUser = 'root';
        $this->sDbPass = '';
    }

    // adding to DB table posted message
    function acceptMessages() {
        if ($_COOKIE['member_name']) 
        {
            if(isset($_POST['s_say']) && $_POST['s_message']) 
            {
                $sUsername = $_COOKIE['member_name'];

                //the host, name, and password for your mysql
                $vLink = mysqli_connect("localhost", $this->sDbUser, $this->sDbPass,$this->sDbName);

                //select the database
                //mysql_select_db($this->sDbName);

                $sMessage = mysqli_real_escape_string($vLink,$_POST['s_message']);
                $sMessages=hash_hmac('ripemd160', $sMessage, 'secret');
                $inputKey = "My text to encrypt";
                $blockSize = 256;
                require "aes.php";
                $aes = new AES($sMessage, $inputKey, $blockSize);
                $enc = $aes->encrypt();
                $aes->setData($enc);
                $dec=$aes->decrypt();
                if ($sMessage != '')
                {

                    mysqli_query($vLink,"INSERT INTO `enc_message` SET `user`='{$sUsername}', `hashmessage`='{$sMessages}',`enmessage`='{$enc}', `whenat`=UNIX_TIMESTAMP()");
                    mysqli_query($vLink,"INSERT INTO `dec_message` SET `user`='{$sUsername}', `hashmessage`='{$sMessages}',`demessage`='{$dec}', `whenat`=UNIX_TIMESTAMP()");
    
                }
                
                
                mysqli_close($vLink);
            }
        }

        ob_start();
        require_once('chat_input.html');
        $sShoutboxForm = ob_get_clean();

        return $sShoutboxForm;
    }

    function getMessages() {
        
        $vLink = mysqli_connect("localhost", $this->sDbUser, $this->sDbPass,$this->sDbName);

        //select the database
       // mysql_select_db($this->sDbName);


        //returning the last 15 messages
        $vRes = mysqli_query($vLink,"SELECT * FROM `dec_message` ORDER BY `id` ASC LIMIT 15 ");

        $sMessages = '';

        // collecting list of messages
        
        if ($vRes) {
            while($aMessages = mysqli_fetch_array($vRes)) {
                $sWhen = date("H:i:s", $aMessages['whenat']);
                
                $message=$aMessages['demessage'];
                $hmessage=$aMessages['hashmessage'];
                $msg=hash_hmac('ripemd160', $message, 'secret');
                if($msg==$hmessage){
                    $sMessages .= '<div class="message">' . $aMessages['user'] . ': ' . $aMessages['demessage'] . '<span>(' . $sWhen . ')</span>'.'<span>your message is secured!</span></div>';
                
                }
                
            }
        } else {
            $sMessages = 'DB error, create SQL table before';
        }
        


        mysqli_close($vLink);

        ob_start();
        require_once('chat_begin.html');
        echo $sMessages;
        require_once('chat_end.html');
        return ob_get_clean();
    }
    
}

?>